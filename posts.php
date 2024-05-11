<?php
include 'config/mysql.php';
include_once 'index.php';
$query = "SELECT id, pealkiri, tekst, autor, aeg, pildi_aadress FROM veeb WHERE id >= 2";

$result = $conn->query($query);
?>

<!DOCTYPE html>
<html lang="et">
<head>
    <meta charset="UTF-8">
    <title>Postitused</title>
    <link rel="stylesheet" href="/css/styles.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
 
 <script>
        function confirmDelete(postId) {
            if (confirm("Kas olete kindel, et soovite selle postituse kustutada?")) {
                window.location.href = 'delete_post.php?id=' + postId;
            }
        }
    </script>
</head>
<body>
    <div class="container mt-4">
    <h2>Postitused</h2>
        <div class="row">
            <?php
            if ($result->rowCount() > 0) {
                $count = 0;
                while ($row = $result->fetch(PDO::FETCH_ASSOC)) {
                    if ($count % 3 == 0 && $count != 0) {
                        echo '</div><div class="row">';
                    }
                    echo '<div class="col-md-4">';
                    echo '<div class="card mb-4">';
                    echo '<div class="card-body">';
                    echo '<h5 class="card-title">' . htmlspecialchars($row['pealkiri']) . '</h5>';
                    echo '<p class="text-muted">' . htmlspecialchars($row['autor']) . ' - ' . date('d.m.Y', strtotime($row['aeg'])) . '</p>';
                    echo '<p class="card-text">' . substr(htmlspecialchars($row['tekst']), 0, 100) . '...</p>';
                    echo '<a href="view_post.php?id=' . $row['id'] . '" class="btn btn-primary">Loe rohkem</a> ';
                    echo '<a href="edit_post.php?id=' . $row['id'] . '" class="btn btn-secondary">Muuda</a> ';
                    echo '<button onclick="confirmDelete(' . $row['id'] . ')" class="btn btn-danger">Kustuta</button>';
                    echo '</div>';
                    echo '</div>';
                    echo '</div>';

                    $count++;
                }
            } else {
                echo '<p>Postitusi ei leitud!</p>';
            }
            ?>
        </div>
    </div>

</body>
</html>

<?php
$conn = null;
?>
