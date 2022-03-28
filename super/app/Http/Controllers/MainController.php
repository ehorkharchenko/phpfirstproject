<?php

namespace App\Http\Controllers;

use App\Models\ReviewModel;
use App\Models\UserModel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class MainController extends Controller
{

    public function home()
    {
        return view('home');
    }

    public function about()
    {
        return view('about');
    }

    public function review()
    {
        $reviews = new ReviewModel();

        return view('review', ['reviews' => $reviews->all()->reverse()]);
    }

    public function review_check(Request $request)
    {
        $valid = $request->validate([
            'fullname' => 'required|min:5|max:100',
            'email' => 'required|min:4|max:100',
            'subject' => 'required|min:4|max:50',
            'message' => 'required|min:15|max:500'
        ]);

        $review = new ReviewModel();
        $review->email = $request->input('email');
        $review->fullname = $request->input('fullname');
        $review->subject = $request->input('subject');
        $review->message = $request->input('message');

        $review->save();

        return redirect()->route('review');
    }

}
