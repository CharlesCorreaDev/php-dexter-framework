# Cria um novo objeto DOMEntityReference

> **Fonte / Source:** https://www.php.net/manual/pt_BR/domentityreference.construct.php

---

# DOMEntityReference::\_\_construct

(PHP 5, PHP 7, PHP 8)

DOMEntityReference::\_\_construct — 
Cria um novo objeto DOMEntityReference

### Descrição

public function **DOMEntityReference::\_\_construct**([string](language.types.string.md) `$name`)

Cria um novo objeto [DOMEntityReference](class.domentityreference.md).

### Parâmetros

`name`
:   O nome da referência de entidade.

### Examples

**Exemplo #1 Criando um novo DOMEntityReference**

```
<?php

$dom = new DOMDocument('1.0', 'iso-8859-1');
$element = $dom->appendChild(new DOMElement('root'));
$entity = $element->appendChild(new DOMEntityReference('nbsp'));
echo $dom->saveXML(); /* <?xml version="1.0" encoding="iso-8859-1"?><root>&nbsp;</root> */

?>
```

### Veja também

- [DOMDocument::createEntityReference()](domdocument.createentityreference.md) - Cria novo nó de referência de entidade

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
