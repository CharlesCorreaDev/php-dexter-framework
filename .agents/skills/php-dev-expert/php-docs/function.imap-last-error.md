# Obtém o último erro IMAP que ocorreu durante esta solicitação de página

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.imap-last-error.php

---

# imap\_last\_error

(PHP 4, PHP 5, PHP 7, PHP 8)

imap\_last\_error — Obtém o último erro IMAP que ocorreu durante esta solicitação de página

### Descrição

function **imap\_last\_error**(): [string](language.types.string.md)|[false](language.types.singleton.md)

Obtém o texto completo da última mensagem de erro IMAP
que ocorreu na página atual. A pilha de erros não é tocada; chamar
**imap\_last\_error()** subsequentemente, sem erros
intervenientes, retornará o mesmo erro.

### Parâmetros

Esta função não possui parâmetros.

### Valor Retornado

Retorna o texto completo da última mensagem de erro IMAP que ocorreu na
página atual. Retorna **`false`** se nenhuma mensagem de erro estiver disponível.

### Veja também

- [imap\_errors()](function.imap-errors.md) - Retorna todos os erros IMAP que ocorreram

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
