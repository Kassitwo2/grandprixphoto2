<?php


namespace App\Http\Controllers;

use App\Exports\UserExport;
use App\Mail\emailCategorieRejetee;
use App\Mail\emailLargeurEtLangeurRejetee;
use App\Mail\emailSujetRejetee;
use App\Mail\ParticipationApprouvee;
use App\Mail\ParticipationRegetee;
use App\Models\Admin;
use App\Models\Categorie;
use App\Models\Jury;
use App\Models\Participation;
use App\Models\Presence;
use App\Models\Rating;
use App\Models\User;
use App\Models\Ville;
use App\Models\Region;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Inertia\Inertia;
use Maatwebsite\Excel\Facades\Excel;
use PHPExif\Reader\Reader;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Mail;
use Intervention\Image\ImageManager;
use Intervention\Image\Drivers\Gd\Driver;
use Illuminate\Support\Facades\Storage;
use PhpOffice\PhpSpreadsheet\Calculation\Category;

class AdminController extends Controller
{
    //


    public function index()
    {
        $userCount = User::count(); // Get the count of users
        $users = User::all();

        // Get all categories
        $categories = Categorie::all();

        // Get the count of participations per category ID
        $participationsCountByCategory = Participation::select('category_id', \DB::raw('count(*) as count'))
            ->groupBy('category_id')
            ->get();

        // Initialize an array to hold participation counts for all categories
        $participationsByCategory = [];

        // Loop through all categories
        foreach ($categories as $category) {
            // Check if there is a count for this category
            $count = $participationsCountByCategory->where('category_id', $category->id)->first();
            // If count exists, use it; otherwise, set count to 0
            $participationsByCategory[$category->name] = $count ? $count->count : 0;
        }

        // Get the count of users for each social type
        $usersCountBySocialType = User::select('social_type', \DB::raw('count(*) as count'))
            ->groupBy('social_type')
            ->get();

        // Convert the collection to an associative array
        //$usersCountBySocialType = $usersCountBySocialType->pluck('count', 'social_type')->toArray();
        $userCountGoogle = User::where('social_type','google')->count(); // Get the count of users
        $userCountFacebook = User::where('social_type','facebook')->count(); // Get the count of users

        return Inertia::render('Admin/Dashboard', [
            'users' => $users,
            'userCount' => $userCount,
            'participationsByCategory' => $participationsByCategory,
            'userCountGoogle' => $userCountGoogle,
            'userCountFacebook' => $userCountFacebook

        ]);

/*         return Inertia::render('Admin/Participations', [
            // Additional data to pass to the component if needed
        ]); */
    }


    public function get_ratings(Request $request)
    {
        $participations = Participation::with(['ratings.jury', 'categorie'])
                            ->where('is_conforme','=', 1)
                            ->get();

        $juries = Jury::with('ratings')->get();
        $countJuries = Jury::count();

        $admins = Admin::with('ratings')->where('id','=', auth()->id())->get();

        return view('admin.ratings', [
            'participations' => $participations,
            'juries' => $juries,
            'countJuries' => $countJuries,
            'admins'=> $admins,
        ]);
    }

    public function storeRating(Request $request, $participationId)
    {

        $validatedData = $request->validate([
            'rating' => 'required|integer|min:1|max:5',
        ]);

        $juryId = auth()->id(); // Assuming you are using authentication

        // Check if the user has already rated the product
        $existingRating = Rating::where('participation_id', $participationId)
                                       ->where('jury_id', $juryId)
                                       ->first();

        if ($existingRating) {
            // User has already rated the product, update the rating
            $existingRating->rating = $validatedData['rating'];
            $existingRating->save();
            return response()->json(['message' => 'Rating updated successfully']);
        } else {

            // Save the rating to the database
            // Assuming you have a ProductRating model
            $participationRating = new Rating();
            $participationRating->participation_id = $participationId;
            $participationRating->jury_id = auth()->id(); // Assuming you are using authentication
            $participationRating->rating = $validatedData['rating'];
            $participationRating->save();

            return response()->json(['message' => 'Rating added successfully']);
        }

       // return response()->json(['message' => 'Rating saved successfully']);
    }

