# Substitui filhos no elemento

> **Fonte / Source:** https://www.php.net/manual/pt_BR/domelement.replacechildren.php

---

# DOMElement::replaceChildren

(PHP 8 >= 8.3.0)

DOMElement::replaceChildren — Substitui filhos no elemento

### Descrição

public function **DOMElement::replaceChildren**([DOMNode](class.domnode.md)|[string](language.types.string.md) `...$nodes`): [void](language.types.void.md)

Substitui os filhos no elemento com novos `nodes`.

### Parâmetros

`nodes`
:   Os nós que substituirão os filhos.
    Strings são automaticamente convertidas em nós de texto.

### Valor Retornado

Nenhum valor é retornado.

### Erros/Exceções

**`DOM_HIERARCHY_REQUEST_ERR`**
:   Emitido se este nó é de um tipo que não permite filhos do
    tipo de um dos `nodes` informados, ou se o nó a ser
    inserido é um dos ancestrais deste nó, ou o próprio nó.

**`DOM_WRONG_DOCUMENT_ERR`**
:   Emitido se um dos `nodes` informados foi criado a partir de um documento
    diferente daquele que criou este nó.

### Registro de Alterações

| Versão | Descrição |
| --- | --- |
| 8.3.0 | Chamar este método em um nó sem um documento proprietário agora funciona. Anteriormente, era lançada uma exceção [DOMException](class.domexception.md) com código **`DOM_HIERARCHY_REQUEST_ERR`**. |

### Examples

**Exemplo #1 Exemplo de **DOMElement::replaceChildren()****

Substitui os filhos com novos nodes.

```
<?php
$doc = new DOMDocument;
$doc->loadXML("<container><hello/></container>");
$container = $doc->documentElement;

$container->replaceWith("beautiful", $doc->createElement("world"));

echo $doc->saveXML();
?>
```

O exemplo acima produzirá:

```
<?xml version="1.0"?>
beautiful
<world/>
```

### Veja também

- [DOMParentNode::replaceChildren()](domparentnode.replacechildren.md) - Substitui filhos no nó
- [DOMElement::replaceWith()](domelement.replacewith.md) - Substitui o elemento por novos nodes
- [DOMElement::after()](domelement.after.md) - Adiciona nós após o elemento
- [DOMElement::before()](domelement.before.md) - Adiciona nós antes do elemento
- [DOMElement::remove()](domelement.remove.md) - Remove o elemento

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
