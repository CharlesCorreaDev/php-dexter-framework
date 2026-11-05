# Obtém um objeto DOMAttr ou DOMElement a partir de um
   objeto SimpleXMLElement

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.dom-import-simplexml.php

---

# dom\_import\_simplexml

(PHP 5, PHP 7, PHP 8)

dom\_import\_simplexml — 
Obtém um objeto [DOMAttr](class.domattr.md) ou [DOMElement](class.domelement.md) a partir de um
objeto [SimpleXMLElement](class.simplexmlelement.md)

### Descrição

function **dom\_import\_simplexml**([object](language.types.object.md) `$node`): [DOMAttr](class.domattr.md)|[DOMElement](class.domelement.md)

Esta função toma o nó `node` de um atributo ou de um elemento (uma
instância de [SimpleXMLElement](class.simplexmlelement.md)) e cria um nó
[DOMAttr](class.domattr.md) ou [DOMElement](class.domelement.md), respectivamente.
O novo [DOMNode](class.domnode.md) refere-se ao mesmo nó XML subjacente
de [SimpleXMLElement](class.simplexmlelement.md).

### Parâmetros

`node`
:   O nó de atributo ou de elemento a importar (uma instância de [SimpleXMLElement](class.simplexmlelement.md)).

### Valor Retornado

O objeto [DOMAttr](class.domattr.md) ou [DOMElement](class.domelement.md).

### Registro de Alterações

| Versão | Descrição |
| --- | --- |
| 8.0.0 | Esta função não retorna mais **`null`** em caso de falha. |

### Examples

**Exemplo #1 Importa SimpleXML para o DOM com **dom\_import\_simplexml()****

```
<?php

$sxe = simplexml_load_string('<livros><livro><titulo>Blá</titulo></livro></livros>');

if ($sxe === false) {
    echo 'Erro ao analisar o documento';
    exit;
}

$dom_sxe = dom_import_simplexml($sxe);
if (!$dom_sxe) {
    echo 'Erro ao converter o XML';
    exit;
}

$dom = new DOMDocument('1.0');
$dom_sxe = $dom->importNode($dom_sxe, true);
$dom_sxe = $dom->appendChild($dom_sxe);

echo $dom->saveXML();

?>
```

O exemplo acima produzirá:

```
<?xml version="1.0"?>
<livros><livro><titulo>Blá</titulo></livro></livros>
```

**Exemplo #2 Importa SimpleXML para o DOM e modifica SimpleXML por meio do DOM**

Tratamento de erros omitido por questões de brevidade.

```
<?php

$sxe = simplexml_load_string('<livros><livro><titulo>Blá</titulo></livro></livros>');
$elt = dom_import_simplexml($sxe);
$elt->setAttribute("foo", "bar");
echo $sxe->asXML();

?>
```

O exemplo acima produzirá:

```
<?xml version="1.0"?>
<livros foo="bar"><livro><titulo>Blá</titulo></livro></livros>
```

### Veja também

- [simplexml\_import\_dom()](function.simplexml-import-dom.md) - Obtém um objeto SimpleXMLElement a partir de um nó XML ou HTML

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
