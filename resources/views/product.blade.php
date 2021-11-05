<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Product</title>
</head>
<body>

    <ul>
        @foreach ($products as $key=>$product)
            @if ($key==1 || $key==3)
                <li> {{$key}} - {{$product}} </li>
            @endif
        @endforeach
    </ul>
</body>
</html>
