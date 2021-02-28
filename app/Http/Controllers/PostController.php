<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PostController extends Controller
{
    /**
     * metodo que retorna todos posts
     * @return mixed
     */
    public function index(){
        $url = 'https://jsonplaceholder.typicode.com/posts';
        $ch = curl_init($url);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
        curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "GET");
        $resultado = json_decode(curl_exec($ch));

       return view('Postagens.posts', ['posts'=>$resultado]);

    }
    /**
     * metodo que retorna um post 
     * @param $id integer
     * @return mixed
     */
    public function show($id){
        $url = 'https://jsonplaceholder.typicode.com/posts/'.$id;
        $ch = curl_init($url);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
        curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "GET");
        $resultado = json_decode(curl_exec($ch));

       return view('Postagens.Post', ['post'=>$resultado]);
    }
    /**
     * metodo que retorna os comentarios 
     * @param $id integer
     * @return mixed
     */
    public function comments($id){
        $url = 'https://jsonplaceholder.typicode.com/posts/'.$id.'/comments';
        $ch = curl_init($url);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
        curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "GET");
        $resultado = json_decode(curl_exec($ch));

       return view('Postagens.comments', ['comments'=>$resultado]);
    }
}
