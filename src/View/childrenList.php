<html>

<?php
    require_once("Components/layout.php");
?>

    <body>

        <?php
        require_once("Components/header.php");
        ?>

        <main>

        
        <html>

    <body>
<div>
            <a href="?action=create">
                <button type="button">add task</button>
            </a>
        </div>
        
        <main>
                <table class="table table-striped table-primary">
        <thead>
            <tr>
            <th scope="col">Id</th>
            <th scope="col">Coder</th>
            <th scope="col">Issue</th>
            <th scope="col">Date Time</th>
            </tr>
        </thead>
        <tbody>
            <?php
            foreach ($data["coder"] as $coder){
                echo "
                <tr>
                    <td>{$coder->getId()}</td>
                    <td>{$coder->getCoder()}</td>
                    <td>{$coder->getIssue()}</td>
                    <td>{$coder->getDateTime()}</td>
                </tr>            
                ";
            }?>
        </tbody>
</table>
        </main>


    </body>



</html>

        <?php
        require_once("Components/footer.php");
        ?>