# A classe DirectoryIterator

> **Fonte / Source:** https://www.php.net/manual/pt_BR/class.directoryiterator.php

---

# A classe DirectoryIterator

(PHP 5, PHP 7, PHP 8)

## Introdução

A classe DirectoryIterator fornece uma interface simples para visualização de conteúdo
de sistemas de arquivos.

## Resumo da classe

class ****DirectoryIterator****
extends
[SplFileInfo](class.splfileinfo.md)
implements
[SeekableIterator](class.seekableiterator.md) {

/\* Métodos \*/

public function [\_\_construct](directoryiterator.construct.md)([string](language.types.string.md) `$directory`)

public function [current](directoryiterator.current.md)(): [mixed](language.types.mixed.md)

public function [getBasename](directoryiterator.getbasename.md)([string](language.types.string.md) `$suffix` = ""): [string](language.types.string.md)

public function [getExtension](directoryiterator.getextension.md)(): [string](language.types.string.md)

public function [getFilename](directoryiterator.getfilename.md)(): [string](language.types.string.md)

public function [isDot](directoryiterator.isdot.md)(): [bool](language.types.boolean.md)

public function [key](directoryiterator.key.md)(): [mixed](language.types.mixed.md)

public function [next](directoryiterator.next.md)(): [void](language.types.void.md)

public function [rewind](directoryiterator.rewind.md)(): [void](language.types.void.md)

public function [seek](directoryiterator.seek.md)([int](language.types.integer.md) `$offset`): [void](language.types.void.md)

public function [\_\_toString](directoryiterator.tostring.md)(): [string](language.types.string.md)

public function [valid](directoryiterator.valid.md)(): [bool](language.types.boolean.md)

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

## Índice

- [DirectoryIterator::\_\_construct](directoryiterator.construct.md) — Constrói um novo iterador de diretório a partir de um caminho
- [DirectoryIterator::current](directoryiterator.current.md) — Retorna o item atual do DirectoryIterator
- [DirectoryIterator::getBasename](directoryiterator.getbasename.md) — Retorna o nome do item corrente do DirectoryIterator
- [DirectoryIterator::getExtension](directoryiterator.getextension.md) — Obtém a extensão do arquivo
- [DirectoryIterator::getFilename](directoryiterator.getfilename.md) — Retorna o nome do arquivo do item atual do DirectoryIterator
- [DirectoryIterator::isDot](directoryiterator.isdot.md) — Determina se o item atual do DirectoryIterator é '.' ou '..'
- [DirectoryIterator::key](directoryiterator.key.md) — Retorna a chave para o item atual do DirectoryIterator
- [DirectoryIterator::next](directoryiterator.next.md) — Mover para o próximo item do DirectoryIterator
- [DirectoryIterator::rewind](directoryiterator.rewind.md) — Rebobina o DirectoryIterator de volta ao início
- [DirectoryIterator::seek](directoryiterator.seek.md) — Aponta para uma determinada posição no item do DirectoryIterator
- [DirectoryIterator::\_\_toString](directoryiterator.tostring.md) — Retorna o nome do arquivo como texto
- [DirectoryIterator::valid](directoryiterator.valid.md) — Verifica se a posição atual do DirectoryIterator é um arquivo válido

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
