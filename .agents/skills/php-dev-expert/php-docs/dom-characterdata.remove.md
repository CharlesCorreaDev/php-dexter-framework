# Remove o nó de dados de caractere

> **Fonte / Source:** https://www.php.net/manual/pt_BR/dom-characterdata.remove.php

---

# Dom\CharacterData::remove

(PHP 8 >= 8.4.0)

Dom\CharacterData::remove — Remove o nó de dados de caractere

### Descrição

public function **Dom\CharacterData::remove**(): [void](language.types.void.md)

Remove os dados do caractere.

### Parâmetros

Esta função não possui parâmetros.

### Valor Retornado

Nenhum valor é retornado.

### Examples

**Exemplo #1 Exemplo de **Dom\CharacterData::remove()****

Remove os dados de caracteres.

```
<?php
$doc = Dom\XMLDocument::createFromString("<container><![CDATA[hello]]><world/></container>");
$cdata = $doc->documentElement->firstChild;

$cdata->remove();

echo $doc->saveXML();
?>
```

O exemplo acima produzirá:

```
<?xml version="1.0" encoding="UTF-8"?>
<container><world/></container>
```

### Veja também

- [Dom\ChildNode::remove()](dom-childnode.remove.md) - Remove o nó
- [Dom\CharacterData::after()](dom-characterdata.after.md) - Adiciona nós após os dados de caracteres
- [Dom\CharacterData::before()](dom-characterdata.before.md) - Adiciona nós antes dos dados de caracteres
- [Dom\CharacterData::replaceWith()](dom-characterdata.replacewith.md) - Substitui os dados de caracteres por novos nós
- **Dom\Node::removeChild()**

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
