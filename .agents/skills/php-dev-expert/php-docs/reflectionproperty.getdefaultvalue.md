# Retorna o valor padrão declarado para uma propriedade

> **Fonte / Source:** https://www.php.net/manual/pt_BR/reflectionproperty.getdefaultvalue.php

---

# ReflectionProperty::getDefaultValue

(PHP 8)

ReflectionProperty::getDefaultValue — Retorna o valor padrão declarado para uma propriedade

### Descrição

public function **ReflectionProperty::getDefaultValue**(): [mixed](language.types.mixed.md)

Obtém o valor padrão declarado implícito ou explicitamente para uma propriedade.

### Parâmetros

Esta função não possui parâmetros.

### Valor Retornado

O valor padrão se a propriedade tiver um (incluindo **`null`**).
Se não houver valor padrão, **`null`** é retornado. Não é possível diferenciar
entre um valor padrão **`null`** e uma propriedade tipada não inicializada.
Use [ReflectionProperty::hasDefaultValue()](reflectionproperty.hasdefaultvalue.md) para detectar a diferença.

### Registro de Alterações

| Versão | Descrição |
| --- | --- |
| 8.5.0 | Chamar **ReflectionProperty::getDefaultValue()** para propriedades sem valor padrão foi descontinuado. |

### Examples

**Exemplo #1 Exemplo de **ReflectionProperty::getDefaultValue()****

```
<?php
class Foo {
    public $bar = 1;
    public ?int $baz;
    public int $boing = 0;
    public function __construct(public string $bak = "default") { }
}

$ro = new ReflectionClass(Foo::class);
var_dump($ro->getProperty('bar')->getDefaultValue());
var_dump($ro->getProperty('baz')->getDefaultValue());
var_dump($ro->getProperty('boing')->getDefaultValue());
var_dump($ro->getProperty('bak')->getDefaultValue());
?>
```

O exemplo acima produzirá:

```
int(1)
NULL
int(0)
NULL
```

### Veja também

- [ReflectionProperty::hasDefaultValue()](reflectionproperty.hasdefaultvalue.md) - Verifica se a propriedade tem um valor padrão declarado

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
