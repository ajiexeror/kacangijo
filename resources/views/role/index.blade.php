<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> {{ $pagetitle }} </title>
</head>
<body>
    <h1>Tes role index</h1>
  
    @can('role-create')
        <button>tambah</button>
    @endcan
</body>
</html>