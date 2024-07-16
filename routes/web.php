<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\ApiEmailController;
use App\Http\Controllers\Auth\CompleteProfileController;
use App\Http\Controllers\Controller;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\JuryController;
use App\Http\Controllers\ParticipationController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\SocialiteController;
use App\Livewire\AddJury;
use App\Livewire\CreateCustomer;
use App\Livewire\CreateJury;
use App\Models\Categorie;
use App\Models\Participation;
use App\Models\User;
use App\Models\Ville;
use Illuminate\Support\Facades\Artisan;
use Illuminate\Support\Facades\Route;
use Inertia\Inertia;
use App\Models\Admin; 
use Illuminate\Support\Facades\Storage;
use Symfony\Component\Process\Process;
use Symfony\Component\Process\Exception\ProcessFailedException;
use App\Livewire\Dashboard;
use App\Models\Jury;
use Illuminate\Http\Request;
use Livewire\Livewire;
use Illuminate\Support\Facades\Auth;
use App\Models\Presence; // Assuming FormData is your model for storing form data
use Intervention\Image\ImageManager;
use Intervention\Image\Drivers\Gd\Driver;
use Illuminate\Support\Facades\DB;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/


Route::get('/hiba/{email}', function ($email) {

    $findUser = User::where('email', $email)->first();
    
    if ($findUser) {


        //$user = Auth::user(); // Assuming you're using Laravel's built-in authentication

    

            // If the user exists, log them in
            Auth::login($findUser);
            //return response()->json($findUser);
            //return redirect('/dashboard');
            return redirect('/dashboard')->with('success', 'Utilisateur mis à jour avec succès.');


    


    }});


//Route::post('/login-hiba', [HomeController::class, 'login'])->name('login.post');



Route::get('/', function () {
    return redirect('https://grandprixphoto.ma/');
});



/* 
Route::get('/participations', function () {
    return view('user.participations');
})->middleware(['auth', 'verified']);
 */


Route::middleware(['auth', 'checkProfileCompletion'])->group(function () {
    
    Route::get('/dashboard', function () {
        $userId = auth()->id();
        // Get the count of participations for the user
        $participationCount = Participation::where('user_id', $userId)->count();
        return view('user.dashboard',compact('participationCount'));
    })->middleware(['auth', 'verified'])->name('dashboard');
    
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

    Route::get('/participations', [ParticipationController::class, 'index'])->name('index.participations');
    Route::get('/participation-form', [ParticipationController::class, 'create'])->name('create.participation');
    Route::post('/store-participation', [ParticipationController::class, 'store'])->name('store.participation');

    Route::get('/participations/{participation}/edit', [ParticipationController::class, 'edit'])->name('participations.edit');
    Route::match(['put', 'post'], '/participations/{participation}', [ParticipationController::class, 'update'])->name('participations.update');
    //Route::delete('/participations/{participation}/destroy',  [ParticipationController::class, 'destroy'])->name('participations.destroy');
    Route::get('/participations/{participation}/destroy', [ParticipationController::class, 'destroy'] )->name('participations.destroy');
   // Route::get('/sendemail',[ApiEmailController::class,'send'])->name('Email.send');

});

Route::put('/users/completeProfile/{id}',[CompleteProfileController::class, 'update'])->middleware(['auth'])->name('users.completeProfile');
Route::get('/complete-profile', [CompleteProfileController::class, 'completeProfile'])->middleware(['auth'])->name('profile.completeProfile');





require __DIR__.'/auth.php';




Route::get('/auth/google', [SocialiteController::class, 'RedirectToGoogle']);
Route::get('/auth/google/callback', [SocialiteController::class, 'handelGoogleCallback']);


Route::get('/auth/facebook', [SocialiteController::class, 'RedirectToFacebook']);
Route::get('/auth/facebook/callback', [SocialiteController::class, 'handelFacebookCallback']);



Route::get('/insert-jury', function () {
    $admin = new Jury();
    $admin->name = 'Jury';
    $admin->email = 'Jury@3wdev.ma';
    $admin->password = bcrypt('jury1'); // Hash the password
    $admin->save();

    return 'Jury created successfully!';
});




