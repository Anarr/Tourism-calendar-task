<!DOCTYPE html>
<html>
<head>
<meta charset='utf-8' />
<link href='fullcalendar.css' rel='stylesheet' />
<link href='fullcalendar.print.css' rel='stylesheet' media='print' />
<script src='lib/moment.min.js'></script>
<script src='lib/jquery.min.js'></script>
<script src='fullcalendar.min.js'></script>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
<link rel="stylesheet" href="style.css" type="text/css">
<script src="my-app.js" type="text/javascript"></script>
<link href='https://fonts.googleapis.com/css?family=Orbitron:400,700' rel='stylesheet' type='text/css'>
</head>
<body>
<nav class="navbar navbar-default navbar-fixed-top">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" href="#">
        <img alt="Brand" src="static/img/logo.png" width="70">
      </a>
    </div>
  </div>
</nav>
	
<div class="container-fluid">
<div class="row">
<div class="col-md-9 my-calendar-box">
  <h2>Tourism Calendar</h2>
	<div id='calendar'></div>
	</div>


<div class="col-md-3 my-form">
<form class="form-horizontal">
  <div class="form-group">
    <label for="start-date" class="col-sm-2 control-label">Start</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" id="start-date" placeholder="start">
    </div>
  </div>
  <div class="form-group">
    <label for="end-date" class="col-sm-2 control-label">End</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" id="end-date" placeholder="end">
    </div>
  </div>
<!--   <div class="form-group">
    <label for="price" class="col-sm-2 control-label">Price</label>
    	<div class="col-sm-10">
        <input type="text" class="form-control" placeholder="price" id="price">
        </div>
  </div> -->
</form>
<div class="data-div col-sm-12 col-md-12" class="hide"></div>
	</div>

</div>
</div>
</body>
</html>
