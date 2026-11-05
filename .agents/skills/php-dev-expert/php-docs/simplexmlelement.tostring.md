# Retorna o conteúdo como uma string

> **Fonte / Source:** https://www.php.net/manual/pt_BR/simplexmlelement.tostring.php

---

# SimpleXMLElement::\_\_toString

(PHP 5 >= 5.3.0, PHP 7, PHP 8)

SimpleXMLElement::\_\_toString — Retorna o conteúdo como uma string

### Descrição

public function **SimpleXMLElement::\_\_toString**(): [string](language.types.string.md)

Retorna o texto que está contido diretamente no elemento.
Não retorna o texto que está dentro de elementos filhos.

### Parâmetros

Esta função não possui parâmetros.

### Valor Retornado

Retorna o conteúdo como uma string em caso de sucesso ou uma string vazia, se falhar.

### Examples

**Exemplo #1 Recuperando o conteúdo como uma string**

```
<?php
$xml = new SimpleXMLElement('<a>1 <b>2 </b>3</a>');
echo $xml;
?>
```

O exemplo acima produzirá:

```
1 3
```

### Veja também

- [SimpleXMLElement::asXML()](simplexmlelement.asxml.md) - Retorna uma string XML bem formada (well-formed) baseada em um elemento SimpleXML

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
