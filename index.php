<!DOCTYPE html>

<?php
if(isset($_GET["name"]) && isset($_GET["category"]) && isset($_GET["bgcolor"])){
    
    
// define variables and set to empty values
$nameErr = $champErr = $skinErr = $bgErr = "";

  if (empty($_GET["name"])) {
    $nameErr = "Name is required";
  } else {
    $name = $_GET["name"];
  }

  if (empty($_GET["category"])) {
    $champErr = "Champion is required";
  } else {
    $champ = $_GET["category"];
  }

  if (empty($_GET["skin"])) {
    $skinErr = "Skin or no skin?!";
  } else {
    $skin = $_GET["skin"];
  }

  if (empty($_GET["bgcolor"])) {
    $bgErr = "Background color is required";
  } else {
    $color = $_GET["bgcolor"];
  }

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
        if(empty($_GET["name"])){
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
            <input type= "text" name="name" placeholder="Summoner Name" />
            <span class="error">* <?php echo $nameErr;?></span>
           
            <select name = "category">
                <option value = "">Select Champion</option>
                <option>fizz</option>
                <option>katarina</option>
                <option>rengar</option>
                <option>gnar</option>
                <option>nami</option>
                <option>kayn</option>
            </select>
            <span class="error">* <?php echo $champErr;?></span>
            
            <input type="radio" name="skin" value="Skin"> Skin
            <span class="error">* <?php echo $skinErr;?></span>
            <input type="radio" name="skin" value="noSkin"> No Skin
            <span class="error">* <?php echo $skinErr;?></span>
  
            
            <select name = "bgcolor">
                <option value = "">Select Background Color</option>
                <option>red</option>
                <option>blue</option>
                <option>green</option>
                <option>yellow</option>
                <option>orange</option>
            </select>
            <span class="error">* <?php echo $bgErr;?></span>
            <input type= "submit" value="Search" />
        </form>
        
    </body>
</html>