# Cria um novo objeto DOMDocument

> **Fonte / Source:** https://www.php.net/manual/pt_BR/domdocument.construct.php

---

# DOMDocument::\_\_construct

(PHP 5, PHP 7, PHP 8)

DOMDocument::\_\_construct — 
Cria um novo objeto DOMDocument

### Descrição

public function **DOMDocument::\_\_construct**([string](language.types.string.md) `$version` = "1.0", [string](language.types.string.md) `$encoding` = "")

Cria um novo objeto [DOMDocument](class.domdocument.md).

### Parâmetros

`version`
:   O número da versão do documento como parte da declaração XML.

`encoding`
:   A codificação do documento como parte da declaração XML.

### Examples

**Exemplo #1 Criando um novo DOMDocument**

```
<?php

$dom = new DOMDocument('1.0', 'iso-8859-1');

echo $dom->saveXML(); /* <?xml version="1.0" encoding="iso-8859-1"?> */

?>
```

### Veja também

- [DOMImplementation::createDocument()](domimplementation.createdocument.md) - Cria um objeto DOMDocument do tipo especificado com seu elemento de documento

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
