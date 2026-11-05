# Habilita redirecionamentos

> **Fonte / Source:** https://www.php.net/manual/pt_BR/oauth.enableredirects.php

---

# OAuth::enableRedirects

(PECL OAuth >= 0.99.9)

OAuth::enableRedirects — Habilita redirecionamentos

### Descrição

public function **OAuth::enableRedirects**(): [bool](language.types.boolean.md)

Segue e assina redirecionamentos automaticamente, o que é habilitado por padrão.

**Aviso**

Esta função não
está documentada; apenas a lista de argumentos está disponível.

### Parâmetros

Esta função não possui parâmetros.

### Valor Retornado

**`true`**

### Veja também

- [OAuth::disableRedirects()](oauth.disableredirects.md) - Desativa o redirecionamento

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
