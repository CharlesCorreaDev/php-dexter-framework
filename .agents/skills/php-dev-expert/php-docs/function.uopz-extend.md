# Estende uma classe em tempo de execução

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.uopz-extend.php

---

# uopz\_extend

(PECL uopz 1, PECL uopz 2, PECL uopz 5, PECL uopz 6, PECL uopz 7 < 7.1.0)

uopz\_extend — Estende uma classe em tempo de execução

### Descrição

function **uopz\_extend**([string](language.types.string.md) `$class`, [string](language.types.string.md) `$parent`): [bool](language.types.boolean.md)

Faz a classe em `class` estender a classe pai em `parent`.

### Parâmetros

`class`
:   O nome da classe a ser estendida.

`parent`
:   O nome da classe a herdar.

### Valor Retornado

Retorna **`true`** em caso de sucesso ou **`false`** em caso de falha.

### Erros/Exceções

A partir do PHP 7.4.0, **uopz\_extend()** lança uma [RuntimeException](class.runtimeexception.md),
se [OPcache](book.opcache.md) estiver habilitado,
e a entrada de classe de `class`
ou `parent` (se for uma trait) for imutável.

### Examples

**Exemplo #1 Exemplo de **uopz\_extend()****

```
<?php
class A {}
class B {}

uopz_extend(A::class, B::class);

var_dump(class_parents(A::class));
?>
```

O exemplo acima produzirá:

```
array(1) {
  ["B"]=>
  string(1) "B"
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
