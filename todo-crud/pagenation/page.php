<html>
<head>
<title>jQuery AJAX Pagination</title>
<link href="css/style.css" rel="stylesheet" type="text/css" />
<script src="http://code.jquery.com/jquery-2.1.1.js"></script>
<script>
function getresult(url) {
    $('#loader-icon').show();
    $.ajax({
        url: url,
        type: "GET",
        data: { rowcount: $("#rowcount").val() },
        success: function(data) {
            $("#pagination").html(data);
            $("#loader-icon").hide();
        },
        error: function() { }
    });
}
</script>
<style>
#loader-icon {
    text-align: center;
    position: relative;
    top: 10px;
}
</style>
</head>
<body>
    <div id="pagination">
        <input type="hidden" name="rowcount" id="rowcount" />
    </div>
    <script>
getresult("getresult.php");
</script>
</body>
</html>
Calculate Query Limit
Since loading the bulk of data takes much time, the pagination is for the quick retrieve/load. So, we have to calculate the start and end limit based on the page request. The code is,

getresult.php

<?php
include "../db/config.php";
require_once "page.class.php";
$perPage = new PerPage();
$sql = "SELECT * from todo";
$paginationlink = "getresult.php?page=";
$page = 1;
if (! empty($_GET["page"])) {
    $page = $_GET["page"];
}
$start = ($page - 1) * $perPage->perpage;
if ($start < 0) {
    $start = 0;
}
$statement = $con->prepare($sql);
$statement->execute();
$result = $statement->get_result();
?>
Create Pagination Links and Apply Styles
For creating a total number of page links, we need to pass the database result count if found already.

getresult.php

<?php
$perpageresult = $perPage->perpage($result->num_rows, $paginationlink);
?>
The function per page will create all pagination links and apply styles based on the status of the page whether it is active or not applicable. The code is,



Show Results and Pagination Links
Finally, the requested PHP script will form the output HTML for printing database results and pagination link.

getresult.php

<?php
$query = $sql . " limit " . $start . "," . $perPage->perpage;
$statement = $con->prepare($query);
$statement->execute();
$result = $statement->get_result();
$output = '';
while ($row = mysqli_fetch_array($result)) {
    $output .= '<div class="question"><input type="hidden" id="rowcount" name="rowcount" value="' . $result->num_rows . '" />' . $row["listing"] . '</div>';
    $output .= '<div class="answer">' . $row["listing"] . '</div>';
}
if (! empty($perpageresult)) {
    $output .= '<div id="pagelink">' . $perpageresult . '</div>';
}
print $output;
?>
Data printed above will be read as an AJAX response and inserted into the target selector.

Refer AJAX pagination with PHP if you are looking for a PHP solution with jQuery.

success: function(data){
	$("#pagination").html(data);
}
<div id="pagination">
// AJAX Response will be Inserted
</div>{\rtf1}