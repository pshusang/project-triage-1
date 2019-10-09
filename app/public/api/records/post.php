<?php

use Ramsey\Uuid\Uuid;

 //Step 0; Validate data
 $db = DbConnection::getConnection();

$stmt = $db->prepare
(
  'INSERT INTO Patient
  (patientGuid, firstName, lastName, sexAtBirth, dob)
  VALUES (?,?,?,?,?)'
);

$uuid4 = Uuid::uuid4();

//Universal unique identifier nowhere for creating GUID
$guid = UuiD::uuid4()->toString()
$stmt->execute([
  $guid, // i.e. 25769c6c-d34d-4bfe-ba98-e0ee856f3e7a  Create a GUID
  $_POST['firstName'],
  $_POSt['lastName'],
  $_POSt['dob'],
  $_POSt['sexAtBirth']
]);

// TODO: Error Checking

//Step 4: Output
header('HTTP/1.1 303 See other');
//300 redirect with a git
header('Location: ../records/?guid='.$guid);
//Here is where to go
