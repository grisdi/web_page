<?php
include 'config/mysql.php'; 
include 'navbar.php';

if (isset($_GET['id']) && is_numeric($_GET['id'])) {
    $id = $_GET['id'];

 
    $stmt = $conn->prepare("SELECT id, pealkiri, tekst, autor, aeg, pildi_aadress FROM veeb WHERE id = ?");
    $stmt->bindParam(1, $id, PDO::PARAM_INT);
    $stmt->execute();
    $post = $stmt->fetch(PDO::FETCH_ASSOC);

    if (!$post) {
        echo "<p>Postitust ei leitud.</p>";
        exit;
    }

  
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        $pealkiri = $_POST['pealkiri'];
        $tekst = $_POST['tekst'];
        $autor = $_POST['autor'];
        $pildi_aadress = $_POST['pildi_aadress'];

        $updateStmt = $conn->prepare("UPDATE veeb SET pealkiri = ?, tekst = ?, autor = ?, pildi_aadress = ? WHERE id = ?");
        $updateStmt->bindParam(1, $pealkiri);
        $updateStmt->bindParam(2, $tekst);
        $updateStmt->bindParam(3, $autor);
        $updateStmt->bindParam(4, $pildi_aadress);
        $updateStmt->bindParam(5, $id, PDO::PARAM_INT);
        $updateStmt->execute();

        echo "<p>Postitus uuendatud!</p>";
     
    }
} else {
    echo "<p>Vigane päring: puudub või vale ID.</p>";
    exit;
}

$conn = null;
?>

<!DOCTYPE html>
<html lang="et">
<head>
    <meta charset="UTF-8">
    <title>Muuda postitust</title>
    <link rel="stylesheet" href="/css/styles.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>

    <style>
        textarea.autosize {
            min-height: 500px;
            width: 100%;
            box-sizing: border-box;
        }
    </style>
</head>
<body>
<div class="container">
    <h2>Muuda postitust</h2>
    <form action="" method="post">
        <div class="form-group">
            <label for="title">Pealkiri:</label>
            <input type="text" class="form-control" name="pealkiri" id="title" required value="<?php echo htmlspecialchars($post['pealkiri']); ?>">
        </div>
        <div class="form-group">
            <label for="author">Autor:</label>
            <input type="text" class="form-control" name="autor" id="author" value="<?php echo htmlspecialchars($post['autor']); ?>">
        </div>
        <div class="form-group">
            <label for="content">Tekst:</label>
            <textarea class="form-control autosize" name="tekst" id="content" required><?php echo htmlspecialchars($post['tekst']); ?></textarea>
        </div>
        <div class="form-group">
            <label for="image">Pildi aadress:</label>
            <input type="text" class="form-control" name="pildi_aadress" id="image" value="<?php echo htmlspecialchars($post['pildi_aadress']); ?>">
        </div>
        <button type="submit" class="btn btn-primary">Salvesta muudatused</button>
    </form>
</div>
<?php include 'footer.php'?>
</body>
</html>
