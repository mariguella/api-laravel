<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
        <title>Comentarios</title>
    </head>
    <body>

        <div class="container">

            <p><a href='{{ url()->previous() }}'>retornar</a></p>

            <div class="row">
                @foreach($comments as $comment)
                <div class="col-md-4 jumbotron">
                    <p><b>Comment Name: </b>{{ $comment->name }}</p>
                    <p><b>Comment Body: </b>{{ $comment->body }}</p>
                    <p><b>Comment By: </b>{{ $comment->email }}</p>
                </div>
                @endforeach
            </div>

        </div>
    </body>
</html>