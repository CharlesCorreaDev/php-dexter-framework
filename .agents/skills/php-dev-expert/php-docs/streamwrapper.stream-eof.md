# Teste para fim de arquivo em ponteiros

> **Fonte / Source:** https://www.php.net/manual/pt_BR/streamwrapper.stream-eof.php

---

# streamWrapper::stream\_eof

(PHP 4 >= 4.3.2, PHP 5, PHP 7, PHP 8)

streamWrapper::stream\_eof — Teste para fim de arquivo em ponteiros

### Descrição

public function **streamWrapper::stream\_eof**(): [bool](language.types.boolean.md)

Este método é chamado em resposta a [feof()](function.feof.md).

### Parâmetros

Esta função não possui parâmetros.

### Valor Retornado

Deve retornar **`true`** se a posição de leitura/escrita estiver no final do fluxo e se não houver mais dados disponíveis para leitura, ou **`false`** caso contrário.

### Notas

**Aviso**

Ao ler todo o arquivo (por exemplo, com
[file\_get\_contents()](function.file-get-contents.md)), o PHP irá chamar
[streamWrapper::stream\_read()](streamwrapper.stream-read.md) seguido por
**streamWrapper::stream\_eof()** em um loop mas enquanto
[streamWrapper::stream\_read()](streamwrapper.stream-read.md) retornar uma
string não vazia, o valor de retorno de
**streamWrapper::stream\_eof()** é ignorado.

### Veja também

- [feof()](function.feof.md) - Testa pelo fim-de-arquivo em um ponteiro de arquivo

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
