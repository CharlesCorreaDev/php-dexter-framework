# Define opções do analisador

> **Fonte / Source:** https://www.php.net/manual/pt_BR/xmlreader.setparserproperty.php

---

# XMLReader::setParserProperty

(PHP 5 >= 5.1.0, PHP 7, PHP 8)

XMLReader::setParserProperty — Define opções do analisador

### Descrição

public function **XMLReader::setParserProperty**([int](language.types.integer.md) `$property`, [bool](language.types.boolean.md) `$value`): [bool](language.types.boolean.md)

Define opções do analisador. As opções devem ser definidas após as chamadas de
[XMLReader::open()](xmlreader.open.md) ou
[XMLReader::XML()](xmlreader.xml.md) e antes da primeira
chamada de [XMLReader::read()](xmlreader.read.md).

### Parâmetros

`property`
:   Uma das [constantes de opções
    do analisador](class.xmlreader.md#xmlreader.constants).

`value`
:   Se definido como **`true`**, a opção será ativada; caso contrário,
    será desativada.

### Valor Retornado

Retorna **`true`** em caso de sucesso ou **`false`** em caso de falha.

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
