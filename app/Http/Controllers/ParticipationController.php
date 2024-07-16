<?php

namespace App\Http\Controllers;

use App\Mail\emailParticipation;
use App\Mail\emailSuppressionParticipation;
use App\Mail\emailUpdateParticipation;
use App\Models\Categorie;
use App\Models\Participation;
use Carbon\Carbon;
use Exception;
use Illuminate\View\View;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\File; 

use Intervention\Image\ImageManager;
use Intervention\Image\Drivers\Gd\Driver;


use Intervention\Image\Facades\Image;

class ParticipationController extends Controller
{
    //

    public function index(Request $request)
    {
        $userId = auth()->id();

        $participations = Participation::with('categorie')->where('user_id', $userId)->get();

        return view('user.participations',['participations' => $participations]);
    }



    public function create(){

        $categories = Categorie::all();
        return view('user.participation-form')->with('categories', $categories);
        
    }

    public function store(Request $request)
    {   
        try {
        ini_set('memory_limit', '1024M'); // Increase memory limit
        set_time_limit(3600);
        $userId = auth()->id();
        // Get the count of participations for the user
        $participationCount = Participation::where('user_id', $userId)->count();

        // Check if the user has reached the participation limit
        if ($participationCount >= 10) {
            //return redirect()->back()->with('error', 'You have reached the limit of 10 participations.');
            session()->flash('error', 'Vous avez atteint la limite de 10 participations.');
            return redirect()->route('index.participations')->with('error', 'Vous avez atteint la limite de 10 participations.');

        }

        // Validate the request data
        $request->validate([
            'title' => 'required|string|max:200',
            'image' => 'required|image|mimes:jpeg,png,jpg|max:20000',
            'description' => 'required|string|max:1000',
            'categorie' => 'required|integer',
            // Add validation rules for other fields as needed
        ],[
            'title.required' => 'Le titre est requis.',
            'title.string' => 'Le titre doit être une chaîne de caractères.',
            'title.max' => 'Le titre ne peut pas dépasser 200 caractères.',

            'image.required' => 'L\'image est requise.',

            'image.mimes' => 'Le champ image doit être un fichier de type jpeg, png, jpg.',
            'image.image' => 'Le champ image doit être une image.',
            'image.max' => 'Le champ :attribute ne doit pas dépasser 20 mégaoctets.',


            'description.required' => 'La description est requise.',
            'description.string' => 'La description doit être une chaîne de caractères.',
            'description.max' => 'La description ne peut pas dépasser 1000 caractères.',

            'categorie.required' => 'La catégorie est requise.',
    
         ]);

        

        // Create a new Participation instance
        $participation = new Participation();
        $participation->title = $request->title;
        $participation->description = $request->description;


        // create new manager instance with desired driver
        if ($request->hasFile('image')) {
            // File was uploaded, proceed with storing it
            $filename = $userId . '-' . $request->categorie .'-'.Carbon::now()->format('YmdHis') . '.' . $request->file('image')->getClientOriginalExtension();
            $path = $request->file('image')->storeAs('uploads/images', $filename, 'public');

            //dd($path);
            
            $participation->image = $path;
            // Do something with the stored file path


            // create image manager with desired driver
            $manager = new ImageManager(new Driver());

            //dd($path);
            // read image from file system
            $Thumbnail = $manager->read(public_path('storage/'. $path));
            // resize image proportionally to 300px width
            $Thumbnail->scale(width: 300);


        }
        
        $participation->user_id = $userId ;
        $participation->category_id =  $request->categorie;
        
        // Save the participation
        $participation->save();

        

        
            /////////////////
            //$path = $request->file('image')->store('uploads/images', 'public');


            //dd($image->exif([]));
            //dd($path);

            // save modified image in new format 
        if ($request->hasFile('image')) {

         $Thumbnail->toPng()->save(public_path('storage/Thumbnails/'. $path));
        }

            ///////////////
        try {
            Mail::to(Auth::user()->email)->send(new emailParticipation());
        } catch (Exception $e) {

            session()->flash('success', 'Votre participation a été enregistrée avec succès.');
            return Redirect('/participations'); 
        }


        session()->flash('success', 'Votre participation a été enregistrée avec succès.');

        // Optionally, redirect the user or return a response
        //return response()->json(['message' => 'Participation created successfully',$participationCount], 201);
        return Redirect('/participations');
    } catch (Exception $e) {
        Log::error('Error in store method: ' . $e->getMessage());
        return response()->json(['error' =>  $e->getMessage()], 500);
    }
    }

