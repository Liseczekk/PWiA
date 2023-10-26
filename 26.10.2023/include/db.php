<?php
/*
$conn = mysqli_connect(
    hostname:'127.0.0.1',
    username:'php',
    password:'php',
    database:'4BG2',
    port:'3306'
);

if(mysqli_connect_errno()) {
    echo "failed to conntect", mysqli_connect_error();
}
else {
echo "Connection successful";
}
*/

$conn = new mysqli(
    hostname:'127.0.0.1',
    username:'php',
    password:'php',
    database:'4BG2',
    port:'3306'
);
if ($conn->connect_errno) {
    echo "failed to conntect", mysqli_connect_error(); 
    die;
}

function storeMessage(string $email, string $message): bool 
{
    global $conn;
    $sql = sprintf(
        'INSERT INTO contact_messeges (email, message values ("%s","%s")',
        $email,
        $message
    );
    $result = $conn->query($sql);
    $conn->close();
    return $result;
}