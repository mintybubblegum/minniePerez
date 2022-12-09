<?php
    require_once("Components/open.html");
    require_once("Components/header.php");
?>

<div class="cardTitle">
    <h1 class="titleHome">Add new tooth fallout</h1>
</div>

    <main>
        <div class="cardImg" style= "background-image: url(./public/img/yellowNotebook.png)">
            <form class="row g-3 cardBox" action="?action=store" method="post">
                <div class="col-md-6">
                    <label class="form-label">Child Name*</label>
                    <input type="text" class="form-control" name="childName">
                </div>
                <div class="col-md-6">
                    <label for="inputPassword4" class="form-label">Age</label>
                    <input type="number" class="form-control" name="age">
                </div>
                <div class="col-12">
                    <label for="inputAddress" class="form-label">Place*</label>
                    <input type="text" class="form-control" name="place" placeholder="in the school playground">
                </div>
                <div class="col-12">
                    <label class="form-label">Gift Suggestion</label>
                    <input type="text" class="form-control" name="giftSuggestion">
                </div>
                <div class="buttons">
                    <button type ="submit" value="create" class="saveButton" style= "background-image: url(./public/img/saveButton.png)"></button>
                    <button type="reset" value="reset" class="resetButton" style= "background-image: url(./public/img/resetButton.png)"></button>
                    <a href="./index.php"><button class="cancelButton" style= "background-image: url(./public/img/cancelButton.png)"></button></a>
                </div>
            </form>
        </div>
    </main>
    
<?php
    require_once("Components/footer.php");
?>

    <script src="https://unpkg.com/flowbite@1.5.4/dist/flowbite.js"></script>