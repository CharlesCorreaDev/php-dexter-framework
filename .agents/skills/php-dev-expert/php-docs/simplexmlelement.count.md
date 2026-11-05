# Conta os filhos de um elemento

> **Fonte / Source:** https://www.php.net/manual/pt_BR/simplexmlelement.count.php

---

# SimpleXMLElement::count

(PHP 8)

SimpleXMLElement::count — Conta os filhos de um elemento

### Descrição

public function **SimpleXMLElement::count**(): [int](language.types.integer.md)

Este método conta o número de filhos de um elemento.

### Parâmetros

Esta função não possui parâmetros.

### Valor Retornado

Retorna o número de elementos de um elemento.

### Examples

**Exemplo #1 Contando o número de filhos**

```
<?php
$xml = <<<EOF
<people>
 <person name="Person 1">
  <child/>
  <child/>
  <child/>
 </person>
 <person name="Person 2">
  <child/>
  <child/>
  <child/>
  <child/>
  <child/>
 </person>
</people>
EOF;

$elem = new SimpleXMLElement($xml);

foreach ($elem as $person) {
    printf("%s has got %d children.\n", $person['name'], $person->count());
}
?>
```

O exemplo acima produzirá:

```
Person 1 has got 3 children.
Person 2 has got 5 children.
```

### Veja também

- [SimpleXMLElement::children()](simplexmlelement.children.md) - Encontra os nós filhos de um dado nó

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
