<!--- 
Home Page 
Authors: Noah Dela Rosa (nd8ef) and Natalie Novkovic (nn4bk)-->

<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">  
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="author" content="Dela Rosa, Novkovic">
<meta name="description" content="Landing page for our recipe db">      
<title>Home: SimpleEats</title>

<!--Link to our stylesheet we created-->
<link rel='stylesheet' href="styles.css">

<!-- We used bootstrap for the navigation bar at
   https://getbootstrap.com/docs/4.0/components/navbar/ -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

</head>
<body>
<!-- Navigation Bar: 
   https://getbootstrap.com/docs/4.0/components/navbar/ -->
    <nav class="navbar navbar-expand-lg navbar-light">
        <a class='navbar-brand'>SimpleEats</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse justify-content-end" id="collapsibleNavbar">
            <ul class='navbar-nav mr-auto'>
                <li class='nav-item active'>
                    <a class='nav-link' href='home.php'>Home<span class='sr-only'>(current)</span></a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                      Recipes
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                      <a class="dropdown-item" href="#">Vegetarian</a>
                      <a class="dropdown-item" href="#">Vegan</a>
                      <a class="dropdown-item" href="#">Dairy-free</a>
                      <a class="dropdown-item" href="#">Low-budget</a>
                      <a class="dropdown-item" href="#">Meat Lovers</a>
                      <a class="dropdown-item" href="#">Dessert</a>
                    </div>
                  </li>
                <li class='nav-item'>
                    <a class='nav-link' href='login.php'>Login</a>
                </li>
                <li class='nav-item'>
                    <a class='nav-link' href='#'>Contact Us</a>
                </li>
                <li class='nav-item'>
                    <a class='nav-link' href='#'>About</a>
                </li>
            </ul>
            <form class="form-inline my-2 my-lg-0">
                <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
                <button class="btn btn-outline-dark my-2 my-sm-0" type="submit">Search</button>
            </form>
        </div>
    </nav>  

    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js" integrity="sha384-b/U6ypiBEHpOf/4+1nzFpr53nxSS+GLCkfwBdFNTxtclqqenISfwAzpKaMNFNmj4" crossorigin="anonymous"></script>
    <!-- Always remember to call the above files first before calling the bootstrap.min.js file -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/js/bootstrap.min.js" integrity="sha384-h0AbiXch4ZDo7tp9hKZ4TsHbi047NrKGLO3SEJAg45jXxnGIfYzk4Si90RDIqNm1" crossorigin="anonymous"></script>

    <!-- Code we created for the jumbotron which features our top rated recipe on the website 
    -->
    <div class="jtron">
        <div class="jtron-image">
          <img id="ex" src="https://i2.wp.com/www.downshiftology.com/wp-content/uploads/2018/12/Shakshuka-19-500x500.jpg" alt="Shakshuka"> <!--https://downshiftology.com/recipes/shakshuka/-->
          <h4>Shakshuka</h4> <!--- Recipe Acquired From: https://www.bbcgoodfood.com/recipes/chorizo-mozzarella-gnocchi-bake-->
        </div>
        <div class="jtron-text">
          <h1>Top-Rated Recipe</h1>
          <p>This tasty, yet simple top-Rated recipe features delicious ingredients, creating the perfect dish for the whole family.</p>
          <input style='margin-left:7.5vw;' type="submit" value="View Recipe" class="btn" onclick="window.location.href='recipe.php'"/> <!--- DOM event used to redirect to another page -->
        </div>
      </div>

      <!-- Trending now section: place for people to find trending recipies people are loving currently, easy access to the user since it's the first thing they see -->
      <div class="trending">
        <h1>Trending Now!</h1>
        
        <div id='popular'> <!-- Carousel for trending recipes-->
          <div class='carousel-recipe'>
            <h2>Tuscan Chicken Skillet</h2>
            <img id='#recipe-1' src='https://food.fnr.sndimg.com/content/dam/images/food/fullset/2018/9/26/0/FNK_Tuscan-Chicken-Skillet_H2_s4x3.jpg.rend.hgtvcom.826.620.suffix/1537973085542.jpeg'>
            <input type="submit" value="View Recipe" class="btn" /> 
          </div>
          <div class='carousel-recipe'>
            <h2>Blueberry Coffee Cake Muffins</h2>
            <img id='#recipe-2' src='https://food.fnr.sndimg.com/content/dam/images/food/fullset/2006/9/12/0/ig0706_muffins.jpg.rend.hgtvcom.966.725.suffix/1449692683261.jpeg'>
            <input type="submit" value="View Recipe" class="btn" /> 
          </div>
          <div class='carousel-recipe'>
            <h2>Oven-baked Salmon</h2>
            <img id='#recipe-3' src='https://food.fnr.sndimg.com/content/dam/images/food/fullset/2011/7/26/1/CN1B01_oven-baked-salmon_s4x3.jpg.rend.hgtvcom.966.725.suffix/1382545141944.jpeg'>
            <input type="submit" value="View Recipe" class="btn" /> 
          </div>
          <div class='carousel-recipe'>
            <h2>Key Lime Pie</h2>
            <img id='#recipe-4' src="https://food.fnr.sndimg.com/content/dam/images/food/fullset/2019/9/3/0/FNK_the-best-key-lime-pie_H_s4x3.jpg.rend.hgtvcom.826.620.suffix/1567536810218.jpeg">
            <input type="submit" value="View Recipe" class="btn" /> 
          </div>
          <div class='carousel-recipe'>
            <h2>Korean Fried Chicken</h2>
            <img id='#recipe-5' src="https://food.fnr.sndimg.com/content/dam/images/food/fullset/2020/12/21/0/FN_Korean-Fried-Chicken-H1_s4x3.jpg.rend.hgtvcom.826.620.suffix/1608578883590.jpeg">
            <input type="submit" value="View Recipe" class="btn" /> 
          </div>
        </div>
      </div>
    

</body>