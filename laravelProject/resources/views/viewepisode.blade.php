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
  <div class="card-header">All Episode Details</div>
  <div class="card-body text-primary">
  <table class="table table-striped">
  <thead>
    <tr>
     <th scope="col">Chanel Name</th>
      <th scope="col">Episode Name</th>
      <th scope="col">Description</th>
      <th scope="col">Start Date</th>
      <th scope="col">End Date</th>
      <th scope="col"></th>
      <th scope="col"></th>
    </tr>
    <tbody>
  @foreach ($viewepisode as $episodes)
    <tr>
     <td>{{$episodes->chanel_id}}</td>
      <td>{{$episodes->name}}</td>
      <td>{{$episodes->description}}</td>
      <td>{{$episodes->startdate}}</td>
      <td>{{$episodes->enddate}}</td>
      <td><a href="/updateEpisode/{{$episodes->id}}" class="btn btn-warning"> Edit</a></td>
      <td><a href="/deleteEpisode/{{$episodes->id}}" class="btn btn-danger">Delete</a></td>
    </tr>
    @endforeach
  </tbody>
  </thead>
  
</table>
  </div>
  </div>
  </div>
</body>

</html>