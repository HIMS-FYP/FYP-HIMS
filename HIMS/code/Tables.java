Contact
 ->

 vitals
 	Weight
 		->user_id
 		->
 		->

 	Height
		->user_id
 		->
 		->

 	BloodPressure
 		->user_id
 		->
 		->

 	BloodSugar
 		->user_id
 		->
 		->

 	HeartRate
 		->user_id
 		->
 		->
 		
 	Bmi



MedicalConditions
->user_id
->name
->diagnosed_on { date }
->medications_taken  { string }
->lab_result_id { int }
->medication_started_on { date }
->medication_stopped_on { date }
->medication_stoppage_reason { string }
->notes {string}


Medications
->user_id
->taken_for
->name
->dosage
->started_at
->ended_at
->intake_method  | e.g via mouth
->is_scheduled
->notes



Allergies
->user_id
->name
->reaction
->severity
->notes


Immunizations
->user_id
->name
->for
->prescribed_at
->dosage
->completed_on
->notes

