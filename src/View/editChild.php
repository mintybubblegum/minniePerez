<?php
require_once("Components/layout.php");
require_once("Components/header.php");
?>
<body>
    <main>
        <h1>Edit tooth fallout</h1>
        <br>
        <br>
        <form class="row g-3" action='?action=update&id=<?php echo $data["child"]->getId() ?>' method="post">
            <div class="col-md-6">
                <label class="form-label">Child Name*</label>
                <input type="text" class="form-control" name="childName" required value='<?php echo $data["child"]->getChildName() ?>'>
            </div>
            <div class="col-md-6">
                <label for="inputPassword4" class="form-label">Age</label>
                <input type="number" class="form-control" name="age" required value='<?php echo $data["child"]->getAge() ?>'>
            </div>
            <div class="col-12">
                <label for="inputAddress" class="form-label">Place*</label>
                <input type="text" class="form-control" name="place" placeholder="in the school playground" required value='<?php echo $data["child"]->getPlace() ?>'>
            </div>
            <div class="col-12">
                <label class="form-label">Gift Suggestion</label>
                <input type="text" class="form-control" name="giftSuggestion" required value='<?php echo $data["child"]->getGiftSuggestion() ?>'>
            </div>
            <div class="buttons">
                <button type ="submit" value="create" class="btn btn-primary">Save</button>
                <button type="reset" value="reset" class="btn btn-primary">Reset</button>
                <a href="./index.php"><button class="btn btn-primary">Cancel</button></a>
            </div>
        </form>
    </main>
    <?php
    require_once("Components/footer.php");
    ?>
</body>