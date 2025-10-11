<!doctype html>
<html class="no-js" lang="en">
   <head>
      <?php include("head2.php");?>
      	<script type="application/ld+json">
        {
            "@context": "http://schema.org/",
            "@type": "WebSite",
            "name": "Interior Designers in Delhi",
            "url": "https://thethekedaar.in/"
        }
        </script>
	<script type="application/ld+json">
        {
          "@context": "https://schema.org/", 
          "@type": "BreadcrumbList", 
          "itemListElement": [{
            "@type": "ListItem", 
            "position": 1, 
            "name": "Interior Designers in Delhi",
            "item": "https://thethekedaar.in/"  
          },{
            "@type": "ListItem", 
            "position": 2, 
            "name": "Interior Designers in <?php echo $curPageName;?>",
            "item": "<?php echo $url;?>"  
          }]
        }
        </script>
<style>
          #fcf-form {
    display:block;
}

.fcf-body {
    margin: 0;
    font-family: -apple-system, Arial, sans-serif;
    font-size: 1rem;
    font-weight: 400;
    line-height: 1.5;
    color: #212529;
    text-align: left;
    background-color: #fff;
    padding: 30px;
    padding-bottom: 10px;
    border: 1px solid #ced4da;
    border-radius: 0.25rem;
    max-width: 95%;
}

.fcf-form-group {
    margin-bottom: 1rem;
}

.fcf-input-group {
    position: relative;
    display: -ms-flexbox;
    display: flex;
    -ms-flex-wrap: wrap;
    flex-wrap: wrap;
    -ms-flex-align: stretch;
    align-items: stretch;
    width: 100%;
}

.fcf-form-control {
    display: block;
    width: 100%;
    height: calc(1.5em + 0.75rem + 2px);
    padding: 0.375rem 0.75rem;
    font-size: 1rem;
    font-weight: 400;
    line-height: 1.0;
    color: #495057;
    background-color: #fff;
    background-clip: padding-box;
    border: 1px solid #ced4da;
    outline: none;
    border-radius: 0.25rem;
    transition: border-color 0.15s ease-in-out, box-shadow 0.15s ease-in-out;
}

.fcf-form-control:focus {
    border: 1px solid #313131;
}

select.fcf-form-control[size], select.fcf-form-control[multiple] {
    height: auto;
}

textarea.fcf-form-control {
    font-family: -apple-system, Arial, sans-serif;
    height: auto;
}

label.fcf-label {
    display: inline-block;
    margin-bottom: 0.5rem;
}

.fcf-credit {
    padding-top: 10px;
    font-size: 0.9rem;
    color: #545b62;
}

.fcf-credit a {
    color: #545b62;
    text-decoration: underline;
}

.fcf-credit a:hover {
    color: #0056b3;
    text-decoration: underline;
}

.fcf-btn {
    display: inline-block;
    font-weight: 400;
    color: #212529;
    text-align: center;
    vertical-align: middle;
    cursor: pointer;
    -webkit-user-select: none;
    -moz-user-select: none;
    -ms-user-select: none;
    user-select: none;
    background-color: transparent;
    border: 1px solid transparent;
    padding: 0.375rem 0.75rem;
    font-size: 1rem;
    line-height: 1.5;
    border-radius: 0.25rem;
    transition: color 0.15s ease-in-out, background-color 0.15s ease-in-out, border-color 0.15s ease-in-out, box-shadow 0.15s ease-in-out;
}

@media (prefers-reduced-motion: reduce) {
    .fcf-btn {
        transition: none;
    }
}

.fcf-btn:hover {
    color: #212529;
    text-decoration: none;
}

.fcf-btn:focus, .fcf-btn.focus {
    outline: 0;
    box-shadow: 0 0 0 0.2rem rgba(0, 123, 255, 0.25);
}

.fcf-btn-primary {
    color: #fff;
    background-color: #ffd064;
    border-color: #ffd064;
}

