# Fornece um valor de retorno para uma função existente

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.uopz-set-return.php

---

# uopz\_set\_return

(PECL uopz 5, PECL uopz 6, PECL uopz 7)

uopz\_set\_return — Fornece um valor de retorno para uma função existente

### Descrição

function **uopz\_set\_return**([string](language.types.string.md) `$function`, [mixed](language.types.mixed.md) `$value`, [bool](language.types.boolean.md) `$execute` = **`false`**): [bool](language.types.boolean.md)

function **uopz\_set\_return**(  
    [string](language.types.string.md) `$class`,  
    [string](language.types.string.md) `$function`,  
    [mixed](language.types.mixed.md) `$value`,  
    [bool](language.types.boolean.md) `$execute` = **`false`**  
): [bool](language.types.boolean.md)

Define o valor de retorno de `function` como `value`. Se `value`
for um Closure e `execute` estiver definido, o Closure será executado no lugar da função original.
É possível chamar a função original a partir do Closure.

> **Nota**:
>
> Esta função substitui [uopz\_rename()](function.uopz-rename.md).

### Parâmetros

`class`
:   O nome da classe que contém a função.

`function`
:   O nome de uma função existente.

`value`
:   O valor que a função deve retornar. Se um Closure for fornecido e o sinalizador de execução estiver definido, o Closure será executado no lugar da função original.

`execute`
:   Se for igual a true e um Closure tiver sido fornecido como valor, o Closure será executado no lugar da função original.

### Valor Retornado

True se for bem-sucedido, false caso contrário.

### Examples

**Exemplo #1 Exemplo de **uopz\_set\_return()****

```
<?php
uopz_set_return("strlen", 42);
echo strlen("Banana");
?>
```

O exemplo acima produzirá:

```
42
```

**Exemplo #2 Exemplo de **uopz\_set\_return()****

```
<?php
uopz_set_return("strlen", function($str) { return strlen($str) * 2; }, true );
echo strlen("Banana");
?>
```

O exemplo acima produzirá:

```
12
```

**Exemplo #3 Exemplo de **uopz\_set\_return()** com uma classe**

```
<?php
class My {
    public static function strlen($arg) {
        return strlen($arg);
    }
}
uopz_set_return(My::class, "strlen", function($str) { return strlen($str) * 2; }, true );
echo My::strlen("Banana");
?>
```

O exemplo acima produzirá:

```
12
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
