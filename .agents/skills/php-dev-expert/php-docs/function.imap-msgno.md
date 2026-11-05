# Obtém o número da sequência da mensagem para o UID fornecido

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.imap-msgno.php

---

# imap\_msgno

(PHP 4, PHP 5, PHP 7, PHP 8)

imap\_msgno — Obtém o número da sequência da mensagem para o UID fornecido

### Descrição

function **imap\_msgno**([IMAP\Connection](class.imap-connection.md) `$imap`, [int](language.types.integer.md) `$message_uid`): [int](language.types.integer.md)

Retorna o número da sequência da mensagem para o
`message_uid` fornecido.

Esta função é a inversa de [imap\_uid()](function.imap-uid.md).

### Parâmetros

`imap`
:   Uma instância de [IMAP\Connection](class.imap-connection.md).

`message_uid`
:   O UID da mensagem

### Valor Retornado

Retorna o número da sequência da mensagem para o
`message_uid` fornecido.

### Registro de Alterações

| Versão | Descrição |
| --- | --- |
| 8.1.0 | O parâmetro `imap` agora espera uma instância de [IMAP\Connection](class.imap-connection.md); anteriormente, um [resource](language.types.resource.md) `imap` válido era esperado. |

### Veja também

- [imap\_uid()](function.imap-uid.md) - Retorna o UID para o número de sequência da mensagem fornecida

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
