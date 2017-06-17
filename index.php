<!doctype html>
<html lang="en">
  <head>
    <?php include('./php_files/dbconnection.php')?>
    
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Kishon A. Diaz</title>
    <link href="https://fonts.googleapis.com/css?family=Press+Start+2P" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Shrikhand" rel="stylesheet">
    <link rel="stylesheet" href="./css/bootstrap.min.css">
    <link href="css/cover.css" rel="stylesheet">
    <style type="text/css">
      :root .carbonad,
      :root #carbonads-container,
      :root #content > #right > .dose > .dosesingle,
      :root #content > #center > .dose > .dosesingle
      { display: none !important; }
    </style>
<!--    <script type="text/javascript" src="javascript/arraylist.js"></script>-->
    
    <script type="text/javascript" src="javascript/jquery-3.1.1.min.js"></script>
    <link rel="stylesheet" href="css/mycss.css">
    <script type="text/javascript" src="javascript/three.js-master/build/three.js"></script>
    <script type="text/javascript" src="javascript/three.js-master/examples/js/Detector.js"></script>
    <script type="text/javascript" src="javascript/three.js-master/examples/js/renderers/CanvasRenderer.js"></script>
    <script type="text/javascript" src="javascript/mylibs.js"></script>
    <script type="text/javascript" src="./javascript/randomColor.js"></script>
    <?php $processpage="./admin/login.php"; include('./php_files/createdb.php');?>
    
  </head>
  <body>
    
    <?php 
    //include('./php_files/adlonlin.php') ;?>
    <?php 
    
    ?>
   <div class="site-wrapper">

      <div class="site-wrapper-inner">

        <div class="cover-container ">
        <canvas id="backgroundCanvas">
        </canvas>
          
          <div class="masthead clearfix">
<!--            <button id="colormenu">butt</button>-->
<!--            <div class="popup"></div>-->
            <div class="inner">
              
              <img class=" masthead-brand img-circle rimg" src="assets/images/kishon_image.png" alt="Picture of Kishon Diaz" width="369" height="415">
              <h3 class="masthead-brand">Kishon A. Diaz</h3>
              <nav>
                <ul class="nav masthead-nav">
                  <li class="navtop active" data-id="home">
                    <a class="navtags" id="Home" href="#home" data-id="home">Home</a>
                  </li>
                  <li class="navtop" data-id="projects" >
                      <a class="navtags" id="Projects" href="#projects" data-id="projects">Projects</a>
                  </li>
                  <li class="navtop" data-id="code" >
                      <a class="navtags" id="Codes" href="#codes" data-id="codes">Codes</a>
                  </li>
                  <li class="navtop" data-id="about" >
                      <a class="navtags" id="About" href="#about" data-id="about">About Me</a>
                  </li>
                  <li class="navtop" data-id="contact" >
                    <a class="navtags" id="Contact" href="#contact" data-id="contacts">Contact</a>
                  </li>
              </ul>
            </nav>
            </div>
          </div>
          <div class="inner cover">
<!--
            <div class="book">
              <div class="opened">

              </div>
            
          </div>
