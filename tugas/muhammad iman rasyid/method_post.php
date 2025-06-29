<!DOCTYPE html>
<html>
<head>
    <title>Penanganan Form</title>
</head>
<body>
    <form action="" method="POST">
        Nama :<input type="text" name="nama" /><br />
        Umur :<input type="text" name="umur" /><br />
        <input type="submit" name="ok" value="OK" />
    </form>

    <?php
    if (isset($_POST["ok"])) 
    {
        echo $_POST["nama"]. "<br />";
        echo $_POST["umur"];
    }
    ?>
</body>
</html>