.fcf-btn-primary:hover {
    color: #fff;
    background-color: #ffd064;
    border-color: #ffd064;
}

.fcf-btn-primary:focus, .fcf-btn-primary.focus {
    color: #fff;
    background-color: #0069d9;
    border-color: #0062cc;
    box-shadow: 0 0 0 0.2rem rgba(38, 143, 255, 0.5);
}

.fcf-btn-lg, .fcf-btn-group-lg>.fcf-btn {
    padding: 0.5rem 1rem;
    font-size: 1.25rem;
    line-height: 1.5;
    border-radius: 0.3rem;
}

.fcf-btn-block {
    display: block;
    width: 100%;
}

.fcf-btn-block+.fcf-btn-block {
    margin-top: 0.5rem;
}

input[type="submit"].fcf-btn-block, input[type="reset"].fcf-btn-block, input[type="button"].fcf-btn-block {
    width: 100%;
}
      </style>
<script>
	function onlyNumberKey(evt) {
		
		// Only ASCII character in that range allowed
		var ASCIICode = (evt.which) ? evt.which : evt.keyCode
		if (ASCIICode > 31 && (ASCIICode < 48 || ASCIICode > 57))
			return false;
		return true;
	}
</script>


<style>
.img-comp-container {
  position: relative;
  height: 200px; /*should be the same height as the images*/
  padding-left:20px;
}

.img-comp-img {
  position: absolute;
  width: auto;
  height: auto;
  overflow:hidden;
}

.img-comp-img img {
  display:block;
  vertical-align:middle;
}

