# Renomeia uma função em tempo de execução

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.uopz-rename.php

---

# uopz\_rename

(PECL uopz 1, PECL uopz 2)

uopz\_rename — Renomeia uma função em tempo de execução

**Aviso**

Esta função foi
*REMOVIDA* na uopz 5.0.0 no PECL.

### Descrição

function **uopz\_rename**([string](language.types.string.md) `$function`, [string](language.types.string.md) `$rename`): [void](language.types.void.md)

function **uopz\_rename**([string](language.types.string.md) `$class`, [string](language.types.string.md) `$function`, [string](language.types.string.md) `$rename`): [void](language.types.void.md)

Renomeia a função `function` para o nome `rename`.

> **Nota**:
>
> Se ambas as funções existirem, isso efetivamente troca seus nomes.

### Parâmetros

`class`
:   O nome da classe que contém a função.

`function`
:   O nome de uma função existente

`rename`
:   O novo nome da função

### Valor Retornado

### Examples

**Exemplo #1 Exemplo de **uopz\_rename()****

```
<?php
uopz_rename("strlen", "original_strlen");

echo original_strlen("Hello World");
?>
```

O exemplo acima produzirá:

```
11
```

**Exemplo #2 Exemplo de **uopz\_rename()** com uma classe**

```
<?php
class My {
    public function strlen($arg) {
        return strlen($arg);
    }
}

uopz_rename(My::class, "strlen", "original_strlen");

echo My::original_strlen("Hello World");
?>
```

O exemplo acima produzirá:

```
11
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
