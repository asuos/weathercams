<!doctype html>

<!--[if lt IE 7 ]><html lang="en" class="no-js ie6"><![endif]-->
<!--[if (gt IE 6)|!(IE)]><!--><html lang="en" class="no-js"><!--<![endif]-->
  <head>
    <meta charset="utf-8">
    <title>Live Weather Cam *Beta 3*</title>
    <meta name="description" content="Live Weather Cam *beta 3*">
    <meta name="author" content="webmaster@appstate.edu">

    <style type="text/css">
      body {
        margin: 0;
      };
    </style>

    <script src="libs/js/modernizr-1.6.min.js"></script>
    <script src="libs/js/jwplayer5.js"></script>
  </head>
  <body class="home">
  <section id="cam">
    <div id="player">Player will go here</div>
    <script type="text/javascript">
      jwplayer("player").setup({
        id: 'player',
        file: 'weatherstream1',
        streamer: 'rtmp://streams1.appstate.edu/live/',
        bufferlength: 5,
        autostart: 'true',
        height: 222,
        width: 400,
        players: [
            {type: 'html5'},
            {type: 'flash', src: 'libs/swf/player5.swf'},
            {type: 'download'}
        ]
      });
    </script>
    <noscript>
      <a href="http://www.adobe.com/go/getflashplayer/">Flash is required, get flash</a>
    </noscript>
  </section>
</body>

<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.4.4/jquery.min.js"></script>
<script>!window.jQuery && document.write(unescape('%3Cscript src="js/jquery-1.4.4.min.js"%3E%3C/script%3E'))</script>

<script src="libs/js/general.js"></script>


<script type="text/javascript">
  var _gaq = _gaq || [];
  _gaq.push(['_setAccount', 'UA-16763143-31']);
  _gaq.push(['_trackPageview']);

  (function() {
    var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
    ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
  })();
</script>

</html>
