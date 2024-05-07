<?php
include "../db/config.php";

if (isset($_GET['id']) || isset($_POST['id'])) {
    $id = isset($_POST['id']) ? $_POST['id'] : $_GET['id'];

    $rawdata = mysqli_query($con, "SELECT * FROM todo WHERE `id`='$id'");
    $data = mysqli_fetch_array($rawdata);

}



?>
<?php
if (isset($_GET['id'])) {
    include "../includes/header.php";
}
?>
<div class="container">
    <div class="row justify-content-center m-auto bg-white mt-2 py-3 col-md-6">
        <h3 class="text-center text-primary font-monospace">View</h3>
        <div class="col-10">
            <input type="hidden" value="<?php echo $data['id']; ?>" name="id" id="id">
            <label>View</label>
            <p class="form-control">
                <?= $data['listing']; ?>
            
                <div class="col-2">
                
            </div>
        </div>


        <div class="task">

        </div>