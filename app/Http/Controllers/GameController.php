<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreGameRequest;
use App\Http\Requests\UpdateGameRequest;
use App\Models\Game;
use Illuminate\Support\Facades\Log;

class GameController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return "Hello world";
    }


    /**
     * Store a newly created resource in storage.
    */ 

    public function store(StoreGameRequest $request)
    {
       try {
        $game = new Game([
            'userID_white' => $request->input('userID_white'),
            'userID_black' => $request->input('userID_black'),
            'winner_id'=>null
        ]);

        if($game->save()){
            return response()->json(['message' => 'Game created!', 'game'=>$game], 201);
        }

        return response()->json(['message' => 'Game not created!'], 500);
        
       } catch (\Throwable $th) {
            Log::error('Error creating game: ' . $th->getMessage());
           return response()->json(['message' => 'Game not created!'], 500);
       }
    }

    /**
     * Display the specified resource.
     */
    public function show(Game $game)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateGameRequest $request, Game $game)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Game $game)
    {
        //
    }
}
