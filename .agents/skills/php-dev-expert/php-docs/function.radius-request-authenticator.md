# Retorna o autenticador de solicitação

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.radius-request-authenticator.php

---

# radius\_request\_authenticator

(PECL radius >= 1.1.0)

radius\_request\_authenticator — Retorna o autenticador de solicitação

### Descrição

function **radius\_request\_authenticator**([resource](language.types.resource.md) `$radius_handle`): [string](language.types.string.md)

O autenticador de solicitação é necessário para decodificar dados codificados, como
senhas e chaves de criptografia.

### Parâmetros

`radius_handle`
:   O resource RADIUS.

### Valor Retornado

Retorna o autenticador de solicitação como string ou **`false`** em caso de erro.

### Veja também

- [radius\_demangle()](function.radius-demangle.md) - Descriptografa dados

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
