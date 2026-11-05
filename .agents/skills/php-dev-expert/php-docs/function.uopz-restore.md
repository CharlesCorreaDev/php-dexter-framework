# Restaura uma função a partir de um backup

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.uopz-restore.php

---

# uopz\_restore

(PECL uopz 1 >= 1.0.3, PECL uopz 2)

uopz\_restore — Restaura uma função a partir de um backup

**Aviso**

Esta função foi
*REMOVIDA* na uopz 5.0.0 no PECL.

### Descrição

function **uopz\_restore**([string](language.types.string.md) `$function`): [void](language.types.void.md)

function **uopz\_restore**([string](language.types.string.md) `$class`, [string](language.types.string.md) `$function`): [void](language.types.void.md)

Restaura uma função a partir de um backup.

### Parâmetros

`class`
:   O nome da classe que contém a função a ser restaurada.

`function`
:   O nome da função.

### Valor Retornado

### Examples

**Exemplo #1 Exemplo de **uopz\_restore()****

```
<?php
uopz_backup("fgets");
uopz_function("fgets", function(){
    return true;
});
var_dump(fgets());
uopz_restore('fgets');
fgets();
?>
```

O exemplo acima produzirá
algo semelhante a:

```
Warning: fgets() expects at least 1 parameter, 0 given in /path/to/script.php on line 8
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
