# Retorna se um método tem um protótipo

> **Fonte / Source:** https://www.php.net/manual/pt_BR/reflectionmethod.hasprototype.php

---

# ReflectionMethod::hasPrototype

(PHP 8 >= 8.2.0)

ReflectionMethod::hasPrototype — Retorna se um método tem um protótipo

### Descrição

public function **ReflectionMethod::hasPrototype**(): [bool](language.types.boolean.md)

Retorna se um método tem um protótipo.

### Parâmetros

Esta função não possui parâmetros.

### Valor Retornado

Retorna **`true`** se o método tiver um protótipo, caso contrário **`false`**.

### Examples

**Exemplo #1 Exemplo de **ReflectionMethod::hasPrototype()****

```
<?php

class Hello
{
    public function sayHelloTo($name)
    {
        return 'Hello '.$name;
    }
}

class HelloWorld extends Hello
{
    public function sayHelloTo($name)
    {
        return 'Hello world: '.$name;
    }
}
$reflectionMethod = new ReflectionMethod('HelloWorld', 'sayHelloTo');
var_dump($reflectionMethod->hasPrototype());
?>
```

O exemplo acima produzirá:

```
bool(true)
```

### Veja também

- [ReflectionMethod::getPrototype()](reflectionmethod.getprototype.md) - Obtém o protótipo do método (se houver)

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
