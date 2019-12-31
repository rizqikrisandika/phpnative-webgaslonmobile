<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Gaslon</title>
  <!-- materialize icons, css & js -->
  <link type="text/css" href="assets/css/materialize.min.css" rel="stylesheet">
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  <link type="text/css" href="assets/css/styles.css" rel="stylesheet">
  <script type="text/javascript" src="assets/js/materialize.min.js"></script>
  <link type="text/css" href="assets/css/pwafirecard.css" rel="stylesheet">
  
</head>
<body class="grey lighten-4">

  <!-- top nav -->
  <nav class="z-depth-0">
    <div class="nav-wrapper container">
      <span class="right"><a href="index.php">Gaslon</span></a>
      <span class="left grey-text text-darken-1">
        <i class="material-icons sidenav-trigger" data-target="side-menu">menu</i>
      </span>
    </div>
  </nav>

  <!-- side nav -->
  <ul id="side-menu" class="sidenav side-menu">
    <li><a class="subheader">
      <img src="assets/img/icon/profil.png" alt="recipe thumb">
      <img style="height: 24px;" src="assets/img/icon/wallet.png" alt="recipe thumb"> RP. 100.000
      <br>FARIDA</a></li>
    <li><a href="home.html" class="waves-effect">Home</a></li>
    <li><a href="about.html" class="waves-effect">Order</a></li>
    <li><a href="about.html" class="waves-effect">Settings</a></li>
    <li><a href="contact.html" class="waves-effect">
      <i class="material-icons">mail_outline</i>Contacts Us</a>
    </li>
    <li><a href="about.html" class="waves-effect">Help</a></li>
    <li><a href="about.html" class="waves-effect">Logout</a></li>
  </ul>

  <!-- recipes -->
  <!--<div class="recipes container grey-text text-darken-1">
    <div class="card-panel recipe white row">
      <img src="img/dish.png" alt="recipe thumb">
      <div class="recipe-details">
        <div class="recipe-title">Store</div>
      </div>
    </div>
	
    <div class="card-panel recipe white row">
      <img src="img/6.png" alt="recipe thumb">
      <div class="recipe-details">
        <div class="recipe-title">Order List</div>
      </div>
    </div>
    <div class="card-panel recipe white row">
      <img src="img/dish.png" alt="recipe thumb">
      <div class="recipe-details">
        <div class="recipe-title">GG-Pay</div> 
      </div> 
    </div>
    <div class="card-panel recipe white row">
      <img src="img/dish.png" alt="recipe thumb">
      <div class="recipe-details">
        <div class="recipe-title">Live Chat</div> 
      </div> 
    </div>
  </div> -->
  <div class="parent-pwafire">
  
    <div class="row">
     <div class="profil">
       <img src="assets/img/icon/profil.png" alt="recipe thumb">
       <h3 style="text-align: center;">Farida</h3>
     </div>
      <div class="col-lg-4 col-sm-12">
       <div class="card hovercard">
       <div class="avatar">
         <img src="assets/img/icon/shop.svg" alt="recipe thumb"></div>
         <div class="info">
         <div class="title">Store</div>
         </div>
       </div>
       <div class="card hovercard">
       <div class="avatar">
         <img src="assets/img/icon/cart.svg" alt="recipe thumb">
       </div>
       <div class="info">
         <div class="title">Order List</div>
       </div>
       </div>
       <div class="card hovercard">
         <div class="avatar">
           <img src="assets/img/icon/wallet.svg" alt="recipe thumb">
           </div>
           <div class="info">
           <div class="title">GG-Pay</div>
           </div>
         </div>
       </div>
   
       <div class="col-lg-4 col-sm-12">
         <div class="card hovercard">
         <div class="avatar">
           <img src="assets/img/icon/chat.svg" alt="recipe thumb"></div>
           <div class="info">
           <div class="title">Live Chat</div>
           </div>
         </div>
         <div class="card hovercard">
         <div class="avatar">
           <img src="assets/img/icon/star.svg" alt="">
         </div>
         <div class="info">
           <div class="title">Favorite</div>
         </div>
         </div>
         <div class="card hovercard">
           <div class="avatar">
             <img src="assets/img/icon/history.svg" alt="recipe thumb">
             </div>
             <div class="info">
             <div class="title">History</div>
             </div>
           </div>
         </div>
     </div>
  </div>
  <!-- add recipe side nav -->
  <div id="side-form" class="sidenav side-form">
    <form class="add-recipe container section">
    
      <div class="divider"></div>
      <div class="input-field">
        <input placeholder="Email" type="email" class="validate">
        <label for="title">Recipe Title</label>
      </div>
      <div class="input-field">
        <input placeholder="*****" type="password" class="validate">
        <label for="ingredients">Ingredients</label>
      </div>
      <div class="input-field center">
        <button class="btn-small">Add</button>
      </div>
    </form>
  </div>

  <script src="assets/js/ui.js"></script>
</body>
</html>