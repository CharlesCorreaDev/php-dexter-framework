# Adiciona nós após os dados de caracteres

> **Fonte / Source:** https://www.php.net/manual/pt_BR/dom-characterdata.after.php

---

# Dom\CharacterData::after

(PHP 8 >= 8.4.0)

Dom\CharacterData::after — Adiciona nós após os dados de caracteres

### Descrição

public function **Dom\CharacterData::after**([Dom\Node](class.dom-node.md)|[string](language.types.string.md) `...$nodes`): [void](language.types.void.md)

Adiciona os nós informados em `nodes` após os dados de caracteres.

### Parâmetros

`nodes`
:   Nós a serem adicionados após o nó.
    Strings são automaticamente convertidas em nós de texto.

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

### Examples

**Exemplo #1 Exemplo de **Dom\CharacterData::after()****

Adiciona nós após os dados de caracteres.

```
<?php
$doc = Dom\XMLDocument::createFromString("<container><![CDATA[hello]]></container>");
$cdata = $doc->documentElement->firstChild;

$cdata->after("beautiful", $doc->createElement("world"));

echo $doc->saveXML();
?>
```

O exemplo acima produzirá:

```
<?xml version="1.0" encoding="UTF-8"?>
<container><![CDATA[hello]]>beautiful<world/></container>
```

### Veja também

- [Dom\ChildNode::after()](dom-childnode.after.md) - Adiciona nós após o nó
- [Dom\CharacterData::before()](dom-characterdata.before.md) - Adiciona nós antes dos dados de caracteres

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
