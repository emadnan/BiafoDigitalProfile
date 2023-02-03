<!DOCTYPE html>
<html>
<head>
    <title>Card Created</title>
</head>
<body>
    <h1>{{ $data['title'] }}</h1>
    <p>{{ $data['body'] }}</p>
    <p>Email: {{ $data['email'] }}</p>
    <p>Password: {{ $data['password'] }}</p>
    <a href="{{ $data['link'] }}">{{ $data['link'] }}</a>
   
    <p>Thank you</p>
</body>
</html>