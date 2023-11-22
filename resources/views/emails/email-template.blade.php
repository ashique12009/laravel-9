<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Queue email</title>
</head>
<body>
    <div>
        <h1>{{ $subject }}</h1>
        <div>
            {{ $body }}
            <p>This is a test email using queue without blocking main thread.</p>
            <p>Or we can say it is sending email asynchronously.</p>
        </div>
    </div>
</body>
</html>