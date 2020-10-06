<!DOCTYPE html>
<html lang="en">
<head>
<link rel="stylesheet" type="text/css" href="contact.css">

</head>

<?php include "./includes/header.html" ?>


    <div class="content-container">
    <header id="header-alt">
        <div class="crumbs">
            <div class="crumbs-items">
    <a href="index">Home</a>	&gt;   <a href="act">Take Action</a>	&gt;   <a href="about">About</a>
</div>
        </div><div class="header-img-container" id="about-header"></div>
            <div class="hero-txt" id="alt-hero-txt">
                <h1>about us</h1>
                <p>Find out more about us and the cause.</p>
            </div>
            <div class="hero-opacity-bg" id="alt-hero-bg">
            </div>
        </header>

        <section class="content-1" id="about-1">
            <h1>who we are</h1>
            <p> Knights Against Hunger is an advocacy group for hunger and food insecurity formed from a group of University of Central Florida students. 
                We wanted to bring awareness to this issue after truly realizing the challenges of food insecurity, not only worldwide, but right here at home in Central Florida. 
                Our project team consists of Yoandy Vargas (Front-End developer and Project Manager), Vicky Leon (Information Architecture, User Experience/UI Design), Jessica Sanchez (Full-stack Developer), Miranda Foster (User Experience/UI Designer), and Nick Powell (Data Reseacher and Content Manager). </p>
        </section>
        <section class="content-8">
        <div class="title">
      <h1>Contact us</h1>
      <p>Questions, comments, concerns, feedback or want more information? Please contact us!</p>
   </div>
   <div class="box">

      <form class="contact-form" action="contact_send.php" method="post">


         <input type="text" name="first_name" id="first_name" class="form-control" placeholder="Name" required><br>


         <input type="email" name="email" id="email" class="form-control" placeholder="Email" required><br>


         <textarea type="text" name="message" id="message" class="form-control" placeholder="Message" rows="4" required></textarea><br>


         <input type="submit" name="submit" id="submit" class="form-control submit" value="Submit"> <br>



       </form>

       </div>
       <?php
            if (isset($_GET['mailsent'])){
              echo '<p class="response">The message has been sent succesfully. Thanks for contacting us!</p>';
            }
          ?>


    </div>
    </section>
    <?php include "./includes/footer.html" ?>
</body>


</div>

</html>