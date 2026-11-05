# Verifica se o fluxo IMAP ainda é válido

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.imap-is-open.php

---

# imap\_is\_open

(PHP 8 >= 8.2.1)

imap\_is\_open — Verifica se o fluxo IMAP ainda é válido

### Descrição

function **imap\_is\_open**([IMAP\Connection](class.imap-connection.md) `$imap`): [bool](language.types.boolean.md)

Verifica se o fluxo IMAP ainda é válido.

### Parâmetros

`imap`
:   Uma instância de [IMAP\Connection](class.imap-connection.md).

### Valor Retornado

Retorna **`true`** se o fluxo ainda for válido, **`false`** caso contrário.

### Examples

**Exemplo #1 Exemplo de **imap\_is\_open()****

```
<?php
$mbox = imap_open("{imap.example.org:143}INBOX", "username", "password") or die(implode(", ", imap_errors()));
imap_is_open($mbox);
// ...
?>
```

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
