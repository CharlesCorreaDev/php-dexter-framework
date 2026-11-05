# Logaritmo natural

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.log.php

---

# log

(PHP 4, PHP 5, PHP 7, PHP 8)

log — Logaritmo natural

### Descrição

function **log**([float](language.types.float.md) `$num`, [float](language.types.float.md) `$base` = **`M_E`**): [float](language.types.float.md)

Se a `base` opcional for informada,
**log()** retorna logbase
`num`, senão **log()**
retorna o logaritmo natural de `num`.

### Parâmetros

`num`
:   O valor para o qual o logaritmo será calculado

`base`
:   A base logaritmica opcional a ser utilizada
    (padrão é 'e' para logaritmo natural).

### Valor Retornado

O logarimo de `num` na
`base`, se fornecida, ou o
logaritmo natural.

### Veja também

- [log10()](function.log10.md) - Logaritmo na base 10
- [exp()](function.exp.md) - Calcula o expoente de e
- [pow()](function.pow.md) - Expressão exponencial
- [error\_log()](function.error-log.md) - Envia uma mensagem de erro para as rotinas de tratamento de erros definidas

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
