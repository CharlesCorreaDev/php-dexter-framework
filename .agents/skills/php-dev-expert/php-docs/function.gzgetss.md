# Obtém linha de um ponteiro de arquivo gz e remover tags HTML

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.gzgetss.php

---

# gzgetss

(PHP 4, PHP 5, PHP 7)

gzgetss — 
Obtém linha de um ponteiro de arquivo gz e remover tags HTML

**Aviso**

Esta função foi
*DESCONTINUADA* a partir do PHP 7.3.0 e foi *REMOVIDA* a partir do PHP 8.0.0. O uso desta função
é fortemente desencorajado.

### Descrição

function **gzgetss**([resource](language.types.resource.md) `$zp`, [int](language.types.integer.md) `$length`, [string](language.types.string.md) `$allowable_tags` = ?): [string](language.types.string.md)

Idêntico a [gzgets()](function.gzgets.md), exceto que
**gzgetss()** tenta remover quaisquer tags HTML e PHP
do texto que ele lê.

### Parâmetros

`zp`
:   O ponteiro de arquivo gz. Deve ser válido e deve apontar para um arquivo
    aberto com sucesso por [gzopen()](function.gzopen.md).

`length`
:   O comprimento dos dados a serem obtidos.

`allowable_tags`
:   Você pode usar este parâmetro opcional para especificar tags que não devem
    ser removidas.

### Valor Retornado

A string não comprimida e sem tags, ou **`false`** em caso de erro.

### Examples

**Exemplo #1 Exemplo de **gzgetss()****

```
<?php
$handle = gzopen('algumarquivo.gz', 'r');
while (!gzeof($handle)) {
   $buffer = gzgetss($handle, 4096);
   echo $buffer;
}
gzclose($handle);
?>
```

### Veja também

- [gzopen()](function.gzopen.md) - Abre arquivo gz
- [gzgets()](function.gzgets.md) - Obtém uma linha de um ponteiro de arquivo
- [strip\_tags()](function.strip-tags.md) - Retira as tags HTML e PHP de uma string

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
