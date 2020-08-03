<?php


namespace App\Http\Controllers;


use Illuminate\Http\Request;
use Illuminate\Support\Carbon;
class Dictionary extends Controller
{
    public function translate(Request $request)
    {
        $arr = [
            'hello' => 'xin chào',
            'goodbye' => 'tạm biệt',
            'school' => 'trường học',
            'dog' => 'chó'
        ];
        foreach ($arr as $key => $word) {
            if ($key == $request->word) {
                $result = $word;
                break;
            }else
                $result = 'wrong word';
        }
        return view('diction', compact("result"));
    }

    function showDictionary()
    {
        return view('diction');
    }

}
