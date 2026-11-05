# Implementa uma interface em tempo de execução

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.uopz-implement.php

---

# uopz\_implement

(PECL uopz 1, PECL uopz 2, PECL uopz 5, PECL uopz 6, PECL uopz 7 < 7.1.0)

uopz\_implement — Implementa uma interface em tempo de execução

### Descrição

function **uopz\_implement**([string](language.types.string.md) `$class`, [string](language.types.string.md) `$interface`): [bool](language.types.boolean.md)

Faz com que `class` implemente `interface`.

### Parâmetros

`class`

`interface`

### Valor Retornado

Retorna **`true`** em caso de sucesso ou **`false`** em caso de falha.

### Erros/Exceções

A partir do PHP 7.4.0, **uopz\_implement()** lança uma [RuntimeException](class.runtimeexception.md),
se [OPcache](book.opcache.md) estiver habilitado,
e a entrada de classe de `class` for imutável.

### Examples

**Exemplo #1 Exemplo de **uopz\_implement()****

```
<?php
interface myInterface {}

class myClass {}

uopz_implement(myClass::class, myInterface::class);

var_dump(class_implements(myClass::class));
?>
```

O exemplo acima produzirá:

```
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
