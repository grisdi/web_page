<?php
include 'config/mysql.php'; 

if (isset($_GET['id']) && is_numeric($_GET['id'])) {
    $id = $_GET['id'];

    
    $stmt = $conn->prepare("DELETE FROM veeb WHERE id = ?");
    $stmt->bindParam(1, $id, PDO::PARAM_INT);
    $stmt->execute();

    if ($stmt->rowCount() > 0) {
        echo "<p>Postitus kustutatud edukalt.</p>";
    } else {
        echo "<p>Postituse kustutamine ebaõnnestus.</p>";
    }
} else {
    echo "<p>Vigane päring: puudub või vale ID.</p>";
}

$conn = null;

header("Location: posts.php");
exit;
?>
