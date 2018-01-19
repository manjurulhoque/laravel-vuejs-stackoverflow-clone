<?php

namespace App\Http\Controllers;

use App\Vote;
use Illuminate\Http\Request;
use Auth;

class VoteController extends Controller
{
    private $vote;

    function __construct(Vote $vote)
    {
        $this->vote = $vote;
    }

    public function upvote(Request $request)
    {
        return response()->json($request);
    }

    public function favorite(Request $request)
    {
        $v = $this->vote::where('question_id', $request->question_id)
            ->where('user_id', Auth::id())->first();
        if ($v) {
            $v->favorite = true;

            $v->save();
        } else {
            $this->vote->user_id = Auth::id();
            $this->vote->favorite = true;
            $this->vote->question_id = $request->question_id;

            $this->vote->save();
        }
        return response()->json(['status' => 'success'], 200);
    }

    public function unfavorite(Request $request)
    {
        $v = $this->vote::where('question_id', $request->question_id)
                        ->where('user_id', Auth::id())->first();
        if ($v) {
            $v->favorite = false;

            $v->save();
        }
        return response()->json(['status' => 'success'], 200);
    }

    public function check_favorite($question_id)
    {
        $v = $this->vote::where('question_id', $question_id)
                        ->where('user_id', Auth::id())->first();

        if ($v) {
            if ($v->user_id == Auth::id() && $v->favorite == false) {
                return response()->json(['status' => 'ok', 'favorite' => false]);
            } else if ($v->user_id == Auth::id() && $v->favorite == true) {
                return response()->json(['status' => 'ok', 'favorite' => true]);
            }
        }

        return response()->json(['status' => 'failed']);
    }
}
