<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Express Checkout</title>

    <!-- Bootstrap -->
    <link href="dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
  <body>
    <div class="text-center">
      <img src="dist/img/header.jpeg" />
    </div>
    <div class="container text-center">
      <h1>ShopingCart</h1>
      <div class="col-md-10">
        <form class="form-horizontal" role="form" action="lib/samples/SetExpressCheckout.php" method="POST">
          <input type="hidden" name="currency_code" value="USD" />
          <input type="hidden" name="invoice" value="<?php echo date("His").rand(1234, 9632); ?>" />
          <div class="form-group">
            <label for="input" class="col-sm-4 control-label">Product ID</label>
            <div class="col-sm-6">
              <input type="text" class="form-control" name="product_id" value="<?php echo rand(1111, 99999); ?>" readonly>
            </div>
          </div>
          <div class="form-group">
            <label for="input" class="col-sm-4 control-label">Product Name</label>
            <div class="col-sm-6">
              <input type="text" class="form-control" name="product_name" value="Shoes">
            </div>
          </div>          
          <div class="form-group">
            <label for="input" class="col-sm-4 control-label">Product Quantity</label>
            <div class="col-sm-6">
              <input type="text" class="form-control" name="product_quantity" value="<?php echo rand(1, 4); ?>">
            </div>
          </div>
          
          <div class="form-group">
            <label for="input" class="col-sm-4 control-label">Product Amount</label>
            <div class="col-sm-6">
              <input type="text" class="form-control" name="product_amount" value="40.00">
            </div>
          </div>
          
          <div class="form-group">
            <label for="input" class="col-sm-4 control-label">Payer First Name</label>
            <div class="col-sm-6">
              <input type="text" class="form-control" name="payer_fname" value="Sam">
            </div>
          </div>

          <div class="form-group">
            <label for="input" class="col-sm-4 control-label">Payer Last Name</label>
            <div class="col-sm-6">
              <input type="text" class="form-control" name="payer_lname" value="Vitvicky">
            </div>
          </div>

          <div class="form-group">
            <label for="input" class="col-sm-4 control-label">Payer Address</label>
            <div class="col-sm-6">
              <input type="text" class="form-control" name="payer_address" value="#951">
            </div>
          </div>

          <div class="form-group">
            <label for="input" class="col-sm-4 control-label">Payer City</label>
            <div class="col-sm-6">
              <input type="text" class="form-control" name="payer_city" value="New York">
            </div>
          </div>
          

          <div class="form-group">
            <label for="input" class="col-sm-4 control-label">Payer State</label>
            <div class="col-sm-6">
              <input type="text" class="form-control" name="payer_state" value="New York">
            </div>
          </div>

          <div class="form-group">
            <label for="input" class="col-sm-4 control-label">Payer Zip</label>
            <div class="col-sm-6">
              <input type="text" class="form-control" name="payer_zip" value="10101">
            </div>
          </div>

          <div class="form-group">
            <label for="input" class="col-sm-4 control-label">Payer Country</label>
            <div class="col-sm-6">
              <input type="text" class="form-control" name="payer_country" value="US">
            </div>
          </div>

          <div class="form-group">
            <label for="input" class="col-sm-4 control-label">Payer Email</label>
            <div class="col-sm-6">
              <input type="text" class="form-control" name="payer_email" value="randhir.9187@yahoo.com">
            </div>
          </div>
                  
          <div class="form-group">
            <div class="col-sm-offset-2 col-sm-8">
              <button type="submit" class="btn btn-success">Add to Cart</button>
            </div>
          </div>
        </form>
      </div>
    </div>

    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="dist/js/bootstrap.min.js"></script>
  </body>
</html>