# Obtém o nome de um elemento XML

> **Fonte / Source:** https://www.php.net/manual/pt_BR/simplexmlelement.getname.php

---

# SimpleXMLElement::getName

(PHP 5 >= 5.1.3, PHP 7, PHP 8)

SimpleXMLElement::getName — Obtém o nome de um elemento XML

### Descrição

public function **SimpleXMLElement::getName**(): [string](language.types.string.md)

Obtém o nome do elemento XML.

### Parâmetros

Esta função não possui parâmetros.

### Valor Retornado

O método `getName` retorna uma [string](language.types.string.md) com o nome
da etiqueta XML referenciada pelo objeto SimpleXMLElement.

### Examples

> **Nota**:
>
> Os exemplos listados podem incluir o arquivo `examples/simplexml-data.php`,
> que referem-se a uma string XML encontrada no primeiro exemplo
> do guia de [uso básico](simplexml.examples-basic.md).

**Exemplo #1 Obtendo os nomes dos elementos XML**

```
<?php
include 'examples/simplexml-data.php';
$sxe = new SimpleXMLElement($xmlstr);

echo $sxe->getName() . "\n";

foreach ($sxe->children() as $child)
{
    echo $child->getName() . "\n";
}

?>
```

O exemplo acima produzirá:

```
filmes
filme
```

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
