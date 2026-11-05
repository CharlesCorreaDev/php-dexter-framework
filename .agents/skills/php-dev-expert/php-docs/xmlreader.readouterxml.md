# Obtém XML do nó atual, incluindo ele mesmo

> **Fonte / Source:** https://www.php.net/manual/pt_BR/xmlreader.readouterxml.php

---

# XMLReader::readOuterXml

(PHP 5 >= 5.2.0, PHP 7, PHP 8)

XMLReader::readOuterXml — Obtém XML do nó atual, incluindo ele mesmo

### Descrição

public function **XMLReader::readOuterXml**(): [string](language.types.string.md)

Lê o conteúdo do nó atual, incluindo o próprio nó.

### Parâmetros

Esta função não possui parâmetros.

### Valor Retornado

Retorna o conteúdo do nó atual, incluindo ele mesmo, como uma string. Retorna string vazia em caso de falha.

### Notas

**Cuidado**

Esta função só estará disponível quando o PHP for compilado com a libxml 20620 ou superior.

### Veja também

- [XMLReader::readString()](xmlreader.readstring.md) - Lê o conteúdo do nó atual como uma string
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
