# Alterna atributo

> **Fonte / Source:** https://www.php.net/manual/pt_BR/domelement.toggleattribute.php

---

# DOMElement::toggleAttribute

(PHP 8 >= 8.3.0)

DOMElement::toggleAttribute — Alterna atributo

### Descrição

public function **DOMElement::toggleAttribute**([string](language.types.string.md) `$qualifiedName`, [?](language.types.null.md)[bool](language.types.boolean.md) `$force` = **`null`**): [bool](language.types.boolean.md)

Alterna o atributo.

### Parâmetros

`qualifiedName`
:   O nome qualificado do atributo.

`force`
:   - se **`null`**, a função alternará o atributo.
    - se **`true`**, a função adiciona o atributo.
    - se **`false`**, a função remove o atributo.

### Valor Retornado

Retorna **`true`** se o atributo estiver presente após a conclusão da chamada, **`false`** caso contrário.

### Examples

**Exemplo #1 Exemplo de **DOMElement::toggleAttribute()****

```
<?php

$dom = new DOMDocument();
$dom->loadXML("<?xml version='1.0'?><container selected=\"\"/>");

var_dump($dom->documentElement->toggleAttribute('selected'));
echo $dom->saveXML() . PHP_EOL;

var_dump($dom->documentElement->toggleAttribute('selected'));
echo $dom->saveXML();
?>
```

O exemplo acima produzirá:

```
bool(false)
<?xml version="1.0"?>
<container/>

bool(true)
<?xml version="1.0"?>
<container selected=""/>
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
