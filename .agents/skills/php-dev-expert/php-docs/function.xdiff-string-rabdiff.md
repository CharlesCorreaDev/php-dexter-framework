# Gera a diferença binária de duas strings usando o algoritmo de impressão digital polinomial de Rabin

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.xdiff-string-rabdiff.php

---

# xdiff\_string\_rabdiff

(PECL xdiff >= 1.5.0)

xdiff\_string\_rabdiff — 
Gera a diferença binária de duas strings usando o algoritmo de impressão digital polinomial de Rabin

### Descrição

function **xdiff\_string\_rabdiff**([string](language.types.string.md) `$old_data`, [string](language.types.string.md) `$new_data`): [string](language.types.string.md)|[false](language.types.singleton.md)

Cria uma comparação binária de duas strings usando o algoritmo de impressão digital polinomial de Rabin implementado pela
[» libxdiff](http://www.xmailserver.org/xdiff-lib.html). Comparada à
[xdiff\_string\_bdiff()](function.xdiff-string-bdiff.md), este algoritmo geralmente produz diferenças menores, é mais rápido
e mantém compatibilidade total com [xdiff\_string\_bpatch()](function.xdiff-string-bpatch.md) e
[xdiff\_file\_bpatch()](function.xdiff-file-bpatch.md) para aplicação das diferenças.

Esta função pode ser usada com texto ou com dados binários. Os dados de diferença resultantes podem ser
aplicados posteriormente para recriar a nova versão a partir da antiga.

Para mais informação sobre o algoritmo, consulte a
[» documentação da libxdiff](https://www.xmailserver.org/xdiff-lib.html).

### Parâmetros

`old_data`
:   A primeira string contendo os dados binários "antigos".

`new_data`
:   A segunda string contendo os "novos" dados binários.

### Valor Retornado

Retorna uma string com diferença binária entre os dados antigos e novos, ou **`false`** em caso de falha.

### Examples

**Exemplo #1 Criação de diferença binária entre duas strings**

```
<?php
$old = file_get_contents('file_v1.txt');
$new = file_get_contents('file_v2.txt');

$diff = xdiff_string_rabdiff($old, $new);
file_put_contents('patch.rdiff', $diff);
?>
```

### Veja também

- [xdiff\_string\_bdiff()](function.xdiff-string-bdiff.md) - Faz diferença binária de duas strings
- [xdiff\_string\_bpatch()](function.xdiff-string-bpatch.md) - Corrige uma string com uma diferença binária
- [xdiff\_file\_bpatch()](function.xdiff-file-bpatch.md) - Corrige um arquivo com uma diferença binária

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
