@extends('layouts.main')

@section('title', 'Cadastrar jogos')

@section('content')
    <section id="card-cadastro">
        <div id="container">
        <form action="/jogos" method="post" autocomplete="off" enctype="multipart/form-data">
            @csrf
            <h1>Faça o seu cadastro</h1>
            <div class="form-group">
                <label for="nome">Nome</label> <br>
                <input type="text" name="nome" id="nome" placeholder="Digite o nome do cliente" required >
            </div>
            <div class="form-group">
                <label for="email">Gênero</label> <br>
                <input type="text" name="genero" id="email" placeholder="Digite o gênero do jogo" >
            </div>
            <div class="form-group">
                <label for="morada">Data de lançamento</label> <br>
                <input type="date" name="date" id="morada">
            </div>
            <div class="form-group">
                <label for="telefone">Sobre</label> <br>
                <textarea name="sobre" id="" cols="50" rows="10" ></textarea>
                </div>
                <div class="form-group">
                    <label for="foto">Imagem do jogo</label> <br>
                    <input type="file" name="image" id="foto" placeholder="Digite o gênero do jogo" maxlength="30" minlength="8">
                </div>
                <div class="form-group">
                    <label for="description">Adicione itens de infraestrutura</label>
                    <div class="form-group">
                        <input type="checkbox" name="items[]" id="items" value="Cadeiras"> Cadeiras
                    </div>
                    <div class="form-group">
                        <input type="checkbox" name="items[]" id="items" value="Palco"> Palco
                    </div>
                    <div class="form-group">
                        <input type="checkbox" name="items[]" id="items" value="Cerveja Grátis"> Cerveja Grátis
                    </div>
                    <div class="form-group">
                        <input type="checkbox" name="items[]" id="items" value="Open Food"> Open Food
                    </div>
                    <div class="form-group">
                        <input type="checkbox" name="items[]" id="items" value="Brindes"> Brindes
                    </div>

            <input type="submit" value="Cadastrar" style="background-color: green;">
        </form>
    </div>
    </section>
@endsection