<!--print out messages-->
<?php
    foreach($messages as $message)
    {
        if ($message["sender_id"] == $_SESSION["id"])
        {
            //messages from me go on the right
            echo("<p class='my_message'>" . "me: " . $message["message"] . "</p>");
        }
        else
        {
            echo("<p class='chat_buddy'>" . "$chat_buddy: " . $message["message"] . "</p>");
        }
    }
?>