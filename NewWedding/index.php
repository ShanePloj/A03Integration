<?php 
  foreach ($_POST as $key => $value) {
    echo '<p><strong>' . $key.':</strong> '.$value.'</p>';
  }
?>
<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="utf-8">
        <title>Stephanie and Jordan's Wedding</title>
        <link rel="shortcut icon" href="images/tricharge.png">
        <link rel="stylesheet" href="styles/main.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
        <script src="js/lib/jquery-2.1.4.js"></script>
        <script src="js/lib/jquery.mobile-1.4.5.js"></script>
        <link rel="stylesheet" type="text/css" href="css/lib/jquery.mobile-1.4.5.css">

        
        <!-- Sending the Email -->
        <script>
        
            $(document).ready(function(){

    $( "#submitBtn" ).click(function( event ) {
        //values
        var name=document.getElementById('name').value;
        var dietary=document.getElementById('dietary').value;
        var dataString = {"name": name, "dietary":dietary}
        $.ajax({
            type:"post",
            url:"contact.php",
            data: dataString,
            success: function(html) {
                $('#feedback').html(html);
            }
        });
      event.preventDefault();
    });
});
            
        </script>
        
        
        <!-- Sending the Email 
        <script>
        
            $(document).ready(function(){

    $( "#submitBtn" ).click(function( event ) {
        var beef = document.getElementById('beef');
        var chicken = document.getElementById('chicken');
        var veg = document.getElementById('vegetarian')
        //values
        var name=document.getElementById('name').value;
        var email=document.getElementById('email').value;
        
        if (beef.checked) {
            var food=beef.value;
        }
        else if (chicken.checked) {
            var food=chicken.value;
        }
        else if (veg.checked) {
           var food=veg.value;      
        }
        
        var dietary=document.getElementById('dietary').value;
        var dataString = {"name": name, "email":email, "food": food, "dietary":dietary}
        $.ajax({
            type:"post",
            url:"contact.php",
            data: dataString,
            success: function(html) {
                $('#feedback').html(html);
            }
        });
      event.preventDefault();
    });
});
            
        </script>-->
        
        
        <!-- Moving the Email form up and down based on yes or NO-->
        <script>

            window.onclick = function() {
                var coming = document.getElementById("isComing");
                var yes = document.getElementById('yes');
                var no = document.getElementById('no');

                if(yes.checked && coming.classList.contains("notComingTrans")) {
                    coming.style.height = '0px';
                    coming.classList.remove("notComingTrans");
                    setTimeout(function(){
                        coming.classList.add("comingTrans");
                        
                    }, 100);
                }
                else if (yes.checked){
                    coming.classList.add("comingTrans");
                }
                
                
                if(no.checked && coming.classList.contains("comingTrans")) {
                    coming.style.height = '575px';
                    coming.classList.remove("comingTrans");
                     setTimeout(function(){
                        coming.classList.add("notComingTrans");
                    }, 100);
                }
                else if (no.checked){
                    coming.classList.add("notComingTrans");
                }
               
            }

        </script>
        
        
        <!-- Dunno, it does something -->
        <script>

            $("#sLeft > div:gt(0)").hide();

            setInterval(function() {
                $('#sLeft > div:first')
                    .fadeOut(1000)
                    .next()
                    .fadeIn(1000)
                    .end()
                    .appendTo('#sLeft');
            }, 5000);

            $("#sRight > div:gt(0)").hide();

            setInterval(function() {
                $('#sRight > div:first')
                    .fadeOut(1000)
                    .next()
                    .fadeIn(1000)
                    .end()
                    .appendTo('#sRight');
            }, 5000);


        </script>

        
        <!-- All animations and stuff -->
        <script>
            /*Smooth Scrolling*/
            $(document).ready(function(){

                $("a").on('click', function(event) {
                    if (this.hash !== "") {
                        event.preventDefault();
                        var hash = this.hash;
                        $('html, body').animate({
                            scrollTop: $(hash).offset().top
                        }, 800, function(){
                        });
                    }
                });
            });


            window.onscroll = function() {animation()};

            function animation() {
                var img = document.getElementById("img");
                var nav = document.getElementById("welcome");
                var main = document.getElementById("main");

                if(window.pageYOffset <=50.1 && nav.classList.contains("navtrans")) {
                    console.log(nav);
                    nav.classList.remove("navtrans");
                    nav.classList.remove("sticky");
                    img.classList.remove("imganimate");
                    main.classList.remove("mainanimate");

                }

                if (window.pageYOffset <=50) {
                    img.classList.add("imganimateback");
                    nav.classList.add("navtransback");

                }

                if (window.pageYOffset >= 79.9 && nav.classList.contains("navtransback")) {
                    img.classList.remove("imganimateback");
                    nav.classList.remove("navtransback");
                    main.classList.remove("mainanimate")
                }

                if (window.pageYOffset >= 80) {
                    img.classList.add("imganimate");
                    nav.classList.add("navtrans");
                    nav.classList.add("sticky");
                    main.classList.add("mainanimate")
                }

                if (window.pageYOffset >=20) {
                    $("#title2").fadeIn();
                }
                else {
                    $("#title2").fadeOut();
                }
                if (window.pageYOffset >=400) {
                    $(".goTop").fadeIn();
                }
                else {
                    $(".goTop").fadeOut();
                }

            }

        </script>

    </head>

    <body name="top" id="top">
        <div id="background">
            <div id ="welcome" class="navtransback">
                <div id="title2"><a href="#top" id="goTop">Stephanie <img id="img2" src="images/ring.png"> Jordan</a></div>
                <div id="nav_menu">
                    <ul>
                        <li><a href="#top">Home</a></li>
                        <li><a href="#about" class="info">Info</a></li>
                        <img id="img" src="images/ring.png">
                        <li><a href="#contact" class="contact">RSVP</a></li>
                        <li><a href="#album" class="album">Album</a></li>
                    </ul>
                </div>
                <h1 id="intro">Stephanie and Jordan</h1><br><br><h2>Grey Silo - October 5th, 2019</h2>
                <img class="arrow "src="images/arrow.png">
            </div>
        </div>
        <main id="main">
            <div class="section" name="about" id="about">
                <h1 class="title">ABOUT</h1>
                <div class="line"></div>
                <div class="content" style="">

                    <p>Jordan and Stephanie met through a mutual friend in their first year of university, where they started bonding while watching musicals with friends (go figure, movies and music, perfect!). In second year, Stephanie struggled to wake up for classes and Jordan kindly helped her arrive on time for classes. After numerous people kept asking whether or not they were dating, (including their closest friends and a family newsletter which posed the same question) Jordan and Stephanie finally started dating partway through second year.</p>
                    <p>Three years of dating have resulted in various adventures including board game nights, numerous summers and Christmases in different provinces, graduations from Acadia (at different times no less!) and living in a cute little red house for a year. On April 27th, 2018, after a delicious dinner, Jordan asked Stephanie to marry him just outside her house. Their latest adventure has taken them to Montreal for Graduate School in a much bigger city than Wolfville, Nova Scotia (It’s only 425X as big, no big deal).</p>
                </div>
            </div>

            <div class="section" id="contact">
                <h1 class="title">CONTACT US</h1>
                <div class="line"></div>
                <div class="content"  id="content3">
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d11573.151270240041!2d-80.50166260541208!3d43.517190483219835!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x882bf2fa36bda839%3A0xf089fc289a862c18!2sGrey+Silo+GC!5e0!3m2!1sen!2sca!4v1537829691817" width="100%" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>


                </div>
                <div class="ui-grid-a">
                    <div id="connect" class="ui-block-a">
                        <div >
                            <h2>2001 University Avenue East<br>
                                Waterloo, ON N2K 4K4</h2>
                        </div>
                        <div >
                            <h2>stephaniejordan2019@gmail.com<br>
                                519-885-2399 </h2>
                            <br><br><br>
                            <div style="font-weight: bold; text-align: center;" id="feedback"></div>
                        </div>
                        
                    </div>
                    <form id="contact" action="" method="post" enctype="text/plain" role="form">
                        
                        <div class="ui-block-b">
                            
                            <input type="text" name="name" id="name" placeholder="Guest Full Name" required/>

                        <textarea type="text" name="dietary" id="dietary" placeholder="Message here" required></textarea>
                            
                            <input type="submit" id="submitBtn" value="Submit">
                            <!--<p>Will you be attending this event?</p>
                                <input type="radio" name="choice" id="yes" value="yes" />Yes<br>

                                <input type="radio" name="choice" id="no" value="no" checked/> No
                            
                            <div id="isComing">
                                <input type="text" name="name" id="name" placeholder="Guest Full Name" required/>

                                <input type="text" name="email" id="email" placeholder=" E-Mail" required>

                                <p>Select a Meal Choice:</p>
                                <input type="radio" name="food" id="beef" value="beef" required/> Beef
                                <input type="radio" name="food" id="chicken" value="chicken" /> Chicken
                                <input type="radio" name="food" id="vegetarian" value="vegetarian" /> Vegetarian
                                <p>Please let us know of any dietary needs:</p>
                                <textarea type="text" name="dietary" id="dietary" placeholder="Type 'None' if not applicable to you" required></textarea>
                                <div id="button">
                                    <input type="submit" id="submitBtn" value="Submit">
                                </div>
                            </div>-->
                        </div>
                    </form>
                    
                </div>

                <p style="clear: both"></p>
            </div>

            <div id="album">
                <div  id="slideshow" >
                    <div id="sRight">
                        <div>
                            <img src='images/image0.jpg'>
                        </div>
                        <div style="display:none">
                            <img src='images/image1.jpg'>
                        </div>
                        <div style="display:none">
                            <img src='images/image2.jpg'>
                        </div>
                        <div style="display:none">
                            <img src='images/image3.jpg'>
                        </div>
                        <div style="display:none">
                            <img src='images/image4.jpg'>
                        </div>
                        <div style="display:none">
                            <img src='images/image5.jpg'>
                        </div>
                        <div style="display:none">
                            <img src='images/image6.jpg'>
                        </div>
                    </div>

                    <div id="sLeft">
                        <div>
                            <img src='images/image7.jpg'>
                        </div>
                        <div style="display:none">
                            <img src='images/image8.jpg'>
                        </div>
                        <div style="display:none">
                            <img src='images/image9.jpg'>
                        </div>
                        <div style="display:none">
                            <img src='images/image10.jpg'>
                        </div>
                        <div style="display:none">
                            <img src='images/image11.jpg'>
                        </div>
                        <div style="display:none">
                            <img src='images/image12.jpg'>
                        </div>
                        <div style="display:none">
                            <img src='images/image13.jpg'>
                        </div>
                    </div>
                    <div style="clear: both;"></div>
                </div>
            </div>
            <a href="#top" id="goTop"><div class="goTop">&uarr;<br>Top</div></a>
        </main>

        <footer>
            <p>Created by Shane Ploj - ShanePloj@gmail.com </p>
        </footer>
    </body>
</html>
