# Define o valor de uma propriedade, ignorando um gancho de configuração se definido

> **Fonte / Source:** https://www.php.net/manual/pt_BR/reflectionproperty.setrawvalue.php

---

# ReflectionProperty::setRawValue

(PHP 8 >= 8.4.0)

ReflectionProperty::setRawValue — Define o valor de uma propriedade, ignorando um gancho de configuração se definido

### Descrição

public function **ReflectionProperty::setRawValue**([object](language.types.object.md) `$object`, [mixed](language.types.mixed.md) `$value`): [void](language.types.void.md)

Define o valor de uma propriedade, ignorando um gancho `set`, se definido.

### Parâmetros

`object`
:   O objeto no qual o valor da propriedade será definido.

`value`
:   O valor a ser escrito. Ele ainda deve ser válido de acordo com o tipo da propriedade.

### Valor Retornado

Nenhum valor é retornado.

### Erros/Exceções

Se a propriedade for virtual, um [Error](class.error.md) será gerado,
pois não há valor bruto para definir.

### Examples

**Exemplo #1 Exemplo de **ReflectionProperty::setRawValue()****

```
<?php
class Example
{
    public int $age {
        set {
            if ($value <= 0) {
               throw new \InvalidArgumentException();
            }
            $this->age = $value;
        }
    }
}

$example = new Example();

$rClass = new \ReflectionClass(Example::class);
$rProp = $rClass->getProperty('age');

// Eles passariam pelo gancho set e lançariam uma exceção.
try {
    $example->age = -2;
} catch (InvalidArgumentException) {
    echo "InvalidArgumentException por definir a propriedade para -2\n";
}
try {
    $rProp->setValue($example, -2);
} catch (InvalidArgumentException) {
    echo "InvalidArgumentException por usar ReflectionProperty::setValue() com -2\n";
}

// Mas isso definiria $age como -2 sem erro.
$rProp->setRawValue($example, -2);
echo $example->age;
?>
```

O exemplo acima produzirá:

```
InvalidArgumentException por definir a propriedade para -2
InvalidArgumentException por usar ReflectionProperty::setValue() com -2
-2
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
