# A classe SplFileObject

> **Fonte / Source:** https://www.php.net/manual/pt_BR/class.splfileobject.php

---

# A classe SplFileObject

(PHP 5 >= 5.1.0, PHP 7, PHP 8)

## Introdução

A classe SplFileObject oferece uma interface orientada a objetos para um arquivo.

## Resumo da classe

class ****SplFileObject****
extends
[SplFileInfo](class.splfileinfo.md)
implements
[RecursiveIterator](class.recursiveiterator.md),
[SeekableIterator](class.seekableiterator.md) {

/\* Constantes \*/

public
const
[int](language.types.integer.md)
[DROP\_NEW\_LINE](class.splfileobject.md#splfileobject.constants.drop-new-line);

public
const
[int](language.types.integer.md)
[READ\_AHEAD](class.splfileobject.md#splfileobject.constants.read-ahead);

public
const
[int](language.types.integer.md)
[SKIP\_EMPTY](class.splfileobject.md#splfileobject.constants.skip-empty);

public
const
[int](language.types.integer.md)
[READ\_CSV](class.splfileobject.md#splfileobject.constants.read-csv);

/\* Métodos \*/

public function [\_\_construct](splfileobject.construct.md)(  
    [string](language.types.string.md) `$filename`,  
    [string](language.types.string.md) `$mode` = "r",  
    [bool](language.types.boolean.md) `$useIncludePath` = **`false`**,  
    [?](language.types.null.md)[resource](language.types.resource.md) `$context` = **`null`**  
)

public function [current](splfileobject.current.md)(): [string](language.types.string.md)|[array](language.types.array.md)|[false](language.types.singleton.md)

public function [eof](splfileobject.eof.md)(): [bool](language.types.boolean.md)

public function [fflush](splfileobject.fflush.md)(): [bool](language.types.boolean.md)

public function [fgetc](splfileobject.fgetc.md)(): [string](language.types.string.md)|[false](language.types.singleton.md)

public function [fgetcsv](splfileobject.fgetcsv.md)([string](language.types.string.md) `$separator` = ",", [string](language.types.string.md) `$enclosure` = "\"", [string](language.types.string.md) `$escape` = "\\"): [array](language.types.array.md)|[false](language.types.singleton.md)

public function [fgets](splfileobject.fgets.md)(): [string](language.types.string.md)

public function [fgetss](splfileobject.fgetss.md)([string](language.types.string.md) `$allowable_tags` = ?): [string](language.types.string.md)

public function [flock](splfileobject.flock.md)([int](language.types.integer.md) `$operation`, [int](language.types.integer.md) `&$wouldBlock` = **`null`**): [bool](language.types.boolean.md)

public function [fpassthru](splfileobject.fpassthru.md)(): [int](language.types.integer.md)

public function [fputcsv](splfileobject.fputcsv.md)(  
    [array](language.types.array.md) `$fields`,  
    [string](language.types.string.md) `$separator` = ",",  
    [string](language.types.string.md) `$enclosure` = "\"",  
    [string](language.types.string.md) `$escape` = "\\",  
    [string](language.types.string.md) `$eol` = "\n"  
): [int](language.types.integer.md)|[false](language.types.singleton.md)

public function [fread](splfileobject.fread.md)([int](language.types.integer.md) `$length`): [string](language.types.string.md)|[false](language.types.singleton.md)

public function [fscanf](splfileobject.fscanf.md)([string](language.types.string.md) `$format`, [mixed](language.types.mixed.md) `&...$vars`): [array](language.types.array.md)|[int](language.types.integer.md)|[null](language.types.null.md)

public function [fseek](splfileobject.fseek.md)([int](language.types.integer.md) `$offset`, [int](language.types.integer.md) `$whence` = **`SEEK_SET`**): [int](language.types.integer.md)

public function [fstat](splfileobject.fstat.md)(): [array](language.types.array.md)

public function [ftell](splfileobject.ftell.md)(): [int](language.types.integer.md)|[false](language.types.singleton.md)

public function [ftruncate](splfileobject.ftruncate.md)([int](language.types.integer.md) `$size`): [bool](language.types.boolean.md)

public function [fwrite](splfileobject.fwrite.md)([string](language.types.string.md) `$data`, [?](language.types.null.md)[int](language.types.integer.md) `$length` = **`null`**): [int](language.types.integer.md)|[false](language.types.singleton.md)

public function [getChildren](splfileobject.getchildren.md)(): [null](language.types.null.md)

public function [getCsvControl](splfileobject.getcsvcontrol.md)(): [array](language.types.array.md)

public function [getFlags](splfileobject.getflags.md)(): [int](language.types.integer.md)

public function [getMaxLineLen](splfileobject.getmaxlinelen.md)(): [int](language.types.integer.md)

public function [hasChildren](splfileobject.haschildren.md)(): [false](language.types.singleton.md)

public function [key](splfileobject.key.md)(): [int](language.types.integer.md)

public function [next](splfileobject.next.md)(): [void](language.types.void.md)

public function [rewind](splfileobject.rewind.md)(): [void](language.types.void.md)

public function [seek](splfileobject.seek.md)([int](language.types.integer.md) `$line`): [void](language.types.void.md)

public function [setCsvControl](splfileobject.setcsvcontrol.md)([string](language.types.string.md) `$separator` = ",", [string](language.types.string.md) `$enclosure` = "\"", [string](language.types.string.md) `$escape` = "\\"): [void](language.types.void.md)

public function [setFlags](splfileobject.setflags.md)([int](language.types.integer.md) `$flags`): [void](language.types.void.md)

public function [setMaxLineLen](splfileobject.setmaxlinelen.md)([int](language.types.integer.md) `$maxLength`): [void](language.types.void.md)

public function [\_\_toString](splfileobject.tostring.md)(): [string](language.types.string.md)

public function [valid](splfileobject.valid.md)(): [bool](language.types.boolean.md)

/\* Métodos herdados \*/

public function [SplFileInfo::getATime](splfileinfo.getatime.md)(): [int](language.types.integer.md)|[false](language.types.singleton.md)

public function [SplFileInfo::getBasename](splfileinfo.getbasename.md)([string](language.types.string.md) `$suffix` = ""): [string](language.types.string.md)

public function [SplFileInfo::getCTime](splfileinfo.getctime.md)(): [int](language.types.integer.md)|[false](language.types.singleton.md)

public function [SplFileInfo::getExtension](splfileinfo.getextension.md)(): [string](language.types.string.md)

public function [SplFileInfo::getFileInfo](splfileinfo.getfileinfo.md)([?](language.types.null.md)[string](language.types.string.md) `$class` = **`null`**): [SplFileInfo](class.splfileinfo.md)

public function [SplFileInfo::getFilename](splfileinfo.getfilename.md)(): [string](language.types.string.md)

public function [SplFileInfo::getGroup](splfileinfo.getgroup.md)(): [int](language.types.integer.md)|[false](language.types.singleton.md)

public function [SplFileInfo::getInode](splfileinfo.getinode.md)(): [int](language.types.integer.md)|[false](language.types.singleton.md)

public function [SplFileInfo::getLinkTarget](splfileinfo.getlinktarget.md)(): [string](language.types.string.md)|[false](language.types.singleton.md)

public function [SplFileInfo::getMTime](splfileinfo.getmtime.md)(): [int](language.types.integer.md)|[false](language.types.singleton.md)

public function [SplFileInfo::getOwner](splfileinfo.getowner.md)(): [int](language.types.integer.md)|[false](language.types.singleton.md)

public function [SplFileInfo::getPath](splfileinfo.getpath.md)(): [string](language.types.string.md)

public function [SplFileInfo::getPathInfo](splfileinfo.getpathinfo.md)([?](language.types.null.md)[string](language.types.string.md) `$class` = **`null`**): [?](language.types.null.md)[SplFileInfo](class.splfileinfo.md)

public function [SplFileInfo::getPathname](splfileinfo.getpathname.md)(): [string](language.types.string.md)

public function [SplFileInfo::getPerms](splfileinfo.getperms.md)(): [int](language.types.integer.md)|[false](language.types.singleton.md)

public function [SplFileInfo::getRealPath](splfileinfo.getrealpath.md)(): [string](language.types.string.md)|[false](language.types.singleton.md)

public function [SplFileInfo::getSize](splfileinfo.getsize.md)(): [int](language.types.integer.md)|[false](language.types.singleton.md)

public function [SplFileInfo::getType](splfileinfo.gettype.md)(): [string](language.types.string.md)|[false](language.types.singleton.md)

public function [SplFileInfo::isDir](splfileinfo.isdir.md)(): [bool](language.types.boolean.md)

public function [SplFileInfo::isExecutable](splfileinfo.isexecutable.md)(): [bool](language.types.boolean.md)

public function [SplFileInfo::isFile](splfileinfo.isfile.md)(): [bool](language.types.boolean.md)

public function [SplFileInfo::isLink](splfileinfo.islink.md)(): [bool](language.types.boolean.md)

public function [SplFileInfo::isReadable](splfileinfo.isreadable.md)(): [bool](language.types.boolean.md)

public function [SplFileInfo::isWritable](splfileinfo.iswritable.md)(): [bool](language.types.boolean.md)

public function [SplFileInfo::openFile](splfileinfo.openfile.md)([string](language.types.string.md) `$mode` = "r", [bool](language.types.boolean.md) `$useIncludePath` = **`false`**, [?](language.types.null.md)[resource](language.types.resource.md) `$context` = **`null`**): [SplFileObject](class.splfileobject.md)

public function [SplFileInfo::setFileClass](splfileinfo.setfileclass.md)([string](language.types.string.md) `$class` = **`SplFileObject::class`**): [void](language.types.void.md)

public function [SplFileInfo::setInfoClass](splfileinfo.setinfoclass.md)([string](language.types.string.md) `$class` = **`SplFileInfo::class`**): [void](language.types.void.md)

public function [SplFileInfo::\_\_toString](splfileinfo.tostring.md)(): [string](language.types.string.md)

}

## Constantes predefinidas

**`SplFileObject::DROP_NEW_LINE`**
:   Remove quebras de linha no final de uma linha.

**`SplFileObject::READ_AHEAD`**
:   Lê ao rebobinar/avançar.

**`SplFileObject::SKIP_EMPTY`**
:   Pula linhas vazias no arquivo. Isso requer que a flag **`READ_AHEAD`** esteja ativada para funcionar como esperado.

**`SplFileObject::READ_CSV`**
:   Lê linhas como linhas CSV.

## Registro de Alterações

| Versão | Descrição |
| --- | --- |
| 8.4.0 | As constantes de classe agora são tipadas. |

## Índice

- [SplFileObject::\_\_construct](splfileobject.construct.md) — Constrói um novo objeto de arquivo
- [SplFileObject::current](splfileobject.current.md) — Recupera linha atual do arquivo
- [SplFileObject::eof](splfileobject.eof.md) — Chegou ao final do arquivo
- [SplFileObject::fflush](splfileobject.fflush.md) — Escreve o buffer de saída para o arquivo
- [SplFileObject::fgetc](splfileobject.fgetc.md) — Obtém caractere do arquivo
- [SplFileObject::fgetcsv](splfileobject.fgetcsv.md) — Obtém linha do arquivo e interpreta como campos CSV
- [SplFileObject::fgets](splfileobject.fgets.md) — Obtém linha do arquivo
- [SplFileObject::fgetss](splfileobject.fgetss.md) — Obtém linha do arquivo e remove tags HTML
- [SplFileObject::flock](splfileobject.flock.md) — Bloqueio de arquivo portável
- [SplFileObject::fpassthru](splfileobject.fpassthru.md) — Produz todos os dados restantes em um ponteiro de arquivo
- [SplFileObject::fputcsv](splfileobject.fputcsv.md) — Escreve um array de campos como uma linha CSV
- [SplFileObject::fread](splfileobject.fread.md) — Lê do arquivo
- [SplFileObject::fscanf](splfileobject.fscanf.md) — Analisa a entrada do arquivo de acordo com um formato
- [SplFileObject::fseek](splfileobject.fseek.md) — Aponta para uma posição
- [SplFileObject::fstat](splfileobject.fstat.md) — Obtém informações sobre o arquivo
- [SplFileObject::ftell](splfileobject.ftell.md) — Retorna a posição atual do arquivo
- [SplFileObject::ftruncate](splfileobject.ftruncate.md) — Trunca o arquivo para um determinado comprimento
- [SplFileObject::fwrite](splfileobject.fwrite.md) — Escreve no arquivo
- [SplFileObject::getChildren](splfileobject.getchildren.md) — Sem objetivo
- [SplFileObject::getCsvControl](splfileobject.getcsvcontrol.md) — Obtém o delimitador, o caractere de fechamento e o caractere de escape para CSV
- [SplFileObject::getCurrentLine](splfileobject.getcurrentline.md) — Sinônimo de SplFileObject::fgets
- [SplFileObject::getFlags](splfileobject.getflags.md) — Obtém as opções para o SplFileObject
- [SplFileObject::getMaxLineLen](splfileobject.getmaxlinelen.md) — Obtém o comprimento máximo da linha
- [SplFileObject::hasChildren](splfileobject.haschildren.md) — SplFileObject não tem filhos
- [SplFileObject::key](splfileobject.key.md) — Obtém o número da linha
- [SplFileObject::next](splfileobject.next.md) — Lê próxima linha
- [SplFileObject::rewind](splfileobject.rewind.md) — Rebobina o arquivo para a primeira linha
- [SplFileObject::seek](splfileobject.seek.md) — Aponta para uma linha especificada
- [SplFileObject::setCsvControl](splfileobject.setcsvcontrol.md) — Definir o delimitador, o encapsulador e o caractere de escape para CSV
- [SplFileObject::setFlags](splfileobject.setflags.md) — Define as opções para o SplFileObject
- [SplFileObject::setMaxLineLen](splfileobject.setmaxlinelen.md) — Define o comprimento máximo da linha
- [SplFileObject::\_\_toString](splfileobject.tostring.md) — Retorna a linha atual como uma string
- [SplFileObject::valid](splfileobject.valid.md) — Não está no final do arquivo (EOF)

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
