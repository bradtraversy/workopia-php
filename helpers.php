<?php

/**
 * Get the base path
 * 
 * @param string $path
 * @return string
 */
function basePath($path = '')
{
  return __DIR__ . '/' . $path;
}

/**
 * Load a view or a partial
 * 
 * @param string $name
 * @param string $type 'view' or 'partial'
 * @param array $data
 * @return void
 */
function load($name, $type = 'view', $data = [])
{
    $path = $type === 'partial' ? "App/views/partials/{$name}.php" : "App/views/{$name}.view.php";
    $fullPath = basePath($path);

    if (file_exists($fullPath)) {
        extract($data);
        require $fullPath;
    } else {
        echo ucfirst($type) . " '{$name}' not found!";
    }
}

/**
 * Inspect a value and optionally terminate the script
 * 
 * @param mixed $value
 * @param bool $die
 * @return void
 */
function inspect($value, $die = false)
{
  echo '<pre>';
  var_dump($value);
  echo '</pre>';

  if ($die) {
    die();
  }
}

/**
 * Format salary
 * 
 * @param string $salary
 * @return string Formatted Salary
 */
function formatSalary($salary)
{
  return '$' . number_format(floatval($salary));
}

/**
 * Sanitize Data
 * 
 * @param string $dirty
 * @return string
 */
function sanitize($dirty)
{
  return filter_var(trim($dirty), FILTER_SANITIZE_SPECIAL_CHARS);
}

/**
 * Redirect to a given url
 * 
 * @param string $url
 * @return void
 */
function redirect($url)
{
  header("Location: {$url}");
  exit;
}
