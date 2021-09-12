<?php 
session_start();
?>
<!doctype html>
<html lang="en">

<head> 
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css"
        integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    <link rel="stylesheet" href="./css/index.css" type="text/css">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <title>ice cream shop</title>
</head>

<body>
    <div id="home" style="position: relative;" class="container surface p-3 mb-5 rounded">
        <div class="icons" data-toggle="modal" data-target="#info">
            <img src="img/info.png" alt="add-to-cart">
            <h3 class="icons-title">Info</h3>   

        </div>
        <nav class="row navbar navbar-expand-md navbar-light">
            <div class=" col-lg-6 d-flex justify-content-between">
                <a class="logo" href="#home">ICE CREAM</a>
                <button class="navbar-toggler ml-auto" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
                    <span class="navbar-toggler-icon"></span>
                </button>
            </div>

            <div class="collapse navbar-collapse " id="collapsibleNavbar">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item myitem">
                        <a class="nav-link font-weight-bold" href="#shop">Shop </a>
                    </li>
                    <li class="nav-item myitem">
                        <a class="nav-link" href="#" data-toggle="modal" data-target="#cart">My cart <span class="badge badge-success">0</span></a>
                    </li>
                    <li class="nav-item myitem">
                        <a class="nav-link" href="#contact">Contact Us</a>
                    </li>
                    <li class="nav-item myitem">
                        <a class="nav-link" href="loginpage-Copy.php">logout</a>
                    </li>
                  </ul>
            </div>
        </nav>

        <div class="container row starter col-xs-12">
            <div class="header col-lg-8 col-xm-12">
                <h3 class="header-title">HAND-MADE ICE CREAM !</h3>
                <p class="descreption">Lorem ipsum dolor sit, amet consectetur adipisicing elit.<br> Dolorum architecto commodi ipsum quas deleniti ea corrupti a dignissimos?<br> Soluta, repudiandae.</p>
                <div class="buttons">
                    <a class="btn btn-danger shop shadow  rounded " href="#shop">Shop <span class="badge badge-light"></span></a>
                    <a class="btn btn-primary text-white" href="#contact">Contact Us <span class="badge badge-light"></span></a>
                </div>
            </div>
        </div>

    </div>

    <div id="login" style="position: relative;" class="container surface p-3 mb-5 rounded">
        <img src="img/wave.png" id="wave" class="pc"alt="wave">


        <div class="container-fluid">
           

            <row class="row">
                <div class="col-md pc">
                    <img src="img/access.svg" id="access">
                </div>
                <div class="col-md">
                    <br><br><br><br><br><br><br><br>
                    <form action="index.html" class="text-center">
                        <img src="img/avatar.svg"style="width: 20%;height: 20%;" alt="" >
                        <br><br>
                        <h2 style="font-weight: 625;padding-bottom: 15px;"> Welcome!!!
                        <?php
                        if ($_SESSION['ok']> 0 )
                            {
                                echo $_SESSION['usid'];
                                
                            }
                        else{
                            echo "no one is logged in";
                        }

                        ?>
