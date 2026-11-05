# A classe SplTempFileObject

> **Fonte / Source:** https://www.php.net/manual/pt_BR/class.spltempfileobject.php

---

# A classe SplTempFileObject

(PHP 5 >= 5.1.2, PHP 7, PHP 8)

## Introdução

A classe SplTempFileObject oferece uma interface orientada a objetos para um arquivo temporário.

## Resumo da classe

class ****SplTempFileObject****
extends
[SplFileObject](class.splfileobject.md)
{

/\* Constantes herdadas \*/

public
const
[int](language.types.integer.md)
[SplFileObject::DROP\_NEW\_LINE](class.splfileobject.md#splfileobject.constants.drop-new-line);

public
const
[int](language.types.integer.md)
[SplFileObject::READ\_AHEAD](class.splfileobject.md#splfileobject.constants.read-ahead);

public
const
[int](language.types.integer.md)
[SplFileObject::SKIP\_EMPTY](class.splfileobject.md#splfileobject.constants.skip-empty);

public
const
[int](language.types.integer.md)
[SplFileObject::READ\_CSV](class.splfileobject.md#splfileobject.constants.read-csv);

/\* Métodos \*/

public function [\_\_construct](spltempfileobject.construct.md)([int](language.types.integer.md) `$maxMemory` = 2 \* 1024 \* 1024)

/\* Métodos herdados \*/

public function [SplFileObject::current](splfileobject.current.md)(): [string](language.types.string.md)|[array](language.types.array.md)|[false](language.types.singleton.md)

public function [SplFileObject::eof](splfileobject.eof.md)(): [bool](language.types.boolean.md)

public function [SplFileObject::fflush](splfileobject.fflush.md)(): [bool](language.types.boolean.md)

public function [SplFileObject::fgetc](splfileobject.fgetc.md)(): [string](language.types.string.md)|[false](language.types.singleton.md)

public function [SplFileObject::fgetcsv](splfileobject.fgetcsv.md)([string](language.types.string.md) `$separator` = ",", [string](language.types.string.md) `$enclosure` = "\"", [string](language.types.string.md) `$escape` = "\\"): [array](language.types.array.md)|[false](language.types.singleton.md)

public function [SplFileObject::fgets](splfileobject.fgets.md)(): [string](language.types.string.md)

public function [SplFileObject::fgetss](splfileobject.fgetss.md)([string](language.types.string.md) `$allowable_tags` = ?): [string](language.types.string.md)

public function [SplFileObject::flock](splfileobject.flock.md)([int](language.types.integer.md) `$operation`, [int](language.types.integer.md) `&$wouldBlock` = **`null`**): [bool](language.types.boolean.md)

public function [SplFileObject::fpassthru](splfileobject.fpassthru.md)(): [int](language.types.integer.md)

public function [SplFileObject::fputcsv](splfileobject.fputcsv.md)(  
    [array](language.types.array.md) `$fields`,  
    [string](language.types.string.md) `$separator` = ",",  
    [string](language.types.string.md) `$enclosure` = "\"",  
    [string](language.types.string.md) `$escape` = "\\",  
    [string](language.types.string.md) `$eol` = "\n"  
): [int](language.types.integer.md)|[false](language.types.singleton.md)

public function [SplFileObject::fread](splfileobject.fread.md)([int](language.types.integer.md) `$length`): [string](language.types.string.md)|[false](language.types.singleton.md)

public function [SplFileObject::fscanf](splfileobject.fscanf.md)([string](language.types.string.md) `$format`, [mixed](language.types.mixed.md) `&...$vars`): [array](language.types.array.md)|[int](language.types.integer.md)|[null](language.types.null.md)

public function [SplFileObject::fseek](splfileobject.fseek.md)([int](language.types.integer.md) `$offset`, [int](language.types.integer.md) `$whence` = **`SEEK_SET`**): [int](language.types.integer.md)

public function [SplFileObject::fstat](splfileobject.fstat.md)(): [array](language.types.array.md)

public function [SplFileObject::ftell](splfileobject.ftell.md)(): [int](language.types.integer.md)|[false](language.types.singleton.md)

public function [SplFileObject::ftruncate](splfileobject.ftruncate.md)([int](language.types.integer.md) `$size`): [bool](language.types.boolean.md)

public function [SplFileObject::fwrite](splfileobject.fwrite.md)([string](language.types.string.md) `$data`, [?](language.types.null.md)[int](language.types.integer.md) `$length` = **`null`**): [int](language.types.integer.md)|[false](language.types.singleton.md)

public function [SplFileObject::getChildren](splfileobject.getchildren.md)(): [null](language.types.null.md)

public function [SplFileObject::getCsvControl](splfileobject.getcsvcontrol.md)(): [array](language.types.array.md)

public function [SplFileObject::getFlags](splfileobject.getflags.md)(): [int](language.types.integer.md)

public function [SplFileObject::getMaxLineLen](splfileobject.getmaxlinelen.md)(): [int](language.types.integer.md)

public function [SplFileObject::hasChildren](splfileobject.haschildren.md)(): [false](language.types.singleton.md)

public function [SplFileObject::key](splfileobject.key.md)(): [int](language.types.integer.md)

public function [SplFileObject::next](splfileobject.next.md)(): [void](language.types.void.md)

public function [SplFileObject::rewind](splfileobject.rewind.md)(): [void](language.types.void.md)

public function [SplFileObject::seek](splfileobject.seek.md)([int](language.types.integer.md) `$line`): [void](language.types.void.md)

public function [SplFileObject::setCsvControl](splfileobject.setcsvcontrol.md)([string](language.types.string.md) `$separator` = ",", [string](language.types.string.md) `$enclosure` = "\"", [string](language.types.string.md) `$escape` = "\\"): [void](language.types.void.md)

public function [SplFileObject::setFlags](splfileobject.setflags.md)([int](language.types.integer.md) `$flags`): [void](language.types.void.md)

public function [SplFileObject::setMaxLineLen](splfileobject.setmaxlinelen.md)([int](language.types.integer.md) `$maxLength`): [void](language.types.void.md)

public function [SplFileObject::\_\_toString](splfileobject.tostring.md)(): [string](language.types.string.md)

public function [SplFileObject::valid](splfileobject.valid.md)(): [bool](language.types.boolean.md)

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

## Índice

- [SplTempFileObject::\_\_construct](spltempfileobject.construct.md) — Constrói um novo objeto de arquivo temporário

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
