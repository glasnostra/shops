<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\UserReview;

class UserReviewController extends Controller
{
    
    public function index() {
    	return UserReview::all();
    }

    public function show(UserReview $userReview) {
    	return $userReview;
    }

    public function store(Request $request) {
    	$userReview = UserReview::create($request->all());

    	return response()->json($userReview, 201);
    }

    public function update(Request $request, $id) {
    	$userReview = UserReview::findOrFail($id);
    	$userReview->update($request->all());

    	return response()->json($userReview, 200);
    }

    public function destroy(Request $request, $id) {
    	$userReview = UserReview::findOrFail($id);
    	$userReview->delete();

    	return response()->json(null, 204);
    }
}
