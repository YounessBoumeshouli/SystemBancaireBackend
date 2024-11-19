
<?php
include("connexion.php");

if (isset($_POST["nom"],$_POST["prenom"],$_POST["genre"],$_POST["datenaissance"],$_POST["nationalite"])) {
    $nom = mysqli_real_escape_string($con, $_POST["nom"]);
    $prenom = mysqli_real_escape_string($con, $_POST["prenom"]);
    $genre = mysqli_real_escape_string($con, $_POST["genre"]);
    $datenaissance = mysqli_real_escape_string($con, $_POST["datenaissance"]);
    $nationalite = mysqli_real_escape_string($con, $_POST["nationalite"]);
    $query = "INSERT INTO client (nom, prenom, genre, datenaissance, nationalite) VALUES (?, ?, ?, ?, ?)";
    $stmt = $con->prepare($query);
    $stmt->bind_param("ssiss", $nom, $prenom, $genre, $datenaissance, $nationalite);
    if ($stmt->execute()) {
        echo "Data is inserted successfully.";
    } else {
        echo "Data insertion failed: " . $stmt->error;
    }

    // Close statement and connection
    $stmt->close();
    $con->close();
} else {
    echo "All fields are required!";
}


?>
