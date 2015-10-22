<!--A Design by W3layouts
Author: W3layout
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE HTML>
<html>
<head>
<title>Gags By Mail</title>
<link href="http://localhost:8000/css/bootstrap.css" rel='stylesheet' type='text/css' />
<!-- jQuery (necessary JavaScript plugins) -->
<script type='text/javascript' src="http://localhost:8000/js/jquery-1.11.1.min.js"></script>
<!-- Custom Theme files -->
<script src="http://localhost:8000/js/semantic.js"></script>
<script src="http://localhost:8000/js/semantic.min.js"></script>
<link href="http://localhost:8000/css/style.css" rel='stylesheet' type='text/css' />
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">

<link rel="stylesheet"  type='text/css' href="http://localhost:8000/css/semantic.css">
<link rel="stylesheet"  type='text/css' href="http://localhost:8000/css/semantic.min.css">
<link rel="stylesheet"  type='text/css' href="http://localhost:8000/owl-carousel/owl.theme.css">
<link rel="stylesheet"  type='text/css' href="http://localhost:8000/owl-carousel/owl.carousel.css">
<link rel="stylesheet" type='text/css' href="http://localhost:8000/css/orbit.css">
<!--  jQuery 1.7+  -->

<script src="http://localhost:8000/owl-carousel/owl.carousel.js"></script>
<script src="http://localhost:8000/js/orbit.js"></script>
<script>
$(document).ready(function() {

  $("#owl-demo").owlCarousel({

      navigation : true, // Show next and prev buttons
      slideSpeed : 300,
      paginationSpeed : 400,
      singleItem:true,
       autoPlay:true,
       navigation:false,
       autoHeight:true,
       autoWidth:true
      // "singleItem:true" is a shortcut for:
      // items : 1,
      // itemsDesktop : false,
      // itemsDesktopSmall : false,
      // itemsTablet: false,
      // itemsMobile : false

  });

});
function modal()
{
	$('.ui.modal.a')
  .modal('show')
;
}
function modalb()
{
	$('.ui.modal.b')
  .modal('show')
;
}
function modalc()
{
	$('.ui.modal.c')
  .modal('show')
;
}
function updatePrice(container, n) {
	//container -> each one of the $('.cd-gallery').children('li')
	//n -> index of the selected item in the .cd-item-wrapper
	var priceTag = container.find('.cd-price'),
		selectedItem = container.find('.cd-item-wrapper li').eq(n);
	if( selectedItem.data('sale') ) {
		// if item is on sale - cross old price and add new one
		priceTag.addClass('on-sale');
		var newPriceTag = ( priceTag.next('.cd-new-price').length > 0 ) ? priceTag.next('.cd-new-price') : $('<em class="cd-new-price"></em>').insertAfter(priceTag);
		newPriceTag.text(selectedItem.data('price'));
		setTimeout(function(){ newPriceTag.addClass('is-visible'); }, 100);
	} else {
		// if item is not on sale - remove cross on old price and sale price
		priceTag.removeClass('on-sale').next('.cd-new-price').removeClass('is-visible').on('webkitTransitionEnd otransitionend oTransitionEnd msTransitionEnd transitionend', function(){
			priceTag.next('.cd-new-price').remove();
		});
	}
}
</script>
<!-- Custom Theme files -->
<!--//theme-style-->
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Gretong Responsive web template, Bootstrap Web Templates, Flat Web Templates, Andriod Compatible web template,
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyErricsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<link href='http://fonts.googleapis.com/css?family=Roboto:400,100,300,500,700,900' rel='stylesheet' type='text/css'>
<link href='http://fonts.googleapis.com/css?family=Playfair+Display:400,700,900' rel='stylesheet' type='text/css'>
<!-- start menu -->
<link href="http://localhost:8000/css/megamenu.css" rel="stylesheet" type="text/css" media="all" />
<script type="text/javascript" src="http://localhost:8000/js/megamenu.js"></script>
<script>$(document).ready(function(){$(".megamenu").megamenu();});</script>
<script src="http://localhost:8000/js/menu_jquery.js"></script>

