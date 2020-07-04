<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    


    <form action="" method="POST">
        <label>Quantidade de números da sequência</label>
            <input type="number" name="N"/>
        <br/>

            <input type="submit" Value="Enviar"/>
    </form>

    <?php
        session_start();
        // Recebendo a quantidade de números:
        $_SESSION['n'] = $_POST['N'];
    ?>

    <?php
        
        echo '<form action="" method="POST">';
            echo '<label>Digite a sequência - A mesma deve ser composta pelos números 1 e/ou 2:</label>';
            for($i=1; $i<=$_SESSION['n']; $i++){
                echo '<input type="number" name="array[]"/>';
            }
            echo '<br/>';

            echo '<input type="submit" Value="Enviar"/>';
        echo '</form>';

        // Recebendo a sequência:
        $Vi = $_POST['array'];
    
    
    ?> 

</body>
</html>