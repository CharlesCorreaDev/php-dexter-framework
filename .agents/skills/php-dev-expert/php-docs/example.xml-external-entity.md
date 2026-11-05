# Exemplo de Entidade Externa XML

> **Fonte / Source:** https://www.php.net/manual/pt_BR/example.xml-external-entity.php

---

## Exemplo de Entidade Externa XML

Este exemplo destaca código XML. Ilustra como usar um
manipulador de referência de entidade externa para incluir e analisar outros
documentos, bem como como PIs podem ser processados, e uma maneira de
determinar "confiança" para PIs contendo código.

Documentos XML que podem ser usados para este exemplo são encontrados abaixo
do exemplo (xmltest.xml e
xmltest2.xml).

**Exemplo #1 Exemplo de Entidade Externa**

```
<?php
$file = "xmltest.xml";

function trustedFile($file)
{
    // confie apenas em arquivos locais de nossa propriedade
    if (!preg_match("@^([a-z][a-z0-9+.-]*)\:\/\/@i", $file)
        && fileowner($file) == getmyuid()) {
            return true;
    }
    return false;
}

function startElement($parser, $name, $attribs)
{
    echo "&lt;<font color=\"#0000cc\">$name</font>";
    if (count($attribs)) {
        foreach ($attribs as $k => $v) {
            echo " <font color=\"#009900\">$k</font>=\"<font
                   color=\"#990000\">$v</font>\"";
        }
    }
    echo "&gt;";
}

function endElement($parser, $name)
{
    echo "&lt;/<font color=\"#0000cc\">$name</font>&gt;";
}

function characterData($parser, $data)
{
    echo "<b>$data</b>";
}

function PIHandler($parser, $target, $data)
{
    switch (strtolower($target)) {
        case "php":
            global $parser_file;
            // Se o documento analisado for "confiável", dizemos que é seguro
            // para executar o código PHP dentro dele. Caso contrário, exiba o código
            // em vez disso.
            if (trustedFile($parser_file[$parser])) {
                eval($data);
            } else {
                printf("Código PHP não confiável: <i>%s</i>",
                        htmlspecialchars($data));
            }
            break;
    }
}

function defaultHandler($parser, $data)
{
    if (substr($data, 0, 1) == "&" && substr($data, -1, 1) == ";") {
        printf('<font color="#aa00aa">%s</font>',
                htmlspecialchars($data));
    } else {
        printf('<font size="-1">%s</font>',
                htmlspecialchars($data));
    }
}

function externalEntityRefHandler($parser, $openEntityNames, $base, $systemId,
                                  $publicId) {
    if ($systemId) {
        if (!list($parser, $fp) = new_xml_parser($systemId)) {
            printf("Não foi possível abrir a entidade %s em %s\n", $openEntityNames,
                   $systemId);
            return false;
        }
        while ($data = fread($fp, 4096)) {
            if (!xml_parse($parser, $data, feof($fp))) {
                printf("Erro XML: %s na linha %d ao analisar a entidade %s\n",
                       xml_error_string(xml_get_error_code($parser)),
                       xml_get_current_line_number($parser), $openEntityNames);
                return false;
            }
        }
        return true;
    }
    return false;
}

function new_xml_parser($file)
{
    global $parser_file;

    $xml_parser = xml_parser_create();
    xml_parser_set_option($xml_parser, XML_OPTION_CASE_FOLDING, 1);
    xml_set_element_handler($xml_parser, "startElement", "endElement");
    xml_set_character_data_handler($xml_parser, "characterData");
    xml_set_processing_instruction_handler($xml_parser, "PIHandler");
    xml_set_default_handler($xml_parser, "defaultHandler");
    xml_set_external_entity_ref_handler($xml_parser, "externalEntityRefHandler");

    if (!($fp = @fopen($file, "r"))) {
        return false;
    }
    if (!is_array($parser_file)) {
        settype($parser_file, "array");
    }
    $parser_file[$xml_parser] = $file;
    return array($xml_parser, $fp);
}

if (!(list($xml_parser, $fp) = new_xml_parser($file))) {
    die("não foi possível abrir a entrada XML");
}

echo "<pre>";
while ($data = fread($fp, 4096)) {
    if (!xml_parse($xml_parser, $data, feof($fp))) {
        die(sprintf("Erro XML: %s na linha %d\n",
                    xml_error_string(xml_get_error_code($xml_parser)),
                    xml_get_current_line_number($xml_parser)));
    }
}
echo "</pre>";
echo "análise concluída\n";

?>
```

**Exemplo #2 xmltest.xml**

```
<?xml version='1.0'?>
<!DOCTYPE chapter SYSTEM "/just/a/test.dtd" [
<!ENTITY plainEntity "FOO entity">
<!ENTITY systemEntity SYSTEM "xmltest2.xml">
]>
<chapter>
 <TITLE>Título &plainEntity;</TITLE>
 <para>
  <informaltable>
   <tgroup cols="3">
    <tbody>
     <row><entry>a1</entry><entry morerows="1">b1</entry><entry>c1</entry></row>
     <row><entry>a2</entry><entry>c2</entry></row>
     <row><entry>a3</entry><entry>b3</entry><entry>c3</entry></row>
    </tbody>
   </tgroup>
  </informaltable>
 </para>
 &systemEntity;
 <section id="about">
  <title>Sobre este documento</title>
  <para>
   <!-- isto é um comentário -->
   <?php echo 'Oi! Esta é a versão PHP' . phpversion(); ?>
  </para>
 </section>
</chapter>
```

Este arquivo é incluído de xmltest.xml:

**Exemplo #3 xmltest2.xml**

```
<?xml version="1.0"?>
<!DOCTYPE foo [
<!ENTITY testEnt "test entity">
]>
<foo>
   <element attrib="value"/>
   &testEnt;
   <?php echo "Este é mais um código PHP sendo executado."; ?>
</foo>
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
