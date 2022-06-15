<?php error_reporting(0);

function convert($temprature, $from, $to){
    if ($from == 'C' and $to == 'F'){
        return($temprature * 9/5) + 32;
    } elseif ($from == 'F' and $to == 'C') {
        return ($temprature - 32) * 5/9;
    } elseif ($from == 'C' and $to == 'K') {
        return ($temprature + 273);
    } elseif ($from == 'K' and $to == 'C') {
        return ($temprature - 273);
    } elseif ($from == 'C' and $to == 'R') {
        return ($temprature * 4/5);
    } elseif ($from == 'R' and $to == 'C') {
        return ($temprature * 5/4);
    } elseif ($from == 'R' and $to == 'F') {
        return ($temprature * 9/4) + 32;
    } elseif ($from == 'F' and $to == 'R') {
        return ($temprature - 32) * 4/9;
    } elseif ($from == 'R' and $to == 'K') {
        return ($temprature * 5/4) + 273;
    } elseif ($from == 'K' and $to == 'R') {
        return ($temprature - 273) * 4/5;
    } elseif ($from == 'K' and $to == 'F') {
        return ($temprature - 273) *9/5 + 32;
    } elseif ($from == 'F' and $to == 'K') {
        return ($temprature - 32) *5/9 + 273;
    } elseif ($from == $to) {
        return $temprature;
    }
}

if (isset($_POST['submitSuhu'])) {
    $temprature = $_POST['temprature'];
    $from = $_POST['from'];
    $to = $_POST['to'];

    $hasilSuhu = convert($temprature, $from, $to)."°".$to;
}



?>


<html>
    <head>
        <title>Konversi Suhu</title>
    </head>
    <body>
        <div class="home-suhu">
        <form action="" method="post">
            <table>
                <th colspan="3">Konversi Suhu</th>
                <tr><td colspan="3"><hr></td></tr>
                <tr>
                    <td>Suhu Awal</td>
                    <td>:</td>
                    <td>
                        <input style="width: 55px;" type="number" placeholder="0°" name="temprature" value="<?= $temprature; ?>" required>
                        <select name="from" id="">
                            <option disabled selected hidden>Suhu Awal</option>
                            <option value="C"<?php if($from == "C"){echo("selected");} ?>>Celcius</option>
                            <option value="R"<?php if($from == "R"){echo("selected");} ?>>Reamur</option>
                            <option value="F"<?php if($from == "F"){echo("selected");} ?>>Fahrenheit</option>
                            <option value="K"<?php if($from == "K"){echo("selected");} ?>>Kelvin</option>
                        </select>
                    </td>
                </tr>
                <tr>
                    <td>Konversi Suhu</td>
                    <td>Ke</td>
                    <td>
                        <select name="to" id="">
                        <option disabled selected hidden>Pilih Suhu</option>
                        <option value="C"<?php if($to == "C"){echo("selected");} ?>>Celcius</option>
                        <option value="R"<?php if($to == "R"){echo("selected");} ?>>Reamur</option>
                        <option value="F"<?php if($to == "F"){echo("selected");} ?>>Fahrenheit</option>
                        <option value="K"<?php if($to == "K"){echo("selected");} ?>>Kelvin</option>
                    </select>
                    <button type="submit" name="submitSuhu">Konversi</button>
                    </td>
                </tr>
                <tr><td colspan="3"></td></tr>
                <tr><td colspan="3"><hr></td></tr>
                <tr><th style="font-size:20px; font-family: 'Poppins', sans-serif;" colspan="3">Hasil Konversi</th></tr>
                <tr><td colspan="3"><textarea name="" id="" cols="45" rows="1" readonly><?= $hasilSuhu; ?></textarea></td></tr>
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
        .home-suhu{
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
        td select{
            text-align:center;
        }
        input, select, textarea{
            font-family: 'Roboto Mono', monospace;
            font-weight:bolder;
            padding:5px;
            border-radius:5px;
        }
        textarea{
            text-align:center;
        }
        button{
            padding-top:8px;
            padding-bottom:8px;
            border-radius:10px;
            cursor: pointer;
            font-family: 'Poppins', sans-serif;
            font-weight:bolder;
        }
    </style>
</html>