    public function updateRating(Request $request, $id)
        {
            $validatedData = $request->validate([
                'rating' => 'required|numeric|min:1|max:5',
            ]);

            $rating = Rating::findOrFail($id);

            $rating->rating = $validatedData['rating'];
            $success = $rating->update();

            if ($success) {
                return response()->json(['success' => true]);
            } else {
                return response()->json(['success' => false]);
            }
        }

    public function destroyRating($id)
    {
        $rating = Rating::findOrFail($id);

        $success = $rating->delete();

        if ($success) {
            return response()->json(['success' => true]);
        } else {
            return response()->json(['success' => false]);
        }
    }

    public function get_users(Request $request)
    {
        $users = User::with('ville')->get();
        return view('admin.users', [
            'users' => $users,
        ]);
    }


    public function get_participations(Request $request){
        $participations = Participation::with('categorie')->get();
        return view('Admin/Participations', [
            'participations' => $participations,
        ]);
    }

    public function get_participationsToConferme(Request $request)
    {

        $participationsCount = Participation::count(); // Get the count of users



        $participationsCountByCentrerBallon = Participation::where('category_id',7)->count(); // Get the count of users
        $participationsCountByZellige= Participation::where('category_id',8)->count(); // Get the count of users
        $participationsCountByLumière = Participation::where('category_id',9)->count(); // Get the count of users



        $countsByProfileAmateur = Participation::distinct('user_id')
        ->join('users', 'participations.user_id', '=', 'users.id')
        ->where('users.profile','=','Amateur')
        ->count();




        $countsByProfileProfessionnel = Participation::distinct('user_id')
        ->join('users', 'participations.user_id', '=', 'users.id')
        ->where('users.profile','=','Professionnel')
        ->count();



        $totalParticipants = Participation::distinct('user_id')->count();



        $totalParticipantsFemme = Participation::distinct('user_id')->join('users', 'participations.user_id', '=', 'users.id')
        ->where('users.sexe','=','femme')
        ->count();



        $totalParticipantsHomme = Participation::distinct('user_id')->join('users', 'participations.user_id', '=', 'users.id')
        ->where('users.sexe','=','homme')
        ->count();




        $participations = Participation::with('categorie')->where('is_conforme',0)->paginate(12);
        $participationsApprouve = Participation::with('categorie')->where('is_conforme',1)->paginate(12);
        $participationsRefuse = Participation::with('categorie')->where('is_conforme',-1)->paginate(12);






        $countParticipationsStandBy = Participation::where('is_conforme',0)->count();
        $countParticipationsApprouve = Participation::where('is_conforme',1)->count();
        $countParticipationsRefuse = Participation::where('is_conforme',-1)->count();


        $countParticipantsStandBy = DB::table('participations')
        ->where('is_conforme', 0)
        ->distinct('user_id')
        ->count('user_id');

        $countParticipantsApprouvées = DB::table('participations')
        ->where('is_conforme', 1)
        ->distinct('user_id')
        ->count('user_id');


        $countParticipantsRejetes = DB::table('participations')
        ->where('is_conforme', -1)
        ->distinct('user_id')
        ->count('user_id');

        return view('admin.participations-confirmation', [
            'participations' => $participations,
            'countsByProfileProfessionnel'=>$countsByProfileProfessionnel,
            'countsByProfileAmateur'=>$countsByProfileAmateur,
            'participationsCountByCentrerBallon'=>$participationsCountByCentrerBallon,
            'participationsCountByZellige'=>$participationsCountByZellige,
            'participationsCountByLumière'=>$participationsCountByLumière,    
            'totalParticipants' => $totalParticipants,
            'totalParticipantsFemme'=> $totalParticipantsFemme,
            'totalParticipantsHomme'=> $totalParticipantsHomme,
            'participationsCount' => $participationsCount,
            'participationsRefuse'=> $participationsRefuse,
            'participationsApprouve'=> $participationsApprouve,
            'countParticipationsStandBy'=>$countParticipationsStandBy,
            'countParticipationsApprouve'=>$countParticipationsApprouve,
            'countParticipationsRefuse'=>$countParticipationsRefuse,
            'countParticipantsStandBy'=>$countParticipantsStandBy,
            'countParticipantsApprouvées' => $countParticipantsApprouvées,
            'countParticipantsRejetes'=>$countParticipantsRejetes



        ]);
    }



