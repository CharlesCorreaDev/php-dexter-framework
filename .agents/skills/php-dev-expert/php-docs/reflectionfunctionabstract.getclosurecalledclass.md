# Retorna a classe correspondente a static:: dentro de uma closure

> **Fonte / Source:** https://www.php.net/manual/pt_BR/reflectionfunctionabstract.getclosurecalledclass.php

---

# ReflectionFunctionAbstract::getClosureCalledClass

(PHP 8 >= 8.0.23, PHP 8 >= 8.1.11)

ReflectionFunctionAbstract::getClosureCalledClass — Retorna a classe correspondente a static:: dentro de uma closure

### Descrição

public function **ReflectionFunctionAbstract::getClosureCalledClass**(): [?](language.types.null.md)[ReflectionClass](class.reflectionclass.md)

Retorna a classe como uma [ReflectionClass](class.reflectionclass.md) que
corresponde a resolver o nome de classe associado a `static::` dentro da
[Closure](class.closure.md).

### Parâmetros

Esta função não possui parâmetros.

### Valor Retornado

Retorna uma [ReflectionClass](class.reflectionclass.md) que corresponde à classe
representada por `static::` na [Closure](class.closure.md).
Se a função não é uma closure ou se ela tiver escopo global, **`null`**
é retornado.

### Examples

**Exemplo #1
Exemplo que mostra a diferença entre
**ReflectionFunctionAbstract::getClosureCalledClass()**,
[ReflectionFunctionAbstract::getClosureScopeClass()](reflectionfunctionabstract.getclosurescopeclass.md),
e [ReflectionFunctionAbstract::getClosureThis()](reflectionfunctionabstract.getclosurethis.md)
com uma closure no contexto de objeto**

```
<?php

class A
{
    public function getClosure()
    {
        var_dump(self::class, static::class);

        return function() {};
    }
}

class B extends A {}

$b = new B();
$c = $b->getClosure();
$r = new ReflectionFunction($c);

var_dump($r->getClosureThis()); // $this === $b, já que uma closure não estática toma o contexto de objeto
var_dump($r->getClosureScopeClass()); // Corresponde a resolver self::class dentro de uma closure
var_dump($r->getClosureCalledClass()); // Corresponde a resolver static::class dentro de uma closure

?>
```

O exemplo acima produzirá:

```
string(1) "A"
string(1) "B"
object(B)#1 (0) {
}
object(ReflectionClass)#4 (1) {
  ["name"]=>
  string(1) "A"
}
object(ReflectionClass)#4 (1) {
  ["name"]=>
  string(1) "B"
}
```

**Exemplo #2
Exemplo que mostra a diferença entre
**ReflectionFunctionAbstract::getClosureCalledClass()**,
[ReflectionFunctionAbstract::getClosureScopeClass()](reflectionfunctionabstract.getclosurescopeclass.md),
e [ReflectionFunctionAbstract::getClosureThis()](reflectionfunctionabstract.getclosurethis.md)
com uma closure estática sem um contexto de objeto**

```
<?php

class A
{
    public function getClosure()
    {
        var_dump(self::class, static::class);

        return static function() {};
    }
}

class B extends A {}

$b = new B();
$c = $b->getClosure();
$r = new ReflectionFunction($c);

var_dump($r->getClosureThis()); // NULL, já que a pseudo-variável $this não está disponível no contexto estático
var_dump($r->getClosureScopeClass()); // Corresponde a resolver self::class dentro de uma closure
var_dump($r->getClosureCalledClass()); // Corresponde a resolver static::class dentro de uma closure

?>
```

O exemplo acima produzirá:

```
string(1) "A"
string(1) "B"
NULL
object(ReflectionClass)#4 (1) {
  ["name"]=>
  string(1) "A"
}
object(ReflectionClass)#4 (1) {
  ["name"]=>
  string(1) "B"
}
```

### Veja também

- [ReflectionFunctionAbstract::getClosureScopeClass()](reflectionfunctionabstract.getclosurescopeclass.md) - Retorna a classe correspondente ao escopo dentro de uma closure
- [ReflectionFunctionAbstract::getClosureThis()](reflectionfunctionabstract.getclosurethis.md) - Retorna o objeto que corresponde a $this dentro de uma closure
- [Vinculações Estáticas Tardias](language.oop5.late-static-bindings.md)

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
