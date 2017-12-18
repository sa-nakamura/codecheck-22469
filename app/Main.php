<?php namespace Codecheck;

function run ($argc, $argv)
{
  foreach ($argv as $index=>$value) {
	if($value == "%s"){
		echo "Hello ".$value."!";
	}
  }
}
