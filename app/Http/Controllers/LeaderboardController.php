<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Score;

class LeaderboardController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function topScore() {
        return Score::orderBy('score', 'desc')->limit(10)->get();
    }

    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function fastestTime() {
        return Score::orderBy('time', 'asc')->limit(10)->get();
    }
}
