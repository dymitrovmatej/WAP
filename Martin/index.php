<!DOCTYPE html>
<html lang="cs">

<head>
<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Karlos</title>
<link rel="stylesheet" href="style.css">
</head>

<body>
    <main>
        <h1>Karlos </h1>
        <div>
            <form>
                <fieldset>
                    <legend>Prikazy</legend>
                    <textarea>
                        reset
                    </textarea>
                    <button>Proved</button>
                </fieldset>
            </form> 
        </div>   
            <table>
                <?php
                require "init.php";
                    for ($y = 0; $y < $size; $y++) { 
                        echo '<tr>';
                    for ($x = 0; $x <  $size; $x++) {
                        echo '<td>';
                        if ($karel->x ==$x && $karel->y == $y) {
                            echo $karel->toHtml();
                        }
                        echo '</td>';
                        }
                    echo '</tr>';
                    }
                echo '</table>'
                ?>
                <tr>
                    <td>Buňka</td>
                </tr>
            </table>
            <p>Manual</p>
        </div>
        </div>
    </main>
</body>
</html>