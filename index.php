<?php
	// error_reporting(0);
?>

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

    <title>Tap !</title>
  </head>
  <body>
    <h1 class="text-center text-capitalize font-weight-bold text-monospace" style="background: -webkit-linear-gradient(yellow, red);-webkit-background-clip: text; -webkit-text-fill-color: transparent;">Tap görək!</h1><br>
    <p></p>

    <form class="form-inline" method="get">
    	<div class="container">
    		<div class="row">

    			<div class="col">
    				<div class="form-group">
    					<label for="ifrom">Hansı ədəddən?</label>
    					<input type="number" class="form-control" name="ifrom" id="ifrom" min="1" style="width:100%;" placeholder="only integer numbers">
    				</div>
    			</div>

    			<div class="col">
    				<div class="form-group">
    					<label for="ito">Hansı ədədə qədər?</label>
    					<input type="number" class="form-control" name="ito" id="ito" min="1" style="width:100%;" placeholder="only integer numbers">
    				</div>
    			</div>

    			<div class="col">
    				<div class="form-group">
    					<label for="id">Hansı ədədə tam bölünən ədədləri düzsün?</label>
    					<input type="number" class="form-control" name="id" id="id" style="width:100%;" placeholder="only natural numbers" min="1">
    				</div>
    			</div>

    		</div>
    			<button type="submit" class="btn btn-primary btn-block mt-2">Tap</button>
    </form>


<div style="margin-top:10px; margin-bottom: 20px;">
<?php 
$sub=1;

	if ($_GET['ifrom'] < $_GET['ito']) {
		for ($i=$_GET['ifrom']; $i <= $_GET['ito']; $i++) { 
			if ($i%$_GET['id']==0) {
				echo "<b>a<sub>".$sub."</sub>&nbsp;=&nbsp;$i"."</b><br>";
				$sub++;
			}
		}
	} elseif ($_GET['ifrom'] > $_GET['ito']) {
		for ($i=$_GET['ifrom']; $i >= $_GET['ito']; $i--) { 
			if ($i%$_GET['id']==0) {
				echo "<b>a<sub>".$sub."</sub>&nbsp;=&nbsp;$i"."</b><br>";
				$sub++;
			}
		}
	}

?>
</div>
</div>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
  </body>
</html>