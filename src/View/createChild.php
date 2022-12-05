<?php

require_once("Components/layout.php");

require_once("Components/header.php");

?>

<body>

    <main>
        <form class="row g-3" action="?action=store" method="post">
            <div class="col-md-6">
                <label class="form-label">Child Name*</label>
                <input type="name" class="form-control" id="childName">
            </div>
            <div class="col-md-6">
                <label for="inputPassword4" class="form-label">Age</label>
                <input type="age" class="form-control" id="age">
            </div>
            <div class="col-12">
                <label for="inputAddress" class="form-label">Place*</label>
                <input type="text" class="form-control" id="place" placeholder="in the school playground">
            </div>
            <div class="col-12">
                <label class="form-label">Gift Suggestion</label>
                <input type="gift" class="form-control" id="giftSuggestion">
            </div>
            <div class="buttons">
                <button class="btn btn-primary">Save</button>
                <button class="btn btn-primary">Reset</button>
                <a href="./index.php"><button class="btn btn-primary">Cancel</button></a>
            </div>
        </form>
    </main>
    
    <?php

            require_once("Components/footer.php");
    ?>

    <script src="https://unpkg.com/flowbite@1.5.4/dist/flowbite.js"></script>
</body>

