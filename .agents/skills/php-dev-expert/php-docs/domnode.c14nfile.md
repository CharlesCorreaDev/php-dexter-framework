# Canonicaliza nós para um arquivo

> **Fonte / Source:** https://www.php.net/manual/pt_BR/domnode.c14nfile.php

---

# DOMNode::C14NFile

(PHP 5 >= 5.2.0, PHP 7, PHP 8)

DOMNode::C14NFile — Canonicaliza nós para um arquivo

### Descrição

public function **DOMNode::C14NFile**(  
    [string](language.types.string.md) `$uri`,  
    [bool](language.types.boolean.md) `$exclusive` = **`false`**,  
    [bool](language.types.boolean.md) `$withComments` = **`false`**,  
    [?](language.types.null.md)[array](language.types.array.md) `$xpath` = **`null`**,  
    [?](language.types.null.md)[array](language.types.array.md) `$nsPrefixes` = **`null`**  
): [int](language.types.integer.md)|[false](language.types.singleton.md)

Canonicar nós para um arquivo.

### Parâmetros

`uri`
:   Caminho para escrever a saída.

`exclusive`
:   Habilitar a análise exclusiva apenas dos nós correspondentes ao
    xpath fornecido ou aos prefixos de namespace.

`withComments`
:   Manter comentários na saída.

`xpath`
:   Um array de XPaths pelos quais os nós serão filtrados.
    Cada entrada neste array é um array associativo com:

    - Uma chave `query` requerida, contendo a expressão XPath como uma string.
    - Uma chave `namespaces` opcional, contendo um array que mapeia prefixos de namespaces (chaves) para URIs de namespaces (valores).

`nsPrefixes`
:   Um array de prefixos de namespace para filtrar os nós.

### Valor Retornado

Número de bytes escritos ou **`false`** em caso de falha

### Veja também

- [DOMNode::C14N()](domnode.c14n.md) - Canonicaliza nós para uma string

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
