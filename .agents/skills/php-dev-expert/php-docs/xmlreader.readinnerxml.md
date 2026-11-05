# Obtém XML do nó atual

> **Fonte / Source:** https://www.php.net/manual/pt_BR/xmlreader.readinnerxml.php

---

# XMLReader::readInnerXml

(PHP 5 >= 5.2.0, PHP 7, PHP 8)

XMLReader::readInnerXml — Obtém XML do nó atual

### Descrição

public function **XMLReader::readInnerXml**(): [string](language.types.string.md)

Lê o conteúdo do nó atual, incluindo os nós filhos e a marcação.

### Parâmetros

Esta função não possui parâmetros.

### Valor Retornado

Retorna o conteúdo do nó atual como uma string. Retorna string vazia em caso de falha.

### Notas

**Cuidado**

Esta função só estará disponível quando o PHP for compilado com a libxml 20620 ou superior.

### Veja também

- [XMLReader::readString()](xmlreader.readstring.md) - Lê o conteúdo do nó atual como uma string
- [XMLReader::readOuterXml()](xmlreader.readouterxml.md) - Obtém XML do nó atual, incluindo ele mesmo
- [XMLReader::expand()](xmlreader.expand.md) - Retorna uma cópia do nó atual como um objeto DOM

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
