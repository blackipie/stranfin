<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Stranfin</title>
    <link rel="shortcut icon" href="image/user-img.png" type="image/x-icon">

    <!-- font awesome cdn link  -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">

    <!-- custom css file link  -->
    <link rel="stylesheet" href="css/style.css">
<style>
@import url('https://fonts.googleapis.com/css2?family=Josefin+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500&display=swap');
</style>
</head>

<body>

    <!-- header section starts  -->

    <header class="header">

        <div class="user">
            <img src="image/user-img.png" alt="">
            <h3>Stranfin</h3>
            <p>Competitive Programmer</p>
        </div>

        <nav class="navbar">
            <a href="#home">home</a>
            <a href="#about">about</a>
            <a href="#gallery">gallery</a>
            <a href="#contact">contact</a>
        </nav>

    </header>

    <!-- header section ends -->

    <div id="menu-btn" class="fas fa-bars"></div>

    <!-- theme toggler  -->

    <div id="theme-toggler" class="fas fa-moon"></div>

    <!-- home section starts  -->

    <section class="home" id="home">
        
         <div class="head">
            <div class="user">
                <img src="image/user-img.png" alt="stranfin">
            </div>
          </div>
        
        <div class="content">
            <h3 class="mobh">Stranfin</h3>
            <p>Coding Enthusiast / B.tech CSE Undergraduate.</p>
            
          
            <button id="popup-btn"  class="btn">Click me</button>
        
           <!-- <input type="button" class="btn" value="Print this page" onClick="window.print()"> -->

        </div>
<div id="popup-wrapper" class="popup-container">
  <div class="popup-content">
    <span id="close">&times;</span>
    <p>Hey! How are you? <br>  wuv u; <br></br> Note: Ignore this message ⚠  </p>
  </div>
</div>

      <div class="player share">
<!--      <audio class="player__audio" controls id="audio">
       <source src="/alag-aasmaan.mp3" type="audio/mpeg" />
     </audio> -->
