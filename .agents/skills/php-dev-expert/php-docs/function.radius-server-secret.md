# Retorna o segredo compartilhado

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.radius-server-secret.php

---

# radius\_server\_secret

(PECL radius >= 1.1.0)

radius\_server\_secret — Retorna o segredo compartilhado

### Descrição

function **radius\_server\_secret**([resource](language.types.resource.md) `$radius_handle`): [string](language.types.string.md)

O segredo compartilhado é necessário como salt para decodificar dados como
senhas e chaves de criptografia.

### Parâmetros

`radius_handle`
:   O resource RADIUS.

### Valor Retornado

Retorna o segredo compartilhado do servidor como string ou **`false`** em caso de erro.

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
