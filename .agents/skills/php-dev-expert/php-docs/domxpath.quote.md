# Envolve uma string com aspas para uso em uma expressão XPath

> **Fonte / Source:** https://www.php.net/manual/pt_BR/domxpath.quote.php

---

# DOMXPath::quote

(PHP 8 >= 8.4.0)

DOMXPath::quote — 
Envolve uma string com aspas para uso em uma expressão XPath

### Descrição

public static function **DOMXPath::quote**([string](language.types.string.md) `$str`): [string](language.types.string.md)

Envolve `str` com aspas para uso em uma expressão XPath.

### Parâmetros

`str`
:   The string to quote.

### Valor Retornado

Retorna uma string com aspas para ser usada em uma expressão XPath.

### Examples

**Exemplo #1 Fazendo correspondência de valor de atributo com aspas**

```
<?php
$doc = new DOMDocument;
$doc->loadXML(<<<XML
<livros>
    <livro nome="nome com 'aspas'">Título do Livro</livro>
</livros>
XML);

$xpath = new DOMXPath($doc);

$query = "//livro[@nome=" . DOMXPath::quote("nome com 'aspas'") . "]";
echo $query, "\n";

$entries = $xpath->query($query);

foreach ($entries as $entry) {
    echo "Encontrado ", $entry->textContent, "\n";
}
?>
```

O exemplo acima produzirá:

```
//livro[@nome="nome com 'aspas'"]
Encontrado Título do Livro
```

Aspas de tipos misturados também são suportadas:

```
<?php
echo DOMXPath::quote("'estilos' \"de aspas\" diferentes");
?>
```

O exemplo acima produzirá:

```
concat("'estilos' ",'"de aspas" diferentes')
```

### Veja também

- [DOMXPath::evaluate()](domxpath.evaluate.md) - Avalia a expressão XPath fornecida e retorna um resultado tipado se possível
- [DOMXPath::query()](domxpath.query.md) - Avalia a expressão XPath fornecida

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
