<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
<div class="hero">
	<div class="form-box">
		<div class="button-box">
			<div id="btn"></div>
			<button type="button" class="toggle-btn" onclick="login()">Login</button>
			<button type="button" class="toggle-btn" onclick="register()">Register</button>
		</div>
	    <div class="social-icons">
    	<img src="img/fb.png">
    	<img src="img/tw.png">
    	<img src="img/gp.png">
    </div>
    <form id="login" class="input-group">
    	<input type="text" class="input-field" placeholder="User ID" required>
        <input type="password" class="input-field" placeholder="Password" required>
        <div class="check-box">
        <input type="checkbox" id="remember" >
        <label for="remember">Remember me</label>
        </div>
        <button type="submit" class="submit-btn">Log in</button>
    </form>
<form id="register" class="input-group">
    	<input type="text" class="input-field" placeholder="UserID" required>
        <input type="email" class="input-field" placeholder="Email ID" required>
        <input type="password" class="input-field" placeholder="Password" required>
        <div class="check-box"><input type="checkbox" id="terms">
        <label for="terms">I agree to the terms & conditions</label></div>
        
        <button type="submit" class="submit-btn">Register</button>
    </form>
</div>
</div>
   <script type="text/javascript">
   	var x = document.getElementById("login");
    var y = document.getElementById("register");
    var z = document.getElementById("btn");
  function register(){
  	x.style.left ="-400px"; 
    y.style.left ="70px";
    z.style.left ="100px"; 
}
 function login(){
  	x.style.left ="68px"; 
    y.style.left ="450px";
    z.style.left ="0"; 
}
</script> 
</body>
</html>