<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CONVESS</title>
    <link rel="stylesheet" href="start.css" type="text/css">
</head>
<body>
    <header>
    <div class="logos">
        <?php echo ' <img src="http://localhost/serverconvess/light.png"
         style="
         width: 50px;
         height: 50px;
         margin-top: 29px;"
         >';
        ?>

    <div><pre>  </pre></div>

        <div class="headerlogo"> 
            <?php echo '<img 
            src="http://localhost/serverconvess/logo.png"
            style="width:200px;"
            >'; ?>
        </div>

    </div>


    <div class="search">
            <input type="search" id="search" placeholder="Search...">
            <?php echo '<img src="http://localhost/serverconvess/CONVESS%20START/images/Search_Icon.png" 
            width="20px" height="20px">'; ?>
    </div>

    <div class="menu">
        <center><?php echo '<img src="http://localhost/serverconvess/CONVESS%20START/images/actmenu.png" width="50px">'; ?></center>
    </div>

</header>
    
    <div class="wpercent">
        <aside>
            <?php echo '<img src="http://localhost/serverconvess/CONVESS%20START/images/ads_gif.gif" width="300px"
            style="
            border-radius: 20px;
            margin:10px 5px 0px 5px;
            align-self: center;">';?>
        </aside>
<div class="navcontent">
        <nav>
            <div class="home" onclick="CHomePage()">
                    <center><?php echo '<img src="http://localhost/serverconvess/CONVESS%20START/images/bhome.png" width="50px" id="home">'; ?></center>
            </div>

            <div class="notification" onclick="NotiPage()">
                    <center><?php echo '<img src="http://localhost/serverconvess/CONVESS%20START/images/bnot.png" width="50px" id="notification">'; ?></center>
                </div>

            <div class="message" onclick="MessPage()">
                    <center><?php echo '<img src="http://localhost/serverconvess/CONVESS%20START/images/bmes.png" width="50px" id="message">'; ?></center>
                </div>

            <div class="profile" onclick="ProfilePage()">
                    <center><?php echo '<img src="http://localhost/serverconvess/CONVESS%20START/images/profile.png" width="50px" id="profile">'; ?></center>
                </div>
</nav>
<main>
    <div class="homepage" id="homepage" >

        <div class="homepage1">
            <?php echo "<center><img src='http://localhost/serverconvess/logo.png' width='160px' height='90px'></center>"; ?>
            <p><i>SEND ANOYMOUS MESSAGE</i></p>
            <br>

            <form action="">
                <textarea cols="60" rows="10" name="anonymess" placeholder="Enter your message here..." style="
                font-size: 15px; background-color:#ddc1bd;
                padding: 10px; border: hsl(0, 0%, 100%) 2px solid; ; border-radius: 12px;"></textarea>

                <div style="margin-top: 20px;">
                    <label>To:</label>
                <input type="text" placeholder="@convesstor..." name="sendconvesstor" style="
                border-radius: 8px; border: #836853 2px solid; background-color:">
                    <br>
                <button type="submit" value="Send" style="background-color:#ddc1bd;
                border: 2px solid #836853;
                margin-top: 10px; border-radius: 8px;">Send</button>
                </div>
            </form>
        </div>
    </div>

    <div class="notipage" id="notipage">

    </div>
    
    <div class="messpage" id="messpage">

    </div>

    <div class="profilepage" id="profilepage">

    </div>
</main>
</div>
</div>


<script src="start.js"></script>
</body>
</html>

<!-- todo:
wepages
menudesigninline
logout -->
