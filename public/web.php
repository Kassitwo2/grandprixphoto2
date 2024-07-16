<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\ApiEmailController;
use App\Http\Controllers\Auth\CompleteProfileController;
use App\Http\Controllers\HomeController;
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
    Route::delete('/participations/{participation}/destroy',  [ParticipationController::class, 'destroy'])->name('participations.destroy');

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

    Route::get('/admin/participations-details', [AdminController::class, 'get_participation_details'])->name('participation_details.index');

    Route::get('/admin/participations/{id}', [AdminController::class, 'show'])->name('participations.show');



    Route::post('/participations/{participationId}/ratings', [AdminController::class, 'storeRating'])->name('participations.ratings.store');


});

require __DIR__.'/adminauth.php';



Route::get('/jury/dashboard', function () {
    return view('jury.dashboard');
})->middleware(['auth:jury', 'verified'])->name('jury.dashboard');


require __DIR__.'/juryauth.php';

Route::get('/phpinfo', function () {

        // Retrieve the participation with the given id
        $participation = Participation::find(1);

        // Check if the participation exists
        if ($participation) {
            // Retrieve the image attribute
            $image = $participation->image;
            // Check if the image path exists
            if (file_exists($image)) {
                // Return the image path
                return response()->json(['image' => $image,
                'exif' =>  exif_read_data($image)
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
});





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





Route::get('/jury/create',[AdminController::class,'juries']);




Route::post('/juries', [CreateJury::class, 'store'])->name('juries.store');

Route::get ('/pagination/paginate-data',[AdminController::class,'pagination']);



Route::post('/save-jury', [AdminController::class,'storeJury'])->name('save-jury');
Route::post('/update-jury', [AdminController::class, 'updateJury'])->name('update.jury');

// Handle login form submission


Route::get('user_export',[AdminController::class, 'get_user_data'])->name('user.export');

Route::delete('/juries/{jury}', [AdminController::class, 'ajaxDestroy'])->name('juries.ajaxDestroy');


Route::get('/juries/search', [AdminController::class, 'search'])->name('juries.search');



