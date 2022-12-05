<?php

require_once("Components/layout.php");

require_once("Components/header.php");

?>

<body>

    <main>
        <a href="./index.php"><button type="button">Cancel</button></a>
        <form action="?action=store" method="post">
        <input type="submit" value="Crear">
        <input type="reset" value="Reset">
        </form>
    </main>
    
    <?php

            require_once("Components/footer.php");
    ?>
</body>

