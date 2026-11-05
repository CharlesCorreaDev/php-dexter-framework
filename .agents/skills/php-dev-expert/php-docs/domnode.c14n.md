# Canonicaliza nós para uma string

> **Fonte / Source:** https://www.php.net/manual/pt_BR/domnode.c14n.php

---

# DOMNode::C14N

(PHP 5 >= 5.2.0, PHP 7, PHP 8)

DOMNode::C14N — Canonicaliza nós para uma string

### Descrição

public function **DOMNode::C14N**(  
    [bool](language.types.boolean.md) `$exclusive` = **`false`**,  
    [bool](language.types.boolean.md) `$withComments` = **`false`**,  
    [?](language.types.null.md)[array](language.types.array.md) `$xpath` = **`null`**,  
    [?](language.types.null.md)[array](language.types.array.md) `$nsPrefixes` = **`null`**  
): [string](language.types.string.md)|[false](language.types.singleton.md)

Canonicaliza nós para uma string

### Parâmetros

`exclusive`
:   Habilita a análise exclusiva apenas dos nós correspondentes à expressão
    xpath fornecida ou aos prefixos de namespace.

`withComments`
:   Mantém comentários na saída.

`xpath`
:   Um array de XPaths pelos quais os nós serão filtrados.
    Cada entrada neste array é um array associativo com:

    - Uma chave `query` requerida, contendo a expressão XPath como uma string.
    - Uma chave `namespaces` opcional, contendo um array que mapeia prefixos de namespaces (chaves) para URIs de namespaces (valores).

`nsPrefixes`
:   Um array de prefixos de namespace para filtrar os nós.

### Valor Retornado

Retorna nós canonizados como uma string ou **`false`** em caso de falha

### Examples

**Exemplo #1 Exemplo com consulta XPath**

Este exemplo demonstra um uso avançado canonizando e filtrando os nós por um consulta XPath.

```
<?php

$dom = new DOMDocument();
$dom->loadXML(<<<XML
<root xmlns:comida="urn:comida">
    <!-- declaração de namespace redundante será canonizada -->
    <comida:fruta xmlns:comida="urn:comida">Maçã</comida:fruta>
    <comida:fruta>Laranja</comida:fruta>
    <comida:fruta>Pera</comida:fruta>
    <!-- folhas aqui -->
    <comida:folha>Alface</comida:folha>
</root>
XML);

echo $dom->C14N(true, false, [
    "query" => ".//f:fruta|.//f:fruta/text()",
    "namespaces" => ["f" => "urn:comida"],
]);
?>
```

O exemplo acima produzirá:

```
<comida:fruta>Maçã</comida:fruta><comida:fruta>Laranja</comida:fruta><comida:fruta>Pera</comida:fruta>
```

### Veja também

- [DOMNode::C14NFile()](domnode.c14nfile.md) - Canonicaliza nós para um arquivo

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
