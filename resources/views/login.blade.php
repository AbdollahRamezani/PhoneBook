<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link href="/css/bootstrap.css" rel="stylesheet">

    <script src="/js/jQuery.js"></script>
    <script src="/js/popper.min.js"></script>
    <script src="/js/bootstrap.js"></script>
    <title>Login</title>
</head>
<body>

@if(Session::has('message'))
    <div class="alert alert-danger text-center text-danger" role="alert">
        {{Session::get('message')}}
    </div>
@endif

<div class="row  ">
    <div class="col">
        <div class="card border-info mb-3 mt-2 mx-auto shadow rounded" style="max-width: 25rem;">
            <div class="card-header text-dark shadow text-center"> LOGIN panel phonebook</div>
            <div class="card-body text-info">
                <form method="post" action="/logincheck">
                    <div class="form-group">
                        <label for="exampleInputEmail1" class="float-left">Username</label>
                        <input type="text" name="username" class="form-control"
                               placeholder="please enter username">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputPassword1" class="float-left">Password</label>
                        <input type="password" name="password" class="form-control" placeholder="please enter password">
                    </div>

                    <input type="hidden" name="_token" value="{{csrf_token()}}">

                    <button name="login" type="submit" class="btn btn-success btn-block rounded shadow text-warning">LOGIN</button>

                </form>
            </div>
        </div>
    </div>
</div>
</body>
</html>
