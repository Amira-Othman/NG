<?php
$name=$_POST['name'];
$id=$_POST['id'];
echo $name;
echo "<br/>";
echo $id;
echo "*****************************";
echo "<br/>";



try{
    $pdo = new PDO("mysql:host=mysql;dbname=TASK", "root", "123456");
    // Set the PDO error mode to exception
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch(PDOException $e){
    die("ERROR: Could not connect. " . $e->getMessage());
}
 
// Attempt insert query execution
try{
    // Prepare an insert statement
    $sql = "INSERT INTO Task_table (name, id) VALUES (:name, :id)";
    $stmt = $pdo->prepare($sql);
    
    // Bind parameters to statement
    $stmt->bindParam(':name', $name, PDO::PARAM_STR);
    $stmt->bindParam(':id', $id, PDO::PARAM_STR);
    
    $stmt->execute();
    
    echo "Records inserted successfully.";
} catch(PDOException $e){
    die("ERROR: Could not prepare/execute query: $sql. " . $e->getMessage());
}
 
// Close statement
unset($stmt);
 
// Close connection
unset($pdo);


?>
