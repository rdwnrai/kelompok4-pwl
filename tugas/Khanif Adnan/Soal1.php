<div class="content">
    <h2>Soal 1 </h2>

    <form method="POST">
        <table border="0" cellpadding="5">
            <tr>
                <td><label for="nama">Nama</label></td>
                <td>:</td>
                <td><input type="text" id="nama" name="nama" required></td>
            </tr>
            <tr>
                <td><label for="umur">Umur</label></td>
                <td>:</td>
                <td><input type="number" id="umur" name="umur" required></td>
            </tr>
            <tr>
                <td>Gender</td>
                <td>:</td>
                <td>
                    <input type="radio" id="pria" name="gender" value="Pria" required>
                    <label for="pria">Pria</label>
                    <input type="radio" id="wanita" name="gender" value="Wanita" required>
                    <label for="wanita">Wanita</label>
                </td>
            </tr>
            <tr>
                <td>Hobi</td>
                <td>:</td>
                <td>
                    <input type="checkbox" id="traveling" name="hobi[]" value="Traveling">
                    <label for="traveling">Traveling</label>
                    <input type="checkbox" id="shopping" name="hobi[]" value="Shopping">
                    <label for="shopping">Shopping</label>
                </td>
            </tr>
            <tr>
                <td><label for="pendidikan">Pendidikan</label></td>
                <td>:</td>
                <td>
                    <select id="pendidikan" name="pendidikan" required>
                        <option value="SD">SD</option>
                        <option value="SMP">SMP</option>
                        <option value="SMA">SMA</option>
                        <option value="S1">S1</option>
                    </select>
                </td>
            </tr>
            <tr>
                <td><label for="alamat">Alamat</label></td>
                <td>:</td>
                <td><textarea id="alamat" name="alamat" required></textarea></td>
            </tr>
            <tr>
                <td colspan="3" align="center">
                    <input type="submit" name="submit_biodata" value="OK">
                </td>
            </tr>
        </table>
    </form>

    <?php
    if (isset($_POST['submit_biodata'])) {
        echo "<h3>Biodata</h3>";
        echo "<table border='0' cellpadding='5'>";
        echo "<tr><td><strong>Nama</strong></td><td>:</td><td>" . htmlspecialchars($_POST['nama']) . "</td></tr>";
        echo "<tr><td><strong>Umur</strong></td><td>:</td><td>" . htmlspecialchars($_POST['umur']) . "</td></tr>";
        echo "<tr><td><strong>Gender</strong></td><td>:</td><td>" . htmlspecialchars($_POST['gender']) . "</td></tr>";
        echo "<tr><td><strong>Hobi</strong></td><td>:</td><td>" . implode(", ", array_map('htmlspecialchars', $_POST['hobi'])) . "</td></tr>";
        echo "<tr><td><strong>Pendidikan</strong></td><td>:</td><td>" . htmlspecialchars($_POST['pendidikan']) . "</td></tr>";
        echo "<tr><td><strong>Alamat</strong></td><td>:</td><td>" . nl2br(htmlspecialchars($_POST['alamat'])) . "</td></tr>";
        echo "</table>";
    }
    ?>
</div>