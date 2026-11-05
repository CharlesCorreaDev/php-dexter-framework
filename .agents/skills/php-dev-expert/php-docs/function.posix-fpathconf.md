# Retorna o valor de um limite configurável

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.posix-fpathconf.php

---

# posix\_fpathconf

(PHP 8 >= 8.3.0)

posix\_fpathconf — Retorna o valor de um limite configurável

### Descrição

function **posix\_fpathconf**([resource](language.types.resource.md)|[int](language.types.integer.md) `$file_descriptor`, [int](language.types.integer.md) `$name`): [int](language.types.integer.md)|[false](language.types.singleton.md)

Retorna o valor de um limite configurável de nome `name`
para o arquivo `file_descriptor`.

### Parâmetros

`file_descriptor`
:   O descritor de arquivo, que deve ser um
    [resource](language.types.resource.md) de arquivo ou um [int](language.types.integer.md). Um [int](language.types.integer.md)
    será interpretado como um descritor de arquivo que pode ser passado diretamente
    para a chamada de sistema subjacente.

`name`
:   O nome do limite configurável, uma das constantes a seguir.
    **`POSIX_PC_LINK_MAX`**, **`POSIX_PC_MAX_CANON`**,
    **`POSIX_PC_MAX_INPUT`**, **`POSIX_PC_NAME_MAX`**,
    **`POSIX_PC_PATH_MAX`**, **`POSIX_PC_PIPE_BUF`**,
    **`POSIX_PC_CHOWN_RESTRICTED`**, **`POSIX_PC_NO_TRUNC`**,
    **`POSIX_PC_ALLOC_SIZE_MIN`** ou **`POSIX_PC_SYMLINK_MAX`**.

### Valor Retornado

Retorna o limite configurável ou **`false`**.

### Erros/Exceções

Lança um [ValueError](class.valueerror.md)
quando `resource` for inválido.

### Registro de Alterações

| Versão | Descrição |
| --- | --- |
| 8.5.0 | Agora define last\_error como **`EBADF`** e emite um **`E_WARNING`** quando um descritor de arquivo inválido é encontrado. |

### Examples

**Exemplo #1 Exemplo de **posix\_fpathconf()****

Este exemplo obtém o tamanho máximo de um caminho em bytes
para o diretório atual.

```
<?php
$fd = fopen(__DIR__, "r");
echo posix_fpathconf($fd, POSIX_PC_PATH_MAX);
?>
```

O exemplo acima produzirá:

```
4096
```

### Veja também

- [posix\_pathconf()](function.posix-pathconf.md) - Retorna o valor de um limite configurável

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
