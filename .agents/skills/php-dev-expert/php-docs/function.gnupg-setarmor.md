# Alterna a saída blindada

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.gnupg-setarmor.php

---

# gnupg\_setarmor

(PECL gnupg >= 0.1)

gnupg\_setarmor — Alterna a saída blindada

### Descrição

function **gnupg\_setarmor**([resource](language.types.resource.md) `$identifier`, [int](language.types.integer.md) `$armor`): [bool](language.types.boolean.md)

Alterna a saída blindada.

### Parâmetros

`identifier`
:   O identificador gnupg, obtido de uma chamada a
    [gnupg\_init()](function.gnupg-init.md) ou **gnupg**.

`armor`
:   Passe um valor inteiro diferente de zero para esta função para habilitar saída blindada
    (padrão).
    Passe 0 para desabilitar saída blindada.

### Valor Retornado

Retorna **`true`** em caso de sucesso ou **`false`** em caso de falha.

### Examples

**Exemplo #1 Exemplo procedural de **gnupg\_setarmor()****

```
<?php
$res = gnupg_init();
gnupg_setarmor($res,1); // habilita saída blindada;
gnupg_setarmor($res,0); // desabilita saída blindada;
?>
```

**Exemplo #2 Exemplo orientado a objeto de **gnupg\_setarmor()****

```
<?php
$gpg = new gnupg();
$gpg->setarmor(1); // habilita saída blindada;
$gpg->setarmor(0); // desabilita saída blindada;
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
