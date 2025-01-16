<?php

require "Assets/models/find.php";
$profId = $_POST['profId'];
$record = find($profId);
views('CRUD/update.form.php', ['profId' => $profId, 'record' => $record]);
exit();
