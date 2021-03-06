<?php
require_once "connect.php";

//trækker info fra tabellen i $dbh og gemmer i statement, derefter kør
$statement = $dbh->prepare("SELECT * FROM articles JOIN users ON articles.author = users.userID  ORDER BY articleID DESC");
$statement->execute();

//loop der kører indtil alle artikler er kørt
while ($row = $statement->fetch()){
?>
    <article class="col-3">
            <a href="#"><img src="img/<?php echo $row['imgPath']; ?>" alt="<?php echo $row['imgAlt']; ?>"></a>
            <p><?php echo $row['header']; ?></p>
            <div>
                <p>
                <?php echo $row['timestamp']; ?>
                <?php echo $row['username']; ?>
                </p>
                <p>
                <?php echo $row['content']; ?>
                </p>
            </div>
        </article>

<?php
}

$dbh = null;
?>