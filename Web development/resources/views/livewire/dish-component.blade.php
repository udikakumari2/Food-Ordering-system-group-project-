<body>
    <!--Header section start-->
    <header>
        <a href="#" class="logo"><i class="fa fa-utensils"></i>Foodies.</a>
        <nav class="navbar">
            <a href="{{route('home.index')}}">Home</a>
            <a class="active" href="{{route('dish')}}">dishes</a>
            <a href="#" onclick="openAbout()">about</a>
            <a class="feed" id="feedback">feedback</a>
            <a href="{{route('contact')}}" >Contact us</a>
            <a href="{{route('addtocart1')}}">Orders</a>
        </nav>
        <div class="icons">
            <i class="fas fa-bars" id="menu-bars"></i>
            <i class="fas fa-search" id="search-icon"></i>
            <a href="#" class="fas fa-heart"></a>
            <a href="#" class="fas fa-shopping-cart"></a>
            <i class="fa fa-user" aria-hidden="true"></i>
            <a href="login.html" class="fas fa-sign-in-alt"></a>
            
        </div>

         <!--search form-->
    <form action="" id="search-form">
        <input type="search" placeholder="search here..." name="" id="search-box">
        <label for="search-box" class="fas fa-search"></label>
        <i class="fas fa-times" id="close1"></i>
    </form>
    <!--Search Form ends-->
    </header>


<!--Rating Form starts-->

<div class="back">
    <div class="container1" id="co1">
        <div class="post">
            <div class="text">Thanks for Rating us!</div>
            <div class="edit">Edit</div>
            <i class="fas fa-times" id="close"></i>
    
        </div>
        <div class="star-widget">
        <input type="radio" name="rate" id="rate-5">
        <label for="rate-5" class="fas fa-star"></label>
        <input type="radio" name="rate" id="rate-4">
        <label for="rate-4" class="fas fa-star"></label>
        <input type="radio" name="rate" id="rate-3">
        <label for="rate-3" class="fas fa-star"></label>
        <input type="radio" name="rate" id="rate-2">
        <label for="rate-2" class="fas fa-star"></label>
        <input type="radio" name="rate" id="rate-1">
        <label for="rate-1" class="fas fa-star"></label>
        <form action="#">
            <i class="fas fa-times" id="close"></i>
            <h4></h4>
            <div class="textarea">
                <textarea cols="30" placeholder="Describe your experience"></textarea>
    
            </div>
            
            <div class="btn">
                <button type="submit">Post</button>
            </div>
        </form>
        </div>    
    </div>
    </div>
<!--Rating form ends-->
<section>
    <h3>Dishes</h3>
    </section>
<section class="barb" id="biryani">
    <h1 class="barbeque">Dishes</h1>
    <hr class="line"> 
    <div class="box-container">
    @foreach($Post as $Posts)
    <div class="box">
        <a href="{{route('dishdetail',['slug'=>$Posts->slug])}}"><img src="{{asset('./Images/Dish/product-')}}{{$Posts->id}}.jpg "></a>
        <h3>{{$Posts->name}}</h3>
        <p>{{$Posts->regular_price}}</p>
        <div class="stars">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star-half-alt"></i>
            <br>
          

        </div>
        </div>
        @endforeach
       <!--  <div class="box">
        <a href="./mehfil.html"><img src="{{asset('./Images/dish/Macaroni and cheese.jpg')}}"></a>
        <h3>Macaroni and cheese</h3>
        <div class="stars">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star-half-alt"></i>
            <br>
            
        </div>
        </div>
        <div class="box">
        <a href="./dominos.html"><img src="{{asset('./Images/dish/Salad.jpg')}}"></a>
        <h3>Salads</h3>
        <div class="stars">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star-half-alt"></i>
            <br>
           
        </div>
        </div>
        <div class="box">
        <a href="./paradise.html"><img src="{{asset('./Images/dish/lasagna.jpg')}}"></a>
        <h3>Lasagna</h3>
        <div class="stars">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star-half-alt"></i>
            <br>
            

        </div>
        </div>
        <div class="box">
        <a href="./ramkibandi.html"><img src="{{asset('./Images/dish/apple-pie.jpg')}}"></a>
        <h3>Apple pie</h3>
        <div class="stars">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star-half-alt"></i>
            <br>
           

        </div>
        </div> -->
        <!--<div class="box">
        <a href="./vantilu.html"><img src="./Images/Restaurants/vantilu.jpeg"></a>
        <h3>Vantillu</h3>
        <div class="stars">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star-half-alt"></i>
            <br>
            <p>Starters,biryani,tandoori</p>

        </div>
        </div>-->
        <!-- <div class="box">
        <a href="./platform65.html"><img src="{{asset('./Images/dish/tacos.jpg')}}"></a>
        <h3>Tacos</h3>
        <div class="stars">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star-half-alt"></i>
            <br>
           

        </div>
        </div>
        <div class="box">
        <a href="./hoteladaab.html"><img src="{{asset('./Images/dish/cheeseburger.jpg')}}"></a>
        <h3>Hamburger</h3>
        <div class="stars">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star-half-alt"></i>
            <br>
          

        </div>
        </div>
        <div class="box">
        <a href="./fishland.html"><img src="{{asset('./Images/dish/Beef Stroganoff.jpg')}}"></a>
        <h3>Beef Stroganoff</h3>
        <div class="stars">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star-half-alt"></i>
            <br>
     

        </div>
        </div>
        <div class="box">
        <a href="./hitech.html"><img src="{{asset('./Images/dish/Fruit Salad.jpg')}}"></a>
        <h3>Fruit Salad</h3>
        <div class="stars">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star-half-alt"></i>
            <br>
         
        </div>
        </div>
        <div class="box">
        <a href="./hotnspicy.html"><img src="{{asset('./Images/dish/Noodles.jpg')}}"></a>
        <h3>Noodles</h3>
        <div class="stars">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star-half-alt"></i>
            <br>
            
        </div>
        </div>
        <div class="box">
        <a href="./mughal.html"><img src="{{asset('./Images/dish/Soups.jpg')}}"></a>
        <h3>Soups</h3>
        <div class="stars">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star-half-alt"></i>
            <br>
           
        </div>
        </div>
        <div class="box">
        <a href="./ksbakers.html"><img src="{{asset('./Images/dish/Fish as food.jpg')}}"></a>
        <h3>Fish as food</h3>
        <div class="stars">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star-half-alt"></i>
            <br>
         
        </div>
        </div>
        

        </div> -->
        </section>




</section>
<div id="about" class="about">
    <a href="#" class="closebtn" onclick="closeNav()">&times;</a>
    <div class="about-overlay">
        <h1>About us</h1>
        <p>Launched in 2021, Our technology platform connects customers,<br> 
        restaurant partners and delivery partners, serving their multiple needs. <br>
        Customers use our platform to search and discover restaurants, read and write customer 
        generated reviews and view and upload photos,<br> order food delivery, book a table and make 
        payments while dining-out at restaurants. On the other hand,<br> we provide restaurant partners 
        with industry-specific marketing tools which enable them to engage and acquire customers<br> to 
        grow their business while also providing a reliable <br>and efficient last mile delivery service. 
        We also operate a one-stop procurement solution, <br>Hyperpure, which supplies high quality ingredients 
        and kitchen products to restaurant partners.<br> We also provide our delivery partners with transparent 
        and flexible earning opportunities. </p>
    </div>
</div>