# Constrói

> **Fonte / Source:** https://www.php.net/manual/pt_BR/reflectionparameter.construct.php

---

# ReflectionParameter::\_\_construct

(PHP 5, PHP 7, PHP 8)

ReflectionParameter::\_\_construct — Constrói

### Descrição

public function **ReflectionParameter::\_\_construct**([string](language.types.string.md)|[array](language.types.array.md)|[object](language.types.object.md) `$function`, [int](language.types.integer.md)|[string](language.types.string.md) `$param`)

Constrói uma instância [ReflectionParameter](class.reflectionparameter.md).

### Parâmetros

`function`
:   A função da qual refletir os parâmetros.

`param`
:   Ou um [int](language.types.integer.md) especificando a posição do parâmetro (começando com
    zero), ou o nome do parâmetro como [string](language.types.string.md).

### Examples

**Exemplo #1 Usando a classe [ReflectionParameter](class.reflectionparameter.md)**

```
<?php
function foo($a, $b, $c) { }
function bar(Exception $a, &$b, $c) { }
function baz(ReflectionFunction $a, $b = 1, $c = null) { }
function abc() { }

$reflect = new ReflectionFunction('foo');

echo $reflect;

foreach ($reflect->getParameters() as $i => $param) {
    printf(
        "-- Parâmetro #%d: %s {\n".
        "   Classe: %s\n".
        "   Permite NULL: %s\n".
        "   Passado por referência: %s\n".
        "   É opcional?: %s\n".
        "}\n",
        $i, // $param->getPosition() pode ser usado
        $param->getName(),
        var_export($param->getClass(), 1),
        var_export($param->allowsNull(), 1),
        var_export($param->isPassedByReference(), 1),
        $param->isOptional() ? 'yes' : 'no'
    );
}
?>
```

O exemplo acima produzirá
algo semelhante a:

```
Function [ <user> function foo ] {
  @@ /Users/philip/cvs/phpdoc/a 2 - 2

  - Parameters [3] {
    Parameter #0 [ <required> $a ]
    Parameter #1 [ <required> $b ]
    Parameter #2 [ <required> $c ]
  }
}
-- Parâmetro #0: a {
   Classe: NULL
   Permite NULL: true
   Passado por referência: false
   É opcional?: no
}
-- Parâmetro #1: b {
   Classe: NULL
   Permite NULL: true
   Passado por referência: false
   É opcional?: no
}
-- Parâmetro #2: c {
   Classe: NULL
   Permite NULL: true
   Passado por referência: false
   É opcional?: no
}
```

### Veja também

- [ReflectionFunctionAbstract::getParameters()](reflectionfunctionabstract.getparameters.md) - Obtém parâmetros
- [ReflectionFunction::\_\_construct()](reflectionfunction.construct.md) - Constrói um objeto ReflectionFunction
- [ReflectionMethod::\_\_construct()](reflectionmethod.construct.md) - Constrói um ReflectionMethod
- [Construtores](language.oop5.decon.md#language.oop5.decon.constructor)

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
