	<p style="font-family:'Roboto'; font-size:6vw; font-weight:400; color:#bb0000; text-decoration:underline; padding:0 3.5vw;">Most Popular YOUTUBE</p>
	<? }
 
$obj = json_decode(file_get_contents($url), true);
foreach($obj['items'] as $value) {
 
    $channel_id = $value['snippet']['channelId'];
    $video_id = $value['id']['videoId'];
    $title = $value['snippet']['title'];
    $channel_title = $value['snippet']['channelTitle'];
    $description = $value['snippet']['description'];
    $thumbnail = $value['snippet']['thumbnails']['high']['url']; ?>
 
	<div style="position:relative; width:100%; height:auto; margin-bottom:10vw; padding:0 3.5vw; overflow:visible;">
	    <img class="load_video" data-url="" style="position:relative; float:left; margin-right:3.5vw; width:52.5vw; cursor:pointer; box-shadow:3px 3px 3px #333;" src="" />
 
	    <p class="load_video" data-url="" style="color:rgb(22, 122, 198); font-family:'Roboto'; font-weight:400; font-size:5vw; line-height:1.2em;">
	    </p>
 
	    <p style="font-family:'Roboto'; font-weight:400; font-size:3.75vw; color:rgb(118, 118, 118); line-height:1.2em;">
	    </p>
	    <div style="clear:both;"></div>
	</div>