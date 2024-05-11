<?php
include 'config/mysql.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $pealkiri = $_POST['pealkiri'];
    $tekst = $_POST['tekst'];
    $autor = $_POST['autor'];
    $pildi_aadress = $_POST['pildi_aadress'];
    $aeg = date('Y-m-d H:i:s');  

    
    $stmt = $conn->prepare("INSERT INTO veeb (pealkiri, tekst, autor, aeg, pildi_aadress) VALUES (?, ?, ?, ?, ?)");
    $stmt->bindParam(1, $pealkiri);
    $stmt->bindParam(2, $tekst);
    $stmt->bindParam(3, $autor);
    $stmt->bindParam(4, $aeg);
    $stmt->bindParam(5, $pildi_aadress);
    $stmt->execute();

    header("Location: posts.php");
    exit;
}
?>

<!DOCTYPE html>
<html lang="et">
<head>
    <meta charset="UTF-8">
    <title>Uus</title>
    <link rel="stylesheet" href="/css/styles.css">
</head>
<body>
<div class="container">
    <h2>Lisa uus postitus</h2>
    <form action="" method="post">
        <div class="form-group">
            <label for="title">Pealkiri:</label>
            <input type="text" class="form-control" name="pealkiri" id="title" required>
        </div>
        <div class="form-group">
            <label for="author">Autor:</label>
            <input type="text" class="form-control" name="autor" id="author" required>
        </div>
        <div class="form-group">
            <label for="content">Tekst:</label>
            <textarea class="form-control" name="tekst" id="content" required></textarea>
        </div>
        <div class="form-group">
            <label for="image">Pildi aadress:</label>
            <input type="text" class="form-control" name="pildi_aadress" id="image">
        </div>
        <button type="submit" class="btn btn-primary">Salvesta</button>
    </form>
</div>
</body>
</html>
