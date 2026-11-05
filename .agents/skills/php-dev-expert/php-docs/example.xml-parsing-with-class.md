# Interpretando XML Com Classes

> **Fonte / Source:** https://www.php.net/manual/pt_BR/example.xml-parsing-with-class.php

---

## Interpretando XML Com Classes

Este exemplo mostra como usar uma classe com manipuladores.

**Exemplo #1 Mostrando a Estrutura de Elemento XML**

```
<?php
$file = "examples/book.xml";

class CustomXMLParser
{
    private $fp;
    private $parser;
    private $depth = 0;

    function __construct(string $file)
    {
        if (!($this->fp = fopen($file, 'r'))) {
            throw new RunTimeException("could not open XML file '{$file}'");
        }

        $this->parser = xml_parser_create();

        xml_set_element_handler($this->parser, self::startElement(...), self::endElement(...));
        xml_set_character_data_handler($this->parser, self::cdata(...));
    }

    private function startElement($parser, $name, $attrs)
    {
        for ($i = 0; $i < $this->depth; $i++) {
            echo "  ";
        }
        echo "$name\n";
        $this->depth++;
    }

    private function endElement($parser, $name)
    {
        $this->depth--;
    }

    private function cdata($parse, $cdata)
    {
        if (trim($cdata) === '') {
            return;
        }
        for ($i = 0; $i < $this->depth; $i++) {
            echo "  ";
        }
        echo trim($cdata), "\n";
    }

    public function parse()
    {
        while ($data = fread($this->fp, 4096)) {
            if (!xml_parse($this->parser, $data, feof($this->fp))) {
                throw new RunTimeException(
                    sprintf(
                        "Erro XML: %s at line %d",
                        xml_error_string(xml_get_error_code($this->parser)),
                        xml_get_current_line_number($this->parser)
                    )
                );
            }
        }
    }
}

$xmlParser = new CustomXMLParser($file);
$xmlParser->parse();
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
