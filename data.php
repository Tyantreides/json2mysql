<?php

$data = $_REQUEST['data'];
$postdata = $_POST['data'];

print_r('<pre>');
print_r('Daten geschickt:(request)<br>');
print_r($data);
print_r('</pre>');

print_r('<br>');
print_r('<br>');
print_r('<br>');

print_r('<pre>');
print_r('Daten geschickt:(POST)<br>');
print_r($postdata);
print_r('</pre>');

print_r('<br>');
print_r('<br>');
print_r('<br>');

print_r('<pre>');
print_r('Umgewandelt:<br>');
print_r(json_decode($data));
print_r('</pre>');