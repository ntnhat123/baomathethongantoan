<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        /* public/css/styles.css */

        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            margin: 0;
            padding: 0;
        }

        .container {
            max-width: 600px;
            margin: 0 auto;
            padding: 20px;
            background-color: #fff;
            border-radius: 8px;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
        }

        .form-group {
            margin-bottom: 20px;
        }

        label {
            display: block;
            font-weight: bold;
        }

        input[type="text"],
        textarea {
            width: 100%;
            padding: 10px;
            border: 1px solid #ccc;
            border-radius: 4px;
        }

        button[type="submit"] {
            padding: 10px 20px;
            background-color: #007bff;
            color: #fff;
            border: none;
            border-radius: 4px;
            cursor: pointer;
        }

        button[type="submit"]:hover {
            background-color: #0056b3;
        }

    </style>
    <head>
    <!-- Các thẻ khác trong phần head -->

    <!-- Đường dẫn tới jQuery CDN -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
</head>

</head>
<body>
    <div class="container">
        <h1>Create New Post</h1>
        <!-- /resources/views/posts/create.blade.php -->

        <form method="POST" action="{{ route('posts.store') }}">
            @csrf

            <div>
                <label for="title">Title</label>
                <input type="text" id="title" name="title" required>
                @error('title')
                    <div class="error">{{ $message }}</div>
                @enderror
            </div>

            <div>
                <label for="description">Description</label>
                <input type="text" id="description" name="description" value="{{ old('description') }}" required>
                @error('description')
                    <div class="error">{{ $message }}</div>
                @enderror
            </div>

            <div>
                <input type="hidden" id="story" name="story" value="{{ old('story') }}" >
                @error('description')
                    <div class="error">{{ $message }}</div>
                @enderror
            </div>

            <button type="submit">Submit</button>
        </form>

    </div>
</body>
</html>
