# Use o analisador XML dentro de um objeto

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.xml-set-object.php

---

# xml\_set\_object

(PHP 4, PHP 5, PHP 7, PHP 8)

xml\_set\_object — Use o analisador XML dentro de um objeto

**Aviso**

Esta função foi
*DESCONTINUADA* a partir do PHP 8.4.0. O uso desta função
é fortemente desencorajado.

### Descrição

#[[\Deprecated](class.deprecated.md)]  
function **xml\_set\_object**([XMLParser](class.xmlparser.md) `$parser`, [object](language.types.object.md) `$object`): [true](language.types.singleton.md)

Esta função permite usar `parser` dentro
de `object`. Todas as funções de retorno de chamada podem ser definidas com
[xml\_set\_element\_handler()](function.xml-set-element-handler.md) etc e assumidas como
métodos de `object`.

### Parâmetros

`parser`
:   Uma referência ao analisador XML a ser usado dentro do objeto.

`object`
:   O objeto onde usar o analisador XML.

### Valor Retornado

Sempre retorna **`true`**.

### Registro de Alterações

| Versão | Descrição |
| --- | --- |
| 8.4.0 | Esta função agora foi descontinuada, deve-se passar valores do tipo [callable](language.types.callable.md) apropriados para **xml\_set\_()**. |
| 8.0.0 | O parâmetro `parser` agora espera uma instância de [XMLParser](class.xmlparser.md); anteriormente, um [resource](language.types.resource.md) `xml` válido era esperado. |

### Examples

**Exemplo #1 Exemplo de **xml\_set\_object()****

```
<?php
class CustomXMLParser
{
    private $parser;

    function __construct()
    {
        $this->parser = xml_parser_create();

        xml_set_object($this->parser, $this);
        xml_set_element_handler($this->parser, "tag_open", "tag_close");
        xml_set_character_data_handler($this->parser, "cdata");
    }

    function parse($data)
    {
        xml_parse($this->parser, $data);
    }

    function tag_open($parser, $tag, $attributes)
    {
        var_dump($tag, $attributes);
    }

    function cdata($parser, $cdata)
    {
        var_dump($cdata);
    }

    function tag_close($parser, $tag)
    {
        var_dump($tag);
    }
}

$xml_parser = new CustomXMLParser();
$xml_parser->parse("<A ID='hallo'>PHP</A>");
?>
```

O exemplo acima produzirá:

```
string(1) "A"
array(1) {
  ["ID"]=>
  string(5) "hallo"
}
string(3) "PHP"
string(1) "A"
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
