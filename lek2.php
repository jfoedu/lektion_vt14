<?php
error_reporting(E_ALL ^E_NOTICE);
print_r($_GET);

if ($_GET['tal']<12) {
  echo 'Sant';
} else {
  echo 'Falskt';
}