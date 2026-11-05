# Realiza operações de depuração

> **Fonte / Source:** https://www.php.net/manual/pt_BR/mysqli.debug.php

---

# mysqli::debug

# mysqli\_debug

(PHP 5, PHP 7, PHP 8)

mysqli::debug -- mysqli\_debug — Realiza operações de depuração

### Descrição

Estilo orientado a objetos

public function **mysqli::debug**([string](language.types.string.md) `$options`): [true](language.types.singleton.md)

Estilo procedural

function **mysqli\_debug**([string](language.types.string.md) `$options`): [true](language.types.singleton.md)

Realiza operações de depuração usando a biblioteca Fred Fish.

### Parâmetros

`options`
:   Uma string representando a operação de depuração a ser executada

    A string de opções de depuração é uma sequência de campos separados por dois pontos (:) desta maneira:
    ```` ```
    <campo_1>:<campo_2>:<campo_N>
    ``` ````
    Cada campo consiste de um caractere de opção mandatório seguido por uma `,` opcional e uma lista de modificadores:
    separados por vírgula: `opção[,modificador,modificador,...,modificador]`

    **Caracteres de Opção Reconhecidos**

    | Caractere de `options` | Descrição |
    | --- | --- |
    | O | **`MYSQLND_DEBUG_FLUSH`** |
    | A/a | **`MYSQLND_DEBUG_APPEND`** |
    | F | **`MYSQLND_DEBUG_DUMP_FILE`** |
    | i | **`MYSQLND_DEBUG_DUMP_PID`** |
    | L | **`MYSQLND_DEBUG_DUMP_LINE`** |
    | m | **`MYSQLND_DEBUG_TRACE_MEMORY_CALLS`** |
    | n | **`MYSQLND_DEBUG_DUMP_LEVEL`** |
    | o | saída para arquivo |
    | T | **`MYSQLND_DEBUG_DUMP_TIME`** |
    | t | **`MYSQLND_DEBUG_DUMP_TRACE`** |
    | x | **`MYSQLND_DEBUG_PROFILE_CALLS`** |

### Valor Retornado

Sempre retorna **`true`**.

### Registro de Alterações

| Versão | Descrição |
| --- | --- |
| 8.0.0 | Esta função agora sempre retorna **`true`**. Anteriormente retornava **`false`** em caso de falha. |

### Examples

**Exemplo #1 Gerando um Arquivo de Rastreamento**

```
<?php

/* Cria um arquivo de rastreamento em '/tmp/client.trace' na máquina local (do cliente): */
mysqli_debug("d:t:o,/tmp/client.trace");

?>
```

### Notas

> **Nota**:
>
> Para usar a função **mysqli\_debug()** deve-se compilar
> a biblioteca do cliente MySQL com suporte a depuração.

### Veja também

- [mysqli\_dump\_debug\_info()](mysqli.dump-debug-info.md) - Descarrega informação de debug no log
- [mysqli\_report()](function.mysqli-report.md) - Sinônimo de mysqli\_driver->report\_mode

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
