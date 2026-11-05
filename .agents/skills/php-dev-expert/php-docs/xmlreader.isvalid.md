# Indica se o documento analisado é válido

> **Fonte / Source:** https://www.php.net/manual/pt_BR/xmlreader.isvalid.php

---

# XMLReader::isValid

(PHP 5 >= 5.1.0, PHP 7, PHP 8)

XMLReader::isValid — Indica se o documento analisado é válido

### Descrição

public function **XMLReader::isValid**(): [bool](language.types.boolean.md)

Retorna um booleano que indica se o documento analisado é válido de acordo com o DTD, um esquema XML ou RelaxNG.
Se não houver esquema e a opção de validação do DTD não for fornecida, este método retornará **`false`**.

### Parâmetros

Esta função não possui parâmetros.

### Valor Retornado

Retorna **`true`** quando o documento é válido ou **`false`** caso contrário.

### Examples

**Exemplo #1 Validando o XML**

```
<?php
$xml = XMLReader::open('examples/book-simple.xml');

// A opção de validação do analisador deve estar habilitada para
// que este método funcione corretamente
$xml->setParserProperty(XMLReader::VALIDATE, true);

var_dump($xml->isValid());
?>
```

### Notas

> **Nota**:
>
> Isso verifica o nó atual, não o documento inteiro.

### Veja também

- [XMLReader::setParserProperty()](xmlreader.setparserproperty.md) - Define opções do analisador
- [XMLReader::setRelaxNGSchema()](xmlreader.setrelaxngschema.md) - Define o nome do arquivo ou URI para um esquema RelaxNG
- [XMLReader::setRelaxNGSchemaSource()](xmlreader.setrelaxngschemasource.md) - Define os dados contendo um esquema RelaxNG
- [XMLReader::setSchema()](xmlreader.setschema.md) - Valida documento contra XSD

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
