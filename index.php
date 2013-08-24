<!doctype html>
<!--[if lt IE 7]> <html class="ie6 oldie"> <![endif]-->
<!--[if IE 7]>    <html class="ie7 oldie"> <![endif]-->
<!--[if IE 8]>    <html class="ie8 oldie"> <![endif]-->
<!--[if gt IE 8]><!-->
<html class="">
<!--<![endif]-->
<head>

<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Kris Zanuldin</title>
<link href="boilerplate.css" rel="stylesheet" type="text/css">
<link href="layoutk.css" rel="stylesheet" type="text/css">
<link rel="shortcut icon" href="favicon.ico" type="image/x-icon" />
<script type="text/javascript" src="http://code.jquery.com/jquery-latest.min.js"></script>  

<script type="text/javascript">
  var _gaq = _gaq || [];
  _gaq.push(['_setAccount', 'UA-33627988-2']);
  _gaq.push(['_trackPageview']);

  (function() {
    var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
    ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
  })();
</script>


<!--[if lt IE 9]>
<script src="//html5shiv.googlecode.com/svn/trunk/html5.js"></script>
<![endif]-->
<script src="respond.min.js"></script>

  <style>
    body { margin:0; padding:0; }
    #map-wrapper {
      width: 100%;
      z-index: 100;
     
    }
    

@media (max-width:640px) {


  article {
    width:100%;
    min-width:100%;
    padding-top:0px;
   
    }
  section {
    text-shadow:none;
    margin-left:0px;
    padding:30px;
   
    color: #FFF;
    }

section a {
  color:#f60;
  
  }

  section.active {
    top:0px; left:0px; right:0px;
    background-color: #222;
    }
  #pane { width:100%; }
 

    h1 { font-size:2em; line-height:1em;}
h2 { font-size:1.5em; }
h1,h2 { margin:0px 0px 10px; }
h3 { margin:0px; font-size: 1em; }

#blog-summary {
  padding-left: 30px;
  padding-right: 30px;
  background-color: #333;
  font-family: Helvetica;
  font-size: 1.5em;
  line-height: 1.5em;
  color: #FFF;
  display: block;
  
}

#panes-start {
  font-family: 'helvetica-light', Helvetica, Arial; 

  color: #FFF;
  padding:40px;
  margin-left:0px;
  background-color: #423A38;
  position:relative;
  float: left;
   

  }

#display-container {
  background-color: #333;
}
#blog-text {

  padding-left: 30px;
  padding-right: 30px;
  background-color: #333;
  font-family: Helvetica;
  font-size: 1em;
  line-height: 1.5em;
  color: #FFF;
  
}
  }

@media (min-width:1280px) {
  
  }
  </style>


      <script>