<style>
.parallax-window {
  min-height: 400px;
  background: transparent;
}
#owl-demo .item img{
    display: block;
    width: 100%;
    height:35em;
    margin-top: 1%;
}
input[type=number]::-webkit-inner-spin-button,
input[type=number]::-webkit-outer-spin-button {
    -webkit-appearance: none;
    margin: 0;
}
hr {
    display: block;
    margin-top: 0.5em;
    margin-bottom: 0.5em;
    margin-left: auto;
    margin-right: auto;
    border-style: solid;
    border-width: 3px;
    color:#E9565C;
    width:5em;
}
.cd-item-wrapper li {
  position: absolute;
  top: 0;
  left: 25%;
  width: 50%;
  opacity: 0;
  transform: translateX(200%) scale(0.7);
}
.cd-item-wrapper li.selected {
  /* selected item */
  position: relative;
  opacity: 1;
  transform: translateX(0) scale(1.3);
}
.cd-item-wrapper li.move-right {
  /* item on right - preview visible */
  transform: translateX(100%) scale(0.7);
  opacity: 0.3;
}
.cd-item-wrapper li.move-left {
  /* item on left - preview visible */
  transform: translateX(-100%) scale(0.7);
  opacity: 0.3;
}
.cd-item-wrapper li.hide-left {
  /* items hidden on the left */
  transform: translateX(-200%) scale(0.7);
}
@media only screen and (min-width: 1048px) {
  .cd-item-wrapper li.move-left,
  .cd-item-wrapper li.move-right {
    /* hide preview items */
    opacity: 0;
  }
  .cd-item-wrapper li.focus-on-left {
    /* class added to the .selected and .move-right items when user hovers over the .move-left item (item preview on the left) */
    transform: translateX(3%) scale(1.25);
  }
  .cd-item-wrapper li.focus-on-left.move-right {
    transform: translateX(103%) scale(0.7);
  }
  .cd-item-wrapper li.focus-on-right {
    /* class added to the .selected and .move-left items when user hovers over the .move-right item (item preview on the right) */
    transform: translateX(-3%) scale(1.25);
  }
  .cd-item-wrapper li.focus-on-right.move-left {
    transform: translateX(-103%) scale(0.7);
  }
  .cd-item-wrapper li.hover {
    /* class added to the preview items (.move-left or .move-right) when user hovers over them */
    opacity: 1;
  }
  .cd-item-wrapper li.hover.move-left {
    transform: translateX(-97%) scale(0.75);
  }
  .cd-item-wrapper li.hover.move-right {
    transform: translateX(97%) scale(0.75);
  }
}
</style>

<script>
console.log(" Crafted with ♥ by Balaji");


</script>

@yield('script')
</head>
<body>
<!-- header_top -->
<!--<div class="top_bg">
	<div class="container">
		<div class="header_top">
			<div class="top_right">
				<ul>
					<li><a href="#">help</a></li>|
					<li><a href="contact.html">Contact</a></li>|
					<li><a href="#">Delivery information</a></li>
				</ul>
			</div>
			<div class="top_left">
				<h2><span></span> Call us : 032 2352 782</h2>
			</div>
				<div class="clearfix"> </div>
		</div>
	</div>
</div>-->
<!-- header -->
<div class="ui modal a ">
  <div class="ui header">Submit Idea</div>
	<hr>
  <div class="content">
    <p>Behind every surprise lies a great idea and behind every great idea lies someone who loves making people happy. </p>
    <p>If you’ve got a great idea you think Oye Happy has so got to do, we’d love to hear from you!</p>
		<form class="ui form">
  <div class="field">
    <label>First Name</label>
    <input name="first-name" placeholder="First Name" type="text">
  </div>
  <div class="field">
    <label>Email</label>
    <input name="last-name" placeholder="Last Name" type="text">
  </div>
	<div class="field">
	 <label>Big Idea</label>
	 <textarea></textarea>
 </div>

  <button class="ui button" type="submit">Submit</button>
</form>
  </div>
</div>
<div class="ui modal b ">
	<div class="ui header">Terms</div>
	<div class="ui list">
	<div class="item">
		 <p>1.For flowers, sweets or other items that are perishable in nature, the delivery would be attempted only once. If the delivery is not executed during that attempt due to incorrect or insufficient address, recipient not at home, address found locked or refusal to accept, the customer shall still be charged for the order.</p>

	</div>
	<div class="item">
		 <p>2.For flowers, sweets or other items that are perishable in nature, the delivery would be attempted only once. If the delivery is not executed during that attempt due to incorrect or insufficient address, recipient not at home, address found locked or refusal to accept, the customer shall still be charged for the order.</p>

	</div>
	<div class="item">
		 <p>3.For flowers, sweets or other items that are perishable in nature, the delivery would be attempted only once. If the delivery is not executed during that attempt due to incorrect or insufficient address, recipient not at home, address found locked or refusal to accept, the customer shall still be charged for the order.</p>

	</div>
</div>

	</div>
	<div class="ui modal c ">
		<div class="ui header">Disclaimer</div>
	<p class="ui small header">
Home / Disclaimer
Disclaimer
Users of Oye Happy are requested to read all the terms and conditions specified herein and/or any other page on our websites and are deemed to have understood, accepted and agreed to all the details mentioned in the website.

This website is owned by Oye Happy and all the products, images, content, materials from this website are owned, controlled, operated, published and licensed by Oye Happy. Violation of all these is a violation of copyright and other proprietary rights of the company.
</p>

		</div>
