<?php
    require_once "../Controller/AdvertisementController.php";
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <title>Advertisements</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="/RabIT/View/stylesheets/shared_styling.css">
        <link rel="icon" href="/RabIT/icon.png">
        <style>
            .from{
                margin-bottom: 20px;
                padding: 10px 10px;
                background-color: #ffffa7;
                border-radius: 20px 20px;
                width: max-content;
            }
        </style>
    </head>
    <body>

    <header>
        <nav class="center flexbox">
            <a href="users">Users</a>
            <a href="index">Main page</a>
        </nav>
    </header>

    <main>
        <h1 class="title center">Advertisements</h1>
        <table class="center table">
<?php
    $adsController = AdvertisementController::getInstance();
    $ads = $adsController->getAds();

    foreach ($ads as $ad){
        $uid = $ad->getUserid();
        $user = $adsController->getTheUser($uid);

      echo "<tr>
                <td>
                    <div class='from center'>".$user->getName().":</div>
                    ".$ad->getTitle()."
                </td>
            </tr>";
    }
?>
        </table>
    </main>

    <footer></footer>

    </body>
</html>