# Cria um novo ReflectionMethod

> **Fonte / Source:** https://www.php.net/manual/pt_BR/reflectionmethod.createfrommethodname.php

---

# ReflectionMethod::createFromMethodName

(PHP 8 >= 8.3.0)

ReflectionMethod::createFromMethodName — Cria um novo ReflectionMethod

### Descrição

public static function **ReflectionMethod::createFromMethodName**([string](language.types.string.md) `$method`): static

Cria um novo [ReflectionMethod](class.reflectionmethod.md).

### Parâmetros

`method`
:   Nome da classe e nome do método delimitados por `::`.

### Valor Retornado

Retorna um novo [ReflectionMethod](class.reflectionmethod.md) em caso de sucesso.

### Erros/Exceções

Um [ReflectionException](class.reflectionexception.md) será lançado se o método fornecido não existir.

### Examples

**Exemplo #1 Exemplo de **ReflectionMethod::createFromMethodName()****

```
<?php

class Foo {
    public function bar() {

    }
}

$methodInfo = ReflectionMethod::createFromMethodName("Foo::bar");
var_dump($methodInfo);
?>
```

O exemplo acima produzirá:

```
object(ReflectionMethod)#1 (2) {
  ["name"]=>
  string(3) "bar"
  ["class"]=>
  string(3) "Foo"
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
