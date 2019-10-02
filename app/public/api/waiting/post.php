<?php

 //Step 0; Validate data
 $db = DbConnection::getConnection();

$stmt = $db->prepare(
  'INSERT INTO PatientVisit
  (patientGUid, visitDescription, priority)
  VALUES (?,?,?)'
);


$stmt->execute([
  $_POST['patientGUid'],
  $_POST['visitDescription'],
  $_POSt['priority']
]);
