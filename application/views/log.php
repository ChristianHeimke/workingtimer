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

	</style>
</head>
<body>

<div id="container">
	<h1>workingtimer | overview</h1>

	<div id="body">

        <table>
            <tr>
                <td>date</td>
                <td>working time</td>
            </tr>
        </table>

	</div>

<br/>
</div>
<center><a href="<?= site_url("")?>">start</a></center>
</body>
</html>