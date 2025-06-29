<!DOCTYPE html>
<html>
<head>
    <title>Membuat Tabel</title>
    <style>
        table, td {
            border: 1px solid black;
            border-collapse: collapse;
            padding: 8px;
            text-align: center;
        }
        
    </style>
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
    <h2>Membuat Tabel</h2>
    <form method="POST" action="">
        <table>
            <tr>
                <td>Jumlah Baris</td>
                <td>: <input type="number" name="baris" required></td>
            </tr>
            <tr>
                <td>Jumlah Kolom</td>
                <td>: <input type="number" name="kolom" required></td>
            </tr>
            <tr>
                <td colspan="2" colspan="2" style="text-align: center;">
                    <input type="submit" name="submit" value="Create">
                </td>
            </tr>
        </table>
    </form>

    <?php
    if (isset($_POST['submit'])) {
        $baris = $_POST['baris'];
        $kolom = $_POST['kolom'];

        echo "<h3>Hasil Outputnya:</h3>";
        echo "<fieldset><legend><b>Tabel hasil :</b></legend>";
        echo "<table>";

        for ($i = 1; $i <= $baris; $i++) {
            echo "<tr>";
            for ($j = 1; $j <= $kolom; $j++) {
                echo "<td>baris $i , kolom $j</td>";
            }
            echo "</tr>";
        }

        echo "</table>";
        echo "</fieldset>";
    }
    ?>
</body>
</html>
