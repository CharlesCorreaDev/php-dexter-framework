# Substitui o elemento por novos nodes

> **Fonte / Source:** https://www.php.net/manual/pt_BR/domelement.replacewith.php

---

# DOMElement::replaceWith

(PHP 8)

DOMElement::replaceWith — Substitui o elemento por novos nodes

### Descrição

public function **DOMElement::replaceWith**([DOMNode](class.domnode.md)|[string](language.types.string.md) `...$nodes`): [void](language.types.void.md)

Substitui o elemento por novos `nodes`.

### Parâmetros

`nodes`
:   Os nós de substituição.
    As strings são automaticamente convertidas em nós de texto.

### Valor Retornado

Nenhum valor é retornado.

### Erros/Exceções

**`DOM_HIERARCHY_REQUEST_ERR`**
:   Emitido se o pai é de um tipo que não permite filhos do
    tipo de um dos `nodes` informados, ou se o nó a ser
    inserido é um dos ancestrais deste nó, ou este próprio nó.

**`DOM_WRONG_DOCUMENT_ERR`**
:   Emitido se um dos `nodes` informados foi criado a partir de um documento
    diferente daquele que criou este nó.

### Registro de Alterações

| Versão | Descrição |
| --- | --- |
| 8.3.0 | Chamar este método em um nó sem pai agora é uma operação sem efeito para alinhar o comportamento com a especificação do DOM. Anteriormente, era lançada uma exceção [DOMException](class.domexception.md) com código **`DOM_HIERARCHY_REQUEST_ERR`**. |

### Examples

**Exemplo #1 Exemplo de **DOMElement::replaceWith()****

Substitui o elemento por novos nodes.

```
<?php
$doc = new DOMDocument;
$doc->loadXML("<container><hello/></container>");
$cdata = $doc->documentElement->firstChild;

$cdata->replaceWith("beautiful", $doc->createElement("world"));

echo $doc->saveXML();
?>
```

O exemplo acima produzirá:

```
<?xml version="1.0"?>
<container>beautiful<world/></container>
```

### Veja também

- [DOMChildNode::replaceWith()](domchildnode.replacewith.md) - Substitui o nó por novos nós
- [DOMElement::replaceChildren()](domelement.replacechildren.md) - Substitui filhos no elemento
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
