# Obtém a classe declarada para o método refletido

> **Fonte / Source:** https://www.php.net/manual/pt_BR/reflectionmethod.getdeclaringclass.php

---

# ReflectionMethod::getDeclaringClass

(PHP 5, PHP 7, PHP 8)

ReflectionMethod::getDeclaringClass — Obtém a classe declarada para o método refletido

### Descrição

public function **ReflectionMethod::getDeclaringClass**(): [ReflectionClass](class.reflectionclass.md)

Obtém a classe declarada para o método refletido.

### Parâmetros

Esta função não possui parâmetros.

### Valor Retornado

Um objeto [ReflectionClass](class.reflectionclass.md) da classe que o
o método refletido faz parte.

### Examples

**Exemplo #1 Exemplo de **ReflectionMethod::getDeclaringClass()****

```
<?php
class HelloWorld {

    protected function sayHelloTo($name) {
        return 'Hello ' . $name;
    }

}

$reflectionMethod = new ReflectionMethod(new HelloWorld(), 'sayHelloTo');
var_dump($reflectionMethod->getDeclaringClass());
?>
```

O exemplo acima produzirá:

```
object(ReflectionClass)#2 (1) {
  ["name"]=>
  string(10) "HelloWorld"
}
```

### Veja também

- [ReflectionMethod::isAbstract()](reflectionmethod.isabstract.md) - Verifica se o método é abstrato

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
