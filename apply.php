<?php
// Assuming you have a variable $jobId that holds the job ID
$jobId = 1;  // Replace with your actual method of obtaining the job ID

// Redirect to jregister.php with job ID as a parameter
header("Location: jregister.php?jobId=$jobId");
exit();
?>
