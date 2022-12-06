<?php
require_once("Components/layout.php");
require_once("Components/header.php");
?>
<body>
    <a href="./index.php"><button type="button" id="button cancel" class="#">Cancel</button></a>
    <main>
        <form action='?action=update&id=<?php echo $data["child"]->getId() ?>' method="post">
            <div>
                <input type="text" name="child" required value='<?php echo $data["child"]->getChildName() ?>'>
            </div>
            <div>
                <input type="text" name="child" required value='<?php echo $data["child"]->getAge() ?>'>
            </div>
            <div>
                <input type="text" name="child" required value='<?php echo $data["child"]->getPlace() ?>'>
            </div>
            <div>
                <input type="text" name="child" required value='<?php echo $data["child"]->getGiftSuggestion() ?>'>
            </div>
            <div class="buttons">
                <input type="submit" value="Edit">
                <input type="reset" value="Reset">
            </div>
        </form>
    </main>
    <?php
    require_once("Components/footer.php");
    ?>
</body>