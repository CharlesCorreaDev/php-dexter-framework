# Compõe uma classe

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.uopz-compose.php

---

# uopz\_compose

(PECL uopz 1, PECL uopz 2)

uopz\_compose — Compõe uma classe

**Aviso**

Esta função foi
*REMOVIDA* na uopz 5.0.0 no PECL.

### Descrição

function **uopz\_compose**(  
    [string](language.types.string.md) `$name`,  
    [array](language.types.array.md) `$classes`,  
    [array](language.types.array.md) `$methods` = ?,  
    [array](language.types.array.md) `$properties` = ?,  
    [int](language.types.integer.md) `$flags` = ?  
): [void](language.types.void.md)

Cria uma nova classe com o nome fornecido que implementa, estende ou usa todas as classes fornecidas.

### Parâmetros

`name`
:   Um nome de classe válido.

`classes`
:   Um array de nomes de classes, interfaces e traits.

`methods`
:   Um array associativa de métodos, os valores são Closures ou [modificadores => Closure].

`properties`
:   Um array associativa de propriedades, chaves são nomes, valores são modificadores.

`flags`
:   Tipo da entrada, por padrão ZEND\_ACC\_CLASS.

### Valor Retornado

### Examples

**Exemplo #1 Exemplo de **uopz\_compose()****

```
<?php
class myClass {}
trait myTrait {}
interface myInterface {}

uopz_compose(
    Composed::class, [
        myClass::class,
        myTrait::class,
        myInterface::class
    ], [
    "__construct" => function() {
        /* ... */
    }
]);

var_dump(
 class_uses(Composed::class),
 class_parents(Composed::class),
 class_implements(Composed::class));
?>
```

O exemplo acima produzirá:

```
array(1) {
  ["myTrait"]=>
  string(7) "myTrait"
}
array(1) {
  ["myClass"]=>
  string(7) "myClass"
}
array(1) {
  ["myInterface"]=>
  string(11) "myInterface"
}
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
