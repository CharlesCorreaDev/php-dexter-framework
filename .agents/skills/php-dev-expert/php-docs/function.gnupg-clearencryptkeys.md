# Remove todas as chaves que foram definidas para criptografia antes

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.gnupg-clearencryptkeys.php

---

# gnupg\_clearencryptkeys

(PECL gnupg >= 0.5)

gnupg\_clearencryptkeys — Remove todas as chaves que foram definidas para criptografia antes

### Descrição

function **gnupg\_clearencryptkeys**([resource](language.types.resource.md) `$identifier`): [bool](language.types.boolean.md)

### Parâmetros

`identifier`
:   O identificador gnupg, obtido de uma chamada a
    [gnupg\_init()](function.gnupg-init.md) ou **gnupg**.

### Valor Retornado

Retorna **`true`** em caso de sucesso ou **`false`** em caso de falha.

### Examples

**Exemplo #1 Exemplo procedural de **gnupg\_clearencryptkeys()****

```
<?php
$res = gnupg_init();
gnupg_clearencryptkeys($res);
?>
```

**Exemplo #2 Exemplo orientado a objeto de **gnupg\_clearencryptkeys()****

```
<?php
$gpg = new gnupg();
$gpg->clearencryptkeys();
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
