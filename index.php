<?php
require_once "vendor/autoload.php";
require_once "vendor/alikm6/php-pomo/l10n.php";

unload_textdomain('default');
load_textdomain('default', "./lang/pt-br/pt_BR.mo");

echo __("Image");

$n = 'image';
echo sprintf(_("Você tem %d mensagens."), $n);