<!DOCTYPE html>
<html lang="en">
<head>
  <title>Product Filter</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
  <script src="https://cdn.jsdelivr.net/npm/jquery@3.7.1/dist/jquery.slim.min.js"></script>
  <style>
  .category-img {
    width: 80px;
    height: 80px;
    object-fit: contain;
  }

  .card {
    height: 150px;
    display: flex;
    justify-content: center;
    align-items: center;
  }

  .section-title {
    font-weight: 600;
    font-size: 24px;
  }

  .product-img {
    width: 70px;
    height: 70px;
    object-fit: contain;
  }

  .product-section {
    margin-top: 10px;
  }
</style>
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-dark" style="background-color: #ee4d2d;">
  <div class="container">
    <a class="navbar-brand font-weight-bold" href="#">ShopWeb</a>
    <form class="form-inline mx-auto" style="width: 60%;">
      <input class="form-control w-100" id="myInput" type="text" placeholder="Search for products on ShopWeb...">
    </form>

    <span class="text-white">Cart 🛒</span>
  </div>
</nav>

<div class="container mt-4">
  <h4 class="section-title">CATEGORY</h4>

  <div class="row text-center">
    <!-- Smartphone -->
    <div class="col-6 col-md-3 mb-3">
      <div class="card p-3">
        <img src="https://down-id.img.susercontent.com/file/id-11134207-8224y-mjqe4zpxz7y87b.webp"class="category-img mb-2">
        <p>Smartphone</p>
      </div>
    </div>

    <!-- Tablet -->
    <div class="col-6 col-md-3 mb-3">
      <div class="card p-3">
        <img src="https://els.id/wp-content/uploads/2024/02/Apple-Ipad-10-9.jpg"class="category-img mb-2">
        <p>Tablet</p>
      </div>
    </div>

    <!-- Laptop -->
    <div class="col-6 col-md-3 mb-3">
      <div class="card p-3">
        <img src="https://image.bosoffice.co.id/s3/productimages/webp/co240310/p1331707/w600-h600/f8213c03-3147-47b9-bc63-9f0a728b027e.png"class="category-img mb-2">
        <p>Laptop</p>
      </div>
    </div>

    <!-- Fashion -->
    <div class="col-6 col-md-3 mb-3">
      <div class="card p-3">
        <img src="https://erigostore.co.id/cdn/shop/files/Mobile_Short_Shirt_Pocket_1.jpg?v=1738228782&width=3840"class="category-img mb-2">
        <p>Fashion</p>
      </div>
    </div>
  </div>
</div>

<div class="container mt-3 product-section">
  <h4 class="section-title mt-2">PRODUCT OVERVIEW</h4>
  <p>Search product by name or category</p>
  <p>Try searching: "laptop", "smartphone", "tablet", or "fashion"</p>
  <br>

  <table class="table table-bordered">
    <thead>
      <tr>
        <th class="text-center">Product Name</th>
        <th class="text-center">Category</th>
        <th class="text-center">Price</th>
      </tr>
    </thead>
    <tbody id="myTable">
      <tr>
        <td class="text-center">
        <img src="https://cdnpro.eraspace.com/media/catalog/product/i/p/iphone_13_blue_1.jpg" class="product-img mb-2"><br>
        iPhone 13
        </td>
        <td>Smartphone</td>
        <td>Rp12.000.000</td>
      </tr>
      <tr>
        <td class="text-center">
        <img src="https://completeselular.co.id/wp-content/uploads/2022/04/GALAXY-S21-ULTRA-5G-BLACK-600x600.jpg" class="product-img mb-2"><br>
        Samsung Galaxy S21
        </td>
        <td>Smartphone</td>
        <td>Rp10.500.000</td>
      </tr>
      <tr>
        <td class="text-center">
        <img src="https://macstore.id/wp-content/uploads/2024/04/mba13-m3-silver-gallery1-202402.jpeg" class="product-img mb-2"><br>
        MacBook Air
        </td>
        <td>Laptop</td>
        <td>Rp15.000.000</td>
      </tr>
      <tr>
        <td class="text-center">
        <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTCS3PBNa-LRMGUw_LwmqEuRyhyPvks4PiXjA&s" class="product-img mb-2"><br>
        Dell XPS 13
        </td>
        <td>Laptop</td>
        <td>Rp14.000.000</td>
      </tr>
      <tr>
        <td class="text-center">
        <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTLtCDY-b-iyoiT7RG-8hmKpidFJls6LJ7_jA&s" class="product-img mb-2"><br>
        iPad Pro
        </td>
        <td>Tablet</td>
        <td>Rp10.500.000</td>
      </tr>
      <tr>
        <td class="text-center">
        <img src="https://erigostore.co.id/cdn/shop/files/id-11134201-7rask-m0s99uyzbcwc45.jpg?v=1750319226&width=1445" class="product-img mb-2"><br>
        Erigo T-Shirt
        </td>
        <td>Fashion</td>
        <td>Rp150.000</td>
      </tr>
      <tr>
        <td class="text-center">
        <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQ5iDfddmTolQnPdz7jOpHMdqnC4xKVkltDGw&s" class="product-img mb-2"><br>
        Eiger Backpack
        </td>
        <td>Fashion</td>
        <td>Rp350.000</td>
      </tr>
      <tr>
        <td class="text-center">
        <img src="https://asset-3s.3second.co.id/product/S03032515HT_1.JPG" class="product-img mb-2"><br>
        3Second Hoodie
        </td>
        <td>Fashion</td>
        <td>Rp250.000</td>
      </tr>
    </tbody>
  </table>
</div>

<script>
$(document).ready(function(){
  $("#myInput").on("keyup", function() {
    var value = $(this).val().toLowerCase();
    $("#myTable tr").filter(function() {
      $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
    });
  });
});
</script>

</body>
</html>
