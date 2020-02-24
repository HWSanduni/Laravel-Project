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

<div class="card border-primary mb-3" style="min-width: 400px;margin:15px;">
  <div class="card-header">Chanel Information</div>
  <div class="card-body text-primary">
  <form method="post" action="/saveChanel">
  {{ csrf_field() }}
  <div class="form-row">
    <div class="form-group col-md-6">
      <label for="chanelName">Channel Name</label>
      <input type="text" class="form-control" id="chanelName" name="name">
    </div>
    <div class="form-group col-md-6">
      <label for="description">Description</label>
      <input type="text" class="form-control" id="description" name="description">
    </div>
  </div>
  <div class="form-row">
  <div  class="form-group col-md-6" >
    <label for="startdate">Start Date</label>
    <input type="text" id="startdate" class="form-control" autocomplete="off" name="startdate">
  </div>
  <div  class="form-group col-md-6">
    <label for="enddate">End Date</label>
    <input type="text" id="enddate" class="form-control" autocomplete="off" name="enddate">
  </div>
  </div>
  <div class="form-row">
    <div class="form-group col-md-6">
    <label for="logo">Chanel Logo</label>
    <input type="file" class="form-control-file" id="logo">
    </div>
    </div>
    <button type="button" class="btn btn-warning" style="color:white">Clear</button>
  <button type="submit" class="btn btn-primary" style="float:right;" >Save</button>
</form>
  </div>
</div>
<div class="card border-primary mb-3" style="min-width: 400px;margin:15px;">
  <div class="card-header">All Chanels Details</div>
  <div class="card-body text-primary">
  <table class="table table-striped">
  <thead>
    <tr>
      <th scope="col">Chanel Name</th>
      <th scope="col">Description</th>
      <th scope="col">Start Date</th>
      <th scope="col">End Date</th>
      <th scope="col"></th>
      <th scope="col"></th>
    </tr>
  </thead>
  <tbody>
  @foreach ($chanel as $chanels)
    <tr>
     
      <td>{{$chanels->name}}</td>
      <td>{{$chanels->description}}</td>
      <td>{{$chanels->startdate}}</td>
      <td>{{$chanels->enddate}}</td>
      <td><a href="/updateChanel/{{$chanels->id}}" class="btn btn-warning"> Edit</a></td>
      <td><a href="/deleteChanel/{{$chanels->id}}" class="btn btn-danger">Delete</a></td>
    </tr>
    @endforeach
  </tbody>
</table>
  </div>
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