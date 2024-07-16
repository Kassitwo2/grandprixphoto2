<?php

namespace App\Http\Controllers;

use App\Models\Participation;
use App\Models\Rating;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class JuryController extends Controller
{
    //

    public function showAll()
    {
        // $participation = Participation::findOrFail($id);
       $userId = Auth::id();
       $participation = Participation::with('categorie')->whereNotIn('id', function($query) use ($userId) {
            $query->select('participation_id')
                ->from('ratings')
                ->where('jury_id', $userId)
                ->where('is_conforme','=', 1);
        })->inRandomOrder()->first();

        return view('jury.participations',
        [
            'participation' => $participation,
            //'exif' =>  exif_read_data($image),
        ]); 
    }

    public function showCategorieFaras()
    {
        $userId = Auth::id();
        $participation = Participation::with('categorie')
                            ->where('category_id', 1)
                            ->whereNotIn('id', function($query) use ($userId) {
                                $query->select('participation_id')
                                      ->from('ratings')
                                      ->where('jury_id', $userId)
                                      ->where('is_conforme','=', 1);

                            })
                            ->inRandomOrder()
                            ->first();
    
        return view('jury.participations', [
            'participation' => $participation,
        ]);
    }
    public function showCategorieTresors()
    {
        $userId = Auth::id();
        $participation = Participation::with('categorie')
                            ->where('category_id', 2)
                            ->whereNotIn('id', function($query) use ($userId) {
                                $query->select('participation_id')
                                      ->from('ratings')
                                      ->where('jury_id', $userId)
                                      ->where('is_conforme','=', 1);

                            })
                            ->inRandomOrder()
                            ->first();
    
        return view('jury.participations', [
            'participation' => $participation,
        ]);
    }

    public function showCategorieSport()
    {
        $userId = Auth::id();
        $participation = Participation::with('categorie')
                            ->where('category_id', 5)
                            ->whereNotIn('id', function($query) use ($userId) {
                                $query->select('participation_id')
                                      ->from('ratings')
                                      ->where('jury_id', $userId)
                                      ->where('is_conforme','=', 1);

                            })
                            ->inRandomOrder()
                            ->first();
    
        return view('jury.participations', [
            'participation' => $participation,
        ]);
    }
    


    public function store(Request $request)
    {
        // If 'like' field is empty or not provided, set it to 0
        if (!isset($request['like'])) {
            $request['like'] = false;
        } elseif ($request['like'] === 'on') { // If 'like' field is provided and set to 'on', set it to 1
            $request['like'] = true;
        }

        // Validate the request data if needed
        $validatedData = $request->validate([
            'jury_id' => 'required',
            'participation_id' => 'required',
            'rating' => 'required|numeric|min:1|max:5',
            'like' => 'boolean', // Add validation rule for 'like' field
        ]);

        // Create a new Rating instance and store it in the database
        $rating = Rating::create($validatedData);

        // Return a JSON response indicating success or failure
        // if ($rating) {
        //     return response()->json(['success' => true]);
        // } else {
        //     return response()->json(['success' => false]);
        // }

        return response()->json(['success' => (bool) $rating]);
    }
    public function storeAdmin(Request $request)
    {
        // If 'like' field is empty or not provided, set it to 0
        if (!isset($request['like'])) {
            $request['like'] = false;
        } elseif ($request['like'] === 'on') { // If 'like' field is provided and set to 'on', set it to 1
            $request['like'] = true;
        }

        // Validate the request data if needed
        $validatedData = $request->validate([
            'admin_id' => 'required',
            'participation_id' => 'required',
            'rating' => 'required|numeric|min:1|max:5',
            'like' => 'boolean', // Add validation rule for 'like' field
        ]);

        // Create a new Rating instance and store it in the database
        $rating = Rating::create($validatedData);

        // Return a JSON response indicating success or failure
        // if ($rating) {
        //     return response()->json(['success' => true]);
        // } else {
        //     return response()->json(['success' => false]);
        // }

        return response()->json(['success' => (bool) $rating]);
    }

    public function ratingJury()
{
    $juryId = Auth::id();

    $participations = Participation::where('is_conforme', 1)
        ->with('categorie')
        ->join('ratings', 'participations.id', '=', 'ratings.participation_id')
        ->where('ratings.jury_id', $juryId)
        ->select('participations.*', 'ratings.rating') 
        ->paginate(10);

    $ratings = Rating::where('jury_id', $juryId)->get();

    return view('jury.ratingsJury', [
        'ratings' => $ratings,
        'participations' => $participations
    ]);
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
}
