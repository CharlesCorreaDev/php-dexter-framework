# Faz a comparação binária de dois arquivos usando o algoritmo de impressão digital polinomial de Rabin

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.xdiff-file-rabdiff.php

---

# xdiff\_file\_rabdiff

(PECL xdiff >= 1.5.0)

xdiff\_file\_rabdiff — Faz a comparação binária de dois arquivos usando o algoritmo de impressão digital polinomial de Rabin

### Descrição

function **xdiff\_file\_rabdiff**([string](language.types.string.md) `$old_file`, [string](language.types.string.md) `$new_file`, [string](language.types.string.md) `$dest`): [bool](language.types.boolean.md)

Cria uma comparação binária de dois arquivos e armazena o resultado em um arquivo de patch.
A diferença entre esta função e [xdiff\_file\_bdiff()](function.xdiff-file-bdiff.md) é o algoritmo diferente
utilizado, que deve resultar em uma execução mais rápida e em uma comparação menor produzida.
Esta função funciona tanto com arquivos de texto quanto binários. O arquivo de patch
resultante pode ser aplicado posteriormente usando [xdiff\_file\_bpatch()](function.xdiff-file-bpatch.md)/[xdiff\_string\_bpatch()](function.xdiff-string-bpatch.md).

Para mais detalhes sobre as diferenças entre os algoritmos utilizados, consulte o site
[» libxdiff](http://www.xmailserver.org/xdiff-lib.html).

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

**Exemplo #1 Exemplo de **xdiff\_file\_rabdiff()****

O código a seguir faz uma comparação binária de dois arquivos.

```
<?php
$old_version = 'my_script_1.0.tgz';
$new_version = 'my_script_1.1.tgz';

xdiff_file_rabdiff($old_version, $new_version, 'my_script.bdiff');
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
