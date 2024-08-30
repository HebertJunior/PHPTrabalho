<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Layout Flexbox</title>
    <style>
        body {
            margin: 0;
            background-color: black;
            color: white;
            font-family: Arial, sans-serif;
            display: flex;
            flex-direction: column;
            height: 100vh;
        }
        .nav {
            background-color: azure;
            height: 80px;
        }
        .main {
            display: flex;
            flex: 1;
        }
        .menu {
            background-color: beige;
            width: 200px;
            height: calc(100vh - 80px); /* Ajusta a altura para ficar abaixo da nav */
        }
        .cont {
            background-color: brown;
            flex: 1;
            height: calc(100vh - 80px); /* Ajusta a altura para ficar abaixo da nav */
        }
    </style>
</head>
<body>
    <header class="nav">Navegação</header>
    <div class="main">
        <aside class="menu">Menu</aside>
        <div class="cont">Conteúdo</div>
    </div>
</body>
</html>
