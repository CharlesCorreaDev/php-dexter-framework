# Obtém um objeto SimpleXMLElement a partir de um nó XML ou HTML

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.simplexml-import-dom.php

---

# simplexml\_import\_dom

(PHP 5, PHP 7, PHP 8)

simplexml\_import\_dom — Obtém um objeto `SimpleXMLElement` a partir de um nó XML ou HTML

### Descrição

function **simplexml\_import\_dom**([object](language.types.object.md) `$node`, [?](language.types.null.md)[string](language.types.string.md) `$class_name` = **`SimpleXMLElement::class`**): [?](language.types.null.md)[SimpleXMLElement](class.simplexmlelement.md)

Esta função recebe um nó de um documento [DOM](book.dom.md)
e o transforma em um nó SimpleXML. O novo objeto pode ser utilizado como um
elemento SimpleXML nativo.

### Parâmetros

`node`
:   Um nó [DOM](book.dom.md)

`class_name`
:   Pode-se utilizar o parâmetro opcional
    **simplexml\_import\_dom()** para retornar um objeto da
    classe especificada. A classe deve estender a classe
    [SimpleXMLElement](class.simplexmlelement.md).

### Valor Retornado

Retorna um [SimpleXMLElement](class.simplexmlelement.md) ou **`null`** em caso de falha.

### Erros/Exceções

Lança um [TypeError](class.typeerror.md) quando for passado um
`node` que não seja XML ou HTML.

### Registro de Alterações

| Versão | Descrição |
| --- | --- |
| 8.4.0 | Adicionado suporte para [Dom\Document](class.dom-document.md). |
| 8.4.0 | Esta função agora lança um [TypeError](class.typeerror.md) ao invés de um [ValueError](class.valueerror.md) quando for passado um `node` que não seja XML ou HTML. |

### Examples

**Exemplo #1 Importando um [DOMDocument](class.domdocument.md)**

```
<?php
$dom = new DOMDocument;
$dom->loadXML('<books><book><title>blah</title></book></books>');
if (!$dom) {
    echo 'Erro ao interpretar o documento';
    exit;
}

$s = simplexml_import_dom($dom);

echo $s->book[0]->title;
?>
```

O exemplo acima produzirá:

```
blah
```

**Exemplo #2 Importando um [Dom\Document](class.dom-document.md)**

```
<?php
$dom = Dom\XMLDocument::createFromString('<livros><livro><titulo>Blá</titulo></livro></livros>');

$s = simplexml_import_dom($dom);

echo $s->livro[0]->titulo;
?>
```

O exemplo acima produzirá:

```
Blá
```

### Veja também

- [dom\_import\_simplexml()](function.dom-import-simplexml.md) - Obtém um objeto DOMAttr ou DOMElement a partir de um
  objeto SimpleXMLElement
- [Uso Básico de SimpleXML](simplexml.examples-basic.md)

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
