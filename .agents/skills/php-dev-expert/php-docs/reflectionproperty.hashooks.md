# Retorna se a propriedade tem algum gancho definido

> **Fonte / Source:** https://www.php.net/manual/pt_BR/reflectionproperty.hashooks.php

---

# ReflectionProperty::hasHooks

(PHP 8 >= 8.4.0)

ReflectionProperty::hasHooks — Retorna se a propriedade tem algum gancho definido

### Descrição

public function **ReflectionProperty::hasHooks**(): [bool](language.types.boolean.md)

**Aviso**

Esta função não
está documentada; apenas a lista de argumentos está disponível.

Retorna se a propriedade tem algum gancho definido.

### Parâmetros

Esta função não possui parâmetros.

### Valor Retornado

Retorna **`true`** se a propriedade tiver pelo menos um gancho definido, **`false`** caso contrário.

### Examples

**Exemplo #1 Exemplo de **ReflectionProperty::hasHooks()****

```
<?php
class Example
{
    public string $name { get => "Nome aqui"; }

    public string $none;
}

$rClass = new \ReflectionClass(Example::class);
var_dump($rClass->getProperty('name')->hasHooks());
var_dump($rClass->getProperty('none')->hasHooks());
?>
```

O exemplo acima produzirá:

```
bool(true)
bool(false)
```

### Notas

> **Nota**:
>
> Este método é equivalente a verificar [ReflectionProperty::getHooks()](reflectionproperty.gethooks.md)
> em um array vazio.

### Veja também

- [ReflectionProperty::getHooks()](reflectionproperty.gethooks.md) - Retorna um array de todos os ganchos nesta propriedade

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
