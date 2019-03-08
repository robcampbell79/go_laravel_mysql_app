@extends('layout')

@section('content')
<h1>Gophers, Elephants, and Dolphins, oh my.</h1>

<br><br>

<h2>Some Random Numbers</h2>
<?php
  $begin = microtime(true);

  var_dump($data);

  echo "<br><br>";

  $end = microtime(true) - $begin;

  echo "Page loads up in: " . $end;
 ?>
