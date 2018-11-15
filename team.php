<?php include("header.php"); ?>

<main>

    <div class="banner" id="banner-team">
        <h1>our team</h1>
    </div>

    <?php

    $dir = 'sqlite:team.db';

    $dbh  = new PDO($dir) or die("UNABLE TO OPEN THE DATABASE");

    $query = 'SELECT * from team where id = "' . $_GET['id'] . '"';
    foreach ($dbh -> query($query) as $row) {
        echo '<div id="team-page">';
        echo '<img src="' . $row[2] . '" alt="">';
        echo '<h3>' . $row[0] . '</h3>';
        echo '<h5>' . $row[1] . '</h5>';
        echo $row[3]; // should be already formatted
        echo '</div>';
    }

    $dbh = null; // close PDO connection

    ?>

</main>

<?php include("footer.php"); ?>
