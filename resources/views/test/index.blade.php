<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Index</title>
</head>

<body>
    <h1>Gallery of {{ $name }}</h1>
    <span>Ant </span><a href="gallery/ant" ><img src={{ $ant }} alt="Ant" style="height:128px;"></a>
    <span>Bird </span><a href="gallery/bird"><img src={{ $bird }} alt="Bird" style="height:128px;"></a>
    <span>Cat </span><a href="gallery/cat"><img src={{ $cat }} alt="Cat" style="height:128px;"></a>
</body>

</html>