-->
                            <div class="pages">
                  
                  <div id="home" >
                    <div id="homecont" class="cont">
                     <div class="pagecont">
                       <div class="span">I am passionate about programming and expanding my knowledge in the field of technology. I have strong work ethics, dependable and professional.  Once I am given the opportunity to be a programmer for your company it will open the door to develop new technologies and innovative ideas.<br>
                       <a class="navtags" href="#about" data-id="about">Learn more about me?</a>
                       </div>
                       
                     </div>
                    </div>
                  </div>
                  <div id="project" >
                    <div id="projectcont" class="clo">
                      <div class="pagecont"> 
                       <table class="iconss"> 
                       </table>
                     </div>
                    </div>
                  </div>
                  <div id="code">
                    <div id="codecont" class="clo">
                      <div class="pagecont"> 
                       <table class="iconscode">
                       </table>
                     </div>
                    </div>
                  </div>
                  <div id="about" >
                    <div id="aboutcont" class="clo">
                      <div class="pagecont">
                        <div class="span">
                          I am passionate about programming and expanding my knowledge in the field of technology. I have strong work ethics, dependable and professional.  Once I am given the opportunity to be a programmer for your company it will open the door to develop new technologies and innovative ideas.
                          <br><br>
                          
                          &nbsp; My inspiration is to become a great inventor like Nikola Tesla. In business the bottom line is the profit margin and I intend to create products to sell for profit. I design 3D Models using Autodesk and Up Works Software. I am working with Raspberry pi, Arduinos and Robotics. I own two 3d printers; I built one from scratch and up scaled it, the other one I bought is the Raise 3d printer.  I have taught myself engineering for my intended goals. 
                          <br><br>
                          
                          &nbsp; My Artistic talent is drawing in the style of Realism.  I have been drawing since the age of eight and especially love to draw portraits of people.  I create 2D and 3D Animations using Blender Software. I am creating a web game using Html 5 canvas. Visit My Galleries for a demonstration of my creations.
                          <br><br>
                          
                          <a class="navtags" href="#resume" data-id="resume">If You Would to See my resume Click Here </a>
                          
                          <br>
                          <br>
                          <br>
                          <br>
                          <br>
                          
                          
                        </div>
                   
<!--
                        <div id="aboutpopup" class="popup">
                          <div class="container-fluid">
                            <div class="content">
                              here
                            </div>
                          </div>
                        </div>
