# Despeja o documento interno em uma string usando formatação HTML

> **Fonte / Source:** https://www.php.net/manual/pt_BR/domdocument.savehtml.php

---

# DOMDocument::saveHTML

(PHP 5, PHP 7, PHP 8)

DOMDocument::saveHTML — 
Despeja o documento interno em uma string usando formatação HTML

### Descrição

public function **DOMDocument::saveHTML**([?](language.types.null.md)[DOMNode](class.domnode.md) `$node` = **`null`**): [string](language.types.string.md)|[false](language.types.singleton.md)

Cria um documento HTML a partir da representação DOM. Esta função é geralmente
chamada após construir um novo documento DOM do zero, como no exemplo abaixo.

### Parâmetros

`node`
:   Parâmetro opcional para gerar a saída de um subconjunto do documento.

### Valor Retornado

Retorna o HTML, ou **`false`** se ocorrer um erro.

### Examples

**Exemplo #1 Salvando uma árvore HTML em uma string**

```
<?php

$doc = new DOMDocument('1.0');

$root = $doc->createElement('html');
$root = $doc->appendChild($root);

$head = $doc->createElement('head');
$head = $root->appendChild($head);

$title = $doc->createElement('title');
$title = $head->appendChild($title);

$text = $doc->createTextNode('Isto é um título.');
$text = $title->appendChild($text);

echo $doc->saveHTML();

?>
```

### Veja também

- [DOMDocument::saveHTMLFile()](domdocument.savehtmlfile.md) - Despeja o documento interno em um arquivo usando formatação HTML
- [DOMDocument::loadHTML()](domdocument.loadhtml.md) - Carrega HTML a partir de uma string
- [DOMDocument::loadHTMLFile()](domdocument.loadhtmlfile.md) - Carrega HTML de um arquivo

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
