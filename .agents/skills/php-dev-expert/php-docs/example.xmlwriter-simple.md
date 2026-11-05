# Criando um documento XML simples

> **Fonte / Source:** https://www.php.net/manual/pt_BR/example.xmlwriter-simple.php

---

## Criando um documento XML simples

Este exemplo mostra como usar o XMLWriter para criar um documento XML na memória.

**Exemplo #1 Criando um documento XML simples**

```
<?php

$xw = xmlwriter_open_memory();
xmlwriter_set_indent($xw, 1);
$res = xmlwriter_set_indent_string($xw, ' ');

xmlwriter_start_document($xw, '1.0', 'UTF-8');

// Um primeiro elemento
xmlwriter_start_element($xw, 'tag1');

// Atributo 'att1' para o elemento 'tag1'
xmlwriter_start_attribute($xw, 'att1');
xmlwriter_text($xw, 'valueofatt1');
xmlwriter_end_attribute($xw);

xmlwriter_write_comment($xw, 'isto é um comentário.');

// Inicia um elemento filho
xmlwriter_start_element($xw, 'tag11');
xmlwriter_text($xw, 'Este é um texto de exemplo, ä');
xmlwriter_end_element($xw); // tag11

xmlwriter_end_element($xw); // tag1

// CDATA
xmlwriter_start_element($xw, 'testec');
xmlwriter_write_cdata($xw, "Isto é conteúdo cdata");
xmlwriter_end_element($xw); // testec

xmlwriter_start_element($xw, 'testec');
xmlwriter_start_cdata($xw);
xmlwriter_text($xw, "teste cdata2");
xmlwriter_end_cdata($xw);
xmlwriter_end_element($xw); // testec

// Uma instrução de processamento
xmlwriter_start_pi($xw, 'php');
xmlwriter_text($xw, '$foo=2;echo $foo;');
xmlwriter_end_pi($xw);

xmlwriter_end_document($xw);

echo xmlwriter_output_memory($xw);
```

O exemplo acima produzirá:

```
<?xml version="1.0" encoding="UTF-8"?>
<tag1 att1="valueofatt1">
 <!--isto é um comentário.-->
 <tag11>Este é um texto de exemplo, ä</tag11>
</tag1>
<testec><![CDATA[Isto é conteúdo cdata]]></testec>
<testec><![CDATA[teste cdata2]]></testec>
<?php $foo=2;echo $foo;?>
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
