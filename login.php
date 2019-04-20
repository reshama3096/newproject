<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css" integrity="sha512-dTfge/zgoMYpP7QbHy4gWMEGsbsdZeCXz7irItjcC3sPUFtf0kuFbDz/ixG7ArTxmDjLXDmezHubeNikyKGVyQ==" crossorigin="anonymous">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

<style>
.inputstl { 
    padding: 9px; 
    border: solid 1px #B3FFB3; 
    outline: 0; 
    background: -webkit-gradient(linear, left top, left 25, from(#FFFFFF), color-stop(4%, #A4FFA4), to(#FFFFFF)); 
    background: -moz-linear-gradient(top, #FFFFFF, #A4FFA4 1px, #FFFFFF 25px); 
    box-shadow: rgba(0,0,0, 0.1) 0px 0px 8px; 
    -moz-box-shadow: rgba(0,0,0, 0.1) 0px 0px 8px; 
    -webkit-box-shadow: rgba(0,0,0, 0.1) 0px 0px 8px; 

    } 
    body
    {
        background-color: azure;
    }
   
</style>

</head>

<body>
<div class="container">
<h1 class="text-center">Employee Registration Form</h1><br>
    <form class="form-horizontal" role="form" method="POST" action="connect.php">
      <div class="form-group">
        <label  class="col-sm-2 control-label">Username:</label>
        <div class="col-sm-5">
          <input type="text" class="form-control inputstl"  name="username" placeholder="Enter Username">
        </div>
      </div>


      <div class="form-group">
        <label  class="col-sm-2 control-label">Password</label>
        <div class="col-sm-5">
          <input type="password" class="form-control inputstl"  name="password" placeholder="Enter Password">
        </div>
      </div>
     
      <div class="form-group">
        <div class="col-sm-offset-2 col-sm-10">
          <div class="checkbox">
            <label>
              <input type="checkbox" class="inputstl"> Remember me
            </label>
          </div>
        </div>
      </div>
      <div class="form-group">
        <div class="col-sm-offset-2 col-sm-4">
          <button type="submit" class="btn btn-lg btn-block btn-success" value="submit">Submit</button>
        </div>
      </div>
    </form>
   </div> 
</body>
</html>

