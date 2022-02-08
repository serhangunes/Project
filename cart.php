<!DOCTYPE html>
<html>
    <head>
        <title>
            NHL Webshop
        </title>
        <link rel="stylesheet" href="style.css">
        <?php include_once("components/header.html"); ?>
    </head>
    <body>
        <h1 class="content mt-6 mb-0.5">Your cart</h1>
        <div class="row mb-1 backgray">
                <div class="imgcart flex ml-1.5">
                    <img src="images/iphone13.png" alt="iPhone13">
                    <h2>iPhone 13</h2>
                    <p class="amount flex mb-2 ml-1"><b>Amount</b></p>
                    <input class="amount flex ml-1 number mb-2" type="text" name="amount">
                    <label class="price mb-3"><b>&euro; &nbsp; <?php echo 32 . "," . 98; ?></b></label>
                </div>
            </div>
            <div class="row mb-1 backgray">
                <div class="imgcart flex ml-1.5">
                    <img src="images/iphone13.png" alt="iPhone13">
                    <h2>iPhone 13</h2>
                    <p class="amount flex mb-2 ml-1"><b>Amount</b></p>
                    <input class="amount flex ml-1 number mb-2" type="text" name="amount">
                    <label class="price mb-3"><b>&euro; &nbsp; <?php echo 32 . "," . 98; ?></b></label>
                </div>
            </div>
            <div class="row mb-1 backgray">
                <div class="imgcart flex ml-1.5">
                    <img src="images/iphone13.png" alt="iPhone13">
                    <h2>iPhone 13</h2>
                    <p class="amount flex mb-2 ml-1"><b>Amount</b></p>
                    <input class="amount flex ml-1 number mb-2" type="text" name="amount">
                    <label class="price mb-3"><b>&euro; &nbsp; <?php echo 32 . "," . 98; ?></b></label>
                </div>
            </div>
            <div class="row mb-1">
                <div class="right">
                    <p class="total ml-1 right mb-3"><b>Total &nbsp; &euro; &nbsp; <?php echo 230 . "," . 24; ?></b></p>
                    <form method="post">
                        <input class="button white noborder backgreen ml-1 right" type="submit" name="checkout" value="Checkout">
                        <input class="button white noborder backblue right" type="submit" name="update" value="Update">
                    </form>
                </div>
            </div>    
    </body>
</html>
<!-- hoi --->

    


