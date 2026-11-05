# Exclui uma função

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.uopz-delete.php

---

# uopz\_delete

(PECL uopz 1, PECL uopz 2)

uopz\_delete — Exclui uma função

**Aviso**

Esta função foi
*REMOVIDA* na uopz 5.0.0 no PECL.

### Descrição

function **uopz\_delete**([string](language.types.string.md) `$function`): [void](language.types.void.md)

function **uopz\_delete**([string](language.types.string.md) `$class`, [string](language.types.string.md) `$function`): [void](language.types.void.md)

Exclui uma função ou um método.

### Parâmetros

`class`

`function`

### Valor Retornado

### Examples

**Exemplo #1 Exemplo de **uopz\_delete()****

```
<?php
uopz_delete("strlen");

echo strlen("Hello World");
?>
```

O exemplo acima produzirá
algo semelhante a:

```
PHP Fatal error: Call to undefined function strlen() in /path/to/script.php on line 4
```

**Exemplo #2 Exemplo de **uopz\_delete()** com uma classe**

```
<?php
class My {
    public static function strlen($arg) {
        return strlen($arg);
    }
}

uopz_delete(My::class, "strlen");

echo My::strlen("Hello World");
?>
```

O exemplo acima produzirá
algo semelhante a:

```
PHP Fatal error: Call to undefined method My::strlen() in /path/to/script.php on line 10
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
