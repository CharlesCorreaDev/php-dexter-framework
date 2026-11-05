# Altera as opções do fluxo

> **Fonte / Source:** https://www.php.net/manual/pt_BR/streamwrapper.stream-set-option.php

---

# streamWrapper::stream\_set\_option

(PHP 5 >= 5.3.0, PHP 7, PHP 8)

streamWrapper::stream\_set\_option — Altera as opções do fluxo

### Descrição

public function **streamWrapper::stream\_set\_option**([int](language.types.integer.md) `$option`, [int](language.types.integer.md) `$arg1`, [int](language.types.integer.md) `$arg2`): [bool](language.types.boolean.md)

Este método é chamado para definir as opções no fluxo.

### Parâmetros

`option`
:   Uma das opções:

    - **`STREAM_OPTION_BLOCKING`** (o método foi chamado em resposta a [stream\_set\_blocking()](function.stream-set-blocking.md))
    - **`STREAM_OPTION_READ_TIMEOUT`** (o método foi chamado em resposta a [stream\_set\_timeout()](function.stream-set-timeout.md))
    - **`STREAM_OPTION_READ_BUFFER`** (o método foi chamado em resposta a [stream\_set\_read\_buffer()](function.stream-set-read-buffer.md))
    - **`STREAM_OPTION_WRITE_BUFFER`** (o método foi chamado em resposta a [stream\_set\_write\_buffer()](function.stream-set-write-buffer.md))

`arg1`
:   Se `option` for

    - **`STREAM_OPTION_BLOCKING`**: modo de bloqueio requerido (1 significa bloqueio e 0 sem bloqueio).
    - **`STREAM_OPTION_READ_TIMEOUT`**: limite de tempo em segundos.
    - **`STREAM_OPTION_READ_BUFFER`**: modo de buffer (**`STREAM_BUFFER_NONE`** ou **`STREAM_BUFFER_FULL`**).
    - **`STREAM_OPTION_WRITE_BUFFER`**: modo de buffer (**`STREAM_BUFFER_NONE`** ou **`STREAM_BUFFER_FULL`**).

`arg2`
:   Se `option` for

    - **`STREAM_OPTION_BLOCKING`**: esta opção não está definida.
    - **`STREAM_OPTION_READ_TIMEOUT`**: limite de tempo em microssegundos.
    - **`STREAM_OPTION_READ_BUFFER`**: tamanho do buffer de leitura requerido.
    - **`STREAM_OPTION_WRITE_BUFFER`**: tamanho do buffer de gravação requerido.

### Valor Retornado

Retorna **`true`** em caso de sucesso ou **`false`** em caso de falha.
Se `option` não for implementada, **`false`** deve ser
retornado.

### Veja também

- [stream\_set\_blocking()](function.stream-set-blocking.md) - Definir modo de bloqueio/não-bloqueio em um fluxo
- [stream\_set\_timeout()](function.stream-set-timeout.md) - Define o limite de tempo em um fluxo
- [stream\_set\_write\_buffer()](function.stream-set-write-buffer.md) - Define o tamanho do buffer de escrita do fluxo

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
