<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Workingtimer</title>
    <meta name="viewport" content="width=device-width, minimum-scale=1.0, maximum-scale=1.0" />
	<style type="text/css">

	::selection{ background-color: #E13300; color: white; }
	::moz-selection{ background-color: #E13300; color: white; }
	::webkit-selection{ background-color: #E13300; color: white; }

	body {
		background-color: #fff;
        margin:15px;
		font: 13px/20px normal Helvetica, Arial, sans-serif;
		color: #4F5155;
	}

	a {
		color: #003399;
		background-color: transparent;
		font-weight: normal;
	}

	h1 {
		color: #444;
		background-color: transparent;
		border-bottom: 1px solid #D0D0D0;
		font-size: 19px;
		font-weight: normal;
		margin: 0 0 14px 0;
		padding: 14px 15px 10px 15px;
	}

	#body{
		margin: 0 15px 0 15px;
        text-align: center;
	}

	#container{

		margin: 10px;
		border: 1px solid #D0D0D0;
		-webkit-box-shadow: 0 0 8px #D0D0D0;
	}

    #timer{
        width:150px;
        text-align: left;
        margin-left: auto;
        margin-right: auto;
        white-space: nowrap;
    }


    .button_start {
        -moz-box-shadow:inset 0px 1px 0px 0px #caefab;
        -webkit-box-shadow:inset 0px 1px 0px 0px #caefab;
        box-shadow:inset 0px 1px 0px 0px #caefab;
        background:-webkit-gradient( linear, left top, left bottom, color-stop(0.05, #77d42a), color-stop(1, #5cb811) );
        background:-moz-linear-gradient( center top, #77d42a 5%, #5cb811 100% );
        filter:progid:DXImageTransform.Microsoft.gradient(startColorstr='#77d42a', endColorstr='#5cb811');
        background-color:#77d42a;
        -moz-border-radius:6px;
        -webkit-border-radius:6px;
        border-radius:6px;
        border:1px solid #268a16;
        display:inline-block;
        color:#306108;
        font-family:arial;
        font-size:15px;
        font-weight:bold;
        padding:6px 24px;
        text-decoration:none;
        text-shadow:1px 1px 0px #aade7c;
        width:100px;
    }.button_start:hover {
         background:-webkit-gradient( linear, left top, left bottom, color-stop(0.05, #5cb811), color-stop(1, #77d42a) );
         background:-moz-linear-gradient( center top, #5cb811 5%, #77d42a 100% );
         filter:progid:DXImageTransform.Microsoft.gradient(startColorstr='#5cb811', endColorstr='#77d42a');
             button_start-color:#5cb811;
     }.button_start:active {
          position:relative;
          top:1px;
      }
    .button_stop {
        -moz-box-shadow:inset 0px 1px 0px 0px #f29c93;
        -webkit-box-shadow:inset 0px 1px 0px 0px #f29c93;
        box-shadow:inset 0px 1px 0px 0px #f29c93;
        background:-webkit-gradient( linear, left top, left bottom, color-stop(0.05, #fe1a00), color-stop(1, #ce0100) );
        background:-moz-linear-gradient( center top, #fe1a00 5%, #ce0100 100% );
        filter:progid:DXImageTransform.Microsoft.gradient(startColorstr='#fe1a00', endColorstr='#ce0100');
        background-color:#fe1a00;
        -moz-border-radius:6px;
        -webkit-border-radius:6px;
        border-radius:6px;
        border:1px solid #d83526;
        display:inline-block;
        color:#ffffff;
        font-family:arial;
        font-size:15px;
        font-weight:bold;
        padding:6px 24px;
        text-decoration:none;
        text-shadow:1px 1px 0px #b23e35;
        width:100px;
    }.button_stop:hover {
         background:-webkit-gradient( linear, left top, left bottom, color-stop(0.05, #ce0100), color-stop(1, #fe1a00) );
         background:-moz-linear-gradient( center top, #ce0100 5%, #fe1a00 100% );
         filter:progid:DXImageTransform.Microsoft.gradient(startColorstr='#ce0100', endColorstr='#fe1a00');
         background-color:#ce0100;
     }.button_stop:active {
          position:relative;
          top:1px;
      }


	</style>
</head>
<body>

<div id="container">
	<h1>workingtimer</h1>

	<div id="body">
        <div id="timer">
        Today: <?=date("d.m.Y")?><br/>
        Total time today: <?= $duration ?>
        </div><br/>
        <?php if ($status == 'running'): ?>
            <a href="<?= site_url("timer/stop") ?>" class="button_stop">stop</a>
        <?php else: ?>
            <a href="<?= site_url("timer/start") ?>" class="button_start">start</a>
        <?php endif;?>

	</div>

<br/>
</div>
<center><a href="<?= site_url("log")?>">overview</a></center>
</body>
</html>