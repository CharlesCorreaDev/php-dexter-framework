# A classe GlobIterator

> **Fonte / Source:** https://www.php.net/manual/pt_BR/class.globiterator.php

---

# A classe GlobIterator

(PHP 5 >= 5.3.0, PHP 7, PHP 8)

## Introdução

Itera através de um sistema de arquivos de forma semelhante ao
[glob()](function.glob.md).

## Resumo da classe

class ****GlobIterator****
extends
[FilesystemIterator](class.filesystemiterator.md)
implements
[Countable](class.countable.md) {

/\* Constantes herdadas \*/

public
const
[int](language.types.integer.md)
[FilesystemIterator::CURRENT\_MODE\_MASK](class.filesystemiterator.md#filesystemiterator.constants.current-mode-mask);

public
const
[int](language.types.integer.md)
[FilesystemIterator::CURRENT\_AS\_PATHNAME](class.filesystemiterator.md#filesystemiterator.constants.current-as-pathname);

public
const
[int](language.types.integer.md)
[FilesystemIterator::CURRENT\_AS\_FILEINFO](class.filesystemiterator.md#filesystemiterator.constants.current-as-fileinfo);

public
const
[int](language.types.integer.md)
[FilesystemIterator::CURRENT\_AS\_SELF](class.filesystemiterator.md#filesystemiterator.constants.current-as-self);

public
const
[int](language.types.integer.md)
[FilesystemIterator::KEY\_MODE\_MASK](class.filesystemiterator.md#filesystemiterator.constants.key-mode-mask);

public
const
[int](language.types.integer.md)
[FilesystemIterator::KEY\_AS\_PATHNAME](class.filesystemiterator.md#filesystemiterator.constants.key-as-pathname);

public
const
[int](language.types.integer.md)
[FilesystemIterator::FOLLOW\_SYMLINKS](class.filesystemiterator.md#filesystemiterator.constants.follow-symlinks);

public
const
[int](language.types.integer.md)
[FilesystemIterator::KEY\_AS\_FILENAME](class.filesystemiterator.md#filesystemiterator.constants.key-as-filename);

public
const
[int](language.types.integer.md)
[FilesystemIterator::NEW\_CURRENT\_AND\_KEY](class.filesystemiterator.md#filesystemiterator.constants.new-current-and-key);

public
const
[int](language.types.integer.md)
[FilesystemIterator::OTHER\_MODE\_MASK](class.filesystemiterator.md#filesystemiterator.constants.other-mode-mask);

public
const
[int](language.types.integer.md)
[FilesystemIterator::SKIP\_DOTS](class.filesystemiterator.md#filesystemiterator.constants.skip-dots);

public
const
[int](language.types.integer.md)
[FilesystemIterator::UNIX\_PATHS](class.filesystemiterator.md#filesystemiterator.constants.unix-paths);

/\* Métodos \*/

public function [\_\_construct](globiterator.construct.md)([string](language.types.string.md) `$pattern`, [int](language.types.integer.md) `$flags` = FilesystemIterator::KEY\_AS\_PATHNAME | FilesystemIterator::CURRENT\_AS\_FILEINFO)

public function [count](globiterator.count.md)(): [int](language.types.integer.md)

/\* Métodos herdados \*/

public function [FilesystemIterator::current](filesystemiterator.current.md)(): [string](language.types.string.md)|[SplFileInfo](class.splfileinfo.md)|[FilesystemIterator](class.filesystemiterator.md)

public function [FilesystemIterator::getFlags](filesystemiterator.getflags.md)(): [int](language.types.integer.md)

public function [FilesystemIterator::key](filesystemiterator.key.md)(): [string](language.types.string.md)

public function [FilesystemIterator::next](filesystemiterator.next.md)(): [void](language.types.void.md)

public function [FilesystemIterator::rewind](filesystemiterator.rewind.md)(): [void](language.types.void.md)

public function [FilesystemIterator::setFlags](filesystemiterator.setflags.md)([int](language.types.integer.md) `$flags`): [void](language.types.void.md)

public function [DirectoryIterator::current](directoryiterator.current.md)(): [mixed](language.types.mixed.md)

public function [DirectoryIterator::getBasename](directoryiterator.getbasename.md)([string](language.types.string.md) `$suffix` = ""): [string](language.types.string.md)

public function [DirectoryIterator::getExtension](directoryiterator.getextension.md)(): [string](language.types.string.md)

public function [DirectoryIterator::getFilename](directoryiterator.getfilename.md)(): [string](language.types.string.md)

public function [DirectoryIterator::isDot](directoryiterator.isdot.md)(): [bool](language.types.boolean.md)

public function [DirectoryIterator::key](directoryiterator.key.md)(): [mixed](language.types.mixed.md)

public function [DirectoryIterator::next](directoryiterator.next.md)(): [void](language.types.void.md)

public function [DirectoryIterator::rewind](directoryiterator.rewind.md)(): [void](language.types.void.md)

public function [DirectoryIterator::seek](directoryiterator.seek.md)([int](language.types.integer.md) `$offset`): [void](language.types.void.md)

public function [DirectoryIterator::\_\_toString](directoryiterator.tostring.md)(): [string](language.types.string.md)

public function [DirectoryIterator::valid](directoryiterator.valid.md)(): [bool](language.types.boolean.md)

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

- [GlobIterator::\_\_construct](globiterator.construct.md) — Constrói um diretório usando glob
- [GlobIterator::count](globiterator.count.md) — Obtém o número de diretórios e arquivos

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
