<?php

$ip = getenv ("REMOTE_ADDR");
$gets_booty = (substr_count($ip,":") > 0 && substr_count($ip,".") == 0);
?>
<html>  
<head>  
  <meta charset="utf-8"/>  
  <title>Cut-thro.at - Your source of Robot Pirate treasure!</title>

  <link rel="shortcut icon" href="favicon-48x48.png" />
  <link rel="apple-touch-icon" href="favicon-129x129.png" />
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.5.2/jquery.min.js"></script>
  <script src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.8.11/jquery-ui.min.js"></script>
  <style type="text/css">

body {
    padding:0; 
    margin:0; 
    font: 40px Cambria, Georgia, sans-serif;
    color:#333; 
    background:#fff;
}

a {
    text-decoration: none;
}

img {
    display: block;
}

#body {
    width: 886px;
    margin-left: auto; margin-right: auto;
}

#header {
    margin-left: auto; margin-right: auto;
    font: 10px Cambria, Georgia, sans-serif;
    text-align: center;
}

#credits {
    font-size: 10px;
    position: fixed;
    bottom: 10px;
    right: 10px;
}

p {
    font: 30px Cambria, Georgia, sans-serif;
}

/* Code from http://nicolasgallagher.com/pure-css-speech-bubbles/demo/ */
.oval-speech-border {
    position:relative; 
    padding:0 30px;
    margin:1em auto 60px;
    border:10px solid #000; 
    text-align:center;
    color:#333; 
    background:#fff;
    /* css3 */
    /*
    NOTES:
    -webkit-border-radius:200px 80px; // produces oval in safari 4 and chrome 4
    -webkit-border-radius:200px / 80px; // produces oval in chrome 4 (again!) but not supported in safari 4
    Not correct application of the current spec, therefore, using longhand to avoid future problems with webkit corrects this
    */
    -webkit-border-top-left-radius:200px 140px;
    -webkit-border-top-right-radius:200px 140px;
    -webkit-border-bottom-right-radius:200px 140px;
    -webkit-border-bottom-left-radius:200px 140px;
    -moz-border-radius:200px / 140px;
    border-radius:200px / 140px;
}

/* creates larger curve */
.oval-speech-border:before {
    content:""; 
    position:absolute; 
    z-index:2; 
    bottom:-40px; 
    right:50%; 
    width:50px; 
    height:30px;
    border-style:solid;
    border-width:0 10px 10px 0;
    border-color:#000;
    margin-right:-10px;
    background:transparent;
    /* css3 */
    -webkit-border-bottom-right-radius:80px 50px;
    -moz-border-radius-bottomright:80px 50px;
    border-bottom-right-radius:80px 50px;
    /* reduce the damage in FF3.0 */
    display:block; 
}

/* creates smaller curve */
.oval-speech-border:after {
    content:""; 
    position:absolute; 
    z-index:2; 
    bottom:-40px; 
    right:50%; 
    width:20px; 
    height:31px; 
    border-style:solid;
    border-width:0 10px 10px 0;
    border-color:#000;
    margin-right:20px;
    background:transparent;
    /* css3 */
    -webkit-border-bottom-right-radius:40px 50px; 
    -moz-border-radius-bottomright:40px 50px; 
    border-bottom-right-radius:40px 50px; 
    /* reduce the damage in FF3.0 */
    display:block; 
}

/* creates a small circle to produce a rounded point where the two curves meet */
.oval-speech-border > :first-child:before {
    content:""; 
    position:absolute; 
    z-index:1; 
    bottom:-40px; 
    right:50%; 
    width:10px; 
    height:10px;
    margin-right:45px;
    background:#000;
    /* css3 */
    -webkit-border-radius:10px;
    -moz-border-radius:10px;
    border-radius:10px;
}

/* creates a white rectangle to cover part of the oval border*/
.oval-speech-border > :first-child:after {
    content:""; 
    position:absolute; 
    z-index:1; 
    bottom:-10px; 
    right:50%; 
    width:30px; 
    height:15px; 
    background:#fff;
}
  </style>
</head>  
  
<body>
<!-- Google Analytics to see who gets the booty! -->
<script type="text/javascript">
  var _gaq = _gaq || [];
  _gaq.push(['_setCustomVar', 1, 'Booty?', '<?php echo $gets_booty ? 'Yes' : 'No'; ?>', 2]);
  _gaq.push(['_setAccount', 'UA-22610400-1']);
  _gaq.push(['_trackPageview']);

  (function() {
    var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
    ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
  })();
</script>
  <div id=header>
    <h1>Can you get the Robot Pirate treasure?</h1>
  </div>

  <div id=body>
<?php if ($gets_booty) { ?>
    <table>
      <tr>
        <td rowspan=2>
          <img id=pirate src="robo-pirate-happy.png" alt="Robot Pirate dancing with joy!">
        </td><td>
          <blockquote id=speech class="oval-speech-border"><p>You get the booty!</p></blockquote>
        </td>
      </tr>
      <tr>
        <td>
          <img id=chest src="chest-open.png" alt="Open treasure chest filled with booty!">
        </td>
      </tr>
    </table>
    <!-- HTML5 gives us annoying audio now! -->
    <audio id="song" autobuffer>
      <source src="yohoho.mp3" type="audio/mpeg" />
      <source src="yohoho.ogg" type="audio/ogg" />
    </audio>
    <script>
      var song = document.getElementById('song');
      song.play();
    </script>
<?php } else { ?>
    <table>
      <tr>
        <td rowspan=2>
          <img id=pirate src="robo-pirate-angry.png" alt="Robot Pirate!">
        </td><td>
          <blockquote id=speech class="oval-speech-border">
            <p>No booty for you.<br><a href="http://www.getipv6.info">Get booty?</a></p>
          </blockquote>
        </td>
      </tr>
      <tr>
        <td>
          <img id=chest src="chest-closed.png" alt="Closed treasure chest"
            onClick="naughty();">
        </td>
      </tr>
    </table>
    <!-- HTML5 gives us annoying audio now! -->
    <audio id="song" autobuffer>
      <source src="no-booty.mp3" type="audio/mpeg" />
      <source src="no-booty.ogg" type="audio/ogg" />
    </audio>
    <script type="text/javascript">
    function naughty() {
      $('#pirate').effect('shake', { times:8 }, 200);
      var song = document.getElementById('song');
      song.play();
    }
    </script>
<?php } ?>
  </div>

  <div id=credits>
    <span><a href="credits.txt">credits</a></span>
  </div>
</body>  
</html> 

