<form action="" method="post">
<input type="text" name="n1" id="" placeholder="Numero 1">
<input type="text" name="n2" id="" placeholder="Numero 2">
<br/>
<button name="soma">Somar<button>
<button name="subtracao">Subtrair<button>
<button name="multiplicacao">Multiplicar<button>
<button name="divisao">Dividir<button>
    <br/>
</form>


<?php
    if ($_POST){
       if (isset($_POST['subtracao'])){
           echo $_POST['n1'] - $_POST['n2'];
       }
       if (isset($_POST['soma'])){
        echo $_POST['n1'] + $_POST['n2'];
        
       }
       if (isset($_POST['multiplicacao'])){
           echo $_POST['n1'] * $_POST['n2'];
       }
       if (isset($_POST['divisao'])){
           echo $_POST['n1'] / $_POST['n2'];
       }
    }
?>