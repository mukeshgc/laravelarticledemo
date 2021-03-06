<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Model\user\post;

class APIController extends Controller
{
	public function index()
	{
		$articles = post::where('status',1)->orderBy('created_at','DESC')->paginate(5);
		return $articles;
	}

	public function show(Post $article)
	{
		return $article;
	}
}
