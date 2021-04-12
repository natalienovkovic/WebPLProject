<!--- 
Recipe page, showing top rated recipe 
Authors: Noah Dela Rosa (nd8ef) and Natalie Novkovic (nn4bk)-->

<?php
    require('connectdb.php');
?>

<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">  
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="author" content="Dela Rosa, Novkovic">
<meta name="description" content="Landing page for our recipe db">      
<title>Recipe: Shakshuka</title>
</head>
<body>

    <?php include 'navbar.php' ?>

    <!-- Class for the recipe header with the name of the recipe and the contributer, as well as the photo of the recipe-->
    <div class="recipe header">
        <h1>Shakshuka <p id='heart' style='display:none;'>&hearts;</p></h1>
        <h3>Recipe Created By: <a href="https://downshiftology.com/recipes/shakshuka/"> Lisa Bryan </a> </h3>
    </div>
    
<!-- Image of the final recipe -->
<div class='details'>
    <div class='photo'>
        <img id="ex" src="https://i2.wp.com/www.downshiftology.com/wp-content/uploads/2018/12/Shakshuka-19-500x500.jpg" alt="Shakshuka"><!--https://downshiftology.com/recipes/shakshuka/-->
    </div>
    <!-- Class for the recipe information-->
    <div class="recipe info"> 
        <h4> Category: Vegetarian</h4>
        <h4> Estimated Cook Time: 10 minutes </h4>
        <h4> Estimated Prep Time: 20 minutes </h4>
        <h4> Estimated Total Time: 30 minutes </h4>
        <h4> Servings: 6 </h4>
        <h4> Change portion</h4>
        <div class="portionbuttons">
            <input class='btn' type="button" value="0.5" id="portionhalf">
            <input class='btn' type="button" value="1" id="portion1">
            <input class='btn' type="button" value="2" id="portion2">
            <input class='btn' type="button" value="3" id="portion3">
        </div>
        
    </div>
