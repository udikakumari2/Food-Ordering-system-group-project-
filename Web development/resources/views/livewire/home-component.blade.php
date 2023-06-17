<!--Home section start-->
<section class="home" id="home-section">
<!--Add-->
<div class="add">
 <div class="add-container">
 <img src="{{asset('./Images/banner/burger banner.jpg')}}">
 <div class="textimg"><h2>25% off on your<br> first order</h2>
 <a href="{{route('dish')}}"><button class="ordr">Order Now</button></a></div>
 
 </div>
</div>
<!--Add ends-->
<!--Our-Specials-->
 
    <div class="spl">
        <h2>Our Specials</h2>
      
        
       
</div>
<div class="table">
   @foreach($foods as $food)
        <a href="{{route('foods.details',['slug'=>$food->slug])}}">
        <img src="{{asset('./Images/Dishes/product-')}}{{$food->id}}.jpg " alt="{{$food->name}}"height="150">
        <h4>{{$food -> name}}</h4>
        <p>{{$food->regular_price}}</p></a>


    @endforeach
     
</div>
<div class="top-re">
    <h2>Top Beverages</h2>
</div>
<div class="table1">
    @foreach($beverages as $beverage)
        <a href="{{route('beveragedetail',['slug'=>$beverage->slug])}}">
        <img src="{{asset('./Images/Restaurants/product-')}}{{$beverage->id}}.jpg" alt="{{$beverage->name}}" height="150">
        <h4>{{$beverage -> name}}</h4><p>{{$beverage->regular_price}}</p>
        </a>
    @endforeach
    
</div>
<div class="container-grocery">
    <img src="{{asset('./Images/banner/grocery-delivery.png')}}" alt="Norway" style="width:100%;">
    <div class="text-block">
    <h2>Hurry Up!</h2>
    <h4>Anything you need, delivered</h4>
    <p>Get your grocery, meat, vegetables at your door step<br>
    Stay Home and Enjoy our services.</p>
    <!--<div class="ordergrocery">
    <a href="https://api.whatsapp.com/send?phone=+917717406841&text=I wanted to order grocery/meat/vegetables" class="orderg" onclick="mygrocery()"><i class="fab fa-whatsapp"></i> Order Now</a>
    </div>-->
    </div>
  
</div>

<!-- <section class="barb" id="biryani">
    <hr class="line"> 
    <div class="box-container">
<div class="box">
@foreach($beverages as $beverage)
        <a href="{{route('foods.details',['slug'=>$beverage->slug])}}">
        <img src="{{asset('./Images/Restaurants/product-')}}{{$beverage->id}}.jpg" alt="{{$beverage->name}}" height="150">
        <h3>{{$beverage->name}}</h3>
        </a>
        <!-- <div class="stars">
        <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star-half-alt"></i>
            <br> -->
        <!--    
        <p>{{$beverage->regular_price}}</p>
        
@endforeach
</div>
        </div> -->
        <!-- <div class="box">
        <a href="./mehfil.html"><img src="{{asset('./Images/Restaurants/product-2.jpg')}}"></a>
        <h3>Broccoli Shake</h3>
        <div class="stars">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star-half-alt"></i>
            <br>
            <p>LKR400</p>

        </div>
        </div>
        <div class="box">
        <a href="./dominos.html"><img src="{{asset('./Images/Restaurants/product-5.jpg')}}"></a>
        <h3>Leamon Water</h3>
        <div class="stars">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star-half-alt"></i>
            <br>
            <p>LKR200</p>
        </div>
        </div>
        <div class="box">
        <a href="./paradise.html"><img src="{{asset('./Images/Restaurants/product-3.jpg')}}"></a>
        <h3>Orange Juice</h3>
        <div class="stars">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star-half-alt"></i>
            <br>
            <p>LKR150</p>

        </div>
        </div>
        <div class="box">
        <a href="./ramkibandi.html"><img src="{{asset('./Images/Restaurants/product-4.jpg')}}"></a>
        <h3>Mango Mango</h3>
        <div class="stars">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star-half-alt"></i>
            <br>
            <p>LKR250</p>

        </div> 
        </div>-->
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
        </div>--> -->
        <!-- <div class="box">
        <a href="./platform65.html"><img src="{{asset('./Images/Restaurants/product-6.jpg')}}"></a>
        <h3>Faluda Icecrem</h3>
        <div class="stars">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star-half-alt"></i>
            <br>
            <p>LKR300</p>
        </div>
        </div>
        <div class="box">
        <a href="./hoteladaab.html"><img src="{{asset('./Images/Restaurants/product-7.png')}}"></a>
        <h3>Leamon Juice</h3>
        <p>LKR150</p>
        </div>
        </div>
        <div class="box">
            <h1>Fish Land</h1>
        <a href="./fishland.html"><img src="{{asset('./Images/Restaurants/product-8.jpg')}}"></a>
       
        <div class="stars">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star-half-alt"></i>
            <br>
            <p>Starters,Biryani,Tandoori</p>

        </div>
        </div>

      
 -->
      
        
 <!-- {{$foods->links()}} -->

        </div>
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
</div>