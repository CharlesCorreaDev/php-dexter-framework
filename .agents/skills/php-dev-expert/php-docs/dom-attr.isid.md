# Verifica se o atributo é um ID definido

> **Fonte / Source:** https://www.php.net/manual/pt_BR/dom-attr.isid.php

---

# Dom\Attr::isId

(PHP 8 >= 8.4.0)

Dom\Attr::isId — 
Verifica se o atributo é um ID definido

### Descrição

public function **Dom\Attr::isId**(): [bool](language.types.boolean.md)

Esta função verifica se o atributo é um ID definido.

De acordo com o padrão DOM, isso requer um DTD que defina o
ID do atributo como sendo do tipo ID. Para utilizar este método o documento
deve ser validado no momento da análise passando
**`LIBXML_DTDVALID`** como uma opção.

### Parâmetros

Esta função não possui parâmetros.

### Valor Retornado

Retorna **`true`** se este atributo é um ID definido, **`false`** caso contrário.

### Examples

**Exemplo #1 Exemplo de Dom\Attr::isId()**

```
<?php

// É necessário validar o documento antes de referir ao seu id
$doc = Dom\XMLDocument::createFromFile('examples/book-docbook.xml', LIBXML_DTDVALID);

// Recuperando o atributo denominado id do elemento chapter
$attr = $doc->getElementsByTagName('chapter')->item(0)->getAttributeNode('id');

var_dump($attr->isId()); // bool(true)

?>
```

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
