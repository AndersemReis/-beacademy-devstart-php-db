<select name="" id="">
    <option selected>Selecione um ano</option>
    <?php

        for ($ano = 2022; $ano >= 1900; $ano--){
            echo "<option>{$ano}</option>";
        }
        
    ?>
</select>
<br>
<br>
<select name="" id="">
    <option selected>Selecione o mês</option>
    <?php

        for ($mes = 12; $mes >= 1; $mes--){
            echo "<option>{$mes}</option>";
        }
        
    ?>
</select>
<br>
<br>
<select name="" id="">
    <option selected>Selecione o dia</option>
    <?php

        for ($dia = 31; $dia >= 1; $dia--){
            echo "<option>{$dia}</option>";
        }
        
    ?>
</select>