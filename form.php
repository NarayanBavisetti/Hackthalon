<!DOCTYPE html>
<html>
<head>
	<title>Registration Page></title>
    <link rel="stylesheet" type="text/css" href="css/bootstrap.css">
   
    
    <link href="https://unpkg.com/tailwindcss@^1.0/dist/tailwind.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">

</head>
<body background-color = "blue">
       
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        
        <a class="navbar-brand" href="#">Life Care</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
      
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav mr-auto">
            <li class="nav-item active ">
              <a class="nav-link" href="/">Home <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item ">
              <a class="nav-link" href="attach.html">Appointement</a>
            </li>
            <li class="nav-item dropdown ">
              <a class="nav-link" href="contact.html" target="_self" id="navbarDropdown" role="button" aria-haspopup="true" aria-expanded="false" >
               Contact
              </a>
              <!-- <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                <a class="dropdown-item" href="#">E-mail</a>
                <a class="dropdown-item" href="#">Call us</a>
                <! <div class="dropdown-divider"></div>
                <a class="dropdown-item" href="#">Something else here</a> -->
            
        </div>
    </li>
  </ul>
</div>
</nav>
<div class="contain">
    <h2>Appointement Form</h2>
</div>
	<div class="container">
		<div class="row">
			<div class="panel panel-primary">
				
				<div class="panel panel-body">
					<form action="connec.php" method="post">
						<div class="form-group">
							<label for="firstname">Firstname</label>
							<input type="text" class="form-control" id="firstname" name="fname">
						</div>
						<div class="form-group">
							<label for="lastname">Lastname</label>
							<input type="text" class="form-control" id="lastname" name="lname">
						</div>
						<div class="form-group">
							<label for="email">E-mail</label>
							<input type="text" class="form-control" id="email" name="mail">
						</div>
						<div class="form-group">
							<label for="gender">Gender</label>
							<label for="male" class="radio-inline"><input type="radio" value="m" id="male">Male							
							</label>
							<label for="female" class="radio-inline"><input type="radio" value="f" id="female">Female</label>
							<label for="others" class="radio-inline"><input type="radio" value="o" id="others">Others</label>
                        </div>
                        <div class="form-group">
                            <label for="exampleFormControlSelect1">Symptoms</label>
                            <select class="form-control" id="exampleFormControlSelect1" >
                              <option>Fever</option>
                              <option>Headache</option>
                              <option>Stomach-ache</option>
                              <option>Cough and cold</option>
                              <option>Other</option>
                            </select>
                          </div>
                          Enter Date
                          <select name ="date" >
                            <option value = "month">1</option>
                            <option value = "month">2</option>
                            <option value = "month">3</option>
                            <option value = "month">4</option>
                            <option value = "month">5</option>
                            <option value = "month">6</option>
                            <option value = "month">7</option>
                            <option value = "month">8</option>
                            <option value = "month">9</option>
                            <option value = "month">10</option>
                            <option value = "month">11</option>
                            <option value = "month">12</option>
                            <option value = "month">13</option>
                            <option value = "month">14</option>
                            <option value = "month">15</option>
                            <option value = "month">16</option>
                            <option value = "month">17</option>
                            <option value = "month">18</option>
                            <option value = "month">19</option>
                            <option value = "month">20</option>
                            <option value = "month">21</option>
                            <option value = "month">22</option>
                            <option value = "month">23</option>
                            <option value = "month">24</option>
                            <option value = "month">25</option>
                            <option value = "month">26</option>
                            <option value = "month">27</option>
                            <option value = "month">28</option>
                            <option value = "month">29</option >
                            <option value = "month">30</option>
                            <option value = "month">31</option>
        
                           <br>

                          </select>

                          Enter Month
                          <select name ="month" >
                              
                              <option value = "month">January</option>
                              <option value = "month">Feburary</option>
                              <option value = "month">March</option>
                              <option value = "month">April</option>
                              <option value = "month">May</option>
                              <option value = "month">June</option>
                              <option value = "month">july</option>
                              <option value = "month">August</option>
                              <option value = "month">September</option>

                              <option value = "month">October</option>
                              <option value = "month">November</option>
                              <option value = "month">December</option>
                          </select>
                          <br><br><br>
                          <div class="form-group">
                            <label for="exampleFormControlSelect1">Timings</label>
                            <select class="form-control" id="exampleFormControlSelect1">
                              <option>3:30pm-4:30pm</option>
                              <option>4:30pm-5:30pm</option>
                              <option>5:30pm-6:30pm</option>
                              <option>6:30pm-7:30pm</option>
                              <option>7:30pm-8:30pm</option>
                            </select>
                          </div>
                   
						<div class="form-group">
							<label for="number">Number</label>
							<input type="text" class="form-control" id="number" name="num">
                        </div>
                        
						<input type="submit" class="btn btn-primary">
					</form>
					
				</div>
				
			</div>	
		</div>
	</div>
	<script src="js/jquery-3.5.1.js"></script>
	<script src="js/bootstrap.bundle.min.js"></script>
</body>
</html>