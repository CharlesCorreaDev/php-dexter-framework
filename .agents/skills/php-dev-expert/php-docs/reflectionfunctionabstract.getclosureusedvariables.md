# Retorna um array das variáveis ​​usadas no Closure

> **Fonte / Source:** https://www.php.net/manual/pt_BR/reflectionfunctionabstract.getclosureusedvariables.php

---

# ReflectionFunctionAbstract::getClosureUsedVariables

(PHP 8 >= 8.1.0)

ReflectionFunctionAbstract::getClosureUsedVariables — Retorna um array das variáveis ​​usadas no Closure

### Descrição

public function **ReflectionFunctionAbstract::getClosureUsedVariables**(): [array](language.types.array.md)

Retorna um [array](language.types.array.md) das variáveis ​​usadas no [Closure](class.closure.md).

### Parâmetros

Esta função não possui parâmetros.

### Valor Retornado

Retorna um [array](language.types.array.md) das variáveis ​​usadas no [Closure](class.closure.md).

### Examples

**Exemplo #1 Exemplo de **ReflectionFunctionAbstract::getClosureUsedVariables()****

```
<?php

$one = 1;
$two = 2;

$function = function() use ($one, $two) {
    static $three = 3;
};

$reflector = new ReflectionFunction($function);

var_dump($reflector->getClosureUsedVariables());
?>
```

O exemplo acima produzirá
algo semelhante a:

```
array(2) {
  ["one"]=>
  int(1)
  ["two"]=>
  int(2)
}
```

### Veja também

- [ReflectionFunctionAbstract::getClosureScopeClass()](reflectionfunctionabstract.getclosurescopeclass.md) - Retorna a classe correspondente ao escopo dentro de uma closure
- [ReflectionFunctionAbstract::getClosureThis()](reflectionfunctionabstract.getclosurethis.md) - Retorna o objeto que corresponde a $this dentro de uma closure

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
