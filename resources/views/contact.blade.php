<!DOCTYPE html>
<html>
<head>
    <title>Contact Form</title>
    <link rel="stylesheet" type="text/css" href="{{ asset('css/app.css') }}">
</head>
<body>
    <div class="container">
        <h2>Contact Us</h2>

        @if(Session::has('success'))
            <div class="alert alert-success">
                {{ Session::get('success') }}
            </div>
        @endif

        <form method="POST" action="{{ route('contact.send') }}">
            @csrf
            <div class="form-group">
                <label for="name">Name:</label>
                <input type="text" class="form-control" id="name" name="name" required>
            </div>
            @error('name')
            <span>{{ $message}}</span>
            @enderror
            <div class="form-group">
                <label for="email">Email:</label>
                <input type="email" class="form-control" id="email" name="email" required>
            </div>
            @error('email')
            <span>{{ $message}}</span>
            @enderror
            <div class="form-group">
                <label for="message">Message:</label>
                <textarea class="form-control" id="message" name="message" required></textarea>
            </div>
            @error('message')
            <span>{{ $message}}</span>
            @enderror
            <button type="submit" class="btn btn-primary">Send</button>
        </form>
    </div>
</body>
</html>
