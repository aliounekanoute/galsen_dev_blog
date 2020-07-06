<!doctype html>
<html lang="en">
<head>
    @include('header')
    <title>Document</title>
</head>
<body>

    @include('nav')
    <div class="container">
        <ul>
            @foreach($articles as $article)
                <li>{{$article->getContent()}}</li>
            @endforeach
        </ul>
    </div>

</body>
</html>
