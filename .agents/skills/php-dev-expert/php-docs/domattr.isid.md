# Verifica se o atributo é um ID definido

> **Fonte / Source:** https://www.php.net/manual/pt_BR/domattr.isid.php

---

# DOMAttr::isId

(PHP 5, PHP 7, PHP 8)

DOMAttr::isId — 
Verifica se o atributo é um ID definido

### Descrição

public function **DOMAttr::isId**(): [bool](language.types.boolean.md)

Esta função verifica se o atributo é um ID definido.

De acordo com o padrão DOM, isso requer um DTD que define o
atributo ID como do tipo ID. É necessário validar o documento com
[DOMDocument::validate](domdocument.validate.md)
ou [DOMDocument::$validateOnParse](class.domdocument.md#domdocument.props.validateonparse) antes de usar esta função.

### Parâmetros

Esta função não possui parâmetros.

### Valor Retornado

Retorna **`true`** se este atributo é um ID definido, **`false`** caso contrário.

### Examples

**Exemplo #1 Exemplo de DOMAttr::isId()**

```
<?php

$doc = new DOMDocument();

// Precisamos validar nosso documento antes de referenciar o id
$doc->validateOnParse = true;
$doc->load('examples/book-docbook.xml');

// Recuperamos o atributo chamado id do elemento chapter
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
