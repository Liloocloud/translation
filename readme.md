# Traduzindo Conteúdos 
https://www.devin.com.br/php-gettext/

Tradução simples utilizando gettext
```php
echo "Texto simples";
echo __("load").'<br>';
```

Tradução com variável utilizando gettext
```php
echo "Parte do texto";
echo sprintf(_("Você tem %s mensagens"), __('image')).'<br>';
```
