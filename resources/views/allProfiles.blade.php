<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>All Profiles</title>
    <style>
        table {
            border-collapse: collapse;
            width: 100%;
            max-width: 800px;
            margin: 0 auto;
            border: 1px solid #ddd;
        }

        thead {
            background-color: #f2f2f2;
        }

        th,
        td {
            text-align: left;
            padding: 12px;
        }

        th {
            font-weight: bold;
            border-bottom: 1px solid #ddd;
        }

        tr:nth-child(even) {
            background-color: #f9f9f9;
        }

        tr:hover {
            background-color: #f5f5f5;
        }
    </style>
</head>

<body>
    <section>
        <table>
            <thead>
                <th>Name</th>
                <th>Email</th>
                <th>Address</th>
                <th>Contact</th>
                <th>About Me</th>
            </thead>
            <tbody>
                @foreach ($profiles as $profile)
                    <tr>
                        <td>{{ $profile->name }}</td>
                        <td>{{ $profile->email }}</td>
                        <td>{{ $profile->address }}</td>
                        <td>{{ $profile->contact }}</td>
                        <td>{{ $profile->about }}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </section>
</body>

</html>
