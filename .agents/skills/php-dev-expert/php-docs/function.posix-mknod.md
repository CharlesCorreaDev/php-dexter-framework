# Cria um arquivo especial ou comum (POSIX.1)

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.posix-mknod.php

---

# posix\_mknod

(PHP 5 >= 5.1.0, PHP 7, PHP 8)

posix\_mknod — 
Cria um arquivo especial ou comum (POSIX.1)

### Descrição

function **posix\_mknod**(  
    [string](language.types.string.md) `$filename`,  
    [int](language.types.integer.md) `$flags`,  
    [int](language.types.integer.md) `$major` = 0,  
    [int](language.types.integer.md) `$minor` = 0  
): [bool](language.types.boolean.md)

Cria um arquivo especial ou comum.

### Parâmetros

`filename`
:   O arquivo a ser criado

`flags`
:   Este parâmetro é construído por uma operação OR binária entre tipos de arquivo (uma das
    seguintes constantes: **`POSIX_S_IFREG`**,
    **`POSIX_S_IFCHR`**, **`POSIX_S_IFBLK`**,
    **`POSIX_S_IFIFO`** ou
    **`POSIX_S_IFSOCK`**) e permissões.

`major`
:   O identificador primário do kernel do dispositivo (necessário passar ao usar
    **`S_IFCHR`** ou **`S_IFBLK`**).

`minor`
:   O identificador secundário do kernel do dispositivo

### Valor Retornado

Retorna **`true`** em caso de sucesso ou **`false`** em caso de falha.

### Examples

**Exemplo #1 Um exemplo de **posix\_mknod()****

```
<?php

$file = '/tmp/tmpfile';  // nome do arquivo
$type = POSIX_S_IFBLK;   // tipo do arquivo
$permissions = 0777;     // octal
$major = 1;
$minor = 8;              // /dev/random

if (!posix_mknod($file, $type | $permissions, $major, $minor)) {
    die('Error ' . posix_get_last_error() . ': ' . posix_strerror(posix_get_last_error()));
}

?>
```

### Veja também

- [posix\_mkfifo()](function.posix-mkfifo.md) - Cria um arquivo especial FIFO (um pipe nomeado)

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
