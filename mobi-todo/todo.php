<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>To Do List</title>
  <!-- Styles CSS -->
  <!-- bootstrap css (laravel) -->    
  <link rel="stylesheet" href="css/app.css">
  <!-- bootstrap css again -->
  <link rel="stylesheet" href="css/bootstrap.min.css">
  <!-- awesome css -->  
  <link rel="stylesheet" href="css/fontawesome.min.css">  
  <!-- main.css (template) -->
  <link rel="stylesheet" href="css/main.css">
</head>
<body>

<div class="row">
    <div class="col-md-3">
    </div>
    <div class="col-md-6 col-sm-6 col-xs-12">
      <div id="myDIV" class="header">
        <h2 style="margin:5px">My To Do List</h2>
        <input type="text" id="myInput" placeholder="Title...">
        <span class="addBtn">Add</span>
      </div>
    </div>
    <div class="col-md-3">
    </div>    
</div>

<div class="row">
    <div class="col-md-3">
    </div>
    <div class="col-md-6 col-sm-6 col-xs-12">
      <ul id="myUL">
      </ul>
    </div>
    <div class="col-md-3">
    </div>    
</div>

<!-- Scripts JS -->   
<!-- bootstrap script -->
<script src="js/app.js"></script>
<!-- jquery scripts -->
<script src="js/jQuery-2.2.0.min.js"></script>
<script src="js/jquery-ui.min.js"></script>  
<!-- <script src="js/main.js"></script> --> 
<!-- my mine.js -->
<script src="js/mine.js"></script>

<script>
$(document).ready(function(){
   BaseRecord.index();
   $(".addBtn").click(function(){
      BaseRecord.store($("#myInput").val());
   });
   $("#myInput").keydown(function(event){
      if(event.which==13) BaseRecord.store($("#myInput").val());
   });
});
</script>  

</body>
</html>
