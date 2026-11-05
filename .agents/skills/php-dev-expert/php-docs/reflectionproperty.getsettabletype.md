# Retorna o tipo de parâmetro de um gancho set

> **Fonte / Source:** https://www.php.net/manual/pt_BR/reflectionproperty.getsettabletype.php

---

# ReflectionProperty::getSettableType

(PHP 8 >= 8.4.0)

ReflectionProperty::getSettableType — Retorna o tipo de parâmetro de um gancho set

### Descrição

public function **ReflectionProperty::getSettableType**(): [?](language.types.null.md)[ReflectionType](class.reflectiontype.md)

Retorna o tipo de parâmetro de um gancho `set`.
Se nenhum gancho `set` for definido, ele se comportará de forma idêntica
a [ReflectionProperty::getType()](reflectionproperty.gettype.md).

### Parâmetros

Esta função não possui parâmetros.

### Valor Retornado

- Este método retorna uma instância de [ReflectionType](class.reflectiontype.md) que corresponde
  ao tipo configurável da propriedade.
- Se houver um gancho `set` que defina um tipo explícito, ele será retornado.
- Se o gancho não especificar um tipo, ou se ele não existir, o tipo de propriedade será
  retornado, de forma idêntica a [ReflectionProperty::getType()](reflectionproperty.gettype.md). Este valor pode ser **`null`**
  se a propriedade não for tipada.
- Se a propriedade for virtual e não tiver um gancho `set`, uma instância de [ReflectionType](class.reflectiontype.md)
  para `never` será retornada.

### Examples

**Exemplo #1 Exemplo de **ReflectionProperty::getSettableType()****

```
<?php

class Example
{
    public string $basic {
        set => strtolower($value);
    }

    public string $wider {
        set(string|Stringable $value) => (string) $value;
    }

    public string $virtual {
        get => 'Não altere isso';
    }

    public $untyped = 'tolo';
}

$rClass = new \ReflectionClass(Example::class);

var_dump($rClass->getProperty('basic')->getSettableType());
var_dump($rClass->getProperty('wider')->getSettableType());
var_dump($rClass->getProperty('virtual')->getSettableType());
var_dump($rClass->getProperty('untyped')->getSettableType());

?>
```

O exemplo acima produzirá:

```
object(ReflectionNamedType)#3 (0) {
}
object(ReflectionUnionType)#2 (0) {
}
object(ReflectionNamedType)#3 (0) {
}
NULL
```

### Veja também

- [ReflectionProperty::getType()](reflectionproperty.gettype.md) - Obtém o tipo de uma propriedade

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
