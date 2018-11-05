<?php 
    if( isset($_POST['email']) && !empty($_POST['email']) &&
        isset($_POST['name']) && !empty($_POST['name']) &&
        isset($_POST['message']) && !empty($_POST['message']) ) {
        $to = "support@qmill.eu";
        $from = $_POST['email'];
        $name = $_POST['name'];
        $message = $_POST['message'];

        $headers = "From:" . $from;
        mail($to,"Mail from" . " " . $name,$message,$headers);
        $form_button_label = "Mail Sent!";
    } else {
        $form_button_label = "Submit";
    }
?>

<?php include("header.php"); ?>

<main>
    <!-- <div style="color: black; width: 50%; margin: 25%; margin-top: 0; padding-top: 25%; text-align: center;">
    <h1 style="color: black; text-align: center;">work in progress</h1>
    <p>This page under construction,<br>we're sorry for the inconvenience.</p>
    </div> -->

    <div class="banner" id="banner-map">
        <h1>how to find us</h1>
    </div>

    <div id="intro">
        <h2>1 College Grounds<br>Gate 1 Moulton College<br>Northampton<br>NN3 7SY</h2>
        <p>On entering <b>gate one</b> inform the security officer in the gate hut of who you are visiting at Broad Horizons. Park in the main car park <em>(please do not use the visitor spaces though as these are reserved for college guests only)</em> and walk directly through the campus and you will see the Broad Horizons building to the right-hand side of the large social centre.</p>
        <p>Please walk straight into the front door (no need to knock!) and wait in the waiting area on the right. You will be greeted at the time of your appointment.</p>
        <p>If you have any difficulties finding us please call the office on 07920170100 or your therapist direct on the number they have provided you with.</p>
    </div>

    <img src="./images/map-scheme.jpg" style="width: 50%; margin: 0 25%;">

    <div id="form">
            
            <div>
                <h2>contact us</h2>
                <p>Broad Horizons</p>
                <p>1 College Grounds<br>Gate 1 Moulton College<br>Northampton<br>NN3 7SY</p>
                <div class="line"></div>
                <p>07920 170 100<br>01604 645 921<br>admin@broadhorizons.org.uk<br>www.broadhorizons.org.uk</p>
            </div>

            <form action="./index-wip.php#form" method="post" id="contact-form">
                
                <input type="text" name="name" placeholder="Name"><br>
                <input type="text" name="email" placeholder="email"><br>
                <textarea name="message" placeholder="Your message..."></textarea>

                <button type="submit" form="contact-form" value="submit"><?php echo $form_button_label ?></button>
            </form>

        </div>
</main>

<?php include("footer.php"); ?>
