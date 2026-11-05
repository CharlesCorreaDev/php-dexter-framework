# Faz backup de uma função

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.uopz-backup.php

---

# uopz\_backup

(PECL uopz 1 >= 1.0.3, PECL uopz 2)

uopz\_backup — Faz backup de uma função

**Aviso**

Esta função foi
*REMOVIDA* na uopz 5.0.0 no PECL.

### Descrição

function **uopz\_backup**([string](language.types.string.md) `$function`): [void](language.types.void.md)

function **uopz\_backup**([string](language.types.string.md) `$class`, [string](language.types.string.md) `$function`): [void](language.types.void.md)

Faz backup de uma função em tempo de execução, para ser restaurada no desligamento.

### Parâmetros

`class`
:   O nome da classe que contém a função para backup

`function`
:   O nome da função

### Valor Retornado

### Examples

**Exemplo #1 Exemplo de **uopz\_backup()****

```
<?php
uopz_backup("fgets");
uopz_function("fgets", function(){
    return true;
});
var_dump(fgets());
?>
```

O exemplo acima produzirá:

```
bool(true)
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
