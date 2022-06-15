<?php error_reporting(0);

// fungsi faktorial
function faktorial($a){
    $result = 1;
    $arr_faktor = [];
    for ($i=1; $i <= $a; $i++) { 
        $result = $result*$i;
        array_push($arr_faktor, $i);
    }
    $detail = array_reverse($arr_faktor);
    $detail = join(" x ", $detail);
    
    $total = "$a! = $detail = $result";
    return $total;
}

if (isset($_POST['submitFaktor'])) {
    $a = $_POST['angkaFaktor'];
    $hasilFaktor = faktorial($a);

} elseif ($_POST['resetFaktor']) {  
    $angkaFaktor = "";
    $hasilFaktor = "";
}

?>

<html>
    <head>
        <title>Penghitungan Faktorial</title>
    </head>
    <body>
        <div class="home-faktor">
            <form action="" method="post">
                <table>
                    <th colspan="3">Operasi Faktorial</th>
                    <tr><td colspan="3"><hr></td></tr>
                    <tr>
                        <td>Masukkan Angka</td>
                        <td>:</td>
                        <td><input type="number" min="3" placeholder="Angka Minimal Adalah 3" name="angkaFaktor" value="<?= $a; ?>" required></td>
                    </tr>
                    <tr>
                        <td colspan="2"></td>
                        <td>
                            <button type="submit" name="submitFaktor">Hitung</button>
                            <button type="submit" name="resetFaktor">Kosongkan</button>
                        </td>
                    </tr>
                    <tr>
                        <td>Hasil</td>
                        <td>:</td>
                        <td>
                            <textarea name="hasilFaktor" id="hasilFaktor" cols="25" rows="2" readonly><?= $hasilFaktor; ?></textarea>
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
        .home-faktor{
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