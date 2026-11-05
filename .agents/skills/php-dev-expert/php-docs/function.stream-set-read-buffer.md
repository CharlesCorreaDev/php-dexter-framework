# Define o tamanho de buffer de leitura do fluxo

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.stream-set-read-buffer.php

---

# stream\_set\_read\_buffer

(PHP 5 >= 5.3.3, PHP 7, PHP 8)

stream\_set\_read\_buffer — Define o tamanho de buffer de leitura do fluxo

### Descrição

function **stream\_set\_read\_buffer**([resource](language.types.resource.md) `$stream`, [int](language.types.integer.md) `$size`): [int](language.types.integer.md)

Define o tamanho do buffer de leitura. É equivalente a [stream\_set\_write\_buffer()](function.stream-set-write-buffer.md),
porém para operações de leitura.

### Parâmetros

`stream`
:   O ponteiro para o arquivo.

`size`
:   O número de bytes do buffer. Se `size`
    for 0 as operações são realizadas sem buffer. Isto assegura que todas as leituras
    com [fread()](function.fread.md) estejam completas antes que outros processos
    possam ler do fluxo de entrada.

### Valor Retornado

Retorna 0 em caso de sucesso, ou outro valor se a requisição
não puder ser cumprida.

### Veja também

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
