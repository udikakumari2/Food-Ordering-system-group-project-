<html>
    <head>
        <style>
            .container {
    max-width: 1560px;
   
  }
  
  
            .border-top{
                border-top: 1px solid #e5e5e5; 
            }

            .form-style-1 {
	margin:100px auto;
	max-width: 400px;
	padding: 50px 12px 10px 20px;
	font: 13px "Lucida Sans Unicode", "Lucida Grande", sans-serif;
}
.form-style-1 li {
	padding: 0;
	display: block;
	list-style: none;
	margin: 10px 0 0 0;
}
.form-style-1 label{
	margin:0 0 3px 0;
	padding:0px;
	display:block;
	font-weight: bold;
}
.form-style-1 input[type=text], 
.form-style-1 input[type=date],
.form-style-1 input[type=datetime],
.form-style-1 input[type=number],
.form-style-1 input[type=search],
.form-style-1 input[type=time],
.form-style-1 input[type=url],
.form-style-1 input[type=email],
textarea, 
select{
	box-sizing: border-box;
	-webkit-box-sizing: border-box;
	-moz-box-sizing: border-box;
	border:1px solid #BEBEBE;
	padding: 7px;
	margin:0px;
	-webkit-transition: all 0.30s ease-in-out;
	-moz-transition: all 0.30s ease-in-out;
	-ms-transition: all 0.30s ease-in-out;
	-o-transition: all 0.30s ease-in-out;
	outline: none;	
}
.form-style-1 input[type=text]:focus, 
.form-style-1 input[type=date]:focus,
.form-style-1 input[type=datetime]:focus,
.form-style-1 input[type=number]:focus,
.form-style-1 input[type=search]:focus,
.form-style-1 input[type=time]:focus,
.form-style-1 input[type=url]:focus,
.form-style-1 input[type=email]:focus,
.form-style-1 textarea:focus, 
.form-style-1 select:focus{
	-moz-box-shadow: 0 0 8px #88D5E9;
	-webkit-box-shadow: 0 0 8px #88D5E9;
	box-shadow: 0 0 8px #88D5E9;
	border: 1px solid #88D5E9;
}
.form-style-1 .field-divided{
	width: 49%;
}

.form-style-1 .field-long{
	width: 100%;
}
.form-style-1 .field-select{
	width: 100%;
}
.form-style-1 .field-textarea{
	height: 100px;
}
.form-style-1 input[type=submit], .form-style-1 input[type=button]{
	background: #4B99AD;
	padding: 8px 15px 8px 15px;
	border: none;
	color: #fff;
}
.form-style-1 input[type=submit]:hover, .form-style-1 input[type=button]:hover{
	background: orangered;
	box-shadow:none;
	-moz-box-shadow:none;
	-webkit-box-shadow:none;
}
.form-style-1 .required{
	color:red;
}
.xy{
    background-color:white;
   
    
  }
  
</style>
</head>
<body>
<div>
 <br>
    @if(Cart::count()>0)
    @foreach(Cart::content() as $item)
        <div class="xy">
        <div class="table">
        <img src="{{asset('./Images/Dishes/product-')}}{{$item->model->id}}.jpg "style="vertical-align:middle"  alt="{{$item->model->name}}"height="150"><h4>{{$item->model->name}}</h4><p>Price:{{$item->model->regular_price}}</p><p>Sub Total: {{$item->subtotal}}</p>
        </div>
</div>
    @endforeach
	@foreach(Cart::content() as $item)
        <div class="xy">
        <div class="table">
        <img src="{{asset('./Images/Restaurants/product-')}}{{$item->model->id}}.jpg "style="vertical-align:middle"  alt="{{$item->model->name}}"height="150"><h4>{{$item->model->name}}</h4><p>Price:{{$item->model->regular_price}}</p><p>Sub Total: {{$item->subtotal}}</p>
        </div>
</div>
    @endforeach
	@foreach(Cart::content() as $item)
        <div class="xy">
        <div class="table">
        <img src="{{asset('./Images/Dish/product-')}}{{$item->model->id}}.jpg "style="vertical-align:middle"  alt="{{$item->model->name}}"height="150"><h4>{{$item->model->name}}</h4><p>Price:{{$item->model->regular_price}}</p><p>Sub Total: {{$item->subtotal}}</p>
        </div>
</div>
    @endforeach
     @if(Session::has('success_message1'))
                <div class="alert alert-success">
                  <h4> <Strong>Succes |{{Session::get('success_message1')}}</strong></h4>
    @endif 
    <button><a href="{{route('home.index')}}" >Home</a></button>
     @if (session()->has('message'))
                            <div class="alert alert-success text-center">{{ session('message') }}</div>
    @endif  
    

    
@else
    <p>no item in the cart</p>
@endif
</div> 
</div>
</dv>
<div>
<div class="border-top">
    <ul class="form-style-1">
<form wire:submit.prevent="CustomerD">
        <li>
            <label>Full Name <span class="required">*</span></label>
            <input type="text"id="name" name="name" wire:model="name" class="field-long" placeholder="Full Name" />
           
        </li>
        <!-- @error('customer_id')
                <span class="text-danger" style="font-size: 12.5px;">{{ $message }}</span>
        @enderror -->
        <li>
            <label>Address <span class="required">*</span></label>
            <input type="text" id="address" name="address" wire:model="address" class="field-long" placeholder="Address" />
        </li>
       <!--  @error('address')
                <span class="text-danger" style="font-size: 12.5px;">{{ $message }}</span>
        @enderror -->
        <li>
            <label>Email <span class="required">*</span></label>
            <input type="email"id="email" name="email"wire:model="email" class="field-long" placeholder="Email"/>
        </li>
       <!--  @error('email')
                <span class="text-danger" style="font-size: 12.5px;">{{ $message }}</span>
        @enderror -->
        <li>
            <label>Customer Note <span class="required">*</span></label>
            <input type="text" id="note" name="note" wire:model="note" class="field-long field-textarea" placeholder="Address" />
        </li>
        <!-- @error('note')
                <span class="text-danger" style="font-size: 12.5px;">{{ $message }}</span>
        @enderror -->
        <li>
        <button type="submit" class="btn btn-primary btn-sm w-50"><a href="{{route('home.index')}}">Submit</button>
        </li>
</ul>
</form>
</div> 


</div>