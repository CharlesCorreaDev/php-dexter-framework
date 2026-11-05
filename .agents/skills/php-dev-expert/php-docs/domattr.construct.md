# Cria um novo objeto DOMAttr

> **Fonte / Source:** https://www.php.net/manual/pt_BR/domattr.construct.php

---

# DOMAttr::\_\_construct

(PHP 5, PHP 7, PHP 8)

DOMAttr::\_\_construct — Cria um novo objeto [DOMAttr](class.domattr.md)

### Descrição

public function **DOMAttr::\_\_construct**([string](language.types.string.md) `$name`, [string](language.types.string.md) `$value` = "")

Cria um novo objeto DOMAttr. Este objeto é somente leitura.
Pode ser anexado a um documento, mas nós adicionais não podem
ser anexados a este nó até que o nó esteja associado a
um documento. Para criar um nó gravável, use
[DOMDocument::createAttribute](domdocument.createattribute.md).

### Parâmetros

`name`
:   O nome da tag do atributo.

`value`
:   O valor do atributo.

### Examples

**Exemplo #1 Cria um novo objeto [DOMAttr](class.domattr.md)**

```
<?php

$dom = new DOMDocument('1.0', 'utf-8');
$element = $dom->appendChild(new DOMElement('root'));
$attr = $element->setAttributeNode(new DOMAttr('attr', 'attrvalue'));
echo $dom->saveXML();

?>
```

O exemplo acima produzirá:

```
<?xml version="1.0" encoding="utf-8"?>
<root attr="attrvalue"/>
```

### Veja também

- [DOMDocument::createAttribute()](domdocument.createattribute.md) - Cria um novo attribute

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