<audio src="/alag-aasmaan.mp3" id="audio"></audio>
     <div class="player__controls">
       <div class="player__btn player__btn--medium" id="prev">
          
         <i style="color:red !important" class="fas fa-backward"></i>
        
       </div>

       <div class="player__btn player__btn--medium blue play" id="play">
         
         <i class="fas fa-play play-btn"></i>
             
         <i class="fas fa-pause pause-btn hide"></i>
          
       </div>

       <div class="player__btn player__btn--medium" id="next" >
        
         <i style="color:red !important" class="fas fa-forward"></i>
              
       </div>
     </div>
  </div>
    </section>
    

    <!-- home section ends -->

    <!-- about section starts  -->

    <section class="about" id="about">

        <h1 class="heading" style="font-family: 'Josefin Sans', sans-serif;"> <span>about</span> me </h1>

        <div class="row">

            <div class="box-container">
                <div class="box">
                    <h3>10+</h3>
                    <p>Projects</p>
                </div>
                <div class="box">
                    <h3>10+</h3>
                    <p>Tech Skills</p>
                </div>
                <div class="box">
                    <h3>8K+</h3>
                    <p>Hours of Coding</p>
                </div>
                <div class="box">
                    <h3>1K+</h3>
                    <p>DSA Problems Solved</p>
                </div>
            </div>

            <div class="content">
                <h3>Hey! I am<span> Stranfin</span></h3>
                <p>Competitive Coder</p>
                <a href="https://instagram.com/stranfin" target="_blank"
                    class="btn">Follow me</a>
            </div>

        </div>

        <div class="row">

            <div class="progress">
                <h3> C++ <span>90%</span> </h3>
                <div class="bar bar-1-1"><span></span></div>
                <h3> JavaScript <span>75%</span> </h3>
                <div class="bar bar-1-2"><span></span></div>
                <h3> Java <span>80%</span> </h3>
                <div class="bar bar-1-3"><span></span></div>
            </div>

            <div class="progress">
                <h3> Web Development <span>95%</span> </h3>
                <div class="bar bar-2-1"><span></span></div>
                <h3> Android Development<span>30%</span> </h3>
                <div class="bar bar-1"><span></span></div>
                <h3> Competitive Programming<span>100%</span> </h3>
                <div class="bar bar-100"><span></span></div>
            </div>

        </div>

    </section>

    <section class="services" id="listen">

        <h1 class="heading" style="font-family: 'Josefin Sans', sans-serif;"> My <span>Hobbies</span> </h1>

        <div class="box-container">

            <div class="box">
                <i class="fas fa-code"></i>
                <h3>Coding</h3>
                <p>I think of coding the same way an artist thinks of painting or a musician thinks of music, it's not simply a means to an end, or a job, but something inside you that needs to be expressed. Code is something more than just some bytes in a file. Coding is bae.

                </p>
            </div>

            <div class="box">
                <i class="fas fa-music"></i>
                <h3>Music</h3>
                <p>
                    Music is an Escape. Music is Life. Listening to songs makes me feel like I am out of this world. I like Pop music a lot though most of my friends listen to Rap ones. Some of my all time favourites include Cold/mess, Barishein-Anuv Jain, Shape of you and Blank Space.
                </p>
            </div>

            <div class="box">
                <i class="fas fa-bed"></i>
                <h3>Sleeping</h3>
                <p>
                 Sleeping is beautiful. Peaceful. Quiet. There are no obligations or deadlines. Only fluffy pillows, soft cotton sheets, and warm goose-down blankets. You are near the people you love. And the animal you love is also snoring nearby. It makes me think faster and also clear.

                </p>
            </div>

            <div class="box">
                <i class="fas fa-cloud"></i>
                <h3>Cold/mess</h3>
                <p>When i feel cold <br>
                    I'll keep you close <br>
                    And if i could hold you <br>
                    And take you home <br>
                    When at night <br>
                    Your toes touch mine <br>
                    I'll sing you to sleep <br>
                    If you were mine to keep
                 
            
                </p>
            </div>


        </div>

    </section>


    <section class="portfolio" id="gallery">

        <h1 class="heading" style="font-family: 'Josefin Sans', sans-serif;"> my <span>gallery</span> </h1>

        <div class="box-container">



            <div class="box">
                <img src="image/img-2.jpg" alt="">
                <div class="content">
                    <h3 style="font-size: 5rem;font-family: 'Courier New', Courier, monospace">Hey!</h3>
                </div>
            </div>

            <div class="box">
                <img src="image/img-3.jpg" alt="">
                <div class="content">
                    <h3 style="font-size: 5rem;font-family: 'Courier New', Courier, monospace">I</h3>
                </div>
            </div>
         <div class="box">
                <img src="image/img-5.jpg" alt="">
                <div class="content">
                    <h3 style="font-size: 5rem;font-family: 'Courier New', Courier, monospace">Love</h3>
                </div>
            </div>
              <div class="box">
                <img src="image/img-6.jpg" alt="">
                <div class="content">
                    <h3 style="font-size: 5rem;font-family: 'Courier New', Courier, monospace">you</h3>
                </div>
            </div>
            
              <div class="box">
                <img src="image/img-7.jpg" alt="">
                <div class="content">
                    <h3 style="font-size: 5rem;font-family: 'Courier New', Courier, monospace">And</h3>
                </div>
            </div>
            
            <div class="box">
                <img src="image/img-8.jpg" alt="">
                <div class="content">
                    <h3 style="font-size: 5rem;font-family: 'Courier New', Courier, monospace">I</h3>
                </div>
            </div>
                 
            
            <div class="box">
                <img src="image/img-9.jpg" alt="">
                <div class="content">
                    <h3 style="font-size: 5rem;font-family: 'Courier New', Courier, monospace">Miss</h3>
                </div>
            </div>
                 
            <div class="box">
                <img src="image/img-1.jpg" alt="">
                <div class="content">
                    <h3 style="font-size: 5rem;font-family: 'Courier New', Courier, monospace">you</h3>
                </div>
            </div>
            
           </div>

    </section>



    <section class="contact" id="contact">

        <h1 class="heading" style="font-family: 'Josefin Sans', sans-serif;"> <span>contact</span> Me</h1>

        <form action="send.php">
            <input type="text" placeholder="your name" name="name" class="box">
            <input type="email" placeholder="your email" name="email"  class="box">
            <input type="text" placeholder="subject" name="subject" class="box">
            <textarea name="" class="box" placeholder="your message" name="message" id="" cols="30" rows="10"></textarea>
            <input type="submit" value="send message" class="btn">
        </form>


    </section>
    <div class="home" style="margin-top:-10rem !important;margin-bottom:12rem !important">
        <div class="share">
            <a href="https://instagram.com/stranfin" target="_blank"
                class="fab fa-facebook-f"></a>
            <a href="#" class="fab fa-twitter"></a>
            <a href="https://instagram.com/stranfin" target="_blank" class="fab fa-instagram"></a>
            <a href="https://linkedin.com/in/blackipie" class="fab fa-linkedin"></a>
            <!-- <a href="#" class="fab fa-pinterest"></a> -->
        </div>
    </div>
    <!-- contact section ends -->

    <div class="credits" id="cred"> created by <a href="https://instagram.com/stranfin" target="_blank"
            style="color: rgb(236, 28, 125);">Stranfin</a> | <a style="color: red"
            href="https://wa.me/916001932077" target="_blank">Connect</a></div>


    <!-- custom js file link  -->
    <script src="js/script.js"></script>

</body>

</html>
