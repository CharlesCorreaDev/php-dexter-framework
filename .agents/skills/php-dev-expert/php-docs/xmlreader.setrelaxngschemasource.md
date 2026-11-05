# Define os dados contendo um esquema RelaxNG

> **Fonte / Source:** https://www.php.net/manual/pt_BR/xmlreader.setrelaxngschemasource.php

---

# XMLReader::setRelaxNGSchemaSource

(PHP 5 >= 5.1.0, PHP 7, PHP 8)

XMLReader::setRelaxNGSchemaSource — Define os dados contendo um esquema RelaxNG

### Descrição

public function **XMLReader::setRelaxNGSchemaSource**([?](language.types.null.md)[string](language.types.string.md) `$source`): [bool](language.types.boolean.md)

Define os dados contendo um esquema RelaxNG a ser usado para validação.

### Parâmetros

`source`
:   String contendo o esquema RelaxNG.

### Valor Retornado

Retorna **`true`** em caso de sucesso ou **`false`** em caso de falha.

### Veja também

- [XMLReader::setRelaxNGSchema()](xmlreader.setrelaxngschema.md) - Define o nome do arquivo ou URI para um esquema RelaxNG
- [XMLReader::setSchema()](xmlreader.setschema.md) - Valida documento contra XSD
- [XMLReader::isValid()](xmlreader.isvalid.md) - Indica se o documento analisado é válido

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
