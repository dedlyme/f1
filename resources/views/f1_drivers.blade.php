
<!DOCTYPE html>
<html>
<head>
    <title>Current F1 Drivers</title>
</head>
<body>
    <h1>Current F1 Drivers</h1>
    <table>
        <thead>
            <tr>
                <th>Driver</th>
                <th>Nationality</th>
                <th>DOB</th>
                <th>Permanent Number</th>
                <th>...</th> <!-- Add more columns as needed -->
            </tr>
        </thead>
        <tbody>
            @foreach($drivers as $driver)
                <tr>
                    <td>{{ $driver['givenName'] }} {{ $driver['familyName'] }}</td>
                    <td>{{ $driver['nationality'] }}</td>
                    <td>{{ $driver['dateOfBirth'] }}</td>
                    <td>{{ $driver['permanentNumber'] }}</td>
                    <td>...</td> <!-- Add more columns as needed -->
                </tr>
            @endforeach
        </tbody>
    </table>
</body>
</html>