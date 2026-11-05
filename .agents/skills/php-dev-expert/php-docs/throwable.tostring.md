# Obtém uma representação em string do objeto disparado

> **Fonte / Source:** https://www.php.net/manual/pt_BR/throwable.tostring.php

---

# Throwable::\_\_toString

(PHP 7, PHP 8)

Throwable::\_\_toString — Obtém uma representação em string do objeto disparado

### Descrição

public function **Throwable::\_\_toString**(): [string](language.types.string.md)

### Parâmetros

Esta função não possui parâmetros.

### Valor Retornado

Retorna a representação em [string](language.types.string.md) do objeto disparado.

### Veja também

- [Exception::\_\_toString()](exception.tostring.md) - Representação em string da exceção

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
