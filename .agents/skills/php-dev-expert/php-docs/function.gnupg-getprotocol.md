# Retorna o protocolo atualmente ativo para todas as operações

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.gnupg-getprotocol.php

---

# gnupg\_getprotocol

(PECL gnupg >= 0.1)

gnupg\_getprotocol — Retorna o protocolo atualmente ativo para todas as operações

### Descrição

function **gnupg\_getprotocol**([resource](language.types.resource.md) `$identifier`): [int](language.types.integer.md)

### Parâmetros

`identifier`
:   O identificador gnupg, obtido de uma chamada a
    [gnupg\_init()](function.gnupg-init.md) ou **gnupg**.

### Valor Retornado

Retorna o protocolo ativo no momento, que pode ser uma das constantes
**`GNUPG_PROTOCOL_OpenPGP`** ou
**`GNUPG_PROTOCOL_CMS`**.

### Examples

**Exemplo #1 Exemplo procedural de **gnupg\_getprotocol()****

```
<?php
$res = gnupg_init();
echo gnupg_getprotocol($res);
?>
```

**Exemplo #2 Exemplo orientado a objeto de **gnupg\_getprotocol()****

```
<?php
$gpg = new gnupg();
echo $gpg->getprotocol();
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
