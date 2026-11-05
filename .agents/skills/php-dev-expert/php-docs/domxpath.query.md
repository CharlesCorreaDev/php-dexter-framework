# Avalia a expressão XPath fornecida

> **Fonte / Source:** https://www.php.net/manual/pt_BR/domxpath.query.php

---

# DOMXPath::query

(PHP 5, PHP 7, PHP 8)

DOMXPath::query — 
Avalia a expressão XPath fornecida

### Descrição

public function **DOMXPath::query**([string](language.types.string.md) `$expression`, [?](language.types.null.md)[DOMNode](class.domnode.md) `$contextNode` = **`null`**, [bool](language.types.boolean.md) `$registerNodeNS` = **`true`**): [mixed](language.types.mixed.md)

Executa a `expression` XPath fornecida.

### Parâmetros

`expression`
:   A expressão XPath a ser executada.

`contextNode`
:   O `contextNode` opcional pode ser especificado para
    realizar consultas XPath relativas. Por padrão, as consultas são relativas ao
    elemento raiz.

`registerNodeNS`
:   Define se deve-se registrar automaticamente os prefixos de espaços de nomes dentro do escopo no nó de contexto para o objeto [DOMXPath](class.domxpath.md).
    Isto pode ser usado para evitar a necessidade de se chamar [DOMXPath::registerNamespace()](domxpath.registernamespace.md) manuallmente para cada espaço de nome dentro do escopo.
    Quando existir um conflito entre prefixos de espaços de nomes, apenas o prefixo do espaço de nome descendente mais próximo será registrado.

### Valor Retornado

Retorna uma [DOMNodeList](class.domnodelist.md) contendo todos os nós que correspondem
à `expression` XPath fornecida. Qualquer expressão que
não retorne nós resultará em uma
[DOMNodeList](class.domnodelist.md) vazia.

Se a `expression` estiver malformada ou o
`contextNode` for inválido,
**DOMXPath::query()** retorna **`false`**.

### Erros/Exceções

Os seguintes erros são possíveis ao usar uma expressão que invoca
retornos de chamada PHP.

- Lança um [Error](class.error.md) se
  um retorno de chamada do PHP for invocado, mas não houver nenhum retorno de chamada registrado
  ou se o retorno de chamada nomeado não tiver sido registrado.
- Lança um [TypeError](class.typeerror.md) se
  a sintaxe `php:function` for usada e o nome do manipulador
  não for uma string.
- Lança um [Error](class.error.md) se
  um objeto não DOM foi retornado de um retorno de chamada.

### Examples

**Exemplo #1 Obtendo todos os livros em inglês**

```
<?php

$doc = new DOMDocument;

// Não queremos nos preocupar com espaços em branco
$doc->preserveWhiteSpace = false;

$doc->load('examples/book-docbook.xml');

$xpath = new DOMXPath($doc);

// Começamos do elemento raiz
$query = '//book/chapter/para/informaltable/tgroup/tbody/row/entry[. = "en"]';

$entries = $xpath->query($query);

foreach ($entries as $entry) {
    echo "Encontrado {$entry->previousSibling->previousSibling->nodeValue}," .
         " por {$entry->previousSibling->nodeValue}\n";
}
?>
```

O exemplo acima produzirá:

```
Encontrado The Grapes of Wrath, por John Steinbeck
Encontrado The Pearl, por John Steinbeck
```

Também podemos usar o parâmetro `contextNode` para encurtar
nossa expressão:

```
<?php

$doc = new DOMDocument;
$doc->preserveWhiteSpace = false;

$doc->load('examples/book-docbook.xml');

$xpath = new DOMXPath($doc);

$tbody = $doc->getElementsByTagName('tbody')->item(0);

// nossa consulta é relativa ao nó tbody
$query = 'row/entry[. = "en"]';

$entries = $xpath->query($query, $tbody);

foreach ($entries as $entry) {
    echo "Encontrado {$entry->previousSibling->previousSibling->nodeValue}," .
         " por {$entry->previousSibling->nodeValue}\n";
}
?>
```

### Veja também

- [DOMXPath::evaluate()](domxpath.evaluate.md) - Avalia a expressão XPath fornecida e retorna um resultado tipado se possível

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
