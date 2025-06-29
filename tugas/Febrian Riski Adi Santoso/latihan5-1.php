<!DOCTYPE html>
<html>
<head>
    <title>Form Biodata</title>
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
            
    <h2>Form Biodata</h2>
    <form method="POST" action="">
        <table>
            <tr>
                <td>Nama</td>
                <td>: <input type="text" name="nama"></td>
            </tr>
            <tr>
                <td>Umur</td>
                <td>: <input type="number" name="umur"></td>
            </tr>
            <tr>
                <td>Gender</td>
                <td>:
                    <input type="radio" name="gender" value="Pria"> Pria
                    <input type="radio" name="gender" value="Wanita"> Wanita
                </td>
            </tr>
            <tr>
                <td>Hobi</td>
                <td>:
                    <input type="checkbox" name="hobi[]" value="Travelling"> Travelling
                    <input type="checkbox" name="hobi[]" value="Shopping"> Shopping
                </td>
            </tr>
            <tr>
                <td>Pendidikan</td>
                <td>:
                    <select name="pendidikan">
                        <option value="SD">SD</option>
                        <option value="SMP">SMP</option>
                        <option value="SMA">SMA</option>
                        <option value="S1">S1</option>
                    </select>
                </td>
            </tr>
            <tr>
                <td>Alamat</td>
                <td>: <textarea name="alamat" rows="4" cols="30"></textarea></td>
            </tr>
            <tr>
                <td></td>
                <td><input type="submit" name="submit" value="OK"></td>
            </tr>
        </table>
    </form>

    <?php
    if (isset($_POST['submit'])) {
        $nama = $_POST['nama'];
        $umur = $_POST['umur'];
        $gender = $_POST['gender'];
        $hobi = isset($_POST['hobi']) ? implode(", ", $_POST['hobi']) : '-';
        $pendidikan = $_POST['pendidikan'];
        $alamat = $_POST['alamat'];

       
        echo "<fieldset>";
        echo "<legend><b>Biodata</b></legend>";
        echo "Nama       : $nama <br>";
        echo "Umur       : $umur <br>";
        echo "Gender     : $gender <br>";
        echo "Hobi       : $hobi <br>";
        echo "Pendidikan : $pendidikan <br>";
        echo "Alamat     : $alamat";
        echo "</fieldset>";
    }
    ?>
</body>
</html>
