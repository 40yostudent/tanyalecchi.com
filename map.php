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
    <div style="color: black; width: 50%; margin: 25%; margin-top: 0; padding-top: 25%; text-align: center;">
    <h1 style="color: black; text-align: center;">work in progress</h1>
    <p>This page under construction,<br>we're sorry for the inconvenience.</p>
    </div>

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
