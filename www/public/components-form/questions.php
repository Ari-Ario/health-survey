
<?php
$questions = array(
  array(
      // Schlüssel, Identifikator der Frage
      "id" => "q1",
      // Fragetyp
      "type"          => "range",
      // Intervall für gesunde Antwort
      "healthy-range" => array(70, 100),
      "healthy-points"=> 3
  ),
  array(
      "id" => "q2",
      "type"          => "radio",
      "healthy-value" => "Ja", // Gesunde Antwort
      "healthy-range" => array(1, 1), // Optional
      "healthy-points"=> 3
  ),
  array(
    "id" => "q3",
    "type"          => "range",
    "healthy-range" => array(40, 50),
    "healthy-points"=> 3
  ),
  array(
    "id" => "q4",
    "type"          => "checkbox",
    "healthy-range" => array(1, 5),
    "healthy-points"=> 6
  ),
  array(
    "id" => "q5",
    "type"          => "range",
    "healthy-range" => array(20, 40),
    "healthy-points"=> 3
  ),
  array(
    "id" => "q6",
    "type"          => "number",
    "healthy-range" => array(2, 3),
    "healthy-points"=> 3
  ),
  array(
    "id" => "q7",
    "type"          => "number",
    "healthy-range" => array(2, 3),
    "healthy-points"=> 3
  ),
  array(
    "id" => "q8",
    "type"          => "number",
    "healthy-range" => array(1, 3),
    "healthy-points"=> 3
  ),
  array(
    "id" => "q9",
    "type"          => "number",
    "healthy-range" => array(1, 3),
    "healthy-points"=> 3
  ),
  array(
    "id" => "q10",
    "type"          => "number",
    "healthy-range" => array(0, 1),
    "healthy-points"=> 3
  )
  );

// $questions noch als globale Konstante "QUESTIONS".
define("QUESTIONS", $questions);
?>