# Obtém a classe declarada

> **Fonte / Source:** https://www.php.net/manual/pt_BR/reflectionparameter.getdeclaringclass.php

---

# ReflectionParameter::getDeclaringClass

(PHP 5 >= 5.1.3, PHP 7, PHP 8)

ReflectionParameter::getDeclaringClass — Obtém a classe declarada

### Descrição

public function **ReflectionParameter::getDeclaringClass**(): [?](language.types.null.md)[ReflectionClass](class.reflectionclass.md)

Obtém a classe declarada.

### Parâmetros

Esta função não possui parâmetros.

### Valor Retornado

Um objeto [ReflectionClass](class.reflectionclass.md) ou **`null`** se chamado na função.

### Examples

**Exemplo #1 Obtendo a classe que declarou o método**

```
<?php
class Foo
{
    public function bar(\DateTime $datetime)
    {
    }
}

class Baz extends Foo
{
}

$param = new \ReflectionParameter(['Baz', 'bar'], 0);

var_dump($param->getDeclaringClass());
```

O exemplo acima produzirá:

```
object(ReflectionClass)#2 (1) {
  ["name"]=>
  string(3) "Foo"
}
```

### Veja também

- [ReflectionParameter::getClass()](reflectionparameter.getclass.md) - Obtém um objeto ReflectionClass para o parâmetro que está sendo refletido ou null

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
