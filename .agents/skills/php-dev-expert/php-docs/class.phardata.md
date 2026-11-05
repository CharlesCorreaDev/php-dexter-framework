# A classe PharData

> **Fonte / Source:** https://www.php.net/manual/pt_BR/class.phardata.php

---

# A classe PharData

(PHP 5 >= 5.3.0, PHP 7, PHP 8, PECL phar >= 2.0.0)

## Introdução

A classe PharData fornece uma interface de alto nível para acessar e criar
arquivos tar e zip não executáveis. Como esses arquivos não contêm
um stub e não podem ser executados pela extensão phar, é possível criar
e manipular arquivos zip e tar comuns usando a classe PharData, mesmo que
a configuração `phar.readonly` do php.ini seja `1`.

## Resumo da classe

class ****PharData****
extends
[RecursiveDirectoryIterator](class.recursivedirectoryiterator.md)
implements
[Countable](class.countable.md),
[ArrayAccess](class.arrayaccess.md) {

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

public function [\_\_construct](phardata.construct.md)(  
    [string](language.types.string.md) `$filename`,  
    [int](language.types.integer.md) `$flags` = FilesystemIterator::SKIP\_DOTS | FilesystemIterator::UNIX\_PATHS,  
    [?](language.types.null.md)[string](language.types.string.md) `$alias` = **`null`**,  
    [int](language.types.integer.md) `$format` = 0  
)

public function [addEmptyDir](phardata.addemptydir.md)([string](language.types.string.md) `$directory`): [void](language.types.void.md)

public function [addFile](phardata.addfile.md)([string](language.types.string.md) `$filename`, [?](language.types.null.md)[string](language.types.string.md) `$localName` = **`null`**): [void](language.types.void.md)

public function [addFromString](phardata.addfromstring.md)([string](language.types.string.md) `$localName`, [string](language.types.string.md) `$contents`): [void](language.types.void.md)

public function [buildFromDirectory](phardata.buildfromdirectory.md)([string](language.types.string.md) `$directory`, [string](language.types.string.md) `$pattern` = ""): [array](language.types.array.md)

public function [buildFromIterator](phardata.buildfromiterator.md)([Traversable](class.traversable.md) `$iterator`, [?](language.types.null.md)[string](language.types.string.md) `$baseDirectory` = **`null`**): [array](language.types.array.md)

public function [compress](phardata.compress.md)([int](language.types.integer.md) `$compression`, [?](language.types.null.md)[string](language.types.string.md) `$extension` = **`null`**): [?](language.types.null.md)[PharData](class.phardata.md)

public function [compressFiles](phardata.compressfiles.md)([int](language.types.integer.md) `$compression`): [void](language.types.void.md)

public function [convertToData](phardata.converttodata.md)([?](language.types.null.md)[int](language.types.integer.md) `$format` = **`null`**, [?](language.types.null.md)[int](language.types.integer.md) `$compression` = **`null`**, [?](language.types.null.md)[string](language.types.string.md) `$extension` = **`null`**): [?](language.types.null.md)[PharData](class.phardata.md)

public function [convertToExecutable](phardata.converttoexecutable.md)([?](language.types.null.md)[int](language.types.integer.md) `$format` = **`null`**, [?](language.types.null.md)[int](language.types.integer.md) `$compression` = **`null`**, [?](language.types.null.md)[string](language.types.string.md) `$extension` = **`null`**): [?](language.types.null.md)[Phar](class.phar.md)

public function [copy](phardata.copy.md)([string](language.types.string.md) `$from`, [string](language.types.string.md) `$to`): [true](language.types.singleton.md)

public function [decompress](phardata.decompress.md)([?](language.types.null.md)[string](language.types.string.md) `$extension` = **`null`**): [?](language.types.null.md)[PharData](class.phardata.md)

public function [decompressFiles](phardata.decompressfiles.md)(): [true](language.types.singleton.md)

public function [delMetadata](phardata.delmetadata.md)(): [true](language.types.singleton.md)

public function [delete](phardata.delete.md)([string](language.types.string.md) `$localName`): [true](language.types.singleton.md)

public function [extractTo](phardata.extractto.md)([string](language.types.string.md) `$directory`, [array](language.types.array.md)|[string](language.types.string.md)|[null](language.types.null.md) `$files` = **`null`**, [bool](language.types.boolean.md) `$overwrite` = **`false`**): [bool](language.types.boolean.md)

public function [isWritable](phardata.iswritable.md)(): [bool](language.types.boolean.md)

public function [offsetSet](phardata.offsetset.md)([string](language.types.string.md) `$localName`, [resource](language.types.resource.md)|[string](language.types.string.md) `$value`): [void](language.types.void.md)

public function [offsetUnset](phardata.offsetunset.md)([string](language.types.string.md) `$localName`): [void](language.types.void.md)

public function [setAlias](phardata.setalias.md)([string](language.types.string.md) `$alias`): [bool](language.types.boolean.md)

public function [setDefaultStub](phardata.setdefaultstub.md)([?](language.types.null.md)[string](language.types.string.md) `$index` = **`null`**, [?](language.types.null.md)[string](language.types.string.md) `$webIndex` = **`null`**): [bool](language.types.boolean.md)

public function [setMetadata](phardata.setmetadata.md)([mixed](language.types.mixed.md) `$metadata`): [void](language.types.void.md)

public function [setSignatureAlgorithm](phardata.setsignaturealgorithm.md)([int](language.types.integer.md) `$algo`, [?](language.types.null.md)[string](language.types.string.md) `$privateKey` = **`null`**): [void](language.types.void.md)

public function [setStub](phardata.setstub.md)([resource](language.types.resource.md)|[string](language.types.string.md) `$stub`, [int](language.types.integer.md) `$length` = -1): [true](language.types.singleton.md)

public function [\_\_destruct](phardata.destruct.md)()

/\* Métodos herdados \*/

public function [RecursiveDirectoryIterator::getChildren](recursivedirectoryiterator.getchildren.md)(): [RecursiveDirectoryIterator](class.recursivedirectoryiterator.md)

public function [RecursiveDirectoryIterator::getSubPath](recursivedirectoryiterator.getsubpath.md)(): [string](language.types.string.md)

public function [RecursiveDirectoryIterator::getSubPathname](recursivedirectoryiterator.getsubpathname.md)(): [string](language.types.string.md)

public function [RecursiveDirectoryIterator::hasChildren](recursivedirectoryiterator.haschildren.md)([bool](language.types.boolean.md) `$allowLinks` = **`false`**): [bool](language.types.boolean.md)

public function [RecursiveDirectoryIterator::key](recursivedirectoryiterator.key.md)(): [string](language.types.string.md)

public function [RecursiveDirectoryIterator::next](recursivedirectoryiterator.next.md)(): [void](language.types.void.md)

public function [RecursiveDirectoryIterator::rewind](recursivedirectoryiterator.rewind.md)(): [void](language.types.void.md)

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

- [PharData::addEmptyDir](phardata.addemptydir.md) — Adiciona um diretório vazio ao arquivo tar/zip
- [PharData::addFile](phardata.addfile.md) — Adiciona um arquivo do sistema de arquivos ao arquivo tar/zip
- [PharData::addFromString](phardata.addfromstring.md) — Adiciona um arquivo de uma string ao arquivo tar/zip
- [PharData::buildFromDirectory](phardata.buildfromdirectory.md) — Constrói um arquivo tar/zip a partir dos arquivos dentro de um diretório
- [PharData::buildFromIterator](phardata.buildfromiterator.md) — Constrói um arquivo tar ou zip a partir de um iterador
- [PharData::compress](phardata.compress.md) — Compacta todo o arquivo tar/zip usando Gzip ou Bzip2
- [PharData::compressFiles](phardata.compressfiles.md) — Compacta todos os arquivos no arquivo tar/zip atual
- [PharData::\_\_construct](phardata.construct.md) — Constrói um objeto de arquivo tar ou zip não executável
- [PharData::convertToData](phardata.converttodata.md) — Converte um arquivo phar em um arquivo tar ou zip não executável
- [PharData::convertToExecutable](phardata.converttoexecutable.md) — Converte um arquivo tar/zip não executável em um arquivo phar executável
- [PharData::copy](phardata.copy.md) — Copia um arquivo interno do arquivo tar/zip para outro arquivo novo dentro do mesmo arquivo
- [PharData::decompress](phardata.decompress.md) — Descompacta todo o arquivo Phar
- [PharData::decompressFiles](phardata.decompressfiles.md) — Descompacta todos os arquivos no arquivo zip atual
- [PharData::delMetadata](phardata.delmetadata.md) — Exclui os metadados globais de um arquivo zip
- [PharData::delete](phardata.delete.md) — Exclui um arquivo dentro de um arquivo tar/zip
- [PharData::\_\_destruct](phardata.destruct.md) — Destrói um objeto de arquivo tar ou zip não executável
- [PharData::extractTo](phardata.extractto.md) — Extrai o conteúdo de um arquivo tar/zip para um diretório
- [PharData::isWritable](phardata.iswritable.md) — Informa se o arquivo tar/zip pode ser modificado
- [PharData::offsetSet](phardata.offsetset.md) — Define o conteúdo de um arquivo dentro do tar/zip para o de um arquivo externo ou string
- [PharData::offsetUnset](phardata.offsetunset.md) — Remove um arquivo de um arquivo tar/zip
- [PharData::setAlias](phardata.setalias.md) — Função fictícia (Phar::setAlias ​​não é válido para PharData)
- [PharData::setDefaultStub](phardata.setdefaultstub.md) — Função fictícia (Phar::setDefaultStub não é válido para PharData)
- [PharData::setMetadata](phardata.setmetadata.md) — Define metadados do arquivo phar
- [PharData::setSignatureAlgorithm](phardata.setsignaturealgorithm.md) — Define o algoritmo de assinatura para um phar e o aplica
- [PharData::setStub](phardata.setstub.md) — Função fictícia (Phar::setStub não é válido para PharData)

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
