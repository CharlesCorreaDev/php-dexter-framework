# Obtém a representação em string do objeto

> **Fonte / Source:** https://www.php.net/manual/pt_BR/stringable.tostring.php

---

# Stringable::\_\_toString

(PHP 8)

Stringable::\_\_toString — Obtém a representação em string do objeto

### Descrição

public function **Stringable::\_\_toString**(): [string](language.types.string.md)

### Parâmetros

Esta função não possui parâmetros.

### Valor Retornado

Retorna a representação em [string](language.types.string.md) do objeto.

### Veja também

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