</div>

    <!-- Class for the recipe page functions, such as favorite and print/download-->
    <div class="recipe functions"> 
        <h4 onclick="favorite()"> <a>Favorite</a></h4>
        <h4 onclick="prnt()"> Print/Download Recipe </h4>

    </div>

    <!-- Functions for favoriting and printing out the recipe -->
    <script>
        function favorite(){
            var x = document.getElementById("heart");
            x.style.display === "none" ? x.style.display = "inline" : x.style.display = "none";
        }
        function prnt(){
            window.print();
        }
        
        // document.getElementById("portion").addEventListener("input", portion);
        
        // let psize = document.getElementById("portion");
        // psize.addEventListener('click', portion)

        
    </script>

    <!-- Class for the recipe ingredients-->
    <div class="recipe ingredients" id="ingredients"> 
        <h3> Ingredients: </h3>
        <p> 1 medium onion, diced <br/>
        1 red bell pepper, seeded and diced  <br/>
        4 garlic cloves, finely chopped  <br/>
        2 tsp paprika  <br/>
        1 tsp cumin  <br/>
        0.25 tsp chili powder  <br/>
        1 28-ounce can whole peeled tomatoes  <br/>
        6 large eggs  <br/>
        Salt and pepper, to taste  <br/>
        1 small bunch fresh cilantro, chopped  <br/>
        1 small bunch fresh parsley, chopped  <br/>
        </p>
    </div>

    <!-- Functions to allow users to change the amount of the recipe they want. Updates ingredients as well. -->
    <script>
        document.getElementById('portionhalf').addEventListener("click", portionfunchalf);
        document.getElementById('portion1').addEventListener("click", portionfuncone);
        document.getElementById('portion2').addEventListener("click", portionfunctwo);
        document.getElementById('portion3').addEventListener("click", portionfuncthree);
        var onion = 1.0;
        var bpepper = 1.0;
        var garlic = 4.0;
        var paprika = 2.0;
        var cumin = 1.0;
        var cpowder = 1/4;
        var tomatoes = 1.0;
        var eggs = 6.0;
        var cilantro = 1.0;
        var parsley = 1.0;
        function portionfunchalf() {//couldn't figure out how to add an event listener to multiple buttons and pass it args based on what button was pressed. Ended up just copying the function four times to get it to work. Considering improving this in the future
            // console.log("running portion...");
            // console.log(serving);
            var serving = 0.5;
            var temponion = onion * serving;
            var tempbpepper = bpepper * serving;
            var tempgarlic = garlic * serving;
            var temppaprika = paprika * serving;
            var tempcumin = cumin * serving;
            var tempcpowder = cpowder * serving;
            var temptomatoes = tomatoes * serving;
            var tempeggs = eggs * serving;
            var tempcilantro = cilantro * serving;
            var tempparsley = parsley * serving;
            console.log(parsley);
            document.getElementById("ingredients").innerHTML = '<h3> Ingredients: </h3><p>' + temponion + " medium onion, diced <br/>" + tempbpepper + " red bell pepper, seeded and diced  <br/>" + tempgarlic + " garlic cloves, finely chopped  <br/>" + temppaprika + " tsp paprika  <br/>" + tempcumin + " tsp cumin  <br/>" + tempcpowder + " tsp chili powder  <br/>" + temptomatoes + " 28-ounce can whole peeled tomatoes  <br/>" + tempeggs + " large eggs  <br/>" + "Salt and pepper, to taste  <br/>" + tempcilantro + " small bunch fresh cilantro, chopped  <br/>" + tempparsley + " small bunch fresh parsley, chopped  <br/></p>";
    }
    function portionfuncone(){
        // console.log("running portion...");
        // console.log(serving);
        var serving = 1;
        var temponion = onion * serving;
        var tempbpepper = bpepper * serving;
        var tempgarlic = garlic * serving;
        var temppaprika = paprika * serving;
        var tempcumin = cumin * serving;
        var tempcpowder = cpowder * serving;
        var temptomatoes = tomatoes * serving;
        var tempeggs = eggs * serving;
        var tempcilantro = cilantro * serving;
        var tempparsley = parsley * serving;
        console.log(parsley);
        document.getElementById("ingredients").innerHTML = '<h3> Ingredients: </h3><p>' + temponion + " medium onion, diced <br/>" + tempbpepper + " red bell pepper, seeded and diced  <br/>" + tempgarlic + " garlic cloves, finely chopped  <br/>" + temppaprika + " tsp paprika  <br/>" + tempcumin + " tsp cumin  <br/>" + tempcpowder + " tsp chili powder  <br/>" + temptomatoes + " 28-ounce can whole peeled tomatoes  <br/>" + tempeggs + " large eggs  <br/>" + "Salt and pepper, to taste  <br/>" + tempcilantro + " small bunch fresh cilantro, chopped  <br/>" + tempparsley + " small bunch fresh parsley, chopped  <br/></p>";
    }
    function portionfunctwo(){
        // console.log("running portion...");
        // console.log(serving);
        var serving = 2;
        var temponion = onion * serving;
        var tempbpepper = bpepper * serving;
        var tempgarlic = garlic * serving;
        var temppaprika = paprika * serving;
        var tempcumin = cumin * serving;
        var tempcpowder = cpowder * serving;
        var temptomatoes = tomatoes * serving;
        var tempeggs = eggs * serving;
        var tempcilantro = cilantro * serving;
        var tempparsley = parsley * serving;
        console.log(parsley);
        document.getElementById("ingredients").innerHTML = '<h3> Ingredients: </h3><p>' + temponion + " medium onion, diced <br/>" + tempbpepper + " red bell pepper, seeded and diced  <br/>" + tempgarlic + " garlic cloves, finely chopped  <br/>" + temppaprika + " tsp paprika  <br/>" + tempcumin + " tsp cumin  <br/>" + tempcpowder + " tsp chili powder  <br/>" + temptomatoes + " 28-ounce can whole peeled tomatoes  <br/>" + tempeggs + " large eggs  <br/>" + "Salt and pepper, to taste  <br/>" + tempcilantro + " small bunch fresh cilantro, chopped  <br/>" + tempparsley + " small bunch fresh parsley, chopped  <br/></p>";
    }
    function portionfuncthree(){
        // console.log("running portion...");
        // console.log(serving);
        var serving = 3;
        var temponion = onion * serving;
        var tempbpepper = bpepper * serving;
        var tempgarlic = garlic * serving;
        var temppaprika = paprika * serving;
        var tempcumin = cumin * serving;
        var tempcpowder = cpowder * serving;
        var temptomatoes = tomatoes * serving;
        var tempeggs = eggs * serving;
        var tempcilantro = cilantro * serving;
        var tempparsley = parsley * serving;
        console.log(parsley);
        document.getElementById("ingredients").innerHTML = '<h3> Ingredients: </h3><p>' + temponion + " medium onion, diced <br/>" + tempbpepper + " red bell pepper, seeded and diced  <br/>" + tempgarlic + " garlic cloves, finely chopped  <br/>" + temppaprika + " tsp paprika  <br/>" + tempcumin + " tsp cumin  <br/>" + tempcpowder + " tsp chili powder  <br/>" + temptomatoes + " 28-ounce can whole peeled tomatoes  <br/>" + tempeggs + " large eggs  <br/>" + "Salt and pepper, to taste  <br/>" + tempcilantro + " small bunch fresh cilantro, chopped  <br/>" + tempparsley + " small bunch fresh parsley, chopped  <br/></p>";
    }
    </script>

      <!-- Class for the recipe instructions-->
    <div class="recipe instructions "> 
        <h3> Instructions: </h3>
        <p>
        1. Heat olive oil in a large sauté pan on medium heat. Add the chopped bell pepper and onion and cook for 5 minutes or until the onion becomes translucent. <br/>
        2. Add garlic and spices and cook an additional minute. <br/> 
        3. Pour the can of tomatoes and juice into the pan and break down the tomatoes using a large spoon. Season with salt and pepper and bring the sauce to a simmer. <br/>
        4. Use your large spoon to make small wells in the sauce and crack the eggs into each well. Cover the pan and cook for 5-8 minutes, or until the eggs are done to your liking. <br/>
        5. Garnish with chopped cilantro and parsley. <br/> 
        </p>
    </div>

    <!-- Comment section, code acquired from POTD4 with modifications-->
    <div class="comment comment-form"> 
        <h3> Leave a comment!</h3>
        <form>
            <label>First Name: </label>
            <input type="text" name="fname" id='first'/> <br/>
            <label>Last Name:</label>
            <input type="text" name="lname" id='last'/> <br/>
            <label>Comment: </label>
            <textarea id='comment' rows="5" cols="40" name="comment"></textarea> <br/>
             
            <!-- <input id='sbtn' type="submit" value="Submit" class="btn" onsubmit="comment()"/> -->
            <h4 id='commentbtn' onclick="comment()">Comment</h4>
          </form>
    </div>

    <h3 class='commentSection'>Comments from others:</h3>  

    <div class='comments' id='csection'></div>

    <!-- Script for the comment section. Not fully implemented as it needs a database to store comments and such -->
    <script>
        function comment(){
            if(document.getElementById('comment').value == ""){
                alert("You have to type something in order to leave a comment!");
                return;
            }
            const commentSection = document.createElement('div');
            commentSection.className = 'comment';
            const submittedComment = document.createTextNode(document.getElementById("comment").value);
            const label = document.createElement("h4");
            var name = 'Anonymous said:';
            if(document.getElementById('first').value == ''){
                label.innerText = name;    
                commentSection.appendChild(label);
            }
            else{
                name = document.getElementById('first').value + " " + document.getElementById('last').value + " said:";
                label.innerText = name;
                commentSection.appendChild(label);
            }
            commentSection.appendChild(submittedComment);
            commentSection.appendChild(document.createElement("br"));
            var d = new Date();
            var year = d.getFullYear();
            var months = ["Jan", "Feb", "Mar", "Apr", "May", "Jun", "Jul", "Aug", "Sep", "Oct", "Nov", "Dec"];
            var m = months[d.getMonth()];
            var day = d.getDate();
            var hr = d.getHours();
            var min = d.getMinutes();
            console.log(day);
            if (min < 10) {
                min = "0" + min;
            }
            const time = document.createElement("p");
            time.innerText = hr + ":" + min + " on " + m + " " + day + " " + year;
            time.className = "timeposted";
            commentSection.appendChild(time);
            const currentDiv = document.getElementById("csection");
            document.body.insertBefore(commentSection, currentDiv);
        }
    </script>

</body>