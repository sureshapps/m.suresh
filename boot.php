<!DOCTYPE html><html class="pixel-ratio-3 retina ios ios-17 ios-17-4 ios-gt-16 ios-gt-15 ios-gt-14 ios-gt-13 ios-gt-12 ios-gt-11 ios-gt-10 ios-gt-9 ios-gt-8 ios-gt-7 ios-gt-6 watch-active-state"><head>

<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<meta name="viewport" content="width=device-width; initial-scale=0.5, maximum-scale=0.5, minimum-scale=0.5, user-scalable=no, minimal-ui">
<meta name="apple-mobile-web-app-capable" content="yes">
<meta name="apple-mobile-web-app-status-bar-style" content="black">
<meta name="format-detection" content="telephone=no">

<link href="chat/location_icons/hax.png" rel="apple-touch-icon">
<link href="chat/location_icons/hax.png" rel="apple-touch-icon" sizes="152x152">
<link href="chat/location_icons/hax.png" rel="apple-touch-icon" sizes="167x167">
<link href="chat/location_icons/hax.png" rel="apple-touch-icon" sizes="180x180">
<link href="chat/location_icons/hax.png" rel="icon" sizes="192x192">
<link href="chat/location_icons/hax.png" rel="icon" sizes="128x128">

<title>iCell</title>

<link rel="stylesheet" property="stylesheet" href="settings/framework7/dist/css/framework7.ios.min.css">
<link rel="stylesheet" property="stylesheet" href="settings/framework7/dist/css/framework7.ios.colors.css">
<link rel="stylesheet" property="stylesheet" href="settings/framework7/slider/dist/css/swiper.min.css">
<script src="settings/framework7/slider/dist/js/swiper.min.js"></script>
<script type="text/javascript" src="settings/framework7/dist/js/framework7.min.js"></script>
<script type="text/javascript" src="settings/framework7/dist/js/my-app.js"></script>

<script src="settings/js/jquery-2.1.4.min.js"></script>
<link rel="stylesheet" property="stylesheet" type="text/css" href="settings/styles/boot.css">




<style>.swiper-container {
	width: 100%;
	height: 100%;
}


</style>

</head>

<body style="margin:0; background-color:#000;">

	




<div id="boot-screen" style="position:relative; width:100%; height:100%; overflow:hidden; background-color:#000; z-index:1000;">

	<div id="ihax-logo-box" style="position: relative; width: 40vh; margin: 30vh auto 0px; text-align: center; height: 235px; overflow: auto;">
	    <img id="ihax-logo" style="position: absolute; top: 0px; left: 0px; width: 100%;" src="settings/Icell5.png" alt="ihax">
       	<img id="ihax-logo-dim" style="position: absolute; top: 0px; left: 0px; width: 100%; opacity: 1; transition: 5s; display: none;" src="settings/Icell-dim.png" alt="ihax-dim">

    </div>
    

</div>


<div id="white-flash" style="position: fixed; top: 0px; left: 0px; background-color: rgb(255, 255, 255); width: 100%; height: 100%; z-index: 1000; opacity: 0; transition: 0.5s;"></div>



<div class="index-background" style="position:absolute; top:0; left:0; opacity:0;
width:100%; height:100%;
background-image:url('apps/settings/wallpaper/wallpaper/default-wallpaper.jpg');
background-color:#000;
background-repeat:no-repeat;
background-size:cover;
background-position:center;
overflow:hidden;
box-shadow:0 0 150px 0 #000 inset; "></div>


<div class="swiper-container swiper-container-horizontal" style="position:absolute; top:0; left:0;opacity:0;
width:100%; height:100%;
overflow:hidden; color:#fff; text-align:center; 

