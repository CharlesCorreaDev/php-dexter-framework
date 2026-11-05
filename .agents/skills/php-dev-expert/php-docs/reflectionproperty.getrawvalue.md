# Retorna o valor de uma propriedade, ignorando um gancho get se definido

> **Fonte / Source:** https://www.php.net/manual/pt_BR/reflectionproperty.getrawvalue.php

---

# ReflectionProperty::getRawValue

(PHP 8 >= 8.4.0)

ReflectionProperty::getRawValue — Retorna o valor de uma propriedade, ignorando um gancho get se definido

### Descrição

public function **ReflectionProperty::getRawValue**([object](language.types.object.md) `$object`): [mixed](language.types.mixed.md)

**Aviso**

Esta função não
está documentada; apenas a lista de argumentos está disponível.

Retorna o valor de uma propriedade, ignorando um gancho `get`, se definido.

### Parâmetros

`object`
:   O objeto do qual o valor será recuperado.

### Valor Retornado

O valor armazenado da propriedade, ignorando um gancho `get`, se definido.

### Erros/Exceções

Se a propriedade for virtual, um [Error](class.error.md) será gerado,
pois não há valor bruto para recuperar.

### Examples

**Exemplo #1 Exemplo de **ReflectionProperty::getRawValue()****

```
<?php

class Example
{
    public string $tag {
        get => strtolower($this->tag);
    }
}

$example = new Example();
$example->tag = 'PHP';

$rClass = new \ReflectionClass(Example::class);
$rProp = $rClass->getProperty('tag');

// Eles passariam pelo gancho get, então produziriam "php"
echo $example->tag, PHP_EOL;
echo $rProp->getValue($example), PHP_EOL;

// Mas isso ignoraria o gancho e produziria "PHP"
echo $rProp->getRawValue($example);

?>
```

O exemplo acima produzirá:

```
php
php
PHP
```

### Veja também

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
