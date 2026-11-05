# Registra o namespace com o objeto DOMXPath

> **Fonte / Source:** https://www.php.net/manual/pt_BR/domxpath.registernamespace.php

---

# DOMXPath::registerNamespace

(PHP 5, PHP 7, PHP 8)

DOMXPath::registerNamespace — 
Registra o namespace com o objeto [DOMXPath](class.domxpath.md)

### Descrição

public function **DOMXPath::registerNamespace**([string](language.types.string.md) `$prefix`, [string](language.types.string.md) `$namespace`): [bool](language.types.boolean.md)

Registra o `namespace` e
`prefix` com o objeto DOMXPath.

### Parâmetros

`prefix`
:   O prefixo.

`namespace`
:   O URI do namespace.

### Valor Retornado

Retorna **`true`** em caso de sucesso ou **`false`** em caso de falha.

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
