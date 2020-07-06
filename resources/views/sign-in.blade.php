<!doctype html>
<html lang="en">
<head>
    @include('header')
    <title>Document</title>
</head>
<body>
    @include('nav')
    <div class="container">
        <h2>Formulaire de connexion</h2>
        <form method="post" action="sign-in">
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
            <input type="submit" class="btn btn-primary" value="Se connecter">
        </form>
    </div>

</body>
</html>
