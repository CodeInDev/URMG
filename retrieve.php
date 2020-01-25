<?php
    require_once('dbconnect.php');

    function formatdate($date) {
        $daten = new DateTime($date . " +00");
        $daten->setTimezone(new DateTimeZone($_SESSION['timezone']));
        $today = new DateTime();
        $today->setTimezone(new DateTimeZone($_SESSION['timezone']));
        if ($today->format('j') != $daten->format('j')) {
            return $daten->format('m/d/Y');
        } else {
            return 'Today at '. $daten->format('g:i A');
        }
    }

    $messages = array();

    $sql = "SELECT user_id, username, message, date
            FROM users u 
            INNER JOIN messages m
            ON u.id = m.user_id
            ORDER BY date";

    $result = $conn->query($sql);

    while ($row = $result->fetch_assoc()) {
        $messages[] = $row;
    }

    $current = array_values(array_slice($messages, -1))[0];

    if (!isset($_SESSION['last'])) {
        $_SESSION['last'] = $current;
    }

    $new = ($_SESSION['last'] != $current);

    foreach ($messages as $message) {
?>
        <div class="msg">
            <span><b><?php echo $message['username'] . ': ' ?></b></span>
            <span><?php echo $message['message'] ?></span>
            <span style="float:right"><?php echo formatdate($message['date']) ?></span>
        </div>
        <hr class="line">
<?php
    }
    
    if (($new) and ($current['user_id'] != $_SESSION['user']['id'])) {
?>
        <audio src='../ring.mp3' autoplay></audio>
<?php
    }
    $_SESSION['last'] = $current;
    
?>
