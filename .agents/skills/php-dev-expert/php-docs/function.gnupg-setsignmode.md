# Define o modo de assinatura

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.gnupg-setsignmode.php

---

# gnupg\_setsignmode

(PECL gnupg >= 0.1)

gnupg\_setsignmode — Define o modo de assinatura

### Descrição

function **gnupg\_setsignmode**([resource](language.types.resource.md) `$identifier`, [int](language.types.integer.md) `$signmode`): [bool](language.types.boolean.md)

Define o modo de assinatura.

### Parâmetros

`identifier`
:   O identificador gnupg, obtido de uma chamada a
    [gnupg\_init()](function.gnupg-init.md) ou **gnupg**.

`sigmode`
:   O modo de assinatura.

    `signmode` recebe uma constante indicando que tipo de
    assinatura deve ser produzida. Os valores possíveis são
    **`GNUPG_SIG_MODE_NORMAL`**,
    **`GNUPG_SIG_MODE_DETACH`** e
    **`GNUPG_SIG_MODE_CLEAR`**.
    Por padrão, **`GNUPG_SIG_MODE_CLEAR`** é usado.

### Valor Retornado

Retorna **`true`** em caso de sucesso ou **`false`** em caso de falha.

### Examples

**Exemplo #1 Exemplo procedural de **gnupg\_setsignmode()****

```
<?php
$res = gnupg_init();
gnupg_setsignmode($res,GNUPG_SIG_MODE_DETACH); // produz uma assinatura destacada
?>
```

**Exemplo #2 Exemplo orientado a objeto de **gnupg\_setsignmode()****

```
<?php
$gpg = new gnupg();
$gpg->setsignmode(gnupg::SIG_MODE_DETACH); // produz uma assinatura destacada
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
