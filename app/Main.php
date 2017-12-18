<?php namespace Codecheck;

function run ($argc, $argv)
{
  foreach ($argv as $index=>$value) {
		echo "Hello ".$value."!";
  }
}
