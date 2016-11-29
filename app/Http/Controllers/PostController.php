<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;
class PostController extends Controller
{
	public function index(){
		$posts = Post::all();
		return response()->json($posts);
	}

	public function cadastro(Request $request){
		if(Post::create($request->all())){
			return response('ok',201);
		}
	}

	public function excluir($id){

		$post = Post::find($id);

		if(!$post) {
			return response()->json([
				'messagem'   => 'Não encontrado',
				], 404);
		}else{
			$post->delete();
			return response('ok',201);
		}
	}
}
