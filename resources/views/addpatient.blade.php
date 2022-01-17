<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>patient</title>
</head>
<body>
    <nav>
        <ul>
            <li><a href="/">home</a></li>
            <li><a href="addpatient">add patient</a></li>
        </ul>
    </nav> 


    <div class="container" align="center" style="padding-top: 100px">

      
       
        <form action="{{url('upload_patient')}}" method="post" enctype="multipart/form-data">
            @csrf
            <div style="padding: 15px">
                <label for="">Patient Name</label>
                <input required type="text" style="color: black; " name="patient" placeholder="Fullname">
            </div>
            <div style="padding: 15px">
                <label for="">Patient gender</label>
                <input required type="text" style="color: black; " name="gender" placeholder="Gender">
            </div>


            <div style="padding: 15px">
                <label for="">Patient services</label>
                <input required type="text" style="color: black;" name="service" placeholder="services">
            </div>
         
                <input type="submit" class="btn btn-success">
           
            </div>
        </form>
    </div>

</body>
</html>