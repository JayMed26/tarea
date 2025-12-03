<?php
$connection = mysqli_connect(
    "db",
    "ProGearHub",
    "Jays3s3svc4.",
    "ProGearHub",
);
if (!$connection) {
    echo "Data base connection failed";
    exit();
}
else{
    echo "Database has been connected succesfully";
}
?>