<?php
return [
  "driver" => "smtp",
  "host" => "smtp.mailtrap.io",
  "port" => 2525,
  "from" => array(
      "address" => "admin@example.com",
      "name" => "Admin"
  ),
  "username" => "1912591e4668aa",
  "password" => "292a92ef83f6e2",
  "sendmail" => "/usr/sbin/sendmail -bs"
];