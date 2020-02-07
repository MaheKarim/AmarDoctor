<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Review;
use Illuminate\Support\Facades\Storage;

class ReviewController extends Controller
{
    // code start
    public function addReview()
    {
        return view('backend.review._add_review');
    }

    public function createReview(Request $request)
    {
        $this->request()->validate(array(
            'reviewer_name' => 'required',
            'reviewer_designation' => 'required',
            'reviewer_review' => 'required',
            'reviewer_image' => 'required',
        ));
        $image = '';
        if($request->has('reviewer_image'))
        {
            $image = $request->file('reviewer_image')->store('reviewer_images');
        }
        $reviews = new Review();
        $reviews->reviewer_name = $request->reviewer_name;
        $reviews->reviewer_designation = $request->reviewer_designation;
        $reviews->reviewer_review = $request->reviewer_review;
        $reviews->reviewer_image = $image;
        $reviews->save();

        session()->flash('message','Review Create Successfully!');

        return redirect()->back();

    }
}
