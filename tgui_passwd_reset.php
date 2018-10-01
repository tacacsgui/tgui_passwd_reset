<?php
require __DIR__ . '/bootstrap/app.php';

function message($text='', $brline = 1, $brline_end = 1)
{
  for ($i=0; $i < $brline; $i++) $text="\n".$text;
  for ($k=0; $k < $brline_end; $k++) $text.="\n";
  return $text;
}
echo message('####################################',1);
echo message('Wellcome to password restoring tool!',0);
echo message('####################################',0,2);
$username = readline( 'Enter Username: ' );

$user_update = $capsule->table('api_users')->where('username','=', $username)->update(['changePasswd' => 1, 'password'=> '$2y$10$zZPJVM/qGizgWqq1Mbs0T.E6uCG.fz09pWYxsYj2oieAhm2BZtUPe']);

if (! $user_update ) {
  echo message('Username Not Found! Good bye!');
  return false;
}
echo message('Done!');
?>
