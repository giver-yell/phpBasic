<?php
// var_dump($posts);
// exit;
// var_dumpより見やすい
// dd($posts);
?>

<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="utf-8">
    <title>My BBS</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <div class="container">
        <h1>My BBS</h1>
        <ul>
            {{-- @foreach ($posts as $post)
                <li>{{ $post }}</li>
            @endforeach --}}

            {{-- bladeの記法 --}}
            {{-- 空に対応するforeach --}}
            @forelse ($posts as $post)
                <li>{{ $post }}</li>
            {{-- 空の時 --}}
            @empty
                <li>No posts yet!</li>
            @endforelse

        </ul>
    </div>
</body>
</html>
