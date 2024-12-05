<?php

echo 'Usando MD5: ' . md5('123');
echo "<br>";
echo 'Usando ARGON2: ' . password_hash('123', PASSWORD_ARGON2I);
echo "<br>";

?>