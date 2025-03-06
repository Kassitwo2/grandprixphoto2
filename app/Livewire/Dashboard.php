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
        $users = User::with('ville')->where('is_complete', 1)->latest()->paginate(20);

        

        $dateLimit = '2024-12-30';

        // Get users with completed profiles
        $allUsersCount = User::where('is_complete', 1)
            ->whereDate('created_at', '<=', $dateLimit)
            ->count();

        $googleUsersCount = User::where('social_type', 'google')
            ->where('is_complete', 1)
            ->whereDate('created_at', '<=', $dateLimit)
            ->count();

        $facebookUsersCount = User::where('social_type', 'facebook')
            ->where('is_complete', 1)
            ->whereDate('created_at', '<=', $dateLimit)
            ->count();

        // Count users by gender
        $hommeUsersCount = User::where('sexe', 'homme')
            ->whereDate('created_at', '<=', $dateLimit)
            ->count();

        $femmeUsersCount = User::where('sexe', 'femme')
            ->whereDate('created_at', '<=', $dateLimit)
            ->count();

        // Count users by profile type
        $proUsersCount = User::whereIn('profile', ['professionnel', 'Professionel'])
            ->whereDate('created_at', '<=', $dateLimit)
            ->count();

        $amateurUsersCount = User::where('profile', 'Amateur')
            ->whereDate('created_at', '<=', $dateLimit)
            ->count();

        // Age-based calculations
        $dateEighteenYearsAgo = Carbon::now()->subYears(18);
        $dateThirtyYearsAgo = Carbon::now()->subYears(30);
        $dateSixtyYearsAgo = Carbon::now()->subYears(60);

        // Users under 18
        $countUnderEighteen = User::whereDate('DateNaissance', '>', $dateEighteenYearsAgo)
            ->whereDate('created_at', '<=', $dateLimit)
            ->count();

        // Users between 18 and 30
        $countBetweenEighteenAndThirty = User::whereDate('DateNaissance', '>', $dateThirtyYearsAgo)
            ->whereDate('DateNaissance', '<', $dateEighteenYearsAgo)
            ->whereDate('created_at', '<=', $dateLimit)
            ->count();

        // Users between 30 and 60
        $countBetweenThirtyAndSixty = User::whereDate('DateNaissance', '>', $dateSixtyYearsAgo)
            ->whereDate('DateNaissance', '<', $dateThirtyYearsAgo)
            ->whereDate('created_at', '<=', $dateLimit)
            ->count();

        // Users 60 or older
        $usersOverSixty = User::whereDate('DateNaissance', '<', $dateSixtyYearsAgo)
            ->whereDate('created_at', '<=', $dateLimit)
            ->count();

        // Users per region
        $userCountsParRegions = User::join('villes', 'villes.id', '=', 'users.ville_id')
            ->join('region', 'region.id', '=', 'villes.region')
            ->whereDate('users.created_at', '<=', $dateLimit)
            ->select('region.id', 'region.region', DB::raw('COUNT(users.id) AS user_count'))
            ->groupBy('region.id', 'region.region')
            ->orderByDesc('user_count')
            ->get();

    


        // 2025 statistics

        $dateStart = '2025-01-01';

        // Get users with completed profiles
        $allUsersCount25 = User::where('is_complete', 1)
            ->whereDate('created_at', '>=', $dateStart)
            ->count();

        $googleUsersCount25 = User::where('social_type', 'google')
            ->where('is_complete', 1)
            ->whereDate('created_at', '>=', $dateStart)
            ->count();

        $facebookUsersCount25 = User::where('social_type', 'facebook')
            ->where('is_complete', 1)
            ->whereDate('created_at', '>=', $dateStart)
            ->count();

        // Count users by gender
        $hommeUsersCount25 = User::where('sexe', 'homme')
            ->whereDate('created_at', '>=', $dateStart)
            ->count();

        $femmeUsersCount25 = User::where('sexe', 'femme')
            ->whereDate('created_at', '>=', $dateStart)
            ->count();

        // Count users by profile type
        $proUsersCount25 = User::whereIn('profile', ['professionnel', 'Professionel'])
            ->whereDate('created_at', '>=', $dateStart)
            ->count();

        $amateurUsersCount25 = User::where('profile', 'Amateur')
            ->whereDate('created_at', '>=', $dateStart)
            ->count();

        // Age-based calculations
        $dateEighteenYearsAgo25 = Carbon::now()->subYears(18);
        $dateThirtyYearsAgo25 = Carbon::now()->subYears(30);
        $dateSixtyYearsAgo25 = Carbon::now()->subYears(60);

        // Users under 18
        $countUnderEighteen25 = User::whereDate('DateNaissance', '>', $dateEighteenYearsAgo25)
            ->whereDate('created_at', '>=', $dateStart)
            ->count();

        // Users between 18 and 30
        $countBetweenEighteenAndThirty25 = User::whereDate('DateNaissance', '>', $dateThirtyYearsAgo25)
            ->whereDate('DateNaissance', '<', $dateEighteenYearsAgo)
            ->whereDate('created_at', '>=', $dateStart)
            ->count();

        // Users between 30 and 60
        $countBetweenThirtyAndSixty25 = User::whereDate('DateNaissance', '>', $dateSixtyYearsAgo25)
            ->whereDate('DateNaissance', '<', $dateThirtyYearsAgo)
            ->whereDate('created_at', '>=', $dateStart)
            ->count();

        // Users 60 or older
        $usersOverSixty25 = User::whereDate('DateNaissance', '<', $dateSixtyYearsAgo25)
            ->whereDate('created_at', '>=', $dateStart)
            ->count();

        // Users per region
        $userCountsParRegions25 = User::join('villes', 'villes.id', '=', 'users.ville_id')
            ->join('region', 'region.id', '=', 'villes.region')
            ->whereDate('users.created_at', '>=', $dateStart)
            ->select('region.id', 'region.region', DB::raw('COUNT(users.id) AS user_count'))
            ->groupBy('region.id', 'region.region')
            ->orderByDesc('user_count')
            ->get();




    

        return view('livewire.dashboard', [
            //2024
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


            //2025
            'userCountsParRegions25' => $userCountsParRegions25,
            'allUsersCount25' => $allUsersCount25,
            'googleUsersCount25' =>$googleUsersCount25,
            'facebookUsersCount25' =>$facebookUsersCount25,
            'femmeUsersCount25' =>$femmeUsersCount25,
            'hommeUsersCount25' =>$hommeUsersCount25,
            'proUsersCount25' =>$proUsersCount25,
            'amateurUsersCount25' =>$amateurUsersCount25,
            'countUnderEighteen25' =>$countUnderEighteen25,
            'countBetweenEighteenAndThirty25' =>$countBetweenEighteenAndThirty25,
            'countBetweenThirtyAndSixty25' =>$countBetweenThirtyAndSixty25,
            'usersOverSixty25' =>$usersOverSixty25,
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
