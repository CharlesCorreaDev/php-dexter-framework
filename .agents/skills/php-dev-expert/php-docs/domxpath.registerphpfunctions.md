# Registra funções PHP como funções XPath

> **Fonte / Source:** https://www.php.net/manual/pt_BR/domxpath.registerphpfunctions.php

---

# DOMXPath::registerPhpFunctions

(PHP 5 >= 5.3.0, PHP 7, PHP 8)

DOMXPath::registerPhpFunctions — Registra funções PHP como funções XPath

### Descrição

public function **DOMXPath::registerPhpFunctions**([string](language.types.string.md)|[array](language.types.array.md)|[null](language.types.null.md) `$restrict` = **`null`**): [void](language.types.void.md)

Este método permite o uso de funções PHP dentro de expressões XPath.

### Parâmetros

`restrict`
:   Use este parâmetro para permitir apenas que certas funções sejam chamadas do XPath.

    Este parâmetro pode ser um dos seguintes:
    uma [string](language.types.string.md) (um nome de função),
    um [array](language.types.array.md) indexado de nomes de funções
    ou um [array](language.types.array.md) associativo com chaves nos nomes de funções
    e valores associados sendo do tipo [callable](language.types.callable.md).

### Valor Retornado

Nenhum valor é retornado.

### Erros/Exceções

- Lança uma exceção [ValueError](class.valueerror.md) se
  um nome de chamada de retorno não for válido.
- Lança uma exceção [ValueError](class.valueerror.md) se
  `options` contiver uma opção inválida.
- Lança uma exceção [ValueError](class.valueerror.md) s
  `overrideEncoding` for uma codificação desconhecida.
- Lança uma exceção [TypeError](class.typeerror.md) se
  uma função de retorno informada não for chamável.

### Registro de Alterações

| Versão | Descrição |
| --- | --- |
| 8.4.0 | Nomes de retorno de chamada inválidos agora lançam uma exceção [ValueError](class.valueerror.md). Passar uma entrada que não pode ser chamada agora lança uma exceção [TypeError](class.typeerror.md). |
| 8.4.0 | Agora é possível usar [callable](language.types.callable.md)s para funções de retorno ao usar `restrict` com entradas de [array](language.types.array.md). |

### Examples

Os exemplos a seguir usam book.xml que contém o seguinte:

**Exemplo #1 book.xml**

```
<?xml version="1.0" encoding="UTF-8"?>
<books>
 <book>
  <title>PHP Basics</title>
  <author>Jim Smith</author>
  <author>Jane Smith</author>
 </book>
 <book>
  <title>PHP Secrets</title>
  <author>Jenny Smythe</author>
 </book>
 <book>
  <title>XML basics</title>
  <author>Joe Black</author>
 </book>
</books>
```

**Exemplo #2 **DOMXPath::registerPhpFunctions()** com `php:functionString`**

```
<?php
$doc = new DOMDocument;
$doc->load('examples/book-simple.xml');

$xpath = new DOMXPath($doc);

// Registra o namespace php: (obrigatório)
$xpath->registerNamespace("php", "http://php.net/xpath");

// Registra funções PHP (sem restrições)
$xpath->registerPhpFunctions();

// hama a função substr no título do livro
$nodes = $xpath->query('//book[php:functionString("substr", title, 0, 3) = "PHP"]');

echo "Encontrados {$nodes->length} livros que iniciam com 'PHP':\n";
foreach ($nodes as $node) {
    $title  = $node->getElementsByTagName("title")->item(0)->nodeValue;
    $author = $node->getElementsByTagName("author")->item(0)->nodeValue;
    echo "$title por $author\n";
}

?>
```

O exemplo acima produzirá
algo semelhante a:

```
Encontrados 2 livros que iniciam com 'PHP':
PHP Basics por Jim Smith
PHP Secrets por Jenny Smythe
```

**Exemplo #3 **DOMXPath::registerPhpFunctions()** com `php:function`**

```
<?php
$doc = new DOMDocument;
$doc->load('examples/book-simple.xml');

$xpath = new DOMXPath($doc);

// Registra o namespace php: (obrigatório)
$xpath->registerNamespace("php", "http://php.net/xpath");

// Registra funções PHP (apenas has_multiple)
$xpath->registerPhpFunctions("has_multiple");

function has_multiple($nodes) {
    // Retorna true se mais de um autor
    return count($nodes) > 1;
}
// Filtra livros com múltiplos autores
$books = $xpath->query('//book[php:function("has_multiple", author)]');

echo "Livros com múltiplos autores:\n";
foreach ($books as $book) {
    echo $book->getElementsByTagName("title")->item(0)->nodeValue . "\n";
}

?>
```

O exemplo acima produzirá
algo semelhante a:

```
Livros com múltiplos autores:
PHP Basics
```

**Exemplo #4 **DOMXPath::registerPhpFunctions()** com um [callable](language.types.callable.md)**

```
<?php
$doc = new DOMDocument;
$doc->load('examples/book-simple.xml');

$xpath = new DOMXPath($doc);

// Registra o namespace php: (necessário)
$xpath->registerNamespace("php", "http://php.net/xpath");

// Registra funções PHP (somente has_multiple)
$xpath->registerPhpFunctions(["has_multiple" => fn ($nodes) => count($nodes) > 1]);

// Filtra livros com múltiplos autores
$books = $xpath->query('//book[php:function("has_multiple", author)]');

echo "Livros com múltiplos autores:\n";
foreach ($books as $book) {
    echo $book->getElementsByTagName("title")->item(0)->nodeValue . "\n";
}

?>
```

O exemplo acima produzirá
algo semelhante a:

```
Livros com múltiplos autores:
PHP Basics
```

### Veja também

- [DOMXPath::registerNamespace()](domxpath.registernamespace.md) - Registra o namespace com o objeto DOMXPath
- [DOMXPath::query()](domxpath.query.md) - Avalia a expressão XPath fornecida
- [DOMXPath::evaluate()](domxpath.evaluate.md) - Avalia a expressão XPath fornecida e retorna um resultado tipado se possível
- [XSLTProcessor::registerPHPFunctions()](xsltprocessor.registerphpfunctions.md) - Habilita o uso de funções do PHP como funções XSLT

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
