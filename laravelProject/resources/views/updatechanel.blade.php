<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="/your-path-to-fontawesome/css/fontawesome.css" rel="stylesheet">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <style>
  .footer {
    min-height: 50px;
    bottom: 0;
    width: 100%;
    position: absolute;
    height: $height-footer;
    margin-top: auto;
    background:#17202A; 
}

</style>

</head>
<body>
<nav class="navbar navbar-expand-md bg-dark navbar-dark">
  <a class="navbar-brand" >Media in Sri Lanka</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="collapsibleNavbar">
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" href="/">HOME</a>
      </li>
      <li class="nav-item">
        <a class="nav-link"  href="/chanels">CHANEL</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="/episodes">EPISODE</a>
      </li>    
    </ul>
  </div>  
</nav>
<div class="card border-primary mb-3" style="min-width: 400px;margin:15px;">
  <div class="card-header">Edit Chanel Information</div>
  <div class="card-body text-primary">
  <form method="post" action="/editChanel">
  {{ csrf_field() }}
  <div class="form-row">
    <div class="form-group col-md-6">
      <label for="chanelName">Channel Name</label>
      <input type="text" hidden name="id" value="{{$chaneldata->id}}">
      <input type="text" class="form-control" id="chanelName" name="name" value="{{$chaneldata->name}}">
    </div>
    <div class="form-group col-md-6">
      <label for="description">Description</label>
      <input type="text" class="form-control" id="description" name="description"  value="{{$chaneldata->description}}">
    </div>
  </div>
  <div class="form-row">
  <div  class="form-group col-md-6" >
    <label for="startdate">Start Date</label>
    <input type="text" id="startdate" class="form-control" autocomplete="off" name="startdate"  value="{{$chaneldata->startdate}}">
  </div>
  <div  class="form-group col-md-6">
    <label for="enddate">End Date</label>
    <input type="text" id="enddate" class="form-control" autocomplete="off" name="enddate" value="{{$chaneldata->enddate}}">
  </div>
  </div>
  <div class="form-row">
    <div class="form-group col-md-6">
    <input  name="image" hidden value="{{$chaneldata->logo}}">
    <br>
    <img src="/images/{{$chaneldata->logo}}" style="margin-left:10px;width:250px;height:250px;"/>
    </div>
    </div>
  <button type="submit" class="btn btn-primary" style="float:right;" >Update</button>
</form>
  </div>
</div>
</body>


<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.7.1/js/bootstrap-datepicker.min.js"></script>
<script>
  $( function() {
	$( "#startdate" ).datepicker({
		dateFormat: "dd-mm-yy"
		,	duration: "fast"
	});
} );
</script>
<script>
  $( function() {
	$( "#enddate" ).datepicker({
		dateFormat: "dd-mm-yy"
		,	duration: "fast"
	});
} );
</script>
</html>