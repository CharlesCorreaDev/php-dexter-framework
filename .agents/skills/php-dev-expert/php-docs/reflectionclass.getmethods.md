# Obtém um array de métodos

> **Fonte / Source:** https://www.php.net/manual/pt_BR/reflectionclass.getmethods.php

---

# ReflectionClass::getMethods

(PHP 5, PHP 7, PHP 8)

ReflectionClass::getMethods — Obtém um array de métodos

### Descrição

public function **ReflectionClass::getMethods**([?](language.types.null.md)[int](language.types.integer.md) `$filter` = **`null`**): [array](language.types.array.md)

Obtém um array de métodos para a classe.

### Parâmetros

`filter`
:   Filtre os resultados para incluir apenas métodos com determinados atributos. Padrões
    sem filtragem.

    Qualquer disjunção bit a bit de **`ReflectionMethod::IS_STATIC`**,
    **`ReflectionMethod::IS_PUBLIC`**,
    **`ReflectionMethod::IS_PROTECTED`**,
    **`ReflectionMethod::IS_PRIVATE`**,
    **`ReflectionMethod::IS_ABSTRACT`**,
    **`ReflectionMethod::IS_FINAL`**,
    para que todos os métodos com *qualquer* dos dados
    atributos serão retornados.

    > **Nota**:
    >
    > Observe que outras operações bit a bit, por exemplo `~`
    > não funcionará como esperado. Em outras palavras, não é possível
    > recuperar todos os métodos não estáticos, por exemplo.

### Valor Retornado

Um [array](language.types.array.md) de objetos [ReflectionMethod](class.reflectionmethod.md)
refletindo cada método.

### Registro de Alterações

| Versão | Descrição |
| --- | --- |
| 7.2.0 | `filter` agora é anulável. |

### Examples

**Exemplo #1 Uso básico de **ReflectionClass::getMethods()****

```
<?php
class Apple {
    public function firstMethod() { }
    final protected function secondMethod() { }
    private static function thirdMethod() { }
}

$class = new ReflectionClass('Apple');
$methods = $class->getMethods();
var_dump($methods);
?>
```

O exemplo acima produzirá:

```
array(3) {
  [0]=>
  object(ReflectionMethod)#2 (2) {
    ["name"]=>
    string(11) "firstMethod"
    ["class"]=>
    string(5) "Apple"
  }
  [1]=>
  object(ReflectionMethod)#3 (2) {
    ["name"]=>
    string(12) "secondMethod"
    ["class"]=>
    string(5) "Apple"
  }
  [2]=>
  object(ReflectionMethod)#4 (2) {
    ["name"]=>
    string(11) "thirdMethod"
    ["class"]=>
    string(5) "Apple"
  }
}
```

**Exemplo #2 Filtrando resultados vindos de **ReflectionClass::getMethods()****

```
<?php
class Apple {
    public function firstMethod() { }
    final protected function secondMethod() { }
    private static function thirdMethod() { }
}

$class = new ReflectionClass('Apple');
$methods = $class->getMethods(ReflectionMethod::IS_STATIC | ReflectionMethod::IS_FINAL);
var_dump($methods);
?>
```

O exemplo acima produzirá:

```
array(2) {
  [0]=>
  object(ReflectionMethod)#2 (2) {
    ["name"]=>
    string(12) "secondMethod"
    ["class"]=>
    string(5) "Apple"
  }
  [1]=>
  object(ReflectionMethod)#3 (2) {
    ["name"]=>
    string(11) "thirdMethod"
    ["class"]=>
    string(5) "Apple"
  }
}
```

### Veja também

- [ReflectionClass::getMethod()](reflectionclass.getmethod.md) - Obtém um ReflectionMethod para um método de classe
- [get\_class\_methods()](function.get-class-methods.md) - Obtém o nome dos métodos da classe

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
