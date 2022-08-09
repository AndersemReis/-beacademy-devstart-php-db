<form action="" method="post">
    <input name="num1"  type="number" placeholder="Informe um número"><br/>
   
    <Label for="operador">Operaçao</label>
    <select name="operacao">
        <option value="">Selecione uma operaçao</option>
        <option value="+" name="operacao">Soma</option>
        <option value="*" name="operacao">Multiplicaçao</option>
        <option value="/" name="operacao">Divisao</option>
        <option value="-" name="operacao">Subtraçao</option>
    </select>
    <br/>
    <input name="num2" type="number" placeholder="Informe um número"><br/>
    <button>Enviar</button>
</form>

<?php
  $operacao = $_POST['operacao'];

    if ($_POST){
        

        switch($operacao){
            case '+':
                echo "a soma dos dois números é " .$_POST['num1'] + $_POST['num2'];
                break;
            case '*':
                echo "a multiplicacao dos dois números é " .$_POST['num1'] * $_POST['num2'];
                break;
            case '/':
                echo "a divisao dos dois números é " .$_POST['num1'] / $_POST['num2'];
                break;
            case '-':
                echo "a subtracao dos dois números é " .$_POST['num1'] - $_POST['num2'];
                break;
            default:
                echo "operaçao invalida";
                break;

                
        }
         
    }
?>