if (document.documentElement.clientWidth > 640) {
  var temper;
      $(document).ready(function() {
      $.ajax({
      type: "GET",
        dataType: "jsonp",
        cache: false,
        url: "https://api.forecast.io/forecast/*your token*/*your lat, long*",
             error: function(xhr, status, error) {
          console.log(error);
          var para=document.createElement("h1");
            var node=document.createTextNode("Currently chilling in Toronto.");
            para.appendChild(node);
            var element=document.getElementById("panes-status-weather");
            element.appendChild(para);
           },
        success: function(data) {
          var tempicon = data.currently.icon;
          temper = Math.round(data.currently.temperature);
            console.log(data);
            console.log(tempicon);
            console.log(temper);
            document.getElementById('panes-status-fuel').innerHTML = "<span style='color: #FFF;'>Current temperature: </span>" + temper + "&#8457;";
          if(tempicon=='partly-cloudy-night'){
            var mapwrapper = document.getElementById("map-wrapper");
            mapwrapper.style.backgroundImage="url('tor_night.jpg')";
            var para=document.createElement("h1");
            var node=document.createTextNode("Looks like a partly cloudy night in Toronto.");
            para.appendChild(node);
            var element=document.getElementById("panes-status-weather");
            element.appendChild(para);
          }

          else if(tempicon=='clear-night'){
            var mapwrapper = document.getElementById("map-wrapper");
            mapwrapper.style.backgroundImage="url('tor_night3.jpg')";
            var creative = document.createElement('div');
            creative.id = 'creative';
            document.getElementById("map-wrapper").appendChild(creative);
            var commons = document.getElementById("creative");
            var content = document.createTextNode("Photo by Ping Foo");
            commons.appendChild(content);


            var para=document.createElement("h1");
            var node=document.createTextNode("It looks like it's a clear night in Toronto.");
            para.appendChild(node);
            var element=document.getElementById("panes-status-weather");
            element.appendChild(para);

          }

            else if(tempicon=='snow'){
            var mapwrapper = document.getElementById("map-wrapper");
            mapwrapper.style.backgroundImage="url('tor_snow.jpg')";
            var creative = document.createElement('div');
            creative.id = 'creative';
            document.getElementById("map-wrapper").appendChild(creative);
            var commons = document.getElementById("creative");
            var content = document.createTextNode("Photo by Grant MacDonald");
            commons.appendChild(content);


            var para=document.createElement("h1");
            var node=document.createTextNode("It looks like it's a snowy one in Toronto.");
            para.appendChild(node);
            var element=document.getElementById("panes-status-weather");
            element.appendChild(para);

          }

          else if(tempicon=='wind'){
            var mapwrapper = document.getElementById("map-wrapper");
            mapwrapper.style.backgroundImage="url('tor_wind4.jpg')";
            var creative = document.createElement('div');
            creative.id = 'creative';
            document.getElementById("map-wrapper").appendChild(creative);
            var commons = document.getElementById("creative");
            var content = document.createTextNode("Photo by Lars-O-Matic");
            commons.appendChild(content);


            var para=document.createElement("h1");
            var node=document.createTextNode("It's a windy one today in Toronto.");
            para.appendChild(node);
            var element=document.getElementById("panes-status-weather");
            element.appendChild(para);

          }

          else if(tempicon=='cloudy'){
            var mapwrapper = document.getElementById("map-wrapper");
            mapwrapper.style.backgroundImage="url('tor_cloud1.jpg')";
            var creative = document.createElement('div');
            creative.id = 'creative';
            document.getElementById("map-wrapper").appendChild(creative);
            var commons = document.getElementById("creative");
            var content = document.createTextNode("Photo by Vincent Solihin");
            commons.appendChild(content);


            var para=document.createElement("h1");
            var node=document.createTextNode("It's looking a little cloudy in Toronto.");
            para.appendChild(node);
            var element=document.getElementById("panes-status-weather");
            element.appendChild(para);

          }

            else if(tempicon=='clear-day'){
            var mapwrapper = document.getElementById("map-wrapper");
            mapwrapper.style.backgroundImage="url('tor_clear2.jpg')";
            var creative = document.createElement('div');
            creative.id = 'creative';
            document.getElementById("map-wrapper").appendChild(creative);
            var commons = document.getElementById("creative");
            var content = document.createTextNode("Photo by Andreina Schoeberlein");
            commons.appendChild(content);


            var para=document.createElement("h1");
            var node=document.createTextNode("It's a nice clear day in Toronto.");
            para.appendChild(node);
            var element=document.getElementById("panes-status-weather");
            element.appendChild(para);

          }

           else if(tempicon=='rain'){
            var mapwrapper = document.getElementById("map-wrapper");
            mapwrapper.style.backgroundImage="url('tor_rain.jpg')";
            var para=document.createElement("h1");
            var node=document.createTextNode("It looks like it's a wet Toronto day.");
            para.appendChild(node);
            var element=document.getElementById("panes-status-weather");
            element.appendChild(para);

          }

          else {
             var mapwrapper = document.getElementById("map-wrapper");
            mapwrapper.style.backgroundImage="url('tor_morn.jpg')";
            var para=document.createElement("h1");
            var node=document.createTextNode("Looks like a decent day in Toronto.");
            para.appendChild(node);
            var element=document.getElementById("panes-status-weather");
            element.appendChild(para);

          }

          }    
                   
        })
    });

//end if statement on viewport size
}

else {
 
}
  </script>
</head>
<body>


</head>
<body>
<div class="gridContainer clearfix">
  <div id="back_first">
  <div class="back_container">
<br>
	<div class="heading"><img alt="kris zanuldin" title="kris zanuldin" src="myname.svg"></div>
    <div class="panes">
 
      <div id="headertext" onclick="location.href='index.php';"  style="cursor:pointer;"><a href="#"></a>   
        <div class="panes-left">
        <div class="panes-text">     
        Home
            </div>
            </div>
      </div>
      <div id="headertext" onclick="location.href='http://www.kzanul.com/blog';"  style="cursor:pointer;"><a href="#"></a>
        <div class="panes-left">
        <div class="panes-text">
        Blog  
            </div>
            </div>
      </div>
        <div id="headertext" onclick="location.href='about.html';"  style="cursor:pointer;"><a href="#"></a>
        <div class="panes-left">
        <div class="panes-text">
            
        About
            </div>
            </div>
      </div>
      <div id="headertext" onclick="location.href='instagram.html';"  style="cursor:pointer;"><a href="#"></a>
        <div class="panes-left">
        <div class="panes-last">
        <div class="panes-text">
        Snaps
            </div>
            </div>
            </div>
      </div>
    
    </div>
    <br>
  <div id="display-container" class="clearfix">
    <div id="map-wrapper">
      
 <div id='pane'>
    <div id="panes-start" class="cover active">
      <img src="81me.png"></img>
      <br>
      <br>
    <h1>Hi. I'm Kris.</h1>
    <h3>I'm a product manager and marketer that's focused primarily on the digital medium. 
      <br>
      <br>
      I put down random thoughts from time to time and this is where you can find them.

    <br>
    <br>
    <h3> Drop me a line or connect with me on Twitter if you just want to shoot the breeze.
  <br>
  <br>
   <div class="icon_social_email" onclick="location.href='mailto:kris@kzanul.com';" style="cursor:pointer;"></div>
     <div class="icon_social_linkedin" onclick="location.href='http://www.linkedin.com/in/kriszanuldin';" style="cursor:pointer;"></div>
     <div class="icon_social_twitter" onclick="location.href='https://twitter.com/kzanul';" style="cursor:pointer;"></div>
 
  </div>

  <div id="panes-status" class='cover active'>
    <div id="panes-status-weather"></div>
    <div id="panes-status-fuel"></div>
    <div id="panes-status-exercise"></div>
    <br>
    <br>
  </div>
