



<!DOCTYPE html>
<html lang="en">
<head>
<link href="https://fonts.googleapis.com/css?family=Oswald:700|Patua+One|Roboto+Condensed:700" rel="stylesheet">
<link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
<link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css" rel="stylesheet">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js">
	</script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js">
	</script>
	<link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css" rel="stylesheet">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js">
	</script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js">
	</script>
	<script>
	                  window.dataLayer = [{
	                    'langue' : 'en'                                                          // Obligatoire, langue du site sur lequel l'internaute se trouve : 'EN' pour site Anglais, 'FR' pour site Français, etc...
	                  }];
	</script>
	<script>
	         (function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
	                      new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
	                    j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
	                    'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
	                  })(window,document,'script','dataLayer','GTM-M2K9X4');
	</script>
	<meta content="IE=9" http-equiv="X-UA-Compatible">
	<meta content="text/html; charset=utf-8" http-equiv="Content-Type">
	<title>SEC | A promising company in badge and card printers solutions</title>
	<script async defer src="js/api.js">
	</script>
	<style media="all" type="text/css">
	            @import url("css/om_maximenu.css");

                .container{
                    background-color:#fff;

                }
                .tab{
                    background-color:rgb(147,26,62);
                    padding:50px;
                    padding-bottom:130px;
                    color:#fff;
                    font-family: Gothic, sans-serif;
                }
	</style>
</head>
<body>
    @include('header')
    <div class="tab">
        <div class="row">
    <h1>Contact Us</h1>
            </div>
</div>
<div style="margin-top:-50px;margin-bottom:10%" class="container row">
    
    <br />
    <div class="row">
        <div class="col-md-6">
            <div id="googlemap" style="width:100%; height:350px;"></div>
        </div>
        <br />
        <div class="col-md-6" style="padding-bottom:50px">
            <form >
                
                <div class="form-group"  >
                    <label for="form-name" style="margin:5px">Name</label>
                    <input type="email" class="form-control" id="form-name" placeholder="Name">
                </div>
                <div class="form-group" >
                    <label for="form-email" style="margin:5px">Email Address</label>
                    <input type="email" class="form-control" id="form-email" placeholder="Email Address">
                </div>
                <div class="form-group">
                    <label for="form-subject" style="margin:5px">Telephone</label>
                    <input type="text" class="form-control" id="form-subject" placeholder="Subject">
                </div>
                <div class="form-group">
                    <label for="form-message" style="margin:5px">Email your Message</label>
                    <textarea class="form-control" id="form-message" placeholder="Message"></textarea>
                </div>
                <button class="btn btn-success" type="submit">Contact Us</button>                
            </form>
            
        </div>

        <hr>
        <div style="text-align:center">
        <h3>Our Social Sites</h3>
                  <ul class="list-inline banner-social-buttons">
                    <li><a href="#" class="fa fa-facebook"></a></li>
                    <li><a href="#" class="fa fa-twitter"></a></li>
                    <li><a href="#" class="fa fa-google"></a></li>
                    <li><a href="#" class="fa fa-linkedin"></a></li>
                    <li><a href="#" class="fa fa-youtube"></a></li>
                    <li><a href="#" class="fa fa-instagram"></a></li>
                  </ul>
            </div>
    </div>
</div>@include('footer')
</body>

<style>
    .fa {
  padding: 10px;
  font-size: 30px;
  width: 50px;
  text-align: center;
  text-decoration: none;
  margin: 5px 2px;
  border-radius: 50%;
}

.fa:hover {
    opacity: 0.7;
    text-decoration:none;
}
.fa-facebook {
  background: #3B5998;
  color: white;
}

.fa-twitter {
  background: #55ACEE;
  color: white;
}

.fa-google {
  background: #dd4b39;
  color: white;
}

.fa-linkedin {
  background: #007bb5;
  color: white;
}

.fa-youtube {
  background: #bb0000;
  color: white;
}

.fa-instagram {
  background: #125688;
  color: white;
}

    .my-form {
        color: #305896;
    }
    .my-form .btn-default {
        background-color: #305896;
        color: #fff;
        border-radius: 0;
    }
    .my-form .btn-default:hover {
        background-color: #4498C6;
        color: #fff;
    }
    .my-form .form-control {
        border-radius: 0;
    }
</style>

<script src="https://maps.googleapis.com/maps/api/js"></script>
<script type="text/javascript">
    jQuery(function ($) {
        // Google Maps setup
        var googlemap = new google.maps.Map(
            document.getElementById('googlemap'),
            {
                center: new google.maps.LatLng(30.113660593560308, 31.335749120641402 ),
                zoom: 15,
                mapTypeId: google.maps.MapTypeId.ROADMAP
            }
        );
    });
</script>
</html>