    public function participationRefuse(){

        $participations = Participation::with('categorie')->where('is_conforme',0)->paginate(12);
        $participationsApprouve = Participation::with('categorie')->where('is_conforme',1)->paginate(12);
        $participationsRefuse = Participation::with('categorie')->where('is_conforme',-1)->paginate(12);


        $participationsCountByCentrerBallon = Participation::where('category_id', 7)
        ->where('is_conforme',-1)
        ->count(); // Get the count of users

        $participationsCountByZellige = Participation::where('category_id', 8)
        ->where('is_conforme',-1)
        ->count(); // Get the count of users


        $participationsCountByLumière = Participation::where('category_id', 9)
        ->where('is_conforme',-1)
        ->count(); // Get the count of users

        $countParticipationsStandBy = Participation::where('is_conforme',0)->count();
        $countParticipationsApprouve = Participation::where('is_conforme',1)->count();
        $countParticipationsRefuse = Participation::where('is_conforme',-1)->count();


        $countParticipantsStandBy = DB::table('participations')
        ->where('is_conforme', 0)
        ->distinct('user_id')
        ->count('user_id');

        $countParticipantsApprouvées = DB::table('participations')
        ->where('is_conforme', 1)
        ->distinct('user_id')
        ->count('user_id');


        $countParticipantsRejetes = DB::table('participations')
        ->where('is_conforme', -1)
        ->distinct('user_id')
        ->count('user_id');


        return view('admin.participationsRefuse', [
            'participations' => $participations,
            'participationsRefuse'=> $participationsRefuse,
            'participationsApprouve'=> $participationsApprouve,
            'countParticipationsStandBy'=>$countParticipationsStandBy,
            'countParticipationsApprouve'=>$countParticipationsApprouve,
            'countParticipationsRefuse'=>$countParticipationsRefuse,
            'countParticipantsStandBy'=>$countParticipantsStandBy,
            'countParticipantsApprouvées' => $countParticipantsApprouvées,
            'countParticipantsRejetes'=>$countParticipantsRejetes,
            'participationsCountByCentrerBallon'=>$participationsCountByCentrerBallon,
            'participationsCountByZellige'=>$participationsCountByZellige,
            'participationsCountByLumière'=>$participationsCountByLumière
        ]);
    }

    public function participationsApprouve(){

        $participations = Participation::with('categorie')->where('is_conforme',0)->paginate(12);
        $participationsApprouve = Participation::with('categorie')->where('is_conforme',1)->paginate(12);
        $participationsRefuse = Participation::with('categorie')->where('is_conforme',-1)->paginate(12);

        $countParticipationsStandBy = Participation::where('is_conforme',0)->count();
        $countParticipationsApprouve = Participation::where('is_conforme',1)->count();
        $countParticipationsRefuse = Participation::where('is_conforme',-1)->count();

        $participationsCountByCentrerBallon = Participation::where('category_id', 7)
        ->where('is_conforme',1)
        ->count(); // Get the count of users

        $participationsCountByZellige = Participation::where('category_id', 8)
        ->where('is_conforme',1)
        ->count(); // Get the count of users


        $participationsCountByLumière = Participation::where('category_id', 9)
        ->where('is_conforme',1)
        ->count(); // Get the count of users


        $countParticipantsStandBy = DB::table('participations')
        ->where('is_conforme', 0)
        ->distinct('user_id')
        ->count('user_id');

        $countParticipantsApprouvées = DB::table('participations')
        ->where('is_conforme', 1)
        ->distinct('user_id')
        ->count('user_id');


        $countParticipantsRejetes = DB::table('participations')
        ->where('is_conforme', -1)
        ->distinct('user_id')
        ->count('user_id');



        return view('admin.participationsApprouve', [
            'participations' => $participations,
            'participationsRefuse'=> $participationsRefuse,
            'participationsApprouve'=> $participationsApprouve,
            'countParticipationsStandBy'=>$countParticipationsStandBy,
            'countParticipationsApprouve'=>$countParticipationsApprouve,
            'countParticipationsRefuse'=>$countParticipationsRefuse,
            'countParticipantsStandBy'=>$countParticipantsStandBy,
            'countParticipantsApprouvées' => $countParticipantsApprouvées,
            'countParticipantsRejetes'=> $countParticipantsRejetes,
            'participationsCountByCentrerBallon'=> $participationsCountByCentrerBallon,
            'participationsCountByZellige'=> $participationsCountByZellige,
            'participationsCountByLumière'=> $participationsCountByLumière
        ]);
    }
    
