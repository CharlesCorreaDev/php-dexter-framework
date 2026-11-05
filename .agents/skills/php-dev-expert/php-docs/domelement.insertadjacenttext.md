# Insere texto adjacente

> **Fonte / Source:** https://www.php.net/manual/pt_BR/domelement.insertadjacenttext.php

---

# DOMElement::insertAdjacentText

(PHP 8 >= 8.3.0)

DOMElement::insertAdjacentText — Insere texto adjacente

### Descrição

public function **DOMElement::insertAdjacentText**([string](language.types.string.md) `$where`, [string](language.types.string.md) `$data`): [void](language.types.void.md)

Insere texto em uma posição relativa indicada por `where`.

### Parâmetros

`where`
:   - `beforebegin` - Inserir antes do elemento de destino.
    - `afterbegin` - Inserir como o primeiro filho do elemento de destino.
    - `beforeend` - Inserir como o último filho do elemento de destino.
    - `afterend` - Inserir após o elemento de destino.

`data`
:   A string a ser inserida.

### Valor Retornado

Nenhum valor é retornado.

### Examples

**Exemplo #1 Exemplo de **DOMElement::insertAdjacentText()****

```
<?php

$dom = new DOMDocument();
$dom->loadXML('<?xml version="1.0"?><container><p>H</p></container>');

$container = $dom->documentElement;
$p = $container->firstElementChild;

$p->insertAdjacentText("afterbegin", "P");
$p->insertAdjacentText("beforeend", "P");

echo $dom->saveXML();
?>
```

O exemplo acima produzirá:

```
<?xml version="1.0"?>
<container><p>PHP</p></container>
```

### Veja também

- [DOMElement::insertAdjacentElement()](domelement.insertadjacentelement.md) - Insere um elemento adjacente

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
