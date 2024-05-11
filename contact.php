<?php
include 'config/mysql.php'; 

$id = 1;

$stmt = $conn->prepare("SELECT pildi_aadress, kontakt_email, kontakt_telefon FROM veeb WHERE id = :id");
$stmt->bindParam(':id', $id, PDO::PARAM_INT);
$stmt->execute();

$row = $stmt->fetch(PDO::FETCH_ASSOC);

if (!$row) {
    echo "Vastavat kirjet ei leitud.";
} else {
    $pildiAadress = $row['pildi_aadress'];
    $kontaktEmail = $row['kontakt_email'];
    $kontaktTelefon = $row['kontakt_telefon'];
}
?>

<!DOCTYPE html>
<html lang="et">
<head>
    <meta charset="UTF-8">
    <title>Kontakt</title>
    <link rel="stylesheet" href="/css/styles.css">

</head>
<body>
<div class="container">
    <h1>Kontakt</h1>
    <img src="<?php echo htmlspecialchars($pildiAadress); ?>" alt="Minu pilt" style="width:100%;max-width:300px;">
    <p><?php echo htmlspecialchars($kontaktEmail); ?></p>
    <p><?php echo htmlspecialchars($kontaktTelefon); ?></p>
</div>
</body>
</html>
