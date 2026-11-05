# Obtém constantes de classe

> **Fonte / Source:** https://www.php.net/manual/pt_BR/reflectionclass.getreflectionconstants.php

---

# ReflectionClass::getReflectionConstants

(PHP 7 >= 7.1.0, PHP 8)

ReflectionClass::getReflectionConstants — Obtém constantes de classe

### Descrição

public function **ReflectionClass::getReflectionConstants**([?](language.types.null.md)[int](language.types.integer.md) `$filter` = **`null`**): [array](language.types.array.md)

Recupera constantes refletidas.

### Parâmetros

`filter`
:   O filtro opcional, para filtrar as visibilidades constantes desejadas. Está configurado usando
    as [constantes ReflectionClassConstant](class.reflectionclassconstant.md#reflectionclassconstant.constants.modifiers),
    e o padrão é todas as visibilidades constantes.

### Valor Retornado

Um array de objetos [ReflectionClassConstant](class.reflectionclassconstant.md).

### Registro de Alterações

| Versão | Descrição |
| --- | --- |
| 8.0.0 | `filter` foi adicionado. |

### Examples

**Exemplo #1 Exemplo básico de **ReflectionClass::getReflectionConstants()****

```
<?php
class Foo {
    public    const FOO  = 1;
    protected const BAR  = 2;
    private   const BAZ  = 3;
}

$foo = new Foo();

$reflect = new ReflectionClass($foo);
$consts  = $reflect->getReflectionConstants();

foreach ($consts as $const) {
    print $const->getName() . "\n";
}

var_dump($consts);

?>
```

O exemplo acima produzirá
algo semelhante a:

```
FOO
BAR
BAZ
array(3) {
  [0]=>
  object(ReflectionClassConstant)#3 (2) {
    ["name"]=>
    string(3) "FOO"
    ["class"]=>
    string(3) "Foo"
  }
  [1]=>
  object(ReflectionClassConstant)#4 (2) {
    ["name"]=>
    string(3) "BAR"
    ["class"]=>
    string(3) "Foo"
  }
  [2]=>
  object(ReflectionClassConstant)#5 (2) {
    ["name"]=>
    string(3) "BAZ"
    ["class"]=>
    string(3) "Foo"
  }
}
```

### Veja também

- [ReflectionClass::getReflectionConstant()](reflectionclass.getreflectionconstant.md) - Obtém um ReflectionClassConstant para a constante de uma classe
- [ReflectionClassConstant](class.reflectionclassconstant.md)

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
