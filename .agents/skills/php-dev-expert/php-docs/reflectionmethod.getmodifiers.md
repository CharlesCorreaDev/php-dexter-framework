# Obtém os modificadores do método

> **Fonte / Source:** https://www.php.net/manual/pt_BR/reflectionmethod.getmodifiers.php

---

# ReflectionMethod::getModifiers

(PHP 5, PHP 7, PHP 8)

ReflectionMethod::getModifiers — Obtém os modificadores do método

### Descrição

public function **ReflectionMethod::getModifiers**(): [int](language.types.integer.md)

Retorna um campo de bits dos modificadores de acesso para este método.

### Parâmetros

Esta função não possui parâmetros.

### Valor Retornado

Uma representação numérica dos modificadores.
O significado real desses modificadores é descrito em
[constantes predefinidas](class.reflectionmethod.md#reflectionmethod.constants.modifiers).

### Examples

**Exemplo #1 Exemplo de **ReflectionMethod::getModifiers()****

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
?>
```

O exemplo acima produzirá
algo semelhante a:

```
Modifiers for method foo():
49
final public static
Modifiers for method bar():
1
public
```

### Veja também

- [Reflection::getModifierNames()](reflection.getmodifiernames.md) - Obtém os nomes dos modificadores

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
