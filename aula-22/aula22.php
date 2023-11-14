<!doctype html>
<html lang="pt-br">
<?php
function fibonacci($p){
    $sequencia = array();
    $sequencia[0] = 1;
    $sequencia [1] = 1;

    for($i = 2; $i < $p; $i++){
        $sequencia[$i] = $sequencia[$i-1] + $sequencia[$i-2];

    }

    return $sequencia[$p-1];

}

?>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>

<body>
    <style>
        body {
            background: rgb(197, 62, 254);
            background: radial-gradient(circle, rgba(197, 62, 254, 1) 0%, rgba(129, 38, 125, 1) 100%);
        }

        h1 {
            text-align: center;
        }
    </style>
    <h1>Formulário</h1>
    <div class="row mt-2">
        <div class="col-6 offset-3">
            <?php
            if (isset($_POST["posicao"])) {
            ?>
                <h1>Resultado:</h1>
                <form method="POST">
                
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Posição</label>
                    <input type="text" class="form-control" id="exampleInputEmail1" name="posicao" placeholder="Posição sequencia de Fibonacci" value="<?php if (isset($_POST["posicao"])) ?>">

                </div>

                <button type="submit" class="btn btn-success">Enviar</button>
                <button type="submit" class="btn btn-danger">Resetar</button>

            </form>
            </br>
            </br>
        

                <div class="row mt-3">
                    <div class="col-6 offset-3">
                        <div class="alert alert-danger" role="alert"></div>
                        <h3><?php echo $_POST["posicao"];?></h3>
                    </div>

                    <div class="col-6 offset-3">
                        <div class="alert alert-danger" role="alert"></div>
                     <h3><?php echo fibonacci ($_POST["posicao"]);?></h3>
                    </div>
                </div>

            <?php
            }
            ?>

            

        </div>

    </div>
    <?php

    ?>



    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>

</html>