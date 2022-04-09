<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CheckingWordsController extends Controller
{
    public function showFunctionName()
    {
        return view('checkingWords.index');
    }

    public function FunctionName(Request $request)
    {
        $input_1 = strtoupper($request->input('input_1'));
        $input_2 = strtoupper($request->input('input_2'));

        $temp = [];
        $temp2 = [];

        for ($i = 0; $i < strlen($input_2); $i++) {
            $temp2[$i] = $input_2[$i];
            array_push($temp, $temp2[$i]);
        }

        for ($i = 0; $i < sizeof($temp); $i++) {
            if ($temp[$i] == ' ')
                unset($temp[$i]);
        }

        $temp3 = array_values($temp);
        $feedback = [];
        $assigned_value = [];

        $length_input1 = strlen($input_1);
        $count_input1 = 0;
        for ($i = 0; $i < $length_input1; $i++) {
            for ($j = 0; $j < sizeof($temp3); $j++) {
                if ($input_1[$i] == $temp3[$j] && !in_array($temp3[$j], $assigned_value)) {
                    array_push($assigned_value, $temp3[$j]);
                    $feedback[$count_input1] = $temp3[$j];
                    $count_input1++;
                }
            }
        }
        $count_input1 = $count_input1 / $length_input1;
        $count_input1 = $count_input1 * 100;

        return view('checkingWords.output', compact('count_input1', 'feedback'));
    }
}
