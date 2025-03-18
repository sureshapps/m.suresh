<!DOCTYPE html>
<html>
 
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width; initial-scale=0.5, maximum-scale=0.5, minimum-scale=0.5, user-scalable=no, minimal-ui">
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="apple-mobile-web-app-status-bar-style" content="black">
    <meta name="format-detection" content="telephone=no">
 
    <link href="settings/images/halcyon_icon.png" rel="apple-touch-icon" />
    <link href="settings/images/halcyon_icon.png" rel="apple-touch-icon" sizes="152x152" />
    <link href="settings/images/halcyon_icon.png" rel="apple-touch-icon" sizes="167x167" />
    <link href="settings/images/halcyon_icon.png" rel="apple-touch-icon" sizes="180x180" />
    <link href="settings/images/halcyon_icon.png" rel="icon" sizes="192x192" />
    <link href="settings/images/halcyon_icon.png" rel="icon" sizes="128x128" />
 
    <title>halcyon</title>
 
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
    <link rel="stylesheet" href="https://ajax.googleapis.com/ajax/libs/jqueryui/1.12.1/themes/smoothness/jquery-ui.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.js"></script>
 
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <!-- Latest compiled and minified JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
 
 
 
 
    <link href="https://fonts.googleapis.com/css?family=Lato:100,300,400|Open+Sans:100,300,400|Roboto:300,400,500,700,900" rel="stylesheet">
    <style>
        html,
        body {
            width: 100%;
            height: 100%;
            margin: 0;
            background-color: #fff;
            color: #000;
        }
 
        div {
            box-sizing: border-box;
        }
    </style>
 
 
</head>
 
 
 
<body>
 
 
 
 
 
    <div id="main_menu" style="position:absolute; bottom:0; width:100%; height:100%; left:0; right:0; margin:0 auto; overflow:scroll;
