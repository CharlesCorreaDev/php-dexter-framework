# Verifica se a propriedade tem um tipo

> **Fonte / Source:** https://www.php.net/manual/pt_BR/reflectionproperty.hastype.php

---

# ReflectionProperty::hasType

(PHP 7 >= 7.4.0, PHP 8)

ReflectionProperty::hasType — Verifica se a propriedade tem um tipo

### Descrição

public function **ReflectionProperty::hasType**(): [bool](language.types.boolean.md)

Verifica se a propriedade possui um tipo associado a ela.

### Parâmetros

Esta função não possui parâmetros.

### Valor Retornado

**`true`** se um tipo for especificado, **`false`** caso contrário.

### Examples

**Exemplo #1 Exemplo de **ReflectionProperty::hasType()****

```
<?php
class User
{
    public string $name;
}

$rp = new ReflectionProperty('User', 'name');
var_dump($rp->hasType());
?>
```

O exemplo acima produzirá:

```
bool(true)
```

### Veja também

- [ReflectionProperty::getType()](reflectionproperty.gettype.md) - Obtém o tipo de uma propriedade
- [ReflectionProperty::isInitialized()](reflectionproperty.isinitialized.md) - Verifica se uma propriedade foi inicializada

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
