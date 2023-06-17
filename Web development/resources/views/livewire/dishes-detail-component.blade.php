<html>
    <head>
      <style>
        * {
  padding: 0;
  margin: 0;
  box-sizing: border-box;
}

body {
  font-family: sans-serif;
  background: orangered;
  
}

.container {
  max-width: 75%;
  margin: auto;
  height: 80vh;
  margin-top: 5%;
  background: white;
  box-shadow: 5px 5px 10px 3px rgba(0, 0, 0, 0.3);
}

.left, .right {
  width: 50%;
  padding: 30px;
}

.flex {
  display: flex;
  justify-content: space-between;
}

.flex1 {
  display: flex;
}

.main_image {
  width: auto;
  height: auto;
}

.option img {
  width: 75px;
  height: 75px;
  padding: 10px;
}

.right {
  padding: 50px 100px 50px 50px;
}

h3 {
  color: orangered;
  margin: 20px 0 20px 0;
  font-size: 25px;
}

h5,
p,
small {
  color: #837D7C;
  background:white;
  font: 01.2em sans-serif;
}

h4 {
  color: red;
  font: 1.3em sans-serif;
  font: optional;
  font-style:bold;
}

p {
  margin: 20px 0 50px 0;
  line-height: 25px;
}

h5 {
  font-size: 15px;
}

label,

 {
  width: 25px;
  height: 25px;
  background: #000;
  border-radius: 50%;
  margin: 20px 10px 20px 0;
}



.add label,
 {
  background: none;
  border: 1px solid orangered;
  color: orangered;
  text-align: center;
  line-height: 25px;
}

.add label {
  padding: 10px 30px 0 20px;
  border-radius: 50px;
  line-height: 0;
}

button {
  width: 100%;
  padding: 10px;
  border: none;
  outline: none;
  background: orangered;
  color: white;
  margin-top: 20%;
  border-radius: 30px;
}

@media only screen and (max-width:768px) {
  .container {
    max-width: 90%;
    margin: auto;
    height: auto;
  }

  .left, .right {
    width: 100%;
  }

  .container {
    flex-direction: column;
  }
}

@media only screen and (max-width:511px) {
  .container {
    max-width: 100%;
    height: auto;
    padding: 10px;
  }

  .left, .right {
    padding: 0;
  }

  img {
    width: 100%;
    height: 100%;
  }

  .option {
    display: flex;
    flex-wrap: wrap;
  }
  * {
  padding: 0;
  margin: 0;
  font-family: 'IBM Plex Sans', sans-serif;
}
* {
  padding: 0;
  margin: 0;
  font-family: 'IBM Plex Sans', sans-serif;
}
body {
    width: 100vw;
    height: 100vh;
    overflow: hidden;
    display: flex;
    align-items: center;
    justify-content: center;
}
.counter {
    width: 150px;
    margin: auto;
    display: flex;
    align-items: center;
    justify-content: center;
}
.counter input {
    width: 50px;
    border: 0;
    line-height: 30px;
    font-size: 20px;
    text-align: center;
    background: #0052cc;
    color: #fff;
    appearance: none;
    outline: 0;
}
.counter span {
    display: block;
    font-size: 25px;
    padding: 0 10px;
    cursor: pointer;
    color: #0052cc;
    user-select: none;
}
}
      </style>
    </head>
    <body>

<section>
<div class="box-container">
   
    <div class="box">
        <div class="container flex">
      <div class="left">
        <div class="main_image">
          <img src="{{asset('./Images/Dish/product-')}}{{$Post->id}}.jpg " alt="" class="slide" height="350">
          <h3>{{$Post->name}}</h3>
          <h4><small>$</small>{{$Post->regular_price}}</h4>
        </div>
        
      </div>
      <div class="right">
                
                
        <p>{{$Post->short_description}}</p>
        <h5>Status: {{$Post->stoke_status}}</h5>
        <div class="counter">
          <span class="down" onClick='decreaseCount(event, this)'>-</span>
          <input type="text" value="1">
          <span class="up"  onClick='increaseCount(event, this)'>+</span>
        </div>
  
  
        <script type="text/javascript">
            function increaseCount(a, b) {
            var input = b.previousElementSibling;
            var value = parseInt(input.value, 10); 
            value = isNaN(value)? 0 : value;
            value ++;
            input.value = value;
        }
            function decreaseCount(a, b) {
              var input = b.nextElementSibling;
              var value = parseInt(input.value, 10); 
              if (value > 1) {
              value = isNaN(value)? 0 : value;
              value --;
              input.value = value;
            }
          }
    </script>
                <button><a href="#" wire:click.prevent="store({{$Post->image}},'{{$Post->name}}',{{$Post->regular_price}})">Add to Bag</button>
                
        </div> </div>
       </div>
    
    </section>
    <script>
        function img(anything){
            document.querySelector('.slide').src=anything;
        }
        function change(change){
            const line=document.querySelector('.home');
            line.style.background=chanege;
        }
        
}
    </script>
