<!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
<h1>Editar categoria</h1>

<form action="" method="post">
    <label for="name">Nome</label>
    <input id="name" value="<?php echo $data['name']; ?>" name="name" type="text" class="form-control mb-3">
    
    <label for="description">Descriçao</label>
    <textarea id="description" name="description" class="form-control mb-3"><?php echo $data['description']; ?></textarea>

    <button class="btn btn-primary">Atualizar</button>
</form>
