    <link rel="stylesheet" href="css/header.css">

<header class="header">

    <a href="#" class="logo">RESTO  <i class="fas fa-shopping-basket"></i>  MARKET</a>
    

	<nav class="navbar">
        <?php
            
            foreach ($categories as $categorie)  {
                print  '<a href='.$categorie['lien'].'>'.$categorie['nom'].'</a>';
			}

        ?>
    </nav>
	
    <div class="icons">
        <a href="ShopNow.php" class="fas fa-home" id="login-btn"></a>
        <div class="fas fa-search" id="search-btn"></div>
        <a href="panier.php" class="fas fa-shopping-cart" id="cart-btn"></a>
        <a href="form.php" class="fas fa-user" id="login-btn"></a>
        <div class="fas fa-bars" id="menu-btn"></div>
    </div>

    <form class="search-form" action="prod.php" method="POST">
        <input type="search" class="form-cntrol" placeholder="search here..." aria-label="search" name="search">
        <button class=" btn-outline-success" type="submit">search</button>
		
    </form>

    

    

</header>