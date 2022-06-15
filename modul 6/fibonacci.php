<?php error_reporting(0);
function fibonacci($a){
    $n1 = 0;
    $n2 = 1;

    $a = intval($a);

    $n4 = "$n1,$n2";

    for($i=0; $i<$a-2; $i++){
        $n3=$n1+$n2;
        $n4=$n4.",$n3";
        $n1=$n2;
        $n2=$n3;
    }
    return $n4;
}
if(isset($_POST['submitFibo'])){
    $a = $_POST['angkaFibo'];
    $hasilFibo = fibonacci($a);

} elseif (isset($_POST['resetFibo'])) {
    $angkaFibo = " ";
    $hasilFibo = "";
}
?>

<html>
    <head>
        <title>Fibonacci</title>
    </head>
    <body>
        <div class="home-fibo">
        <form action="" method="post">
            <table align="center">
                <th colspan="3">Operasi Fibonacci</th>
                <tr>
                    <td colspan="3"><hr></td>
                </tr>
                <tr>
                    <td>Masukkan Angka</td>
                    <td>:</td>
                    <td><input type="number" placeholder="Angka Minimal Adalah 3" min="3" name="angkaFibo" value="<?= $a; ?>"></td>
                </tr>
                <tr>
                    <td colspan="2"></td>
                    <td>
                        <button type="submit" name="submitFibo">Hasil</button>
                        <button type="reset" name="resetFibo">Kosongkan</button>
                    </td>
                </tr>
                <tr>
                    <td>Hasil</td>
                    <td>:</td>
                    <td>
                        <textarea name="hasilFibo" cols="25" rows="3"><?= $hasilFibo; ?></textarea>
                    </td>
                </tr>
            </table>
        </form>
        <a href="index.php">
            <button>Back to Menu</button>
        </a>
        </div>
    </body>
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Fredoka+One&family=Poppins&family=Roboto+Mono&display=swap');
        body{
            background-image: linear-gradient(#90e0ef,#0077b6);
        }
        th {
            font-size: 30px;
            font-family: 'Roboto Mono', monospace;
            letter-spacing: 2px;
        }
        .home-fibo{
            margin: 50px auto;
            margin-top:150px;
            width: max-content;
        }
        table{
            background-color:#598392;
            padding:20px;
            border-radius:10px;
        }
        td{
            padding: 10px;
            font-weight:bolder;
            font-family: 'Poppins', sans-serif;
        }
        input, textarea{
            font-family: 'Roboto Mono', monospace;
            font-weight:bolder;
            width:227px;
            padding:5px;
            border-radius:5px;
        }
        button{
            padding: 20px;
            border-radius:10px;
            cursor: pointer;
            font-family: 'Poppins', sans-serif;
            font-weight:bolder;
        }
    </style>
</html>