">
    <div class="swiper-wrapper" style="margin-top: 5vh; transform: translate3d(-780px, 0px, 0px); transition-duration: 0ms;">
    
        <div class="swiper-slide swiper-slide-active" style="width: 780px;"></div>

        <div class="swiper-slide swiper-slide-next" style="width: 780px;">
        	<span id="local-time" style="font-size:15.5vh; font-family:iphone-lite; font-weight:500; line-height:1em; ">12:17</span><br>
        	<span id="local-date" style="font-size:3.25vh; font-family:iphone; font-weight:500;">Thursday, February 6</span>

			<script>
                var dt = new Date();
                
                var time_hour = dt.getHours();
                if (time_hour > 12) { time_hour = time_hour -12 };
                if (time_hour == 0) { time_hour = 12 };
                
				
				
				var time_minutes = dt.getMinutes();
								
				if (time_minutes < 10) {
					time_minutes = '0' + dt.getMinutes().toString();
				}
								
				if (dt.getDay() == 1) {
					date_day = 'Monday';	
				} else if (dt.getDay() == 2) {
					date_day = 'Tuesday';					
				} else if (dt.getDay() == 3) {
					date_day = 'Wednesday';	
				} else if (dt.getDay() == 4) {
					date_day = 'Thursday';					
				} else if (dt.getDay() == 5) {
					date_day = 'Friday';	
				} else if (dt.getDay() == 6) {
					date_day = 'Saturday';	
				} else if (dt.getDay() == 0) {
					date_day = 'Sunday';	
				} 
				
				
				if (dt.getMonth()+1 == 1) {
					date_month = 'January';
				} else if (dt.getMonth()+1 == 2) {
					date_month = 'February';
				} else if (dt.getMonth()+1 == 3) {
					date_month = 'March';
				} else if (dt.getMonth()+1 == 4) {
					date_month = 'April';					
				} else if (dt.getMonth()+1 == 5) {
					date_month = 'May';
				} else if (dt.getMonth()+1 == 6) {
					date_month = 'June';
				} else if (dt.getMonth()+1 == 7) {
					date_month = 'July';					
				} else if (dt.getMonth()+1 == 8) {
					date_month = 'August';
				} else if (dt.getMonth()+1 == 9) {
					date_month = 'September';
				} else if (dt.getMonth()+1 == 10) {
					date_month = 'October';
				} else if (dt.getMonth()+1 == 11) {
					date_month = 'November';
				} else if (dt.getMonth()+1 == 12) {
					date_month = 'December';
				}
				
				
				
				
				
				
                $("#local-time").html(time_hour + ":" + time_minutes);
               	$("#local-date").html(date_day + ", " + date_month + " " + dt.getDate());

                
                
            </script>
            
            <div style="position:absolute; bottom:10vh; width:100%; height:auto; overflow:auto; font-size:5vh; text-align:center;
            font-family:iphone; opacity:0.4; color:#fff; line-height:10vh;
            
            
            
            ">
            
            	<img src="settings/arrow-up.png" style="width:2.85vh; height:6vh; margin-right: 3px;" alt="Swipe">
            	<span style="position:relative; top:-1.6vh;">slide to unlock</span>
            
            </div>

        </div>
    </div>
    
</div>


<script>
var swiper = new Swiper('.swiper-container', {
	initialSlide: 1,
	iOSEdgeSwipeThreshold: 0,
	onSlideChangeEnd: function (swiper) {
		if (swiper.activeIndex == 0) {
			load_home();
		}
	}
});

var mySwiper = new Swiper('.swiper-container');
mySwiper.on('slideChangeStart', function () {
    console.log('slide change start');
});

function load_home() {
	$(".index-background").css({
		opacity: 0,
		transition: 'all 0.5s'
	});
	
	$(".swiper-container").css({
		opacity: 0,
		transition: 'all 0.5s'
	});
	setTimeout(function(){ window.location = "home/home.php"; }, 0);
}


$(window).on("load", function() {
	$("#ihax-logo-box").height(
		$("#ihax-logo-dim").height()
	);
	
	$("#ihax-logo-dim").css({
		opacity: 1,
		transition: 'all 2s'
	});
	
	 setTimeout( function(){
		$('#white-flash').show();		
		$('#ihax-logo').show();	
		$('#ihax-logo-dim').hide();
		
		setTimeout(function() {
			$('#white-flash').css({
				opacity: 0,
				transition: 'all 0.5s'	
			},2000);	
			setTimeout(function() {
				$("#ihax-text").css({
					opacity: 1,
					transition: 'all 2s'
				},2000);
				setTimeout(function() {
					$("#ihax-logo-box").css({
						opacity: 0,
						transition: 'all 0.5s'					
					});
					$("#ihax-text").css({
						opacity: 0,
						transition: 'all 0.5s'						
					});
					
					setTimeout(function() {
						$("#boot-screen").hide();
						$("#white-flash").hide();
						$(".index-background").css({
							opacity: 0.5,
							transition: 'all 1s'
						});
						
						$(".swiper-container").css({
							opacity: 1,
							transition: 'all 1s'
						});
					},1000);
				},3000);
			},300);
		},100);
	},1000);
});

if ((/iphone|ipod|ipad.*os 5/gi).test(navigator.appVersion)) {
	window.onpageshow = function(evt) {
		if (evt.persisted) {
			document.body.style.display = "none";
			location.reload();
		}
	};
}

var xStart, yStart = 0;
 
document.addEventListener('touchstart',function(e) {
    xStart = e.touches[0].screenX;
    yStart = e.touches[0].screenY;
});
 
document.addEventListener('touchmove',function(e) {
    var xMovement = Math.abs(e.touches[0].screenX - xStart);
    var yMovement = Math.abs(e.touches[0].screenY - yStart);
    if((yMovement * 3) > xMovement) {
        e.preventDefault();
    }
});


</script>


<script>'undefined'=== typeof _trfq || (window._trfq = []);'undefined'=== typeof _trfd && (window._trfd=[]),_trfd.push({'tccl.baseHost':'secureserver.net'},{'ap':'cpsh-oh'},{'server':'p3plzcpnl504817'},{'dcenter':'p3'},{'cp_id':'6876888'},{'cp_cl':'8'}) </script> // Monitoring performance to make your website faster. If you want to opt-out, please contact web hosting support.//
<script src="https://img1.wsimg.com/traffic-assets/js/tccl.min.js"></script>

</body></html>