-webkit-overflow-scrolling: touch; overflow-y:hidden; z-index:500; ">
        <div style="position:absolute; bottom:0px; left:0px; height:100%; width:100%; overflow:visible;">
            <div id="menu_list" style="position:absolute; height:auto; top:100%; left:0px; -webkit-transform:rotate(-90deg); -webkit-transform-origin:left top; padding-top:15vw;"></div>
        </div>
    </div>
 
 
    <div id="main_body" style="z-index:10000;">
        <div style="position:fixed; width:100%; height:auto; padding:1vw 1.5vw; background-color:#bb0000; color:#fff; font-family:'Lato'; font-size:6vw; font-weight:400; border-bottom:solid 1px #fff;">
 
            <div style="width:50%; float:left;"><span onClick="search_youtube();">Youtube</span></div>
            <div style="width:50%; float:left;">
 
 
                <div id="search_bar" class="input-group">
                    <input id="youtube_search" type="search" name="search" class="form-control" aria-describedby="basic-addon2" style="border:solid 2px #fff; border-right:none; background-color:transparent; color:#fff; padding:1px 2px; height:auto; font-size:5vw;">
                    <span class="input-group-addon" id="basic-addon2" style="border:solid 2px #fff;  border-left:none; padding-top:2px; padding-bottom:2px; height:auto; color:#fff; background-color:transparent;"><span id="search-submit" class="glyphicon glyphicon-search" aria-hidden="true" style="font-size:5vw;"></span></span>
 
                </div>
 
 
 
            </div>
        </div>
    </div>
 
    <div id="ad_footer" style="position:relative; width: 100%; background-color:#fff; z-index: 100001; text-align: right;">
 
    </div>
 
    <div id="player" class="player" style="z-index:100001; background-color:#000; display: none;"></div>
    <div id="player_header" style="display:none; z-index:100002; width:auto; height:auto; overflow:visible;">
        <div style="width:100%; height:auto; padding:0 1vw; text-align:right; color:#fff;">
            <span id="close_player" class="glyphicon glyphicon-remove" style="font-size:7vw; background-color:#000; padding:2px; opacity:0.75; border-radius:25%; cursor:pointer;" aria-hidden="true"></span>
        </div>
    </div>
 
 
 
    <script>
        var player;
 
        $(document).ready(function(e) {
 
 
            $("#main_body").css({
                "position": "fixed",
                "-webkit-transform": "rotate(-90deg)",
                "-webkit-transform-origin": "left top",
                "transform": "rotate(-90deg)",
                "transform-origin": "left top",
                "width": $(document).height(),
                //"height": $(document).width(),
                "top": "100%",
                "left": "0px"
            });
 
            $("#ad_footer").css({
                "position": "fixed",
                "-webkit-transform": "rotate(-90deg)",
                "-webkit-transform": "scale(0.000050, 0.000050)",
                "transform": "scale(0.000050, 0.000050)",
                "-webkit-transform-origin": "left top",
                "transform": "rotate(-90deg)",
                "transform-origin": "left top",
                "width": $(document).height(),
                //"height": $(document).width(),
                "top": "100%",
                "left": "91%"
            });
 
 
            $("#player_header").css({
                "position": "fixed",
                "-webkit-transform": "rotate(-90deg)",
                "-webkit-transform-origin": "left top",
                "transform": "rotate(-90deg)",
                "transform-origin": "left top",
                "width": $(document).height(),
                //"height": $(document).width(),
                "top": "100%",
                "left": "0px"
            });
 
            $("#menu_list").width($("#main_menu").height());
            //	$("#menu_list").css({
            //		"padding-left": $("#main_body").height()
            //	});
 
            $(".player").css({
                "position": "absolute",
                "-webkit-transform": "rotate(-90deg)",
                "-webkit-transform-origin": "left top",
                "transform": "rotate(-90deg)",
                "transform-origin": "left top",
                "width": $(document).height(),
                "height": $(document).width(),
                "top": "100%",
                "left": "0px"
            });
 
 
 
 
 
        });
 
        //function window.onYouTubePlayerAPIReady() {
        window.onYouTubePlayerAPIReady = function() {
 
            player = new YT.Player('player', {
                playerVars: {
                    'autoplay': 1,
                    'controls': 1,
                    'autohide': 1,
                    'wmode': 'opaque',
                    'showinfo': 1,
                    'loop': 0,
                    'playsinline': 1,
                    'fs': 1,
                    height: $(document).height(),
                    width: $(document).width()
                },
                events: {
                    'onReady': search_youtube(),
                    'onError': onPlayerError
                }
 
            });
 
        };
 
 
        function onPlayerError(event) {
            alert('Error: ' + event.data);
            console.log('Error: ' + event.data);
            player.stopVideo();
            player.loadVideoById('');
        }
 
 
        $(document).on('click', '.load_video', function(event) {
            //alert( $(this).attr('data-url') );
            $(".player").show();
            $("#player_header").show();
            player.loadVideoById($(this).attr('data-url'), 0);
 
            //player.loadVideoById('IXD6puFlw4Q' ,0);
 
 
 
 
            console.log($(this).attr('data-url'));
 
        });
 
 
 
        //$(".load_video").on("click", function() {
        //	$(".player").show();
        //	$("#player_header").show();
        //	player.loadVideoById( $(this).attr('data-url') ,0);
        //});
        //
        //
 
 
        //$(".load_video").click(function() {
        //	$(".player").show();
        //	$("#player_header").show();
        //	player.loadVideoById( $(this).attr('data-url') ,0);
        //});
 
 
        $("#close_player").click(function() {
            $("#player_header").hide();
            $("#player").hide();
            player.stopVideo();
        });
 
 
        $("#youtube_search").blur(function(e) {
            e.preventDefault();
 
            if ($(this).val()) {
 
                search_youtube($(this).val());
 
 
            }
 
 
        });
 
 
 
 
        function search_youtube(e) {
 
 
            $.ajax({
                url: 'search_js.php',
                error: function() {
                    alert('An error has occurred Searching');
                    console.log('An error has occurred Searching');
                },
                data: {
                    search_q: e
                },
                success: function(data) {
                    $("#menu_list").html(data);
                }
            });
 
        };
 
 
        $("search-submit").click(function() {
            $("youtube_search").submit();
        })
    </script>
 
    <script src="http://www.youtube.com/player_api"></script>
 
 
 
 
</body>
<script>
    'undefined' === typeof _trfq || (window._trfq = []);
    'undefined' === typeof _trfd && (window._trfd = []), _trfd.push({
        'tccl.baseHost': 'secureserver.net'
    }, {
        'ap': 'cpsh-oh'
    }, {
        'server': 'p3plzcpnl504817'
    }, {
        'dcenter': 'p3'
    }, {
        'cp_id': '6876888'
    }, {
        'cp_cl': '8'
    }) // Monitoring performance to make your website faster. If you want to opt-out, please contact web hosting support.
</script>
<script src='https://img1.wsimg.com/traffic-assets/js/tccl.min.js'></script>
 
</html>