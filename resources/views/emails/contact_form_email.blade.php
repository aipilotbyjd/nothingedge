<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>New Contact Form Submission</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            line-height: 1.6;
            color: #333;
        }

        .container {
            max-width: 600px;
            margin: auto;
            padding: 20px;
            border: 1px solid #ccc;
            border-radius: 5px;
            background-color: #f9f9f9;
        }

        h1 {
            margin-top: 0;
        }

        ul {
            list-style: none;
            padding: 0;
        }

        ul li {
            margin-bottom: 10px;
        }

        .button {
            display: inline-block;
            background-color: #007bff;
            color: #fff;
            text-decoration: none;
            padding: 10px 20px;
            border-radius: 5px;
        }

        .button:hover {
            background-color: #0056b3;
        }
    </style>
</head>
<body>
<div class="container">
    <h1>New Contact Form Submission</h1>
    <ul>
        <li><strong>Name:</strong> {{ $name ?? '' }}</li>
        <li><strong>Email:</strong> {{ $email ?? '' }}</li>
        <li><strong>Telephone:</strong> {{ $tel ?? '' }}</li>
        <li><strong>Message:</strong> {{ $message ?? '' }}</li>
    </ul>
    <p>Thank you for your message!</p>
    <a class="button" href="https://nothingedge.com/">Visit Our Website</a>
</div>
</body>
</html>
