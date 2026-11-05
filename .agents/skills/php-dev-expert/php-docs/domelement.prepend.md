# Adiciona nós antes do primeiro nó filho

> **Fonte / Source:** https://www.php.net/manual/pt_BR/domelement.prepend.php

---

# DOMElement::prepend

(PHP 8)

DOMElement::prepend — Adiciona nós antes do primeiro nó filho

### Descrição

public function **DOMElement::prepend**([DOMNode](class.domnode.md)|[string](language.types.string.md) `...$nodes`): [void](language.types.void.md)

Adiciona um ou muitos `nodes` à lista de filhos antes do primeiro nó filho.

### Parâmetros

`nodes`
:   Os nós a serem inseridos.
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

**Exemplo #1 Exemplo de **DOMElement::prepend()****

Adiciona nós no elemento "container".

```
<?php
$doc = new DOMDocument;
$doc->loadXML("<container> world</container>");
$world = $doc->documentElement;

$world->prepend($doc->createElement("hello"), "beautiful");

echo $doc->saveXML();
?>
```

O exemplo acima produzirá:

```
<?xml version="1.0"?>
<container><hello/>beautiful world</container>
```

### Veja também

- [DOMParentNode::prepend()](domparentnode.prepend.md) - Insere nós antes do primeiro nó filho
- [DOMElement::append()](domelement.append.md) - Adiciona nós após o último nó filho

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
