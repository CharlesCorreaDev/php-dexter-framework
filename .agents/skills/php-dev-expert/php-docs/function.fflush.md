# Força a liberação do buffer para um arquivo

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.fflush.php

---

# fflush

(PHP 4 >= 4.0.1, PHP 5, PHP 7, PHP 8)

fflush — Força a liberação do buffer para um arquivo

### Descrição

function **fflush**([resource](language.types.resource.md) `$stream`): [bool](language.types.boolean.md)

Esta função força a escrita de toda saída cacheada para o recurso
apontado fluxo de arquivo `stream`.

### Parâmetros

`stream`
:   O ponteiro de arquivo deve ser válido e deve apontar para
    um arquivo aberto com sucesso por [fopen()](function.fopen.md) ou
    [fsockopen()](function.fsockopen.md) (e ainda não fechado por
    [fclose()](function.fclose.md)).

### Valor Retornado

Retorna **`true`** em caso de sucesso ou **`false`** em caso de falha.

### Examples

**Exemplo #1 Exemplo de escrita em arquivo usando **fflush()****

```
<?php
$filename = 'bar.txt';

$file = fopen($filename, 'r+');
rewind($file);
fwrite($file, 'Foo');
fflush($file);
ftruncate($file, ftell($file));
fclose($file);
?>
```

### Veja também

- [clearstatcache()](function.clearstatcache.md) - Limpa o cache de estado de arquivos
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
