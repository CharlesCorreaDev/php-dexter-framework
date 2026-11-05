# Exclui uma chave do chaveiro

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.gnupg-deletekey.php

---

# gnupg\_deletekey

(PECL gnupg >= 0.5)

gnupg\_deletekey — Exclui uma chave do chaveiro

### Descrição

function **gnupg\_deletekey**([resource](language.types.resource.md) `$identifier`, [string](language.types.string.md) `$key`, [bool](language.types.boolean.md) `$allow_secret`): [bool](language.types.boolean.md)

### Parâmetros

`identifier`
:   O identificador gnupg, obtido de uma chamada a
    [gnupg\_init()](function.gnupg-init.md) ou **gnupg**.

`key`
:   A chave a ser excluída.

`allow_secret`
:   Especifica se as chaves secretas também devem ser excluídas.

### Valor Retornado

Retorna **`true`** em caso de sucesso ou **`false`** em caso de falha.

### Examples

**Exemplo #1 Exemplo procedural de **gnupg\_deletekey()****

```
<?php
$res = gnupg_init();
gnupg_deletekey($res, "8660281B6051D071D94B5B230549F9DC851566DC");
?>
```

**Exemplo #2 Exemplo orientado a objeto de **gnupg\_deletekey()****

```
<?php
$gpg = new gnupg();
$gpg->deletekey("8660281B6051D071D94B5B230549F9DC851566DC");
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
