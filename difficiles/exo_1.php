<?php ob_start() ?>

<form method="POST">
  <fieldset>
    <div class="form-group">
      <label for="pseudo" class="form-label mt-4">Pseudo</label>
      <input name="pseudo"type="text" class="form-control" id="pseudo" placeholder="Entrez votre pseudo">
    </div>
    <div class="form-group">
      <label for="exampleInputPassword1" class="form-label mt-4">Password</label>
      <input name="password" type="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
    </div>
    <div class="w-50 mx-auto text-center">
        <button name="submit" type="submit" class="btn btn-primary my-3">Submit</button>
    </div>
  </fieldset>
</form>

<?php 

$pseudo = $_POST['pseudo'];
$password = $_POST['password'];

if(isset($_POST["submit"])){
    if(empty($_POST['pseudo'])){
        echo "vous devez entrez un pseudo";
    } 
    elseif(empty($_POST['password'])){
        echo "vous devez entrer un mot de passe";
    }
    else{
        echo "<div class='form-group'>";
        echo "<label class='form-label mt-4'>Pseudo</label>";
        echo "<input type='text' class='form-control' value=" . $pseudo . ">";
        echo "</div";
        echo "<div class='form-group'>";
        echo "<label class='form-label mt-4'>Password</label>";
        echo "<input type='text' class='form-control' value=" . $password . ">";
        echo "</div>";
    }
}


?>

<?php 
$content = ob_get_clean(); 
$title = "Page de connexion";
require "../common/template.php";
?>