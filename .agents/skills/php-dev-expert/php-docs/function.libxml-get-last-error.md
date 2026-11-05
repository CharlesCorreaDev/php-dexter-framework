# Obtém o último erro da libxml

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.libxml-get-last-error.php

---

# libxml\_get\_last\_error

(PHP 5 >= 5.1.0, PHP 7, PHP 8)

libxml\_get\_last\_error — 
Obtém o último erro da libxml

### Descrição

function **libxml\_get\_last\_error**(): [LibXMLError](class.libxmlerror.md)|[false](language.types.singleton.md)

Obtém o último erro da libxml.

### Parâmetros

Esta função não possui parâmetros.

### Valor Retornado

Retorna um objeto [LibXMLError](class.libxmlerror.md) se houver algum erro no
buffer, **`false`** caso contrário.

### Veja também

- [libxml\_get\_errors()](function.libxml-get-errors.md) - Obtém um array de erros
- [libxml\_clear\_errors()](function.libxml-clear-errors.md) - Limpa o buffer de erro da libxml

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
