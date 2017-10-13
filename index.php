<!DOCTYPE html>

<?php
if(isset($_GET["name"]) && isset($_GET["category"]) && isset($_GET["skin"]) && isset($_GET["bgcolor"])){
    $name = $_GET["name"];
    $champ = $_GET["category"];
    $skin = $_GET["skin"];
    $color = $_GET["bgcolor"];
}

?>
<html>
    <head>
        <title>
            League Champion Vending Machine
        </title>
        
        
        
    </head>
    
    <body>
        <?php
        if(!isset($_GET["name"])){
            echo "Please fill out the information to see your champion!";
        }
        else{
            echo "<body style='background-color:$color'>";
            
            echo "Hello, $name! Witness the champion that is $champ!";
            
            if($skin == "Skin"){
                echo "<img src='images/$champ$skin.jpg'>";
            }
            else{
                echo "<img src='images/$champ.jpg'>";
            }
        }
        
        ?>
        
        <form method="get">
            <input type= "text" name="name" placeholder="Summoner Name" value="<?=$_GET['keyword']?>" />
           
            <select name = "category">
                <option value = "">Select Champion</option>
                <option>fizz</option>
                <option>katarina</option>
                <option>rengar</option>
                <option>gnar</option>
                <option>nami</option>
                <option>kayn</option>
            </select>
            
            <input type="radio" name="skin" value="Skin"> Skin
            <input type="radio" name="skin" value="noSkin"> No Skin
  
            
            <select name = "bgcolor">
                <option value = "">Select Background Color</option>
                <option>red</option>
                <option>blue</option>
                <option>green</option>
                <option>yellow</option>
                <option>orange</option>
            </select>
            <input type= "submit" value="Search" />
        </form>
        
    </body>
</html>