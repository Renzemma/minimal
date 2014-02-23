<?php

class PostsController extends \BaseController {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		$posts = Post::paginate(10);
		$data['posts'] = $posts;
		return View::make('minimal.posts.posts', $data);
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		return View::make('minimal.posts.postsCreate');
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store()
	{

			$inputData = Input::all();

			$user = new Post;

			$user->user_id = Auth::user()->id;
			$user->title = $inputData['title'];
			$user->content = $inputData['content'];

			$user->save();

			return Redirect::to('posts');

	}

	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{

		$data['post'] = Post::find($id);
		return View::make('minimal.posts.postsShow', $data);
	}

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		$post = Post::find($id);
		$data['post'] = $post;
		return View::make('minimal.posts.postsEdit', $data);
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{

		$postEdited = Input::all();
		$post = Post::find($id);
		$post->title = $postEdited['title'];
		$post->content = $postEdited['content'];
		$post->save();

		return Redirect::to('posts');

	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		Post::destroy($id);
		return Redirect::to('posts');

	}

}