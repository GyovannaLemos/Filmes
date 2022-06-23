<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Netfilms</title>
    <link rel="stylesheet" href="styleCad.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Bebas+Neue&display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>

<body>
    <div class="container">
        <div class="form-image">
            <img src="./poster/foto3.png" alt="">
        </div>
        <div class="form">
            <form action="./control/inserirFilme.php" method="POST">
                <div class="input-group col-12">
                    <div class="input-box col-6">
                        <label for="text">Nome</label>
                        <input id="text" type="text"  placeholder="Nome" name="cxNome" required>
                    </div>

                    <div class="input-box col-6">
                        <label for="text">Gênero</label>
                        <input id="text" type="text"  placeholder="Gênero" name="cxGenero" required>
                    </div>

                    <div class="input-box col-6">
                        <label for="number">Classificação</label>
                        <input id="number" type="number" placeholder="Classificação" name="cxClassificacao" required>
                    </div>

                    <div class="input-box col-6">
                        <label for="text">Diretor</label>
                        <input id="text" type="tel" placeholder="Diretor" name="cxDiretor" required>
                    </div>

                    <div class="input-box col-6">
                        <label for="date">Ano</label>
                        <input id="date" type="date"  placeholder="" name="cxData" required>
                    </div>

                    <div class="input-box col-6">
                        <label for="text">Estúdio</label>
                        <input id="text" type="text"  placeholder="" name="cxEstudio" required>
                    </div>

                    <div class="input-box col-12">
                        <label for="text">Elenco</label>
                        <input id="text" type="tel"  placeholder="Elenco" name="cxElenco" required>
                    </div>


                    <!-- <div class="input-box col-12">
                        <label for="file">Poster</label>
                        <input id="file" type="file" placeholder="" name="imagem" required>
                    </div> -->

                </div>

                <div class="continue-button col-12">
                    <button type="submit">Continuar </button>
                </div>
            </form>
        </div>
    </div>
</body>

<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

</html>