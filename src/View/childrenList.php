<?php
    require_once("Components/open.html");
    require_once("Components/header.php");
?>

<div class="addBox">
    <h1 class="titleHome">Tooth Archive</h1>
    <a href="?action=create">
        <button class="addButton"><img src="./public/img/addButton.png"></button>
    </a>
    
</div>

<main>
<div class="tableHome">
    <table class="table" style= "background-image: url(./public/img/notebookHome.png)">
        <thead>
            <tr class="boxTitle">
                <th scope="col">Child Name</th>
                <th scope="col">Age</th>
                <th scope="col">Place</th>
                <th scope="col">Gift Suggestion</th>
                <th scope="col">Date Time</th>
            </tr>
        </thead>
        <tbody class="boxContent">
            <?php
            foreach ($data["child"] as $child){
                echo "
                <tr>
                    <td>{$child->getChildName()}</td>
                    <td>{$child->getAge()}</td>
                    <td>{$child->getPlace()}</td>
                    <td>{$child->getGiftSuggestion()}</td>
                    <td>{$child->getDateTime()}</td>
                    <td>
                        <a href='?action=delete&id={$child->getId()}'><button>🗑</button></a> 
                        <a href='?action=edit&id={$child->getId()}'>✏</a> 
                    </td>
                </tr>            
                ";
            }?>
        </tbody>
    </table>
</div>
</main>
<?php
    require_once("Components/footer.php");
    require_once("Components/close.html");
?>