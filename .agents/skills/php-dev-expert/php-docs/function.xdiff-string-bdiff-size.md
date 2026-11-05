# Lê um tamanho de arquivo criado pela aplicação de uma comparação binária

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.xdiff-string-bdiff-size.php

---

# xdiff\_string\_bdiff\_size

(PECL xdiff >= 1.5.0)

xdiff\_string\_bdiff\_size — Lê um tamanho de arquivo criado pela aplicação de uma comparação binária

### Descrição

function **xdiff\_string\_bdiff\_size**([string](language.types.string.md) `$patch`): [int](language.types.integer.md)

Retorna o tamanho de um arquivo de resultado que seria criado após a aplicação do `patch` binário
ao arquivo original.

### Parâmetros

`patch`
:   O patch binário criado pela função [xdiff\_string\_bdiff()](function.xdiff-string-bdiff.md) ou
    [xdiff\_string\_rabdiff()](function.xdiff-string-rabdiff.md).

### Valor Retornado

Retorna o tamanho do arquivo que seria criado.

### Examples

**Exemplo #1 Exemplo de **xdiff\_string\_bdiff\_size()****

O código a seguir lê o tamanho do arquivo que seria criado
após a aplicação de uma diferença binária.

```
<?php
$binary_patch = file_get_contents('file.bdiff');
$length = xdiff_string_bdiff_size($binary_patch);
echo "O arquivo resultante terá $length bytes de comprimento";
?>
```

### Veja também

- [xdiff\_string\_bdiff()](function.xdiff-string-bdiff.md) - Faz diferença binária de duas strings
- [xdiff\_string\_rabdiff()](function.xdiff-string-rabdiff.md) - Gera a diferença binária de duas strings usando o algoritmo de impressão digital polinomial de Rabin
- [xdiff\_string\_bpatch()](function.xdiff-string-bpatch.md) - Corrige uma string com uma diferença binária

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
