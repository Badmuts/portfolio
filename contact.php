<?php
require_once("contact.class.php");

if ( isset( $_POST ) )
{
    $contact = new Contact($_POST);
    return $contact;
}
