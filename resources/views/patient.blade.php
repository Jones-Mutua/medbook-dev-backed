<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="stylesheet" href="patient.css">
    <title>Patient</title>
</head>
<body>
<nav>
    <ul>
        <li><a href="/">home</a></li>
        <li><a href="addpatient">add patient</a></li>
    </ul>
</nav>

{{-- @foreach ($data as $data)
    @csrf
@method('put') --}}

    <table class="styled">
        <thead>
            <th>tbl_patient</th>
            <th>tbl_gender</th>
            <th>tbl_services</th>
        </thead>
        <tbody>
            <tr>
                <td>jonh mutua</td>
                <td>male</td>
                <td>software developer</td>

            </tr>
            <tr>
                <td>jonh mutua</td>
                <td>male</td>
                <td>software developer</td>

            </tr>
        </tbody>
    </table>
    {{-- @endforeach --}}
</body>
</html>