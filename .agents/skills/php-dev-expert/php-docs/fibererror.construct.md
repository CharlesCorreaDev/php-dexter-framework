# Construtor para não permitir instanciação direta

> **Fonte / Source:** https://www.php.net/manual/pt_BR/fibererror.construct.php

---

# FiberError::\_\_construct

(PHP 8 >= 8.1.0)

FiberError::\_\_construct — Construtor para não permitir instanciação direta

### Descrição

public function **FiberError::\_\_construct**()

### Parâmetros

Esta função não possui parâmetros.

### Erros/Exceções

Dispara uma exceção [Error](class.error.md) quando chamada.

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
