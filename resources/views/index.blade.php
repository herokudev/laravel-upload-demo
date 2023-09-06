<!DOCTYPE html>
<html>
<head>
    <title>Uploads Folder Contents</title>
</head>
<body>
    <h1>Contents of the Uploads Folder</h1>
    <ul>
        @foreach($contents as $item)
            <li>{{ $item->getFilename() }}</li>
        @endforeach
    </ul>
</body>
</html>
