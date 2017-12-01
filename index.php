<!DOCTYPE html>
<html>
  <?php include("incl/page-head.php"); ?>	


<body class="recipe-index">
<!--
    <div class="pseudo-header">
        <a href="/"><img src="../../img/noun_671242_cc.png" alt=""></a>        
    </div>
-->

    <div class="wrap">

        <div class="scope" id="scope">
            
            <!-- recipe categories (hamburger menu) -->
<!--
			<div id="dd" class="wrapper-dropdown" tabindex="1">
                <div class="menu-category">
                    <a href="#">
                        <div class="menu">
                            <span class="menu-item"></span>
                            <span class="menu-item"></span>
                            <span class="menu-item"></span>
                        </div>    
                    </a>
                </div>
                <ul id="recipe-cats" class="dropdown wrapper-dropdown">
                    <li data-attr-value = "breakfast">Breakfast</li>
                    <li data-attr-value = "beverages">Beverages</li>
                    <li data-attr-value = "appetizers">Appetizers</li>
                    <li data-attr-value = "breads">Breads</li>
                    <li data-attr-value = "salads">Salads</li>
                    <li data-attr-value = "soups">Soups</li>
                    <li data-attr-value = "sandwiches">Sandwiches</li>
                    <li data-attr-value = "seafood">Seafood</li>
                    <li data-attr-value = "meat">Meat</li>
                    <li data-attr-value = "poultry">Poultry</li>
                    <li data-attr-value = "pasta">Pasta</li>
                    <li data-attr-value = "side-dishes">Side Dishes</li>
                    <li data-attr-value = "salsas">Salsas</li>
                    <li data-attr-value = "fruits">Fruits</li>
                    <li data-attr-value = "condiments">Condiments</li>
                    <li data-attr-value = "desserts">Desserts</li>
                    <li data-attr-value = "" class="null">–</li>
                </ul>
            </div>
-->
            
            <!-- best products (equalizer hamburger menu) -->            
<!--
            <div class="menu-products">
                <a href="#">
                    <div class="menu">
                        <span class="menu-item"></span>
                        <span class="menu-item"></span>
                        <span class="menu-item"></span>
                    </div>    
                </a>
            </div>
