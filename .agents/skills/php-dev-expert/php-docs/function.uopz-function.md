# Cria uma função em tempo de execução

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.uopz-function.php

---

# uopz\_function

(PECL uopz 1, PECL uopz 2)

uopz\_function — Cria uma função em tempo de execução

**Aviso**

Esta função foi
*REMOVIDA* na uopz 5.0.0 no PECL.

### Descrição

function **uopz\_function**([string](language.types.string.md) `$function`, [Closure](class.closure.md) `$handler`, [int](language.types.integer.md) `$modifiers` = ?): [void](language.types.void.md)

function **uopz\_function**(  
    [string](language.types.string.md) `$class`,  
    [string](language.types.string.md) `$function`,  
    [Closure](class.closure.md) `$handler`,  
    [int](language.types.integer.md) `$modifiers` = ?  
): [void](language.types.void.md)

Cria uma função em tempo de execução.

### Parâmetros

`class`
:   O nome da classe que irá receber a nova função.

`function`
:   O nome da função

`handler`
:   O Closure para a função.

`modifiers`
:   Os modificadores para a função, por padrão copiados ou ZEND\_ACC\_PUBLIC.

### Valor Retornado

### Examples

**Exemplo #1 Exemplo de **uopz\_function()****

```
<?php
uopz_function("my_strlen", function($arg) {
    return strlen($arg);
});
echo my_strlen("Hello World");
?>
```

O exemplo acima produzirá:

```
11
```

**Exemplo #2 Exemplo de **uopz\_function()** com uma classe**

```
<?php
class My {}

uopz_function(My::class, "strlen", function($arg) {
    return strlen($arg);
}, ZEND_ACC_STATIC);

echo My::strlen("Hello World");
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
