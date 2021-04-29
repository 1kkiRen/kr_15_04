<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Vote;

class VoteController extends Controller
{
    public function showAll(){
        $votes = Vote::All();
        return view('index', ['votes' => Vote::paginate(5)]);
    }

    public function create(Request $req){
        $vote = new Vote;
        $vote->title = $req->title;
        $vote->text = $req->text;
        $vote->positive = 0;
        $vote->negative = 0;
        $vote->save();

        return redirect('/');
    }

    public function showId($id){
        $votes = Vote::find($id);
        return view('show_vote', ['votes' => $votes]);
    }

    public function increasePositive($id){
        $votes = Vote::find($id);
        $votes->positive++;
        $votes->save();
        return back();
    }

    public function increaseNegative($id){
        $votes = Vote::find($id);
        $votes->negative++;
        $votes->save();
        return back();
    }
}

