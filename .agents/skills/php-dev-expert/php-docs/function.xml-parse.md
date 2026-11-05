# Inicia análise de um documento XML

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.xml-parse.php

---

# xml\_parse

(PHP 4, PHP 5, PHP 7, PHP 8)

xml\_parse — Inicia análise de um documento XML

### Descrição

function **xml\_parse**([XMLParser](class.xmlparser.md) `$parser`, [string](language.types.string.md) `$data`, [bool](language.types.boolean.md) `$is_final` = **`false`**): [int](language.types.integer.md)

**xml\_parse()** analisa um documento XML. Os manipuladores para
os eventos configurados são chamados quantas vezes forem necessárias.

### Parâmetros

`parser`
:   Uma referência ao analisador XML a ser usado.

`data`
:   Bloco de dados a serem analisados. Um documento pode ser analisado em partes
    chamando **xml\_parse()** várias vezes com novos dados,
    desde que o parâmetro `is_final` esteja definido e
    **`true`** quando os últimos dados forem analisados.

`is_final`
:   Se definido e **`true`**, `data` é o último pedaço de
    dados enviado nesta análise.

### Valor Retornado

Retorna 1 em caso de sucesso ou 0 em caso de falha.

Para análises malsucedidas, as informações de erro podem ser recuperadas com
[xml\_get\_error\_code()](function.xml-get-error-code.md),
[xml\_error\_string()](function.xml-error-string.md),
[xml\_get\_current\_line\_number()](function.xml-get-current-line-number.md),
[xml\_get\_current\_column\_number()](function.xml-get-current-column-number.md) e
[xml\_get\_current\_byte\_index()](function.xml-get-current-byte-index.md).

> **Nota**:
>
> Alguns erros (como erros de entidade) são relatados no final dos dados, portanto, somente se
> `is_final` estiver definido e **`true`**.

### Registro de Alterações

| Versão | Descrição |
| --- | --- |
| 8.0.0 | O parâmetro `parser` agora espera uma instância de [XMLParser](class.xmlparser.md); anteriormente, um [resource](language.types.resource.md) `xml` válido era esperado. |

### Examples

**Exemplo #1 Análise em blocos de documentos XML grandes**

Este exemplo mostra como documentos XML grandes podem ser lidos e analisados ​​em
pedaços, para que não seja necessário manter o documento inteiro na memória.
O tratamento de erros é omitido por questões de brevidade.

```
<?php
$stream = fopen('examples/book-simple.xml', 'r');
$parser = xml_parser_create();

xml_set_element_handler(
    $parser,
    function($parser, $name, $attributes) { echo $name, PHP_EOL; },
    function($parser, $name) { echo $name, PHP_EOL; }
);

while (($data = fread($stream, 16384))) {
    xml_parse($parser, $data); // analisa o bloco atual
}
xml_parse($parser, '', true); // finaliza a análise
fclose($stream);
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
