<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>My Profile</title>
    <style>
        form {
            max-width: 500px;
            margin: 0 auto;
            padding: 20px;
            background-color: #f2f2f2;
            border: 1px solid #ccc;
            border-radius: 5px;
        }

        label {
            display: block;
            margin-bottom: 5px;
            font-weight: bold;
        }

        input[type="text"],
        input[type="email"],
        textarea {
            width: 100%;
            padding: 8px;
            border: 1px solid #ccc;
            border-radius: 4px;
            box-sizing: border-box;
            margin-bottom: 10px;
        }

        textarea {
            height: 100px;
        }

        input[type="submit"] {
            background-color: #4CAF50;
            color: white;
            padding: 12px 20px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            font-size: 16px;
        }

        input[type="submit"]:hover {
            background-color: #45a049;
        }
    </style>
</head>

<body>
    <section style="margin-bottom: 12px; text-align: center;">
        <h1>Input Form</h1>
        <a href="{{route('allProfiles')}}">All Profiles</a>
        <form action="{{ route('createProfile') }}" method="post">
            @csrf
            <label for="name">Name</label>
            <input type="text" id="name" name="name" required>

            <label for="email">Email</label>
            <input type="email" id="email" name="email" required>

            <label for="address">Address</label>
            <input type="text" id="address" name="address" required>

            <label for="contact">Contact</label>
            <input type="text" id="contact" name="contact" required>

            <label for="about">About me</label>
            <textarea id="about" name="about" required></textarea>

            <input type="submit" value="Submit">
        </form>
    </section>
</body>

</html>
