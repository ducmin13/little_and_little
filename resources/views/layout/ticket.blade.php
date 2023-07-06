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
                <th>Ticket ID</th>
                <th>QR Code</th>
                <th>Date</th>
                <th>Order</th>
                <th>Price</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($tickets as $ticket)
                <tr>
                    <td>{{ $ticket['id'] }}</td>
                    <td>{{ $ticket['qrcode'] }}</td>
                    <td>{{ $ticket['date'] }}</td>
                    <td>{{ $ticket['order'] }}</td>
                    <td>{{ $ticket['price'] }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
</body>
</html>
