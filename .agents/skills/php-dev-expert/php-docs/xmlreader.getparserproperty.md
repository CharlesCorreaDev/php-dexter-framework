# Indica se a propriedade especificada foi definida

> **Fonte / Source:** https://www.php.net/manual/pt_BR/xmlreader.getparserproperty.php

---

# XMLReader::getParserProperty

(PHP 5 >= 5.1.0, PHP 7, PHP 8)

XMLReader::getParserProperty — 
Indica se a propriedade especificada foi definida

### Descrição

public function **XMLReader::getParserProperty**([int](language.types.integer.md) `$property`): [bool](language.types.boolean.md)

Indica se a propriedade especificada foi definida.

### Parâmetros

`property`
:   Uma das [constantes de opção do
    analisador](class.xmlreader.md#xmlreader.constants).

### Valor Retornado

Retorna **`true`** em caso de sucesso ou **`false`** em caso de falha.

### Veja também

- [XMLReader::setParserProperty()](xmlreader.setparserproperty.md) - Define opções do analisador

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
