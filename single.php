
<?php 


get_header();


include ('sidebar.php');

?>



<body class="w3-black">



<!-- Page Content -->
<div class="w3-padding-large" id="main">
  <!-- Header/Home -->
  <header class="w3-container w3-padding-32 w3-center w3-black" id="home">
    <h1 class="w3-jumbo"><span class="w3-hide-small">I'm</span> Denis Sanchez</h1>
    <p>Web Developer, Programmer & Designer</p>
    <img src="<?php bloginfo('template_url'); ?> /img/p7.jpg" alt="boy" class="w3-image" width="400" height="600">
  </header>

  <!-- About Section -->
  <div class="w3-content w3-justify w3-text-grey w3-padding-64" id="about">
    <h2 class="w3-text-light-grey">Denis  Sanchez Leyva</h2>
    <hr style="width:318px" class="w3-opacity">
    <p>I studied Industrial electronics, but I have been working in programming my whole life. This history begins since 1991 when I started learning the language of programming Basic, Pascal and C. After that continued with the DataBase like DBASE III, with Clipper and later Foxpro for MS DOs, Also Borland Delphi. Later on with the #Net continue with Visual Studio, specially with Visual Foxpro and C#. I let some important projects in Cuba about accounting.

I migrated to USA in 2009 and I stoped to programming but for my own I continued learning online new technologies. I learned Java first with Eclipse and later with Android Studio. I built some apps for androids.

Later I learned HTML, CSS, and Javascript with the library Jquery and Bootstrap and also built some apps for all devices.

Lastly I learned Angular for web and Nativescript and Ionic for Movil. I never stop to learn. I have taken other courses in Udemy such us: NodeJs, ExpressJs, React, Native React, The Modern Javascript, Materialize, Bootstrap and also Python and Django. Even the new Flutter of Google to build cross platform.

