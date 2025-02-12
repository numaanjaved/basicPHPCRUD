<?php

require_once('Assets/models/find.php');
$profileId = $_POST['profId'];
$profileData = find($profileId);
views('CRUD/profile.view.php', $profileData);
