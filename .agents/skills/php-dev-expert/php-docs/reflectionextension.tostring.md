# Para string

> **Fonte / Source:** https://www.php.net/manual/pt_BR/reflectionextension.tostring.php

---

# ReflectionExtension::\_\_toString

(PHP 5, PHP 7, PHP 8)

ReflectionExtension::\_\_toString — Para string

### Descrição

public function **ReflectionExtension::\_\_toString**(): [string](language.types.string.md)

Exporta uma extensão refletida e a retorna como uma [string](language.types.string.md). Esse
é o mesmo que [ReflectionExtension::export()](reflectionextension.export.md) com
o `return` definido como **`true`**.

### Parâmetros

Esta função não possui parâmetros.

### Valor Retornado

Retorna a extensão exportada como uma string, da mesma forma que o
[ReflectionExtension::export()](reflectionextension.export.md).

### Veja também

- [ReflectionExtension::\_\_construct()](reflectionextension.construct.md) - Constrói um ReflectionExtension
- [ReflectionExtension::export()](reflectionextension.export.md) - Exportação
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
