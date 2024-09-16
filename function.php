<?php
$submittedValues = [];

echo 'Submitted values:';
prettyPrint($_POST);

if (!empty($_POST)) {
  $errors = validate($_POST);

  if (!empty($errors)) {
      echo'Errors:';
      prettyPrint($errors);
  } else {
      $submittedValues = $_POST;
      // Clear submitted data.
      unset($_POST);
  }
}

function prettyPrint($data)
{
    echo "<pre>";
    print_r($data);
    echo "</pre>";
}

function validate($data)
{
    $validateErrors = [];

    if (empty($data['firstName'])) {
        $validateErrors[] = "First Name is required";
    }

    if (empty($data['lastName'])) {
        $validateErrors[] = "Last Name is required";
    }

    if (empty($data['message'])) {
        $validateErrors[] = "Message is required";
    }
    return $validateErrors;
}

function getSubmittedValue($field)
{
    return $_POST[$field] ?? '';
}