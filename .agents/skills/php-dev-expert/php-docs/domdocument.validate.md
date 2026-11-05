# Valida o documento com base em seu DTD

> **Fonte / Source:** https://www.php.net/manual/pt_BR/domdocument.validate.php

---

# DOMDocument::validate

(PHP 5, PHP 7, PHP 8)

DOMDocument::validate — 
Valida o documento com base em seu DTD

### Descrição

public function **DOMDocument::validate**(): [bool](language.types.boolean.md)

Valida o documento com base em seu DTD.

Pode-se também usar a propriedade `validateOnParse` de
[DOMDocument](class.domdocument.md) para fazer uma validação DTD.

### Parâmetros

Esta função não possui parâmetros.

### Valor Retornado

Retorna **`true`** em caso de sucesso ou **`false`** em caso de falha.
Se o documento não tiver um DTD anexado, este método retornará **`false`**.

### Examples

**Exemplo #1 Exemplo de validação DTD**

```
<?php
$dom = new DOMDocument;
$dom->load('examples/book.xml');
if ($dom->validate()) {
    echo "Este documento é válido!\n";
}
?>
```

Pode-se também validar o arquivo XML durante o carregamento:

```
<?php
$dom = new DOMDocument;
$dom->validateOnParse = true;
$dom->load('examples/book.xml');
?>
```

### Veja também

- [DOMDocument::schemaValidate()](domdocument.schemavalidate.md) - Valida um documento com base em um esquema. Apenas XML Schema 1.0 é suportado.
- [DOMDocument::schemaValidateSource()](domdocument.schemavalidatesource.md) - Valida um documento com base em um esquema
- [DOMDocument::relaxNGValidate()](domdocument.relaxngvalidate.md) - Realiza a validação relaxNG no documento
- [DOMDocument::relaxNGValidateSource()](domdocument.relaxngvalidatesource.md) - Realiza a validação relaxNG no documento

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
