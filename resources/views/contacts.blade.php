<!doctype html>
<html lang="en">
<head>
<title>Texas Trans Coaliation Contact Form </title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<link rel="shortcut icon" href="{{ asset('newlogo.png') }}" type="image/x-icon">
<link href="https://fonts.googleapis.com/css?family=Roboto:400,100,300,700" rel="stylesheet" type="text/css">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="{{asset('css/style.css')}}">
<style>
  .logo-container {
    display: flex;
    justify-content: center;
    align-items: center;
    height: 50px;
  }
</style>
</head>
<body>
<div class="logo-container">
  <img src="{{asset('newlogo.png')}}" alt="Logo">
</div>
<section class="ftco-section">
<div class="container">
<div class="row justify-content-center">
<div class="col-md-6 text-center mb-5">
<h2 class="heading-section">Contact Form </h2>
</div>
</div>
<div class="row justify-content-center">
<div class="col-lg-10 col-md-12">
<div class="wrapper">
<div class="row no-gutters">
<div class="col-md-7 d-flex align-items-stretch">
<div class="contact-wrap w-100 p-md-5 p-4">
<h3 class="mb-4">Get in touch</h3>
@if (session('error'))
    <div id="form-message-error" class="mb-4">
        {{ session('error') }}&#x1F922
    </div>
@elseif (session('sucess'))
    <div id="form-message-sucess" class="mb-4" >
           {{ session('sucess') }}&#x1F389;
    </div>
@endif
<form method="POST" id="contactForm" name="contactForm" action="{{route('contact.send')}}">
@csrf 
<div class="row">
<div class="col-md-6">
<div class="form-group">
<input type="text" class="form-control" name="name" id="name" placeholder="Name">
</div>
</div>
<div class="col-md-6">
<div class="form-group">
<input type="email" class="form-control" name="email" id="email" placeholder="Email">
</div>
</div>
<div class="col-md-12">
<div class="form-group">
<input type="text" class="form-control" name="subject" id="subject" placeholder="Subject">
</div>
</div>
<div class="col-md-12">
<div class="form-group">
<textarea name="message" class="form-control" id="message" cols="30" rows="7" placeholder="Message"></textarea>
</div>
</div>
<div class="col-md-12">
<div class="form-group">
<input type="submit" value="Send Message" class="btn btn-primary">
<div class="submitting"></div>
</div>
</div>
</div>
</form>
</div>
</div>
<div class="col-md-5 d-flex align-items-stretch">
<div class="info-wrap bg-primary w-100 p-lg-5 p-4">
<h3 class="mb-4 mt-md-4">Contact us</h3>
<div class="dbox w-100 d-flex align-items-start">
<div class="icon d-flex align-items-center justify-content-center">
<span class="fa fa-map-marker"></span>
</div>
<div class="text pl-3">
<p><span>Address:</span> 2864 spotted Owl dr Forth wort, TX 76244</p>
</div>
</div>
<div class="dbox w-100 d-flex align-items-center">
<div class="icon d-flex align-items-center justify-content-center">
<span class="fa fa-phone"></span>
</div>
<div class="text pl-3">
<p><span>Phone:</span> <a href="tel://1234567920">+1(469) 432-8835</a></p>
</div>
</div>
<div class="dbox w-100 d-flex align-items-center">
<div class="icon d-flex align-items-center justify-content-center">
<span class="fa fa-paper-plane"></span>
</div>
<div class="text pl-3">
<p><span>Email:</span> <a href="mailto:Texastranscoalition@gmail.com"><span class="__cf_email__" data-cfemail="b9d0d7dfd6f9c0d6cccbcad0cddc97dad6d4">Texastranscoalition@gmail.com</span></a></p>
</div>
</div>
<div class="dbox w-100 d-flex align-items-center">
<div class="icon d-flex align-items-center justify-content-center">
<span class="fa fa-globe"></span>
</div>
<div class="text pl-3">
<p><span>Website</span> <a href="#">www.Texas trans coalition.org</a></p>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
</section>
<script data-cfasync="false" src="/cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script><script src="js/jquery.min.js"></script>
<script src="js/popper.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/jquery.validate.min.js"></script>
<script src="js/main.js"></script>
</body>
</html>
