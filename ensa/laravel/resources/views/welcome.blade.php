<!DOCTYPE html>
<html lang="pt">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="/assets/css/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css" integrity="sha512-Evv84Mr4kqVGRNSgIGL/F/aIDqQb7xQ2vcrdIwxfjThSH8CSR7PBEakCr51Ck+w+/U6swU2Im1vVX0SVk9ABhg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>
<body>
    <main id="container">
        <section id="img">
            <img src="assets/images/ilustration.svg" alt="">
        </section>
        <section id="calculator">
            <form id="form" method="POST" action="/pesos">
                @csrf

                <h1 id="title">Calculadora - IMC</h1>
                <div class="input-box">
                    <label for="weight">Peso em kg</label>
                    <div class="input-field">
                        <i class="fa-solid fa-weight-hanging"></i>
                        <input type="number" name="peso" id="weight" required>
                        <span>Kg</span>
                    </div>

                <div class="input-box">
                    <label for="height">Altura em  m</label>
                    <div class="input-field">
                        <i class="fa-solid fa-ruler"></i>
                        <input type="number" name="altura" id="height" required>
                        <span>m</span>
                    </div>
                </div>

                <button type="submit" id="calcular">Calcular</button>
                
            </form>


            @if (@session('msg'))    
                <div id="infos">
                    <div id="result">
                        <div id="bmi">
                            <span id="value">55</span>
                            <span>Seu IMC</span>
                        </div>
                        <div id="description">
                            <span>{{ session('msg') }}</span>
                        </div>
                    </div>
                @endif
                <div id="more-info">
                    <a href="#">Mais informações sobre IMC
                        <i class="fa-solid fa-link"></i>
                    </a>
                </div>
            </div>
        </section>
    </main>
    <script src="assets/js/script.js"></script>
</body>
</html>