.img-comp-slider {
  position: absolute;
  z-index:9;
  cursor: ew-resize;
  /*set the appearance of the slider:*/
  width: 20px;
  height: 20px;
  border: solid #d49924;
  border-width: 0 4px 4px 0;
  display: inline-block;
  padding: 3px;
  transform: rotate(-45deg);
  -webkit-transform: rotate(-45deg);
}
</style>
<script>
function initComparisons() {
  var x, i;
  /*find all elements with an "overlay" class:*/
  x = document.getElementsByClassName("img-comp-overlay");
  for (i = 0; i < x.length; i++) {
    /*once for each "overlay" element:
    pass the "overlay" element as a parameter when executing the compareImages function:*/
    compareImages(x[i]);
  }
  function compareImages(img) {
    var slider, img, clicked = 0, w, h;
    /*get the width and height of the img element*/
    w = img.offsetWidth;
    h = img.offsetHeight;
    /*set the width of the img element to 50%:*/
    img.style.width = (w / 2) + "px";
    /*create slider:*/
    slider = document.createElement("DIV");
    slider.setAttribute("class", "img-comp-slider");
    /*insert slider*/
    img.parentElement.insertBefore(slider, img);
    /*position the slider in the middle:*/
    slider.style.top = (h / 2) - (slider.offsetHeight / 2) + "px";
    slider.style.left = (w / 2) - (slider.offsetWidth / 2) + "px";
    /*execute a function when the mouse button is pressed:*/
    slider.addEventListener("mousedown", slideReady);
    /*and another function when the mouse button is released:*/
    window.addEventListener("mouseup", slideFinish);
    /*or touched (for touch screens:*/
    slider.addEventListener("touchstart", slideReady);
    /*and released (for touch screens:*/
    window.addEventListener("touchend", slideFinish);
    function slideReady(e) {
      /*prevent any other actions that may occur when moving over the image:*/
      e.preventDefault();
      /*the slider is now clicked and ready to move:*/
      clicked = 1;
      /*execute a function when the slider is moved:*/
      window.addEventListener("mousemove", slideMove);
      window.addEventListener("touchmove", slideMove);
    }
    function slideFinish() {
      /*the slider is no longer clicked:*/
      clicked = 0;
    }
    function slideMove(e) {
      var pos;
      /*if the slider is no longer clicked, exit this function:*/
      if (clicked == 0) return false;
      /*get the cursor's x position:*/
      pos = getCursorPos(e)
      /*prevent the slider from being positioned outside the image:*/
      if (pos < 0) pos = 0;
      if (pos > w) pos = w;
      /*execute a function that will resize the overlay image according to the cursor:*/
      slide(pos);
    }
    function getCursorPos(e) {
      var a, x = 0;
      e = (e.changedTouches) ? e.changedTouches[0] : e;
      /*get the x positions of the image:*/
      a = img.getBoundingClientRect();
      /*calculate the cursor's x coordinate, relative to the image:*/
      x = e.pageX - a.left;
      /*consider any page scrolling:*/
      x = x - window.pageXOffset;
      return x;
    }
    function slide(x) {
      /*resize the image:*/
      img.style.width = x + "px";
      /*position the slider:*/
      slider.style.left = img.offsetWidth - (slider.offsetWidth / 2) + "px";
    }
  }
}
</script>
<style>
* {
box-sizing: border-box;
}
h1 {
color:white;	
text-align: center;
}
.outer-grid {
display: flex;
flex-wrap: wrap;
padding: 0 4px;
}
.inner-grid {
flex: 25%;
max-width: 25%;
padding: 4 0px;
padding-top: 8px;
      
}
@media screen and (max-width: 800px) {
.inner-grid {
flex: 50%;
max-width: 50%;
}
}
@media screen and (max-width: 600px) {
.inner-grid {
flex: 100%;
max-width: 99.6%;
}
}
</style>
<style>
         .faq{
         background-color: #F5F5F5;
         display: flex;
         justify-content: center;
         align-items: center;
         flex-direction: column;
         margin: 15px 0;
         }
         .wrapperfaq {
         width: 95%;
         }
         .containerfaq {
         background-color: white;
         color: black;
         border-radius: 20px;
         box-shadow: 0 5px 10px 0 rgb(0,0,0,0.25);
         margin: 10px 0;
         }
         .question {
         font-size: 1.0rem;
         font-weight: 600;
         padding: 20px 40px 20px 20px;
         position: relative;
         display: flex;
         align-items: center;
         cursor: pointer;
         }
         .question::after {
         content: "\002B";
         font-size: 2.2rem;
         position: absolute;
         right: 20px;
         transition: 0.2s;
         }
         .question.active::after {
         transform: rotate(45deg);
         }
         .answercont {
         max-height: 0;
         overflow: hidden;
         transition: 0.3s;
         }
         .answer {
         padding: 0 20px 20px;
         line-height: 1.5rem;
         font-size: 1.0rem;
         }
         .question.active + .answercont {
         }
         @media screen and (max-width: 790px){
         .wrapper1 {
         width: 80%;
         }
         }
      </style>
       <style>
.login-popup{
	position: fixed;
	left: 0;
	top: 0;
	width: 100%;
	height: 100%;
	z-index: 1099;
	background-color:rgba(0,0,0,0.6);
	visibility: hidden;
	opacity: 0;
	transition: all 1s ease;
}
.login-popup.show{
	visibility:visible;
	opacity: 1;
}
.login-popup .box{
	background-color:#ffffff;
	width: 750px;
	position: absolute;
	left: 50%;
	top:50%;
	transform:translate(-50%,-50%);
	display: flex;
	flex-wrap: wrap;
	opacity: 0;
	margin-left: 50px;
	transition: all 1s ease;

}
.login-popup.show .box{
	opacity: 1;
	margin-left: 0;
}
.login-popup .box .img-area{
	flex:0 0 50%;
	max-width: 50%;
	position: relative;
	overflow: hidden;
	padding:30px;
	display: flex;
	align-items: center;
	justify-content: center;
}
.login-popup .box .img-area h1{
	font-size: 30px;
}
.login-popup .box .img-area .img{
	position: absolute;
	left:0;
	top:0;
	width: 100%;
	height: 100%;
	background-image: url('https://thethekedaar.in/thethekedaar_images/home_page_images/gallery/img9.jpg');
	background-size: cover;
	background-position: center;
	animation: zoomInOut 7s linear infinite;
	z-index: -1;

}
@keyframes zoomInOut{
	0%,100%{
		transform: scale(1);
	}
	50%{
		transform: scale(1.1);
	}
}
.login-popup .box .form{
	flex:0 0 50%;
	max-width: 50%;
	padding:40px 30px;
}

