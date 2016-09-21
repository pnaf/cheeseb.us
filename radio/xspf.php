<!DOCTYPE html>
<head>
    <meta http-equiv="content-type" content="text/html; charset=utf-8" />
    <title>cheeseb.us radio</title>
    <link rel="stylesheet" href="/stylesheet.css">
</head>
<body>
    <div id="content">
        <h2>cheeseb.us radio</h2>
        <h6><input type="button" id="play" value="&nbsp;         play         &nbsp;" onclick="document.getElementById('radio').play();top.document.title='&#x25b6; cheeseb.us radio';document.getElementById('play').value='&nbsp;         stop         &nbsp;';document.getElementById('play').onclick=function(){document.getElementById('radio').pause();window.location.href=window.location.href;};" />&nbsp;</h6>
        <form method="get" action="https://cheeseb.us/radio.xspf"><h6><input id="button" type="submit" value="listen in a media player" />&nbsp;</h6></form>
        <h6><audio id="radio" preload="none" src="http://cheeseb.us:8000/radio.ogg">try using <a href="https://www.mozilla.org/firefox/">firefox</a> or <a href="https://www.google.com/chrome/">chrome</a> to listen from within your web browser!</audio></h6>
        <h6>playing:
        <?php
        echo shell_exec('mpc current');
        ?>
        </h6>
        <h6><a href="about/">about</a> &bull;
        <?php
        echo shell_exec('mpc stats | grep DB\ Updated | cut -d \  -f 6-7,9 | tr [:upper:] [:lower:]');
        ?>
        </h6>
    </div>
    <!--
    <div id="advisory">
        <p style="background: #000000;
        color: #ffffff;
        margin-bottom: 0px;
        padding-bottom: 2px;
        padding-left: 2px;
        padding-right: 2px;
        padding-top: 2px;">PARENTAL</p>
        <p style="background: #ffffff;
        color: #000000;
        margin-top: 0px;
        padding-bottom: 2px;
        padding-left: 2px;
        padding-right: 2px;">ADVISORY</p>
    </div>
    -->
</body>
