<?php 

    $database = "projeto_videos";

    $connection = new mysqli("localhost", "root", "", $database);

    if($connection->connect_error){
        echo "Erro";
    }
    else {
        echo "Conexão feita com sucesso!";

        $sql = "select * from videos";
        
        $result = $connection->query($sql);

    }
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Vídeos</title>

    <link rel="stylesheet" href="./styles.css">
</head>

<body>
    <header>
        <h1>Site Para Vídeos</h1>
    </header>

    <article>
        <?php 
        while($row = $result->fetch_assoc()) {
        ?>

        <h1>Descrição: <?php echo $row["descricao"] ?></h1>
        <iframe class="myVideo" width="560" height="315" src="<?php echo $row["link"]?>" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>

        <?php } ?>
    </article>

    <footer>
    </footer>
</body>
</html>