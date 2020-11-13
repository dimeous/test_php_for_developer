<html>
<head>
    <meta charset="utf-8">
    <title>Sample</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>
<body>
<div class="content col-6 offset-2" >
    <form method="post" action="/post">
        <div class="form-group">
            <label for="exampleInputName">Name</label>
            <input name="name" type="text" class="form-control" id="exampleInputName" placeholder="Enter name">
        </div>
        <div class="form-group">
            <label for="exampleInputEmail1">Email address</label>
            <input name="email" type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
    <div class="row">
      %%data%%
    </div>
</div>
</body>
</html>