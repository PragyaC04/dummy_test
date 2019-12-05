<!doctype html>
<html lang="en">
<head>
<meta charset="UTF-8">
<title>login form</title>
<link rel="icon" src="images/veslogo.png" type="image/x-icon">
<style>
body{
margin: 0;
padding: 0;
}
body:before{
content: '';
position: fixed;
width: 100vw;
height: 100vh;
background-image: url("images/build.png");
background-position: center center;
background-repeat: no-repeat;
background-attachment: fixed;
background-size: cover;
-webkit-filter: blur(5px);
-moz-filter: blur(5px);
-o-filter: blur(5px);
-ms-filter: blur(5px);
filter: blur(5px);
}
.Login-form
{
position: absolute;
top: 50%;
left: 50%;
transform: translate(-50%,-50%);
width: 400px;
height: 400px;
padding: 80px 40px;
box-sizing: border-box;
background: rgba(0,0,0,.8);
border-radius:7%;
}
.avatar {
position: absolute;
width: 120px;
height: 100px;
border-radius: 10%;
overflow: hidden;

top: calc(-100px/2);
left: calc(50% - 60px);
}
.Login-form h2 {
margin: 0;
padding: 0 0 20px;
color: #fff;
text-align: center;
text-transform: uppercase;
}
.Login-form p
{
margin: 0;
padding: 0;
font-weight: bold;
color: #fff;
}
.Login-form input
{
width: 100%;
margin-bottom: 20px;
}
.Login-form input[type="text"],
.Login-form input[type="password"]
{
border: none;
border-bottom: 1px solid #fff;
background: transparent;
outline: none;
height: 17px;
color: #fff;
font-size: 16px;
}
.Login-form input[type="submit"] {
height: 30px;
color: #fff;
font-size: 15px;
background: red;
cursor: pointer;
border-radius: 25px;
border: none;
outline: none;
margin-top: 15%;
}
.Login-form a
{
color: #fff;
font-size: 14px;
font-weight: bold;
text-decoration: none;
}
 #btn {
         background-color: #8AB4F8;
         border: none;
         color: black;
         padding: 7px 20px;
         text-align: center;
         text-decoration: none;
         display: inline-block;
         font-size: 20px;
         margin: 4px 2px;
         cursor: pointer;
		 border-radius: 7px;
		 position : absolute;
		 top: calc(+470px/2);
		 left: calc(50% - 50px);
		 font-family:"Times New Roman";
		 
         }
		 
#btn:hover{
			background-color: transparent;
			color: white;
			
			}
	a:link, a:visited {
  background-color: transparent;
  color: white;
  padding: 7px 25px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  border-radius:7px;
  position : absolute;
		 top: calc(+590px/2);
		 left: calc(50% - 100px);
		 font-family:"Times New Roman";
}

a:hover, a:active {
  background-color: #8AB4F8;
  color:black;
}
</style>
</head>
<body>
<div class="Login-form">
<img src="images/veslogo.png" class="avatar">
<h2>Login</h2>
<form method="POST" action="{{ route('login') }}" >
<p style="color:white">
<div>
<div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                    <div class="col-md-6" style="color:white">
                    USERNAME:<input type="text" name="user_name" style = "color:white" required ><br>
    @if ($errors->has('email'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                        <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                            <div class="col-md-6" style="color:white">
	PASSWORD:<input type="password" name="password" style = "color:white" required><br>
    @if ($errors->has('password'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
<br>
</div>
<button formaction ="" id="btn" id="btn"><b>Login</b></button>
  <br><br>
 <a href="/register">Not registered? Click here!</a>
</p>
</form>
</div>
</body>
</html>