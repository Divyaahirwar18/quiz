<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>

	<style type="text/css">
		body {
   
    font-family: 'Poppins', sans-serif;
    background-image: url(img3.jpg);
    background-size: cover;
}
#form {
    width: 250px;
    margin: 20vh auto 0 auto;
    padding: 25px;
    background-color: whitesmoke;
    border-radius: 4px black ;
    font-size: 12px;
    border: solid;
    font-family: Algerian;

}
#form h1 {
    color: #0f2027;
    text-align: center;
    text-decoration: underline blue;
    font-family: Algerian;
}
#form button {
    padding: 10px;
    margin-top: 10px;
    width: 100%;
    color: white;
    background-color: rgb(41, 57, 194);
    border: none;
    border-radius: 4px;
    font-family: Algerian;
}
#form button {
    padding: 10px;
    margin-top: 10px;
    width: 100%;
    color: white;
    background-color: rgb(41, 57, 194);
    border: none;
    border-radius: 4px;
}
#form input{
	width: 100%;
	font-family: Algerian;
	font-size: 12px;
}
#form textarea{
	width: 100%;
	font-family: Algerian ;

}
.input-control {
    display: flex;
    flex-direction: column;
    text-align: center;
}

.input-control input {
    border: 2px solid #f0f0f0;
    border-radius: 4px;
    display: block;
    font-size: 12px;
    padding: 10px;
    width: 100%;

}

.input-control input:focus {
    outline: 0;
}


.input-control.error input {
    border-color: #ff3860;
}

.input-control .error {
    color: #ff3860;
    font-size: 9px;
    height: 13px;
}

	</style>
</head>
<body>
	<form id="form" action="loginconn.php" method="POST">
		 <div class="container">
        <h1>LOGIN</h1>
        <div class="input-control">
        <div class="error"></div>
            </div>

          <label>Username</label><br>
        <input type="text" name="username" placeholder="full name" required><div class="error"></div>
            </div><br>

        <label>password</label><br>
        <input type="text" name="password" placeholder="password" required><div class="error"></div>
            </div><br>

           
		  
		  <div><button class="btn" type="submit" name="submit">submit</button> 
           
		</div><br>

        <center><span>new user?</span><a href="quiz-signupform.php"><span class="sign-up">Signup here</span></a></center><br>

        <div><center><span class="reset">Reset Password?</span></center></div>
	</form>

</body>
</html>