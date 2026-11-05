# Fecha um ponteiro de um arquivo gz aberto

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.gzclose.php

---

# gzclose

(PHP 4, PHP 5, PHP 7, PHP 8)

gzclose — Fecha um ponteiro de um arquivo gz aberto

### Descrição

function **gzclose**([resource](language.types.resource.md) `$stream`): [bool](language.types.boolean.md)

Fecha o ponteiro do arquivo gz informado.

### Parâmetros

`stream`
:   O ponteiro do arquivo gz. Ele deve ser válido, e precisa apontar para um arquivo
    aberto corretamente pela função [gzopen()](function.gzopen.md).

### Valor Retornado

Retorna **`true`** em caso de sucesso ou **`false`** em caso de falha.

### Examples

**Exemplo #1 Exemplo de **gzclose()****

```
<?php
$gz = gzopen('algum_arquivo.gz','w9');
gzputs ($gz, 'Fui adicionado a algum_arquivo.gz');
gzclose($gz);
?>
```

### Veja também

- [gzopen()](function.gzopen.md) - Abre arquivo gz

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
