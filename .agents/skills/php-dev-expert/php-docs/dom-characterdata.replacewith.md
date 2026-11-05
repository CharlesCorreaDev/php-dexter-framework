# Substitui os dados de caracteres por novos nós

> **Fonte / Source:** https://www.php.net/manual/pt_BR/dom-characterdata.replacewith.php

---

# Dom\CharacterData::replaceWith

(PHP 8 >= 8.4.0)

Dom\CharacterData::replaceWith — Substitui os dados de caracteres por novos nós

### Descrição

public function **Dom\CharacterData::replaceWith**([Dom\Node](class.dom-node.md)|[string](language.types.string.md) `...$nodes`): [void](language.types.void.md)

Substitui os dados de caracteres por novos `nodes`.

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

### Examples

**Exemplo #1 Exemplo de **Dom\CharacterData::replaceWith()****

Substitui os dados de caracteres com novos nós.

```
<?php
$doc = Dom\XMLDocument::createFromString("<container><![CDATA[hello]]></container>");
$cdata = $doc->documentElement->firstChild;

$cdata->replaceWith("beautiful", $doc->createElement("world"));

echo $doc->saveXML();
?>
```

O exemplo acima produzirá:

```
<?xml version="1.0" encoding="UTF-8"?>
<container>beautiful<world/></container>
```

### Veja também

- [Dom\ChildNode::replaceWith()](dom-childnode.replacewith.md) - Substitui o nó por novos nós
- [Dom\CharacterData::after()](dom-characterdata.after.md) - Adiciona nós após os dados de caracteres
- [Dom\CharacterData::before()](dom-characterdata.before.md) - Adiciona nós antes dos dados de caracteres
- [Dom\CharacterData::remove()](dom-characterdata.remove.md) - Remove o nó de dados de caractere

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
