<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>

    <!-- Fonts -->
    <link href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">

    <style>
        body {
            display: flex;
            justify-content: center;
            align-items: center;
            min-height: 100vh;
            margin: 0;
        }
    </style>
</head>
<body>
    <form style="background-color: rgb(52, 179, 210); padding: 20px">
        <div>
            <div class="form-group col-md-6" >
                <label for="inputEmail4">Name</label>
                <input type="text" class="form-control" id="inputEmail4" placeholder="name" name="name">
            </div>
            <div class="form-group col-md-6">
                <label for="inputPassword4">Discription</label>
                <input type="text" class="form-control" id="inputPassword4" placeholder="discription" name="discription">
            </div>
        </div>
        <div class="form-group">
            <label for="inputAddress">Price</label>
            <input type="text" class="form-control" id="inputAddress" placeholder="Price" name="Price">
        </div>
       
        <button type="submit" class="btn btn-primary">Sign in</button>
    </form>
</body>
</html>

