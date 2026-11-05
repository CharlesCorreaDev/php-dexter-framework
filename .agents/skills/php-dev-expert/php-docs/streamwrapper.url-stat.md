# Obtém informação sobre um arquivo

> **Fonte / Source:** https://www.php.net/manual/pt_BR/streamwrapper.url-stat.php

---

# streamWrapper::url\_stat

(PHP 4 >= 4.3.2, PHP 5, PHP 7, PHP 8)

streamWrapper::url\_stat — Obtém informação sobre um arquivo

### Descrição

public function **streamWrapper::url\_stat**([string](language.types.string.md) `$path`, [int](language.types.integer.md) `$flags`): [array](language.types.array.md)|[false](language.types.singleton.md)

Este método é chamado em resposta a todas as funções relacionadas a [stat()](function.stat.md),
como:

- [copy()](function.copy.md)
- [fileperms()](function.fileperms.md)
- [fileinode()](function.fileinode.md)
- [filesize()](function.filesize.md)
- [fileowner()](function.fileowner.md)
- [filegroup()](function.filegroup.md)
- [fileatime()](function.fileatime.md)
- [filemtime()](function.filemtime.md)
- [filectime()](function.filectime.md)
- [filetype()](function.filetype.md)
- [is\_writable()](function.is-writable.md)
- [is\_readable()](function.is-readable.md)
- [is\_executable()](function.is-executable.md)
- [is\_file()](function.is-file.md)
- [is\_dir()](function.is-dir.md)
- [is\_link()](function.is-link.md)
- [file\_exists()](function.file-exists.md)
- [lstat()](function.lstat.md)
- [stat()](function.stat.md)
- [SplFileInfo::getPerms()](splfileinfo.getperms.md)
- [SplFileInfo::getInode()](splfileinfo.getinode.md)
- [SplFileInfo::getSize()](splfileinfo.getsize.md)
- [SplFileInfo::getOwner()](splfileinfo.getowner.md)
- [SplFileInfo::getGroup()](splfileinfo.getgroup.md)
- [SplFileInfo::getATime()](splfileinfo.getatime.md)
- [SplFileInfo::getMTime()](splfileinfo.getmtime.md)
- [SplFileInfo::getCTime()](splfileinfo.getctime.md)
- [SplFileInfo::getType()](splfileinfo.gettype.md)
- [SplFileInfo::isWritable()](splfileinfo.iswritable.md)
- [SplFileInfo::isReadable()](splfileinfo.isreadable.md)
- [SplFileInfo::isExecutable()](splfileinfo.isexecutable.md)
- [SplFileInfo::isFile()](splfileinfo.isfile.md)
- [SplFileInfo::isDir()](splfileinfo.isdir.md)
- [SplFileInfo::isLink()](splfileinfo.islink.md)
- [RecursiveDirectoryIterator::hasChildren()](recursivedirectoryiterator.haschildren.md)

### Parâmetros

`path`
:   O caminho ou URL do arquivo a explorar. Note que no caso de uma URL, ela deve ser delimitada com ://.
    Outras formas de URL não são suportadas.

`flags`
:   Contém opções adicionais configuradas pela API de fluxos. Pode conter uma ou mais
    dos valores a seguir somados (com a operação OR).

    | Opção | Descrição |
    | --- | --- |
    | STREAM\_URL\_STAT\_LINK | Para recursos com a habilidade de criar atalho a outro recurso (como um redirecionamento HTTP ou uma ligação simbólica do sistema de arquivos). Esta opção especifica que apenas informação sobre o atalho em si deve ser retornada, e não sobre o recurso apontado pelo atalho. Esta função é definida em resposta a chamadas a [lstat()](function.lstat.md), [is\_link()](function.is-link.md) ou [filetype()](function.filetype.md). |
    | STREAM\_URL\_STAT\_QUIET | Se esta opção for definida, o empacotador não deve emitir erros. Se a opção não for definida, o programador é responsável por reportar erros usando a função [trigger\_error()](function.trigger-error.md) durante a obtenção de informações sobre o arquivo. |

### Valor Retornado

Deve retornar um [array](language.types.array.md) com os mesmos elementos que [stat()](function.stat.md) retorna.
Valores desconhecidos ou indisponíveis devem ser definidos para um valor racional
(normalmente `0`). Atenção especial deve ser prestada ao
`mode` como documentado na função [stat()](function.stat.md).
Deve retornar **`false`** em caso de falha.

### Erros/Exceções

Emite
um **`E_WARNING`** se a chamada a este método falhar
(ou seja, não implementado).

### Notas

> **Nota**:
>
> A
> propriedade streamWrapper::$context
> será atualizada se um contexto válido for passado para a função invocadora.

### Veja também

- [stat()](function.stat.md) - Obtém informações sobre um arquivo
- [streamwrapper::stream\_stat()](streamwrapper.stream-stat.md) - Obtém informação sobre um recurso de arquivo

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
