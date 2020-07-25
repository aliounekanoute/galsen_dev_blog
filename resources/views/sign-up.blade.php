<!doctype html>
<html lang="en">
<head>
    @include('header')
    <title>Document</title>
</head>
<body>
@include('nav')
<div class="container">
    <h2>Formulaire d'inscription</h2>
    <form method="post" id="signupForm">
        <div class="form-group">
            <label for="exampleInputEmail1">Email address</label>
            <input type="text" class="form-control" name="pseudo" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
            <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
        </div>
        <div class="form-group">
            <label for="exampleInputPassword1">Password</label>
            <input type="password" class="form-control" name="password" id="exampleInputPassword1" placeholder="Password">
        </div>
        <div class="form-check">
            <input type="checkbox" class="form-check-input" id="exampleCheck1">
            <label class="form-check-label" for="exampleCheck1">Check me out</label>
        </div>
        <button type="submit" class="btn btn-primary">S'incrire</button>
    </form>

    <script>
        $('#signupForm').submit((e)=> {
            e.preventDefault();
            let formData = new FormData(e.target);

            $.ajax({
                url: '/sign-up',
                type: 'POST',
                data: formData,
                async: true,
                success: (response) => {
                    switch (response) {
                        case '0':
                            swal({
                                title: 'Inscription',
                                icon: 'success',
                                text: 'L\'inscription est passée avec succés'
                            }).then(()=> {
                                window.location.href = '/sign-in';
                            });
                            break;
                        case '1':
                            swal({
                                title: 'Inscription',
                                icon: 'error',
                                text: 'Une erreur est survenue'
                            });
                            break;
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
</div>

</body>
</html>
