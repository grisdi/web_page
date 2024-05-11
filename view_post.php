<?php
include 'config/mysql.php'; 


if (isset($_GET['id']) && is_numeric($_GET['id'])) {
    $id = $_GET['id'];


    $stmt = $conn->prepare("SELECT pealkiri, tekst, autor, aeg, pildi_aadress FROM veeb WHERE id = ?");
    $stmt->bindParam(1, $id, PDO::PARAM_INT);
    $stmt->execute();

  
    if ($post = $stmt->fetch(PDO::FETCH_ASSOC)) {
        echo '<div class="container mt-4">';
        echo '<h1>' . htmlspecialchars($post['pealkiri']) . '</h1>';
        echo '<p>Autor: ' . htmlspecialchars($post['autor']) . '</p>';
        echo '<p>Kuupäev: ' . htmlspecialchars($post['aeg']) . '</p>';
        if (!empty($post['pildi_aadress'])) {
            echo '<img src="' . htmlspecialchars($post['pildi_aadress']) . '" alt="Post Image" style="height=50%;">';
        }
        echo '<div>' . nl2br(htmlspecialchars($post['tekst'])) . '</div>';
        echo '</div>';
    } else {
        echo '<p>Postitust ei leitud.</p>';
    }
} else {
    echo '<p>Vigane päring: puudub ID.</p>';
}
$conn = null;
?>
