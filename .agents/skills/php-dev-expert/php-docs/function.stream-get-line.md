# Obtém uma linha do recurso do fluxo até um delimitador informado

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.stream-get-line.php

---

# stream\_get\_line

(PHP 5, PHP 7, PHP 8)

stream\_get\_line — Obtém uma linha do recurso do fluxo até um delimitador informado

### Descrição

function **stream\_get\_line**([resource](language.types.resource.md) `$stream`, [int](language.types.integer.md) `$length`, [string](language.types.string.md) `$ending` = ""): [string](language.types.string.md)|[false](language.types.singleton.md)

Obtém uma linha do manipulador informado.

A leitura termina quando o número de bytes especificados em `length` tiverem sido lidos, ou quando
a string não vazia especificada por `ending` for encontrada (que
*não* é incluída no valor de retorno), ou em EOF
(o que ocorrer primeiro).

Esta função é praticamente idêntica a [fgets()](function.fgets.md) exceto por
permitir delimitadores de final de linha diferente dos padrões \n, \r e
\r\n, e *não* retorna o delimitador em si.

### Parâmetros

`stream`
:   Um manipulador de arquivo válido.

`length`
:   O número máximo de bytes para leitura do manuipulador.
    Valores negativos não são suportados.
    Zero (`0`) define o tamanho padrão do pacote do socket,
    isto é, `8192` bytes.

`ending`
:   Um delimitador string opcional.

### Valor Retornado

Retorna uma string com no máximo o número de bytes de `length` lidos do arquivo
apontado por `stream`, ou **`false`** em caso de falha.

### Veja também

- [fread()](function.fread.md) - Leitura de arquivo segura para binário
- [fgets()](function.fgets.md) - Lê uma linha de um ponteiro de arquivo
- [fgetc()](function.fgetc.md) - Lê um caractere do ponteiro de arquivo

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
