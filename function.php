<?php
function redirectUserTo($path = "index.php")
{
    header("Location:" . $path);
}

function redirectUserToLog($path = "login.php")
{
    header("Location:" . $path);
}

function confirm_query($result_set)
{
    global $connection;
    if (!$result_set) {
        die("Database query failed."
            . mysqli_error($connection)
        );
    }
}

function word_prep($string)
{
    global $connection;

    $string = trim($string);

    $escaped_string = mysqli_real_escape_string($connection, $string);
    return $escaped_string;

}


function getUserInfoByphone($phone)
{
    global $connection;

    $phone = word_prep($phone);

    $query = "SELECT * FROM ";
    $query .= "users WHERE ";
    $query .= 'phone_number = "' . $phone . '"';

    $result = mysqli_query($connection, $query);
    confirm_query($result);

    if (mysqli_affected_rows($connection) > 0) {
        return $result;
    } else
        return null;

}

function getItemInfoByID($id)
{
    global $connection;

    $query = "SELECT * FROM ";
    $query .= "products WHERE ";
    $query .= 'PRODUCT_ID = "' . $id . '"';

    $result = mysqli_query($connection, $query);
    confirm_query($result);

    if (mysqli_affected_rows($connection) > 0) {
        return mysqli_fetch_assoc($result);
    } else{
        echo "not found";
        return null;
    }

}

function checkIfUserIsFarmer ($phone) {
    global $connection;

    $phone = word_prep($phone);

    $query = "SELECT * FROM ";
    $query .= "farmers WHERE ";
    $query .= 'PHN_NUM = "' . $phone . '"';

    $result = mysqli_query($connection, $query);
    confirm_query($result);

    if (mysqli_affected_rows($connection) > 0) {
        return true;
    } else
        return null;
}

function checkUser($phone, $pass)
{
    $user_set = getUserInfoByphone($phone);

    if ($user_set == null)
        return false;

    $users = mysqli_fetch_assoc($user_set);

//checking user password
    $pass_match = strcasecmp($pass, $users['password']);

    if ($pass_match == 0) {
        return $user = array("name" => $users['username'], "phone" => $phone);
    }
    else {
        return false;
    }
}

function setAsLoggedIn($user, $phone)
{
    $_SESSION['user'] = $user;
    $_SESSION['phone'] = $phone;
}


function isLoggedIn()
{
    return isset($_SESSION['user']);
}

function confirmLoggedIn()
{
    if (!isLoggedIn()) {
        redirectUserTo("login.php");
    }
}

function logOutUser()
{
    $_SESSION['user'] = null;
    $_SESSION['phone'] = null;
}

?>