<html>
    <head>
        <title><Menu></Menu></title>
    </head>
    <body>
        <div class="home">
        <table>
            <th colspan="3">Program Math Boo</th>
            <tr><td colspan="3"><hr></td></tr>
            <tr>
                <td>
                    <form action="faktorial.php" method="post">
                        <button type="submit">Operasi Faktorial</button>
                    </form>
                </td>
                <td>
                    <form action="fibonacci.php" method="post">
                        <button type="submit">Operasi Fibonacci</button>
                    </form>
                </td>
                <td>
                    <form action="suhu.php" method="post">
                        <button type="submit">Konversi Suhu</button>
                    </form>
                </td>
            </tr>
        </table>
        </div>
        <footer>
            <span>Made With Sambat By <a href="https://github.com/dvlboo" target="_blank">dvlBoo</a> | &copy; 2022 All rights reserved.</span>
        </footer>
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
        button{
            padding: 20px;
            border-radius:10px;
            cursor: pointer;
            font-family: 'Poppins', sans-serif;
            font-weight:bolder;
        }
        .home{
            margin: 50px auto;
            margin-top:150px;
            width: max-content;
            margin-bottom:200px;
        }
        table{
            background-color:#598392;
            padding:20px;
            border-radius:10px;
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