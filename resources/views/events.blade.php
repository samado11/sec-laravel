
<!DOCTYPE html>
<html dir="ltr" lang="en">
<head>
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

	</style>
	<style>
	   a{
	       color:#000;
	   }
	   #heading #two{
	   display: none;
	}
	#heading:hover #one{
	   display: none;
	}
	#heading:hover #two{
	   display: block;
	}

	#heading:hover{
	   color:#fff;
	   background-color:rgb(147,26,62)
	}
	#heading{
	   height:300px;
	   background-color:none
	}
	a:hover{
	   text-decoration:none;
	   color:#fff
	}
	.con{
	   background-color:#fff;
	   font-family: Gothic, sans-serif;

	}
	.leftBlock{
	   background-color:rgb(147,26,62);
	   padding:50px;
	   padding-bottom:100px;
	   color:#fff;
	   font-family: Gothic, sans-serif;
	} 
	</style>
</head>
<body class="">
	<noscript><iframe height="0" src="ns.html" style="display:none;visibility:hidden" width="0"></iframe></noscript>
	<div id="skip-link">
		<div>
			<a class="element-invisible element-focusable" href="#block-system-main">Skip to main content</a>
		</div>
	</div>
	<div id="above">
		<div class="row">
			<a href="#" id="collapseAd">Close</a>
			<div class="region region-above">
				<div class="block block-bean" id="block-bean-contact-evolis-china-0">
					<div class="content"></div>
				</div>
			</div>
		</div>
	</div>@include ('header')
	<section class="leftBlock">
		<
        <div class="container">
  <h2>Gallery</h2>  
  <div id="myCarousel" class="carousel slide" data-ride="carousel">
    <!-- Indicators -->
    <ol class="carousel-indicators">
      <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
      <li data-target="#myCarousel" data-slide-to="1"></li>
      <li data-target="#myCarousel" data-slide-to="2"></li>
    </ol>

    <!-- Wrapper for slides -->
    <div class="carousel-inner">
    
      <div class="item active">
      @foreach($data as $d)
        <img src="/images/img/{{$d->img}}" alt="Los Angeles" style="width:50%;">
        <h2>{{$d->title_en}}</h2>
        <p>{{$d->details_en}}</p>
        @endforeach
      </div>
      

    </div>
    

    <!-- Left and right controls -->
    <a class="left carousel-control" href="#myCarousel" data-slide="prev">
      <span class="glyphicon glyphicon-chevron-left"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="right carousel-control" href="#myCarousel" data-slide="next">
      <span class="glyphicon glyphicon-chevron-right"></span>
      <span class="sr-only">Next</span>
    </a>
  </div>
</div>
	</section>

	@include ('whychooseus') @include ('footer')
</body>
</html>