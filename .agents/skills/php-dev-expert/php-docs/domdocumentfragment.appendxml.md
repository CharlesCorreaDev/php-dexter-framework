# Anexa dados XML brutos

> **Fonte / Source:** https://www.php.net/manual/pt_BR/domdocumentfragment.appendxml.php

---

# DOMDocumentFragment::appendXML

(PHP 5 >= 5.1.0, PHP 7, PHP 8)

DOMDocumentFragment::appendXML — Anexa dados XML brutos

### Descrição

public function **DOMDocumentFragment::appendXML**([string](language.types.string.md) `$data`): [bool](language.types.boolean.md)

Anexa dados XML brutos a um DOMDocumentFragment.

Este método não faz parte do padrão DOM. Ele foi criado como uma abordagem mais simples
para anexar um DOMDocumentFragment em um DOMDocument.

Se a intenção for seguir os padrões, será necessário criar um DOMDocument temporário
com uma raiz fictícia e em seguida percorrer os nós filhos da
raiz dos dados XML para anexá-los.

### Parâmetros

`data`
:   XML a ser anexado.

### Valor Retornado

Retorna **`true`** em caso de sucesso ou **`false`** em caso de falha.

### Examples

**Exemplo #1 Anexando dados XML ao seu documento**

```
<?php
$doc = new DOMDocument();
$doc->loadXML("<root/>");
$f = $doc->createDocumentFragment();
$f->appendXML("<foo>text</foo><bar>text2</bar>");
$doc->documentElement->appendChild($f);
echo $doc->saveXML();
?>
```

O exemplo acima produzirá:

```
<?xml version="1.0"?>
<root><foo>text</foo><bar>text2</bar></root>
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
