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
            <table class="table">
                <thead>
                    <tr>
                    <th scope="col">Id</th>
                    <th scope="col">Child Name</th>
                    <th scope="col">Age</th>
                    <th scope="col">Gift Suggestion</th>
                    <th scope="col">Date Time</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    foreach ($data["child"] as $child){
                        echo "
                        <tr>
                            <td>{$child->getId()}</td>
                            <td>{$child->getChildName()}</td>
                            <td>{$child->getAge()}</td>
                            <td>{$child->getGiftSuggestion()}</td>
                            <td>{$child->getDateTime()}</td>
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