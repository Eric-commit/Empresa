<!DOCTYPE html>
<html lang="pt-br">

<head>
    <title>GoncalSystem | Orçamento</title>
    <link rel="shortcut icon" href="logo.png">
    <link rel="stylesheet" type="text/css" href="indexcel.css">
</head>
<body>
    <header class="barraprincipal">
        <a href="indexcel.php" id="logo"><img src="logo.png" class="logo"position="right" width="500px" ></a>
        <nav>
            <ul class="botoes">
                <li class="botoes-item sobrenos" ><a href="sobrenoscel.php" class="links">Sobre Nós </a></li>
                <li class="botoes-item orcamento" ><a href="orcamentocel.php" class="links">Orçamento</a></li>
            </ul>
        </nav>
    </header>
    <div class="container">
        <form action="envia-email.php" method="POST">
            <label>Informe seu email:</label><br>
            <input type="email" name="email" class="input" placeholder="luisa.paula@gmail.com"> <br> <br>
            <label>Informe seu nome/razão social:</label><br>
            <input type="name"  class="input" name="name"> <br><br>
            <label>Digite sua mensagem:</label>
            <textarea name="mensagem" placeholder="Digite sua mensagem e conte que tipo de site você deseja"></textarea>
        <input type="submit" class="submit" value="Pedir Orçamento" >
        </form>
    </div>
</body>
</html>
