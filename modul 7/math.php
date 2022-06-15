<?php error_reporting(0);
    $jumlahData = $_POST["jumlahData"];
    $arr = array();
    for ($i=0; $i < $jumlahData; $i++) { 
        $arr[$i] = $_POST["dataKe$i"];
    }
    
    function prosesMath($arrayData, $prosesData) { 
        if(!is_array($arrayData)){
        return FALSE;
        } else {
            switch($prosesData){ 
            case 'mean':
                $count = count($arrayData);
                $sum = array_sum($arrayData);
                $total = $sum / $count; 
                break;
            case 'mode':
                $v = array_count_values($arrayData); 
                arsort($v);
                foreach($v as $k => $v){
                    $total = $k;
                    break;
                } 
                break;
            case 'data' :
                $total = join(", ", $arrayData);
        }
        return $total;
        }
    }
?>

<html>
    <head>
        <title>Hasil Penghitungan</title>
        <link rel="stylesheet" href="style.css">
    </head>
    <body>
        <div class="home">
            <table>
                <th colspan="3">Hasil Operasi</th>
                <tr>
                    <td align="center" colspan="3">Data Dari Input User</td>
                </tr>
                <tr>
                    <td colspan="3"><textarea size="10" rows="2" style="width:350px;" readonly><?= prosesMath($arr, 'data'); ?></textarea></td>
                </tr>
                <tr>
                    <td>Mean</td>
                    <td>:</td>
                    <td><input type="text" value="<?= prosesMath($arr, 'mean'); ?>" readonly></td>
                </tr>
                <tr>
                    <td>Modus</td>
                    <td>:</td>
                    <td><input type="text" value="<?= prosesMath($arr, 'mode'); ?>" raedonly></td>
                </tr>
                <tr>
                    <td>Max</td>
                    <td>:</td>
                    <td><input type="text" value="<?= max($arr); ?>" readonly></td>
                </tr>
                <tr>
                    <td>Min</td>
                    <td>:</td>
                    <td><input type="text" value="<?= min($arr); ?>" readonly></td>
                </tr>
                <tr>
                    <td colspan="3">
                        <center><a href="index.php"><input type="button" value="Back To Home"></a></center>
                    </td>
                </tr>
            </table>
        </div>
    </body>
</html>