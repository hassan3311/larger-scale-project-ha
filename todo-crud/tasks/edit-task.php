<?php
include "../db/config.php";

if (isset($_GET['id']) || isset($_POST['id'])) {
    $id = isset($_POST['id']) ? $_POST['id'] : $_GET['id'];

    $rawdata = mysqli_query($con, "SELECT * FROM todo WHERE `id`='$id'");
    $data = mysqli_fetch_array($rawdata);

    if ($data !== null) {
?>
        <!-- edit-task-popup.php -->
        <div class="container">
            <div class="row justify-content-center m-auto bg-white mt-2 py-3 col-md-6">
                <h3 class="text-center text-primary font-monospace">Edit</h3>
                <form id="updateForm" action="../todo-crud/tasks/update-task.php" method="post">
                <h3 id='edit-task-msg'></h3>    
                <div class="col-10">
                        <input type="hidden" value="<?php echo $data['id']; ?>" name="id" id="id">
                        <label for="listing">Listing:</label>
                        <input type="text" value="<?php echo $data['listing']; ?>" name="listing" class="form-control" id="listing">
                    </div>
                    <div class="col-2">
                        <button type="button" class="btn btn-outline-success" onclick="updateTask()">Update</button>
                    </div>
                </form>
            </div>
        </div>

        <script src="https://code.jquery.com/jquery-3.7.1.min.js" integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-pzjw8CrYarBRXH4dUeLl63OpnFDpf4xcwBXAzIYl+mvHtvh2a6i3mZ9kXlgbqfWH" crossorigin="anonymous"></script>
        <script>
            function updateTask() {
                $.ajax({
                    type: 'POST',
                    url: $('#updateForm').attr('action'),
                    data: $('#updateForm').serialize(),
                    success: function (data) {
                        $("#edit-task-msg").text(data);
                    },
                    error: function (error) {
                        console.error('Error updating task:', error);
                    }
                });
            }
        </script>

<?php
    } else {
        echo "Record not found";
    }
} else {
    echo "ID not set";
}
?>