<script>
$(document).ready(function() {
   <?php 
$curl_handle=curl_init();
$data = array('appid: fuelband', "Accept: application/json");
curl_setopt($curl_handle,CURLOPT_URL,'https://api.nike.com/me/sport?access_token=*your token*');
curl_setopt($curl_handle,CURLOPT_CONNECTTIMEOUT,2);
curl_setopt($curl_handle,CURLOPT_HTTPHEADER,$data);
curl_setopt($curl_handle,CURLOPT_RETURNTRANSFER,1);
$buffer = curl_exec($curl_handle);
curl_close($curl_handle);?>
var myarray = <?php
echo $buffer;
?>;
console.log(myarray);
fuelstatus = Math.round(myarray.summaries[1].records[1].recordValue);
currentstatus = myarray.summaries[1].records[4].recordValue;
console.log(fuelstatus);
console.log(currentstatus);

<?php $curl_handle=curl_init();
$data = array('appid: fuelband', "Accept: application/json");
curl_setopt($curl_handle,CURLOPT_URL,'https://api.nike.com/me/sport/activities?access_token=64d48a4d12fea1a0d1d942665f8066e3');
curl_setopt($curl_handle,CURLOPT_CONNECTTIMEOUT,2);
curl_setopt($curl_handle,CURLOPT_HTTPHEADER,$data);
curl_setopt($curl_handle,CURLOPT_RETURNTRANSFER,1);
$buffer = curl_exec($curl_handle);
curl_close($curl_handle);?>
var myarrayactivity = <?php
echo $buffer;
?>;
console.log(myarrayactivity);
currentstatus1 = myarrayactivity.data[0].metricSummary.fuel;
console.log(currentstatus1);

if((fuelstatus-currentstatus1)<=1000 && (fuelstatus-currentstatus1)>=500){
document.getElementById('panes-status-exercise').innerHTML = "<span style='color: #FFF;'>Current status: </span>Feeling okay but need to step it up because my current NIKE fuel burn is only " + currentstatus1 + " and my daily goal is " + fuelstatus + "."; 
}

else if((fuelstatus-currentstatus1)<500){
document.getElementById('panes-status-exercise').innerHTML = "<span style='color: #FFF;'>Current status: </span>Almost there! My current NIKE fuel burn is " + currentstatus1 + " and my daily goal is " + fuelstatus + "."; 
}

else if((fuelstatus-currentstatus1)>1000){
document.getElementById('panes-status-exercise').innerHTML = "<span style='color: #FFF;'>Current status: </span>It's a slow day. My current NIKE fuel burn is " + currentstatus1 + " and my daily goal is " + fuelstatus +
"."; 
}

else if((fuelstatus>currentstatus1)){
document.getElementById('panes-status-exercise').innerHTML = "<span style='color: #FFF;'>Current status: </span>I'm feeling great! My current NIKE fuel burn is " + currentstatus1 + " which is above my daily goal of " + fuelstatus + ". Huzzah!"; 

}

else {
  document.getElementById('panes-status-exercise').innerHTML = "<span style='color: #FFF;'>Current status: </span>I'm fine. My current NIKE fuel burn is " + currentstatus1 + " which is above my goal of " + fuelstatus + "."; 

}
});
</script>
  
</article>
 
</div>



</div>
        <div id="main-display">
  			</div>
       
 <div id="blog-summary">Latest From Eat More Fish:</div>
  <div id="blog-text">
  <?php
define('WP_USE_THEMES', false);
require('blog/wp-blog-header.php');
?>

<?php
global $post;
$args = array( 'posts_per_page' => 3 );
$myposts = get_posts( $args );
foreach( $myposts as $post ) :  setup_postdata($post); ?>
<?php the_date(); echo "<br />"; ?>
<a href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link to <?php the_title(); ?>"><?php the_title(); ?></a><br />
<?php the_excerpt(); ?> 
<?php endforeach; ?>

  <div id="footer">Copyright 2013 Kris Zanuldin. All rights reserved. Weather data provided by Forecast.io</div> 
 </div> 
  
 </div>





<br>


</div>
</div>
</div>
</body>
</html>
