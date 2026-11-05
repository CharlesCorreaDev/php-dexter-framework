# Determina se uma propriedade é virtual

> **Fonte / Source:** https://www.php.net/manual/pt_BR/reflectionproperty.isvirtual.php

---

# ReflectionProperty::isVirtual

(PHP 8 >= 8.4.0)

ReflectionProperty::isVirtual — Determina se uma propriedade é virtual

### Descrição

public function **ReflectionProperty::isVirtual**(): [bool](language.types.boolean.md)

Determina se uma propriedade é virtual.

### Parâmetros

Esta função não possui parâmetros.

### Valor Retornado

Retorna **`true`** se a propriedade for virtual, **`false`** caso contrário.

### Examples

**Exemplo #1 Exemplo de **ReflectionProperty::isVirtual()****

```
<?php
class Example
{
    // Nenhum dos ganchos faz referência à propriedade,
    // então esta é virtual.
    public string $name { get => "Nome aqui"; }

    // Este gancho faz referência à propriedade pelo nome,
    // portanto, ela não é virtual.
    public int $age {
        set {
            if ($value <= 0) {
               throw new \InvalidArgumentException();
            }
            $this->age = $value;
        }
    }

    // Propriedades não-ganchadas são sempre não-virtuais.
    public string $job;
}

$rClass = new \ReflectionClass(Example::class);

var_dump($rClass->getProperty('name')->isVirtual());
var_dump($rClass->getProperty('age')->isVirtual());
var_dump($rClass->getProperty('job')->isVirtual());
?>
```

O exemplo acima produzirá:

```
bool(true)
bool(false)
bool(false)
```

### Veja também

- [Propriedades virtuais](language.oop5.property-hooks.md#language.oop5.property-hooks.virtual)

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
