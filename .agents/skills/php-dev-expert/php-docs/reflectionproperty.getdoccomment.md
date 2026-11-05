# Obtém o comentário doc da propriedade

> **Fonte / Source:** https://www.php.net/manual/pt_BR/reflectionproperty.getdoccomment.php

---

# ReflectionProperty::getDocComment

(PHP 5 >= 5.1.0, PHP 7, PHP 8)

ReflectionProperty::getDocComment — Obtém o comentário doc da propriedade

### Descrição

public function **ReflectionProperty::getDocComment**(): [string](language.types.string.md)|[false](language.types.singleton.md)

Obtém o comentário doc de uma propriedade.

### Parâmetros

Esta função não possui parâmetros.

### Valor Retornado

O comentário doc se existir, caso contrário **`false`**.

### Examples

**Exemplo #1 Exemplo de **ReflectionProperty::getDocComment()****

```
<?php
class Str
{
    /**
     * @var int  Comprimento da string
     */
    public $length = 5;
}

$prop = new ReflectionProperty('Str', 'length');

var_dump($prop->getDocComment());

?>
```

O exemplo acima produzirá
algo semelhante a:

```
string(53) "/**
     * @var int  Comprimento da string
     */"
```

**Exemplo #2 Declarações de múltiplas propriedades**

Se múltiplas declarações de propriedades forem precedidas por um único comentário de documento,
o comentário do documento refere-se apenas à primeira propriedade.

```
<?php
class Foo
{
    /** @var string */
    public $a, $b;
}
$class = new \ReflectionClass('Foo');
foreach ($class->getProperties() as $property) {
    echo $property->getName() . ': ' . var_export($property->getDocComment(), true) . PHP_EOL;
}
?>
```

O exemplo acima produzirá:

```
a: '/** @var string */'
b: false
```

### Veja também

- [ReflectionProperty::getModifiers()](reflectionproperty.getmodifiers.md) - Obtém os modificadores de propriedade
- [ReflectionProperty::getName()](reflectionproperty.getname.md) - Obtém o nome da propriedade
- [ReflectionProperty::getValue()](reflectionproperty.getvalue.md) - Obtém o valor

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