Today I have some certifications of Udemy of the most updated courses in programming is concerned.
    </p>
    <h3 class="w3-padding-16 w3-text-light-grey">My Skills</h3>
    <p class="w3-wide">Programmer</p>
    <div class="w3-white">
      <div class="w3-dark-grey" style="height:28px;width:95%"></div>
    </div>
    <p class="w3-wide">Web Design</p>
    <div class="w3-white">
      <div class="w3-dark-grey" style="height:28px;width:85%"></div>
    </div>
    <p class="w3-wide">Mobil Apps Developer</p>
    <div class="w3-white">
      <div class="w3-dark-grey" style="height:28px;width:80%"></div>
    </div><br>
    
    <div class="w3-row w3-center w3-padding-16 w3-section w3-light-grey">
      <div class="w3-quarter w3-section">
        <span class="w3-xlarge">5+</span><br>
        Partners
      </div>
      <div class="w3-quarter w3-section">
        <span class="w3-xlarge">20+</span><br>
        Projects Done
      </div>
      <div class="w3-quarter w3-section">
        <span class="w3-xlarge">10+</span><br>
        Happy Clients
      </div>
      <div class="w3-quarter w3-section">
        <span class="w3-xlarge">10+</span><br>
        Meetings
      </div>
    </div>

    <button class="w3-button w3-light-grey w3-padding-large w3-section">
      <i class="fa fa-download"></i> Download Resume
    </button>
    
    <!-- Grid for pricing tables -->
    <h3 class="w3-padding-16 w3-text-light-grey">My Price</h3>
    <div class="w3-row-padding" style="margin:0 -16px">
      <div class="w3-half w3-margin-bottom">
        <ul class="w3-ul w3-white w3-center w3-opacity w3-hover-opacity-off">
          <li class="w3-dark-grey w3-xlarge w3-padding-32">Basic</li>
          <li class="w3-padding-16">Web Design</li>
          <li class="w3-padding-16">App Build</li>
          <li class="w3-padding-16">Deploy</li>
          <li class="w3-padding-16">Hosting</li>
          <li class="w3-padding-16">
            <h2>$ 10</h2>
            <span class="w3-opacity">per month</span>
          </li>
          <li class="w3-light-grey w3-padding-24">
            <button class="w3-button w3-white w3-padding-large w3-hover-black">Sign Up</button>
          </li>
        </ul>
      </div>

      <div class="w3-half">
        <ul class="w3-ul w3-white w3-center w3-opacity w3-hover-opacity-off">
          <li class="w3-dark-grey w3-xlarge w3-padding-32">Pro</li>
          <li class="w3-padding-16">Web Design</li>
          <li class="w3-padding-16">App Build</li>
          <li class="w3-padding-16">Hosting and Deploy</li>
          <li class="w3-padding-16">Maintenace Support</li>
          <li class="w3-padding-16">
            <h2>$ 25</h2>
            <span class="w3-opacity">per month</span>
          </li>
          <li class="w3-light-grey w3-padding-24">
            <button class="w3-button w3-white w3-padding-large w3-hover-black">Sign Up</button>
          </li>
        </ul>
      </div>
    <!-- End Grid/Pricing tables -->
    </div>
    
    <!-- Testimonials -->
    <h3 class="w3-padding-24 w3-text-light-grey">My Reputation</h3>  
    <img src="/img/bandmember.jpg" alt="Avatar" class="w3-left w3-circle w3-margin-right" style="width:80px">
    <p><span class="w3-large w3-margin-right">Chris Fox.</span> CEO at Mighty Schools.</p>
    <p>Jane Doe saved us from a web disaster.</p><br>
    
    <img src="/imag/avatar_g2.jpg" alt="Avatar" class="w3-left w3-circle w3-margin-right" style="width:80px">
    <p><span class="w3-large w3-margin-right">Rebecca Flex.</span> CEO at Company.</p>
    <p>No one is better than Jane Doe.</p>
  <!-- End About Section -->
  </div>
  
  <!-- Portfolio Section -->
  <div class="w3-padding-64 w3-content" id="photos">
    <h2 class="w3-text-light-grey">My Projects</h2>
    <hr style="width:200px" class="w3-opacity">

    <!-- Grid for photos -->
    <div class="w3-row-padding" style="margin:0 -16px">
      <div class="w3-half w3-col s12 w3-animate-zoom">
        <img src="<?php bloginfo('template_url'); ?> /img/p1.jpg"  style="width:100%">
        <img src="<?php bloginfo('template_url'); ?> /img/p2.jpg" style="width:100%">
        <img src="<?php bloginfo('template_url'); ?> /img/p3.jpg" style="width:100%">
        <img src="<?php bloginfo('template_url'); ?> /img/p4.jpg" style="width:100%">
        <img src="<?php bloginfo('template_url'); ?> /img/p5.jpg" style="width:100%">
        <img src="<?php bloginfo('template_url'); ?> /img/p6.jpg" style="width:100%">
        <img src="<?php bloginfo('template_url'); ?> /img/p7.jpg" style="width:100%">
        <img src="<?php bloginfo('template_url'); ?> /img/p8.jpg" style="width:100%">
      </div>
   
      <div class="w3-half w3-col s12 w3-animate-right">
        <img src="<?php bloginfo('template_url'); ?> /img/p10.jpg" style="width:100%">
        <img src="<?php bloginfo('template_url'); ?> /img/p11.jpg" style="width:100%">
        <img src="<?php bloginfo('template_url'); ?> /img/p12.jpg" style="width:100%">
        <img src="<?php bloginfo('template_url'); ?> /img/p13.jpg" style="width:100%">
     
        <img src="<?php bloginfo('template_url'); ?> /img/p14.jpg" style="width:100%">
        <img src="<?php bloginfo('template_url'); ?> /img/p15.jpg" style="width:100%">
        <img src="<?php bloginfo('template_url'); ?> /img/p16.png" style="width:100%">
        <img src="<?php bloginfo('template_url'); ?> /img/angular-todos.png" style="width:100%">
      </div>
    <!-- End photo grid -->
    </div>
  <!-- End Portfolio Section -->
  </div>

  <!-- Contact Section -->
  <div class="w3-padding-64 w3-content w3-text-grey" id="contact">
    <h2 class="w3-text-light-grey">Contact Me</h2>
    <hr style="width:200px" class="w3-opacity">

    <div class="w3-section">
      <p><i class="fa fa-map-marker fa-fw w3-text-white w3-xxlarge w3-margin-right"></i> Miami. FL, US</p>
      <p><i class="fa fa-phone fa-fw w3-text-white w3-xxlarge w3-margin-right"></i> Phone: +00 786 51515</p>
      <p><i class="fa fa-envelope fa-fw w3-text-white w3-xxlarge w3-margin-right"> </i> Email: dslij@hotmail.com</p>
    </div><br>
    <p>Lets get in touch. Send me a message:</p>

    <form action="/action_page.php" target="_blank" >
      <p><input class="w3-input w3-padding-16" type="text" placeholder="Name" required name="Name"></p>
      <p><input class="w3-input w3-padding-16" type="text" placeholder="Email" required name="Email"></p>
      <p><input class="w3-input w3-padding-16" type="text" placeholder="Subject" required name="Subject"></p>
      <p><input class="w3-input w3-padding-16" type="text" placeholder="Message" required name="Message"></p>
      <p>
        <button class="w3-button w3-light-grey w3-padding-large" type="submit">
          <i class="fa fa-paper-plane"></i> SEND MESSAGE
        </button>
      </p>
    </form>
  <!-- End Contact Section -->
  </div>
  

  <?php get_footer(); ?>
 
   <!-- End Gallery Animated on the top -->

<!-- END PAGE CONTENT -->
</div>

</body>
</html>