    <!DOCTYPE html>
    <html lang="en">
    <head>
     <meta charset="UTF-8">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <title>variable</title>
    </head>
    <body>
    <style>
        .centered {
           position: absolute;
           top: 50%;
           left: 50%;
           transform: translate(-50%, -50%);
           text-align: center;
}
    </style>
    
<div class="centered">
     
    <?php 
         $nama = "upin";
         $usia = 5;
         $hobi = array("membaca", "mewarnaii");

         echo "$nama berusia $usia tahun <br/>";
         // upin berusia 5 tahun

         echo "hobinya : $hobi[0], $hobi[1]";
         // hobinya : membaca, mewarnai
    ?>
</body>
    </html>