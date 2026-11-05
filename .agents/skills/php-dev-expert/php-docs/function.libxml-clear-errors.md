# Limpa o buffer de erro da libxml

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.libxml-clear-errors.php

---

# libxml\_clear\_errors

(PHP 5 >= 5.1.0, PHP 7, PHP 8)

libxml\_clear\_errors — 
Limpa o buffer de erro da libxml

### Descrição

function **libxml\_clear\_errors**(): [void](language.types.void.md)

**libxml\_clear\_errors()** limpa o buffer de erro da libxml.

### Parâmetros

Esta função não possui parâmetros.

### Valor Retornado

Nenhum valor é retornado.

### Veja também

- [libxml\_get\_errors()](function.libxml-get-errors.md) - Obtém um array de erros
- [libxml\_get\_last\_error()](function.libxml-get-last-error.md) - Obtém o último erro da libxml

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
