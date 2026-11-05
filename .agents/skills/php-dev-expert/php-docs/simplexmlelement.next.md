# Passa para o próximo elemento

> **Fonte / Source:** https://www.php.net/manual/pt_BR/simplexmlelement.next.php

---

# SimpleXMLElement::next

(PHP 8)

SimpleXMLElement::next — Passa para o próximo elemento

### Descrição

public function **SimpleXMLElement::next**(): [void](language.types.void.md)

**Aviso**

Antes do PHP 8.0, **SimpleXMLElement::next()** era declarado
somente na sub-classe [SimpleXMLIterator](class.simplexmliterator.md).

Este método move o [SimpleXMLElement](class.simplexmlelement.md) para o próximo elemento.

### Parâmetros

Esta função não possui parâmetros.

### Valor Retornado

Nenhum valor é retornado.

### Examples

**Exemplo #1 Passando para o próximo elemento**

```
<?php
$xmlElement = new SimpleXMLElement('<livros><livro>PHP Básico</livro><livro>XML Básico</livro></livros>');
$xmlElement->rewind(); // retrocede ao primeiro elemento
$xmlElement->next();

var_dump($xmlElement->current());
?>
```

O exemplo acima produzirá:

```
object(SimpleXMLElement)#2 (1) {
  [0]=>
  string(10) "XML Básico"
}
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
