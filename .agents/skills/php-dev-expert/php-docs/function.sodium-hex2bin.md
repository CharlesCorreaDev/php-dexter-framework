# Decodifica uma string binária codificada em hexadecimal

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.sodium-hex2bin.php

---

# sodium\_hex2bin

(PHP 7 >= 7.2.0, PHP 8)

sodium\_hex2bin — Decodifica uma string binária codificada em hexadecimal

### Descrição

function **sodium\_hex2bin**(#[[\SensitiveParameter](class.sensitiveparameter.md)] [string](language.types.string.md) `$string`, [string](language.types.string.md) `$ignore` = ""): [string](language.types.string.md)

Decodifica uma string binária codificada em hexadecimal.

Assim como [sodium\_bin2hex()](function.sodium-bin2hex.md), **sodium\_hex2bin()**
é resistente a ataques de canal lateral, enquanto [hex2bin()](function.hex2bin.md) não.

### Parâmetros

`string`
:   Representação hexadecimal dos dados.

`ignore`
:   Argumento string opcional para caracteres a serem ignorados.

### Valor Retornado

Retorna a representação binária dos dados da `string` especificada.

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
