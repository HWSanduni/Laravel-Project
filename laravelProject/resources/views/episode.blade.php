<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="/your-path-to-fontawesome/css/fontawesome.css" rel="stylesheet">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
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
  <div class="card-header">Episode Information</div>
  <div class="card-body text-primary">
  @foreach($errors->all() as $error)
  <div class="alert alert-danger" role="alert">
  <li>{{$error}}</li>
  </div>
  @endforeach
  <form method="post" action="/saveEpisode" enctype="multipart/form-data">
  @csrf
  <div class="form-row">
    <div class="form-group col-md-6">
    <label for="chanelid">Chenel Name</label>
    <select id="service_status" id="chanelid" name="chanelid" class="form-control">
    @foreach ($episode as $chanels)
        <option value="{{$chanels->id}}">{{$chanels->name}}</option>
        @endforeach
      </select>
</div>
    </div>
  <div class="form-row">
    <div class="form-group col-md-6">
      <label for="episodeName">Episode Name</label>
      <input type="text" class="form-control" id="episodeName" name="name" required>
    </div>
    <div class="form-group col-md-6">
      <label for="description">Description</label>
      <input type="text" class="form-control" id="description" name="description" required>
    </div>
  </div>
  <div class="form-row">
  <div  class="form-group col-md-6" >
    <label for="startdate">Start Date</label>
    <input type="text" id="startdate" class="form-control" autocomplete="off" name="startdate" required>
  </div>
  <div  class="form-group col-md-6">
    <label for="enddate">End Date</label>
    <input type="text" id="enddate" class="form-control" autocomplete="off" name="enddate" required>
  </div>
  </div>
  <div class="form-row">
    <div class="form-group col-md-6">
    <label for="enddate">Episode logo</label>
    <input type="file" name="image" id="" accept="image/*"/ >
    </div>
    </div>
  <button type="submit" class="btn btn-primary" style="float:right;" >Save</button>
  <a href="/viewepisode" class="btn btn-outline-secondary" role="button" aria-disabled="true">View Episode Details</a>
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