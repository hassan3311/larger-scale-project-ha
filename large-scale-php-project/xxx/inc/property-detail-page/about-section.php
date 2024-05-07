<?php include ('inc/head.php');?>
<?php
$sql = "SELECT * FROM tbl_properties WHERE id = 2"; 
$result = $conn->query($sql);

if ($result->num_rows > 0) {

    while ($row = $result->fetch_assoc()) {
        $description = $row["description"];
    }
} else {
    $description = "Description not found"; 
}
$conn->close();
?>

<div id="about-section" class="about-section">
    <div class="block-bordered">
        <div class="block-col block-col-25">
            <div class="block-icon">
                <i class="homey-icon homey-icon-house-2"></i>
            </div>
            <div>Type</div>
            <div><strong>Apartment</strong></div>
        </div>
        <div class="block-col block-col-25">
            <div class="block-icon">
                <i class="homey-icon homey-icon-multiple-man-woman-2"></i>
            </div>
            <div>Accommodation</div>
            <div><strong>8 Guests</strong></div>
        </div>
        <div class="block-col block-col-25">
            <div class="block-icon">
                <i class="homey-icon homey-icon-hotel-double-bed"></i>
            </div>
            <div>Bedrooms</div>
            <div><strong>4 Bedrooms / 6 Beds</strong></div>
        </div>
        <div class="block-col block-col-25">
            <div class="block-icon">
                <i class="homey-icon homey-icon-bathroom-shower-1"></i>
            </div>
            <div>Bathrooms</div>
            <div><strong>3 Full 1 Half Baths</strong></div>
        </div>
    </div><!-- block-bordered -->  
    <div class="block">
        <div class="block-body">    
            <h2>About this listing</h2>
            <p><?php echo $description; ?></p>
        </div>
    </div><!-- block-body -->    
</div>
