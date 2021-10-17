<!--*** Form tradicional en PHP ***

Notas: se mira el campo name, no el id
Si no se indica el atributo action en el form, se hará post sobre la misma url
-->

<form method="POST">
    <label for="fname">First name: *</label><br>
    <input type="text" name="first_name"><br>
    <label for="lname">Last name:</label><br>
    <input type="text" name="last_name">
    <input type="submit" value="Enviar">
</form>

<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    echo 'ME HAN HECHO CLICK!!!';
    echo '<br><hr>';
    echo '<b>Valor en crudo</b>: ';
    echo var_dump($_POST);
    echo '<br><hr>';
    echo 'Valor de First Name: "' . $_POST['first_name'] . '"<br>';
    echo sprintf('Valor de Last Name: "%s".<br>', $_POST['last_name']);
}
