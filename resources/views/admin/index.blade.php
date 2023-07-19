
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Polibang Creative Studio</title>
    <link rel="stylesheet" href="assets/admin/css/main/app.css">
    <link rel="stylesheet" href="assets/admin/css/pages/auth.css">
    <link rel="shortcut icon" href="assets/img/logo.png" type="image/x-icon">
    <link rel="shortcut icon" href="assets/img/logo.png" type="image/png">
   
</head>
<!-- <img src="assets/img/logopcs.png" -->
<body>
    
   <center> <div id="auth">
<div class="row h-100">
    <div class="col-lg-5 col-12">
        <div class="center">
      <div id="auth-left">
          <center>  <div class="auth-logo">
         
                <a href="index"><img src="assets/img/logopcs.png" alt="Logo"></a>
                <br>
                <br>
             
            <!-- <h2 class="">Log in.</h2> -->
            <!-- <p class="auth-subtitle mb-2">Silahkan Masukan Username dan Password</p> -->
            
            <h4 >Silahkan Masukan Username dan Password</h4>
            @if ($message = Session::get('warning'))
                 <div class="alert alert-danger" role="alert">
                Silahkan Masukan Username
                </div>
            @endif
            
              <!-- <form action="dashboard"> -->
            <form action="/login" method="post"> 
                @csrf
                <div class="form-group position-relative has-icon-left mb-4">
                    <input type="text" name="name" class="form-control form-control-xl" placeholder="Username" required autocomplete="off">
                    <div class="form-control-icon">
                        <i class="bi bi-person" ></i>
                    </div>
                </div>
                <div class="form-group position-relative has-icon-left mb-4">
                    <input type="password" name="password" class="form-control form-control-xl" placeholder="Password" required>
                    <div class="form-control-icon">
                        <i class="bi bi-shield-lock"></i>
                    </div>
                </div>
                <div class="form-check form-check-lg d-flex align-items-end">
                    <input class="form-check-input me-2" type="checkbox" value="" id="flexCheckDefault">
                    <label class="form-check-label text-gray-600" for="flexCheckDefault">
                        Keep me logged in
                    </label>
                </div>
               
                <button class="btn btn-primary btn-block btn-lg shadow-lg mt-5" >Log in</button>
            </form>
            </div>
            
          
</div>
        </div>
    </div>
    <div class="col-lg-7 d-none d-lg-block">
        <div id="auth-right">

        </div>
    </div>
</div>

    </div>
</body>

</html>

