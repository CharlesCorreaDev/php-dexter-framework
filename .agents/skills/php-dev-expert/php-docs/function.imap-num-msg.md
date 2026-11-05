# Obtém o número de mensagens na caixa de correio atual

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.imap-num-msg.php

---

# imap\_num\_msg

(PHP 4, PHP 5, PHP 7, PHP 8)

imap\_num\_msg — Obtém o número de mensagens na caixa de correio atual

### Descrição

function **imap\_num\_msg**([IMAP\Connection](class.imap-connection.md) `$imap`): [int](language.types.integer.md)|[false](language.types.singleton.md)

Obtém o número de mensagens na caixa de correio atual.

### Parâmetros

`imap`
:   Uma instância de [IMAP\Connection](class.imap-connection.md).

### Valor Retornado

Retorna o número de mensagens na caixa de correio atual, como um inteiro, ou **`false`** em caso de erro.

### Registro de Alterações

| Versão | Descrição |
| --- | --- |
| 8.1.0 | O parâmetro `imap` agora espera uma instância de [IMAP\Connection](class.imap-connection.md); anteriormente, um [resource](language.types.resource.md) `imap` válido era esperado. |

### Veja também

- [imap\_num\_recent()](function.imap-num-recent.md) - Obtém o número de mensagens recentes na caixa de correio atual
- [imap\_status()](function.imap-status.md) - Retorna informações de status sobre uma caixa de correio

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
