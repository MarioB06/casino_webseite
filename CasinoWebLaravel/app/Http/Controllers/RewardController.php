<?php

namespace App\Http\Controllers;

use Auth;
use Illuminate\Http\Request;

class RewardController extends Controller
{
    public function giveReward(Request $request)
    {
        
        if (Auth::check()) {
            $rewardData = $request->all();
            
            if (isset($rewardData['reward'])) {
                $reward = $rewardData['reward'];
                
                $currentUser = Auth::user();
                $currentUser->account += 10;
                $currentUser->save();

                return response()->json(['success' => true]);
            }
        }

        return response()->json(['error' => 'Nicht authentifizierter Benutzer oder keine Belohnung angegeben.']);
    }
}
