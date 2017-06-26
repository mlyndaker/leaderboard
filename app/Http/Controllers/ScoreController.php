<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Score;

class ScoreController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index($id = null) {
        if ($id == null) {
            return Score::orderBy('created_at', 'desc')->limit(100)->get();
        } else {
            return $this->show($id);
        }
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  Request  $request
     * @return Response
     */
    public function store(Request $request) {
        $score = new Score;

        $score->name = $request->input('name');
        $score->score = $request->input('score');
        $score->time = $request->input('time');
        $score->save();

        return ['success' => true, 'id' => $score->id];
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function show($id) {
        return Score::find($id);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  Request  $request
     * @param  int  $id
     * @return Response
     */
    public function update(Request $request, $id) {
        $score = Score::find($id);

        $score->name = $request->input('name');
        $score->score = $request->input('score');
        $score->time = $request->input('time');
        $score->save();

        return ['success' => true, 'id' => $score->id];
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function destroy(Request $request, $id) {
        $score = Score::find($id);

        $score->delete();

        return ['success' => true];
    }
}
