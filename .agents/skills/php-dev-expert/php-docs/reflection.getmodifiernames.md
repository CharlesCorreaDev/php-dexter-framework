# Obtém os nomes dos modificadores

> **Fonte / Source:** https://www.php.net/manual/pt_BR/reflection.getmodifiernames.php

---

# Reflection::getModifierNames

(PHP 5, PHP 7, PHP 8)

Reflection::getModifierNames — Obtém os nomes dos modificadores

### Descrição

public static function **Reflection::getModifierNames**([int](language.types.integer.md) `$modifiers`): [array](language.types.array.md)

Obtém os nomes dos modificadores.

### Parâmetros

`modifiers`
:   Campo de bits dos modificadores a serem obtidos.

### Valor Retornado

Um array com os nomes dos modificadores.

### Examples

**Exemplo #1 Exemplo de **Reflection::getModifierNames()****

```
<?php
class Testing
{
    final public static function foo()
    {
        return;
    }

    public function bar()
    {
        return;
    }
}

$foo = new ReflectionMethod('Testing', 'foo');

echo "Modifiers for method foo():\n";
echo $foo->getModifiers() . "\n";
echo implode(' ', Reflection::getModifierNames($foo->getModifiers())) . "\n";

$bar = new ReflectionMethod('Testing', 'bar');

echo "Modifiers for method bar():\n";
echo $bar->getModifiers() . "\n";
echo implode(' ', Reflection::getModifierNames($bar->getModifiers()));
```

O exemplo acima produzirá
algo semelhante a:

```
Modifiers for method foo():
261
final public static
Modifiers for method bar():
65792
public
```

### Veja também

- [ReflectionClass::getModifiers()](reflectionclass.getmodifiers.md) - Obtém os modificadores de classe
- [ReflectionClassConstant::getModifiers()](reflectionclassconstant.getmodifiers.md) - Obtém os modificadores constantes da classe
- [ReflectionMethod::getModifiers()](reflectionmethod.getmodifiers.md) - Obtém os modificadores do método
- [ReflectionProperty::getModifiers()](reflectionproperty.getmodifiers.md) - Obtém os modificadores de propriedade

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
