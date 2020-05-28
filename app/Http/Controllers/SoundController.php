<?php

namespace App\Http\Controllers;
use App\Models\Sound;
use Illuminate\Http\Request;

class SoundController extends Controller
{
    public function getSound(Request $request)
    {
        $input = $request->all();
        $sound = Sound::where('id_sound', $input["idsound"])->first();
        return response()->json($sound);
    }
}
