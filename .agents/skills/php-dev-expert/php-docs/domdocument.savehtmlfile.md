# Despeja o documento interno em um arquivo usando formatação HTML

> **Fonte / Source:** https://www.php.net/manual/pt_BR/domdocument.savehtmlfile.php

---

# DOMDocument::saveHTMLFile

(PHP 5, PHP 7, PHP 8)

DOMDocument::saveHTMLFile — 
Despeja o documento interno em um arquivo usando formatação HTML

### Descrição

public function **DOMDocument::saveHTMLFile**([string](language.types.string.md) `$filename`): [int](language.types.integer.md)|[false](language.types.singleton.md)

Cria um documento HTML a partir da representação DOM. Esta função é geralmente
chamada após construir um novo documento DOM do zero, como no exemplo abaixo.

### Parâmetros

`filename`
:   O caminho para o documento HTML salvo.

### Valor Retornado

Retorna o número de bytes gravados ou **`false`** se ocorrer um erro.

### Examples

**Exemplo #1 Salvando uma árvore HTML em um arquivo**

```
<?php

$doc = new DOMDocument('1.0');
// uma saída apresentável
$doc->formatOutput = true;

$root = $doc->createElement('html');
$root = $doc->appendChild($root);

$head = $doc->createElement('head');
$head = $root->appendChild($head);

$title = $doc->createElement('title');
$title = $head->appendChild($title);

$text = $doc->createTextNode('Isto é um título.');
$text = $title->appendChild($text);

echo 'Escritos: ' . $doc->saveHTMLFile("/tmp/test.html") . ' bytes'; // Escritos: 129 bytes

?>
```

### Veja também

- [DOMDocument::saveHTML()](domdocument.savehtml.md) - Despeja o documento interno em uma string usando formatação HTML
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
