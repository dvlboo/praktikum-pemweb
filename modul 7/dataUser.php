<html>
    <head>
    <link rel="stylesheet" href="style.css">
    </head>
    <body>
        <div class="home">
        <form action="math.php" method="post">
            <table>
                <th colspan="2">Math Boo</th>
                <?php
                if (isset($_POST['submitData'])) {
                    $jumlahData = $_POST['jumlahData'];
                    for ($i=0; $i < $jumlahData; $i++) {?> 
                        <tr>
                            <td>Data Ke <?php echo $i + 1; ?></td>
                            <td><input type="text" name="dataKe<?php echo $i; ?>"></td>
                        </tr>
                    <?php
                    } 
                    ?>
                    <tr>
                        <td colspan="2"><center><button type="submit" name="submitDataUser">Hasil</button></center></td>
                    </tr>
                <?php    
                }
                ?>
            </table>
            <input type="hidden" name="jumlahData" value="<?php echo $jumlahData; ?>">
        </form>
        </div>
    </body>
</html>