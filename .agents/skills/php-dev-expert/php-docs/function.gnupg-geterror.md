# Retorna o texto de erro, se uma função falhar

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.gnupg-geterror.php

---

# gnupg\_geterror

(PECL gnupg >= 0.1)

gnupg\_geterror — Retorna o texto de erro, se uma função falhar

### Descrição

function **gnupg\_geterror**([resource](language.types.resource.md) `$identifier`): [string](language.types.string.md)|[false](language.types.singleton.md)

### Parâmetros

`identifier`
:   O identificador gnupg, obtido de uma chamada a
    [gnupg\_init()](function.gnupg-init.md) ou **gnupg**.

### Valor Retornado

Retorna um texto de erro, se ocorreu um erro, caso contrário, **`false`**.

### Examples

**Exemplo #1 Exemplo procedural de **gnupg\_geterror()****

```
<?php
$res = gnupg_init();
echo gnupg_geterror($res);
?>
```

**Exemplo #2 Exemplo orientado a objeto de **gnupg\_geterror()****

```
<?php
$gpg = new gnupg();
echo $gpg->geterror();
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
