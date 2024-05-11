<?php
include 'config/mysql.php'; 

$id = 1;

$stmt = $conn->prepare("SELECT pildi_aadress, minust FROM veeb WHERE id = :id");
$stmt->bindParam(':id', $id, PDO::PARAM_INT);
$stmt->execute();

$row = $stmt->fetch(PDO::FETCH_ASSOC);

if (!$row) {
    echo "Vastavat kirjet ei leitud.";
} else {
    $pildiAadress = $row['pildi_aadress'];
    $minustTekst = $row['minust'];
}
?>

<!DOCTYPE html>
<html lang="et">
<head>
    <meta charset="UTF-8">
    <title>Minust</title>
    <link rel="stylesheet" href="/css/styles.css">

</head>
<body>
<div class="container">
    <h1>Minust</h1>
    <img src="<?php echo htmlspecialchars($pildiAadress); ?>" alt="Minu pilt" style="width:100%;max-width:300px;">
    <p><?php echo htmlspecialchars($minustTekst); ?></p>
</div>
</body>
</html>
