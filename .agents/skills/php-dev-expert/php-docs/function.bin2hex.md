# Converte um dado binário em representação hexadecimal

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.bin2hex.php

---

# bin2hex

(PHP 4, PHP 5, PHP 7, PHP 8)

bin2hex — Converte um dado binário em representação hexadecimal

### Descrição

function **bin2hex**([string](language.types.string.md) `$string`): [string](language.types.string.md)

Retorna uma string ASCII uma representação hexadecimal de
`string`. A conversão é feita byte-wise
com o high-nibble primeiro.

### Parâmetros

`string`
:   Uma string.

### Valor Retornado

Retorna a representação hexadecimal de uma dada string.

### Examples

**Exemplo #1 Exemplo de **bin2hex()****

```
<?php

$hex = bin2hex('Hello world!');

var_dump($hex);
var_dump(hex2bin($hex));
?>
```

O exemplo acima produzirá:

```
string(24) "48656c6c6f20776f726c6421"
string(12) "Hello world!"
```

### Veja também

- [hex2bin()](function.hex2bin.md) - Decodifica uma string binária codificada em hexadecimal
- [pack()](function.pack.md) - Empacota dados em uma string binária

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
