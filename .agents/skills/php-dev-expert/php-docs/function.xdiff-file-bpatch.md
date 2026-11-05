# Corrige um arquivo com uma diferença binária

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.xdiff-file-bpatch.php

---

# xdiff\_file\_bpatch

(PECL xdiff >= 1.5.0)

xdiff\_file\_bpatch — Corrige um arquivo com uma diferença binária

### Descrição

function **xdiff\_file\_bpatch**([string](language.types.string.md) `$file`, [string](language.types.string.md) `$patch`, [string](language.types.string.md) `$dest`): [bool](language.types.boolean.md)

Corrige o arquivo `file` com um `patch` binário
e armazena o resultado no arquivo `dest`.
Esta função aceita patches criados por meio das funções [xdiff\_file\_bdiff()](function.xdiff-file-bdiff.md)
e [xdiff\_file\_rabdiff()](function.xdiff-file-rabdiff.md) ou suas contrapartes em string.

### Parâmetros

`file`
:   O arquivo original.

`patch`
:   O arquivo de patch binário.

`dest`
:   Caminho do arquivo resultante.

### Valor Retornado

Retorna **`true`** em caso de sucesso ou **`false`** em caso de falha.

### Examples

**Exemplo #1 Exemplo de **xdiff\_file\_bpatch()****

O código a seguir aplica comparação binária a um arquivo.

```
<?php
$old_version = 'archive-1.0.tgz';
$patch = 'archive.bpatch';

$result = xdiff_file_bpatch($old_version, $patch, 'archive-1.1.tgz');
if ($result) {
   echo "Arquivo corrigido";
} else {
   echo "O arquivo não pôde ser corrigido";
}

?>
```

### Notas

> **Nota**:
>
> Ambos os arquivos (`file` e `patch`)
> serão carregados na memória, portanto, certifique-se de que o limite de memória esteja definido como alto
> o suficiente.

### Veja também

- [xdiff\_file\_bdiff()](function.xdiff-file-bdiff.md) - Diferencia dois arquivos de forma binária
- [xdiff\_file\_rabdiff()](function.xdiff-file-rabdiff.md) - Faz a comparação binária de dois arquivos usando o algoritmo de impressão digital polinomial de Rabin

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