    public function show($id)
    {
        $participation = Participation::findOrFail($id);

        $image = $participation->image;



         return Inertia::render('Admin/Participation_details',
         [
            'participation' => $participation,
            //'exif' =>  exif_read_data($image),


        ]);
    }



    public function pagination(Request $request){

        $users = User::latest()->paginate(20);
        return view('pagination_users',compact('users'))->render();
    }


    public function juries(){

        $juries = Jury::latest()->paginate(10);

        return view('admin.juries',compact('juries'))->render();
    }

    public function storeJury(Request $request)
    {
        $validatedData = $request->validate([
            'name' => 'required',
            'email' => 'required|email',
            'password' => 'required|min:6',
        ]);

        $jury = Jury::create($validatedData);

        return response()->json(['success' => true, 'customer' => $jury]);
    }

    public function get_user_data()
    {
        return Excel::download(new UserExport, 'user.xlsx');
    }


    public function updateJury(Request $request)
    {

        //dd($request->id);
        // Validate incoming request data
        $validatedData = $request->validate([
            'id' => 'required', // Assuming 'id' is required for the update
            'name' => 'required',
            'email' => 'required|email',
            'password' => 'required|min:6',
        ]);

        // Retrieve the jury object to update
        $jury = Jury::findOrFail($validatedData['id']);

        // Update the jury object with the validated data
        $jury->name = $validatedData['name'];
        $jury->email = $validatedData['email'];
        $jury->password = bcrypt($validatedData['password']); // Hash the password for security

        // Save the updated jury object
        $jury->save();

        // Optionally, you can return a response indicating success
        return response()->json(['success' => true]);

    }


    public function ajaxDestroy(Request $request, Jury $jury)
    {
        $jury->delete();

        return response()->json(['success' => true]);
    }


    public function confirmation(Request $request)
    {
        // Find the participation record
        $participation = Participation::findOrFail($request->id);
        $user = User::findOrFail($participation->user_id);
        $image = $participation->image;

        

        // Helper function to send email and handle exceptions
        function sendEmail($user, $mailable) {
            try {
                Mail::to($user->email)->send($mailable);
            } catch (\Exception $e) {
                return response()->json(['success' => false, 'message' => 'Failed to send confirmation email.']);
            }
        }


        // Determine action based on category
        if ($request->is_categorie == 0) {
            $participation->motif = 'Approuvee';

            // Define source and destination paths
            $sourcePath = 'public/'.$image; // Path relative to the disk root
            $destinationPath ='public/uploads/images/approuvee/'. $image;
            // Check if the file exists at the source path
            if (Storage::exists($sourcePath)){
                // Move the file to the new location
                Storage::move($sourcePath, $destinationPath);
                // Send the email after moving the file
                sendEmail($user, new ParticipationApprouvee(image: $image));
                $participation->update([
                    'is_conforme' => $request->is_conforme
                ]);
                return 'File moved successfully!';
            } else {
                return 'Source file does not exist.';
            }
        }  elseif ($request->is_categorie == -1) {


            // Define source and destination paths
            $sourcePath  ='public/uploads/images/approuvee/'. $image; // Path relative to the disk root
            $destinationPath = 'public/'.$image; 

            if (Storage::exists($sourcePath)){

                // Check if the file exists at the source path
                $participation->motif = 'Hors categorie';
                // Move the file to the new location
                Storage::move($sourcePath, $destinationPath);

                // Send the email after moving the file
                sendEmail($user, new emailSujetRejetee($image));
                $participation->update([
                    'is_conforme' => $request->is_conforme
                ]);

            }else{

                // Check if the file exists at the source path
                $participation->motif = 'Hors categorie';

                // Send the email after moving the file
                sendEmail($user, new emailSujetRejetee($image));
                $participation->update([
                    'is_conforme' => $request->is_conforme
                ]);

            }


            
            
        } elseif ($request->is_categorie == 1) {


            // Define source and destination paths
            $sourcePath  ='public/uploads/images/approuvee/'. $image; // Path relative to the disk root
            $destinationPath = 'public/'.$image; 

            if (Storage::exists($sourcePath)){

                // Check if the file exists at the source path
                $participation->motif = 'Changer la categorie';

                // Move the file to the new location
                Storage::move($sourcePath, $destinationPath);

                // Send the email after moving the file
                sendEmail($user, new emailCategorieRejetee($image));
                $participation->update([
                    'is_conforme' => $request->is_conforme
                ]);

            }else{

                // Check if the file exists at the source path
                $participation->motif = 'Changer la categorie';
                // Send the email after moving the file
                sendEmail($user, new emailCategorieRejetee($image));
                $participation->update([
                    'is_conforme' => $request->is_conforme
                ]);

            }







            
            
        } elseif ($request->is_categorie == 2) {
            $participation->motif = 'Hort largeur et langeur';

            // Check if the image file exists
            if (file_exists(public_path('storage/' . $image))) {
                $imagePath = public_path('storage/' . $image);
                $exifData = @exif_read_data($imagePath);

                // Extract EXIF data
                $width = $exifData['COMPUTED']['Width'] ?? 'NULL';
                $height = $exifData['COMPUTED']['Height'] ?? 'NULL';
                $widthAndHeight = ($width !== 'NULL' && $height !== 'NULL') ? $width . '/' . $height : 'NULL';

                $fileSize = $exifData['FileSize'] ?? null;
                $volume = $fileSize ? round($fileSize / (1024 * 1024), 2) : 'NULL';

                $xResolution = isset($exifData['XResolution']) ? explode('/', $exifData['XResolution'])[0] : 'NULL';
                $yResolution = isset($exifData['YResolution']) ? explode('/', $exifData['YResolution'])[0] : 'NULL';
                $dpi = ($xResolution !== 'NULL' && $yResolution !== 'NULL') ? $xResolution . '/' . $yResolution : 'NULL';

                sendEmail($user, new emailLargeurEtLangeurRejetee($image, $dpi, $volume, $widthAndHeight));
            } else {
                return response()->json(['success' => false, 'message' => 'Image file does not exist.']);
            }
        } else {
            $participation->motif = 'Approuvee';
            sendEmail($user, new ParticipationApprouvee($image));
        }

        // Update the participation record
        $participation->update([
            'is_conforme' => $request->is_conforme
        ]);

        return response()->json(['success' => true, 'message' => 'Participation successfully updated.']);
    }



