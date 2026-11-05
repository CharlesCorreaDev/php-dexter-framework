# Avalia a expressão XPath fornecida e retorna um resultado tipado se possível

> **Fonte / Source:** https://www.php.net/manual/pt_BR/domxpath.evaluate.php

---

# DOMXPath::evaluate

(PHP 5 >= 5.1.0, PHP 7, PHP 8)

DOMXPath::evaluate — 
Avalia a expressão XPath fornecida e retorna um resultado tipado se possível

### Descrição

public function **DOMXPath::evaluate**([string](language.types.string.md) `$expression`, [?](language.types.null.md)[DOMNode](class.domnode.md) `$contextNode` = **`null`**, [bool](language.types.boolean.md) `$registerNodeNS` = **`true`**): [mixed](language.types.mixed.md)

Executa a expressão XPath `expression` fornecida e retorna
um resultado tipado se possível.

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

### Valor Retornado

Retorna um resultado tipado se possível ou uma [DOMNodeList](class.domnodelist.md)
contendo todos os nós que correspondem à expressão XPath `expression`.

Se a `expression` estiver malformada ou o
`contextNode` for inválido,
**DOMXPath::evaluate()** retorna **`false`**.

### Examples

**Exemplo #1 Obtendo a contagem de todos os livros em inglês**

```
<?php

$doc = new DOMDocument;

$doc->load('examples/book-dcobook.xml');

$xpath = new DOMXPath($doc);

$tbody = $doc->getElementsByTagName('tbody')->item(0);

// nossa consulta é relativa ao nó tbody
$query = 'count(row/entry[. = "en"])';

$entries = $xpath->evaluate($query, $tbody);
echo "There are $entries english books\n";

?>
```

O exemplo acima produzirá:

```
There are 2 english books
```

### Veja também

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
