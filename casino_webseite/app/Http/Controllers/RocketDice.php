<?php

namespace App\Http\Controllers;

use Auth;
use Illuminate\Http\Request;

class RocketDice extends Controller
{
    public function play(Request $request)
    {

        $validatedData = $request->validate([
            'number' => 'required|numeric|min:2|max:11',
            'higher_lower' => 'required|in:higher,lower',
            'bet_amount' => 'required|numeric|min:1.00',
        ]);

        $currentUser = Auth::user();
        $currentBalance = $currentUser->account;
        $betAmount = $validatedData['bet_amount'];
        $higher_lower = $validatedData['higher_lower'];
        $number = $validatedData['number'];


        if ($this->checkAccountBalance($currentBalance, $betAmount)) {

            if ($higher_lower === 'higher') {

                $dice_1 = $this->roll_dice_1();
                $dice_2 = $this->roll_dice_2();

                $number_rolled = $dice_1 + $dice_2;


                if ($number_rolled > $number) {

                    $multiplier = $this->calculate_multiplikator_for_higher($number);

                    $profit = $betAmount * $multiplier;

                    return redirect()->route('animation')->with(compact('dice_1', 'dice_2', 'profit'));


                } else {
                    return redirect()->back()->with('error', 'Verloren.');

                }



            } else if ($higher_lower === 'lower') {

                $dice_1 = $this->roll_dice_1();
                $dice_2 = $this->roll_dice_2();

                $number_rolled = $dice_1 + $dice_2;


                if ($number_rolled < $number) {

                    $multiplier = $this->calculate_multiplikator_for_lower($number);

                    $profit = $betAmount * $multiplier;

                    return redirect()->route('animation')->with(compact('dice_1', 'dice_2', 'profit'));

                } else {
                    return redirect()->back()->with('error', 'Verloren.');

                }
            }

        } else {
            return redirect()->back()->with('error', 'Nicht genug Geld.');
        }
    }


    private function checkAccountBalance($currentBalance, $betAmount)
    {
        return $currentBalance - $betAmount >= 0;
    }

    private function calculate_multiplikator_for_higher($number)
    {
        $multipliers = [
            2 => 1.02,
            3 => 1.07,
            4 => 1.18,
            5 => 1.36,
            6 => 1.68,
            7 => 2.35,
            8 => 3.53,
            9 => 5.88,
            10 => 6.74,
            11 => 10
        ];

        return $multipliers[$number];

    }


    private function calculate_multiplikator_for_lower($number)
    {
        $multipliers = [
            2 => 10,
            3 => 6.74,
            4 => 5.88,
            5 => 3.53,
            6 => 2.35,
            7 => 1.68,
            8 => 1.36,
            9 => 1.18,
            10 => 1.07,
            11 => 1.02
        ];

        return $multipliers[$number];
    }

    private function roll_dice_1()
    {
        return rand(1, 6);
    }

    private function roll_dice_2()
    {
        return rand(1, 6);
    }
}