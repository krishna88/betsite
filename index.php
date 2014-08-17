<!DOCTYPE html>
<html lang="en">

<head>
<meta name="viewport" content="width=device-width, initial-scale=1">

<link rel="stylesheet" href="css/jquery.coolautosuggest.css">


<script src="./js/jquery.js"></script>
<script src="./js/jquery.coolautosuggest.js"></script>
<script src="./js/jquery.coolfieldset.js"></script>






</head>

<body>


<fieldset id="fieldset1" class="coolfieldset">
		<legend>Team Head to Head</legend>
		<div>
			<form>
				
				Team 1 : <input type="text" name="team1" id="team1" />
				<script language="javascript" type="text/javascript">
					$("#team1").coolautosuggest({
						url:"data.php?chars=",
					});
				</script>

				Team 2 : <input type="text" name="team2" id="team2" />
				<script language="javascript" type="text/javascript">
					$("#team2").coolautosuggest({
						url:"data.php?chars=",
					});
				</script>


			</form>



</body>
</html>