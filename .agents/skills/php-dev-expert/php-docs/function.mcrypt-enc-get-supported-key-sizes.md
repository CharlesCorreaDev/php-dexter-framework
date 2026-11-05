# Retorna um array com os tamanhos de chaves suportados do algoritmo aberto

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.mcrypt-enc-get-supported-key-sizes.php

---

# mcrypt\_enc\_get\_supported\_key\_sizes

(PHP 4 >= 4.0.2, PHP 5, PHP 7 < 7.2.0, PECL mcrypt >= 1.0.0)

mcrypt\_enc\_get\_supported\_key\_sizes — Retorna um array com os tamanhos de chaves suportados do algoritmo aberto

**Aviso**

Esta função foi
*DESCONTINUADA* a partir do PHP 7.1.0 e foi
*REMOVIDA* a partir do PHP 7.2.0. O uso desta função
é fortemente desencorajado.

### Descrição

function **mcrypt\_enc\_get\_supported\_key\_sizes**([resource](language.types.resource.md) `$td`): [array](language.types.array.md)

Obtém os tamanhos de chave suportados pelo algoritmo aberto.

### Parâmetros

`td`
:   O descritor de criptografia.

### Valor Retornado

Retorna um array com os tamanhos de chave suportados pelo algoritmo
especificado pelo descritor de criptografia. Se retornar um array
vazio, todos os tamanhos de chave entre 1 e
[mcrypt\_enc\_get\_key\_size()](function.mcrypt-enc-get-key-size.md) são suportados pelo
algoritmo.

### Examples

**Exemplo #1 Exemplo de **mcrypt\_enc\_get\_supported\_key\_sizes()****

```
<?php
    $td = mcrypt_module_open('rijndael-256', '', 'ecb', '');
    var_dump(mcrypt_enc_get_supported_key_sizes($td));
?>
```

O exemplo acima produzirá:

```
array(3) {
  [0]=>
  int(16)
  [1]=>
  int(24)
  [2]=>
  int(32)
}
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
