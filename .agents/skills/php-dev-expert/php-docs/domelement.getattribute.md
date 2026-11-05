# Retorna o valor do atributo

> **Fonte / Source:** https://www.php.net/manual/pt_BR/domelement.getattribute.php

---

# DOMElement::getAttribute

(PHP 5, PHP 7, PHP 8)

DOMElement::getAttribute — Retorna o valor do atributo

### Descrição

public function **DOMElement::getAttribute**([string](language.types.string.md) `$qualifiedName`): [string](language.types.string.md)

Obtém o valor do atributo com o nome `qualifiedName`
para o nó atual.

### Parâmetros

`qualifiedName`
:   O nome do atributo.

### Valor Retornado

O valor do atributo, ou uma string vazia se nenhum atributo com o
`qualifiedName` fornecido for encontrado.

### Veja também

- [DOMElement::hasAttribute()](domelement.hasattribute.md) - Verifica se o atributo existe
- [DOMElement::setAttribute()](domelement.setattribute.md) - Adiciona ou modifica um atributo existente
- [DOMElement::removeAttribute()](domelement.removeattribute.md) - Remove atributo

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