    public function get_presences(){

        $presences = Presence::all();
        return view('admin.presenceFormation',
            [
                'presences'=>$presences,
            ]
        );
    }



    public function admins(){


        $admins = Admin::latest()->paginate(10);

        return view('admin.admins',compact('admins'))->render();
    }

    public function storeAdmin(Request $request)
    {
        $validatedData = $request->validate([
            'name' => 'required',
            'email' => 'required|email',
            'password' => 'required|min:6',
            'is_Admin' => 'required'
        ]);


        //$admin = Admin::create($validatedData);

        $admin = new Admin();

        $admin->name = $validatedData['name'];
        $admin->email = $validatedData['email'];
        $admin->password = $validatedData['password'];
        $admin->is_Admin = $validatedData['is_Admin'];
        $admin->save();

        return response()->json(['success' => true, 'admin' => $admin]);

    }




    public function updateAdmin(Request $request)
    {

        //dd($request->id);
        // Validate incoming request data
        $validatedData = $request->validate([
            'id' => 'required', // Assuming 'id' is required for the update
            'name' => 'required',
            'email' => 'required|email',
            'password' => 'required|min:6',
        ]);

        // Retrieve the jury object to update
        $admin = Admin::findOrFail($validatedData['id']);

        // Update the jury object with the validated data
        $admin->name = $validatedData['name'];
        $admin->email = $validatedData['email'];
        $admin->password = bcrypt($validatedData['password']); // Hash the password for security

        // Save the updated admin object
        $admin->save();

        // Optionally, you can return a response indicating success
        return response()->json(['success' => true]);

    }



    public function adminDestroy(Request $request, Admin $admin)
    {
        $admin->delete();

        return response()->json(['success' => true]);
    }


    public function search(Request $request)
    {
        $searchTerm = $request->input('search');

        $juries = Jury::where('name', 'like', "%{$searchTerm}%")
                      ->orWhere('email', 'like', "%{$searchTerm}%")
                      ->orderBy('created_at', 'desc')
                      ->get();

        return response()->json($juries);
    }



