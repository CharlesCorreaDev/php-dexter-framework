# Retrocede ao primeiro elemento

> **Fonte / Source:** https://www.php.net/manual/pt_BR/simplexmlelement.rewind.php

---

# SimpleXMLElement::rewind

(PHP 8)

SimpleXMLElement::rewind — Retrocede ao primeiro elemento

### Descrição

public function **SimpleXMLElement::rewind**(): [void](language.types.void.md)

**Aviso**

Antes do PHP 8.0, **SimpleXMLElement::rewind()** era declarado
somente na sub-classe [SimpleXMLIterator](class.simplexmliterator.md).

Este método retrocede o [SimpleXMLElement](class.simplexmlelement.md) para o primeiro elemento.

> **Nota**:
>
> A partir do PHP 8.4.0, chamar métodos de obtenção (como
> [SimpleXMLElement::asXML()](simplexmlelement.asxml.md) ou
> [SimpleXMLElement::getName()](simplexmlelement.getname.md)) ou ao converter um
> [SimpleXMLElement](class.simplexmlelement.md) para uma [string](language.types.string.md) não reinicia
> implicitamente o iterador. Quando necessário, o iterador deve ser
> reiniciado explicitamente chamando este método.

### Parâmetros

Esta função não possui parâmetros.

### Valor Retornado

Nenhum valor é retornado.

### Examples

**Exemplo #1 Retrocedendo para o primeiro elemento**

```
<?php
$xmlElement = new SimpleXMLElement('<livros><livro>PHP Básico</livro><livro>XML Básico</livro></livros>');
$xmlElement->rewind();

var_dump($xmlElement->current());
?>
```

O exemplo acima produzirá:

```
object(SimpleXMLElement)#2 (1) {
  [0]=>
  string(10) "PHP Básico"
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
