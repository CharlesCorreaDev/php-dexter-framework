# Obtém o nome do tipo como uma string

> **Fonte / Source:** https://www.php.net/manual/pt_BR/reflectionnamedtype.getname.php

---

# ReflectionNamedType::getName

(PHP 7 >= 7.1.0, PHP 8)

ReflectionNamedType::getName — Obtém o nome do tipo como uma string

### Descrição

public function **ReflectionNamedType::getName**(): [string](language.types.string.md)

### Parâmetros

Esta função não possui parâmetros.

### Valor Retornado

Retorna o nome do tipo que está sendo refletido.

### Veja também

- [ReflectionType::\_\_toString()](reflectiontype.tostring.md) - Para string

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
