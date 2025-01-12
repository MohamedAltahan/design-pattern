<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Online Marketplace</title>
    </head>

    <body>
        <h1>Welcome to the Online Marketplace</h1>
        <form action="{{ route('marketplace.addProduct') }}" method="POST">
            @csrf
            <input type="text" name="name" placeholder="Product Name">
            <button type="submit">Add Product</button>
        </form>
        <form action="{{ route('marketplace.addOffer') }}" method="POST">
            @csrf
            <input type="text" name="message" placeholder="Offer Message">
            <button type="submit">Add Offer</button>
        </form>
    </body>

</html>
