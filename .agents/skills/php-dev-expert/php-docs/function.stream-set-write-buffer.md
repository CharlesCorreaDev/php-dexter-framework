# Define o tamanho do buffer de escrita do fluxo

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.stream-set-write-buffer.php

---

# stream\_set\_write\_buffer

(PHP 4 >= 4.3.0, PHP 5, PHP 7, PHP 8)

stream\_set\_write\_buffer — Define o tamanho do buffer de escrita do fluxo

### Descrição

function **stream\_set\_write\_buffer**([resource](language.types.resource.md) `$stream`, [int](language.types.integer.md) `$size`): [int](language.types.integer.md)

Define o tamanho do buffer de operações de escrita no fluxo informado em `stream`
para o número de bytes informado em `size`.

### Parâmetros

`stream`
:   O ponteiro para o arquivo.

`size`
:   O número de bytes do buffer. Se `size`
    for 0, as operações de escrita não terão buffer. Isto assegura que todas as operações de escrita
    com [fwrite()](function.fwrite.md) estejam completas antes que outros processos
    possam escrever no fluxo de saída.

### Valor Retornado

Retorna 0 em caso de sucesso, ou outro valor se a requisição não puder ser cumprida.

### Examples

**Exemplo #1 Exemplo de **stream\_set\_write\_buffer()****

O exemplo a seguir demonstra como usar
**stream\_set\_write\_buffer()** para criar fluxo sem buffer.

```
<?php
$fp = fopen($file, "w");
if ($fp) {
  if (stream_set_write_buffer($fp, 0) !== 0) {
      // falha na mudança de buffer
  }
  fwrite($fp, $output);
  fclose($fp);
}
?>
```

### Veja também

- [fopen()](function.fopen.md) - Abre um arquivo ou URL
- [fwrite()](function.fwrite.md) - Escrita binary-safe em arquivos

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
