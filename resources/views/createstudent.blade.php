<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <title>Document</title>
</head>
<body>
    <h1>CREATE STUDENT FORM</h1>

    <form action="{{route('createStudent')}}" method="post" enctype="multipart/form-data">
        @csrf
        <div class="mb-3">
            <label for="name" class="form-label">Name</label>
            <input name="name" type="text" class="form-control" id="formGroupExampleInput" placeholder="Input Name">
        </div>
        <div class="mb-3">
            <label for="NIM" class="form-label">NIM</label>
            <input name="NIM" type="numeric" class="form-control" id="formGroupExampleInput" placeholder="Input NIM">
        </div>
        <div class="mb-3">
            <label for="birth" class="form-label">Birthday</label>
            <input name="birth" type="date" class="form-control" id="formGroupExampleInput" placeholder="Input Date">
        </div>
        <div class="mb-3">
            <label for="age" class="form-label">Age</label>
            <input name="age" type="numeric" class="form-control" id="formGroupExampleInput" placeholder="Input Age">
        </div>
        <div class="mb-3">
            <label for="class" class="form-label">Class</label>
            <input name="class" type="text" class="form-control" id="formGroupExampleInput" placeholder="Input Class">
        </div>
        <button type="submit" class="btn btn-success">Insert</button>
    </form>

</body>
</html>
