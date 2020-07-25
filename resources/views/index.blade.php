<!doctype html>
<html lang="en">
<head>
    @include('header')
    <title>Document</title>
</head>
<body>

    @include('nav')
    <div class="container m-5">
        @foreach($articles as $article)
            <div class="card mb-3">
                <div class="card-header">
                    <h3 class="card-title">Article N° {{$article->getId()}}</h3>
                </div>
                <div class="card-body">
                    <p>{{$article->getContent()}}</p>
                </div>
            </div>
        @endforeach
    </div>

</body>
</html>
