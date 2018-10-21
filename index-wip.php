<?php 
    if( isset($_POST['email']) && !empty($_POST['mail']) &&
        isset($_POST['name']) && !empty($_POST['name']) &&
        isset($_POST['message']) && !empty($_POST['message']) ) {
        $to = "support@qmill.eu";
        $from = $_POST['email'];
        $name = $_POST['name'];
        $message = $_POST['message'];

        $headers = "From:" . $from;
        mail($to,"Mail from" . " " . $name,$message,$headers);
        $mail_sent = "Mail Sent!";
    } else {
        $mail_sent = "";
    }
?>

<?php include("header.php"); ?>

<main>

        <div class="banner">
            <img src="./images/logo-inv-big.svg">
        </div>

        <div id="intro">
            <h2>our approach</h2>
            <p>At Broad Horizons we value individual’s strength and creativity when met with challenge, trauma or adversity. Our motivation in creating a diverse therapeutic service was to ensure that children and families are not expected to fit into whatever services are available, but ensure that services including therapy, parent support, training etcetera are tailored to the individual child and family’s needs.</p>
            <p>At Broad Horizons we recognise and see beyond behaviour. We work with each individual’s strength and creativity, with the aim of adapting when met with challenge, trauma or adversity.</p>
        </div>

        <div class="services">
            <div>
                <img src="./images/icon-services.svg">
                <!-- <div> -->
                    <h4>therapeutic services</h4>
                    <p>
                        Our packages of support are carefully tailored to meet individual needs
                    </p>
                <!-- </div> -->
            </div>

            <div>
                <img src="./images/icon-training.svg">
                <!-- <div> -->
                    <h4>training</h4>
                    <p>
                        Tailormade training to meet any need or choose from our extensive range of contemporary pre-existing courses
                    </p>
                <!-- </div> -->
            </div>

            <div>
                <img src="./images/icon-supervisions.svg">
                <!-- <div> -->
                    <h4>supervision</h4>
                    <p>
                        Providing exploration of wellbeing for practitioners and professionals to achieve best outcomes for children and families
                    </p>
                <!-- </div> -->
            </div>

            <div>
                <img src="./images/icon-consultations.svg">
                <!-- <div> -->
                    <h4>consultations</h4>
                    <p>
                        Not sure what's right for you? Please get in touch and we would be happy to offer you a consultation
                    </p>
                <!-- </div> -->
            </div>
        </div> <!-- end services -->

        <div id="claire">
            <div id="claire-image"></div>
            <div id="claire-text">
                <h2>claire harrison - breed</h2>
                <p><em>I first founded Broad Horizon in 2001, at the time as an individual practitioner. I am passionate about ensuring we move away from viewing children, young people or adults needing therapy as dysfunctional.</em></p>
            
                <p>As a UKCP and BACP Child and Adult Psychotherapist, Claire specialises in working with trauma and dissociation with children young people and adults. Alongside therapeutic practice she is a Senior Lecturer in Counselling for the University of Northampton.</p>
                <button><a href="#">discover more</a></button>
            </div>
        </div>

        <div id="team">

            <h2>our team</h2>
            <p>Since 2001 we have grown into a well-respected Therapy Centre that specialises in working with trauma, dissociation and attachment issues.</p>

            <div>
                <img src="./images/squared-claire.jpg">
                <div>
                    <h5>claire</h5>
                    <p>As a UKCP and BACP Child and Adult Psychotherapist, Claire specialises in working with trauma and dissociation with children, young people and adults.</p>
                </div>
            </div>

            <div>
                <img src="./images/squared-sarah.jpg">
                <div>
                    <h5>sarah</h5>
                    <p>Clinical Lead for Broad Horizons team Sarah has worked within Social Care for over 20 years. She offers Video Interaction Guidance Supervision for VIG Guiders.</p>
                </div>
            </div>

            <div>
                <img src="./images/squared-generic.png">
                <div>
                    <h5>audrey</h5>
                    <p>Audrey has been a counsellor and psychotherapist spanning 25 years. She can offer individual therapy for children, young people and adults as well as providing parent led CBT.</p>
                </div>
            </div>

            <div>
                <img src="./images/squared-amy.jpg">
                <div>
                    <h5>amy</h5>
                    <p>Amy has been working therapeutically with children and young people for over 12 years. She offers individual therapy for children, young people and adults.</p>
                </div>
            </div>

            <button><a href="#">discover more</a></button>

        </div>

        <div id="form">
            
            <div>
                <h2>contacts</h2>
                <p>Broad Horizons</p>
                <p>1 College Grounds<br>Gate 1 Moulton College<br>Northampton<br>NN3 7SY</p>
                <div class="line"></div>
                <p>07920 170 100<br>01604 645 921<br>admin@broadhorizons.org.uk<br>www.broadhorizons.org.uk</p>
            </div>

            <form action="" method="post" id="contact-form">
                <input type="text" name="name" placeholder="Name"><br>
                <input type="text" name="email" placeholder="email"><br>
                <textarea name="message" placeholder="Your message..."></textarea>

                <button type="submit" form="contact-form" value="submit">Submit</button>
                <p><?php echo $mail_sent ?></p>
            </form>

        </div>

    </main>

    <?php include("footer.php"); ?>
