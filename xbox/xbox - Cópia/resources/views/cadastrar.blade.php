@extends('layouts.main')

@section('title', 'Cadastrar jogos')

@section('content')
    <section id="card-cadastro">
        
        <div id="container">
        <form action="/jogos/cadastrar" method="post" autocomplete="off" enctype="multipart/form-data">
            @csrf
            <h1>Faça o seu cadastro</h1>
            <div class="form-group">
                <label for="nome">Nome</label> <br>
                <input type="text" name="nome" id="nome" placeholder="Digite o nome do cliente" required maxlength="20" minlength="4">
            </div>
            <div class="form-group">
                <label for="email">Gênero</label> <br>
                <input type="text" name="genero" id="email" placeholder="Digite o gênero do jogo" maxlength="30" minlength="8">
            </div>
            <div class="form-group">
                <label for="foto">Imagem do jogo</label> <br>
                <input type="file" name="image" id="foto" placeholder="Digite o gênero do jogo" maxlength="30" minlength="8">
            </div>
            <div class="form-group">
                <label for="morada">Ano de lançamento</label> <br>
                <input type="date" name="ano_lancamento" id="morada">
            </div>
            <div class="form-group">
                <label for="plano">Ano</label> <br>
                 <input type="number" name="ano" id="nome" placeholder="Digite o ano" required min="0" max="2025" step="1">
            </div>
            <div class="form-group">
            <label for="telefone">Descricao</label> <br>
            <textarea name="descricao" id="" cols="50" rows="10" >
                        
            </textarea>


            </div>

            <input type="submit" value="Cadastrar" style="background-color: green;">
        </form>
</div>
    </section>
@endsection