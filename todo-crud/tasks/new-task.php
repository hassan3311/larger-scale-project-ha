<?php include '../includes/header.php';?>
    <section class="vh-100" style="background-color: #e2d5de;">
        <form action="save-task.php" method="post">
            <div class="container">
                <div class="row justify-content-center m-auto bg-white mt-2 py-3 col-md-6">
                    <h3 class="text-center text-primary font-monospace">Add New</h3>
                    <div class="col-10">
                        <input type="hidden" value="" name="id" id="id">
                        <input type="text" value="" name="listing" class="form-control" id="listing" required>
                    </div>
                    <div class="col-2">
                        <button class="btn btn-outline-success">Save</button>
                    </div>
                </div>
            </div>
        </form>
    </section>
    <?php include '../includes/footer.php'; ?>
