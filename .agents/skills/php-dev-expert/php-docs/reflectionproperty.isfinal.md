# Determina se esta propriedade é final ou não

> **Fonte / Source:** https://www.php.net/manual/pt_BR/reflectionproperty.isfinal.php

---

# ReflectionProperty::isFinal

(PHP 8 >= 8.4.0)

ReflectionProperty::isFinal — Determina se esta propriedade é final ou não

### Descrição

public function **ReflectionProperty::isFinal**(): [bool](language.types.boolean.md)

**Aviso**

Esta função não
está documentada; apenas a lista de argumentos está disponível.

Retorna se a propriedade é
[`final`](language.oop5.final.md).
Se a propriedade estiver marcada como `private(set)`,
então ela também será implicitamente `final`.

### Parâmetros

Esta função não possui parâmetros.

### Valor Retornado

Retorna **`true`** se a propriedade estiver explicitamente marcada como `final`,
ou se estiver implicitamente `final` por ser `private(set)`.
Retorna **`false`** caso contrário.

### Examples

**Exemplo #1 Exemplo de **ReflectionProperty::isFinal()****

```
<?php
class Example
{
    public string $name;

    final protected int $age;

    public private(set) string $job;
}

$rClass = new \ReflectionClass(Example::class);

var_dump($rClass->getProperty('name')->isFinal());
var_dump($rClass->getProperty('age')->isFinal());
var_dump($rClass->getProperty('job')->isFinal());
?>
```

O exemplo acima produzirá:

```
bool(false)
bool(true)
bool(true)
```

### Veja também

- [Elementos de classe do tipo `final`](language.oop5.final.md)
- [Visibilidade assimétrica da propriedade](language.oop5.visibility.md#language.oop5.visibility-members-aviz)

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
