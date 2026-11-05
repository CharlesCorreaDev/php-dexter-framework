# Retorna todas as funções __autoload() registradas

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.spl-autoload-functions.php

---

# spl\_autoload\_functions

(PHP 5 >= 5.1.0, PHP 7, PHP 8)

spl\_autoload\_functions — Retorna todas as funções \_\_autoload() registradas

### Descrição

function **spl\_autoload\_functions**(): [array](language.types.array.md)

Obtém todas as funções \_\_autoload() registradas.

### Parâmetros

Esta função não possui parâmetros.

### Valor Retornado

Um [array](language.types.array.md) de todas as funções \_\_autoload() registradas.
Se nenhuma função estiver registrada, ou a fila de autoload não estiver ativada,
então o valor de retorno será um array vazio.

### Registro de Alterações

| Versão | Descrição |
| --- | --- |
| 8.0.0 | O valor de retorno foi atualizado para sempre ser um [array](language.types.array.md); anteriormente, esta função retornava **`false`** se a fila de autoload não estivesse ativada. |

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
