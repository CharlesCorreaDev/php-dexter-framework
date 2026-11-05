# Constrói um novo objeto DOMCdataSection

> **Fonte / Source:** https://www.php.net/manual/pt_BR/domcdatasection.construct.php

---

# DOMCdataSection::\_\_construct

(PHP 5, PHP 7, PHP 8)

DOMCdataSection::\_\_construct — Constrói um novo objeto DOMCdataSection

### Descrição

public function **DOMCdataSection::\_\_construct**([string](language.types.string.md) `$data`)

Constrói um novo nó CDATA. Isso funciona como a classe [DOMText](class.domtext.md)
class.

### Parâmetros

`data`
:   O valor do nó CDATA. Se não fornecido, um nó CDATA vazio é criado.

### Examples

**Exemplo #1 Criando um novo objeto DOMCdataSection**

```
<?php

$dom = new DOMDocument('1.0', 'utf-8');
$element = $dom->appendChild(new DOMElement('root'));
$text = $element->appendChild(new DOMCdataSection('root value'));
echo $dom->saveXML();

?>
```

O exemplo acima produzirá:

```
<?xml version="1.0" encoding="utf-8"?>
<root><![CDATA[root value]]></root>
```

### Veja também

- [DOMText::\_\_construct()](domtext.construct.md) - Cria um novo objeto DOMText
- [DOMDocument::createTextNode()](domdocument.createtextnode.md) - Cria novo nó de texto

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
