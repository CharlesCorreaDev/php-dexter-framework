# Faz uma comparação unificada de dois arquivos

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.xdiff-file-diff.php

---

# xdiff\_file\_diff

(PECL xdiff >= 0.2.0)

xdiff\_file\_diff — Faz uma comparação unificada de dois arquivos

### Descrição

function **xdiff\_file\_diff**(  
    [string](language.types.string.md) `$old_file`,  
    [string](language.types.string.md) `$new_file`,  
    [string](language.types.string.md) `$dest`,  
    [int](language.types.integer.md) `$context` = 3,  
    [bool](language.types.boolean.md) `$minimal` = **`false`**  
): [bool](language.types.boolean.md)

Faz uma comparação unificada contendo as diferenças entre `old_file` e
`new_file` e o armazena no arquivo `dest`. O
arquivo resultante é legível por humanos. Um parâmetro opcional `context`
especifica quantas linhas de contexto devem ser adicionadas em torno de cada alteração.
Definir o parâmetro `minimal` como true resultará na saída do menor
arquivo de patch possível (pode levar muito tempo).

### Parâmetros

`old_file`
:   Caminho para o primeiro arquivo. Este arquivo atua como o arquivo "antigo".

`new_file`
:   Caminho para o segundo arquivo. Este arquivo atua como um arquivo "novo".

`dest`
:   Caminho do arquivo de patch resultante.

`context`
:   Indica quantas linhas de contexto devem ser incluídas no resultado da
    comparação.

`minimal`
:   Defina este parâmetro como **`true`** se quiser minimizar o tamanho do resultado
    (pode levar muito tempo).

### Valor Retornado

Retorna **`true`** em caso de sucesso ou **`false`** em caso de falha.

### Examples

**Exemplo #1 Exemplo de **xdiff\_file\_diff()****

O código a seguir cria uma comparação unificada de dois arquivos PHP com comprimento de contexto de 2.

```
<?php
$old_version = 'my_script.php';
$new_version = 'my_new_script.php';

xdiff_file_diff($old_version, $new_version, 'my_script.diff', 2);
?>
```

### Notas

> **Nota**:
>
> Esta função não funciona bem com arquivos binários. Para fazer comparações de arquivos
> binários, use a função [xdiff\_file\_bdiff()](function.xdiff-file-bdiff.md)/[xdiff\_file\_rabdiff()](function.xdiff-file-rabdiff.md).

### Veja também

- [xdiff\_file\_patch()](function.xdiff-file-patch.md) - Corrige um arquivo com uma comparação unificada

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