<div class="header_bg">
<div class="container">
	<div class="header">
	<div class="head-t">
		<div class="logo">
			<h1 href="/">Gags By Mail </h1>
		</div>
		<!-- start header_right -->
		<div class="header_right">
			<div class="rgt-bottom">
				<div class="log">
          @if(Session::get('loginfo',1))
					<div class="login" >
						<div id="loginContainer"><a href="#" id="loginButton"><span style="color:#000000">Login</span></a> <div class="{{$loginfo?"":'hidden'}} ui pointing label">
      Enter Valid Information
    </div>
    <div class="{{$placelogin?"":'hidden'}} ui pointing label red">
Log in before Placing order
</div>
						    <div id="loginBox">
						        <form id="loginForm" action="/login" method="post">
                      <input type="hidden" name="_token" value="<?php echo csrf_token(); ?>">
						                <fieldset id="body">
						                	<fieldset>
						                          <label for="mail">Email Address</label>
						                          <input name="mail" type="text"  id="email">
						                    </fieldset>
						                    <fieldset>
						                            <label for="password">Password</label>
						                            <input name="password" type="password"  id="password">
						                     </fieldset>
						                    <input type="submit" id="login" value="Sign in">

						                	<label for="checkbox"><input type="checkbox" id="checkbox"> <i>Remember me</i></label>
						            	</fieldset>
						            <span><a href="#">Forgot your password?</a></span>
                          <span><a href="/register">Sign up here</a></span>
								</form>
							</div>
						</div>
            <div class="reg">
    					<a style="color:#000000" href="/register">REGISTER</a>
    				</div>
            @else
          	<div id="loginContainer"><a href="/logout"><span>Logout</span></a></div>
            @endif
					</div>
				</div>

			<div class="cart box_1">
				<a href="/checkout">
					<h3> <span id="price" class="simpleCart_total">RS.{{Session::get('price',0)}}</span> (<span id="simpleCart_quantity"  class="simpleCart_quantity">{{count(Session::get('id',array()))}}</span> items)<img src="images/bag.png" alt=""></h3>
				</a>

				<div class="clearfix"> </div>
			</div>
			<div class="create_btn">
				<a href="/checkout">CHECKOUT</a>
			</div>
			<div class="clearfix"> </div>
		</div>
	<!--	<div class="search">
		    <form>
		    	<input type="text" value="" placeholder="search...">
				<input type="submit" value="">
			</form>
		</div>-->
		<div class="clearfix"> </div>
		</div>
		<div class="clearfix"> </div>
	</div>
		<!-- start header menu -->
		<ul class="megamenu skyblue">
			<li class="active grid"><a class="color1" href="/">Home</a></li>
			<li class="grid"><a class="color2" href="/shop">Products</a>

				</li>
			<li><a class="color4" href="#">FAQ</a>

				</li>
				<li><a class="color5" onclick="modal()">Submit Idea</a>

				</li>

		 </ul>
	</div>
</div>
</div>
@yield('middle')
<div style="background-color:#000000;height:4em">
  <div  class="container">
  	<div style="background-color:#000000;margin-top:0"  class="ui stackable grid">
  		 <div class="six column  row">
  		<div class="column">
  			<center><a style="color:#ffffff" class="ui medium header">Contact Us</a></center>
  		</div>
  		<div class="column">
  		<center>	<a style="color:#ffffff" class="ui medium header" href="#"  onclick="modalb()">Terms</a></center>
  		</div>
  		<div class="column">
  			<center><a style="color:#ffffff" class="ui medium header" href="#" onclick="modalc()">Disclaimer</a></center>
  		</div>
      <div class="column">
  			<center><a style="color:#ffffff" class="ui medium header">Privacy</a></center>
  		</div>
      <div class="column">
        <center><a style="color:#ffffff" class="ui medium header">©2015 Gags By Mail</a></center>
      </div>
      <div class="column">
        <center><a style="color:#ffffff" class="ui medium header">Follow Us <a style="color:#ffffff;margin-left:1%;"><i class="fa fa-facebook-official fa-2x"></i></a><a style="color:#ffffff;margin-left:1%;"><i class="fa fa-twitter fa-2x"></i>
</a><a style="color:#ffffff"><i class="fa fa-instagram fa-2x"></i>
</a>
</a></center>
      </div>
  	</div>
  </div>
</div>
  <!--	<div style="margin-top:3%;" class="clearfix"> </div>
  		<center><p>Copyrights © 2015 Gags By Mail</p></center>
  </div>-->
</div>
<script>
function addtocart(id)
{
  $.ajax({url: "/add/"+id, success: function(result){
    changevalue( JSON.parse(result).price,JSON.parse(result).no,id);


  }});
}
function changevalue(price,no,id)
{
  document.getElementById("price").innerHTML ="Rs"+price;
  document.getElementById("simpleCart_quantity").innerHTML =no;
  document.getElementById(id).className = "ui disabled button ";
  document.getElementById(id).innerHTML ="Added";
}
$(document).ready(function(){$(".megamenu").megamenu();});
</script>
</body>
</html>
