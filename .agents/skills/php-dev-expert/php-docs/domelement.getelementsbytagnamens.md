# Obtém elementos por namespaceURI e localName

> **Fonte / Source:** https://www.php.net/manual/pt_BR/domelement.getelementsbytagnamens.php

---

# DOMElement::getElementsByTagNameNS

(PHP 5, PHP 7, PHP 8)

DOMElement::getElementsByTagNameNS — Obtém elementos por namespaceURI e localName

### Descrição

public function **DOMElement::getElementsByTagNameNS**([?](language.types.null.md)[string](language.types.string.md) `$namespace`, [string](language.types.string.md) `$localName`): [DOMNodeList](class.domnodelist.md)

Esta função busca todos os elementos descendentes com um determinado
`localName` e `namespace`.

### Parâmetros

`namespace`
:   O URI do namespace dos elementos a serem correspondidos.
    O valor especial `"*"` corresponde a todos os namespaces.
    Passar **`null`** corresponde ao namespace vazio.

`localName`
:   O nome local dos elementos a serem correspondidos.
    O valor especial `"*"` corresponde a todos os nomes locais.

### Valor Retornado

Esta função retorna uma nova instância da classe
[DOMNodeList](class.domnodelist.md) de todos os elementos correspondentes na ordem em
que são encontrados em uma travessia em pré-ordem desta árvore de elementos.

### Registro de Alterações

| Versão | Descrição |
| --- | --- |
| 8.0.3 | `namespace` é anulável agora. |

### Veja também

- [DOMElement::getElementsByTagName()](domelement.getelementsbytagname.md) - Obtém elementos pelo nome da tag

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
