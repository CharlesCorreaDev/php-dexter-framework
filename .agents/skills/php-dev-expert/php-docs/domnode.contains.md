# Verifica se o nó contém outro nó

> **Fonte / Source:** https://www.php.net/manual/pt_BR/domnode.contains.php

---

# DOMNode::contains

(PHP 8 >= 8.3.0)

DOMNode::contains — Verifica se o nó contém outro nó

### Descrição

public function **DOMNode::contains**([DOMNode](class.domnode.md)|[DOMNameSpaceNode](class.domnamespacenode.md)|[null](language.types.null.md) `$other`): [bool](language.types.boolean.md)

Verifica se o nó contém o nó `other`.

### Parâmetros

`other`
:   Nó a ser verificado.

### Valor Retornado

Retorna **`true`** se o nó contém o nó `other`, **`false`** caso contrário.

### Examples

**Exemplo #1 Exemplo de **DOMNode::contains()****

```
<?php

$dom = new DOMDocument();
$dom->loadXML(<<<XML
<!DOCTYPE HTML>
<html>
   <body>
       <main>
           <p>Hello, world!</p>
       </main>
   </body>
</html>
XML);

$xpath = new DOMXPath($dom);
$main = $xpath->query("//main")[0];

var_dump($dom->documentElement->contains($main));
?>
```

O exemplo acima produzirá:

```
bool(true)
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
