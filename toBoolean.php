<?php
/**
 * toBoolean()
 * 
 * @param mixed $value
 * @param bool $exact
 * @return bool / null
 */
function toBoolean($value,$exact = false) {
  if(is_bool($value) === true) {
    return (bool)$value;
  } else if(is_numeric($value) === true) {
    if(($exact && (int)$value === 0) || (!$exact && (int)$value <= 0))  {
      return false;
    } else if(($exact && (int)$value === 1) || (!$exact &&(int)$value > 0)) {
      return true;
    }
  } else if(ctype_digit($value) === true) {
    if((int)$value === 0) {
      return false;
    } else if((int)$value === 1) {
      return true;
    }
  } else if(ctype_alpha($value) === true) {
    $value = strtolower($value);
        if($value === 'false') {
            return false;
        }else if($value === 'true') {
            return true;
        }
    }
    return null;
}