-->
            
            <!-- recipe search field -->
            <input type="search" id="instafilta-field" placeholder="Type to search" autofocus>

            <section id="breakfast" data-instafilta-category="breakfast">
                <h1 class="section-title">Breakfast</h1>
                <ul class="section-list">
                    <li class="section-item"><a href="recipe/breakfast/blueberry-pancakes.php">Blueberry Buttermilk Pancakes</a></li>
                    <li class="section-item"><a href="recipe/breakfast/classic-pancakes.php">Classic Pancakes</a></li>
                    <li class="section-item"><a href="recipe/breakfast/dutch-baby.php">Dutch Baby</a></li>
                    <li class="section-item"><a href="recipe/breakfast/french-toast.php">French Toast</a></li>
                    <li class="section-item"><a href="recipe/breakfast/german-pancake.php">German Pancake</a></li>
                </ul>
            </section>
        
            <section id="beverages" data-instafilta-category="beverages">
                <h1 class="section-title">Beverages</h1>
                <ul class="section-list">
                    <li class="section-item"><a href="recipe/beverages/bitter-pill.php">Bitter Pill</a></li>
                    <li class="section-item"><a href="recipe/beverages/bloody-mary.php">Bloody Mary</a></li>
                    <li class="section-item"><a href="recipe/beverages/boulevardier.php">Boulevardier</a></li>
                    <li class="section-item"><a href="recipe/beverages/division-bell.php">Division Bell</a></li>
                    <li class="section-item"><a href="recipe/beverages/gin-tonic.php">Gin and Tonic</a></li>
                    <li class="section-item"><a href="recipe/beverages/jalepeno-lemonade.php">Jalapeño Leomonade</a></li>
                    <li class="section-item"><a href="recipe/beverages/left-bank.php">Left Bank Martini</a></li>
                    <li class="section-item"><a href="recipe/beverages/margarita.php">Margarita</a></li>
                    <li class="section-item"><a href="recipe/beverages/orange-julius.php">Orange Julius</a></li>
                    <li class="section-item"><a href="recipe/beverages/sangria.php">Sagnria</a></li>
                    <li class="section-item"><a href="recipe/beverages/sazerac.php">Sazerac</a></li>
                    <li class="section-item"><a href="recipe/beverages/strawberry-lime-liquados.php">Strawberry-Lime Liquados</a></li>
                    <li class="section-item"><a href="recipe/beverages/last-word.php">The Last Word</a></li>
                    <li class="section-item"><a href="recipe/beverages/toronto-cocktail.php">Toronto Cocktail</a></li>
                    <li class="section-item"><a href="recipe/beverages/white-lady.php">White Lady</a></li>
                    <li class="section-item"><a href="recipe/beverages/whiskey-sour.php">Whiskey Sour</a></li>
                </ul>
            </section>
        
            <section id="appetizers" data-instafilta-category="appetizers">
                <h1 class="section-title">Appetizers</h1>
                <ul class="section-list">
                    <li class="section-item"><a href="recipe/appetizers/bbq-weenies.php">BBQ Weenies</a></li>
                    <li class="section-item"><a href="recipe/appetizers/buffalo-dip.php">Buffalo Chicken Dip</a></li>
                    <li class="section-item"><a href="recipe/appetizers/black-bean-hummus.php">Black Bean Hummus</a></li>
                    <li class="section-item"><a href="recipe/appetizers/guacamole.php">Chunky Guacamole</a></li>
                    <li class="section-item"><a href="recipe/appetizers/diablitos.php">Diablitos</a></li>
                    <li class="section-item"><a href="recipe/appetizers/hummus.php">Hummus</a></li>
                    <li class="section-item"><a href="recipe/appetizers/tex-mex-dip.php">Tex-Mex Dip</a></li>
                </ul>
            </section>
        
            <section id="breads" data-instafilta-category="breads">
                <h1 class="section-title">Breads</h1>
                <ul class="section-list">
                    <li class="section-item"><a href="recipe/breads/buttermilk-biscuits.php">Buttermilk Biscuits</a></li>
                </ul>
            </section>
        
            <section id="salads" data-instafilta-category="salads">
                <h1 class="section-title">Salads</h1>
                <ul class="section-list">
                    <li class="section-item"><a href="recipe/salads/lemon-vinaigrette.php">Lemon Vinaigrette</a></li>  
                </ul>
            </section>
        
            <section id="soups" data-instafilta-category="soups">
                <h1 class="section-title">Soups</h1>
                <ul class="section-list">
                    <li class="section-item"><a href="recipe/soups/anasazi-squash.php">Anasazi Squash Soup</a></li>
                    <li class="section-item"><a href="recipe/soups/cauliflower.php">Cauliflower Soup</a></li>
                    <li class="section-item"><a href="recipe/soups/dill-omacka.php">Dill Omacka</a></li>
                    <li class="section-item"><a href="recipe/soups/fish-chowder.php">Fish Chowder</a></li>
                    <li class="section-item"><a href="recipe/soups/mexican-lime.php">Sopa de Lima</a></li>
                    <li class="section-item"><a href="recipe/soups/split-pea-caraway.php">Split Pea Soup with Caraway</a></li>
                    <li class="section-item"><a href="recipe/soups/split-pea-rosemary.php">Split Pea Soup with Rosemary</a></li>
                    <li class="section-item"><a href="recipe/soups/tortilla.php">Tortilla Soup</a></li>
                    <li class="section-item"><a href="recipe/soups/tortilla-picante.php">Tortilla Picante Soup</a></li>
                    <li class="section-item"><a href="recipe/soups/tuscan.php">Tuscan Soup</a></li>
                </ul>
            </section>
        
            <section id="sandwiches" data-instafilta-category="sandwiches">
                <h1 class="section-title">Sandwiches</h1>
                <ul class="section-list">
                    <li class="section-item"><a href="recipe/sandwiches/basil-mayonnaise.php">Basil Mayonnaise</a></li>
                    <li class="section-item"><a href="recipe/sandwiches/portobello-burger.php">Portobello Burger</a></li>
                </ul>
            </section>
        
            <section id="seafood" data-instafilta-category="seafood">
                <h1 class="section-title">Main Courses: Seafood</h1>
                <ul class="section-list">
                    <li class="section-item"><a href="recipe/seafood/marinated-shrimp.php">Best-Ever Marinated Shrimp</a></li>
                    <li class="section-item"><a href="recipe/seafood/tuna-salad.php">Made Right Tuna Salad</a></li>
                </ul>
            </section>
        
            <section id="meat" data-instafilta-category="meat">
                <h1 class="section-title">Main Courses: Meat</h1>
                <ul class="section-list">
                    <li class="section-item"><a href="recipe/meat/adobo-sirloin.php">Adobo Sirloin</a></li>
                    <li class="section-item"><a href="recipe/meat/brown-sugar-bourbon.php">Brown Sugar Bourbon Steak Tips</a></li>
                </ul>
            </section>
        
            <section id="poultry" data-instafilta-category="poultry">
                <h1 class="section-title">Main Courses: Poultry</h1>
                <ul class="section-list">
                    <li class="section-item"><a href="recipe/poultry/chicken-stovetop.php">Chicken on Stovetop</a></li>
                    <li class="section-item"><a href="recipe/poultry/turkey-gingersnap.php">Brined Turkey with Gingersnap Gravy</a></li>
                </ul>
            </section>
        
            <section id="pasta" data-instafilta-category="pasta">
                <h1 class="section-title">Main Courses: Pasta</h1>
                <ul class="section-list">
                    <li class="section-item"><a href="recipe/pasta/bolognese.php">Ragù alla Bolognese</a></li>
                </ul>
            </section>
        
        <!--
            <section data-instafilta-category="vegetarian">
                <h1 class="section-title">Main Courses: Vegetarian</h1>
                <ul class="section-list">
                    <li class="section-item">/li>
                </ul>
            </div>
        -->
        
            <section id="side-dishes" data-instafilta-category="side-dishes">
                <h1 class="section-title">Side Dishes</h1>
                <ul class="section-list">
                    <li class="section-item"><a href="recipe/sides/drunken-pintos.php">Drunken Pintos</a></li>
                    <li class="section-item"><a href="recipe/sides/green-poblano-rice.php">Green Poblano Rice</a></li>
                    <li class="section-item"><a href="recipe/sides/potato-cucumber-salad.php">New Potato and Cucumber Salad</a></li>
                </ul>
            </section>
        
            <section id="salsas" data-instafilta-category="salsas">
                <h1 class="section-title">Salsas</h1>
                <ul class="section-list">
                    <li class="section-item"><a href="recipe/salsas/black-bean-corn-salsa.php">Black Bean and Corn Salsa</a></li>
                </ul>
            </section>
        
            <section id="fruits" data-instafilta-category="fruits">
                <h1 class="section-title">Fruits</h1>
                <ul class="section-list">
                    <li class="section-item"><a href="recipe/fruits/fruit-tequila-lime.php">Fresh Fruit with Tequila-Lime Syrup</a></li>
                </ul>
            </section>
        
            <section id="condiments" data-instafilta-category="condiments">
                <h1 class="section-title">Condiments, Miscellaneous</h1>
                <ul class="section-list">
                    <li class="section-item"><a href="recipe/condiments/creole-sauce.php">Creole Sauce</a></li>
                </ul>
            </section>
        
            <section id="desserts" data-instafilta-category="desserts">
                <h1 class="section-title">Desserts</h1>
                <ul class="section-list">
                    <li class="section-item"><a href="recipe/desserts/cherry-cheesecake.php">Cherry-Topped Cheesecake</a></li>
                </ul>
            </section>

        </div><!--#scope-->
    </div><!--.wrap-->
    
    <?php include("incl/page-foot.php"); ?>	
    
</body>
</html>
