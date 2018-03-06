<!DOCTYPE html>

<html>
    <head>
        <meta charset="UTF-8">
        <title>TUGAS 2</title>
        <link rel="icon"href="assets/images/login.png">
        <link rel="stylesheet"href="assets/css/bootstrap.css">
        <link rel="stylesheet"href="assets/css/floating-labels.css">
        
        <style>
            body{ background-image: url("assets/css/www.jpg");background-repeat: no-repeat; 
            background-position:center ;background-size: 100%;}
        </style>
    </head>
    <body >
        <form class="form-signin">
            <div class="text-center mb-4">
                <img class="mb-4"src="assets/images/fto.png" width="100"height="100">
                <h1 style="color: greenyellow">Selamat Datang</h1> 
            </div>
            <div class="form-label-group">
                <input class="form-control" type="email"id="inEmail" placeholder="Email Address" autofocus="yes" autocomplete="no" required="yes" >
            <label for="inEmail">Email Address</label>
            </div>
            <div class="form-label-group">
                <input class="form-control" type="password"id="inPassword"placeholder="password" required="yes">
                <label for="inPassword">password</label>
            </div>
            <div class="checkbox mb-3">
                <label style="color: greenyellow">
                    <input type="checkbox"> remember me...?
                </label>
            </div>
            <button type="submit" class="btn btn-lg btn-danger btn-block">LOGIN</button>
        </form>  
    </body>
</html>
 