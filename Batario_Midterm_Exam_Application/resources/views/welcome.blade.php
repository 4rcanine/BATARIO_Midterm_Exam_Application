<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Comic Alley Bagyow</title>
    <style>
        body {
            font-family: 'Poppins', sans-serif;
            background-color: #f8f3fc;
            margin: 0;
            padding: 20px;
        }
        .container {
            max-width: 900px;
            margin: auto;
            background: white;
            padding: 20px;
            border-radius: 12px;
            box-shadow: 0px 5px 15px rgba(0, 0, 0, 0.1);
        }
        h1 {
            text-align: center;
            font-size: 30px;
            font-weight: 600;
            color: #ff82a9;
            text-shadow: 2px 2px 4px rgba(255, 130, 169, 0.3);
            padding: 10px;
            background: none;
        }
        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 20px;
        }
        th, td {
            padding: 12px;
            text-align: left;
            border-bottom: 1px solid #ddd;
        }
        th {
            background-color: #ffc0cb;
            
            font-weight: bold;
        }
        tr:hover {
            background-color: #fce4ec;
            transition: 0.3s;
        }
        img {
            width: 80px;
            height: auto;
            border-radius: 8px;
            transition: transform 0.3s ease-in-out;
        }
        img:hover {
            transform: scale(1.1);
        }
    </style>
</head>
<body>

<div class="container">
    <h1>✨ Comic Alley Bagyow ✨</h1>
    <table>
        <tr>
            <th>Image</th>
            <th>Name</th>
            <th>Category</th>
            <th>Price</th>
        </tr>
        @foreach($products as $product)
            <tr>
                <td><img src="{{ $product['image'] }}" alt="{{ $product['name'] }}"></td>
                <td>{{ $product['name'] }}</td>
                <td>{{ $product['category'] }}</td>
                <td>₱{{ number_format($product['price'], 2) }}</td>
            </tr>
        @endforeach
    </table>
</div>

</body>
</html>
