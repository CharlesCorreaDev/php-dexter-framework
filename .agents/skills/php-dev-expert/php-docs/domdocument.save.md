# Grava a árvore XML interna de volta em um arquivo

> **Fonte / Source:** https://www.php.net/manual/pt_BR/domdocument.save.php

---

# DOMDocument::save

(PHP 5, PHP 7, PHP 8)

DOMDocument::save — 
Grava a árvore XML interna de volta em um arquivo

### Descrição

public function **DOMDocument::save**([string](language.types.string.md) `$filename`, [int](language.types.integer.md) `$options` = 0): [int](language.types.integer.md)|[false](language.types.singleton.md)

Cria um documento XML a partir da representação DOM. Esta função é geralmente
chamada após construir um novo documento DOM do zero, como no exemplo abaixo.

### Parâmetros

`filename`
:   O caminho para o documento XML salvo.

`options`
:   Opções adicionais. Atualmente, apenas [LIBXML\_NOEMPTYTAG](libxml.constants.md) é suportado.

### Valor Retornado

Retorna o número de bytes gravados ou **`false`** se ocorrer um erro.

### Examples

**Exemplo #1 Salvando uma árvore DOM em um arquivo**

```
<?php

$doc = new DOMDocument('1.0');
// uma saída apresentável
$doc->formatOutput = true;

$root = $doc->createElement('book');
$root = $doc->appendChild($root);

$title = $doc->createElement('title');
$title = $root->appendChild($title);

$text = $doc->createTextNode('Isto é um título.');
$text = $title->appendChild($text);

echo 'Escritos: ' . $doc->save("/tmp/test.xml") . ' bytes'; // Escritos: 72 bytes

?>
```

### Veja também

- [DOMDocument::saveXML()](domdocument.savexml.md) - Despeja a árvore XML interna de volta em uma string
- [DOMDocument::load()](domdocument.load.md) - Carrega XML de um arquivo
- [DOMDocument::loadXML()](domdocument.loadxml.md) - Carrega XML a partir de uma string

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