    public function navigation(){

        $participations = Participation::Where('is_conforme','1')->orderBy('id')->get();
        return view('admin.navigation', compact('participations'))->with('participations', $participations);
    }

    public function next($id)
    {
        $participations = Participation::where('id', '>', $id)->orderBy('id')->first();
        return response()->json($participations);
    }

    public function previous($id)
    {
        $participations = Participation::where('id', '<', $id)->orderByDesc('id')->first();
        return response()->json($participations);
    }


    public function onlyDarem(){


        $users = User::has('participations')->with('participations')->get();

        $userCountsParRegions = User::join('villes', 'villes.id', '=', 'users.ville_id')
        ->select('users.*', 'villes.name AS ville')
        ->where('villes.id','=', 122)
        ->get();


        return view('admin.onlyDarem', [
            'userCountsParRegions' => $userCountsParRegions,
            'users' => $users,
        ]);

    }




    public function getvilles(Request $request)
    {
        $search = $request->input('search');
        $selectedRegion = $request->input('region');
        
        // Charger les régions pour le filtre
        $regions = \App\Models\Region::all();
    
        // Fonction pour appliquer le filtre de recherche et de région
        $filterQuery = function ($query) use ($search, $selectedRegion) {
            if ($search) {
                $query->where('villes.name', 'like', '%' . $search . '%');
            }
            if ($selectedRegion) {
                $query->where('villes.region', $selectedRegion);
            }
        };
    
        // Compter les utilisateurs professionnels
        $query = User::join('villes', 'villes.id', '=', 'users.ville_id')
            ->select('villes.id', 'villes.name', 
                DB::raw('COUNT(CASE WHEN users.profile = "Professionnel" THEN 1 END) AS pro_count'),
                DB::raw('COUNT(CASE WHEN users.profile = "Amateur" THEN 1 END) AS amt_count'),
                DB::raw('COUNT(CASE WHEN users.sexe = "homme" THEN 1 END) AS male_count'),
                DB::raw('COUNT(CASE WHEN users.sexe = "femme" THEN 1 END) AS female_count')
            )
            ->when($search || $selectedRegion, $filterQuery)
            ->groupBy('villes.id', 'villes.name');
    
        // Paginer les résultats
        $villesData = $query->paginate(10);
    
        return view('admin.statistiques.countparvilles', [
            'villesData' => $villesData,
            'search' => $search,
            'regions' => $regions,
            'selectedRegion' => $selectedRegion,
        ]);
    }

    public function detailsVilles ($ville_id)
    {
        $ville = Ville::where('id', $ville_id)->first();

        $hommeUsersCount = User::where('sexe', 'homme')
                            ->whereIn('id', function ($query) {
                                $query->select('user_id')
                                    ->from('participations');
                            })->count();
        $femmeUsersCount = User::where('sexe', 'femme')
                            ->whereIn('id', function ($query) {
                                $query->select('user_id')
                                    ->from('participations');
                            })->count();

        $ParticipationCount = Participation::join('users', 'users.id', '=', 'participations.user_id')
                         ->where('users.ville_id', $ville_id)
                         ->count();



        $participationsCountByCentrerBallon = Participation::join('users', 'users.id', '=', 'participations.user_id')
                         ->where('users.ville_id', $ville_id)
                         ->where('category_id',7)
                         ->count();
        $participationsCountByZellige = Participation::join('users', 'users.id', '=', 'participations.user_id')
                         ->where('users.ville_id', $ville_id)
                         ->where('category_id',8)
                         ->count();
        $participationsCountByLumière = Participation::join('users', 'users.id', '=', 'participations.user_id')
                         ->where('users.ville_id', $ville_id)
                         ->where('category_id',9)
                         ->count();

        $usersPro = User::where('ville_id', $ville_id)
            ->whereIn('id', function ($query) {
                $query->select('user_id')
                    ->from('participations');
            })
            ->where('profile', 'Professionnel')
            ->count();
        $usersAmateur = User::where('ville_id', $ville_id)
            ->whereIn('id', function ($query) {
                $query->select('user_id')
                    ->from('participations');
            })
            ->where('profile', 'Amateur')
            ->count();
        $allUsersCount = User::where('ville_id', $ville_id)
            ->whereIn('id', function ($query) {
                $query->select('user_id')
                    ->from('participations');
            })
            ->count();
        $users = User::where('ville_id', $ville_id)
            ->whereIn('id', function ($query) {
                $query->select('user_id')
                    ->from('participations');
            })
            ->get();

        return view('admin.statistiques.detailsVille', [
            'ville' => $ville,
            'ParticipationCount' => $ParticipationCount,
            'femmeUsersCount' =>$femmeUsersCount,
            'hommeUsersCount' =>$hommeUsersCount,
            'users' => $users,
            'usersProCount' => $usersPro,
            'usersAmateurCount' => $usersAmateur,
            'allUsersCount' => $allUsersCount,
            'participationsCountByCentrerBallon'=>$participationsCountByCentrerBallon,
            'participationsCountByZellige'=>$participationsCountByZellige,
            'participationsCountByLumière'=>$participationsCountByLumière,
        ]);
    }


