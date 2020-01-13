<?php
require_once './lib/Apartment.class.php';
require_once './lib/Image.class.php';

if(array_key_exists('getDetails', $_POST)) {
    get_details();
}

function get_details() {
    $apartment = Apartment::getApartmentById($_POST['id']);

    echo "<p>{$apartment->getSlogan()}</p>
             <p>{$apartment->getDescription()}</p>";

    for($i = 0; $i < count($apartment->getImages()); $i += 1) {
        $image = new Image($i, $apartment->getImages(), $apartment->getImageDescriptions());
        $image->render();
    }
}
