# Verifica se o namespaceURI especificado é o namespace padrão ou não

> **Fonte / Source:** https://www.php.net/manual/pt_BR/domnode.isdefaultnamespace.php

---

# DOMNode::isDefaultNamespace

(PHP 5, PHP 7, PHP 8)

DOMNode::isDefaultNamespace — Verifica se o namespaceURI especificado é o namespace padrão ou não

### Descrição

public function **DOMNode::isDefaultNamespace**([string](language.types.string.md) `$namespace`): [bool](language.types.boolean.md)

Indica se `namespace` é o namespace padrão.

### Parâmetros

`namespace`
:   O URI do namespace a ser verificado.

### Valor Retornado

Retorna **`true`** se `namespace` for o namespace
padrão, **`false`** caso contrário.

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
