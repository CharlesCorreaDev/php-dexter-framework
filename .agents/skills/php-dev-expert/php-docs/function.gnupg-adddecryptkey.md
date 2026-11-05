# Adiciona uma chave para descriptografia

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.gnupg-adddecryptkey.php

---

# gnupg\_adddecryptkey

(PECL gnupg >= 0.5)

gnupg\_adddecryptkey — Adiciona uma chave para descriptografia

### Descrição

function **gnupg\_adddecryptkey**([resource](language.types.resource.md) `$identifier`, [string](language.types.string.md) `$fingerprint`, [string](language.types.string.md) `$passphrase`): [bool](language.types.boolean.md)

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

**Exemplo #1 Exemplo procedural de **gnupg\_adddecryptkey()****

```
<?php
$res = gnupg_init();
gnupg_adddecryptkey($res,"8660281B6051D071D94B5B230549F9DC851566DC","test");
?>
```

**Exemplo #2 Exemplo orientado a objeto de **gnupg\_adddecryptkey()****

```
<?php
$gpg = new gnupg();
$gpg->adddecryptkey("8660281B6051D071D94B5B230549F9DC851566DC","test");
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
