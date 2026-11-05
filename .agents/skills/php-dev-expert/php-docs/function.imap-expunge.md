# Exclui todas as mensagens marcadas para exclusão

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.imap-expunge.php

---

# imap\_expunge

(PHP 4, PHP 5, PHP 7, PHP 8)

imap\_expunge — Exclui todas as mensagens marcadas para exclusão

### Descrição

function **imap\_expunge**([IMAP\Connection](class.imap-connection.md) `$imap`): [true](language.types.singleton.md)

Exclui todas as mensagens marcadas para exclusão por
[imap\_delete()](function.imap-delete.md), [imap\_mail\_move()](function.imap-mail-move.md) ou
[imap\_setflag\_full()](function.imap-setflag-full.md).

### Parâmetros

`imap`
:   Uma instância de [IMAP\Connection](class.imap-connection.md).

### Valor Retornado

Sempre retorna **`true`**.

### Registro de Alterações

| Versão | Descrição |
| --- | --- |
| 8.1.0 | O parâmetro `imap` agora espera uma instância de [IMAP\Connection](class.imap-connection.md); anteriormente, um [resource](language.types.resource.md) `imap` válido era esperado. |

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
