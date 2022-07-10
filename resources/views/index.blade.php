<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>PhoneBook</title>
    <link href="/css/bootstrap.css" rel="stylesheet">
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <script src='https://kit.fontawesome.com/a076d05399.js' crossorigin='anonymous'></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="/js/jQuery.js"></script>
    <script src="/js/popper.min.js"></script>
    <script src="/js/bootstrap.js"></script>


    <style>
        #add-contact {
            position: fixed;
            right: 0px;
            top: 0px;
            z-index: 1;
        }

        #delete-contact {
            position: fixed;
            left: 0px;
            top: 0px;
            z-index: 1;
        }

        #header {
            z-index: 1;
            opacity: 0.5 ;
            background: radial-gradient(circle,
            rgba(128, 128, 129, 1) 3%, rgba(198, 197, 197, 0.8879310344827587) 43%, rgba(98, 98, 98, 1) 93%);
        }
        .gridiant_gray
        {
            background: linear-gradient(328deg, rgba(197,197,198,1) 23%, rgba(250,250,250,0.8879310344827587) 54%, rgba(179,179,179,1) 78%);

        }
    </style>

</head>
<body>

<div class="row container">
    <div id="header"
         class="mx-auto font-weight-bold text-light rounded position-fixed w-100 text-center shadow alert alert-secondary"
         role="alert">
        PHONE BOOK
    </div>
    <br>
    <a name="add" id="add-contact" href="/new_contact" class=" btn btn-lg " role="link"
       aria-pressed="true">
New Contact
    </a>
</div>

@if(Session::has('message'))
    <div class="alert alert-danger" role="alert">
        {{Session::get('message')}}
    </div>
@endif

<div class="row container mt-3 mx-auto">
    <div class="col">

        @foreach($contacts as $contact)
            <a href="/single/{{$contact->id}}">

            <ul class="list-group shadow rounded  mt-2 w-50 mx-auto">
                <li class="list-group-item gridiant_gray  ">
                    <img src="/images/{{$contact->image}}" class="rounded-circle mx-auto d-block"
                         alt="NO image in Phonebook !"><br>
                    <label class="float-left d-block"> Name :</label>
                    <h5 class="float-left text-info d-block"> {{$contact->name}}</h5>
                </li>
                <li class="list-group-item list-group-item-light">
                    <label class="float-left">Phone Number :</label>
                    <h6 class="text-primary d-inline float-left">{{$contact->phonenumber}}</h6>
                </li>
                <li class="list-group-item list-group-item-dark">
                    <label class="float-left"> Job : </label>
                    <h6 class="d-inline text-dark float-left">{{$contact->job}}</h6>
                </li>
            </ul>
           </a>
            @endforeach
    </div>
</div>

</body>
</html>