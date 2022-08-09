<h1 class="h3 mb-3 fw-normal">Editar Contato</h1>
<hr>

<form action="" method="post">
    <input value="<?php echo $dados[0];?>" name="nome" type="text" class="form-control mb-2" placeholder="Nome">
    <br/>
    <input value="<?php echo $dados[1];?>" name="email" type="email" class="form-control mb-2" placeholder="Email">
    <br/>
    <input value="<?php echo $dados[2];?>" name="telefone" type="text" class="form-control mb-2" placeholder="Telefone">
    <button class="btn btn-primary">Enviar</button>
</form>
