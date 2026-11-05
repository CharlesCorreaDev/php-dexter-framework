# Return the given value if in range, else return the nearest bound

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.clamp.php

---

# clamp

(PHP 8 >= 8.6.0)

clamp — Return the given value if in range, else return the nearest bound

### Descrição

function **clamp**([mixed](language.types.mixed.md) `$value`, [mixed](language.types.mixed.md) `$min`, [mixed](language.types.mixed.md) `$max`): [mixed](language.types.mixed.md)

Return the given value if in range of `min` and `max`.
Else if it's lower than `min`, return `min`.
Else return `max`.

> **Nota**:
>
> Values of different types will be compared using the [standard comparison rules](language.operators.comparison.md). For instance, a non-numeric [string](language.types.string.md) will be
> compared to an [int](language.types.integer.md) as though it were `0`, but multiple non-numeric
> [string](language.types.string.md) values will be compared alphanumerically. The actual value returned will be of the
> original type with no conversion applied.

**Cuidado**

Be careful when passing arguments of different types because
**clamp()** can produce unpredictable results.

### Parâmetros

`value`
:   Any [comparable](language.operators.comparison.md)
    value to be clamped between `min` and `max`.

`min`
:   A [comparable](language.operators.comparison.md) minimum to limit
    the `value` to.

`max`
:   A [comparable](language.operators.comparison.md) maximum to limit
    the `value` to.

### Valor Retornado

**clamp()** returns the parameter `value` if
considered "between" `min` and `max` according to standard
comparisons.

If `value` is **`NAN`**, then the returned value will also be
**`NAN`**.

### Erros/Exceções

If `min` is greater than `max`,
**clamp()** throws a [ValueError](class.valueerror.md).

If `min` or `max` is **`NAN`**,
**clamp()** throws a [ValueError](class.valueerror.md).

### Examples

```
<?php
echo clamp(-5, min: 0, max: 100), PHP_EOL;  // 0
echo clamp(55, min: 0, max: 100), PHP_EOL;  // 55
echo clamp(103, min: 0, max: 100), PHP_EOL;  // 100

echo clamp("J", min: "A", max: "F"), PHP_EOL;  // "F"

clamp(
    new \DateTimeImmutable('2025-08-01'),
    min: new \DateTimeImmutable('2025-08-15'),
    max: new \DateTimeImmutable('2025-09-15'),
)->format('Y-m-d'), PHP_EOL; // 2025-08-15
?>
```

### Veja também

- [min()](function.min.md) - Encontra o menor valor
- [max()](function.max.md) - Localiza o maior valor

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
