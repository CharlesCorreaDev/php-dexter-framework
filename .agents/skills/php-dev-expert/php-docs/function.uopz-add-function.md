# Adiciona função ou método inexistente

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.uopz-add-function.php

---

# uopz\_add\_function

(PECL uopz 5, PECL uopz 6, PECL uopz 7)

uopz\_add\_function — Adiciona função ou método inexistente

### Descrição

function **uopz\_add\_function**([string](language.types.string.md) `$function`, [Closure](class.closure.md) `$handler`, [int](language.types.integer.md) `&$flags` = ZEND\_ACC\_PUBLIC): [bool](language.types.boolean.md)

function **uopz\_add\_function**(  
    [string](language.types.string.md) `$class`,  
    [string](language.types.string.md) `$function`,  
    [Closure](class.closure.md) `$handler`,  
    [int](language.types.integer.md) `&$flags` = ZEND\_ACC\_PUBLIC,  
    [int](language.types.integer.md) `&$all` = **`true`**  
): [bool](language.types.boolean.md)

Adiciona uma função ou um método inexistente.

### Parâmetros

`class`
:   O nome da classe.

`function`
:   O nome da função ou do método.

`handler`
:   O [Closure](class.closure.md) que define a nova função ou método.

`flags`
:   Sinalizadores a serem definidos para a nova função ou método.

`all`
:   Informa se todas as classes que descendem de `class` também serão
    afetadas.

### Valor Retornado

Retorna **`true`** em caso de sucesso ou **`false`** em caso de falha.

### Erros/Exceções

**uopz\_add\_function()** lança uma [RuntimeException](class.runtimeexception.md)
se a função ou método a ser adicionado já existir.

### Examples

**Exemplo #1 Uso básico de **uopz\_add\_function()****

```
<?php
uopz_add_function('foo', function () {echo 'bar';});
foo();
?>
```

O exemplo acima produzirá:

```
bar
```

### Veja também

- [uopz\_del\_function()](function.uopz-del-function.md) - Exclui função ou método adicionado anteriormente
- [uopz\_set\_return()](function.uopz-set-return.md) - Fornece um valor de retorno para uma função existente

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
