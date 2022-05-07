<!DOCTYPE html>
<html>
<head>
    <title>JUSTICE</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>
<body>
  
<div class="container">
    <div class="card">
        <div class="card-header">Selected Case</div>
        <div class="card-body">
        
              <div class="card-body">
              <h4 class="card-title">Name : {{ $report->namne }}</h4>
              <p class="card-text">Email :{{$report->email}}</p>
              <p class="card-text">Phone_no :{{$report->phone_no}} </p>
              <p class="card-text"> Details: {{$report->report}}</p>
              <h5 class="card-text">PHOTO :<img src="{{Storage::url($report->image)}}" class="w-16 h-16 rounded"></h5>
             
        </div>
            
          
        
        </div>
      </div>
</div>

</body>
</html>