<?php
include "functions.php";
$list=listCity();
?>
<html>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Форма добавления</title> 
    </head>
    <body> 
        <div>
            <form action="addController.php" method="POST" role='form'>
                <div>
                    <div>
                        <label for="dateDeparture">Дата отправления</label>
                        <div>
                            <input id="dateDeparture" type="date" name="dateDeparture"/>
                        </div>
                    </div>
                    <div>
                        <label for="routeDeparture">Номер отправления</label>
                        <div>
                            <input id="routeDeparture" type="text" name="routeDeparture"/>
                        </div>
                    </div>


                    <div>
                        <label for="IDtour">Код тура</label>
                        <div>
                            <select id="IDtour" name="IDtour">
                                <?php
                                for($i=0; $i<count($list); $i++)
                                {
                                    $idTour=$list[$i]['IDtour'];
                                    $city=$list[$i]['city'];
                                    echo '<option value="'.$idTour.'">'.$city.'</option>';
                                }
                                ?>
                            </select>
                        </div>
                    </div>


                    <button type="submit" name="add">Добавить</button>
                </div>
            </form>
        </div>
    </body>
<html></html>