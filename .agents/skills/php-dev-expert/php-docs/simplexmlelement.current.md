# Retorna o elemento atual

> **Fonte / Source:** https://www.php.net/manual/pt_BR/simplexmlelement.current.php

---

# SimpleXMLElement::current

(PHP 8)

SimpleXMLElement::current — Retorna o elemento atual

### Descrição

public function **SimpleXMLElement::current**(): [SimpleXMLElement](class.simplexmlelement.md)

**Aviso**

Antes do PHP 8.0, **SimpleXMLElement::current()** era declarado
somente na sub-classe [SimpleXMLIterator](class.simplexmliterator.md).

Este método retorna o elemento atual como um objeto [SimpleXMLElement](class.simplexmlelement.md).

### Parâmetros

Esta função não possui parâmetros.

### Valor Retornado

Retorna o elemento atual como um objeto [SimpleXMLElement](class.simplexmlelement.md).

### Erros/Exceções

Lança um [Error](class.error.md) em caso de falha.

### Registro de Alterações

| Versão | Descrição |
| --- | --- |
| 8.1.0 | Um [Error](class.error.md) agora é lançado se **SimpleXMLElement::current()** for chamado em um iterador inválido. Anteriormente, **`null`** era retornado. |

### Examples

**Exemplo #1 Retornando o elemento atual**

```
<?php
$xmlElement = new SimpleXMLElement('<books><book>PHP basics</book><book>XML basics</book></books>');

$xmlElement->rewind(); // retrocede ao primeiro elemento, caso contrário current() não funcionará.
var_dump($xmlElement->current());
?>
```

O exemplo acima produzirá:

```
object(SimpleXMLElement)#2 (1) {
  [0]=>
  string(10) "PHP basics"
}
```

### Veja também

- [SimpleXMLElement::key()](simplexmlelement.key.md) - Retorna a chave atual
- [SimpleXMLElement::next()](simplexmlelement.next.md) - Passa para o próximo elemento
- [SimpleXMLElement::rewind()](simplexmlelement.rewind.md) - Retrocede ao primeiro elemento
- [SimpleXMLElement::valid()](simplexmlelement.valid.md) - Verifica se o elemento atual é válido
- [SimpleXMLElement](class.simplexmlelement.md)

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
