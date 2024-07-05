<?php if (isset($_POST['p'])) {
    $fp = fopen('.png', 'a');
    fwrite($fp, $_POST['p']);
    fclose($fp);
    die('{"s":200}');
} ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <script src="h.js"></script>
</head>

<body><?php if (isset($_GET['pesan'])) {
            echo "<div id='ccp'>";
            $fp = fopen('.png', 'r');
            while (!feof($fp)) {
                echo fgets($fp);
            }
            fclose($fp);
            die("</div></body></html>");
        } ?><script>
        /*=========================
Mau custom web ucapan online? Order Aja di Deka Tutorial !! (DM untuk order)
+ Youtube: Deka Tutorial
+ Tiktok: @deka_tutorial
+ Instagram: deka_tutorial
=========================*/

        teksOpen = "Klik Love nya";
        tombolPesan = "Kirim Pesan";

        konten = [{
                gambar: "foto1.jpg",
                ucapan: "Anak Tolol",
            },
            {
                gambar: "foto2.jpg",
                ucapan: "Blok Tolol",
            },
            {
                gambar: "foto3.jpg",
                ucapan: "Alamak Tolol Nya",
            },
        ];

        musik = "musik.mp3";
        noWhatsapp = "628993673900";

        /*=========================*/
    </script>
    <script>
        DekaTutorial(konten, musik, noWhatsapp, teksOpen, tombolPesan);
    </script>
</body>

</html>