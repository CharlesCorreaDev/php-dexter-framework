# Define ou busca o tempo limite do imap

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.imap-timeout.php

---

# imap\_timeout

(PHP 4 >= 4.3.3, PHP 5, PHP 7, PHP 8)

imap\_timeout — Define ou busca o tempo limite do imap

### Descrição

function **imap\_timeout**([int](language.types.integer.md) `$timeout_type`, [int](language.types.integer.md) `$timeout` = -1): [int](language.types.integer.md)|[bool](language.types.boolean.md)

Define ou busca o tempo limite do imap.

### Parâmetros

`timeout_type`
:   Uma das seguintes constantes:
    **`IMAP_OPENTIMEOUT`**,
    **`IMAP_READTIMEOUT`**,
    **`IMAP_WRITETIMEOUT`** ou
    **`IMAP_CLOSETIMEOUT`**.

`timeout`
:   O tempo limite, em segundos.

### Valor Retornado

Se o parâmetro `timeout` estiver definido, esta função
retornará **`true`** em caso de sucesso e **`false`** em caso de falha.

Se `timeout` não for fornecido ou for avaliado como -1,
o valor de tempo limite atual de `timeout_type` será
retornado como um inteiro.

### Examples

**Exemplo #1 Exemplo de **imap\_timeout()****

```
<?php

echo "O tempo limite de leitura atual é " . imap_timeout(IMAP_READTIMEOUT) . "\n";

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
