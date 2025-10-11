  <div class="login-popup">
  	 <div class="box">
  	 	 <div class="img-area">
  	 	 	<div class="img">
  	 	 	</div>
  	 	 	<img src="https://thethekedaar.in/images/logo/logo1.png" width="250px">
  	 	 </div>
  	 	 <div class="form" >
  	 	 	<div class="close">&times;</div>
  	 	 	<h1>Make an Appointment</h1>
  	 	 	<form method="post" action="../php/location_form">
  	 	 		<div class="form-group">
  	 	 			<input type="text" placeholder="Name*" name="name" class="form-control" required>
  	 	 		</div>
				<div class="form-group">
  	 	 			<input type="text" placeholder="Mobile*" name="mobile" class="form-control" required>
  	 	 		</div>
				<div class="form-group">
  	 	 			<input type="text" placeholder="Email" name="email" class="form-control" required>
  	 	 		</div>
				<div class="form-group">
  	 	 			<textarea id="Message" name="message" placeholder="Message" class="form-control" rows="6" maxlength="3000" required></textarea>
  	 	 		</div>
  	 	 		<button type="submit" class="btn">Submit</button>
  	 	 	</form>
  	 	 </div>
  	 </div>
  </div>
<script>
  const loginPopup = document.querySelector(".login-popup");
  const close = document.querySelector(".close");


  window.addEventListener("load",function(){
 
   showPopup();
   // setTimeout(function(){
   //   loginPopup.classList.add("show");
   // },5000)

  })

  function showPopup(){
        const timeLimit = 5 // seconds;
        let i=0;
        const timer = setInterval(function(){
         i++;
         if(i == timeLimit){
          clearInterval(timer);
          loginPopup.classList.add("show");
         } 
         console.log(i)
        },100);
  }


  close.addEventListener("click",function(){
    loginPopup.classList.remove("show");
  })
</script>


<span style='float: left;'>
<a href='tel:919777705555' class='float1' target='_blank'>
<img src='../images/logo/call.webp' alt='Thethekedaar' title="Thethekedaar" height="20px;"></a>
</span>
<!--Whats app-->
<span style='float: left;'>
<a href='https://api.whatsapp.com/send?phone=919777705555&text=Hello, I am looking for Interior Design Service. Can you Help me?' class='float' target='_blank' height="20px;">
<img src='../images/logo/WhatsApp.webp' alt='Thethekedaar'>
</a>
</span>
    <!--====== Scroll To Top Area Start ======-->
    <div id='scrollUp' title='Scroll To Top'>
        <i class='fas fa-arrow-up'></i>
    </div>
    <!--====== Scroll To Top Area End ======-->

    <div class='main overflow-hidden'>
        <!-- ***** Header Start ***** -->
        <header id='header'>
            <!-- Navbar -->
            <nav data-aos='zoom-out' data-aos-delay='800' class='navbar navbar-expand'>
                <div class='container header'>
                    <!-- Navbar Brand-->
                    <a class='navbar-brand' href='/'>
                        <img class='navbar-brand-regular' src='../images/logo/logo2.png' alt='Thethekedaar' height='100px' width='150px'>
                        <img class='navbar-brand-sticky' src='../images/logo/logo1.png' alt='Thethekedaar' height='100px' width='150px'>
                    </a>
                    <div class='ml-auto'></div>
                    <!-- Navbar -->
                                        <!-- Navbar -->
                    <ul class='navbar-nav items'>
                        <li class='nav-item'>
                            <a class='nav-link' href='/'>Home</a>
                        </li>
                        <li class='nav-item'>
                            <a href='../aboutus' class='nav-link'>About us</a>
                        </li>
                        <li class='nav-item'>
                            <a href='../service-2' class='nav-link'>Services</a>
                        </li>
                        <li class='nav-item dropdown'>
                            <a class='nav-link' href='../portfolio'>Portfolio</i></a>
                        </li>
                        <li class='nav-item dropdown'>
                            <a class='nav-link' href='https://thethekedaar.in/blogs'>Blogs</i></a>
                        </li>
                    </ul>


                    <!-- Navbar Toggler -->
                    <ul class='navbar-nav toggle'>
                        <li class='nav-item'>
                            <a href='#' class='nav-link' data-toggle='modal' data-target='#menu'>
                                <i class='fas fa-bars toggle-icon m-0'></i>
                            </a>
                        </li>
                    </ul>

                    <!-- Navbar Action Button -->
                    <ul class='navbar-nav action'>
                        <li class='nav-item ml-3'>
                            <a href='../contact-us-2' class='btn ml-lg-auto btn-bordered-white'><i class='fas fa-paper-plane contact-icon mr-md-2'></i>Contact Us</a>
                        </li>
                    </ul>
                </div>
            </nav>
        </header>