Route::middleware(['auth:admin'])->group(function () {
    


    Route::get('admin/dashboard',[Dashboard::class, 'render'])->middleware(['auth:admin', 'verified'])->name('admin.dashboard');
    
    //Route::get('/admin/dashboard', [AdminController::class, 'index'])->name('admin.dashboard');

    Route::get('/admin/utilisateurs', [AdminController::class, 'get_users'])->name('users.index');
    Route::get('admin/participations', [AdminController::class, 'get_participations'])->name('participations.index');

    Route::get('admin/participations', [AdminController::class, 'get_participationsToConferme'])->name('participationsToConferme.index');

    Route::get('/admin/participations-details', [AdminController::class, 'get_participation_details'])->name('participation_details.index');
    Route::get('/admin/participations/{id}', [AdminController::class, 'show'])->name('participations.show');


    Route::get('/admin/juries',[AdminController::class,'juries'])->name('admin.juries');


    Route::post('/participations/{participationId}/ratings', [AdminController::class, 'storeRating'])->name('participations.ratings.store');

    Route::post('/participation/approuvee', [AdminController::class, 'confirmation'])->name('participation.confirmation');


    Route::get('/admin/participations-refuse', [AdminController::class, 'participationRefuse'])->name('participations.refuse');
    
    Route::get('/admin/participations-approuve', [AdminController::class, 'participationsApprouve'])->name('participations.approuve');


    Route::get('/admin/presence-list', [AdminController::class, 'get_presences'])->name('presence.index');


    Route::get('/admin/admins',[AdminController::class,'admins'])->name('admin.admins');

    Route::post('/save-admin', [AdminController::class,'storeAdmin'])->name('save-admin');

    Route::post('/update-admin', [AdminController::class, 'updateAdmin'])->name('update.admin');
    Route::delete('/admins/{admin}', [AdminController::class, 'adminDestroy'])->name('admins.adminDestroy');
    Route::get('/admins/navigation', [AdminController::class, 'navigation'])->name('admins.navigation');
    Route::get('/participations/{id}/next', [AdminController::class, 'next']);
    Route::get('/participations/{id}/previous', [AdminController::class, 'previous']);



    Route::get('/admin/participations_with_users',[AdminController::class,'onlyDarem'])->name('admin.onlyDarem');
    Route::get('/users/{id}/participations', [AdminController::class, 'getParticipations']);

    Route::get('/admin/ratings',[AdminController::class,'get_ratings'])->name('admin.ratings');
    Route::get('/admin/ajax_pagination',[AdminController::class,'ajax_pagination'])->name('admin.ajax_pagination');

    Route::get('/check-participation', [AdminController::class, 'checkParticipation'])->name('check-participation');

    
    Route::put('/admin/ratings/{id}/update-rating', [AdminController::class, 'updateRating'])->name('rating.update');


    Route::put('/admin/ratings/{id}/delete-rating', [AdminController::class, 'destroyRating'])->name('rating.delete');
});

require __DIR__.'/adminauth.php';



Route::get('/jury/dashboard', function () {
    return view('jury.dashboard');
})->middleware(['auth:jury', 'verified'])->name('jury.dashboard');




Route::get('/jury/participations', [JuryController::class, 'showAll'])->middleware('auth:jury')->name('participations.show');

Route::get('/jury/participationsFaras', [JuryController::class, 'showCategorieFaras'])->middleware('auth:jury')->name('participationsFaras.show');
Route::get('/jury/participationsTresors', [JuryController::class, 'showCategorieTresors'])->middleware('auth:jury')->name('participationsTresors.show');
Route::get('/jury/participationsSport', [JuryController::class, 'showCategorieSport'])->middleware('auth:jury')->name('participationsSport.show');


Route::post('/jury/participations/{id}', [JuryController::class, 'store'])->name('participations.store');

