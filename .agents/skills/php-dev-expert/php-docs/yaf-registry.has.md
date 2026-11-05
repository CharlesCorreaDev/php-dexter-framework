# Verifica se um item existe

> **Fonte / Source:** https://www.php.net/manual/pt_BR/yaf-registry.has.php

---

# Yaf\_Registry::has

(Yaf >=1.0.0)

Yaf\_Registry::has — Verifica se um item existe

### Descrição

public static function **Yaf\_Registry::has**([string](language.types.string.md) `$name`): [bool](language.types.boolean.md)

Verifica se um item existe.

### Parâmetros

`name`

### Valor Retornado

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
