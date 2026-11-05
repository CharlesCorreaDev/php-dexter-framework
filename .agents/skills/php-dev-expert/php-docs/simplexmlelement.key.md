# Retorna a chave atual

> **Fonte / Source:** https://www.php.net/manual/pt_BR/simplexmlelement.key.php

---

# SimpleXMLElement::key

(PHP 8)

SimpleXMLElement::key — Retorna a chave atual

### Descrição

public function **SimpleXMLElement::key**(): [string](language.types.string.md)

**Aviso**

Antes do PHP 8.0, **SimpleXMLElement::key()** era declarado
somente na sub-classe [SimpleXMLIterator](class.simplexmliterator.md).

Este método obtém o nome da etiqueta XML do elemento atual.

### Parâmetros

Esta função não possui parâmetros.

### Valor Retornado

Retorna o nome da etiqueta XML do elemento referenciado pelo objeto [SimpleXMLElement](class.simplexmlelement.md) atual.

### Erros/Exceções

Lança um [Error](class.error.md) em caso de falha.

### Registro de Alterações

| Versão | Descrição |
| --- | --- |
| 8.1.0 | Um [Error](class.error.md) agora é lançado se **SimpleXMLElement::key()** for chamado em um iterador inválido. Anteriormente, **`false`** era retornado. |

### Examples

**Exemplo #1 Obtendo a chave da etiqueta XML atual**

```
<?php
$xmlElement = new SimpleXMLElement('<livros><livro>PHP Básico</livro><livro>XML Básico</livro></livros>');

try {
    echo var_dump($xmlElement->key());
} catch (Error $e) {
    echo $e->getMessage(), "\n";
}

$xmlElement->rewind(); // retrocede ao primeiro elemento
echo var_dump($xmlElement->key());

?>
```

O exemplo acima produzirá:

```
Iterator not initialized or already consumed
string(5) "livro"
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
