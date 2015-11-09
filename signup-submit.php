<?php include("top.html"); ?>
<h2>Thank you!</h2>
<?php 
    $db = new PDO("mysql:dbname=nerdluv;host=localhost", "root", "toor");
    $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    
    if($_SERVER["REQUEST_METHOD"] == "POST"){
        $name = $_POST["name"];
        $password = $_POST["password"];
        $pass_hash = password_hash($password, PASSWORD_DEFAULT);
        $gender = $_POST["gender"];
        $age = $_POST["age"];
        $type = $_POST["type"];
        $type1 = $type[0];
        $type2 = $type[1];
        $type3 = $type[2];
        $type4 = $type[3];
        $os = $_POST["system"];
        $min = $_POST["minage"];
        $max = $_POST["maxage"];
        $detail_array = array(':name' => $name, ':pass_hash'=>$pass_hash,':gender' => $gender, ':age' => $age, ':type1' => $type1, ':type2' => $type2, ':type3' => $type3,
                ':type4' => $type4, ':os' => $os, ':min' => $min, ':max' => $max );
}
    if($detail_array != null){
        $stmt = $db->prepare("INSERT INTO singles VALUES (NULL, :name, :pass_hash, :gender, :age, :type1,:type2, :type3, :type4, :os, :min, :max);");
        $stmt->execute($detail_array);
    }
        $db = null;
?>
<p>Welcome to NerdLuv,<?= $name ?></p>
<p>Now <a href="matches.php">log in to see your matches!</a></p>
<?php include("bottom.html"); ?>
