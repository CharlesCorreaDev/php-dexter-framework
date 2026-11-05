# Obtém o protótipo do método (se houver)

> **Fonte / Source:** https://www.php.net/manual/pt_BR/reflectionmethod.getprototype.php

---

# ReflectionMethod::getPrototype

(PHP 5 >= 5.1.2, PHP 7, PHP 8)

ReflectionMethod::getPrototype — Obtém o protótipo do método (se houver)

### Descrição

public function **ReflectionMethod::getPrototype**(): [ReflectionMethod](class.reflectionmethod.md)

Retorna o protótipo dos métodos.

### Parâmetros

Esta função não possui parâmetros.

### Valor Retornado

Uma instância [ReflectionMethod](class.reflectionmethod.md) do protótipo do método.

### Erros/Exceções

Uma exceção [ReflectionException](class.reflectionexception.md) será lançada se
o método não possui protótipo.

### Examples

**Exemplo #1 Exemplo de **ReflectionMethod::getPrototype()****

```
<?php
class Hello {

    public function sayHelloTo($name) {
        return 'Hello ' . $name;
    }

}
class HelloWorld extends Hello {

    public function sayHelloTo($name) {
        return 'Hello world: ' . $name;
    }

}

$reflectionMethod = new ReflectionMethod('HelloWorld', 'sayHelloTo');
var_dump($reflectionMethod->getPrototype());
?>
```

O exemplo acima produzirá:

```
object(ReflectionMethod)#2 (2) {
  ["name"]=>
  string(10) "sayHelloTo"
  ["class"]=>
  string(5) "Hello"
}
```

### Veja também

- [ReflectionMethod::getModifiers()](reflectionmethod.getmodifiers.md) - Obtém os modificadores do método
- [ReflectionMethod::hasPrototype()](reflectionmethod.hasprototype.md) - Retorna se um método tem um protótipo

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
