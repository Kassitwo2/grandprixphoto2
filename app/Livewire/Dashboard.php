<?php

namespace App\Livewire;

use App\Models\User;
use Livewire\Component;
use Carbon\Carbon;

use Illuminate\Support\Facades\DB;


class Dashboard extends Component
{

    public $count = 0;

    public function render()
    {
        $users = User::with('ville')->latest()->paginate(20);
        $allUsersCount = User::where('is_complete', 1)->count();
        $googleUsersCount = User::where('social_type', 'google')->where('is_complete', 1)->count();
        $facebookUsersCount = User::where('social_type', 'facebook')->where('is_complete', 1)->count();
        $hommeUsersCount = User::where('sexe', 'homme')->count();
        $femmeUsersCount = User::where('sexe', 'femme')->count();
        $proUsersCount = User::whereIn('profile', ['professionnel', 'Professionel'])->count();

        $amateurUsersCount = User::where('profile', 'Amateur')->count();



        // Calculate the date 18 years ago
        $dateEighteenYearsAgo = Carbon::now()->subYears(18);
        
        // Calculate the date 30 years ago
        $dateThirtyYearsAgo = Carbon::now()->subYears(30);

        // Calculate the date 60 years ago
        $dateSixtyYearsAgo = Carbon::now()->subYears(60);

        // Get the count of users whose age is under 18
        $countUnderEighteen = User::whereDate('DateNaissance', '>', $dateEighteenYearsAgo)->count();


        // Get the count of users between 18 and 30 years old
        $countBetweenEighteenAndThirty = User::whereDate('DateNaissance', '>', $dateThirtyYearsAgo)
        ->whereDate('DateNaissance', '<', $dateEighteenYearsAgo)
        ->count();



        // Get the count of users between 30 and 60 years old
        $countBetweenThirtyAndSixty = User::whereDate('DateNaissance', '>', $dateSixtyYearsAgo)
            ->whereDate('DateNaissance', '<', $dateThirtyYearsAgo)
            ->count();

        // Get users who are 60 years old or older
        $usersOverSixty = User::whereDate('DateNaissance', '<', $dateSixtyYearsAgo)->count();



        $userCountsParRegions = User::join('villes', 'villes.id', '=', 'users.ville_id')
        ->join('region', 'region.id', '=', 'villes.region')
        ->select('region.id', 'region.region', DB::raw('COUNT(users.id) AS user_count'))
        ->groupBy('region.id', 'region.region')
        ->orderByDesc('user_count')
        ->get();
    
    

        return view('livewire.dashboard', [

            'count' => $this->count,
            'userCountsParRegions' => $userCountsParRegions,
            'allUsersCount' => $allUsersCount,
            'users' =>$users,
            'googleUsersCount' =>$googleUsersCount,
            'facebookUsersCount' =>$facebookUsersCount,
            'femmeUsersCount' =>$femmeUsersCount,
            'hommeUsersCount' =>$hommeUsersCount,
            'proUsersCount' =>$proUsersCount,
            'amateurUsersCount' =>$amateurUsersCount,


            'countUnderEighteen' =>$countUnderEighteen,
            'countBetweenEighteenAndThirty' =>$countBetweenEighteenAndThirty,
            'countBetweenThirtyAndSixty' =>$countBetweenThirtyAndSixty,
            'usersOverSixty' =>$usersOverSixty,
        ]);
    }



public function increment()
{
    dd('hello');

}

public function decrement()
{
    $this->count--;
}
}
