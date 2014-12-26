<?php

class Contact {

    private $data;
    private $requiredFields = ['name', 'email', 'message'];

    function Contact($data) {
        $this->data = $data;
        $this->check($this->data);
    }

    function check($data) {
        foreach ($data as $key => $value) {
            foreach ($this->requiredFields as $fKey => $fValue) {
                if ($key != $fKey && empty($value)) {
                    return $this->error();
                }
            }
        }
        $this->send();
    }

    function send() {
        $headers =  "From: $email \r\n" .
        "Reply-To: $email \r\n" .
        "X-Mailer: PHP/" . phpversion();
        $text = "Naam: $this->data['name'] \r\n" .
        "Email: $this->data['email'] \r\n" .
        "Message: $this->data['message'] ";

        if ( mail('d.rosbergen@gmail.com', 'Portfolio Contact form', $text, $headers) ) {
            echo $this->success();
        } else {
            echo $this->error();
        }
    }

    function success() {
        return true;
    }

    function error() {
        return false;
    }

}
