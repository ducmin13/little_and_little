<!DOCTYPE html>
<html>
<head>
    <title>Ticket Information</title>
</head>
<body>
    <h1>Ticket Information</h1>
    
    <table>
        <thead>
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Email</th>
                <th>Phone</th>
                <th>Address</th>
                <th>Message</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($contact as $item)
                <tr>
                    <td>{{ $item['id'] }}</td>
                    <td>{{ $item['name'] }}</td>
                    <td>{{ $item['email'] }}</td>
                    <td>{{ $item['phone'] }}</td>
                    <td>{{ $item['address'] }}</td>
                    <td>{{ $item['message'] }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
</body>
</html>
