<?php

require_once 'vendor/autoload.php';

use app\entity\Usuario;

$user = new Usuario();
$user->cadastrar('Senna', '10349571988');

echo $user->imprimir();

/*
 * Este documento apresenta um padrão MVC de programação com autoload.
 * Para recriar isso é necessário criar o "composer.json" manualmente com as mesmas
 * caracteristicas presentes nesse exemplo.
 * Após qualquer edição neste json será necessario inserir o seguinte comando no terminal:
 * composer dump-autoload
 * Após isto só será necesário informar o USE no local que deseja utilizar a ENTITY
*/