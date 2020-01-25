<?php
    require_once('dbconnect.php');

    if (isset($_POST['register'])) {
        $username = $conn->real_escape_string($_POST['username']);
        $password = $conn->real_escape_string($_POST['password']);
        $hash = password_hash($password, PASSWORD_DEFAULT);

        $check = "SELECT * FROM users WHERE username='$username'";
        $result = $conn->query($check);

        if ($result->num_rows == 0) {
			if (strlen($username) > 3 and strlen($password) > 3) {
				$sql = "INSERT INTO users (username, password) VALUES ('$username', '$hash')";

				if ($conn->query($sql)) {
					header('location: ../');
				}
			} else {
				echo "no";
			}
        } else {
            echo "no";
        }
    }

    if (isset($_POST['login'])) {
        $username = $conn->real_escape_string($_POST['username']);
        $password = $conn->real_escape_string($_POST['password']);

        $sql = "SELECT * FROM users WHERE username='$username'";
        $result = $conn->query($sql);
        $user = $result->fetch_assoc();

        if (($result->num_rows > 0) and (password_verify($password, $user['password']))) {
            $_SESSION['user'] = array('id' => $user['id'], 'username' => $user['username']);
            header('location: home');
        } else {
            echo "no";
        }
    }

    if (isset($_GET['logout'])) {
        session_destroy();
        header('location: ../');
    }
?>