# Recupera um nó especificado pelo nome local e URI do namespace

> **Fonte / Source:** https://www.php.net/manual/pt_BR/domnamednodemap.getnameditemns.php

---

# DOMNamedNodeMap::getNamedItemNS

(PHP 5, PHP 7, PHP 8)

DOMNamedNodeMap::getNamedItemNS — 
Recupera um nó especificado pelo nome local e URI do namespace

### Descrição

public function **DOMNamedNodeMap::getNamedItemNS**([?](language.types.null.md)[string](language.types.string.md) `$namespace`, [string](language.types.string.md) `$localName`): [?](language.types.null.md)[DOMNode](class.domnode.md)

Recupera um nó especificado pelo `localName` e
`namespace`.

### Parâmetros

`namespace`
:   O URI do namespace do nó a ser recuperado.

`localName`
:   O nome local do nó a ser recuperado.

### Valor Retornado

Um nó (de qualquer tipo) com o nome local e URI do namespace especificados, ou
**`null`** se nenhum nó for encontrado.

### Veja também

- [DOMNamedNodeMap::getNamedItem()](domnamednodemap.getnameditem.md) - Recupera um nó especificado pelo nome

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
