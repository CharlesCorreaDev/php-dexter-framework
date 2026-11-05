# Para string

> **Fonte / Source:** https://www.php.net/manual/pt_BR/reflectionparameter.tostring.php

---

# ReflectionParameter::\_\_toString

(PHP 5, PHP 7, PHP 8)

ReflectionParameter::\_\_toString — Para string

### Descrição

public function **ReflectionParameter::\_\_toString**(): [string](language.types.string.md)

Obtém uma descrição legível do parâmetro.

### Parâmetros

Esta função não possui parâmetros.

### Valor Retornado

A string.

### Examples

**Exemplo #1 Exemplo de **ReflectionParameter::\_\_toString()****

```
<?php
echo new ReflectionParameter('substr', 0);
?>
```

O exemplo acima produzirá
algo semelhante a:

```
Parameter #0 [ <required> string $string ]
```

### Veja também

- [ReflectionFunction::\_\_toString()](reflectionfunction.tostring.md) - Retorna a representação em string do objeto ReflectionFunction
- [ReflectionMethod::\_\_toString()](reflectionmethod.tostring.md) - Retorna a representação em string do objeto do método Reflection
- [\_\_toString()](language.oop5.magic.md#object.tostring)

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
