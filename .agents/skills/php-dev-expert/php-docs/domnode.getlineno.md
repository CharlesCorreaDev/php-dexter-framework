# Obtém o número da linha para um nó

> **Fonte / Source:** https://www.php.net/manual/pt_BR/domnode.getlineno.php

---

# DOMNode::getLineNo

(PHP 5 >= 5.3.0, PHP 7, PHP 8)

DOMNode::getLineNo — Obtém o número da linha para um nó

### Descrição

public function **DOMNode::getLineNo**(): [int](language.types.integer.md)

Obtém o número da linha onde o nó foi definido durante o tempo de análise.

### Parâmetros

Esta função não possui parâmetros.

### Valor Retornado

Retorna o número da linha onde o nó foi definido durante o tempo de análise.
Se o nó foi criado manualmente, o valor retornado será `0`.

### Examples

**Exemplo #1 Exemplo de **DOMNode::getLineNo()****

```
<?php
// Despeja o XML para o exemplo abaixo
$xml = <<<XML
<?xml version="1.0" encoding="utf-8"?>
<root>
    <node />
</root>
XML;

// Cria uma nova instância de DOMDocument
$dom = new DOMDocument;

// Carrega o XML
$dom->loadXML($xml);

// Imprime a linha onde o elemento 'node' foi definido
printf('A tag <node> está definida na linha %d', $dom->getElementsByTagName('node')->item(0)->getLineNo());
?>
```

O exemplo acima produzirá:

```
A tag <node> está definida na linha 3
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
