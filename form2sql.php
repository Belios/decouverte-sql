<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>Document sans nom</title>
</head>

<body>
Form 2 SQL

<script>
function setsizes()
{
	var it = document.getElementsByTagName("input");
	for(var i = 0; i < it.length; i++)
	{
		var element = it.item(i);
		var len = element.maxLength;
		if(len > 0)
		{
			element.value = new String(len);
		}
	}
}


</script>


<fieldset>
  <form name="users" method="post" action="form2php.php">
      <input type="hidden" name="tableau_portfolio" value="userlist">
    <p>
      Nom :
      <input type="text" name="name" maxlength=32>
    </p>
		<p>
			Prenom :
			<input type="text" name="prenom" maxlength=50>
		</p>
    <p>
      Email:
      <input type="text" name="email" maxlength=70>
    </p>
    <p>
      <input type="submit" name="Submit" value="Submit" onclick="setsizes()">
    </p>
		<p>
			<input type="text" name="message" placeholder="Votre message..." maxlength=540 style="height:150px; width:350px;">
		</p>
  </form>
</fieldset>

</body>
</html>
