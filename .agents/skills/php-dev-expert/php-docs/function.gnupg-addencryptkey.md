# Adiciona uma chave para criptografia

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.gnupg-addencryptkey.php

---

# gnupg\_addencryptkey

(PECL gnupg >= 0.5)

gnupg\_addencryptkey — Adiciona uma chave para criptografia

### Descrição

function **gnupg\_addencryptkey**([resource](language.types.resource.md) `$identifier`, [string](language.types.string.md) `$fingerprint`): [bool](language.types.boolean.md)

### Parâmetros

`identifier`
:   O identificador gnupg, obtido de uma chamada a
    [gnupg\_init()](function.gnupg-init.md) ou **gnupg**.

`fingerprint`
:   A chave da impressão digital.

### Valor Retornado

Retorna **`true`** em caso de sucesso ou **`false`** em caso de falha.

### Examples

**Exemplo #1 Exemplo procedural de **gnupg\_addencryptkey()****

```
<?php
$res = gnupg_init();
gnupg_addencryptkey($res,"8660281B6051D071D94B5B230549F9DC851566DC");
?>
```

**Exemplo #2 Exemplo orientado a objeto de **gnupg\_addencryptkey()****

```
<?php
$gpg = new gnupg();
$gpg->addencryptkey("8660281B6051D071D94B5B230549F9DC851566DC");
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
