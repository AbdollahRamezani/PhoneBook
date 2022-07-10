<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link href="/css/bootstrap.css" rel="stylesheet">

    <script src="/js/jQuery.js"></script>
    <script src="/js/popper.min.js"></script>
    <script src="/js/bootstrap.js"></script>
    <title>New_contact</title>
</head>
<body>
<div class="row  ">
    <div class="col">
        <div class="card border-info mb-3 mt-2 mx-auto shadow rounded" style="max-width: 25rem;">
            <div class="card-header text-dark shadow text-center"> New CONTACT</div>
            <div class="card-body text-info">
                <form method="post" action="/add">
                    <div class="form-group">
                        <label for="exampleInputEmail1" class="float-left">Name</label>
                        <input type="text" name="name" class="form-control"
                               placeholder="please enter name">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputPassword1" class="float-left">Phonenumber</label>
                        <input type="text" name="phonenumber" class="form-control" placeholder="please enter phonenumber">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1" class="float-left">Job</label>
                        <input type="text" name="job" class="form-control"
                               placeholder="please enter job">
                    </div>

                    <input type="hidden" name="_token" value="{{csrf_token()}}">

                    <button name="save" type="submit" class="btn btn-success btn-block rounded shadow text-warning">SAVE</button>

                </form>
            </div>
        </div>
    </div>
</div>
</body>
</html>