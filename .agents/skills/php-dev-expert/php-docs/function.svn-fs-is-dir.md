# Determina se um caminho aponta para um diretório

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.svn-fs-is-dir.php

---

# svn\_fs\_is\_dir

(PECL svn >= 0.2.0)

svn\_fs\_is\_dir — Determina se um caminho aponta para um diretório

### Descrição

function **svn\_fs\_is\_dir**([resource](language.types.resource.md) `$root`, [string](language.types.string.md) `$path`): [bool](language.types.boolean.md)

**Aviso**

Esta função não
está documentada; apenas a lista de argumentos está disponível.

Determina se o caminho fornecido aponta para um diretório.

### Parâmetros

`root`

`path`

### Valor Retornado

Retorna **`true`** se o caminho aponta para um diretório, **`false`** caso contrário.

### Notas

**Aviso**

Esta função é
*EXPERIMENTAL*. O comportamento desta função, seu nome e
documentação poderão mudar sem aviso prévio em futuras versões do PHP.
Use por sua conta e risco.

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
