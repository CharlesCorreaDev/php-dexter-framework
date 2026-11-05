# Retorna o nome do algoritmo aberto

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.mcrypt-enc-get-algorithms-name.php

---

# mcrypt\_enc\_get\_algorithms\_name

(PHP 4 >= 4.0.2, PHP 5, PHP 7 < 7.2.0, PECL mcrypt >= 1.0.0)

mcrypt\_enc\_get\_algorithms\_name — Retorna o nome do algoritmo aberto

**Aviso**

Esta função foi
*DESCONTINUADA* a partir do PHP 7.1.0 e foi
*REMOVIDA* a partir do PHP 7.2.0. O uso desta função
é fortemente desencorajado.

### Descrição

function **mcrypt\_enc\_get\_algorithms\_name**([resource](language.types.resource.md) `$td`): [string](language.types.string.md)

Esta função retorna o nome do algoritmo.

### Parâmetros

`td`
:   O descritor de criptografia.

### Valor Retornado

Retorna o nome do algoritmo aberto como uma string.

### Examples

**Exemplo #1 Exemplo de **mcrypt\_enc\_get\_algorithms\_name()****

```
<?php
$td = mcrypt_module_open(MCRYPT_CAST_256, '', MCRYPT_MODE_CFB, '');
echo mcrypt_enc_get_algorithms_name($td). "\n";

$td = mcrypt_module_open('cast-256', '', MCRYPT_MODE_CFB, '');
echo mcrypt_enc_get_algorithms_name($td). "\n";
?>
```

O exemplo acima produzirá:

```
CAST-256
CAST-256
```

`↑` and `↓` to navigate •
`Enter` to select •
`Esc` to close • `/` to open

document.addEventListener("DOMContentLoaded", function() {
/\*{{{Search Modal\*/
const language = 'local';
initSearchModal();
initPHPSearch(language).then((searchCallback) => {
initSearchUI({language, searchCallback, limit: 30});
});
/\*}}}\*/
});
