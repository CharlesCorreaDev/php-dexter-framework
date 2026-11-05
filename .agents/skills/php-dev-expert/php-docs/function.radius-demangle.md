# Descriptografa dados

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.radius-demangle.php

---

# radius\_demangle

(PECL radius >= 1.2.0)

radius\_demangle — Descriptografa dados

### Descrição

function **radius\_demangle**([resource](language.types.resource.md) `$radius_handle`, [string](language.types.string.md) `$mangled`): [string](language.types.string.md)

Alguns dados (senhas, chaves MPPE MS-CHAPv1) são criptografados por motivos de segurança
e devem ser descriptografados antes que você possa usá-los.

### Parâmetros

`radius_handle`
:   O resource RADIUS.

`mangled`
:   Os dados a serem descriptografados.

### Valor Retornado

Retorna a string descriptografada ou **`false`** em caso de erro.

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
