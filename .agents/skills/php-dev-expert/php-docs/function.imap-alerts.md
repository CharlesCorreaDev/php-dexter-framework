# Retorna todas as mensagens de alerta IMAP que ocorreram

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.imap-alerts.php

---

# imap\_alerts

(PHP 4, PHP 5, PHP 7, PHP 8)

imap\_alerts — Retorna todas as mensagens de alerta IMAP que ocorreram

### Descrição

function **imap\_alerts**(): [array](language.types.array.md)|[false](language.types.singleton.md)

Retorna todas as mensagens de alerta IMAP geradas desde a última
chamada **imap\_alerts()** ou desde o início da página.

Quando **imap\_alerts()** é chamada, a pilha de alertas é
subsequentemente limpa. A especificação IMAP requer que essas mensagens
sejam passadas ao usuário.

### Parâmetros

Esta função não possui parâmetros.

### Valor Retornado

Retorna um array de todas as mensagens de alerta IMAP geradas ou **`false`** se
nenhuma mensagem de alerta estiver disponível.

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