</h2>   

                    </form>
                </div>
            </row>
            
        </div>


    </div>

    <div id="shop" style="position: relative;" class="container surface p-3 mb-5 rounded">
        <div class="icons" data-toggle="modal" data-target="#cart">
            <img src="img/cart.png" alt="cart">
            <h3 class="icons-title">Cart</h3>   

        </div>

        <div class=" col-lg-6 d-flex p-2 justify-content-between">
            <a class="logo " href="#shop">SHOP</a>
        </div>
        <div id="shop-container" class="d-flex justify-content-around flex-wrap">
            <div class="card" style="width: 500px;">
                <div class="card-body">
                    <img class="card-img-top float-right rounded" src="img/chocolate.jpeg" style="height: 150px; width: 210px;" alt="">
                  <h4 class="card-title"> Chocolate</h4>
                  <p class="card-text">chocolate ice cream is generally made by blending cocoa powder along with the eggs, cream, vanilla and sugar used to make vanilla ice cream </p>
                  <span class="badge badge-pill badge-success p-2">85 &#8377</span>
                  <a href="#" class="card-link btn btn-outline-dark">Add to cart</a>
                </div>
            </div>
            <div class="card" style="width: 500px;">
                <div class="card-body">
                    <img class="card-img-top float-right rounded" src="img/BlackCurrant.jpeg" style="height: 150px; width: 210px;" alt="">
                  <h4 class="card-title">Black Currant</h4>
                  <p class="card-text">This blackcurrant ice cream is a flavourful, creamy custard-based ice cream with the rich and tangy taste of tart blackcurrants.</p>
                  <span class="badge badge-pill badge-success p-2">85 &#8377</span>
                  <a href="#" class="card-link btn btn-outline-dark">Add to cart</a>
                </div>
            </div>
            <div class="card" style="width: 500px;">
                <div class="card-body">
                    <img class="card-img-top float-right rounded" src="img/vanilla.jpg" style="height: 150px; width: 210px;" alt="">
                  <h4 class="card-title">Vanilla</h4>
                  <p class="card-text">Vanilla ice cream is made by blending in vanilla essence in along with the eggs, cream, milk and sugar. </p>
                  <span class="badge badge-pill badge-success p-2">85 &#8377</span>
                  <a href="#" class="card-link btn btn-outline-dark">Add to cart</a>
                </div>
            </div>
            <div class="card" style="width: 500px;">
                <div class="card-body">
                    <img class="card-img-top float-right rounded" src="img/Mango.jpeg" style="height: 150px; width: 210px;" alt="">
                  <h4 class="card-title">Mango</h4>
                  <p class="card-text">Ice-cream flavoured with the King of Fruits! Mangoes impart a luscious creamy texture and rich flavour to this delicious frozen dessert. </p>
                  <span class="badge badge-pill badge-success p-2">85 &#8377</span>
                  <a href="#" type="submit" class="card-link btn btn-outline-dark">Add to cart</a>
                </div>
            </div>            
            <div class="card" style="width: 500px;">
                <div class="card-body">
                    <img class="card-img-top float-right rounded" src="img/pista.jpeg" style="height: 150px; width: 210px;" alt="">
                  <h4 class="card-title">Pista</h4>
                  <p class="card-text">Its sweet and creamy like ice cream should be, with subtle hints of savory nuttiness from the pistachios. </p>
                  <span class="badge badge-pill badge-success p-2">90 &#8377</span>
                  <a href="#" class="card-link btn btn-outline-dark">Add to cart</a>
                </div>
            </div>
            <div class="card" style="width: 500px;">
                <div class="card-body">
                    <img class="card-img-top float-right rounded" src="img/kesar.jpg" style="height: 150px; width: 210px;" alt="">
                  <h4 class="card-title">Kesar</h4>
                  <p class="card-text">The delicious of Kesar and real ice cream is simply impossible to resist. </p>
                  <span class="badge badge-pill badge-success p-2">90 &#8377</span>
                  <a href="#cart" class="card-link btn btn-outline-dark"> Add to cart</a>
                </div>
            </div>
        </div>
       
          

    </div>


    <!-- Cart -->
    <div class="modal fade" id="cart">
        <div class="modal-dialog modal-lg modal-dialog-centered">
        <div class="modal-content">
    
            <!-- Modal Header -->
            <div class="modal-header">
            
            <h3 class="modal-title">MY CART</h3>
            <button type="button" class="close" data-dismiss="modal">&times; </button>
            </div>
    
            <!-- Modal body -->
            <div class="modal-body">
                <div id="items-container">
                <form class="text-center" method="POST" action="order.php" >
                    <table>
                        <thead>
                            <tr>
                                <th class="items-title">ITEM</th>
                                <th class="items-price">PRICE</th>
                                <th class="items-quantity">QUANTITY</th>
                                <th class="items-total">TOTAL</th>
                            </tr>
                        </thead>
                        <tbody class="items">
                            <tr>
                                <td class="items-title"></td>
                                <td class="items-price"></td>
                                <td class="items-quantity"></td>
                                <td class="items-total"></td>
                            </tr>
                            <tr>
                                <td class="items-title"></td>
                                <td class="items-price"></td>
                                <td class="items-quantity"></td>
                                <td class="items-total"></td>
                            </tr>
                        </tbody> 
                        <tfoot>
                            <tr>
                                <th colspan="2"></th>
                                <th class="items-quantity">Total</th>
                                <th class="items-total">0RS</th>
                            </tr>
                        </tfoot>
                    </table>
                </div>
            </div>
    
            <!-- Modal footer -->
            <div class="modal-footer">
            
            <button type class="btn btn-warning">order </button>

            <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
</form>
   
        </div>

        </div>
        </div>
        </div>
        
        </div>
        </div>
    </div>
    <div id="contact" style="position: relative;" class="container surface p-3 mb-5 rounded">
        <a class="logo" href="#contact">Contact us</a>
            <p>For inquiries regarding product availability, ordering information, status of shipment, billing,
            spoiled merchandise, or returns, please contact Penguin Random House Customer Service at 1-800-733-3000.</p>
    </div>

    <!-- Info -->
    <div class="modal fade" id="info">
            <div class="modal-dialog">
            <div class="modal-content">
        
                <!-- Modal Header -->
                <div class="modal-header">
                <h3 class="modal-title">INFO</h3>
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                </div>
        
                <!-- Modal body -->
                <div class="modal-body">
                    <p>
                        Ice cream has incredible benefits as, and you shouldn’t feel guilty for treating yourself every so often! After all, it’s summer.
                        However, be sure that when you do treat yourself to gelato, frozen yogurt cups, or another dessert, that you do so in moderation.<br> Stay fresh!</p>
                </div>
        
                <!-- Modal footer -->
                <div class="modal-footer">
                <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                </div>
    
            </div>
            </div>
    </div>
    

    <!-- JavaScript -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"
        integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"
        integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous">
    </script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"
        integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous">
    </script>
    <script src="js/script.js"></script>
</body>
</html>
