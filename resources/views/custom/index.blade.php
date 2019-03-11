@extends('layout')

@section('content')
<h1>Gophers, Elephants, and Dolphins, oh my.</h1>

<br><br>

<h2>Some Random Numbers</h2>

<table class="table table-striped">
  <tr><th>Number</th></tr>
  <?php foreach($data as $result): ?>
    <tr><td><?php echo $result['Number']; ?></td></tr>
  <?php endforeach; ?>
</table>
