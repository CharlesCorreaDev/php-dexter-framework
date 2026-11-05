# Converte parap minúscula o primeiro caractere de uma string

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.mb-lcfirst.php

---

# mb\_lcfirst

(PHP 8 >= 8.4.0)

mb\_lcfirst — Converte parap minúscula o primeiro caractere de uma string

### Descrição

function **mb\_lcfirst**([string](language.types.string.md) `$string`, [?](language.types.null.md)[string](language.types.string.md) `$encoding` = **`null`**): [string](language.types.string.md)

Realiza uma operação [lcfirst()](function.lcfirst.md) segura para caracteres multi-byte,
e retorna uma string com o primeiro caractere de
`string` convertido para minúscula.

### Parâmetros

`string`
:   A string de entrada.

`encoding`
:   O parâmetro `encoding`
    é a codificação de caracteres. Se for omitido ou **`null`**, o valor da codificação
    de caracteres interna será usado.

### Valor Retornado

Retorna a string resultante.

### Veja também

- [mb\_ucfirst()](function.mb-ucfirst.md) - Converte para maiúscula o primeiro caractere de uma string
- [lcfirst()](function.lcfirst.md) - Torna minúsculo o primeiro caractere de uma string

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
