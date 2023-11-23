<!-- <!DOCTYPE html>
<html lang="en">
<head>
    
    <title>Redirect Example</title>
    <link rel="stylesheet" href="itemStyle.css">
</head>
<body>
    <div id = "parent">
        <div id ="filter">
            <button onclick ="showItem()" >all</button>
            <label for="option1">
                <input type="checkbox" id="option1" name="option" value="option1">
                Option 1
            </label><br>
            <label for="option2">
                <input type="checkbox" id="option2" name="option" value="option2">
                Option 2
            </label><br>
        </div>
        <div id = "item">

        </div>
    </div>
        <script src="autoDiv.js" defer></script>
    <script src="item_js.js" defer></script>
</body>
</html> -->


<!DOCTYPE html>
<html lang="en">
<head>
    <title>Redirect Example</title>
    <link rel="stylesheet" href="../css/item_style.css">
    <link rel="stylesheet" href="../css/checkbox_style.css">
    <link rel="stylesheet" href="../css/filter_style.css">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@500;700;800&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0">

</head>
<body onload = "showItem();">
    <div id="parent">
     
    <div id="filter">
    <div class="checkbox-wrapper-14">
        <div id="cateBrand">
            <p class ="heading">Filter/Category</p>
           
                <input type="checkbox" id="option1" name="option" value="nike" onclick="showItem()" class="switch">
                <label for="option1">Nike </label><br>

                <input type="checkbox" id="option2" name="option" value="ewan" onclick="showItem()" class="switch">
            
                <label for="option2">New Balance</label><br>
           
                <input type="checkbox" id="option3" name="option" value="nike" onclick="showItem()" class="switch">
                <label for="option3"> Converse</label><br>
           
                <input type="checkbox" id="option4" name="option" value="ewan" onclick="showItem()"class="switch">
                <label for="option4">Unbranded </label><br>
           
                <input type="checkbox" id="option5" name="option" value="addidas" onclick="showItem()" class="switch">
                <label for="option5">Adidas  </label><br>
           
                <input type="checkbox" id="option6" name="option" value="vans" onclick="showItem()" class="switch">
                <label for="option6">Vans</label><br>
            
                <input type="checkbox" id="option7" name="option" value="dior" onclick="showItem()" class="switch">
                <label for="option7">Dior </label><br>
           
                <input type="checkbox" id="option8" name="option" value="rebook" onclick="showItem()" class="switch">
                <label for="option8">Reebok </label><br>

           
                <input type="checkbox" id="menCheckbox" name="men" value="men" onclick="showItem()" class="switch">
                <label for="menCheckbox">Men</label><br>
           
            <input type="checkbox" id="womenCheckbox" value="women" onchange="showItem()" class="switch">
            <label for="womenCheckbox">Women</label><br>
            
            <input type="checkbox" id="kidsCheckbox" value="kids" onchange="showItem()"class="switch" >
            <label for="kidsCheckbox"> kids</label><br>
            
            <input type="checkbox" id="runningCheckbox" value="running" onchange="showItem()" class="switch" >
            <label for="runningCheckbox"> running</label><br>
            
            <input type="checkbox" id="basketballCheckbox" value="basketball" onchange="showItem()"class="switch" > 
            <label for="basketballCheckbox">basketball</label><br>
             
            <input type="checkbox" id="aestheticCheckbox" value="aesthetic" onchange="showItem()" class="switch">
            <label for="aestheticCheckbox"> aesthetic  </label><br>
               
            <input type="checkbox" id="skateboardingCheckbox" value="skateboarding" onchange="showItem()" class="switch">
            <label for="skateboardingCheckbox">skateboarding </label><br>
        </div>
            <p class ="heading">Sizes</p>
 
            <input type="checkbox" id="size3CB" value="size3" onchange="showItem()"class="switch">
           
            <label for="size3CB">  size3   </label><br>
               
            <input type="checkbox" id="size4CB" value="size4" onchange="showItem()"class="switch">
            <label for="size4CB"> size4</label><br>
           
            <input type="checkbox" id="size5CB" value="size5" onchange="showItem()"class="switch">
            <label for="size5CB">size5 </label><br>
              
            <input type="checkbox" id="size6CB" value="size6" onchange="showItem()"class="switch">
            <label for="size6CB">size6</label><br>
            
            <input type="checkbox" id="size7CB" value="size7" onchange="showItem()"class="switch">
            <label for="size7CB"> size7 </label><br>
          
            <input type="checkbox" id="size8CB" value="size8" onchange="showItem()"class="switch">
            <label for="size8CB"> size8 </label><br>
            
            <input type="checkbox" id="size9CB" value="size9" onchange="showItem()"class="switch">
            <label for="size9CB">size9 </label><br>
             
            <input type="checkbox" id="size10CB" value="size10" onchange="showItem()"class="switch">
            <label for="size10CB"> size10</label><br>
            
            <input type="checkbox" id="size11CB" value="size11" onchange="showItem()"class="switch">
            <label for="size11CB">size11 </label><br>
           
            <input type="checkbox" id="size12CB" value="size12" onchange="showItem()"class="switch">
            <label for="size12CB"> size12 </label><br>
     </div>

        <label for="minPrice">Min Price:</label>
        <input id="minPrice" min="0" onchange="showItem()" type="number"><br>
        
        <label for="maxPrice">Max Price:</label>
        <input id="maxPrice" min="0" onchange="showItem()" type="number"><br>
        


        
        </div>
  
        <div id ="right">
            <div id = "sorting">
                <div class="checkbox-wrapper-11">
                    <input id="02-11" type="checkbox" name="r" value="2">
                    <label for="02-11">Filter</label>
                  </div>
                
                
            <!-- <div class="custom-select"></div> -->
          <div id="dropDown">
           
            <div class="custom-dropdown big">
                <select id="sortOrder" onchange="showItem()">
                    <option value="asc" selected id ="LTH">Lowest to Highest</option>
                    <option value="desc" id ="HTL">Highest to Lowest</option>
                </select>
            </div>
        </div>

        </div>
        <div id="item"></div>
    
    </div>
 </div>
 <script src="../js/radio_item.js" defer></script>
    <script src="../js/auto_item.js" defer></script>
    <!-- <script src="getData.js" defer></script> -->
</body>
</html>