.login-popup .box .form h1{
	color:#000000;
	font-size: 30px;
	margin:0 0 30px;
}
.login-popup .box .form .form-control{
	height: 45px;
	margin-bottom: 30px;
	width: 100%;
	border:none;
	border-bottom:1px solid #cccccc;
	font-size: 15px;
	color:#000000;
}
.login-popup .box .form .form-control:focus{
	outline: none;
}
.login-popup .box .form label{
	font-size: 15px;
	color:#555555;
}
.login-popup .box .form .btn{
	width: 100%;
	background-color: #E91E63;
	margin-top:40px;
	height: 45px;
	border:none;
	border-radius: 25px;
	font-size: 15px;
	text-transform: uppercase;
	color:#ffffff;
	cursor: pointer;
}
.login-popup .box .form .btn:focus{
	outline: none;
}

.login-popup .box .form .close{
	position: absolute;
	right: 10px;
	top:0px;
	font-size: 30px;
	cursor: pointer;
}

/*responsive*/
@media(max-width: 767px){
	.login-popup .box{
		width: calc(100% - 30px);
	}
	.login-popup .box .img-area{
		display: none;
	}
	.login-popup .box .form{
		flex: 0 0 100%;
        max-width: 100%;
	}
}

img{
  width: 100%;
}
.blog-title a{
  font-size: 32px;
  font-weight: 600;
  text-decoration: none;
  font-family: 'the-seasons';
  color: white

}

  </style>
   </head>
   <body >
      <?php include("header2.php");?>
      <section class="section breadcrumb-area overlay-dark d-flex align-items-center">
         <div class="container">
            <div class="row">
               <div class="col-12">
                  <div class="breadcrumb-content text-center">
                     <h1 class="text-white text-uppercase mb-3" style="font-size:50px;">Interior Designer in <?php echo $curPageName;?></h1>
                     <ol class="breadcrumb d-flex justify-content-center">
                        <li class="breadcrumb-item"><a class="text-uppercase text-white" href="../">Home</a></li>
                        <li class="breadcrumb-item text-white active">Locations</li>
                     </ol>
                  </div>
               </div>
            </div>
         </div>
      </section>
      <br>
      <div style="padding-left:25px;padding-top:0px;padding-right:25px;">
         <h2 class="mb-3" style="color:#f4b02b;">
            <center>Best Interior Designers in <?php echo $curPageName;?> Will Provide Latest Interior Design within Your Budget</center>
         </h2>
        <p>Interior design and architecture are two of the most important tools for transforming a space into one that meets real human needs. Thethekedaar has the most talented team of&nbsp;<a href="<?php echo $url;?>"><strong>interior designers in <?php echo $curPageName;?></strong></a>&nbsp;that achieve the above-mentioned goals with a stunning combination of color and pattern, texture, light, and space.</p>
        <p>&nbsp;</p>
        <p>Our interior designers and architects are experts in many architectural designs and layouts. We are the top&nbsp;<strong>interior design company in <?php echo $curPageName;?></strong>&nbsp;because we always put emphasis on innovation and unique design. Contact us today to transform your space into something special.</p>
        <p>&nbsp;</p>
        <p>It can be difficult to find the&nbsp;<strong>best interior designers in <?php echo $curPageName;?></strong>. We are here to help you navigate through the best options available. A professional interior designer will help you realize your goals and create the perfect setting for your life. No matter what your needs are, we will make it happen. And that's all in a flash!</p>
        <p>&nbsp;</p>
        <p>Thethekedaar, a Delhi-based company, offers professional interior design and decoration services. Our goal is to assist you in finding the most cost-effective design solutions that not only match your preferences but also fit within your budget. Our team includes some of the&nbsp;<strong>best interior designers in <?php echo $curPageName;?></strong>. They are professionals and can help you navigate the process. Our focus is not just on the practical but also on the quality. This is equally encouraging. We start by getting to know our clients and then we help them implement it.</p>
        <p>&nbsp;</p>
        <p>After the meeting is over, our team will email you the initial blueprint. You can then customize the plan.</p>
        <p>&nbsp;</p>
        <h2 style="font-size:30px;"><strong><center>Turnkey Interior Design Solutions in <?php echo $curPageName;?> for Residential&nbsp;</center></strong></h2>
        <p>Thethekedaar provides the best residential interior designs for <?php echo $curPageName;?> at an affordable rate. This will help you achieve the most aesthetic and functional interior solutions. We know that sometimes it can be difficult to find the right interior design solutions even for the most luxurious residential projects. That is why we are here to assist you with customized interior solutions. This sector has been our specialty for a long time, which has allowed us to create the best interior designs for you. Three segments are essential to making your&nbsp;<a href="https://thethekedaar.in/residential-interior-desigining"><strong>residential interior design</strong></a>&nbsp;stand out. We will be focusing on the following domains:</p>
        <p>&nbsp;</p>
        
        <br>
        <div class="row">
                    <div class="col-12 col-md-6 col-lg-4">
                        <!-- Single Blog -->
                        <div class="single-blog res-margin">
                            <!-- Blog Thumb -->
                            <div class="blog-thumb">
                                <a href="#"><img src="../thethekedaar_images/noida/kitchen.jpeg" alt="Home Interior Designers in <?php echo $curPageName;?>"></a>
                            </div>
                            <!-- Blog Content -->
                            <div class="blog-content">
                                <!-- Blog Title -->
                                <h3 class="blog-title my-3"><a href="#">MODULAR KITCHEN</a></h3>
                                <p>Modular Kitchens are becoming increasingly popular in today's world. Thethekedaar recognizes this and has created residential interior designers that cater to these requirements. These modular kitchens combine futuristic features into a compact design. We design modular kitchens that are tailored to the needs of our customers.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-md-6 col-lg-4">
                        <!-- Single Blog -->
                        <div class="single-blog res-margin">
                            <!-- Blog Thumb -->
                            <div class="blog-thumb">
                                <a href="#"><img src="../thethekedaar_images/noida/bedroom-design-in-noida.jpg" alt="Luxury interior Designers in <?php echo $curPageName;?>"></a>
                            </div>
                            <!-- Blog Content -->
                            <div class="blog-content">
                                <!-- Blog Title -->
                                <h3 class="blog-title my-3"><a href="#">BEDROOM</a></h3>
                                <p>Your bedroom is the place where you can relax and recharge after a long day at work. To ensure you are comfortable, we make bedroom designs that reflect your personal style. Our talented team of designers takes the time to understand your tastes and creates a design that reflects your individual needs. Our designs are visually enhanced.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-md-6 col-lg-4">
                        <!-- Single Blog -->
                        <div class="single-blog">
                            <!-- Blog Thumb -->
                            <div class="blog-thumb">
                                <a href="#"><img src="../thethekedaar_images/noida/living-room.jpg" alt="Interior Designer in <?php echo $curPageName;?>"></a>
                            </div>
                            <!-- Blog Content -->
                            <div class="blog-content">
                                <!-- Blog Title -->
                                <h3 class="blog-title my-3"><a href="#">LIVING ROOM</a></h3>
                                <p>Thethekedaar knows that the living room is an important space in your home. The living rooms we design are elegant and feature high-quality sofas and dining tables. With a touch of creativity and hard work, we ensure that everything is exactly as the client requires. We ensure that the design is practical.</p>
                            </div>
                        </div>
                    </div>
                </div><br><br>
        <h3><strong><center>Turnkey Solutions for Commercial Interior Designs in <?php echo $curPageName;?></center></strong></h3>
        <p>Thethekedaar offers high-quality commercial interior design in <?php echo $curPageName;?> at a competitive price. We not only design and decorate residential spaces but also ensure that your commercial interior spaces are unique and well-designed. We understand that the process of designing a commercial and residential space is different. Therefore, we have professionals who are experts in commercial interior design.</p>
        <p>&nbsp;</p>
        <p>You can't design residential interiors as you wish, but&nbsp;<a href="https://thethekedaar.in/commercial-interior-design"><strong>commercial interior design</strong></a>&nbsp;requires you to pay attention to many other important factors. Thethekedaar is one of the most renowned interior designers in <?php echo $curPageName;?>. Our professional interior designers provide the best commercial interior design solutions. So that you get the best value for your money, we have the most complete commercial turnkey solutions. We will meet your expectations and help you achieve the results that you have hoped for. With us, you can get exactly what you want and get the best ROI.</p>
        <p>&nbsp;</p>
        <p>We will execute your commercial plan, no matter how complex, with our expert advice. We are the top commercial&nbsp;<strong>interior designers in <?php echo $curPageName;?></strong>&nbsp;and can offer the best interior design solutions. We can help you create a restaurant or a convenience store. Our clients only have one duty: We will help them set up the restaurant they want.</p>
        <p>&nbsp;</p>
        <p>The design and arrangement are key to creating the best commercial space design. We have strived to do that. Thethekedaar's interior design team can guarantee that you will get the best when designing your commercial interiors in <?php echo $curPageName;?>. Get in touch with us today to discuss your next interior design project. After you approve the design plan and the rate, we will provide a quote and begin working on your project.</p>
         <br>		
      </div>
      
      
      <div class="row justify-content-between align-items-center">
