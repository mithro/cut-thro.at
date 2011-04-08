<?php

$ip = getenv ("REMOTE_ADDR");
$gets_booty = !(substr_count($ip,":") > 0 && substr_count($ip,".") == 0);
?>
<html>  
<head>  
  <meta charset="utf-8"/>  
  <title>Cut-thro.at - Your source of Robot Pirate treasure!</title>
</head>  
  
<body>
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
  
  <div id=pirate>
    <h1>Can you get the Robot Pirate treasure?</h1>

<?php if ($gets_booty) { ?>
    <span id=speach>You get the booty!</span>
    <img id=pirate src="robo-pirate-dancing.gif" alt="Robot Pirate dancing with joy!">
    <img id=chest src="chest-open.png" alt="Open treasure chest filled with booty!">
<?php } else { ?>
    <span id=speach>No booty for you. <a href="http://www.getipv6.info">Get booty?</a></span>
    <img id=pirate src="robo-pirate.png" alt="Robot Pirate!">
    <img id=chest src="chest-closed.png" alt="Closed treasure chest">
<?php } ?>
  </div>
  <div id=credits>
    <span><a href="credits.txt">credits</a></span>
  </div>
</body>  
</html> 

