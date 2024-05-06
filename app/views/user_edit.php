<h2>Editar Usuário</h2>

<?php if (isset($userEncontrado)){}?>

<form action="/user_update" method="POST" role="form">
    <div class="form-group">
        <label for="nome">Nome</label>
        <input type="hidden" name="id" value="<?=$userEncontrado->id;?>">
        <input type="text" class="form-control" name="name" value="<?=$userEncontrado->name;?>">
    </div>

    <div class="form-group">
        <label for="email">Email</label>
        <input type="email" class="form-control" name="email" value="<?=$userEncontrado->email;?>">
    </div>

    <div class="form-group">
        <label for="mensagem">Password:</label>
        <input type="text" class="form-control" name="password" value="<?=$userEncontrado->password;?>">
    </div>
    <button type="submit" class="btn btn-primary">Salvar</button>
</form>

