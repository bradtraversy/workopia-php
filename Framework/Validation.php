<?php

namespace Framework;

class Validation
{
  /**
   * Validate a string
   * 
   * @param string $value
   * @param int $min
   * @param int $max
   * @return bool
   */
  public static function string($value, $min = 1, $max = INF)
  {
    if (is_string($value)) {
      $value = trim($value);
      $length = strlen($value);
      return $length >= $min && $length <= $max;
    }

    return false;
  }

  /**
   * Validate email address
   * 
   * @param string $value
   * @return mixed
   */
  public static function email($value)
  {
    $value = trim($value);

    return filter_var($value, FILTER_VALIDATE_EMAIL);
  }

  /**
   * Match a value against another
   * @param string $value1
   * @param string $value2
   * @return bool
   */
  public static function match($value1, $value2)
  {
    $value1 = trim($value1);
    $value = trim($value2);

    return $value1 === $value2;
  }
}
