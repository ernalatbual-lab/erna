<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CaesarController extends Controller
{
    public function index()
    {
        return view('caesar');
    }

    public function process(Request $request)
{
    $text = $request->text;
    $shift = (int) $request->shift;
    $mode = $request->mode;
    $result = "";

    if ($mode == "decrypt") {
        $shift = 26 - $shift;
    }

    for ($i = 0; $i < strlen($text); $i++) {
        $char = $text[$i];

        if (ctype_alpha($char)) {
            $ascii = ord($char);
            $base = ctype_upper($char) ? 65 : 97;
            $result .= chr(($ascii - $base + $shift) % 26 + $base);
        } else {
            $result .= $char;
        }
    }

    return view('caesar', [
        'result' => $result,
        'text' => $text,
        'shift' => $request->shift,
        'mode' => $mode
    ]);
}
}