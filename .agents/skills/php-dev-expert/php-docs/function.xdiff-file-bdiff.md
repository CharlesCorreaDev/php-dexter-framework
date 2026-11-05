# Diferencia dois arquivos de forma binária

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.xdiff-file-bdiff.php

---

# xdiff\_file\_bdiff

(PECL xdiff >= 1.5.0)

xdiff\_file\_bdiff — Diferencia dois arquivos de forma binária

### Descrição

function **xdiff\_file\_bdiff**([string](language.types.string.md) `$old_file`, [string](language.types.string.md) `$new_file`, [string](language.types.string.md) `$dest`): [bool](language.types.boolean.md)

Cria uma comparação binária de dois arquivos e armazena o resultado em um arquivo de patch.
Esta função funciona tanto com arquivos de texto quanto com arquivos binários. O arquivo de patch
resultante pode ser aplicado posteriormente usando [xdiff\_file\_bpatch()](function.xdiff-file-bpatch.md)/[xdiff\_string\_bpatch()](function.xdiff-string-bpatch.md).

### Parâmetros

`old_file`
:   Caminho para o primeiro arquivo. Este arquivo atua como o arquivo "antigo".

`new_file`
:   Caminho para o segundo arquivo. Este arquivo atua como um arquivo "novo".

`dest`
:   Caminho do arquivo de patch resultante. O arquivo resultante contém diferenças
    entre os arquivos "antigo" e "novo". Em formato binário e ilegível por humanos.

### Valor Retornado

Retorna **`true`** em caso de sucesso ou **`false`** em caso de falha.

### Examples

**Exemplo #1 Exemplo de **xdiff\_file\_bdiff()****

O código a seguir faz uma comparação binária de dois arquivos.

```
<?php
$old_version = 'my_script_1.0.tgz';
$new_version = 'my_script_1.1.tgz';

xdiff_file_bdiff($old_version, $new_version, 'my_script.bdiff');
?>
```

### Notas

> **Nota**:
>
> Ambos os arquivos serão carregados na memória, portanto, certifique-se de que o limite de memória esteja
> definido como alto o suficiente.

### Veja também

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
