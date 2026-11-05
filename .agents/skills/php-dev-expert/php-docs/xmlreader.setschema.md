# Valida documento contra XSD

> **Fonte / Source:** https://www.php.net/manual/pt_BR/xmlreader.setschema.php

---

# XMLReader::setSchema

(PHP 5 >= 5.2.0, PHP 7, PHP 8)

XMLReader::setSchema — Valida documento contra XSD

### Descrição

public function **XMLReader::setSchema**([?](language.types.null.md)[string](language.types.string.md) `$filename`): [bool](language.types.boolean.md)

Utiliza esquema W3C XSD para validar o documento enquanto ele é processado. A ativação
é possível somente antes da primeira chamada a read().

### Parâmetros

`filename`
:   O nome do arquivo do esquema XSD.

### Valor Retornado

Retorna **`true`** em caso de sucesso ou **`false`** em caso de falha.

### Erros/Exceções

Emite **`E_WARNING`** se o libxml foi compilado sem
suporte a esquema, o esquema contém erros ou se
[XMLReader::read()](xmlreader.read.md) já foi chamado.

### Notas

**Cuidado**

Esta função só estará disponível quando o PHP for compilado com a libxml 20620 ou superior.

### Veja também

- [XMLReader::setRelaxNGSchema()](xmlreader.setrelaxngschema.md) - Define o nome do arquivo ou URI para um esquema RelaxNG
- [XMLReader::setRelaxNGSchemaSource()](xmlreader.setrelaxngschemasource.md) - Define os dados contendo um esquema RelaxNG
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
