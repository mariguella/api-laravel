<?php

namespace Controller;


class PostController {


    public function index(){
        $url = 'https://jsonplaceholder.typicode.com/posts/3/comments';
        $ch = curl_init($url);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
        curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "GET");
        $resultado = json_decode(curl_exec($ch));

       // dd($resultado);
       return response($resultado);

        // foreach ($resultado as $indice) {
        //    // var_dump($indice);
        //     $posts = $indice->title;
        //     $posts = $indice->body;
        //     // foreach ($ator->films as $filme) {
        //     //     echo "Filme: " . $filme . "<br>";
        //     // }
            
             
        // }
        

    }
    public function show($id){
        $url = 'https://jsonplaceholder.typicode.com/posts/'.$id;
        $ch = curl_init($url);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
        curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "GET");
        $resultado = json_decode(curl_exec($ch));

       // dd($resultado);
       return response($resultado);
    }


    public function comments($id){
        $url = 'https://jsonplaceholder.typicode.com/posts/6/comments';
        $ch = curl_init($url);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
        curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "GET");
        $resultado = json_decode(curl_exec($ch));

       // dd($resultado);
       return response($resultado);
    }
}