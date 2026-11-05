# Cria um novo objeto DOMText

> **Fonte / Source:** https://www.php.net/manual/pt_BR/domtext.construct.php

---

# DOMText::\_\_construct

(PHP 5, PHP 7, PHP 8)

DOMText::\_\_construct — 
Cria um novo objeto [DOMText](class.domtext.md)

### Descrição

public function **DOMText::\_\_construct**([string](language.types.string.md) `$data` = "")

Cria um novo objeto [DOMText](class.domtext.md)

### Parâmetros

`data`
:   O valor do nó de texto. Se não fornecido, um nó de texto vazio é criado.

### Examples

**Exemplo #1 Criando um novo DOMText**

```
<?php

$dom = new DOMDocument('1.0', 'iso-8859-1');
$element = $dom->appendChild(new DOMElement('root'));
$text = $element->appendChild(new DOMText('root value'));
echo $dom->saveXML(); /* <?xml version="1.0" encoding="iso-8859-1"?><root>root value</root> */

?>
```

### Veja também

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
