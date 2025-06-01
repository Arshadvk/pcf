<?php

namespace App\Http\Controllers;

use App\Models\Committee;
use Illuminate\Http\Request;

class CommitteeController extends Controller
{
    //
    public function index()
    {
        $committee = Committee::all();
        return view('members.index', compact('committee'));
    }

    
}
