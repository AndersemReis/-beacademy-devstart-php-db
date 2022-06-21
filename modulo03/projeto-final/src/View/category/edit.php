<h1>Editar categoria</h1>

<form action="" method="post">
    <label for="name">Nome</label>
    <input id="name" value="<?php echo $data['name']; ?>" name="name" type="text" class="form-control mb-3">
    
    <label for="description">Descriçao</label>
    <textarea id="description" name="description" class="form-control mb-3"><?php echo $data['description']; ?></textarea>

    <button class="btn btn-primary">Atualizar</button>
</form>
