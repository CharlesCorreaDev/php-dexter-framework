# A classe Phar

> **Fonte / Source:** https://www.php.net/manual/pt_BR/class.phar.php

---

# A classe Phar

(PHP 5 >= 5.3.0, PHP 7, PHP 8, PECL phar >= 1.0.0)

## Introdução

A classe Phar fornece uma interface de alto nível para acessar e criar
arquivos phar.

## Resumo da classe

class ****Phar****
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

/\* Constantes \*/

const
[int](language.types.integer.md)
[BZ2](phar.constants.md#phar.constants.bz2);

const
[int](language.types.integer.md)
[GZ](phar.constants.md#phar.constants.gz);

const
[int](language.types.integer.md)
[NONE](phar.constants.md#phar.constants.none);

const
[int](language.types.integer.md)
[PHAR](phar.constants.md#phar.constants.phar);

const
[int](language.types.integer.md)
[TAR](phar.constants.md#phar.constants.tar);

const
[int](language.types.integer.md)
[ZIP](phar.constants.md#phar.constants.zip);

const
[int](language.types.integer.md)
[COMPRESSED](phar.constants.md#phar.constants.compressed);

const
[int](language.types.integer.md)
[PHP](phar.constants.md#phar.constants.php);

const
[int](language.types.integer.md)
[PHPS](phar.constants.md#phar.constants.phps);

const
[int](language.types.integer.md)
[MD5](phar.constants.md#phar.constants.md5);

const
[int](language.types.integer.md)
[OPENSSL](phar.constants.md#phar.constants.openssl);

const
[int](language.types.integer.md)
[OPENSSL\_SHA256](phar.constants.md#phar.constants.openssl-sha256);

const
[int](language.types.integer.md)
[OPENSSL\_SHA512](phar.constants.md#phar.constants.openssl-sha512);

const
[int](language.types.integer.md)
[SHA1](phar.constants.md#phar.constants.sha1);

const
[int](language.types.integer.md)
[SHA256](phar.constants.md#phar.constants.sha256);

const
[int](language.types.integer.md)
[SHA512](phar.constants.md#phar.constants.sha512);

/\* Métodos \*/

public function [\_\_construct](phar.construct.md)([string](language.types.string.md) `$filename`, [int](language.types.integer.md) `$flags` = FilesystemIterator::SKIP\_DOTS | FilesystemIterator::UNIX\_PATHS, [?](language.types.null.md)[string](language.types.string.md) `$alias` = **`null`**)

public function [addEmptyDir](phar.addemptydir.md)([string](language.types.string.md) `$directory`): [void](language.types.void.md)

public function [addFile](phar.addfile.md)([string](language.types.string.md) `$filename`, [?](language.types.null.md)[string](language.types.string.md) `$localName` = **`null`**): [void](language.types.void.md)

public function [addFromString](phar.addfromstring.md)([string](language.types.string.md) `$localName`, [string](language.types.string.md) `$contents`): [void](language.types.void.md)

final public static function [apiVersion](phar.apiversion.md)(): [string](language.types.string.md)

public function [buildFromDirectory](phar.buildfromdirectory.md)([string](language.types.string.md) `$directory`, [string](language.types.string.md) `$pattern` = ""): [array](language.types.array.md)

public function [buildFromIterator](phar.buildfromiterator.md)([Traversable](class.traversable.md) `$iterator`, [?](language.types.null.md)[string](language.types.string.md) `$baseDirectory` = **`null`**): [array](language.types.array.md)

final public static function [canCompress](phar.cancompress.md)([int](language.types.integer.md) `$compression` = 0): [bool](language.types.boolean.md)

final public static function [canWrite](phar.canwrite.md)(): [bool](language.types.boolean.md)

public function [compress](phar.compress.md)([int](language.types.integer.md) `$compression`, [?](language.types.null.md)[string](language.types.string.md) `$extension` = **`null`**): [?](language.types.null.md)[Phar](class.phar.md)

public function [compressFiles](phar.compressfiles.md)([int](language.types.integer.md) `$compression`): [void](language.types.void.md)

public function [convertToData](phar.converttodata.md)([?](language.types.null.md)[int](language.types.integer.md) `$format` = **`null`**, [?](language.types.null.md)[int](language.types.integer.md) `$compression` = **`null`**, [?](language.types.null.md)[string](language.types.string.md) `$extension` = **`null`**): [?](language.types.null.md)[PharData](class.phardata.md)

public function [convertToExecutable](phar.converttoexecutable.md)([?](language.types.null.md)[int](language.types.integer.md) `$format` = **`null`**, [?](language.types.null.md)[int](language.types.integer.md) `$compression` = **`null`**, [?](language.types.null.md)[string](language.types.string.md) `$extension` = **`null`**): [?](language.types.null.md)[Phar](class.phar.md)

public function [copy](phar.copy.md)([string](language.types.string.md) `$from`, [string](language.types.string.md) `$to`): [true](language.types.singleton.md)

public function [count](phar.count.md)([int](language.types.integer.md) `$mode` = **`COUNT_NORMAL`**): [int](language.types.integer.md)

final public static function [createDefaultStub](phar.createdefaultstub.md)([?](language.types.null.md)[string](language.types.string.md) `$index` = **`null`**, [?](language.types.null.md)[string](language.types.string.md) `$webIndex` = **`null`**): [string](language.types.string.md)

public function [decompress](phar.decompress.md)([?](language.types.null.md)[string](language.types.string.md) `$extension` = **`null`**): [?](language.types.null.md)[Phar](class.phar.md)

public function [decompressFiles](phar.decompressfiles.md)(): [true](language.types.singleton.md)

public function [delMetadata](phar.delmetadata.md)(): [true](language.types.singleton.md)

public function [delete](phar.delete.md)([string](language.types.string.md) `$localName`): [true](language.types.singleton.md)

public function [extractTo](phar.extractto.md)([string](language.types.string.md) `$directory`, [array](language.types.array.md)|[string](language.types.string.md)|[null](language.types.null.md) `$files` = **`null`**, [bool](language.types.boolean.md) `$overwrite` = **`false`**): [bool](language.types.boolean.md)

public function [getAlias](phar.getalias.md)(): [?](language.types.null.md)[string](language.types.string.md)

public function [getMetadata](phar.getmetadata.md)([array](language.types.array.md) `$unserializeOptions` = []): [mixed](language.types.mixed.md)

public function [getModified](phar.getmodified.md)(): [bool](language.types.boolean.md)

public function [getPath](phar.getpath.md)(): [string](language.types.string.md)

public function [getSignature](phar.getsignature.md)(): [array](language.types.array.md)|[false](language.types.singleton.md)

public function [getStub](phar.getstub.md)(): [string](language.types.string.md)

final public static function [getSupportedCompression](phar.getsupportedcompression.md)(): [array](language.types.array.md)

final public static function [getSupportedSignatures](phar.getsupportedsignatures.md)(): [array](language.types.array.md)

public function [getVersion](phar.getversion.md)(): [string](language.types.string.md)

public function [hasMetadata](phar.hasmetadata.md)(): [bool](language.types.boolean.md)

final public static function [interceptFileFuncs](phar.interceptfilefuncs.md)(): [void](language.types.void.md)

public function [isBuffering](phar.isbuffering.md)(): [bool](language.types.boolean.md)

public function [isCompressed](phar.iscompressed.md)(): [int](language.types.integer.md)|[false](language.types.singleton.md)

public function [isFileFormat](phar.isfileformat.md)([int](language.types.integer.md) `$format`): [bool](language.types.boolean.md)

final public static function [isValidPharFilename](phar.isvalidpharfilename.md)([string](language.types.string.md) `$filename`, [bool](language.types.boolean.md) `$executable` = **`true`**): [bool](language.types.boolean.md)

public function [isWritable](phar.iswritable.md)(): [bool](language.types.boolean.md)

final public static function [loadPhar](phar.loadphar.md)([string](language.types.string.md) `$filename`, [?](language.types.null.md)[string](language.types.string.md) `$alias` = **`null`**): [bool](language.types.boolean.md)

final public static function [mapPhar](phar.mapphar.md)([?](language.types.null.md)[string](language.types.string.md) `$alias` = **`null`**, [int](language.types.integer.md) `$offset` = 0): [bool](language.types.boolean.md)

final public static function [mount](phar.mount.md)([string](language.types.string.md) `$pharPath`, [string](language.types.string.md) `$externalPath`): [void](language.types.void.md)

final public static function [mungServer](phar.mungserver.md)([array](language.types.array.md) `$variables`): [void](language.types.void.md)

public function [offsetExists](phar.offsetexists.md)([string](language.types.string.md) `$localName`): [bool](language.types.boolean.md)

public function [offsetGet](phar.offsetget.md)([string](language.types.string.md) `$localName`): [SplFileInfo](class.splfileinfo.md)

public function [offsetSet](phar.offsetset.md)([string](language.types.string.md) `$localName`, [resource](language.types.resource.md)|[string](language.types.string.md) `$value`): [void](language.types.void.md)

public function [offsetUnset](phar.offsetunset.md)([string](language.types.string.md) `$localName`): [void](language.types.void.md)

final public static function [running](phar.running.md)([bool](language.types.boolean.md) `$returnPhar` = **`true`**): [string](language.types.string.md)

public function [setAlias](phar.setalias.md)([string](language.types.string.md) `$alias`): [true](language.types.singleton.md)

public function [setDefaultStub](phar.setdefaultstub.md)([?](language.types.null.md)[string](language.types.string.md) `$index` = **`null`**, [?](language.types.null.md)[string](language.types.string.md) `$webIndex` = **`null`**): [true](language.types.singleton.md)

public function [setMetadata](phar.setmetadata.md)([mixed](language.types.mixed.md) `$metadata`): [void](language.types.void.md)

public function [setSignatureAlgorithm](phar.setsignaturealgorithm.md)([int](language.types.integer.md) `$algo`, [?](language.types.null.md)[string](language.types.string.md) `$privateKey` = **`null`**): [void](language.types.void.md)

public function [setStub](phar.setstub.md)([resource](language.types.resource.md)|[string](language.types.string.md) `$stub`, [int](language.types.integer.md) `$length` = -1): [true](language.types.singleton.md)

public function [startBuffering](phar.startbuffering.md)(): [void](language.types.void.md)

public function [stopBuffering](phar.stopbuffering.md)(): [void](language.types.void.md)

final public static function [unlinkArchive](phar.unlinkarchive.md)([string](language.types.string.md) `$filename`): [true](language.types.singleton.md)

final public static function [webPhar](phar.webphar.md)(  
    [?](language.types.null.md)[string](language.types.string.md) `$alias` = **`null`**,  
    [?](language.types.null.md)[string](language.types.string.md) `$index` = **`null`**,  
    [?](language.types.null.md)[string](language.types.string.md) `$fileNotFoundScript` = **`null`**,  
    [array](language.types.array.md) `$mimeTypes` = [],  
    [?](language.types.null.md)[callable](language.types.callable.md) `$rewrite` = **`null`**  
): [void](language.types.void.md)

public function [\_\_destruct](phar.destruct.md)()

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

## Registro de Alterações

| Versão | Descrição |
| --- | --- |
| 8.4.0 | Adicionado suporte para a extensão de timestamp Unix para arquivos baseados em Zip. |
| 8.0.0 | Metadados não são mais desserializados ao abrir o arquivo, esta atividade é adiada até que [Phar::getMetadata()](phar.getmetadata.md) seja chamado. |

## Notas

**Cuidado**

Anteriormente ao PHP 8.0.0, os metadados eram desserializados na abertura do
arquivo. Isso poderia levar a vulnerabilidades de segurança.
Iniciando com o PHP 8.0.0, os metadados são desserializados somente ao chamar
[Phar::getMetadata()](phar.getmetadata.md), que tem opções para restringir
a desserialização por motivos de segurança.

## Índice

- [Phar::addEmptyDir](phar.addemptydir.md) — Adiciona um diretório vazio ao arquivo phar
- [Phar::addFile](phar.addfile.md) — Adiciona um arquivo do sistema de arquivos ao arquivo phar
- [Phar::addFromString](phar.addfromstring.md) — Adiciona um arquivo a partir de uma string ao arquivo phar
- [Phar::apiVersion](phar.apiversion.md) — Retorna a versão da API
- [Phar::buildFromDirectory](phar.buildfromdirectory.md) — Constrói um arquivo phar a partir dos arquivos dentro de um diretório
- [Phar::buildFromIterator](phar.buildfromiterator.md) — Constrói um arquivo phar a partir de um iterador
- [Phar::canCompress](phar.cancompress.md) — Retorna se a extensão phar suporta compactação usando zlib ou bzip2
- [Phar::canWrite](phar.canwrite.md) — Retorna se a extensão phar suporta a escrita e criação de phars
- [Phar::compress](phar.compress.md) — Compacta todo o arquivo Phar usando compactação Gzip ou Bzip2
- [Phar::compressFiles](phar.compressfiles.md) — Compacta todos os arquivos no arquivo Phar atual
- [Phar::\_\_construct](phar.construct.md) — Constrói um objeto de arquivo Phar
- [Phar::convertToData](phar.converttodata.md) — Converte um arquivo phar em um arquivo tar ou zip não executável
- [Phar::convertToExecutable](phar.converttoexecutable.md) — Converte um arquivo phar em outro formato de arquivo executável phar
- [Phar::copy](phar.copy.md) — Copia um arquivo interno do arquivo phar para outro novo arquivo dentro do phar
- [Phar::count](phar.count.md) — Retorna o número de entradas (arquivos) no arquivo Phar
- [Phar::createDefaultStub](phar.createdefaultstub.md) — Cria um stup de formato específico de arquivo phar
- [Phar::decompress](phar.decompress.md) — Descompacta todo o arquivo Phar
- [Phar::decompressFiles](phar.decompressfiles.md) — Descompacta todos os arquivos no arquivo Phar atual
- [Phar::delMetadata](phar.delmetadata.md) — Exclui os metadados globais do phar
- [Phar::delete](phar.delete.md) — Exclui um arquivo dentro de um arquivo phar
- [Phar::\_\_destruct](phar.destruct.md) — Destrói um objeto de arquivo Phar
- [Phar::extractTo](phar.extractto.md) — Extrai o conteúdo de um arquivo phar para um diretório
- [Phar::getAlias](phar.getalias.md) — Obtém o apelido para o Phar
- [Phar::getMetadata](phar.getmetadata.md) — Retorna metadados do arquivo phar
- [Phar::getModified](phar.getmodified.md) — Informa se o phar foi modificado
- [Phar::getPath](phar.getpath.md) — Obtém o caminho real para o arquivo Phar no disco
- [Phar::getSignature](phar.getsignature.md) — Retorna a assinatura MD5/SHA1/SHA256/SHA512/OpenSSL de um arquivo Phar
- [Phar::getStub](phar.getstub.md) — Retorna o carregador PHP ou o stub de inicialização de um arquivo Phar
- [Phar::getSupportedCompression](phar.getsupportedcompression.md) — Retorna um array de algoritmos de compactação suportados
- [Phar::getSupportedSignatures](phar.getsupportedsignatures.md) — Retorna um array de tipos de assinatura suportados
- [Phar::getVersion](phar.getversion.md) — Retorna informações da versão do arquivo Phar
- [Phar::hasMetadata](phar.hasmetadata.md) — Informa se o phar tem metadados globais
- [Phar::interceptFileFuncs](phar.interceptfilefuncs.md) — Instrui phar a interceptar fopen, file\_get\_contents, opendir e todas as funções relacionadas a stat
- [Phar::isBuffering](phar.isbuffering.md) — Usado para determinar se as operações de gravação Phar estão sendo armazenadas em buffer ou estão sendo liberadas diretamente no disco
- [Phar::isCompressed](phar.iscompressed.md) — Retorna Phar::GZ ou PHAR::BZ2 se todo o arquivo phar estiver compactado (.tar.gz/tar.bz e assim por diante)
- [Phar::isFileFormat](phar.isfileformat.md) — Informa se o arquivo phar é baseado no formato de arquivo tar/phar/zip dependendo do parâmetro
- [Phar::isValidPharFilename](phar.isvalidpharfilename.md) — Informa se o nome de arquivo fornecido é um nome de arquivo phar válido
- [Phar::isWritable](phar.iswritable.md) — Informa se o arquivo phar pode ser modificado
- [Phar::loadPhar](phar.loadphar.md) — Carrega qualquer arquivo phar com um apelido
- [Phar::mapPhar](phar.mapphar.md) — Lê o arquivo atualmente em execução (um phar) e registra seu manifesto
- [Phar::mount](phar.mount.md) — Monta um caminho externo ou arquivo em um local virtual dentro do arquivo phar
- [Phar::mungServer](phar.mungserver.md) — Define uma lista de até 4 variáveis ​​$\_SERVER que devem ser modificadas para execução
- [Phar::offsetExists](phar.offsetexists.md) — Determina se um arquivo existe no phar
- [Phar::offsetGet](phar.offsetget.md) — Obtém um objeto PharFileInfo para um arquivo específico
- [Phar::offsetSet](phar.offsetset.md) — Define o conteúdo de um arquivo interno para o de um arquivo externo
- [Phar::offsetUnset](phar.offsetunset.md) — Remove um arquivo de um phar
- [Phar::running](phar.running.md) — Retorna o caminho completo no disco ou a URL completa do arquivo Phar em execução no momento
- [Phar::setAlias](phar.setalias.md) — Define o apelido para o arquivo Phar
- [Phar::setDefaultStub](phar.setdefaultstub.md) — Usado para definir o carregador PHP ou o stub de bootstrap de um arquivo Phar para o carregador padrão
- [Phar::setMetadata](phar.setmetadata.md) — Define metadados do arquivo phar
- [Phar::setSignatureAlgorithm](phar.setsignaturealgorithm.md) — Define o algoritmo de assinatura para um phar e o aplica
- [Phar::setStub](phar.setstub.md) — Usado para definir o carregador PHP ou o stub de inicialização de um arquivo Phar
- [Phar::startBuffering](phar.startbuffering.md) — Inicia o buffer das operações de gravação Phar, não modifica o objeto Phar no disco
- [Phar::stopBuffering](phar.stopbuffering.md) — Interrompe o buffer de solicitações de gravação no arquivo Phar e salva as alterações no disco
- [Phar::unlinkArchive](phar.unlinkarchive.md) — Remove completamente um arquivo phar do disco e da memória
- [Phar::webPhar](phar.webphar.md) — Encaminha uma solicitação de um navegador da web para um arquivo interno dentro do arquivo phar

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
