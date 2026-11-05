# Obtém um array de erros

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.libxml-get-errors.php

---

# libxml\_get\_errors

(PHP 5 >= 5.1.0, PHP 7, PHP 8)

libxml\_get\_errors — 
Obtém um array de erros

### Descrição

function **libxml\_get\_errors**(): [array](language.types.array.md)

Obtém um array de erros.

### Parâmetros

Esta função não possui parâmetros.

### Valor Retornado

Retorna um array com objetos [LibXMLError](class.libxmlerror.md) se houver algum
erro no buffer, ou um array vazio caso contrário.

### Examples

**Exemplo #1 Um exemplo de **libxml\_get\_errors()****

Este exemplo demonstra como construir um simples manipulador de erro da libxml.

```
<?php

libxml_use_internal_errors(true);

$xmlstr = <<< XML
<?xml version='1.0' standalone='yes'?>
<movies>
 <movie>
  <titles>PHP: Por Trás do Analisador</title>
 </movie>
</movies>
XML;

$doc = simplexml_load_string($xmlstr);
$xml = explode("\n", $xmlstr);

if ($doc === false) {
    $errors = libxml_get_errors();

    foreach ($errors as $error) {
        echo display_xml_error($error, $xml);
    }

    libxml_clear_errors();
}

function display_xml_error($error, $xml)
{
    $return  = $xml[$error->line - 1] . "\n";
    $return .= str_repeat('-', $error->column) . "^\n";

    switch ($error->level) {
        case LIBXML_ERR_WARNING:
            $return .= "Alerta $error->code: ";
            break;
        case LIBXML_ERR_ERROR:
            $return .= "Erro $error->code: ";
            break;
        case LIBXML_ERR_FATAL:
            $return .= "Erro fatal $error->code: ";
            break;
    }

    $return .= trim($error->message) .
               "\n  Line: $error->line" .
               "\n  Column: $error->column";

    if ($error->file) {
        $return .= "\n  Arquivo: $error->file";
    }

    return "$return\n\n--------------------------------------------\n\n";
}

?>
```

O exemplo acima produzirá:

```
<titles>PHP: Por Trás do Analisador</title>
----------------------------------------------^
Erro fatal 76: Opening and ending tag mismatch: titles line 4 and title
  Line: 4
  Column: 46

--------------------------------------------
```

### Veja também

- [libxml\_get\_last\_error()](function.libxml-get-last-error.md) - Obtém o último erro da libxml
- [libxml\_clear\_errors()](function.libxml-clear-errors.md) - Limpa o buffer de erro da libxml

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
