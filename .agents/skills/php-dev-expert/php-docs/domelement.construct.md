# Cria um novo objeto DOMElement

> **Fonte / Source:** https://www.php.net/manual/pt_BR/domelement.construct.php

---

# DOMElement::\_\_construct

(PHP 5, PHP 7, PHP 8)

DOMElement::\_\_construct — 
Cria um novo objeto DOMElement

### Descrição

public function **DOMElement::\_\_construct**([string](language.types.string.md) `$qualifiedName`, [?](language.types.null.md)[string](language.types.string.md) `$value` = **`null`**, [string](language.types.string.md) `$namespace` = "")

Cria um novo objeto [DOMElement](class.domelement.md). Este objeto é somente leitura.
Pode ser anexado a um documento, mas nós adicionais não podem ser anexados a este nó até
que o nó esteja associado a um documento. Para criar um nó gravável, use
[DOMDocument::createElement](domdocument.createelement.md) ou
[DOMDocument::createElementNS](domdocument.createelementns.md).

### Parâmetros

`qualifiedName`
:   O nome da tag do elemento. Quando também passando o namespaceURI, o nome do elemento
    pode ter um prefixo associado ao URI.

`value`
:   O valor do elemento.

`namespace`
:   Um URI de namespace para criar o elemento dentro de um namespace específico.

### Examples

**Exemplo #1 Criando um novo DOMElement**

```
<?php

$dom = new DOMDocument('1.0', 'iso-8859-1');
$element = $dom->appendChild(new DOMElement('root'));
$element_ns = new DOMElement('pr:node1', 'thisvalue', 'http://xyz');
$element->appendChild($element_ns);
echo $dom->saveXML(); /* <?xml version="1.0" encoding="iso-8859-1"?>
<root><pr:node1 xmlns:pr="http://xyz">thisvalue</pr:node1></root> */

?>
```

### Veja também

- [DOMDocument::createElement()](domdocument.createelement.md) - Cria novo nó de elemento
- [DOMDocument::createElementNS()](domdocument.createelementns.md) - Cria novo nó de elemento com um namespace associado

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
