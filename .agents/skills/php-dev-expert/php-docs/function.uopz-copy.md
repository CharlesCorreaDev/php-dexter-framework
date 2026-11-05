# Copia uma função

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.uopz-copy.php

---

# uopz\_copy

(PECL uopz 1 >= 1.0.4, PECL uopz 2)

uopz\_copy — Copia uma função

**Aviso**

Esta função foi
*REMOVIDA* na uopz 5.0.0 no PECL.

### Descrição

function **uopz\_copy**([string](language.types.string.md) `$function`): [Closure](class.closure.md)

function **uopz\_copy**([string](language.types.string.md) `$class`, [string](language.types.string.md) `$function`): [Closure](class.closure.md)

Copia uma função por nome.

### Parâmetros

`class`
:   O nome da classe que contém a função a ser copiada.

`function`
:   O nome da função

### Valor Retornado

Um Closure para a função especificada.

### Examples

**Exemplo #1 Exemplo de **uopz\_copy()****

```
<?php
$strtotime = uopz_copy('strtotime');

uopz_function("strtotime", function($arg1, $arg2) use($strtotime) {
    /* pode chamar o strtotime original daqui */
    var_dump($arg1);
});

var_dump(strtotime('dummy'));
?>
```

O exemplo acima produzirá:

```
string(5) "dummy"
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
