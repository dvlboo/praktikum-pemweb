<!-- membuat algoritma php -->
<?php error_reporting(0);
        
// nilai input dari variable
if (isset($_POST['submit'])) {
    $product =$_POST['product'];
    $cost =$_POST['cost'];
    $amount =$_POST['amount'];
    $detail =$_POST['detail'];
    
    // merubah tipe datanya
    $amount = intval($amount);
    
    // algoritma total harga
    $totalPrice = $cost * $amount;
    $bonus = "";
        
    // pemberian diskon pada produk
    switch ($amount) {
        case $amount >= 3 && $amount < 7:
            $discount = 20/100 * $totalPrice;
            $bonus = "tumbler";
            break;
        case $amount >= 7 && $amount < 12:
            $discount = 30/100 * $totalPrice;
            $bonus = "tumbler + t-shrit";
            break;    
        case $amount >= 12:
            $discount = 15/100 * $totalPrice;
            $bonus = "get 1 sling bag + ayang bila beruntung";
            break;
            
        default:
            $discount = 0;
            $bonus = "sorry, kamu ga dapet bonus";
            break;
        }
            
        // aritmatika total pembayaran
        $totalPayment = $totalPrice - $discount;
            
        // method output
    } elseif (isset($_POST['reset'])) {
        $product = "";
        $cost = "";
        $amount = "";
        $totalPrice = "";
        $discount = "";
        $totalPayment = "";
        $bonus = "";
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Web Store of Boo</title>
</head>
<body>
    <div class="home" align="center">
        <!-- membuat form dengan tabel -->
        <h2>WEB STORE OF BOO BAG</h2>
        <table>
            <form action="" method="post">
                <tr>
                    <td>Jenis Tas</td>
                    <td>:</td>
                    <!-- menampilkan macam-macam produk (select option) -->
                    <td>
                        <select name="product"  id="product" onchange="forCost()">
                            <option disabled selected hidden>PILIH JENIS TAS</option>
                            <option value="325000" <?php if($product == 325000){echo("selected");} ?>>BACKPACK Water rePALLENT</option>
                            <option value="55000" <?php if($product == 55000){echo("selected");} ?>>MASSENGER BAG</option>
                            <option value="45000" <?php if($product == 45000){echo("selected");} ?>>SLING BAG</option>
                            <option value="60000" <?php if($product == 60000){echo("selected");} ?>>TOTE BAG</option>
                            <option value="276000" <?php if($product == 276000){echo("selected");} ?>>CLUTCH BAG</option>
                            <option value="129000" <?php if($product == 129000){echo("selected");} ?>>BUCKET BAG</option>
                            <option value="134000" <?php if($product == 134000){echo("selected");} ?>>WRIST BAG</option>
                        </select>
                    </td>
                </tr>

                <!-- harga -->
                <tr>
                    <td>Harga</td>
                    <td>:</td>
                    <td>Rp. <input class="rp" type="text" name="cost" id="cost" value="<?= $cost; ?>" readonly></td>
                    <tr>
                </tr>

                <!-- jumlah order -->
                    <td>Jumlah Produk</td>
                    <td>:</td>
                    <td><input type="number" min="1" name="amount" value="<?= $amount; ?>" required></td>
                </tr>

                <!-- button submit dan reset -->
                <tr>
                    <td colspan="2"></td>
                    <td>
                        <button type="submit" name="submit">Beli</button>
                        <button type="submit" name="reset">Kosongkan</button>
                    </td>
                </tr>
            </form>
            
            <!-- total harga -->
            <tr>
                <td>Harga Total</td>
                <td>:</td>
                <td>Rp. <input class="rp" type="text" name="amount" value="<?= $totalPrice; ?>" readonly></td>
            </tr>

            <!-- diskon -->
            <tr>
                <td>Diskon</td>
                <td>:</td>
                <td>Rp. <input class="rp" type="text" name="discount" value="<?= $discount; ?>" readonly></td>
            </tr>
            
            <!-- total pembayaran -->
            <tr>
                <td>Total Bayar</td>
                <td>:</td>
                <td>Rp. <input class="rp" type="text" name="totalPayment" value="<?= $totalPayment; ?>" readonly></td>
            </tr>
            
            <!-- bonus -->
            <tr>
                <td>Bonus</td>
                <td>:</td>
                <td>
                    <textarea name="bonus" id="bonus" cols="30" rows="2" readonly><?= $bonus; ?></textarea>
                </td>
            </tr>
        </table>
    </div>
    
    <!-- footer -->
    <footer>
        <span>Made With Love By <a href="https://github.com/dvlboo" target="_blank">dvlBoo</a> | &copy; 2022 All rights reserved.</span>
    </footer>

    <!-- script dari js untuk pengambilan nilai -->
    <script type="text/javascript">
        function forCost() {
            var kuh = document.getElementById("product").value;
                document.getElementById("cost").value = kuh;
        
        }
    </script>
</body>
<style>
    @import url('https://fonts.googleapis.com/css2?family=Fredoka+One&family=Poppins&family=Roboto+Mono&display=swap');
    body{
        background-image: linear-gradient(#90e0ef,#0077b6);
    }
    .home{
        margin: 50px auto;
        margin-top:150px;
        width: max-content;
        font-family: 'Poppins', sans-serif;
    }
    h2{
        font-family: 'Fredoka One', cursive;
        letter-spacing: 2px;
    }
    table{
        background-color:#598392;
        padding:20px;
        border-radius:10px;
    }
    td{
        padding: 10px;
        font-weight:bolder;
    }
    td select{
        text-align:center;
    }
    input, select, textarea{
        font-family: 'Roboto Mono', monospace;
        font-weight:bolder;
        width:227px;
        padding:5px;
        border-radius:5px;
    }
    .rp{
        width: 200px;
    }
    button{
        padding: 20px;
        border-radius:10px;
        cursor: pointer;
        font-family: 'Poppins', sans-serif;
        font-weight:bolder;
    }
    footer{
        background: #111;
        padding: 15px 23px;
        color: #fff;
        text-align: center;
        font-family: 'Poppins', sans-serif;
    }
    footer span a{
        color: #fb8b24;
        text-decoration: none;
    }
    footer span a:hover{
        text-decoration: underline;
    }
</style>
</html>