<div class="col-12 col-lg-6">
<div class="about-thumb text-center">
    <div style=" padding:0 10px "class="about-content section-heading text-center text-lg-left pl-md-4 mt-5 mt-lg-0 mb-0">
    <h3 class="fcf-h3"><center>Talk to an Interior Designer</center></h3>
    <br><p>If you would like to get in contact with the Thethekedaar Interior, you have a number of options you can call or mail to below option, our team will support you as soon as possible.</p><br>
<div class="blog-thumb">
<a href="https://thethekedaar.in/thethekedaar_images/thethekedaar.pdf"><img src="https://thethekedaar.in/thethekedaar_images/thethekedaar-profile.png" alt="Thethekedaar Profile" height="250px" style="padding:2%"></a>
</div>
</div>
</div>
</div>
<div class="col-12 col-lg-6">
    <h3 class="fcf-h3"><center>Query Form</center></h3>
<div class="fcf-body">
    <div id="fcf-form">
    <form id="fcf-form-id" class="fcf-form-class" method="post" action="../php/location_form">
        <div class="fcf-form-group">
            <!--<label for="Name" class="fcf-label">Your name</label>-->
            <div class="fcf-input-group">
                <input type="text" id="Name" name="name" placeholder="Name*" class="fcf-form-control" required>
            </div>
        </div>
        <input type="hidden" name="location" value="<?php echo $curPageName;?>">
        <div class="fcf-form-group">
            <!--<label for="Name" class="fcf-label">Mobile</label>-->
            <div class="fcf-input-group">
                <input type="text" id="Name" name="mobile" class="fcf-form-control" placeholder="Mobile Number*" onkeypress="return onlyNumberKey(event)" maxlength="12" required>
            </div>
        </div>

        <div class="fcf-form-group">
            <!--<label for="Email" class="fcf-label">Your email address</label>-->
            <div class="fcf-input-group">
                <input type="email" id="Email" name="email" class="fcf-form-control" placeholder="Email ID (Optional)" required>
            </div>
        </div>
        <p style="font-size:18px;">Service you're interested in: </p>
        <label><input type="radio" id="service" name="service" value="Decorating"/> Decorating &ensp;&ensp;&ensp;</label>
        <label><input type="radio" id="service" name="service" value="Remodeling"/> Remodeling &ensp;&ensp;&ensp;</label>
        <label><input type="radio" id="service" name="service" value="Commercial"/> Commercial &ensp;&ensp;&ensp;</label>
        <label><input type="radio" id="service" name="service" value="Remodeling"/> New Construction </label><br></br>
        <div class="fcf-form-group">
            <!--<label for="Message" class="fcf-label">Your message</label>-->
            <div class="fcf-input-group">
                <textarea id="Message" name="message" placeholder="Message*" class="fcf-form-control" rows="6" maxlength="3000" required></textarea>
            </div>
        </div>

        <div class="fcf-form-group">
            <button type="submit" id="fcf-button" class="fcf-btn fcf-btn-primary fcf-btn-lg fcf-btn-block">Request A Call Back</button>
        </div>


    </form>
    </div>
    </div>
