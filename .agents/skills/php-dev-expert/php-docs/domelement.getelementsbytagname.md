# Obtém elementos pelo nome da tag

> **Fonte / Source:** https://www.php.net/manual/pt_BR/domelement.getelementsbytagname.php

---

# DOMElement::getElementsByTagName

(PHP 5, PHP 7, PHP 8)

DOMElement::getElementsByTagName — Obtém elementos pelo nome da tag

### Descrição

public function **DOMElement::getElementsByTagName**([string](language.types.string.md) `$qualifiedName`): [DOMNodeList](class.domnodelist.md)

Esta função retorna uma nova instância da classe
[DOMNodeList](class.domnodelist.md) de todos os elementos descendentes com um
determinado nome de tag `qualifiedName`, na ordem em que são
encontrados em uma travessia em pré-ordem desta árvore de elementos.

### Parâmetros

`qualifiedName`
:   O nome da tag. Use `*` para retornar todos os elementos dentro
    da árvore de elementos.

### Valor Retornado

Esta função retorna uma nova instância da classe
[DOMNodeList](class.domnodelist.md) de todos os elementos correspondentes.

### Veja também

- [DOMElement::getElementsByTagNameNS()](domelement.getelementsbytagnamens.md) - Obtém elementos por namespaceURI e localName

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
