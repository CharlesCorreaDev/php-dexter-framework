# Retorna o último erro ocorrido

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.json-last-error.php

---

# json\_last\_error

(PHP 5 >= 5.3.0, PHP 7, PHP 8)

json\_last\_error — Retorna o último erro ocorrido

### Descrição

function **json\_last\_error**(): [int](language.types.integer.md)

Retorna o erro ocorrido (se houver) durante a última validação/codificação/decodificação JSON
que não tenha especificado **`JSON_THROW_ON_ERROR`**.

### Parâmetros

Esta função não possui parâmetros.

### Valor Retornado

Retorna um inteiro, o valor pode ser uma das seguintes
constantes:

**Códigos de erro JSON**

| Constante | Significado | Disponibilidade |
| --- | --- | --- |
| **`JSON_ERROR_NONE`** | Não ocorreu nenhum erro |  |
| **`JSON_ERROR_DEPTH`** | A profundidade máxima da pilha foi excedida |  |
| **`JSON_ERROR_STATE_MISMATCH`** | JSON inválido ou mal formado |  |
| **`JSON_ERROR_CTRL_CHAR`** | Erro de caractere de controle, possivelmente codificado incorretamente |  |
| **`JSON_ERROR_SYNTAX`** | Erro de sintaxe |  |
| **`JSON_ERROR_UTF8`** | Caracteres UTF-8 malformados, possivelmente codificados incorretamente |  |
| **`JSON_ERROR_RECURSION`** | Uma ou mais referências recursivas no valor a ser codificado |  |
| **`JSON_ERROR_INF_OR_NAN`** | Um ou mais valores [**`NAN`**](language.types.float.md#language.types.float.nan) ou [**`INF`**](function.is-infinite.md) no valor a ser codificado |  |
| **`JSON_ERROR_UNSUPPORTED_TYPE`** | Fornecido um valor de um tipo que não pode ser codificado |  |
| **`JSON_ERROR_INVALID_PROPERTY_NAME`** | Fornecido um nome de propriedade que não pode ser codificado |  |
| **`JSON_ERROR_UTF16`** | Caracteres UTF-16 malformados, possivelmente codificados incorretamente |  |
| **`JSON_ERROR_NON_BACKED_ENUM`** | Valor contém uma enumeração não apoiada que não pode ser serializada. Disponível a partir do PHP 8.1.0. |  |

### Examples

**Exemplo #1 Exemplo de **json\_last\_error()****

```
<?php
// Uma string json válida
$json[] = '{"Organização": "Time de Documentação PHP"}';

// Uma string json inválida que causará uma sintaxe
// erro, neste caso usamos ' em vez de " para cotação
$json[] = "{'Organização': 'Time de Documentação PHP'}";

foreach ($json as $string) {
    echo 'Decodificando: ' . $string;
    json_decode($string);

    switch (json_last_error()) {
        case JSON_ERROR_NONE:
            echo ' - Sem Erros';
        break;
        case JSON_ERROR_DEPTH:
            echo ' - Profundidade máxima da pilha foi excedida';
        break;
        case JSON_ERROR_STATE_MISMATCH:
            echo ' - subfluxo ou os modos não combinam';
        break;
        case JSON_ERROR_CTRL_CHAR:
            echo ' - Caractere de controle inesperado encontrado';
        break;
        case JSON_ERROR_SYNTAX:
            echo ' - Erro de sintaxe, JSON malformado';
        break;
        case JSON_ERROR_UTF8:
            echo ' - Caracteres UTF-8 malformados, possivelmente codificados incorretamente';
        break;
        default:
            echo ' - Erro desconhecido';
        break;
    }

    echo PHP_EOL;
}
?>
```

O exemplo acima produzirá:

```
Decodificando: {"Organização": "Time de Documentação PHP"} - Sem erros
Decodificando: {'Organização': 'Time de Documentação PHP'} - Erro de sintaxe, JSON mal formatado
```

**Exemplo #2 **json\_last\_error()** com [json\_encode()](function.json-encode.md)**

```
<?php
// Uma sequência UTF8 inválida
$text = "\xB1\x31";

$json  = json_encode($text);
$error = json_last_error();

var_dump($json, $error === JSON_ERROR_UTF8);
?>
```

O exemplo acima produzirá:

```
string(4) "null"
bool(true)
```

**Exemplo #3 **json\_last\_error()** e **`JSON_THROW_ON_ERROR`****

```
<?php
// Uma sequência UTF8 inválida que causa JSON_ERROR_UTF8
json_encode("\xB1\x31");

// O seguinte não causa um erro JSON
json_encode('okay', JSON_THROW_ON_ERROR);

// O estado de erro global não foi alterado pelo antigo json_encode()
var_dump(json_last_error() === JSON_ERROR_UTF8);
?>
```

O exemplo acima produzirá:

```
bool(true)
```

### Veja também

- [json\_last\_error\_msg()](function.json-last-error-msg.md) - Retorna a string de erro da última chamada a json\_validate(), json\_encode() ou json\_decode()
- [json\_decode()](function.json-decode.md) - Decodifica uma string JSON
- [json\_encode()](function.json-encode.md) - Retorna a representação JSON de um valor

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
