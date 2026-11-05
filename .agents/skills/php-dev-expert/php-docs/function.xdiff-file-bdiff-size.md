# Lê um tamanho de arquivo criado pela aplicação de um diff binário

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.xdiff-file-bdiff-size.php

---

# xdiff\_file\_bdiff\_size

(PECL xdiff >= 1.5.0)

xdiff\_file\_bdiff\_size — Lê um tamanho de arquivo criado pela aplicação de um diff binário

### Descrição

function **xdiff\_file\_bdiff\_size**([string](language.types.string.md) `$file`): [int](language.types.integer.md)

Retorna o tamanho de um arquivo de resultado que seria criado após a aplicação do patch binário do arquivo
`file` ao arquivo original.

### Parâmetros

`file`
:   O caminho para o patch binário criado pela função [xdiff\_string\_bdiff()](function.xdiff-string-bdiff.md) ou
    [xdiff\_string\_rabdiff()](function.xdiff-string-rabdiff.md).

### Valor Retornado

Retorna o tamanho do arquivo que seria criado.

### Examples

**Exemplo #1 Exemplo de **xdiff\_file\_bdiff\_size()****

O código a seguir lê o tamanho do arquivo que seria criado
após a aplicação de uma diferença binária.

```
<?php
$length = xdiff_string_bdiff_size('file.bdiff');
echo "O arquivo resultante terá $length bytes de comprimento";
?>
```

### Veja também

- [xdiff\_file\_bdiff()](function.xdiff-file-bdiff.md) - Diferencia dois arquivos de forma binária
- [xdiff\_file\_rabdiff()](function.xdiff-file-rabdiff.md) - Faz a comparação binária de dois arquivos usando o algoritmo de impressão digital polinomial de Rabin
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
