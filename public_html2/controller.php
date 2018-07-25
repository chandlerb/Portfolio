<?php
/**********************************************
             MENU OPTIONS FROM HOME    
**********************************************/
if(isset($_GET["home"])){
    if($_GET["home"] == "true"){
    $return_str = '<div id="menu_options">';
    $return_str .= '<div class="menu_choice" onclick=home()>HOME</div>';
    $return_str .= '<div class="menu_choice" onclick=about()>ABOUT</div>';
    $return_str .= '<div class="menu_choice" onclick=skills()>SKILLS</div>';
    $return_str .= '<div class="menu_choice" onclick=portfolio()>PORTFOLIO</div>';
    $return_str .= '<div class="menu_choice" onclick=contact()>CONTACT</div></div>';
    echo $return_str;
    }
}
/**********************************************
                MENU OPTIONS    
**********************************************/
if(isset($_GET["mode"])){
    if($_GET["mode"] == "menu_options"){
    $return_str = '<div id="menu_options">';
    $return_str .= '<div class="menu_choice" onclick=test("home")>HOME</div>';
    $return_str .= '<div class="menu_choice" onclick=test("about")>ABOUT</div>';
    $return_str .= '<div class="menu_choice" onclick=test("skills")>SKILLS</div>';
    $return_str .= '<div class="menu_choice" onclick=test("portfolio")>PORTFOLIO</div>';
    $return_str .= '<div class="menu_choice" onclick=test("contact")>CONTACT</div></div>';
    echo $return_str;
    }
}
/**********************************************
                HOME OPTIONS    
**********************************************/
if(isset($_GET["mode"])){
    if($_GET["mode"] == "home"){
    echo '<div id="center_img"><img id="name" style="opacity:1;"src="css/images/name2.png"></div><div id="icons">
    <a id="l_con" target="_blank" href="https://arizona.joinhandshake.com/users/3769331"><img src="css/images/handshake.png"></a>
    <a id="lc_con" target="_blank" href="https://www.linkedin.com/in/chandlerbrown12"><img src="css/images/linkedin.png"></a>
    <a id="rc_con" target="_blank" href="https://github.com/chandlerb"><img src="css/images/github.svg"></a>
    <a  id="r_con" target="_blank" href="https://www.facebook.com/profile.php?id=1365361923"><img src="css/images/facebook.png"></a>
  </div>';
    }
}
/**********************************************
                ABOUT OPTIONS    
**********************************************/
if(isset($_GET["mode"])){
    if($_GET["mode"] == "about"){
    $return_str = '<div id="about_content_about">';
    $return_str .= '<img class="center" style="width:25%;" src="css/images/headshot.png" alt="headshot">';
    
    $return_str .= '<div class="column"><img class="center" style="width:25%;" src="css/images/terminal.png" alt="terminal"> I first started playing with code and writing scripts as a ';
    $return_str .= 'Junior in High School. I have graduated from the University of Arizona ';
    $return_str .= 'with a Bachelor’s of Science in Information Sciences & Technology. ';
    $return_str .= 'I have many different interests when it comes to development. I enjoy ';
    $return_str .= 'complex back end thoughts/theories profs and algorithms that allow our ';
    $return_str .= 'complex systems to run, but I also have a strong passion for front end ';
    $return_str .= 'development and the freedom is provides.</div>';

    $return_str .= '<div class="column"><img class="center" style="width:25%;" src="css/images/greek-column.png" alt="greek-column">';
    $return_str .= 'At the University of Arizona, I joined the Kappa Alpha Order Social Fraternity. My time spent living in the house and taking on responsibilities and roles within the house has played a dramatic role into who I am. My fraternity taught me more than I could have ever imagined about leadership, brotherhood and community. Its where I learned really how to handle myself professionally and be a role model/leader to the younger members. I was almost always in a position of leadership within my fraternity and love how it groomed and shaped how I handle myself.</div>';

    $return_str .= '<div class="column"><img class="center" style="width:25%;" src="css/images/electric-guitar.png" alt="electric-guitar">';
    $return_str .= 'I have been playing the guitar for about 9 years and love the artistic freedom it gives me. I have always loved music and being able to play songs and artists I love is quite a relaxing hobby. I have also enjoyed playing the piano in some free time however I never formally took lessons or learned how to play. I generally have an ear for music and can figure out most fits or chords from guitar translations.</div>';
    

    $return_str .= '<div class="column"><img class="center" style="width:25%;" src="css/images/running.png" alt="console">';
    $return_str .= 'I have always been an athletic and coordinated person, I love playing competitive sports regardless of sport. Growing up in the Bay Area and attending the University of Arizona there is a plethora of teams and organizations I root for. Specifically, I love Football and Basketball, I have been a lifelong 49ers and Warriors fan. These two teams can make or break my mood for days depending on the severity of game!';
    $return_str .= '</div>';
    echo $return_str;
    }
}
/**********************************************
                SKILLS OPTIONS    
**********************************************/
if(isset($_GET["mode"])){
    if($_GET["mode"] == "skills"){
    $return_str = '<div id="about_content">';
    $return_str .= '<h1>Skills</h1>';
    
    $return_str .= '<table id="r_table">
    <caption><h3>Languages</h3></caption>
    <tr>
      <th>Language</th>
      <th>Skill</th>
      <th>Years</th>
    </tr>
    <tr>
        <td>Python</td>
        <td><progress value="100" max="100"></td>
        <td>3+</td>
    </tr>
    <tr>
        <td>HTML/CSS</td>
        <td><progress value="90" max="100"></td>
        <td>2+</td>
    </tr>
    <tr>
        <td>PHP</td>
        <td><progress value="75" max="100"></td>
        <td>1</td>
    </tr>
    <tr>
        <td>SQL</td>
        <td><progress value="80" max="100"></td>
        <td>2</td>
    </tr>
    <tr>
        <td>C/C++</td>
        <td><progress value="60" max="100"></td>
        <td>1</td>
    </tr>
    <tr>
        <td>Scheme</td>
        <td><progress value="60" max="100"></td>
        <td>1</td>
    </tr>
    <tr>
        <td>Prolog</td>
        <td><progress value="70" max="100"></td>
        <td>1</td>
    </tr>
    <tr>
        <td>Haskell</td>
        <td><progress value="50" max="100"></td>
        <td>1</td>
    </tr>
    <tr>
        <td>Bash</td>
        <td><progress value="40" max="100"></td>
        <td>2</td>
    </tr>
    <tr>
        <td>R</td>
        <td><progress value="30" max="100"></td>
        <td>2</td>
    </tr>
    </table>';
    $return_str .= '<table id="l_table">
    <caption><h3>Tools/Applications</h3></caption>
    <tr>
      <th>Application</th>
      <th>Skill</th>
      <th>Years</th>
    </tr>
    <tr>
        <td>Adobe Photoshop</td>
        <td><progress value="90" max="100"></td>
        <td>4+</td>
    </tr>
    <tr>
        <td>Adobe Illustrator</td>
        <td><progress value="60" max="100"></td>
        <td>1</td>
    </tr>
    <tr>
        <td>Arduino</td>
        <td><progress value="70" max="100"></td>
        <td>1</td>
    </tr>
    <tr>
        <td>Git</td>
        <td><progress value="70" max="100"></td>
        <td>3+</td>
    </tr>
    <tr>
        <td>SketchUp</td>
        <td><progress value="60" max="100"></td>
        <td>1</td>
    </tr>
    <tr>
        <td>OpenScad</td>
        <td><progress value="70" max="100"></td>
        <td>1</td>
    </tr>
    <tr>
        <td>Solidworks</td>
        <td><progress value="40" max="100"></td>
        <td>NA</td>
    </tr>
    
    
    </table>';
    $return_str .= '<p style="clear:both;">Comfortable working in a Windows or Unix/Linux enviorment.</p>';
    $return_str .= '<p>I have worked in many differnt enviorments and posess a unique set of skills that allow me to be a competative developer. I am an extremely quick learner and am looking forward to the oppportunity to broaden my horizons and learn new tools and languages. </p>';
    $return_str .= '</div>';
    echo $return_str;
    }
}
/**********************************************
               PORTFOLIO OPTIONS    
**********************************************/
if(isset($_GET["mode"])){
    if($_GET["mode"] == "portfolio"){
    $return_str = '<div id="about_content">';
    $return_str .= '<h1>Portfolio</h1>';
    $return_str .= '<div class="grid-container">';
    // Python Projects
    $return_str .= '<div class="grid-item tile1"><img class="title_icon" src="css/images/imac_py.png" alt="CSC337 Final project"><div class="text"><strong>Py Projects</strong><br> As Python was the first language I learned I have completed hundreds of class projects and individual assignments with Python. My skills range from big data all the way to Artificial Intelligence. I have used many of the different packages and plugins within Python such as Pandas/Numpy/BeautifulSoup and many others. I am an extremely quick learner within anything Python related and love working with the Language.</div></div>';
    // Rapid Prototyping
    $return_str .= '<div class="grid-item tile_white"><img class="title_icon" src="css/images/rapid_proto.png" style="width:100%;"alt="CSC303 Rapid Prototyping"><div class="text""><strong>Rapid Prototyping</strong><br>Projects created on an Arduino have a wide arrange of uses and features. I have completed projects such as small games to distance sensors and a Skittles Sorter that has the capability to sort an entire bag of skittles in 40 seconds. All project source code and write ups can be found within my Github!<br><br><br><br><a target="_blank" href="https://github.com/chandlerb/Skittles-Sorter"><img class="title_icon_git" style="width:40px;" src="css/images/github_b.png"></a></div></div>';
    // Artificial Intelligence 
    $return_str .= '<div class="grid-item tile_white"><video class="title_icon" style="width:100%;" autoplay loop><source src="css/videos/multiagentsearch.mp4" type="video/mp4"></video><div class="text"><strong>Artificial Intelligence</strong><br>Spring of 2018 I took Introduction to Artificial Intelligence taught by Clayton Morrison at the University of Arizona. Following Artificial Inteligence by Stuart Russell and Peter Norvig our time was spent studying many different aspects of AI. Topics included problem solving (search spaces, uninformed and informed search, games, constraint satisfaction), principles of knowledge representation and reasoning (propositional and first-order logic, logical inference, planning), and representing and reasoning with uncertainty (probabilistic inference, reinforcement learning, decision theory).<br>Code is not avialable on Git or online due to academic Integrity, however upon request I will share my solutions.</div></div>';
    // Web Design
    $return_str .= '<div class="grid-item tile3"><img class="title_icon" style="width:60%;" src="css/images/imac_code.png" alt="Web Design"><div class="text""><strong>Web Design</strong><br>Once I realized I had a passion for programming, I knew that web work would be a great place for me to share my knowledge of both design and implementation. Web Development gives me the ability to have more of an artistic approach when coding and I find this to be an interesting challenge. I have a few projects within my GitHub including this website!<br><br><br><br><a target="_blank" href="https://github.com/chandlerb/Skittles-Sorter"><img class="title_icon_git" style="width:40px;" src="css/images/github_b.png"></a></div></div>';
    // ISTA 422 
    $return_str .= '<div class="grid-item"><img class="title_icon" style="width:100%;" src="css/images/337final.png" alt="CSC337 Final project">...</div>';
    // Capstone
    $return_str .= '<div class="grid-item"><img class="title_icon" style="width:100%;" src="css/images/337final.png" alt="CSC337 Final project">...</div>';
    $return_str .= '</div>';
    echo $return_str;
    }
}
/**********************************************
                CONTACT OPTIONS    
**********************************************/
if(isset($_GET["mode"])){
    if($_GET["mode"] == "contact"){    
        $return_str = '<div id="tile_top">';
        $return_str .= '<img id="contact_img" src="css/images/headshot.png" alt="headshot">';
        
        $return_str .= '<div id="text_content">';
        $return_str .= '<h4>Contact Me</h4>';
        $return_str .= '<h4>Chandler Brown</h4>';
        $return_str .= '<h4>13212 Peacock Ct</h4>';
        $return_str .= '<h4>Cupertino, Ca 95024</h4>';
        $return_str .= '</div>';
        
        $return_str .= '<div id="text_content_bottom">';
        $return_str .= '<div class="column3">';
        $return_str .= '<iframe id="map" src="https://www.google.com/maps/embed?pb=!1m10!1m8!1m3!1d175996.05671296586!2d-122.15023224786977!3d37.34783078559185!3m2!1i1024!2i768!4f13.1!5e0!3m2!1sen!2sus!4v1530310563973" width="300" height="225" frameborder="0" style="border:0;max-width:100%;margin-top:15%;"></iframe>';
        $return_str .= '</div>';

        $return_str .= '<div class="column3">';
        $return_str .= '<br><br><h4 style="text-align: center;">Feel free to contact me through my email or cellphone</h4>';
        $return_str .= '<hr><h4 style="text-align: center;"><a href="mailto:chandlerbrown12@gmail.com" target="_top">chandlerbrown12@gmail.com</a></h4>';
        $return_str .= '<h4 style="text-align: center;">650-815-9416</h4>';
        $return_str .= '</div>';
        
        $return_str .= '<div class="column3">';
        $return_str .= '<a download="Chandler Brown resume.pdf" href="css/images/resume.png" title="Resume">
        <img id="resume_img" style="width:90%;margin-left:5%;" alt="Resume" src="css/images/resume.png">
    </a>';
        $return_str .= '</div>';
        
        $return_str .= '</div>';
        


   
    echo $return_str;
    }
}