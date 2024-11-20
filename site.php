<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gerador de Senha</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background: linear-gradient(135deg, #6a11cb, #2575fc);
            color: #fff;
            text-align: center;
            padding: 50px;
        }
        h1 {
            font-size: 2.5em;
            margin-bottom: 20px;
        }
        .container {
            background: rgba(255, 255, 255, 0.1);
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.3);
            display: inline-block;
        }
        button {
            font-size: 1.2em;
            padding: 10px 20px;
            color: #fff;
            background-color: #007bff;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            transition: background 0.3s;
        }
        button:hover {
            background-color: #0056b3;
        }
        .senha-gerada {
            font-size: 1.5em;
            margin-top: 15px;
            font-weight: bold;
            color: #ffd700;
        }
    </style>
</head>
<body>
    <h1>Gerador de Senha</h1>
    <div class="container">
        <?php
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $dia = date("d");
            $mes = date("m");
            $senhaCompleta = ($dia * 100) + ($mes / 9431) * 10000;
            $senhaFormatada = substr(number_format($senhaCompleta, 0, '', ''), 0, 4);
            echo "<div class='senha-gerada'>Senha gerada: $senhaFormatada</div>";
        }
        ?>
        <form method="POST">
            <button type="submit">Gerar Senha</button>
        </form>
    </div>
</body>
</html>
