# Retorna a representação em string do objeto do método Reflection

> **Fonte / Source:** https://www.php.net/manual/pt_BR/reflectionmethod.tostring.php

---

# ReflectionMethod::\_\_toString

(PHP 5, PHP 7, PHP 8)

ReflectionMethod::\_\_toString — Retorna a representação em string do objeto do método Reflection

### Descrição

public function **ReflectionMethod::\_\_toString**(): [string](language.types.string.md)

Retorna a representação em string do objeto do método Reflection.

### Parâmetros

Esta função não possui parâmetros.

### Valor Retornado

Uma representação em string desta instância de [ReflectionMethod](class.reflectionmethod.md).

### Examples

**Exemplo #1 Exemplo de **ReflectionMethod::\_\_toString()****

```
<?php
class HelloWorld {

    public function sayHelloTo($name) {
        return 'Hello ' . $name;
    }

}

$reflectionMethod = new ReflectionMethod(new HelloWorld(), 'sayHelloTo');
echo $reflectionMethod;
?>
```

O exemplo acima produzirá:

```
Method [ <user> public method sayHelloTo ] {
  @@ /var/www/examples/reflection.php 16 - 18

  - Parameters [1] {
    Parameter #0 [ <required> $name ]
  }
}
```

### Veja também

- [ReflectionMethod::export()](reflectionmethod.export.md) - Exporta um método de reflexão
- [\_\_toString()](language.oop5.magic.md#object.tostring)

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
