# Transfere um nó de outro documento

> **Fonte / Source:** https://www.php.net/manual/pt_BR/domdocument.adoptnode.php

---

# DOMDocument::adoptNode

(PHP >= 8.3)

DOMDocument::adoptNode — Transfere um nó de outro documento

### Descrição

public function **DOMDocument::adoptNode**([DOMNode](class.domnode.md) `$node`): [DOMNode](class.domnode.md)|[false](language.types.singleton.md)

Transfere um nó de outro documento para o documento atual.

### Parâmetros

`node`
:   O nó a ser transferido.

### Valor Retornado

O nó que foi transferido, ou **`false`** em caso de erro.

### Erros/Exceções

Pode lançar um [DOMException](class.domexception.md) com os
seguintes códigos de erro:

**`DOM_NOT_SUPPORTED_ERR`**
:   Gerado se o tipo de nó não é suportado para transferências de documentos.

### Examples

**Exemplo #1 Exemplo de **DOMDocument::adoptNode()****

Transfere o elemento hello do primeiro documento para o segundo.

```
<?php
$doc1 = new DOMDocument;
$doc1->loadXML("<container><hello><world/></hello></container>");
$hello = $doc1->documentElement->firstChild;

$doc2 = new DOMDocument;
$doc2->loadXML("<root/>");
$doc2->documentElement->appendChild($doc2->adoptNode($hello));

echo $doc1->saveXML() . PHP_EOL . PHP_EOL;
echo $doc2->saveXML();
?>
```

O exemplo acima produzirá:

```
<?xml version="1.0"?>
<container/>

<?xml version="1.0"?>
<root><hello><world/></hello></root>
```

### Veja também

- [DOMDocument::importNode()](domdocument.importnode.md) - Importa um nó para o documento atual

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
