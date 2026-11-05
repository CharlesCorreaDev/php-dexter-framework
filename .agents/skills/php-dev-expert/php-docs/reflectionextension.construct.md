# Constrói um ReflectionExtension

> **Fonte / Source:** https://www.php.net/manual/pt_BR/reflectionextension.construct.php

---

# ReflectionExtension::\_\_construct

(PHP 5, PHP 7, PHP 8)

ReflectionExtension::\_\_construct — Constrói um ReflectionExtension

### Descrição

public function **ReflectionExtension::\_\_construct**([string](language.types.string.md) `$name`)

Constrói um [object](language.types.object.md) [ReflectionExtension](class.reflectionextension.md).

### Parâmetros

`name`
:   Nome da extensão.

### Erros/Exceções

Lança [ReflectionException](class.reflectionexception.md) se a extensão a ser refletida não existir.

### Examples

**Exemplo #1 Exemplo de [ReflectionExtension](class.reflectionextension.md)**

```
<?php
$ext = new ReflectionExtension('Reflection');

printf('Extension: %s (version: %s)', $ext->getName(), $ext->getVersion());
?>
```

O exemplo acima produzirá
algo semelhante a:

```
Extension: Reflection (version: 8.3.17)
```

### Veja também

- [ReflectionExtension::info()](reflectionextension.info.md) - Imprime informações da extensão
- [Construtores](language.oop5.decon.md#language.oop5.decon.constructor)

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
