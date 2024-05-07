<?php include 'C:\laragon\www\large-scale-php-project\inc\head.php';?>
<?php
$property_id = isset($_GET['property-id']) ? $_GET['property-id'] : 2;
$query = "SELECT * FROM tbl_properties WHERE id = $property_id";
$result = mysqli_query($conn, $query);

if ($result) {
    $row = mysqli_fetch_assoc($result);
    if ($row) {
        $apartmentTitle = $row['title'];
    } else {
        $apartmentTitle = "No Apartment Title";
    }
} else {
    $apartmentTitle = "No Apartment Title";
}
?>

<div class="title-section">
    <div class="block-top-title">
        <div class="block-body">
            <?php include ('C:\laragon\www\large-scale-php-project\inc\breadcrumb.php'); ?>
            <h1 class="listing-title"><?php echo $row['title']; ?> <span class="label label-success">FEATURED</span></h1>
            <div class="rating">
                <i class="homey-icon homey-icon-rating-star"></i><span class="star-text-right">4.96 - <a href="#">24 Reviews</a></span>
            </div>
            <address>
                <i class="homey-icon homey-icon-style-two-pin-marker"></i> Miami Beach, FL 31175
            </address>
            
            <div class="superhost-info-icon">
                <i class="homey-icon homey-icon-single-neutral-circle"></i> Superhost
            </div>
            <div class="host-avatar-wrap avatar">
            
                    <i></i>
                </span>
                <?php
                $sql = "SELECT tbl_images.picture_url, tbl_users.fname, tbl_users.lname, tbl_users.email, tbl_roles.name 
        FROM tbl_users 
        INNER JOIN tbl_roles ON tbl_users.id = tbl_roles.id
        INNER JOIN tbl_images ON tbl_images.imageable_id = tbl_users.id 
        WHERE tbl_images.imageable_type = 'user' LIMIT 1"; 
$result = $conn->query($sql);
if ($result->num_rows > 0) {
    // output data of the first row
    $row = $result->fetch_assoc(); ?>
                <img src="img\guest-avatar-70x70.png" class="img-circle media-object " alt="Image" width="70" height="70">
            </div>
            <div class="listing-contact-save hidden-xs">
                <!-- <a href="#"><i class="homey-icon homey-icon-read-email-at"></i> Contact Host</a> -->
                <a href="#"><i class="homey-icon homey-icon-love-it"></i> Save</a>
                <a href="#"><i class="homey-icon homey-icon-print-text"></i> Print</a>
            </div>
        </div><!-- block-body -->
    </div><!-- block -->
</div><!-- title-section -->
<?php } else {
    echo "0 results";
}
$conn->close();
?>
