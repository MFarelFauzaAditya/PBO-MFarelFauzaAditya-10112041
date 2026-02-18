<html>
    <head>
        <title>
            Program Penghitung Besar Angsuran Hutang
        </title>
    </head>
    <body>
        <h2> Toko Pegadaian Syariah </h2>
        <h3> Input Data Pinjaman </h3>

        <form action="proses_hitung.php" method="post">
            Besar Pinjaman:
            <input type="number" name="jumlah"> <br><br>

            Besar Bunga (%) :
            <input type="number" name="bunga"> <br><br>

             Lama Angsuran (bulan) :
            <input type="number" name="lama"> <br><br>

            Keterlambatan Angsuran (hari) :
            <input type="number" name="keterlambatan"> <br><br>
            
            <input type="submit" value="hitung">
        </form>
    </body>
</html>