    public function edit(Participation $participation)
    {
        $categories = Categorie::all();

        return view('user.edit-participation-form',
        [
            'participation' => $participation,
            'categories' => $categories,
        ]);
    }
    

    public function update(Request $request, Participation $participation)
    {

        $userId = auth()->id();

        // Validate the request data
        $validatedData = $request->validate([
            'title' => 'required|string|max:255',
            'description' => 'required|string|max:1000',
            'categorie' => 'required',
            //'image' => 'mimes:jpeg,png,jpg|max:20000',

            // Add validation rules for other attributes if needed
        ]
        ,[
            'title.required' => 'Le titre est requis.',
            'title.string' => 'Le titre doit être une chaîne de caractères.',
            'title.max' => 'Le titre ne peut pas dépasser 200 caractères.',

            'image.required' => 'L\'image est requise.',

            'image.mimes' => 'Le champ image doit être un fichier de type jpeg, png, jpg.',
            'image.image' => 'Le champ image doit être une image.',
            'image.max' => 'Le champ :attribute ne doit pas dépasser 20 mégaoctets.',

            'description.required' => 'La description est requise.',
            'description.string' => 'La description doit être une chaîne de caractères.',
            'description.max' => 'La description ne peut pas dépasser 1000 caractères.',

            'categorie.required' => 'La catégorie est requise.',
    
    ]
    );
    
        // Check if a new image file is uploaded
        if ($request->hasFile('image')) {
            // Delete the old image if it exists
            if ($participation->image) {
                Storage::disk('public')->delete($participation->image);
            }
    
            // File was uploaded, proceed with storing it
            $filename = $userId . '-' . $request->categorie .'-'.Carbon::now()->format('YmdHis') . '.' . $request->file('image')->getClientOriginalExtension();
            $path = $request->file('image')->storeAs('uploads/images', $filename, 'public');

            //dd($path);
            
            $participation->image = $path;
            // Do something with the stored file path


            // create image manager with desired driver
            $manager = new ImageManager(new Driver());

            //dd($path);
            // read image from file system
            $Thumbnail = $manager->read(public_path('storage/'. $path));
            // resize image proportionally to 300px width
            $Thumbnail->scale(width: 300);
            
        }
        // Update other fields
        $participation->title = $validatedData['title'];
        $participation->description = $validatedData['description'];
        $participation->is_conforme = 0;

        $participation->category_id = $validatedData['categorie'];

        // Save the updated participation
        $participation->save();

        // save modified image in new format 
        if ($request->hasFile('image')) {
            $Thumbnail->toPng()->save(public_path('storage/Thumbnails/'. $path));
        }


        $image = $participation->image;

        try {
            Mail::to(Auth::user()->email)->send(new emailUpdateParticipation($image));
        } catch (Exception $e) {

            return redirect()->route('index.participations')->with('success', 'La participation a été mise à jour avec succès.');

        }

        // Redirect back with a success message
        return redirect()->route('index.participations')->with('success', 'La participation a été mise à jour avec succès.');
    }
    

/*     public function destroy(Participation $participation)
    {
        $participation->delete();
        Mail::to(Auth::user()->email)->send(new emailSuppressionParticipation);

        return redirect()->back()->with('success', 'participation supprimée avec succès.');
    }
     */
    public function destroy(Participation $participation)
    {
      //$participation = Participation::find($id);
      $participation->delete();


      try {
        Mail::to(Auth::user()->email)->send(new emailSuppressionParticipation);
    } catch (Exception $e) {

        return redirect()->back()
        ->with('success', 'participation supprimée avec succès.');
    }


      return redirect()->back()
        ->with('success', 'participation supprimée avec succès.');
    }
}
