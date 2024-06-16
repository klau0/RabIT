## This application can be accessed with XAMPP
### Steps:
1. Clone the repository in xampp/htdocs, the folder containing the source files should be **RabIT** (important).
2. Start the Apache and MySQL servers on the XAMPP Control Panel
3. In a browser open http://localhost/phpmyadmin
4. Run the first line of the **ads.sql** to create the ads database. Then inside ads run the rest of the sql commands.
5. If you previously set a password to your root user then change the password in Model/ConnectionToDB.php. Similarily, if you don't have a root user just choose/create a user with sufficient privilages and modify ConnectionToDB.php according to that.
6. Open http://localhost/RabIT