    public function categories ()
    {
        $categories = Categorie::all();
        return view('admin.categories', [
            'categories' => $categories,
        ]);
    }

    public function storeCategory(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
        ]);

        $category = Categorie::create([
            'name' => $request->input('name'),
        ]);

        return response()->json(['success' => true, 'category' => $category]);
    }

    public function updateCategory(Request $request)
    {
        $request->validate([
            'id' => 'required|exists:categories,id',
            'name' => 'required|string|max:255',
        ]);

        $category = Categorie::find($request->input('id'));
        $category->name = $request->input('name');
        $category->save();

        return response()->json(['success' => true, 'category' => $category]);
    }

    public function destroyCategory($id)
    {
        $category = Categorie::findOrFail($id);
        $category->delete();

        return response()->json(['success' => true]);
    }



/*     public function getUsersDetails($id){


        $users = User::whereHas('participations')
        ->with('participations')
        ->whereHas('ville', function($query) use ($id) {
            $query->where('villes.id', $id);
        })
        ->get();
    
        return view('admin.usersDetails', [
            'users' => $users,
        ]);

    } */


    public function getParticipationsOfUser($id){



        $user = User::where('id', $id)->with('participations')->with('ville')->first();

        $participations = Participation::where('user_id', $id)->with('ratings')->get();


        $ParticipationCount = Participation::join('users', 'users.id', '=', 'participations.user_id')
        ->where('users.id', $id)
        ->count();

        $participationsCountByFaras = Participation::join('users', 'users.id', '=', 'participations.user_id')
                ->where('users.id', $id)
                ->where('category_id',1)
                ->count();
        $participationsCountByTresorsDuMaroc = Participation::join('users', 'users.id', '=', 'participations.user_id')
                ->where('users.id', $id)    
                ->where('category_id',2)
                ->count();
        $participationsCountByVitalite = Participation::join('users', 'users.id', '=', 'participations.user_id')
                ->where('users.id', $id)
                ->where('category_id',5)
                ->count();
        //dd($participations);

        return view('admin.statistiques.UserParticipations', [
            'user' => $user,
            'participations' => $participations,
            'ParticipationCount' => $ParticipationCount,
            'participationsCountByFaras'=>$participationsCountByFaras,
            'participationsCountByTresorsDuMaroc'=>$participationsCountByTresorsDuMaroc,
            'participationsCountByVitalite'=>$participationsCountByVitalite,
        ]);
    }


    public function photographers(Request $request)
    {
        // Fetch all villes for filter dropdown
        $villes = Ville::orderBy('name', 'asc')->get();

        // Get selected ville from request
        $selectedVille = $request->query('ville');

        // Query users with ville relationship, filtered by selected ville if provided
        $users = User::with('ville')
            ->where('is_complete', 1)
            ->when($selectedVille, function ($query, $selectedVille) {
                return $query->where('ville_id', $selectedVille);
            })
            ->latest()
            ->paginate(20);


            $villes = Ville::orderBy('name', 'asc')->get();
            $query = User::with('ville')->where('is_complete', 1);
        
            if ($request->has('ville_id') && !empty($request->ville_id)) {
                $query->where('ville_id', $request->ville_id);
            }
        
            $users = $query->paginate(10);
        
        return view('admin.photographers', compact('users', 'villes'));

       // return view('admin.photographers', compact('users', 'villes'));
    }
}
