<!Doctype html>
<head>
    <title>Hotel Sunrise</title>
    <link rel="icon" href="images/icon.jpg"/>
    <link href="https://fonts.googleapis.com/css?family=Merriweather" rel="stylesheet">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
    <link href="css/style.css" rel="stylesheet" type="text/css">
    <style>
        body {
  background-image: url(images/bg.jpg);
            font-family: 'Merriweather', serif;

}


*[role="form"] {
    max-width: 530px;
    padding: 40px 40px 40px 40px;
    margin: 0 auto;
    border-width: 40px 40px 40px 40px;
    border-radius: 0.8em;
    border-color: white;
    background-color: lightgoldenrodyellow;
    opacity: 0.80;
}

*[role="form"] h2 {
    margin-left: 4em;
    margin-bottom: 1em;
    color: black;
}
*[role="form"] label{
    color: black;
}
    </style>
    
    <script>
        $(document).ready(function(){
            $('#register').attr("disabled","true");
        });
    </script>
</head>
<body >
    <br><br><br>
<div class="container">
    <form class="form-horizontal" role="form" action="addCustomer.php" method="post">
        <h2><b>Create an Account</b></h2>
                <div class="form-group">
                    <label for="firstName" class="col-sm-3 control-label"><b>Full Name</b></label>
                    <div class="col-sm-9">
                        <input type="text" name="name" placeholder="Enter Your Full Name" class="form-control" autofocus required>
                        <span class="help-block">First Name Last Name, eg.:John Doe</span>
                    </div>
                </div>
                
                <div class="form-group">
                    <label class="col-sm-3 control-label"><b>Contact No.</b></label>
                    <div class="col-sm-9">
                        <input type="number" name="contact" placeholder="Enter Your Contact No." class="form-control" required>
                    </div>
                </div>
                <div class="form-group">
                    <label for="email" class="col-sm-3 control-label" ><b>Email</b></label>
                    <div class="col-sm-9">
                        <input type="email" name="email" placeholder="Enter Your Email" class="form-control" required>
                    </div>
                </div>
                <div class="form-group">
                    <label for="password"  class="col-sm-3 control-label"><b>Password</b></label>
                    <div class="col-sm-9">
                        <input type="password" name="password" placeholder="Enter Your Password" class="form-control" required>
                    </div>
                </div>

                <div class="form-group">
                    <label for="state" class="col-sm-3 control-label"><b>State</b></label>
                    <div class="col-sm-9">
                        <select name="state" class="form-control" onchange="fetchCities(this.value)">
                            <option>Select Your State</option>
                            <option>Maharashtra</option>
                            <option>Karnataka</option>
                            <option>Gujarat</option>
                        </select>
                    </div>
                </div>   

                <div class="form-group">
                    <label for="City" class="col-sm-3 control-label"><b>City</b></label>
                    <div class="col-sm-9">
                        <select name="city" id="cities" class="form-control">
                            <option>Select Your City</option>
                        </select>
                    </div>
                </div>                   
                    
                    
                <div class="form-group">
                    <div class="col-sm-9 col-sm-offset-3">
                        <div class="checkbox">
                            <label>
                                <input type="checkbox" onchange="document.getElementById('register').disabled=!this.checked;">I accept <a href="#">terms</a>
                            </label>
                        </div>
                    </div>
                </div> <!-- /.form-group -->
                <div class="form-group">
                    <div class="col-sm-offset-4 col-sm-4 col-sm-offset-4">
                        <button type="submit" class="btn btn-primary btn-block" id="register"><b>Sign Up</b></button>
                    </div>
                </div>
    </form>
</div>>
<script>
function fetchCities(state){
    				var disp=document.getElementById('cities');
				disp.innerHTML='';
				var mh=['Pune','Mumbai','Solapur','Nashik'];
				var ka=['Bangalore','Mysore','Bijapur'];
				var gj=['Surat','Ahmedamad','Vadodara'];

				if(state=='Maharashtra'){
					disp.innerHTML+='<option>---select---</option>';
					for (var i = 0; i < mh.length; i++) 
							disp.innerHTML+='<option>'+mh[i]+'</option>';

					}else if (state=='Karnataka') {
						disp.innerHTML+='<option>---select---</option>';
					for (var i = 0; i < ka.length; i++) 
							disp.innerHTML+='<option>'+ka[i]+'</option>';

					}else if(state=='Gujarat'){
						disp.innerHTML+='<option>---select---</option>';
					for (var i = 0; i < gj.length; i++) 
							disp.innerHTML+='<option>'+gj[i]+'</option>';

					}else{
						disp.innerHTML+='<option>First Select State</option>';
					}
    }
</script>
    
</body>
</html>