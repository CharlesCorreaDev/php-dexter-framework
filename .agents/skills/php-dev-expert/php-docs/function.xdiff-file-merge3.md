# Mescla 3 arquivos em um

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.xdiff-file-merge3.php

---

# xdiff\_file\_merge3

(PECL xdiff >= 0.2.0)

xdiff\_file\_merge3 — Mescla 3 arquivos em um

### Descrição

function **xdiff\_file\_merge3**(  
    [string](language.types.string.md) `$old_file`,  
    [string](language.types.string.md) `$new_file1`,  
    [string](language.types.string.md) `$new_file2`,  
    [string](language.types.string.md) `$dest`  
): [mixed](language.types.mixed.md)

Mescla três arquivos em um e armazena o resultado em um arquivo `dest`.
O `old_file` é uma versão original, enquanto o `new_file1`
e o `new_file2` são versões modificadas de um original.

### Parâmetros

`old_file`
:   Caminho para o primeiro arquivo. Atua como arquivo "antigo".

`new_file1`
:   Caminho para o segundo arquivo. Ele atua como uma versão modificada de `old_file`.

`new_file2`
:   Caminho para o terceiro arquivo. Ele atua como uma versão modificada de `old_file`.

`dest`
:   Caminho do arquivo resultante, contendo as alterações mescladas de `new_file1` e
    `new_file2`.

### Valor Retornado

Retorna **`true`** se a mesclagem foi bem-sucedida, string com pedaços rejeitados se
não foi ou **`false`** se ocorreu um erro interno.

### Examples

**Exemplo #1 Exemplo de **xdiff\_file\_merge3()****

O código a seguir mescla três arquivos em um.

```
<?php
$old_version = 'original_script.php';
$fix1 = 'script_with_fix1.php';
$fix2 = 'script_with_fix2.php';

$errors = xdiff_file_merge3($old_version, $fix1, $fix2, 'fixed_script.php');
if (is_string($errors)) {
    echo "Rejects:\n";
    echo $errors;
}
?>
```

### Veja também

- [xdiff\_string\_merge3()](function.xdiff-string-merge3.md) - Mesclar 3 strings em uma

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
