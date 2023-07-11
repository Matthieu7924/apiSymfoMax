<?php

$config = 'C:\wamp64\bin\apache\apache2.4.54.2\conf\openssl.cnf';

$keyPair = openssl_pkey_new([
    'config' => $config,
]);

// Votre code pour sauvegarder la paire de clés ici
