<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
        <title>Postagem</title>

       
        
    </head>
    <body>
        <div class="container">
            <div class="row">
            <p><a href='{{ URL("posts") }}'>Voutar aos Posts</a></p>

                <div class="col-md-12 jumbotron">
                    <p><b>Title:</b> {{ $post->title }}</p>
                    <br>
                    <p><b>Body:</b> {{ $post->body }}</p>
                    <br>
                    <p><a href='{{ URL("posts/$post->id/comments") }}'>comentarios</a></p>
                </div>
                
            </div>

        </div>
        
    </body>
</html>
