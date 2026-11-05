# Constrói um ReflectionObject

> **Fonte / Source:** https://www.php.net/manual/pt_BR/reflectionobject.construct.php

---

# ReflectionObject::\_\_construct

(PHP 5, PHP 7, PHP 8)

ReflectionObject::\_\_construct — Constrói um ReflectionObject

### Descrição

public function **ReflectionObject::\_\_construct**([object](language.types.object.md) `$object`)

Constrói um [ReflectionObject](class.reflectionobject.md).

### Parâmetros

`object`
:   Uma instância de objeto.

### Veja também

- [ReflectionObject::export()](reflectionobject.export.md) - Exporta
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
