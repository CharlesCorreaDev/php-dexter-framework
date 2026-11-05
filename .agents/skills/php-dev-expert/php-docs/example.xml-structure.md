# Exemplo de Estrutura de Elemento XML

> **Fonte / Source:** https://www.php.net/manual/pt_BR/example.xml-structure.php

---

## Exemplo de Estrutura de Elemento XML

Este primeiro exemplo exibe a estrutura dos elementos de início em
um documento com indentação.

**Exemplo #1 Mostrar Estrutura de Elemento XML**

```
<?php
$file = "examples/book.xml";
$depth = 0;

function startElement($parser, $name, $attrs)
{
    global $depth;

    for ($i = 0; $i < $depth; $i++) {
        echo "  ";
    }
    echo "$name\n";
    $depth++;
}

function endElement($parser, $name)
{
    global $depth;
    $depth--;
}

$xml_parser = xml_parser_create();
xml_set_element_handler($xml_parser, "startElement", "endElement");
if (!($fp = fopen($file, "r"))) {
    die("could not open XML input");
}

while ($data = fread($fp, 4096)) {
    if (!xml_parse($xml_parser, $data, feof($fp))) {
        die(sprintf("XML error: %s at line %d",
                    xml_error_string(xml_get_error_code($xml_parser)),
                    xml_get_current_line_number($xml_parser)));
    }
}
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
