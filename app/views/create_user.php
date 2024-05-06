<h2>Cadastrar Usuário</h2>

<form action="/user_store" method="POST" role="form">
    <div class="form-group">
        <label for="nome">Nome</label>
        <input type="text" class="form-control" name="name" placeholder="Digite seu nome">
    </div>

    <div class="form-group">
        <label for="email">Email</label>
        <input type="email" class="form-control" name="email" placeholder="Digite seu e-mail">
    </div>

    <div class="form-group">
        <label for="mensagem">Password:</label>
        <input type="text" class="form-control" name="password" placeholder="Digite a mensagem">
    </div>
    <button type="submit" class="btn btn-primary">Cadastrar</button>
</form>