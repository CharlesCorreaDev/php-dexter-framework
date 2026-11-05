# Verifica se o elemento atual é válido

> **Fonte / Source:** https://www.php.net/manual/pt_BR/simplexmlelement.valid.php

---

# SimpleXMLElement::valid

(No version information available, might only be in Git)

SimpleXMLElement::valid — Verifica se o elemento atual é válido

### Descrição

public function **SimpleXMLElement::valid**(): [bool](language.types.boolean.md)

**Aviso**

Antes do PHP 8.0, **SimpleXMLElement::valid()** era declarado
somente na sub-classe [SimpleXMLIterator](class.simplexmliterator.md).

Este método verifica se o elemento atual é válido após chamadas a
[SimpleXMLElement::rewind()](simplexmlelement.rewind.md) ou
[SimpleXMLElement::next()](simplexmlelement.next.md).

### Parâmetros

Esta função não possui parâmetros.

### Valor Retornado

Retorna **`true`** se o elemento atual for válido, caso contrário **`false`**

### Examples

**Exemplo #1 Verificando se o elemento atual é válido**

```
<?php
$xmlElement = new SimpleXMLElement('<livros><livro>SQL Básico</livro></livros>');

$xmlElement->rewind(); // retrocede ao primeiro elemento
echo var_dump($xmlElement->valid()); // bool(true)

$xmlElement->next(); // avança para o próximo elemento
echo var_dump($xmlElement->valid()); // bool(false) porque só existe um elemento
?>
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
