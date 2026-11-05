# Obtém propriedades

> **Fonte / Source:** https://www.php.net/manual/pt_BR/reflectionclass.getproperties.php

---

# ReflectionClass::getProperties

(PHP 5, PHP 7, PHP 8)

ReflectionClass::getProperties — Obtém propriedades

### Descrição

public function **ReflectionClass::getProperties**([?](language.types.null.md)[int](language.types.integer.md) `$filter` = **`null`**): [array](language.types.array.md)

Recupera propriedades refletidas.

### Parâmetros

`filter`
:   O filtro opcional, para filtrar os tipos de propriedade desejados. Está configurado usando
    as [constantes ReflectionProperty](class.reflectionproperty.md#reflectionproperty.constants.modifiers),
    e o padrão é todos os tipos de propriedade.

### Valor Retornado

Um array de objetos [ReflectionProperty](class.reflectionproperty.md).

### Registro de Alterações

| Versão | Descrição |
| --- | --- |
| 7.2.0 | `filter` agora é anulável. |

### Examples

**Exemplo #1 Exemplo de filtragem com **ReflectionClass::getProperties()****

Este exemplo demonstra o uso do parâmetro opcional `filter`
onde essencialmente ignora propriedades privadas.

```
<?php
class Foo {
    public    $foo  = 1;
    protected $bar  = 2;
    private   $baz  = 3;
}

$foo = new Foo();

$reflect = new ReflectionClass($foo);
$props   = $reflect->getProperties(ReflectionProperty::IS_PUBLIC | ReflectionProperty::IS_PROTECTED);

foreach ($props as $prop) {
    print $prop->getName() . "\n";
}

var_dump($props);

?>
```

O exemplo acima produzirá
algo semelhante a:

```
foo
bar
array(2) {
  [0]=>
  object(ReflectionProperty)#3 (2) {
    ["name"]=>
    string(3) "foo"
    ["class"]=>
    string(3) "Foo"
  }
  [1]=>
  object(ReflectionProperty)#4 (2) {
    ["name"]=>
    string(3) "bar"
    ["class"]=>
    string(3) "Foo"
  }
}
```

### Veja também

- [ReflectionClass::getProperty()](reflectionclass.getproperty.md) - Obtém um ReflectionProperty para a propriedade de uma classe
- [ReflectionProperty](class.reflectionproperty.md)
- [Constantes modificadoras ReflectionProperty](class.reflectionproperty.md#reflectionproperty.constants.modifiers)

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