-->

                     </div>
                    </div>
                  </div>
                  <div id="contact" class="">
                    <div id="contactcont" class="clo">
                      <div class="pagecont contpage "> 
                       <div id="contactinf" class="linkcont span">
                         If you would like to contact me for job opportunities, or for my freelance coding assistance with your projects my up works profile is <br>
                         <table class="linktable ">
                           <tr>
                             <td class="linktr">
                              <a class="contact_click" target="_blank" href="https://github.com/kishondiaz"><img class="links" src="assets/images/GitHub-Mark-64px.png" alt="github" width="300" height="300">
                              </a>
                             </td>
                            <td class="linktr">
                              <a class="contact_click" target="_blank" href="https://www.upwork.com/o/profiles/users/_~01fde4b6749f2fff7c/"><img class="links" src="assets/images/upwork.png" alt="upworks_link" width="300" height="300">
                              </a>
                             </td>
                             <td class="linktr">
                              <a class="contact_click" href="#gmail" data-id="gmail"><img class="links" src="assets/images/Gmail_Icon.png" alt="upworks_link" width="300" height="300">
                              </a>
                             </td>
                           </tr>
                         </table>
                         
                       </div>
                        <div id="messagezone" class="message_area clo">
                          
                          <div class="span">
                            Email Me At<br>
                            <a href="#close" id="myemail" class="contact_click" data-id="close">kishon.a.diaz@gmail.com</a>
                          </div>
                          <input id="clipboard" type="text" hidden="hidden">
                        <!-- <form >

                            
                            <div class="input_cont">
                              <span class="helper_txt"></span>
                              <input type="text" placeholder="First Name">
                              <span class="error_txt">Error</span>
                            </div><br>
                            <div class="input_cont">
                              <span class="helper_txt"></span>
                              <input placeholder="Last Name">
                              <span class="error_txt">Error</span>
                            </div><br>
                            <div class="input_cont">
                              <span class="helper_txt"></span>
                              <input placeholder="Email">
                              <span class="error_txt">Error</span>
                            </div><br>
                            <div class="input_cont">
                              <span class="helper_txt"></span>
                              <input placeholder="Phone Number">
                              <span class="error_txt">Error</span>
                            </div><br>
                            <div class="input_cont">
                              <span class="helper_txt"></span>
                              <textarea placeholder="Message"></textarea>
                              <span class="error_txt">Error</span>
                            </div><br>
                           <div class="">
                              <span class="helper_txt"></span>
                              <input type="submit" value="Send">
                              <input type="reset" value="Reset">
                              <span class="error_txt">Error</span>
                            </div><br>
                            
                         </form>-->
                       </div>
                      </div>
                    </div>
                  </div>
                <!--  <div id="resume" >
                    <div id="resumecont" class="cont clo">
                      <div class="pagecont">
                        <div class="span">
                          <pre>
                            

    Kishon Diaz

    2750 NW 45th st Apt 101, Oakland Park, FL, 33309

    561-420-7359

    E-mail: kishon.a.diaz@gmail.com

    https://github.com/kishondiaz



    OBJECTIVE



    To obtain a position in a challenging environment that allows me to utilize my software development, web and creative skills to help develop new high-tech products.



    EXPERIENCE



    Xfinity/Comcast, 141 NW 16th St., Pompano Beach, FL 33062                                                              January 2013 

    Dispatcher                                                                                                                                                             December 2013



    •         Helped the Comcast technicians with their jobs using a computer system activating boxes, internet and phone.

    •         Dealt with disgruntled customers and helped to diffuse volatile situations so that the technicians could finish repairs and installations.

    , 789 international Parkway, Sunrise, FL, 33325                                                          February 2008 –

    Comcast Technician 3                                                                                                                                        December 2012  



    •         Worked as a Comcast Technician installing and repairing internet, phone and cable television issues.

    •         Dealt with customers on a daily basis.

    US Marine Corp                                                                                                                                                 2005 – 2007

    Lance Corporal                                                                                                                                                                  



    •         Served in the United States Marine Corp.

    •         Worked as an aviation electronics specialist.

    EDUCATION



    Broward College, 3501 Davie Rd, Davie, Florida 33314                                                                                        2012-

    Pursuing BS in Computer Information                                                                                                                  



    Piper High School                                                                                                                                                              2004

    High School diploma 





    RELATED SKILLS



    •         Proficient in Microsoft Word, Excel and PowerPoint.

    •         Experience with the following programming languages: Python, Java, Android Programming,

    •         Have Completed the classes for CIW Certification, A+ Practical , A++Essentials, Javascript, Php,

    •         Skilled in XML, HTML, CSS, Adobe Flash, Sqlight, Microsoft SQL,C++,C#,

    •         Artistic skills include: Realism, Painted murals, Acrylic paintings, air brush, color pencil, chalk ,use of Wacom drawing tablet to draw in PhotoShop, Adobe Flash, Karita, and Gimp

 

                          </pre>
                          
                          <br>
                          <br>
                          <br>
                          <br>
                          <br>
                          
                          
                        </div>


                     </div>
                    </div>
                  </div>-->
                </div>
          <div class="mastfoot">
            <form action="<?php echo $processpage?>" method="post">
               <input name="adlogsub" id="adlogsubmit" type="submit" value="Log IN:"><span id="admode">OFF</span>
            </form>
            <form>
              <input type="submit"value="Edit" id="adedit"><br>
              <button id="ogout">Log out</button>
            </form>  
          </div>
          </div>
        </div>
      </div>

    </div>

   
    
    <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>

      
      
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script type="text/javascript" src="./javascript/bootstrap.min.js"></script>
<!--    <script type="text/javascript" src="javascript/three.js-master/build/three.js"></script>-->
    
    <script type="text/javascript" src="javascript/mainjs.js"></script>
    <script type="text/javascript" src="javascript/background.js"></script>
<!--    <script type="text/javascript" src="javascript/adloglin.js"></script>-->
    
<script type="text/javascript">
  var adedit = document.getElementById('adedit');
  var ogout = document.getElementById('ogout');
  
  if(loggedon === 1){
    adedit.style.visibility = "visible";
    ogout.style.visibility = "visible";   
  }
  
</script>

  </body>
</html>