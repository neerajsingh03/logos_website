<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">

    <title>test api</title>
<style>
.products-container {
    display: flex;
    flex-wrap: wrap;
    gap: 20px; /* Adjust the gap between product cards */
    justify-content: space-around;
    padding: 20px;
}

/* Individual product card */
.product-card {
    width: 200px; /* Adjust the width of each product card */
    border: 1px solid #ccc;
    border-radius: 8px;
    padding: 15px;
    background-color: #fff;
    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
}

/* Product image */
.product-image {
    width: 100%;
    height: auto;
    border-radius: 8px;
    margin-bottom: 10px;
}

/* Product details */
.product-details {
    text-align: left;
}

.product-details h2 {
    font-size: 1.2rem;
    margin-bottom: 5px;
}

.product-details p.price {
    font-weight: bold;
    color: #333;
}

.product-details p {
    font-size: 0.9rem;
    margin-bottom: 5px;
}

/* Rating */
.rating {
    font-size: 0.8rem;
    color: #888;
    margin-top: 10px;
}

</style>

</head>
<body>
     <h6>
        This is check api test
     </h6>
    <div class="products-container">
        @foreach ($data as $product)
            <div class="product-card">
                {{-- <h6>{{$product['id']}}</h6> --}}
                <img src="{{ $product['image'] }}" alt="{{ $product['title'] }}" class="product-image">
                <div class="product-details">
                    <h2>{{ $product['title'] }}</h2>
                    <p class="price">$ {{ $product['price'] }}</p>
                    <p>Category: {{ $product['category'] }}</p>
                    <div class="rating">
                        @php
                        $rating = $product['rating']['rate']; 
                        @endphp
                    
                    @for ($i = 1; $i <= $rating; $i++)
                        <span>
                            <i class="fas fa-star" style="color: #eecf1e;"></i>
                        </span>
                    @endfor
                        ({{ $product['rating']['count'] }} reviews)
                    </div>
                </div>
            </div>
        @endforeach
    </div>
</body>
</html>