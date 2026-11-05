# Obtém o nome da cifra especificada

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.mcrypt-get-cipher-name.php

---

# mcrypt\_get\_cipher\_name

(PHP 4, PHP 5, PHP 7 < 7.2.0, PECL mcrypt >= 1.0.0)

mcrypt\_get\_cipher\_name — Obtém o nome da cifra especificada

**Aviso**

Esta função foi
*DESCONTINUADA* a partir do PHP 7.1.0 e foi
*REMOVIDA* a partir do PHP 7.2.0. O uso desta função
é fortemente desencorajado.

### Descrição

function **mcrypt\_get\_cipher\_name**([int](language.types.integer.md) `$cipher`): [string](language.types.string.md)

function **mcrypt\_get\_cipher\_name**([string](language.types.string.md) `$cipher`): [string](language.types.string.md)

**mcrypt\_get\_cipher\_name()** é usada para obter o
nome da cifra especificada.

**mcrypt\_get\_cipher\_name()** recebe o número da cifra
como um argumento (libmcrypt 2.2.x) ou recebe o nome da cifra
como um argumento (libmcrypt 2.4.x ou superior) e retorna o nome da cifra
ou **`false`**, se a cifra não existir.

### Parâmetros

`cipher`
:   Uma das constantes **`MCRYPT_nome_da_cifra`** ou o nome do algoritmo como string.

### Valor Retornado

Esta função retorna o nome da cifra ou **`false`** se a cifra não
existir.

### Examples

**Exemplo #1 Exemplo de **mcrypt\_get\_cipher\_name()****

```
<?php
   $cipher = MCRYPT_TripleDES;

   echo mcrypt_get_cipher_name($cipher);
?>
```

O exemplo acima produzirá:

```
3DES
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
