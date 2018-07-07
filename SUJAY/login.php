<html>
	<style> 
		input,textarea,select
		{
		  font-family: 'Open Sans', sans-serif;
		  font-size: 12px;
		  color: #4c4c4c;
		}
		body
		{
			font-family: 'Open Sans', sans-serif;
		  	font-size: 12px;
		  	color: #4c4c4c;	
			background-image: url('adminlogin.jpg');
		}
		h1
		{
		  font-size: 32px;
		  font-weight: 300;
		  color: #4c4c4c;
		  text-align: center;
		  padding-top: 10px;
		  margin-top: 20px;
		  margin-bottom: 10px;
		}
		.box h2
		{
		  text-align: center;
		  margin-top: 30px;
		}
		.box
		{
		  margin-top: 45px;
		  margin-left: 450px;
		  width: 400px; 
		  height: 550px; 
		  -webkit-border-radius: 8px/7px; 
		  background-color: white; 
		  -webkit-box-shadow: 1px 2px 5px grey;  
		  border: solid 1px grey;
		}
		.footer h4
		{
		  text-align: right;
		  margin-right: 30%;
		  margin-top: 30px;
		}
		input
		{
		  margin-top: 15px;
		  margin-left: 25%;
		  margin-right:25%;
		}
	</style>
<body>
    <div class="box">
		<p align="center"><img src='user.jpg' width="250px" height="250px"></p>
        <h1>Log In</h1>
        <form action="/signin" method="post">
          <input type="text" name="username" id="username" placeholder="Username" required/>
          <br>
          <input type="password" name="password" id="password" placeholder="Password" required/>
          <br>
          <input type="submit" class="button" value="Log In"/>
	 	  <br>
	 	  <h4 align="right" text="black"><a href="/forgetpassword">Forgot Password?</a></h4>
        </form>
    </div>
</body>
</html>