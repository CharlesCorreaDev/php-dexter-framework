# Retorna o valor de um limite configurável

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.posix-pathconf.php

---

# posix\_pathconf

(PHP 8 >= 8.3.0)

posix\_pathconf — Retorna o valor de um limite configurável

### Descrição

function **posix\_pathconf**([string](language.types.string.md) `$path`, [int](language.types.integer.md) `$name`): [int](language.types.integer.md)|[false](language.types.singleton.md)

**Aviso**

Esta função não
está documentada; apenas a lista de argumentos está disponível.

Retorna o valor de um limite configurável cujo nome é informado no parâmetro `name` para um arquivo informado em `path`.

### Parâmetros

`path`
:   O nome do arquivo cujo limite deve ser obtido.

`name`
:   O nome do limite configurável, uma das seguintes constantes:
    **`POSIX_PC_LINK_MAX`**, **`POSIX_PC_MAX_CANON`**,
    **`POSIX_PC_MAX_INPUT`**, **`POSIX_PC_NAME_MAX`**,
    **`POSIX_PC_PATH_MAX`**, **`POSIX_PC_PIPE_BUF`**,
    **`POSIX_PC_CHOWN_RESTRICTED`**, **`POSIX_PC_NO_TRUNC`**,
    **`POSIX_PC_ALLOC_SIZE_MIN`** ou **`POSIX_PC_SYMLINK_MAX`**.

### Valor Retornado

Retorna o limite configurável ou **`false`**.

### Erros/Exceções

Lança um [ValueError](class.valueerror.md)
quando `path` estiver vazio.

### Examples

**Exemplo #1 Exemplo de **posix\_pathconf()****

Este exemplo obterá o comprimento máximo do nome do caminho
em bytes para o diretório temporário do sistema.

```
<?php
echo posix_pathconf(sys_get_temp_dir(), POSIX_PC_PATH_MAX);
?>
```

O exemplo acima produzirá:

```
4096
```

### Veja também

- [posix\_fpathconf()](function.posix-fpathconf.md) - Retorna o valor de um limite configurável

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
