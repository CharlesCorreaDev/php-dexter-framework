# Constantes predefinidas

> **Fonte / Source:** https://www.php.net/manual/pt_BR/eio.constants.php

---

# Constantes predefinidas

As constantes abaixo são definidas por esta extensão e
só estarão disponíveis quando a extensão tiver sido compilada no PHP
ou tiver sido carregada dinamicamente em tempo de execução.

Constantes de prioridade de solicitação:

**`EIO_PRI_MIN`** ([int](language.types.integer.md))
:   Solicita prioridade mínima.

**`EIO_PRI_DEFAULT`** ([int](language.types.integer.md))
:   Solicita prioridade padrão.

**`EIO_PRI_MAX`** ([int](language.types.integer.md))
:   Solicita prioridade máxima.

Argumento [eio\_seek()](function.eio-seek.md) `whence`:

**`EIO_SEEK_SET`** ([int](language.types.integer.md))
:   O deslocamento é definido para um número especificado de bytes (`offset`).

**`EIO_SEEK_CUR`** ([int](language.types.integer.md))
:   O deslocamento é definido para sua localização atual mais bytes de `offset`.

**`EIO_SEEK_END`** ([int](language.types.integer.md))
:   O deslocamento é definido como o tamanho do arquivo mais bytes de `offset`.

Opções usadas com [eio\_readdir()](function.eio-readdir.md):

**`EIO_READDIR_DENTS`** ([int](language.types.integer.md))
:   Opção [eio\_readdir()](function.eio-readdir.md). Se especificada, o argumento 'result' da função de retorno de chamada
    torna-se um array com as seguintes chaves:
    `'names'` - array de nomes de diretórios
    `'dents'` - array de arrays do tipo `struct eio_dirent`
    com as seguintes chaves cada:
    `'name'` - o nome do diretório;
    `'type'` - uma das constants
    *EIO\_DT\_\**;
    `'inode'` - o número do inode, se disponível, caso contrário
    não especificado;

**`EIO_READDIR_DIRS_FIRST`** ([int](language.types.integer.md))
:   Quando esta opção é especificada, os nomes serão retornados em uma ordem
    em que os diretórios prováveis vêm primeiro, na ordem estatística ideal.

**`EIO_READDIR_STAT_ORDER`** ([int](language.types.integer.md))
:   Quando esta opção é especificada, os nomes serão retornados em uma ordem
    adequada para `stat`'ing cada um. Ao planejar
    [stat()](function.stat.md) todos os arquivos em um determinado diretório, a
    ordem retornada provavelmente será mais
    rápida.

**`EIO_READDIR_FOUND_UNKNOWN`** ([int](language.types.integer.md))

**`EIO_DT_UNKNOWN`** ([int](language.types.integer.md))
:   Tipo de nó desconhecido (muito comum). Mais [stat()](function.stat.md) são necessários.

**`EIO_DT_FIFO`** ([int](language.types.integer.md))
:   Tipo de nó FIFO.

**`EIO_DT_CHR`** ([int](language.types.integer.md))
:   Tipo de nó.

**`EIO_DT_MPC`** ([int](language.types.integer.md))
:   Tipo de nó do dispositivo char multiplexado (v7+coerente).

**`EIO_DT_DIR`** ([int](language.types.integer.md))
:   Tipo de nó de diretório.

**`EIO_DT_NAM`** ([int](language.types.integer.md))
:   Tipo de nó de arquivo nomeado especial Xenix.

**`EIO_DT_BLK`** ([int](language.types.integer.md))
:   Tipo de nó.

**`EIO_DT_MPB`** ([int](language.types.integer.md))
:   Dispositivo de bloco multiplexado (v7+coerente).

**`EIO_DT_REG`** ([int](language.types.integer.md))
:   Tipo de nó.

**`EIO_DT_NWK`** ([int](language.types.integer.md))

**`EIO_DT_CMP`** ([int](language.types.integer.md))
:   Tipo de nó especial da rede HP-UX.

**`EIO_DT_LNK`** ([int](language.types.integer.md))
:   Tipo de nó de link.

**`EIO_DT_SOCK`** ([int](language.types.integer.md))
:   Tipo de nó de soquete.

**`EIO_DT_DOOR`** ([int](language.types.integer.md))
:   Tipo de nó de porta Solaris.

**`EIO_DT_WHT`** ([int](language.types.integer.md))
:   Tipo de nó.

**`EIO_DT_MAX`** ([int](language.types.integer.md))
:   Valor mais alto do tipo de nó.

Modos de acesso para o argumento [eio\_open()](function.eio-open.md)
`flags`:

**`EIO_O_RDONLY`** ([int](language.types.integer.md))

**`EIO_O_WRONLY`** ([int](language.types.integer.md))

**`EIO_O_RDWR`** ([int](language.types.integer.md))

**`EIO_O_NONBLOCK`** ([int](language.types.integer.md))

**`EIO_O_APPEND`** ([int](language.types.integer.md))

**`EIO_O_CREAT`** ([int](language.types.integer.md))

**`EIO_O_TRUNC`** ([int](language.types.integer.md))

**`EIO_O_EXCL`** ([int](language.types.integer.md))

**`EIO_O_FSYNC`** ([int](language.types.integer.md))

Opções de argumento `mode` para [eio\_open()](function.eio-open.md):

**`EIO_S_IRUSR`** ([int](language.types.integer.md))

**`EIO_S_IWUSR`** ([int](language.types.integer.md))

**`EIO_S_IXUSR`** ([int](language.types.integer.md))

**`EIO_S_IRGRP`** ([int](language.types.integer.md))

**`EIO_S_IWGRP`** ([int](language.types.integer.md))

**`EIO_S_IXGRP`** ([int](language.types.integer.md))

**`EIO_S_IROTH`** ([int](language.types.integer.md))

**`EIO_S_IWOTH`** ([int](language.types.integer.md))

**`EIO_S_IXOTH`** ([int](language.types.integer.md))

**`EIO_S_IFREG`** ([int](language.types.integer.md))

**`EIO_S_IFCHR`** ([int](language.types.integer.md))

**`EIO_S_IFBLK`** ([int](language.types.integer.md))

**`EIO_S_IFIFO`** ([int](language.types.integer.md))

**`EIO_S_IFSOCK`** ([int](language.types.integer.md))

Opções [eio\_sync\_file\_range()](function.eio-sync-file-range.md):

**`EIO_SYNC_FILE_RANGE_WAIT_BEFORE`** ([int](language.types.integer.md))

**`EIO_SYNC_FILE_RANGE_WRITE`** ([int](language.types.integer.md))

**`EIO_SYNC_FILE_RANGE_WAIT_AFTER`** ([int](language.types.integer.md))

Opções [eio\_fallocate()](function.eio-fallocate.md):

**`EIO_FALLOC_FL_KEEP_SIZE`** ([int](language.types.integer.md))

> **Nota**:
>
> As constantes *EIO\_S\_I\** têm o mesmo significado que suas
> contrapartes *S\_I\** POSIX.

> **Nota**:
>
> As constantes *EIO\_SYNC\_FILE\_\** têm o mesmo significado que suas
> contrapartes *SYNC\_FILE\_\*\**.

> **Nota**:
>
> Constantes *EIO\_O\_\** têm o mesmo significado que suas
> contrapartes *O\_\** POSIX.

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
