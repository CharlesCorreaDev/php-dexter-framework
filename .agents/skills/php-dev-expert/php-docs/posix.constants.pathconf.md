# Constantes de posix_pathconf

> **Fonte / Source:** https://www.php.net/manual/pt_BR/posix.constants.pathconf.php

---

## Constantes de [posix\_pathconf()](function.posix-pathconf.md)

**`POSIX_PC_LINK_MAX`** ([int](language.types.integer.md))
:   O número máximo de ligações que um dado arquivo ou diretório pode ter.
    Disponível a partir do PHP 8.3.0.

**`POSIX_PC_MAX_CANON`** ([int](language.types.integer.md))
:   O número máximo de bytes em um buffer de entrada canônico terminal
    (caminho sendo então um arquivo especial de caracteres).
    Disponível a partir do PHP 8.3.0.

**`POSIX_PC_MAX_INPUT`** ([int](language.types.integer.md))
:   O número máximo de bytes de uma fila de entrada de terminal
    (caminho sendo então um arquivo especial de caracteres).
    Disponível a partir do PHP 8.3.0.

**`POSIX_PC_NAME_MAX`** ([int](language.types.integer.md))
:   O número máximo de caracteres para um nome de arquivo sozinho, não seu caminho.
    Disponível a partir do PHP 8.3.0.

**`POSIX_PC_PATH_MAX`** ([int](language.types.integer.md))
:   O número máximo de caracteres para um nome de caminho completo.
    Disponível a partir do PHP 8.3.0.

**`POSIX_PC_PIPE_BUF`** ([int](language.types.integer.md))
:   O número máximo de bytes que podem ser escritos em um pipe em uma operação.
    Disponível a partir do PHP 8.3.0.

**`POSIX_PC_CHOWN_RESTRICTED`** ([int](language.types.integer.md))
:   Informa se privilégios são necessários para permitir que [chown()](function.chown.md) funcione.
    Disponível a partir do PHP 8.3.0.

**`POSIX_PC_NO_TRUNC`** ([int](language.types.integer.md))
:   Informa se um nome de arquivo (ou arquivos sob um diretório) é maior que **`POSIX_PC_NAME_MAX`**.
    Disponível a partir do PHP 8.3.0.

**`POSIX_PC_ALLOC_SIZE_MIN`** ([int](language.types.integer.md))
:   O número mínimo de bytes de armazenamento alocados para qualquer parte de um arquivo.
    Disponível a partir do PHP 8.3.0.

**`POSIX_PC_ALLOC_SYMLINK_MAX`** ([int](language.types.integer.md))
:   O número máximo de ligações simbólicas que um dado arquivo ou diretório pode ter.
    Disponível a partir do PHP 8.3.0.

**`POSIX_PC_SYMLINK_MAX`** ([int](language.types.integer.md))
:   O número máximo de bytes em uma ligação simbólica.
    Disponível a partir do PHP 8.3.0.

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
