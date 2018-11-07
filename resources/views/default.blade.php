<html lang="ja">
<head>
	<meta charset="utf-8" />

	<!-- bootstrap -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap-theme.min.css">
	<script src="//ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>

	<title>Laravelの掲示板</title>
</head>
<body>

@extends('layouts.default')
@section('content')

    <div class="col-xs-8 col-xs-offset-2">

        @foreach($posts as $post)

            <h2>タイトル：{{ $post->title }}
                <small>投稿日：{{ date("Y年 m月 d日",strtotime($post->created_at)) }}</small>
            </h2>
            <p>カテゴリー：{{ $post->category->name }}</p>
            <p>{{ $post->content }}</p>
            <p>{{ link_to("/bbc/{$post->id}", '続きを読む', array('class' => 'btn btn-primary')) }}</p>
            <p>コメント数：{{ $post->comment_count }}</p>
            <hr />
        @endforeach

    </div>

@stop

</body>
</html>

