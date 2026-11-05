# Obtém o tipo de uma propriedade

> **Fonte / Source:** https://www.php.net/manual/pt_BR/reflectionproperty.gettype.php

---

# ReflectionProperty::getType

(PHP 7 >= 7.4.0, PHP 8)

ReflectionProperty::getType — Obtém o tipo de uma propriedade

### Descrição

public function **ReflectionProperty::getType**(): [?](language.types.null.md)[ReflectionType](class.reflectiontype.md)

Obtém o tipo associado de uma propriedade.

### Parâmetros

Esta função não possui parâmetros.

### Valor Retornado

Retorna um [ReflectionType](class.reflectiontype.md) se a propriedade tiver um tipo,
e **`null`** caso contrário.

### Examples

**Exemplo #1 Exemplo de **ReflectionProperty::getType()****

```
<?php
class User
{
    public string $name;
}

$rp = new ReflectionProperty('User', 'name');
echo $rp->getType()->getName();
?>
```

O exemplo acima produzirá:

```
string
```

### Veja também

- [ReflectionProperty::hasType()](reflectionproperty.hastype.md) - Verifica se a propriedade tem um tipo
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
