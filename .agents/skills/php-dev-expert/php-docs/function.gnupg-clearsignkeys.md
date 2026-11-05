# Remove todas as chaves que foram definidas para assinatura antes

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.gnupg-clearsignkeys.php

---

# gnupg\_clearsignkeys

(PECL gnupg >= 0.5)

gnupg\_clearsignkeys — Remove todas as chaves que foram definidas para assinatura antes

### Descrição

function **gnupg\_clearsignkeys**([resource](language.types.resource.md) `$identifier`): [bool](language.types.boolean.md)

### Parâmetros

`identifier`
:   O identificador gnupg, obtido de uma chamada a
    [gnupg\_init()](function.gnupg-init.md) ou **gnupg**.

### Valor Retornado

Retorna **`true`** em caso de sucesso ou **`false`** em caso de falha.

### Examples

**Exemplo #1 Exemplo procedural de **gnupg\_clearsignkeys()****

```
<?php
$res = gnupg_init();
gnupg_clearsignkeys($res);
?>
```

**Exemplo #2 Exemplo orientado a objeto de **gnupg\_clearsignkeys()****

```
<?php
$gpg = new gnupg();
$gpg->clearsignkeys();
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
