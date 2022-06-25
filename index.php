<!DOCTYPE html>
<html >
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=no">
    <title>Shaunta's Boutique</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/main.css">
   
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
</head>
<body>
    <!-- Top Nav Bar -->
    <nav class="navbar navbar-default navbar-fixed-top">
        <div class="container">
            <a href="index.php" class="navbar-brand">Shaunta's Boutique</a>
            <ul class="nav navbar-nav">
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">Men<span class="caret"></span></a>
                    <ul class="dropdown-menu" role="menu">
                        <li><a href="#">Shirts</a></li>
                        <li><a href="#">Pants</a></li>
                        <li><a href="#">Shoes</a></li>
                        <li><a href="#">Accessories</a></li>
                    </ul>
                
                </li>
            </ul>
        </div>
    </nav>
    <!-- Header -->
    <div id="headerWrapper">
        <div id="back-flower"></div>
        <div id="logotext"></div>
        <div id="fore-flower"></div>
    </div>
    
   <div class="container-fluid">
    <!-- Left side bar -->
        <div class="col-md-2">Left side bar</div>
    <!-- Main content -->
        <div class="col-md-8">
            <div class="row">
                <h2 class="text-center">Feature Products</h2>
                <div class="col-md-3">
                    <h4>Levis Jeans</h4>
                    <img src="images/products/men4.png" alt="Levis Jeans" />
                    <p class="list-price text-danger">List Price <s>$54.99</s></p>
                    <p class="price">Our price: $19.99</p>
                    <button type="button" class="btn btn-sm btn-success" data-toggle="modal" data-target="#details-1">
                        Details
                    </button>
                </div>

                <div class="col-md-3">
                    <h4>Levis Jeans</h4>
                    <img src="images/products/men4.png" alt="Levis Jeans" />
                    <p class="list-price text-danger">List Price <s>$54.99</s></p>
                    <p class="price">Our price: $34.99</p>
                    <button type="button" class="btn btn-sm btn-success" data-toggle="modal" data-target="#details-1">
                        Details
                    </button>
                </div>

                <div class="col-md-3">
                    <h4>Hollister Shirt</h4>
                    <img src="images/products/men1.png" alt="Hollister Shirt" />
                    <p class="list-price text-danger">List Price <s>$25.99</s></p>
                    <p class="price">Our price: $19.99</p>
                    <button type="button" class="btn btn-sm btn-success" data-toggle="modal" data-target="#details-1">
                        Details
                    </button>
                </div>

                <div class="col-md-3">
                    <h4>Fancy Shoes</h4>
                    <img src="images/products/women6.png" alt="Fancy Shoes" />
                    <p class="list-price text-danger">List Price <s>$69.99</s></p>
                    <p class="price">Our price: $49.99</p>
                    <button type="button" class="btn btn-sm btn-success" data-toggle="modal" data-target="#details-1">
                        Details
                    </button>
                </div>

                <div class="col-md-3">
                    <h4>Boys Hoodie</h4>
                    <img src="images/products/men5.png" alt="Boys Hoodie" />
                    <p class="list-price text-danger">List Price <s>$24.99</s></p>
                    <p class="price">Our price: $10.99</p>
                    <button type="button" class="btn btn-sm btn-success" data-toggle="modal" data-target="#details-1">
                        Details
                    </button>
                </div>

                <div class="col-md-3">
                    <h4>Girls Dress</h4>
                    <img src="images/products/girls3.png" alt="Girls Dress" />
                    <p class="list-price text-danger">List Price <s>$34.99</s></p>
                    <p class="price">Our price: $22.99</p>
                    <button type="button" class="btn btn-sm btn-success" data-toggle="modal" data-target="#details-1">
                        Details
                    </button>
                </div>

                <div class="col-md-3">
                    <h4>Levis Jeans</h4>
                    <img src="images/products/men4.png" alt="Levis Jeans" />
                    <p class="list-price text-danger">List Price <s>$54.99</s></p>
                    <p class="price">Our price: $19.99</p>
                    <button type="button" class="btn btn-sm btn-success" data-toggle="modal" data-target="#details-1">
                        Details
                    </button>
                </div>

                <div class="col-md-3">
                    <h4>Levis Jeans</h4>
                    <img src="images/products/men4.png" alt="Levis Jeans" />
                    <p class="list-price text-danger">List Price <s>$54.99</s></p>
                    <p class="price">Our price: $19.99</p>
                    <button type="button" class="btn btn-sm btn-success" data-toggle="modal" data-target="#details-1">
                        Details
                    </button>
                </div>
            </div>
        </div>
    <!-- Right side bar -->
        <div class="col-md-2">Right side bar</div>
   </div>
<script>
    jQuery(window).scroll(function(){
        var vscroll = jQuery(this).scrollTop();
        jQuery('#logotext').css({
            "transform" : "translate(0px, "+vscroll/2+"px)"
        });
        var vscroll = jQuery(this).scrollTop();
        jQuery('#back-flower').css({
            "transform" : "translate("+vscroll/5+"px, -"+vscroll/12+"px)"
        });
        var vscroll = jQuery(this).scrollTop();
        jQuery('#fore-flower').css({
            "transform" : "translate(0px, -"+vscroll/2+"px)"
        });
    });
</script>
</body>
</html>