<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta charset="UTF-8">
    <title>PhoneBook</title>

    <link href="/css/bootstrap.css" rel="stylesheet">

    <script src="/js/jQuery.js"></script>
    <script src="/js/popper.min.js"></script>
    <script src="/js/bootstrap.js"></script>

    <title>Peronality</title>

    <style>
        .gridiant_blue {
            background: linear-gradient(304deg, rgba(140, 140, 140, 1) 8%, rgba(175, 174, 174, 0.9051724137931034) 29%, rgba(145, 145, 145, 1) 47%, rgba(163, 163, 163, 0.8879310344827587) 68%, rgba(117, 117, 117, 1) 86%);

        }
    </style>
</head>
<body class="bg-light">
<a href="/" class="btn btn-warning rounded float-right">HOME</a>

<div class="card mb-3 container mt-3 gridiant_blue shadow rounded" style="max-width: 540px;">
    <div class="row no-gutters">

        <div class="col-md-4">
            <img src="/images/{{$c->image}}" class="card-img my-auto shadow mt-3 ml-0" alt="NO! image">
        </div>
        <div class="col-md-8">
            <div class="card-body">
                <h4 class="card-title text-warning">
                  {{$c->name}}
                </h4>
                <p class="card-text text-light">
                    {{$c->phonenumber}}
                </p>
                <p class="card-text text-warning">{{$c->job}}</p>
            </div>
        </div>
    </div>

</div>

</body>
</html>