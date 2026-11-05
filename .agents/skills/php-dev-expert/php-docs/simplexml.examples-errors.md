# Lidando com erros XML

> **Fonte / Source:** https://www.php.net/manual/pt_BR/simplexml.examples-errors.php

---

## Lidando com erros XML

Lidar com erros de XML ao carregar documentos é uma tarefa muito simples.
Usando a funcionalidade [libxml](book.libxml.md) é
possível suprimir todos os erros XML ao carregar o documento e então
iterar sobre os erros.

O objeto [LibXMLError](class.libxmlerror.md), retornado por
[libxml\_get\_errors()](function.libxml-get-errors.md), contém várias propriedades
incluindo a [mensagem](class.libxmlerror.md#libxmlerror.props.message),
a [linha](class.libxmlerror.md#libxmlerror.props.line) e
a [coluna](class.libxmlerror.md#libxmlerror.props.column) (posição) do
erro.

**Exemplo #1 Carregando string XML quebrada**

```
<?php
libxml_use_internal_errors(true);
$sxe = simplexml_load_string("<?xml version='1.0'><quebrada><xml></quebrada>");
if ($sxe === false) {
    echo "Falha ao carregar o XML\n";
    foreach(libxml_get_errors() as $error) {
        echo "\t", $error->message;
    }
}
?>
```

O exemplo acima produzirá:

```
Falha ao carregar o XML
    Blank needed here
    parsing XML declaration: '?>' expected
    Opening and ending tag mismatch: xml line 1 and quebrada
    Premature end of data in tag quebrada line 1
```

## Veja também

- [libxml\_use\_internal\_errors()](function.libxml-use-internal-errors.md)
- [libxml\_get\_errors()](function.libxml-get-errors.md)
- [LibXMLError](class.libxmlerror.md)

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
