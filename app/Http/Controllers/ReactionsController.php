<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Reactions;

class ReactionsController extends Controller
{
    public function getReactions(){
        return response()->json(Reactions::all(),200);
    }
}
