# Retorna um array de extensões registradas

> **Fonte / Source:** https://www.php.net/manual/pt_BR/v8js.getextensions.php

---

# V8Js::getExtensions

(PECL v8js >= 0.1.0)

V8Js::getExtensions — Retorna um array de extensões registradas

### Descrição

public static function **V8Js::getExtensions**(): [array](language.types.array.md)

Esta função retorna um array de extensões Javascript registradas usando [V8Js::registerExtension()](v8js.registerextension.md).

### Parâmetros

Esta função não possui parâmetros.

### Valor Retornado

Retorna um array de extensões registradas ou um array vazio se não houver nenhuma.

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
