<!doctype html>
<html lang="en">
<head>
    @include('header')
    <title>Document</title>
</head>
<body>

    @include('nav')
    <div class="container m-5">
        @if(!empty($_SESSION))
            <button class="btn btn-primary mb-5" data-toggle="modal" data-target="#articleModal">Ajouter un nouvel article</button>
        @endif
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

    <div class="modal fade" id="articleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLongTitle">Modal title</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <form id="addArticleForm" method="post">
                    <div class="modal-body">
                        <div class="form-group">
                            <label for="content">Contenue de l'article</label>
                            <textarea class="form-control" id="content" rows="3" name="content"></textarea>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-primary">Ajouter</button>
                    </div>
                </form>

            </div>
        </div>
    </div>

    <script>
        $('#addArticleForm').submit((e) => {
            e.preventDefault();
            let formData = new FormData(e.target);

            $.ajax({
                url: 'addArticle',
                type: 'POST',
                data: formData,
                async: true,
                success: (response) => {
                    switch (response) {
                        case '0':
                            swal({
                                title: 'Ajouté!',
                                icon: 'success',
                                text: 'Votre article a été ajouté avec succés'
                            }).then(()=> {
                                window.location.href = '/';
                            });
                            break;
                        case '1':
                            swal({
                                title: 'Erreur',
                                icon: 'error',
                                text: 'Une erreur est survenue lors de l\'ajout de l\'article'
                            });
                            break;
                        case '2':
                            swal({
                                title: 'Erreur',
                                icon: 'error',
                                text: 'Vous devez être connecté pour ajouter un article'
                            });
                    }
                },
                cache: false,
                contentType: false,
                processData: false,
                error: (error) => {
                    swal({
                        title: 'Inscription',
                        icon: 'error',
                        text: error
                    });
                }
            });
        });
    </script>

</body>
</html>