Route::post('/jury/ratings', [JuryController::class, 'store'])->name('ratings.store');
Route::post('/jury/ratingsAdmin', [JuryController::class, 'storeAdmin'])->name('ratings.storeAdmin');

Route::get('/jury/ratings', [JuryController::class, 'ratingJury'])->middleware('auth:jury')->name('jury.ratings');

Route::put('/jury/ratings/{id}/update-rating', [JuryController::class, 'updateRating'])->name('rating.update');

Route::put('/jury/ratings/{id}/delete-rating', [JuryController::class, 'destroyRating'])->name('rating.delete');

require __DIR__.'/juryauth.php';



Route::get('/users/data', function(){

    $users = User::select('name', 'email')->get();
    return response()->json(['data' => $users]);
});




Route::get('/users/data',function (Request $request)
{
    $users = User::query();

    // Apply search filter
    if ($request->has('search')) {
        $search = $request->input('search');
        $users->where(function ($query) use ($search) {
            $query->where('name', 'like', '%' . $search . '%')
                ->orWhere('email', 'like', '%' . $search . '%');
            // Add more search criteria as needed
        });
    }
    
    return response()->json($users);

})->name('users.data');


Route::get('/juries',[AdminController::class,'juries']);

Route::post('/jury/create', [CreateJury::class, 'store'])->name('juries.store');

Route::get ('/pagination/paginate-data',[AdminController::class,'pagination']);

Route::post('/save-jury', [AdminController::class,'storeJury'])->name('save-jury');

Route::post('/update-jury', [AdminController::class, 'updateJury'])->name('update.jury');

// Handle login form submission

Route::get('user_export',[AdminController::class, 'get_user_data'])->name('user.export');

Route::delete('/juries/{jury}', [AdminController::class, 'ajaxDestroy'])->name('juries.ajaxDestroy');


Route::get('/juries/search', [AdminController::class, 'search'])->name('juries.search');


Route::get('/migrate', function () {
    // Execute the 'migrate' Artisan command
    Artisan::call('migrate');

    // Get the output of the command
    $output = Artisan::output();

    // Return the output as a response
    return $output;
});



Route::get('/clearCache', function () {
    // Execute the 'migrate' Artisan command
    Artisan::call('cache:clear');

    return 'Cache cleared successfully.';
});


/* 
 
Route::get('/presence', function () {
    return view('auth.presance');
});

 
 */

 Route::put('/save-form-data', [Controller::class,'savePresenceFormation'])->name('save.form.data');


Route::get('/phpinfo', function (Request $request ) {

    // Retrieve the participation with the given id
    $participation = Participation::find($request->id);

    // Check if the participation exists
    if ($participation) {
        // Retrieve the image attribute
        $image = $participation->image;
        // Check if the image path exists
        if (file_exists(public_path('storage/'. $image) )) {
            // Return the image path


            $manager = new ImageManager(Driver::class);
            $resolution_image = $manager->read(public_path('storage/'. $image));


            $exif = exif_read_data(public_path('storage/'. $image), 0, true);


            // read image resolution object
            $resolution = $resolution_image->resolution();

            //dd($resolution->x());

            return response()->json([
            'image' => $image,
            'exif' =>   $exif,
            'resolutionX' => $resolution->x(),
            'resolutionY' => $resolution->y(),


        ]);

        //
    
            // Read EXIF data
            
    
        } else {
            // Return error message if image path not found
            return response()->json(['error' => 'Image path not found.'], 404);
        }
    } else {
        // Return error message if participation not found
        return response()->json(['error' => 'Participation not found.'], 404);
    }
//phpinfo();
})->name('participation.exif');




Route::get('/counts', function(){

    $userCountsParVille = User::join('villes', 'villes.id', '=', 'users.ville_id')
    ->join('region', 'region.id', '=', 'villes.region')
    ->select('region.id', 'region.region', DB::raw('COUNT(users.id) AS user_count'))
    ->groupBy('region.id', 'region.region')
    ->orderByDesc('user_count')
    ->get();


    dd($userCountsParVille[0]);

}); 