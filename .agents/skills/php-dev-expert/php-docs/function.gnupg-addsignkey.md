# Adiciona uma chave para assinatura

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.gnupg-addsignkey.php

---

# gnupg\_addsignkey

(PECL gnupg >= 0.5)

gnupg\_addsignkey — Adiciona uma chave para assinatura

### Descrição

function **gnupg\_addsignkey**([resource](language.types.resource.md) `$identifier`, [string](language.types.string.md) `$fingerprint`, [string](language.types.string.md) `$passphrase` = ?): [bool](language.types.boolean.md)

### Parâmetros

`identifier`
:   O identificador gnupg, obtido de uma chamada a
    [gnupg\_init()](function.gnupg-init.md) ou **gnupg**.

`fingerprint`
:   A chave da impressão digital.

`passphrase`
:   A frase secreta.

### Valor Retornado

Retorna **`true`** em caso de sucesso ou **`false`** em caso de falha.

### Examples

**Exemplo #1 Exemplo procedural de **gnupg\_addsignkey()****

```
<?php
$res = gnupg_init();
gnupg_addsignkey($res,"8660281B6051D071D94B5B230549F9DC851566DC","test");
?>
```

**Exemplo #2 Exemplo orientado a objeto de **gnupg\_addsignkey()****

```
<?php
$gpg = new gnupg();
$gpg->addsignkey("8660281B6051D071D94B5B230549F9DC851566DC","test");
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
