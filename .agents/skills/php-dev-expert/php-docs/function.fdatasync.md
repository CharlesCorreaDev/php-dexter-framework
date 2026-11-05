# Sincroniza dados (mas não metadados) ao arquivo

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.fdatasync.php

---

# fdatasync

(PHP 8 >= 8.1.0)

fdatasync — Sincroniza dados (mas não metadados) ao arquivo

### Descrição

function **fdatasync**([resource](language.types.resource.md) `$stream`): [bool](language.types.boolean.md)

Esta função sincroniza o conteúdo do fluxo definido em `stream` para a mídia de armazenamento, da mesma forma que [fsync()](function.fsync.md),
mas não sincroniza os metadados de arquivo.
Note que esta função só é efetivamente diferente em sistemas POSIX.
No Windows, esta função é apelidada de [fsync()](function.fsync.md).

### Parâmetros

`stream`
:   O ponteiro de arquivo deve ser válido e deve apontar para
    um arquivo aberto com sucesso por [fopen()](function.fopen.md) ou
    [fsockopen()](function.fsockopen.md) (e ainda não fechado por
    [fclose()](function.fclose.md)).

### Valor Retornado

Retorna **`true`** em caso de sucesso ou **`false`** em caso de falha.

### Examples

**Exemplo #1 Exemplo de **fdatasync()****

```
<?php

$file = 'test.txt';

$stream = fopen($file, 'w');
fwrite($stream, 'test data');
fwrite($stream, "\r\n");
fwrite($stream, 'dados adicionais');

fdatasync($stream);
fclose($stream);
?>
```

### Veja também

- [fflush()](function.fflush.md) - Força a liberação do buffer para um arquivo
- [fsync()](function.fsync.md) - Sincroniza mudanças ao arquivo (incluindo metadados)

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
