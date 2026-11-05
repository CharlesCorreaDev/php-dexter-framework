# O atributo AllowDynamicProperties

> **Fonte / Source:** https://www.php.net/manual/pt_BR/class.allowdynamicproperties.php

---

# O atributo AllowDynamicProperties

(PHP 8 >= 8.2.0)

## Introdução

Este atributo é usado para marcar classes que permitem
[propriedades dinâmicas](language.oop5.properties.md#language.oop5.properties.dynamic-properties).

> **Nota**:
>
> Embora os atributos em si não sejam herdados, o efeito do atributo
> `AllowDynamicProperties` *é*
> herdado. Classes filhas de uma classe marcada com este atributo também
> permitirão propriedades dinâmicas, mesmo se elas não declararem explicitamente
> o atributo.

## Resumo da classe

#[[\Attribute](class.attribute.md)]  
final
class ****AllowDynamicProperties****
{

/\* Métodos \*/

public function [\_\_construct](allowdynamicproperties.construct.md)()

}

## Examples

As propriedades dinâmicas foram descontinuadas a partir do PHP 8.2.0,
portanto, usá-las sem marcar a classe com este atributo emitirá
um aviso de descontinuação.

**Exemplo #1 AllowDynamicProperties com propriedade não existente**

```
<?php
class DefaultBehaviour { }

#[\AllowDynamicProperties]
class ClassAllowsDynamicProperties { }

$o1 = new DefaultBehaviour();
$o2 = new ClassAllowsDynamicProperties();

$o1->nonExistingProp = true;
$o2->nonExistingProp = true;
?>
```

Saída do exemplo acima no PHP 8.2:

```
Deprecated: Creation of dynamic property DefaultBehaviour::$nonExistingProp is deprecated in file on line 10
```

**Exemplo #2 AllowDynamicProperties com propriedade não existente em classe herdada**

```
<?php
class DefaultBehaviour { }

#[\AllowDynamicProperties]
class ClassAllowsDynamicProperties { }

class InheritedClassAllowsDynamicProperties extends ClassAllowsDynamicProperties { }

$o1 = new DefaultBehaviour();
$o2 = new InheritedClassAllowsDynamicProperties();

$o1->nonExistingProp = true;
$o2->nonExistingProp = true;
?>
```

Saída do exemplo acima no PHP 8.2:

```
Deprecated: Creation of dynamic property DefaultBehaviour::$nonExistingProp is deprecated in file on line 12
```

## Veja também

[Visão geral dos atributos](language.attributes.md)

## Índice

- [AllowDynamicProperties::\_\_construct](allowdynamicproperties.construct.md) — Constrói uma nova instância do atributo AllowDynamicProperties

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
