# Retorna o valor do atributo

> **Fonte / Source:** https://www.php.net/manual/pt_BR/domelement.getattributens.php

---

# DOMElement::getAttributeNS

(PHP 5, PHP 7, PHP 8)

DOMElement::getAttributeNS — Retorna o valor do atributo

### Descrição

public function **DOMElement::getAttributeNS**([?](language.types.null.md)[string](language.types.string.md) `$namespace`, [string](language.types.string.md) `$localName`): [string](language.types.string.md)

Obtém o valor do atributo no namespace `namespace`
com o nome local `localName` para o nó atual.

### Parâmetros

`namespace`
:   O URI do namespace.

`localName`
:   O nome local.

### Valor Retornado

O valor do atributo ou uma string vazia se nenhum atributo com o
`localName` e `namespace`
dados for encontrado.

### Veja também

- [DOMElement::hasAttributeNS()](domelement.hasattributens.md) - Verifica se o atributo existe
- [DOMElement::setAttributeNS()](domelement.setattributens.md) - Adiciona um novo atributo
- [DOMElement::removeAttributeNS()](domelement.removeattributens.md) - Remove atributo

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
