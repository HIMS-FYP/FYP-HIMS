[Record type]
->hospital visit
->medication
->symptom
->custom



$table->string('table_name'); //visits || medication || symptom || immunization || allergy  || issue

$journalRecord = new JournalRecord();
$journalRecord->user_id = $user->id;
$journalRecord->table_name = "visits";
$journalRecord->item_id = $visit->id;
$journalRecord->save();
