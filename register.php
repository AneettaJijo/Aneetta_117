<html>
    <head>
    <title>Registration form</title>
	<script>
	function check()
{

    var phonenumber = document.getElementById('phonenumber');
   
    
    var message = document.getElementById('message');

   var goodColor = "#0C6";
    var badColor = "#FF9B37";
  
    if(mobile.value.length!=10){
       
        mobile.style.backgroundColor = badColor;
        message.style.color = badColor;
        message.innerHTML = "required 10 digits, match requested format!"
    }}
	</script>
    <style type="text/css">
        *{
            margin:0;
            padding:0;
        }
        body{
            background-color:#fff;
            background-image:url(ayurvedic-herbs-896x580.jpg);
            background-size: cover;
            font-family: sans-serif;
            margin-top:40px;
        }
        .regform{
            width:800px;
            background-color:rgb(0,0,0,6);
            margin:auto;
            color:#FFFFFF;
            padding:10px 0px 10px 0px;
            text-align:center;
            border-radius:15px 15px 0px 0px;
        }
        .main{
            background-color:rgb(0,0,0,0.5);
            width:800px;
            margin:auto;
        }
        form{
            padding:10px;
        }
        #name{
            width:100px;
            height:50px;
        }
        .name{
            margin-left:25px;
            margin-top:30px;
            width:125px;
            color:white;
            font-size:18px;
            font-weight:700;
        }
        .Userid{
            position:relative;
            left:200px;
            top:-37px;
            line-height:40px;
            border-radius:6px;
            padding:0 22px;
            font-size:16px;
        }
        .fullname {
            position:relative;
            left:200px;
            top:-37px;
            line-height:40px;
            border-radius:6px;
            padding:0 22px;
            font-size:16px;
        }
        .email{
            position:relative;
            left:200px;
            top:-37px;
            line-height:40px;
            border-radius:6px;
            padding:0 22px;
            font-size:16px;
        }
        .password{
            position:relative;
            left:200px;
            top:-37px;
            line-height:40px;
            border-radius:6px;
            padding:0 22px;
            font-size:16px;
        }
        .number{
            position:relative;
            left:200px;
            top:-37px;
            line-height:40px;
            border-radius:6px;
            padding:0 22px;
            font-size:16px;
        }
        select{
            position:relative;
            left:200px;
            top:-37px;
            line-height:40px;
            border-radius:6px;
            padding:0 22px;
            font-size:16px;
        }
        .button{
            background-color:#3BAF9F;
            display:block;
            margin-top:20px;
            margin-bottom:20px;
            margin-left: 200px;
			margin-right: 300px;
            text-align:center;
            border-radius:12px;
            border:2px solid #366473;
            padding:14px 110px;
            outline:none;
            color:white;
            cursor:pointer;
            transition:0.25;
            position:relative;
			 text-decoration:none;
           
        }
        .button:hover{
            background-color:#5390F5;
        }

    </style>
    </head>
    <body>


<?php
$c=mysqli_connect("localhost","root","","homevedic");
if(mysqli_connect_errno())
{
	//echo "failed to connect:".mysqli_connect_error();
}
else{
//echo "ok ";
}

?>
<?php
if(isset($_POST['submit']))
{
 $userid=$_POST['Userid'];
	$name=$_POST['name'];
	$email=$_POST['email'];
	$password=$_POST['password'];
	$phonenumber=$_POST['phonenumber'];
	$phno=(int)$phonenumber;
	$category=$_POST['category'];
	
	 
    
	
		//insert query
	$ins="INSERT INTO tb_register (userid,name,emailid,password,phonenumber,category) VALUES ('$userid', '$name', '$email', '$password', '$phonenumber', '$category')";
	//echo $ins;
	//$sql=mysqli_query($c,$ins);
if ($c->query($ins)==true) 
{
  //echo "New record created successfully";
}

 else 
 {
  //echo "Error: " . $ins . "<br>" . $c->error;
}


	}
	
?> 

	<div class="regform"><h1>Create Account</h1></div>
        <div class="main">
            <form   method="POST"  >
                <div id="name">
                    <h2 class="name">User id</h2>
                    <input class="Userid" type="text" name="Userid" required>
                </div>
                <h2 class="name">Name</h2>
                <input class="fullname" type="text" name="name" required>
                <h2 class="name">Email </h2>
                <input class="email" type="email" name="email" required>
                <h2 class="name">Password</h2>
                <input class="password" type="password" name="password" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" title="Must contain at least one number and one uppercase and lowercase letter, and at least 8 or more characters" required> 
                <h2 class="name">Phone number</h2>
                <input class="number" type="number" name="phonenumber"  title="10 digit mobile number" pattern="[1-9]{1}[0-9]{9}" onkeyup="check(); return false; "required >
                <h2 class="name">Category</h2>
                <select name="category"  >
                    <option>SELLER</option>
                    <option>BUYER</option>
                </select>
				<input type="hidden" name="form_submitted" value="1" />
				 <button class="button" name="submit">Submit</button>
            </form>
        </div>
    </body>    
</html>