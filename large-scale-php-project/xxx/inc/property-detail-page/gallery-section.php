<div id="gallery-section" class="gallery-section">
    <div class="block">
        <h3 class="title">Gallery</h3>

        <div class="featured-image-wrap featured-slide-gallery-wrap clearfix">
        <?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "rental";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT picture_url FROM tbl_properties
INNER JOIN tbl_images ON tbl_images.imageable_id = tbl_properties.id 
WHERE tbl_images.imageable_type = 'property'
AND tbl_properties.id = 1 ";





$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) { ?>
            <a rel="gallery-1" href="<?php echo $row['picture_url'] ;?>" class="swipebox">
                <img src="<?php echo $row['picture_url'] ?>" alt="image">
            </a>
            <?php }
} else {
    echo "0 results";
}
$conn->close();?>
        </div>
    </div><!-- block -->
</div>