</div>
</div>
<br>
</div>
 
 <div class="outer-grid">
<div class="inner-grid">
    <div class="img-comp-container">
  <div class="img-comp-img">
    <img src="../thethekedaar_images/before-after-location-image/5-2.jpg" style="height:200px; width: 300px; max-width: 300px;">
  </div>
  <div class="img-comp-img img-comp-overlay">
    <img src="../thethekedaar_images/before-after-location-image/5-1.jpg" style="height:200px; width: 300px;max-width: 300px;">
  </div>
</div>
</div>
<div class="inner-grid">
<div class="img-comp-container">
  <div class="img-comp-img">
    <img src="../thethekedaar_images/before-after-location-image/6-2.jpg" style="height:200px; width: 300px; max-width: 300px;">
  </div>
  <div class="img-comp-img img-comp-overlay">
    <img src="../thethekedaar_images/before-after-location-image/6-1.jpg" style="height:200px; width: 300px; max-width: 300px;">
  </div>
</div>
</div>
<div class="inner-grid">
<div class="img-comp-container">
  <div class="img-comp-img">
    <img src="../thethekedaar_images/before-after-location-image/3-1.jpg" style="height:200px; width: 300px; max-width: 300px;">
  </div>
  <div class="img-comp-img img-comp-overlay">
    <img src="../thethekedaar_images/before-after-location-image/3-2.jpg" style="height:200px; width: 300px; max-width: 300px;">
  </div>
