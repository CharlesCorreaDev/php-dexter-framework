# Retorna todos os erros IMAP que ocorreram

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.imap-errors.php

---

# imap\_errors

(PHP 4, PHP 5, PHP 7, PHP 8)

imap\_errors — Retorna todos os erros IMAP que ocorreram

### Descrição

function **imap\_errors**(): [array](language.types.array.md)|[false](language.types.singleton.md)

Obtém todos os erros IMAP (se ocorreram)
durante esta solicitação de página ou desde que a pilha de erros foi redefinida.

Quando **imap\_errors()** é chamada, a pilha de erros é
posteriormente limpa.

### Parâmetros

Esta função não possui parâmetros.

### Valor Retornado

Esta função retorna um array de todas as mensagens de erro IMAP
geradas desde a última chamada de **imap\_errors()**,
ou desde o início da página. Retorna **`false`** se nenhuma mensagem de erro estiver
disponível.

### Veja também

- [imap\_last\_error()](function.imap-last-error.md) - Obtém o último erro IMAP que ocorreu durante esta solicitação de página
- [imap\_alerts()](function.imap-alerts.md) - Retorna todas as mensagens de alerta IMAP que ocorreram

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
