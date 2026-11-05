# Remove o nó de dados de caractere

> **Fonte / Source:** https://www.php.net/manual/pt_BR/domcharacterdata.remove.php

---

# DOMCharacterData::remove

(PHP 8)

DOMCharacterData::remove — Remove o nó de dados de caractere

### Descrição

public function **DOMCharacterData::remove**(): [void](language.types.void.md)

Remove os dados do caractere.

### Parâmetros

Esta função não possui parâmetros.

### Valor Retornado

Nenhum valor é retornado.

### Examples

**Exemplo #1 Exemplo de **DOMCharacterData::remove()****

Remove o nó de dados de caractere.

```
<?php
$doc = new DOMDocument;
$doc->loadXML("<container><![CDATA[hello]]><world/></container>");
$cdata = $doc->documentElement->firstChild;

$cdata->remove();

echo $doc->saveXML();
?>
```

O exemplo acima produzirá:

```
<?xml version="1.0"?>
<container><world/></container>
```

### Veja também

- [DOMChildNode::remove()](domchildnode.remove.md) - Remove o nó
- [DOMCharacterData::after()](domcharacterdata.after.md) - Adiciona nós após os dados de caracteres
- [DOMCharacterData::before()](domcharacterdata.before.md) - Adiciona nós antes dos dados de caracteres
- [DOMCharacterData::replaceWith()](domcharacterdata.replacewith.md) - Substitui os dados de caracteres por novos nós
- [DOMNode::removeChild()](domnode.removechild.md) - Remove um filho da lista de filhos

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
