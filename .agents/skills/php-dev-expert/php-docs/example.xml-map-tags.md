# Exemplo de Mapeamento de Tags XML

> **Fonte / Source:** https://www.php.net/manual/pt_BR/example.xml-map-tags.php

---

## Exemplo de Mapeamento de Tags XML

**Exemplo #1 Mapear XML para HTML**

Este exemplo mapeia tags em um documento XML diretamente para tags
HTML. Elementos não encontrados na "matriz de mapeamento" são ignorados.
Obviamente, este exemplo funcionará apenas com um tipo específico de
documento XML.

```
<?php
$file = "examples/book.xml";
$map_array = array(
    "BOLD"     => "B",
    "EMPHASIS" => "I",
    "LITERAL"  => "TT"
);

function startElement($parser, $name, $attrs)
{
    global $map_array;
    if (isset($map_array[$name])) {
        echo "<$map_array[$name]>";
    }
}

function endElement($parser, $name)
{
    global $map_array;
    if (isset($map_array[$name])) {
        echo "</$map_array[$name]>";
    }
}

function characterData($parser, $data)
{
    echo $data;
}

$xml_parser = xml_parser_create();
// use dobramento de caso para ter certeza de encontrar a tag em $map_array
xml_parser_set_option($xml_parser, XML_OPTION_CASE_FOLDING, true);
xml_set_element_handler($xml_parser, "startElement", "endElement");
xml_set_character_data_handler($xml_parser, "characterData");
if (!($fp = fopen($file, "r"))) {
    die("não foi possível abrir a entrada XML");
}

while ($data = fread($fp, 4096)) {
    if (!xml_parse($xml_parser, $data, feof($fp))) {
        die(sprintf("Erro XML: %s na linha %d",
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
