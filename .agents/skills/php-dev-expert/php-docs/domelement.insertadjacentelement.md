# Insere um elemento adjacente

> **Fonte / Source:** https://www.php.net/manual/pt_BR/domelement.insertadjacentelement.php

---

# DOMElement::insertAdjacentElement

(PHP 8 >= 8.3.0)

DOMElement::insertAdjacentElement — Insere um elemento adjacente

### Descrição

public function **DOMElement::insertAdjacentElement**([string](language.types.string.md) `$where`, [DOMElement](class.domelement.md) `$element`): [?](language.types.null.md)[DOMElement](class.domelement.md)

Insere um elemento em uma posição relativa dada por `where`.

### Parâmetros

`where`
:   - `beforebegin` - Inserir antes do elemento de destino.
    - `afterbegin` - Inserir como o primeiro filho do elemento de destino.
    - `beforeend` - Inserir como o último filho do elemento de destino.
    - `afterend` - Inserir após o elemento de destino.

`element`
:   O elemento a ser inserido.

### Valor Retornado

Retorna [DOMElement](class.domelement.md) ou **`null`** em caso de falha.

### Examples

**Exemplo #1 Exemplo de **DOMElement::insertAdjacentElement()****

```
<?php

$dom = new DOMDocument();
$dom->loadXML('<?xml version="1.0"?><container><p>foo</p></container>');
$container = $dom->documentElement;
$p = $container->firstElementChild;

$p->insertAdjacentElement('beforebegin', $dom->createElement('A'));
echo $dom->saveXML();
?>
```

O exemplo acima produzirá:

```
<?xml version="1.0"?>
<container><A/><p>foo</p></container>
```

### Veja também

- [DOMElement::insertAdjacentText()](domelement.insertadjacenttext.md) - Insere texto adjacente

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
