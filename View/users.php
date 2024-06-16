<?php
    require_once "../Controller/UserController.php";
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <title>Users</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="/RabIT/View/stylesheets/shared_styling.css">
        <link rel="icon" href="/RabIT/icon.png">
    </head>
    <body>

    <header>
        <nav class="center flexbox">
            <a href="advertisements">Advertisements</a>
            <a href="index">Main page</a>
        </nav>
    </header>

    <main>
        <h1 class="title center">Our users</h1>
        <table class="center table">
<?php
    $userController = UserController::getInstance();
    $users = $userController->getUsers();

    foreach ($users as $user){
      echo "<tr>
                <td>".$user->getName()."</td>
            </tr>";
    }
?>
        </table>
    </main>

    <footer></footer>

    </body>
</html>