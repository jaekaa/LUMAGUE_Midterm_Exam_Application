<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Japanese Resto Food</title>
        <style>
            body { font-family: Arial, sans-serif; background: #f8f8f8; padding: 20px; }
            .container { max-width: 600px; margin: auto; background: white; padding: 20px; border-radius: 10px; box-shadow: 0 0 10px rgba(0,0,0,0.1); }
            h2 { text-align: center; color: #333; }
            table { width: 100%; border-collapse: collapse; margin-top: 10px; }
            th, td { padding: 10px; border: 1px solid #ddd; text-align: left; }
            th { background: #ff4d4d; color: white; }
        </style>
    </head>
    <body>
        <div class="container">
            <h2>Japanese Food Products</h2>
            <table>
                <thead>
                    <tr>
                        <th>Food Name</th>
                        <th>Price (₱)</th>
                        <th>Category</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($products as $product)
                        <tr>
                            <td>{{ $product['name'] }}</td>
                            <td>₱{{ number_format($product['price'], 2) }}</td>
                            <td>{{ $product['category'] }}</td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </body>
</html>