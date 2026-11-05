# Cria um novo objeto DOMComment

> **Fonte / Source:** https://www.php.net/manual/pt_BR/domcomment.construct.php

---

# DOMComment::\_\_construct

(PHP 5, PHP 7, PHP 8)

DOMComment::\_\_construct — 
Cria um novo objeto DOMComment

### Descrição

public function **DOMComment::\_\_construct**([string](language.types.string.md) `$data` = "")

Cria um novo objeto [DOMComment](class.domcomment.md). Este objeto é somente leitura.
Pode ser anexado a um documento, mas nós adicionais não podem ser anexados a este nó até
que o nó esteja associado a um documento. Para criar um nó gravável, use
[DOMDocument::createComment](domdocument.createcomment.md).

### Parâmetros

`data`
:   O valor do comentário.

### Examples

**Exemplo #1 Criando um novo DOMComment**

```
<?php

$dom = new DOMDocument('1.0', 'iso-8859-1');
$element = $dom->appendChild(new DOMElement('root'));
$comment = $element->appendChild(new DOMComment('root comment'));
echo $dom->saveXML(); /* <?xml version="1.0" encoding="iso-8859-1"?><root><!--root comment--></root> */

?>
```

### Veja também

- [DOMDocument::createComment()](domdocument.createcomment.md) - Cria novo nó de comentárioe

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
