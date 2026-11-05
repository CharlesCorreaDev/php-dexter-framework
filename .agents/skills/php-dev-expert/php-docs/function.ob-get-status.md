# Obtém status dos buffers de saída

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.ob-get-status.php

---

# ob\_get\_status

(PHP 4 >= 4.2.0, PHP 5, PHP 7, PHP 8)

ob\_get\_status — Obtém status dos buffers de saída

### Descrição

function **ob\_get\_status**([bool](language.types.boolean.md) `$full_status` = **`false`**): [array](language.types.array.md)

**ob\_get\_status()** retorna informação de status do
buffer de saída do nível mais alto ou de todos os níveis de buffers de saída ativos se
`full_status` estiver definido para **`true`**.

### Parâmetros

`full_status`
:   **`true`** para retornar todos os níveis de buffers de saída ativos. Se for **`false`** ou não
    definido, somente o buffer de saída de nível mais alto é retornado.

### Valor Retornado

Se `full_status` for omitido ou **`false`** um array simples
contendo informações de status no nível de saída ativo é retornado.

Se `full_status` for **`true`** um array
com um elemento para cada nível de buffer de saída ativo é retornado.
O nível de saída é usado como chave do array de nível superior e cada elemento
do array em si é outro array que contém informações de status
sobre um nível de saída ativo.

Um array vazio será retornada se o buffer de saída não estiver ativado.

**Elementos do array de retorno de **ob\_get\_status()****

| Chave | Valor |
| --- | --- |
| name | Nome do manipulador de saída ativo (veja os valores de retorno de [ob\_list\_handlers()](function.ob-list-handlers.md) para detalhes) |
| type | `0` (manipulador interno) ou `1` (manipulador fornecido pelo usuário) |
| flags | Máscara de bits das opções definidas por [ob\_start()](function.ob-start.md), o tipo de manipulador de saída (veja acima) e o status do processo de buffer (constantes [**`PHP_OUTPUT_HANDLER_*`**](outcontrol.constants.md#outcontrol.constants.flags-returned-by-handler)). Se o manipulador processou o buffer com sucesso e não retornou **`false`**, **`PHP_OUTPUT_HANDLER_STARTED`** e **`PHP_OUTPUT_HANDLER_PROCESSED`** serão definidas. Se o manipulador falhou ao processar o buffer ou retornou **`false`**, **`PHP_OUTPUT_HANDLER_STARTED`** e **`PHP_OUTPUT_HANDLER_DISABLED`** serão definidas. |
| level | Nível de aninhamento de saída (com base em zero). Observe que o valor retornado para o mesmo nível por [ob\_get\_level()](function.ob-get-level.md) está deslocado em uma unidade. O primeiro nível é `0` para **ob\_get\_status()** e `1` para [ob\_get\_level()](function.ob-get-level.md). |
| chunk\_size | Tamanho do bloco em bytes. Definido por [ob\_start()](function.ob-start.md) ou se [output\_buffering](outcontrol.configuration.md#ini.output-buffering) estiver habilitado e seu valor estiver definido como um número inteiro positivo. |
| buffer\_size | Tamanho do buffer de saída em bytes |
| buffer\_used | Tamanho dos dados no buffer de saída em bytes (o mesmo que o valor de retorno do tipo inteiro de [ob\_get\_length()](function.ob-get-length.md)) |

### Examples

**Exemplo #1 Array retornado quando `full_status` é **`false`****

```
Array
(
    [name] => URL-Rewriter
    [type] => 0
    [flags] => 112
    [level] => 2
    [chunk_size] => 0
    [buffer_size] => 16384
    [buffer_used] => 1024
)
```

**Exemplo #2 Array retornado quando `full_status` é **`true`****

```
Array
(
    [0] => Array
        (
            [name] => default output handler
            [type] => 0
            [flags] => 112
            [level] => 1
            [chunk_size] => 0
            [buffer_size] => 16384
            [buffer_used] => 2048
        )

    [1] => Array
        (
            [name] => URL-Rewriter
            [type] => 0
            [flags] => 112
            [level] => 2
            [chunk_size] => 0
            [buffer_size] => 16384
            [buffer_used] => 1024
        )

)
```

### Veja também

- [ob\_get\_level()](function.ob-get-level.md) - Retorna o nível de aninhamento do mecanismo de buffer de saída
- [ob\_list\_handlers()](function.ob-list-handlers.md) - Lista todos os manipuladores de saída em uso
- [ob\_get\_length()](function.ob-get-length.md) - Retorna o comprimento do buffer de saída
- [ob\_start()](function.ob-start.md) - Ativa o buffer de saída

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
