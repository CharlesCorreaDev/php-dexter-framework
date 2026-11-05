# Desmarca a mensagem que está marcada como excluída

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.imap-undelete.php

---

# imap\_undelete

(PHP 4, PHP 5, PHP 7, PHP 8)

imap\_undelete — Desmarca a mensagem que está marcada como excluída

### Descrição

function **imap\_undelete**([IMAP\Connection](class.imap-connection.md) `$imap`, [string](language.types.string.md) `$message_nums`, [int](language.types.integer.md) `$flags` = 0): [true](language.types.singleton.md)

Remove o sinalizador de exclusão para uma mensagem especificada, que é definido por
[imap\_delete()](function.imap-delete.md) ou [imap\_mail\_move()](function.imap-mail-move.md).

### Parâmetros

`imap`
:   Uma instância de [IMAP\Connection](class.imap-connection.md).

`message_nums`
:   Uma [string](language.types.string.md) representando uma ou mais mensagens no formato de sequência estilo IMAP4
    (`"n"`, `"n:m"` ou uma combinação destes
    delimitados por vírgulas).

`flags`

### Valor Retornado

Sempre retorna **`true`**.

### Registro de Alterações

| Versão | Descrição |
| --- | --- |
| 8.1.0 | O parâmetro `imap` agora espera uma instância de [IMAP\Connection](class.imap-connection.md); anteriormente, um [resource](language.types.resource.md) `imap` válido era esperado. |

### Veja também

- [imap\_delete()](function.imap-delete.md) - Marca uma mensagem para exclusão da caixa de correio atual
- [imap\_mail\_move()](function.imap-mail-move.md) - Move mensagens especificadas para uma caixa de correio

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
