<!DOCTYPE html>
<html>
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    <title>Haluk Levent Hapiste mi?</title>
  </head>
  <body style="background:#ddd;text-align:center">
    <h1>Hayır</h1>
    <br />
    <iframe width="420" height="315" src="//www.youtube.com/embed/SFaBXdeeXlE" frameborder="0" allowfullscreen></iframe>
<?php
$m = new Memcached();
$m->addServer('localhost', 11211);
$m->increment('counter');
$count = $m->get('counter');
?>
    <h3>Toplam Ziyaretçi: <?php echo $count; ?></h3>
    <script>
    (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
        (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
                             m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
                            })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

        ga('create', 'UA-45927267-1', 'halukleventhapistemi.tk');
        ga('send', 'pageview');
    </script>
  </body>
</html>
