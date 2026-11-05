# Obtém o valor de um atributo pelo índice

> **Fonte / Source:** https://www.php.net/manual/pt_BR/xmlreader.getattributeno.php

---

# XMLReader::getAttributeNo

(PHP 5 >= 5.1.0, PHP 7, PHP 8)

XMLReader::getAttributeNo — Obtém o valor de um atributo pelo índice

### Descrição

public function **XMLReader::getAttributeNo**([int](language.types.integer.md) `$index`): [?](language.types.null.md)[string](language.types.string.md)

Retorna o valor de um atributo com base em sua posição ou uma
string vazia se o atributo não existir ou se não estiver posicionado
em um nó de elemento.

### Parâmetros

`index`
:   A posição do atributo.

### Valor Retornado

O valor do atributo, ou **`null`** se nenhum atributo existir na
`index` ou se não estiver posicionado no elemento.

### Veja também

- [XMLReader::getAttribute()](xmlreader.getattribute.md) - Obtém o valor de um atributo nomeado
- [XMLReader::getAttributeNs()](xmlreader.getattributens.md) - Obtém o valor de um atributo pelo nome local e URI do namespace

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
