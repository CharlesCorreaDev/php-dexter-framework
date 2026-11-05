# A classe PharFileInfo

> **Fonte / Source:** https://www.php.net/manual/pt_BR/class.pharfileinfo.php

---

# A classe PharFileInfo

(PHP 5 >= 5.3.0, PHP 7, PHP 8, PECL phar >= 1.0.0)

## Introdução

A classe PharFileInfo fornece uma interface de alto nível para o conteúdo
e atributos de um único arquivo dentro de um arquivo phar.

## Resumo da classe

class ****PharFileInfo****
extends
[SplFileInfo](class.splfileinfo.md)
{

/\* Métodos \*/

public function [\_\_construct](pharfileinfo.construct.md)([string](language.types.string.md) `$filename`)

public function [chmod](pharfileinfo.chmod.md)([int](language.types.integer.md) `$perms`): [void](language.types.void.md)

public function [compress](pharfileinfo.compress.md)([int](language.types.integer.md) `$compression`): [true](language.types.singleton.md)

public function [decompress](pharfileinfo.decompress.md)(): [true](language.types.singleton.md)

public function [delMetadata](pharfileinfo.delmetadata.md)(): [true](language.types.singleton.md)

public function [getCRC32](pharfileinfo.getcrc32.md)(): [int](language.types.integer.md)

public function [getCompressedSize](pharfileinfo.getcompressedsize.md)(): [int](language.types.integer.md)

public function [getContent](pharfileinfo.getcontent.md)(): [string](language.types.string.md)

public function [getMetadata](pharfileinfo.getmetadata.md)([array](language.types.array.md) `$unserializeOptions` = []): [mixed](language.types.mixed.md)

public function [getPharFlags](pharfileinfo.getpharflags.md)(): [int](language.types.integer.md)

public function [hasMetadata](pharfileinfo.hasmetadata.md)(): [bool](language.types.boolean.md)

public function [isCRCChecked](pharfileinfo.iscrcchecked.md)(): [bool](language.types.boolean.md)

public function [isCompressed](pharfileinfo.iscompressed.md)([?](language.types.null.md)[int](language.types.integer.md) `$compression` = **`null`**): [bool](language.types.boolean.md)

public function [setMetadata](pharfileinfo.setmetadata.md)([mixed](language.types.mixed.md) `$metadata`): [void](language.types.void.md)

public function [\_\_destruct](pharfileinfo.destruct.md)()

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

- [PharFileInfo::chmod](pharfileinfo.chmod.md) — Define bits de permissão específicos do arquivo
- [PharFileInfo::compress](pharfileinfo.compress.md) — Compacta a entrada Phar atual com zlib ou bzip2
- [PharFileInfo::\_\_construct](pharfileinfo.construct.md) — Constrói um objeto de entrada Phar
- [PharFileInfo::decompress](pharfileinfo.decompress.md) — Descompacta a entrada Phar atual dentro do phar
- [PharFileInfo::delMetadata](pharfileinfo.delmetadata.md) — Exclui os metadados da entrada
- [PharFileInfo::\_\_destruct](pharfileinfo.destruct.md) — Destrói um objeto de entrada Phar
- [PharFileInfo::getCRC32](pharfileinfo.getcrc32.md) — Retorna o código CRC32 ou lança uma exceção se o CRC não tiver sido verificado
- [PharFileInfo::getCompressedSize](pharfileinfo.getcompressedsize.md) — Retorna o tamanho real do arquivo (com compactação) dentro do arquivo Phar
- [PharFileInfo::getContent](pharfileinfo.getcontent.md) — Obtém o conteúdo completo do arquivo de entrada
- [PharFileInfo::getMetadata](pharfileinfo.getmetadata.md) — Retorna metadados específicos do arquivo salvos com um arquivo
- [PharFileInfo::getPharFlags](pharfileinfo.getpharflags.md) — Retorna os sinalizadores de entrada do arquivo Phar
- [PharFileInfo::hasMetadata](pharfileinfo.hasmetadata.md) — Retorna os metadados da entrada
- [PharFileInfo::isCRCChecked](pharfileinfo.iscrcchecked.md) — Informa se a entrada do arquivo teve seu CRC verificado
- [PharFileInfo::isCompressed](pharfileinfo.iscompressed.md) — Informa se a entrada está compactada
- [PharFileInfo::setMetadata](pharfileinfo.setmetadata.md) — Define metadados específicos de arquivo salvos com um arquivo

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
