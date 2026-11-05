# Sincroniza mudanças ao arquivo (incluindo metadados)

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.fsync.php

---

# fsync

(PHP 8 >= 8.1.0)

fsync — Sincroniza mudanças ao arquivo (incluindo metadados)

### Descrição

function **fsync**([resource](language.types.resource.md) `$stream`): [bool](language.types.boolean.md)

Este função sincroniza mudanças ao arquivo, incluindo seus metadados. Isto é semelhante a [fflush()](function.fflush.md),
mas também instrui o sistema operacional a escrever na mídia de armazenamento.

### Parâmetros

`stream`
:   O ponteiro de arquivo deve ser válido e deve apontar para
    um arquivo aberto com sucesso por [fopen()](function.fopen.md) ou
    [fsockopen()](function.fsockopen.md) (e ainda não fechado por
    [fclose()](function.fclose.md)).

### Valor Retornado

Retorna **`true`** em caso de sucesso ou **`false`** em caso de falha.

### Examples

**Exemplo #1 Exemplo de **fsync()****

```
<?php

$file = 'test.txt';

$stream = fopen($file, 'w');
fwrite($stream, 'dados de teste');
fwrite($stream, "\r\n");
fwrite($stream, 'dados adicionais');

fsync($stream);
fclose($stream);
?>
```

### Veja também

- [fdatasync()](function.fdatasync.md) - Sincroniza dados (mas não metadados) ao arquivo
- [fflush()](function.fflush.md) - Força a liberação do buffer para um arquivo

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
