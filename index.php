<?php
require_once "vendor/autoload.php";
require_once "vendor/alikm6/php-pomo/l10n.php";

unload_textdomain('default');
load_textdomain('default', "./lang/pt-br/pt_BR.mo");

echo "Texto simples";
echo __("load").'<br>';

echo "Parte do texto";
echo sprintf(_("Você tem %s mensagens"), __('image')).'<br>';

// echo sprintf(_ngettext("Você tem %d mensagem", "Você tem %d mensagens", 1), 5);