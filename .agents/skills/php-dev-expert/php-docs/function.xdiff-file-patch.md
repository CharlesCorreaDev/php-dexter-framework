# Corrige um arquivo com uma comparação unificada

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.xdiff-file-patch.php

---

# xdiff\_file\_patch

(PECL xdiff >= 0.2.0)

xdiff\_file\_patch — Corrige um arquivo com uma comparação unificada

### Descrição

function **xdiff\_file\_patch**(  
    [string](language.types.string.md) `$file`,  
    [string](language.types.string.md) `$patch`,  
    [string](language.types.string.md) `$dest`,  
    [int](language.types.integer.md) `$flags` = DIFF\_PATCH\_NORMAL  
): [mixed](language.types.mixed.md)

Corrige o arquivo `file` com um `patch` e armazena o resultado em um arquivo.
`patch` deve ser uma comparação unificada criada pela função
[xdiff\_file\_diff()](function.xdiff-file-diff.md)/[xdiff\_string\_diff()](function.xdiff-string-diff.md).
Um parâmetro opcional `flags` especifica o modo de operação.

### Parâmetros

`file`
:   O arquivo original.

`patch`
:   O arquivo de patch unificado. Ele deve ser criado usando as funções [xdiff\_string\_diff()](function.xdiff-string-diff.md),
    [xdiff\_file\_diff()](function.xdiff-file-diff.md) ou ferramentas compatíveis.

`dest`
:   Caminho do arquivo resultante.

`flags`
:   Pode ser **`XDIFF_PATCH_NORMAL`** (modo padrão,
    patch normal) ou **`XDIFF_PATCH_REVERSE`** (patch
    reverso).

    A partir da versão 1.5.0, pode-se também usar a operação binária OR para habilitar o sinalizador
    **`XDIFF_PATCH_IGNORESPACE`**.

### Valor Retornado

Retorna **`false`** se ocorreu um erro interno, string com pedaços rejeitados
se o patch não pôde ser aplicado ou **`true`** se o patch foi aplicado com sucesso.

### Examples

**Exemplo #1 Exemplo de **xdiff\_file\_patch()****

O código a seguir aplica uma comparação unificada a um arquivo.

```
<?php
$old_version = 'my_script-1.0.php';
$patch = 'my_script.patch';

$errors = xdiff_file_patch($old_version, $patch, 'my_script-1.1.php');
if (is_string($errors)) {
   echo "Rejects:\n";
   echo $errors;
}

?>
```

**Exemplo #2 Patch reversing example**

O código a seguir reverte um patch.

```
<?php
$new_version = 'my_script-1.1.php';
$patch = 'my_script.patch';

$errors = xdiff_file_patch($new_version, $patch, 'my_script-1.0.php', XDIFF_PATCH_REVERSE);
if (is_string($errors)) {
   echo "Rejects:\n";
   echo $errors;
}

?>
```

### Veja também

- [xdiff\_file\_diff()](function.xdiff-file-diff.md) - Faz uma comparação unificada de dois arquivos

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
