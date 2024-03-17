<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Cart - Drool Pet Toys</title>
  <!-- Bootstrap CDN -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
  <!-- Custom CSS -->
  <link href="css/style.css" rel="stylesheet" />
</head>

<body>
  <header class="header_section">
    <div class="container-fluid">
      <nav class="navbar navbar-expand-lg custom_nav-container">
        <a class="navbar-brand" href="index.php">
          <img src="images/logo.png" alt="Drool Pet Toys Logo">
        </a>
      </nav>
    </div>
  </header>

  <section class="cart_section layout_padding">
    <div class="container">
      <div class="heading_container heading_center">
        <h2>
          Your Shopping Cart
        </h2>
      </div>
      <div class="row">
        <div class="col-md-12">
          <div class="cart_detail">
            <table class="table">
              <thead>
                <tr>
                  <th scope="col">Item</th>
                  <th scope="col">Price</th>
                  <th scope="col">Quantity</th>
                  <th scope="col">Total</th>
                  <th scope="col">Action</th>
                </tr>
              </thead>
              <tbody>
                <!-- An example of a cart item -->
                <tr>
                  <td>Tasty Bone Chew Toy</td>
                  <td>$14.99</td>
                  <td>
                    <input type="number" value="1" class="form-control" style="width: 80px;">
                  </td>
                  <td>$14.99</td>
                  <td>
                    <button class="btn btn-danger">Remove</button>
                  </td>
                </tr>
              </tbody>
            </table>
            <div class="total_amount">
              <h4>
                Total: $14.99
              </h4>
            </div>
            <div class="btn-box">
              <a class="btn-1" href="checkout.html">Proceed to Checkout</a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <footer class="footer_section">
    <div class="container">
      <!-- Footer content -->
    </div>
  </footer>

  <!-- Bootstrap Script CDN -->
  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
  <!-- Custom js -->
  <script src="js/custom.js"></script>
</body>

</html>