</div>
</div>
<div class="inner-grid">
<div class="img-comp-container">
  <div class="img-comp-img">
    <img src="../thethekedaar_images/before-after-location-image/4-2.jpg" style="height:200px; width: 300px; max-width: 300px;">
  </div>
  <div class="img-comp-img img-comp-overlay">
    <img src="../thethekedaar_images/before-after-location-image/4-1.jpg" style="height:200px; width: 300px; max-width: 300px;">
  </div>
</div>
</div>
</div>

       <div class="faq">
         <br>
         <h3 style="font-size:30px;">
            <center><b>Frequently Asked Questions</b></center>
         </h3>
         <br>
         <div class="wrapperfaq">
            <div class="containerfaq">
               <div class="question">
                  What is a normal budget for interior design?
               </div>
               <div class="answercont">
                  <div class="answer">
					 <p>A normal budget for interior design depends on the size of the project and the level of detail desired. Generally, a basic<strong>&nbsp;interior design project can range from 15,000 INR to 50,000 INR</strong>, while&nbsp;<strong>a larger project with more detailed work can cost up to 30 Lakh or more.</strong>&nbsp;For a more precise estimate, it is best to consult an interior designer who can provide an accurate quote based on the scope of the project.</p>                  
					</div>
               </div>
            </div>
            <div class="containerfaq">
               <div class="question">
                  What is the most essential piece of interior design advice you offer when creating a space?
               </div>
               <div class="answercont">
                  <div class="answer">
                    <p>As an interior designer in Delhi, The most important piece of interior design advice that our team provides when designing a space is to create a functional layout that is both aesthetically pleasing and practical. This means considering the furniture, lighting, accessories, and colors that will best suit the purpose of the space and how people will use it. It is also important to consider how each element in the space will work together to create a cohesive, unified look.</p>					</div>
               </div>
            </div>
            <div class="containerfaq">
               <div class="question">
                  Why should I go with Thethekedaar to design my home?
               </div>
               <div class="answercont">
                  <div class="answer">
						<p> Thethekedaar offers a wide range of services that can help you design the perfect home for your needs. They have experienced designers who can work with you to create a unique and personalized look that suits your style and budget. We use the latest technologies and materials, so you know that your home will be up to date with current trends. Plus, We have access to a range of suppliers, so they can source the best quality materials at competitive prices.</p>
                  </div>
               </div>
            </div>
            <div class="containerfaq">
               <div class="question">
                  Does Thethekedaar design a house that is already made?
               </div>
               <div class="answercont">
                  <div class="answer">
					<p>Big&nbsp;<strong>YES</strong>&nbsp;for this, We can&nbsp;<strong>redesign your house</strong>&nbsp;that is already made. But Thethekedaar usually designs a house from scratch, according to the client's specifications and requirements.</p>
                  </div>
               </div>
            </div>
            <div class="containerfaq">
               <div class="question">
                  Whom should you contact for luxury interior designing in <?php echo $curPageName;?>?
               </div>
               <div class="answercont">
                  <div class="answer">
					<p>If you are looking for luxury interior designing services in <?php echo $curPageName;?>, you can contact our experienced interior designers. Thethekedaar will be able to provide you with the best ideas and designs to create a luxurious interior for your home. You can also look for&nbsp;<a href="https://www.google.com/search?hl=en-IN&amp;gl=in&amp;q=The+Thekedaar,+87/1,+3rd+Floor,+WHS+Block+2,+Kirti+Nagar,+Delhi,+110015&amp;ludocid=3588696110751365194&amp;lsig=AB86z5VEEa17cH6dkQdowCLlsGHr&amp;hl=en&amp;gl=IN#lrd=0x390d059c9904acc7:0x31cd9c195829384a,1"><strong>reviews online</strong></a>&nbsp;to find the most reliable services.</p>					
                  </div>
               </div>
            </div>
            <div class="containerfaq">
               <div class="question">
                  What is the cost of interior design?
               </div>
               <div class="answercont">
                  <div class="answer">
						<p>The cost of interior design varies depending on the size of the project and the complexity of the design. Generally,&nbsp;<strong>the cost can range from Rs. 15,000 to Rs. 2,00,000 or more.</strong>&nbsp;The cost will also depend on the materials used and the number of professionals required for the project. For example, for a simple design, the cost may be lower, while for a complex design, the cost may be higher. Additionally, the cost may also depend on the experience of the professionals involved in the project.</p>
                  </div>
               </div>
            </div>
         </div>
      </div>
<script>
initComparisons();
</script>
      
      <br>
      <?php include("footer.php"); ?>
      <script>
         let question = document.querySelectorAll(".question");
         question.forEach(question => {
           question.addEventListener("click", event => {
             const active = document.querySelector(".question.active");
             if(active && active !== question ) {
               active.classList.toggle("active");
               active.nextElementSibling.style.maxHeight = 0;
             }
             question.classList.toggle("active");
             const answer = question.nextElementSibling;
             if(question.classList.contains("active")){
               answer.style.maxHeight = answer.scrollHeight + "px";
             } else {
               answer.style.maxHeight = 0;
             }
           })
         })
      </script>
   </body>
</html>