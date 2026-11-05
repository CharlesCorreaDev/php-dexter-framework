# Lê o conteúdo do nó atual como uma string

> **Fonte / Source:** https://www.php.net/manual/pt_BR/xmlreader.readstring.php

---

# XMLReader::readString

(PHP 5 >= 5.2.0, PHP 7, PHP 8)

XMLReader::readString — Lê o conteúdo do nó atual como uma string

### Descrição

public function **XMLReader::readString**(): [string](language.types.string.md)

Lê o conteúdo do nó atual como uma string.

### Parâmetros

Esta função não possui parâmetros.

### Valor Retornado

Retorna o conteúdo do nó atual como uma string. Retorna string vazia em caso de
falha.

### Notas

**Cuidado**

Esta função só estará disponível quando o PHP for compilado com a libxml 20620 ou superior.

### Veja também

- [XMLReader::readOuterXml()](xmlreader.readouterxml.md) - Obtém XML do nó atual, incluindo ele mesmo
- [XMLReader::readInnerXml()](xmlreader.readinnerxml.md) - Obtém XML do nó atual
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
