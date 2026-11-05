# Fecha um ponteiro de arquivo aberto

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.fclose.php

---

# fclose

(PHP 4, PHP 5, PHP 7, PHP 8)

fclose — Fecha um ponteiro de arquivo aberto

### Descrição

function **fclose**([resource](language.types.resource.md) `$stream`): [bool](language.types.boolean.md)

O arquivo apontado por `stream` é fechado.

### Parâmetros

`stream`
:   O ponteiro para o arquivo tem que ser válido e tem que apontar para um
    arquivo aberto por [fopen()](function.fopen.md) ou [fsockopen()](function.fsockopen.md).

### Valor Retornado

Retorna **`true`** em caso de sucesso ou **`false`** em caso de falha.

### Examples

**Exemplo #1 Exemplo de **fclose()****

```
<?php

  $handle = fopen('qualquerarquivo.txt', 'r');

  fclose($handle);

?>
```

### Veja também

- [fopen()](function.fopen.md) - Abre um arquivo ou URL
- [fsockopen()](function.fsockopen.md) - Abre uma conexão socket de domínio Unix ou de Internet

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
