# Verifica se ambos os nós são iguais

> **Fonte / Source:** https://www.php.net/manual/pt_BR/domnode.isequalnode.php

---

# DOMNode::isEqualNode

(PHP 8 >= 8.3.0)

DOMNode::isEqualNode — Verifica se ambos os nós são iguais

### Descrição

public function **DOMNode::isEqualNode**([?](language.types.null.md)[DOMNode](class.domnode.md) `$otherNode`): [bool](language.types.boolean.md)

Verifica se ambos os nós são iguais.

### Parâmetros

`otherNode`
:   O nó.

### Valor Retornado

Retorna **`true`** se ambos os nós forem iguais, **`false`** caso contrário.

### Examples

**Exemplo #1 Exemplo de **DOMNode::isEqualNode()****

```
<?php

$dom1 = (new DOMDocument())->createElement('h1', 'Hello World!');
$dom2 = (new DOMDocument())->createElement('h1', 'Hello World!');

var_dump($dom1->isEqualNode($dom2));
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
