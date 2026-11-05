# Desativa o redirecionamento

> **Fonte / Source:** https://www.php.net/manual/pt_BR/oauth.disableredirects.php

---

# OAuth::disableRedirects

(PECL OAuth >= 0.99.9)

OAuth::disableRedirects — Desativa o redirecionamento

### Descrição

public function **OAuth::disableRedirects**(): [bool](language.types.boolean.md)

Desativa o redirecionamento automático, permitindo que a requisição seja redirecionada manualmente.

**Aviso**

Esta função não
está documentada; apenas a lista de argumentos está disponível.

### Parâmetros

Esta função não possui parâmetros.

### Valor Retornado

**`true`**

### Veja também

- [OAuth::enableRedirects()](oauth.enableredirects.md) - Habilita redirecionamentos

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
