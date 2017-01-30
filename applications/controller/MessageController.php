<?php

class MessageController {

    public function showMessages($id) {

        $message = new Message();

        $result = $message->getErrorMessageById($id);

        echo $result['message'];
    }

}
