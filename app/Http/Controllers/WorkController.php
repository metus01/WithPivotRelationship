<?php

namespace App\Http\Controllers;

use App\Models\Recette;
use Illuminate\Http\Request;

class WorkController extends Controller
{
    public function index()
    {
         $recette = Recette::findOrFail(1);
        // $recette->ingredients()->attach([
        //     1 => [
        //         'quantity' => '800ML'
        //     ]
        // ]);
        $recette->ingredients()->sync([
            1
            =>
            [
                'quantity' => '1000ML'
            ]
        ]);
        $recette->ingredients()->syncWithoutDetaching([
            3 => [
                'quantity' => '1447ML'
            ]
            ]);
        dd(request());
    }
}
