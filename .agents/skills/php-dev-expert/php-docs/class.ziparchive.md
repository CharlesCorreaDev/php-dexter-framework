# A classe ZipArchive

> **Fonte / Source:** https://www.php.net/manual/pt_BR/class.ziparchive.php

---

# A classe [ZipArchive](class.ziparchive.md)

(PHP 5 >= 5.2.0, PHP 7, PHP 8, PECL zip >= 1.1.0)

## Introdução

Um arquivo compactado com Zip.

## Resumo da classe

class ****ZipArchive****
implements
[Countable](class.countable.md) {

/\* Constantes \*/

public
const
[int](language.types.integer.md)
[CREATE](zip.constants.md#ziparchive.constants.create);

public
const
[int](language.types.integer.md)
[EXCL](zip.constants.md#ziparchive.constants.excl);

public
const
[int](language.types.integer.md)
[CHECKCONS](zip.constants.md#ziparchive.constants.checkcons);

public
const
[int](language.types.integer.md)
[OVERWRITE](zip.constants.md#ziparchive.constants.overwrite);

public
const
[int](language.types.integer.md)
[RDONLY](zip.constants.md#ziparchive.constants.rdonly);

public
const
[int](language.types.integer.md)
[FL\_NOCASE](zip.constants.md#ziparchive.constants.fl-nocase);

public
const
[int](language.types.integer.md)
[FL\_NODIR](zip.constants.md#ziparchive.constants.fl-nodir);

public
const
[int](language.types.integer.md)
[FL\_COMPRESSED](zip.constants.md#ziparchive.constants.fl-compressed);

public
const
[int](language.types.integer.md)
[FL\_UNCHANGED](zip.constants.md#ziparchive.constants.fl-unchanged);

public
const
[int](language.types.integer.md)
[FL\_RECOMPRESS](zip.constants.md#ziparchive.constants.fl-recompress);

public
const
[int](language.types.integer.md)
[FL\_ENCRYPTED](zip.constants.md#ziparchive.constants.fl-encrypted);

public
const
[int](language.types.integer.md)
[FL\_OVERWRITE](zip.constants.md#ziparchive.constants.fl-overwrite);

public
const
[int](language.types.integer.md)
[FL\_LOCAL](zip.constants.md#ziparchive.constants.fl-local);

public
const
[int](language.types.integer.md)
[FL\_CENTRAL](zip.constants.md#ziparchive.constants.fl-central);

public
const
[int](language.types.integer.md)
[FL\_ENC\_GUESS](zip.constants.md#ziparchive.constants.fl-enc-guess);

public
const
[int](language.types.integer.md)
[FL\_ENC\_RAW](zip.constants.md#ziparchive.constants.fl-enc-raw);

public
const
[int](language.types.integer.md)
[FL\_ENC\_STRICT](zip.constants.md#ziparchive.constants.fl-enc-strict);

public
const
[int](language.types.integer.md)
[FL\_ENC\_UTF\_8](zip.constants.md#ziparchive.constants.fl-enc-utf-8);

public
const
[int](language.types.integer.md)
[FL\_ENC\_CP437](zip.constants.md#ziparchive.constants.fl-enc-cp437);

public
const
[int](language.types.integer.md)
[FL\_OPEN\_FILE\_NOW](zip.constants.md#ziparchive.constants.fl-open-file-now);

public
const
[int](language.types.integer.md)
[CM\_DEFAULT](zip.constants.md#ziparchive.constants.cm-default);

public
const
[int](language.types.integer.md)
[CM\_STORE](zip.constants.md#ziparchive.constants.cm-store);

public
const
[int](language.types.integer.md)
[CM\_SHRINK](zip.constants.md#ziparchive.constants.cm-shrink);

public
const
[int](language.types.integer.md)
[CM\_REDUCE\_1](zip.constants.md#ziparchive.constants.cm-reduce-1);

public
const
[int](language.types.integer.md)
[CM\_REDUCE\_2](zip.constants.md#ziparchive.constants.cm-reduce-2);

public
const
[int](language.types.integer.md)
[CM\_REDUCE\_3](zip.constants.md#ziparchive.constants.cm-reduce-3);

public
const
[int](language.types.integer.md)
[CM\_REDUCE\_4](zip.constants.md#ziparchive.constants.cm-reduce-4);

public
const
[int](language.types.integer.md)
[CM\_IMPLODE](zip.constants.md#ziparchive.constants.cm-implode);

public
const
[int](language.types.integer.md)
[CM\_DEFLATE](zip.constants.md#ziparchive.constants.cm-deflate);

public
const
[int](language.types.integer.md)
[CM\_DEFLATE64](zip.constants.md#ziparchive.constants.cm-deflate64);

public
const
[int](language.types.integer.md)
[CM\_PKWARE\_IMPLODE](zip.constants.md#ziparchive.constants.cm-pkware-implode);

public
const
[int](language.types.integer.md)
[CM\_BZIP2](zip.constants.md#ziparchive.constants.cm-bzip2);

public
const
[int](language.types.integer.md)
[CM\_LZMA](zip.constants.md#ziparchive.constants.cm-lzma);

public
const
[int](language.types.integer.md)
[CM\_LZMA2](zip.constants.md#ziparchive.constants.cm-lzma2);

public
const
[int](language.types.integer.md)
[CM\_ZSTD](zip.constants.md#ziparchive.constants.cm-zstd);

public
const
[int](language.types.integer.md)
[CM\_XZ](zip.constants.md#ziparchive.constants.cm-xz);

public
const
[int](language.types.integer.md)
[CM\_TERSE](zip.constants.md#ziparchive.constants.cm-terse);

public
const
[int](language.types.integer.md)
[CM\_LZ77](zip.constants.md#ziparchive.constants.cm-lz77);

public
const
[int](language.types.integer.md)
[CM\_WAVPACK](zip.constants.md#ziparchive.constants.cm-wavpack);

public
const
[int](language.types.integer.md)
[CM\_PPMD](zip.constants.md#ziparchive.constants.cm-ppmd);

public
const
[int](language.types.integer.md)
[ER\_OK](zip.constants.md#ziparchive.constants.er-ok);

public
const
[int](language.types.integer.md)
[ER\_MULTIDISK](zip.constants.md#ziparchive.constants.er-multidisk);

public
const
[int](language.types.integer.md)
[ER\_RENAME](zip.constants.md#ziparchive.constants.er-rename);

public
const
[int](language.types.integer.md)
[ER\_CLOSE](zip.constants.md#ziparchive.constants.er-close);

public
const
[int](language.types.integer.md)
[ER\_SEEK](zip.constants.md#ziparchive.constants.er-seek);

public
const
[int](language.types.integer.md)
[ER\_READ](zip.constants.md#ziparchive.constants.er-read);

public
const
[int](language.types.integer.md)
[ER\_WRITE](zip.constants.md#ziparchive.constants.er-write);

public
const
[int](language.types.integer.md)
[ER\_CRC](zip.constants.md#ziparchive.constants.er-crc);

public
const
[int](language.types.integer.md)
[ER\_ZIPCLOSED](zip.constants.md#ziparchive.constants.er-zipclosed);

public
const
[int](language.types.integer.md)
[ER\_NOENT](zip.constants.md#ziparchive.constants.er-noent);

public
const
[int](language.types.integer.md)
[ER\_EXISTS](zip.constants.md#ziparchive.constants.er-exists);

public
const
[int](language.types.integer.md)
[ER\_OPEN](zip.constants.md#ziparchive.constants.er-open);

public
const
[int](language.types.integer.md)
[ER\_TMPOPEN](zip.constants.md#ziparchive.constants.er-tmpopen);

public
const
[int](language.types.integer.md)
[ER\_ZLIB](zip.constants.md#ziparchive.constants.er-zlib);

public
const
[int](language.types.integer.md)
[ER\_MEMORY](zip.constants.md#ziparchive.constants.er-memory);

public
const
[int](language.types.integer.md)
[ER\_CHANGED](zip.constants.md#ziparchive.constants.er-changed);

public
const
[int](language.types.integer.md)
[ER\_COMPNOTSUPP](zip.constants.md#ziparchive.constants.er-compnotsupp);

public
const
[int](language.types.integer.md)
[ER\_EOF](zip.constants.md#ziparchive.constants.er-eof);

public
const
[int](language.types.integer.md)
[ER\_INVAL](zip.constants.md#ziparchive.constants.er-inval);

public
const
[int](language.types.integer.md)
[ER\_NOZIP](zip.constants.md#ziparchive.constants.er-nozip);

public
const
[int](language.types.integer.md)
[ER\_INTERNAL](zip.constants.md#ziparchive.constants.er-internal);

public
const
[int](language.types.integer.md)
[ER\_INCONS](zip.constants.md#ziparchive.constants.er-incons);

public
const
[int](language.types.integer.md)
[ER\_REMOVE](zip.constants.md#ziparchive.constants.er-remove);

public
const
[int](language.types.integer.md)
[ER\_DELETED](zip.constants.md#ziparchive.constants.er-deleted);

public
const
[int](language.types.integer.md)
[ER\_ENCRNOTSUPP](zip.constants.md#ziparchive.constants.er-encrnotsupp);

public
const
[int](language.types.integer.md)
[ER\_RDONLY](zip.constants.md#ziparchive.constants.er-rdonly);

public
const
[int](language.types.integer.md)
[ER\_NOPASSWD](zip.constants.md#ziparchive.constants.er-nopasswd);

public
const
[int](language.types.integer.md)
[ER\_WRONGPASSWD](zip.constants.md#ziparchive.constants.er-wrongpasswd);

public
const
[int](language.types.integer.md)
[ER\_OPNOTSUPP](zip.constants.md#ziparchive.constants.er-opnotsupp);

public
const
[int](language.types.integer.md)
[ER\_INUSE](zip.constants.md#ziparchive.constants.er-inuse);

public
const
[int](language.types.integer.md)
[ER\_TELL](zip.constants.md#ziparchive.constants.er-tell);

public
const
[int](language.types.integer.md)
[ER\_COMPRESSED\_DATA](zip.constants.md#ziparchive.constants.er-compressed-data);

public
const
[int](language.types.integer.md)
[ER\_CANCELLED](zip.constants.md#ziparchive.constants.er-cancelled);

public
const
[int](language.types.integer.md)
[ER\_DATA\_LENGTH](zip.constants.md#ziparchive.constants.er-data-length);

public
const
[int](language.types.integer.md)
[ER\_NOT\_ALLOWED](zip.constants.md#ziparchive.constants.er-not-allowed);

public
const
[int](language.types.integer.md)
[ER\_TRUNCATED\_ZIP](zip.constants.md#ziparchive.constants.er-truncated-zip);

public
const
[int](language.types.integer.md)
[AFL\_RDONLY](zip.constants.md#ziparchive.constants.afl-rdonly);

public
const
[int](language.types.integer.md)
[AFL\_IS\_TORRENTZIP](zip.constants.md#ziparchive.constants.afl-is-torrentzip);

public
const
[int](language.types.integer.md)
[AFL\_WANT\_TORRENTZIP](zip.constants.md#ziparchive.constants.afl-want-torrentzip);

public
const
[int](language.types.integer.md)
[AFL\_CREATE\_OR\_KEEP\_FILE\_FOR\_EMPTY\_ARCHIVE](zip.constants.md#ziparchive.constants.afl-create-or-keep-file-for-empty-archive);

public
const
[int](language.types.integer.md)
[OPSYS\_DOS](zip.constants.md#ziparchive.constants.opsys);

public
const
[int](language.types.integer.md)
[OPSYS\_AMIGA](zip.constants.md#ziparchive.constants.opsys);

public
const
[int](language.types.integer.md)
[OPSYS\_OPENVMS](zip.constants.md#ziparchive.constants.opsys);

public
const
[int](language.types.integer.md)
[OPSYS\_UNIX](zip.constants.md#ziparchive.constants.opsys);

public
const
[int](language.types.integer.md)
[OPSYS\_VM\_CMS](zip.constants.md#ziparchive.constants.opsys);

public
const
[int](language.types.integer.md)
[OPSYS\_ATARI\_ST](zip.constants.md#ziparchive.constants.opsys);

public
const
[int](language.types.integer.md)
[OPSYS\_OS\_2](zip.constants.md#ziparchive.constants.opsys);

public
const
[int](language.types.integer.md)
[OPSYS\_MACINTOSH](zip.constants.md#ziparchive.constants.opsys);

public
const
[int](language.types.integer.md)
[OPSYS\_Z\_SYSTEM](zip.constants.md#ziparchive.constants.opsys);

public
const
[int](language.types.integer.md)
[OPSYS\_CPM](zip.constants.md#ziparchive.constants.opsys);

public
const
[int](language.types.integer.md)
[OPSYS\_WINDOWS\_NTFS](zip.constants.md#ziparchive.constants.opsys);

public
const
[int](language.types.integer.md)
[OPSYS\_MVS](zip.constants.md#ziparchive.constants.opsys);

public
const
[int](language.types.integer.md)
[OPSYS\_VSE](zip.constants.md#ziparchive.constants.opsys);

public
const
[int](language.types.integer.md)
[OPSYS\_ACORN\_RISC](zip.constants.md#ziparchive.constants.opsys);

public
const
[int](language.types.integer.md)
[OPSYS\_VFAT](zip.constants.md#ziparchive.constants.opsys);

public
const
[int](language.types.integer.md)
[OPSYS\_ALTERNATE\_MVS](zip.constants.md#ziparchive.constants.opsys);

public
const
[int](language.types.integer.md)
[OPSYS\_BEOS](zip.constants.md#ziparchive.constants.opsys);

public
const
[int](language.types.integer.md)
[OPSYS\_TANDEM](zip.constants.md#ziparchive.constants.opsys);

public
const
[int](language.types.integer.md)
[OPSYS\_OS\_400](zip.constants.md#ziparchive.constants.opsys);

public
const
[int](language.types.integer.md)
[OPSYS\_OS\_X](zip.constants.md#ziparchive.constants.opsys);

public
const
[int](language.types.integer.md)
[OPSYS\_DEFAULT](zip.constants.md#ziparchive.constants.opsys);

public
const
[int](language.types.integer.md)
[EM\_NONE](zip.constants.md#ziparchive.constants.em-none);

public
const
[int](language.types.integer.md)
[EM\_TRAD\_PKWARE](zip.constants.md#ziparchive.constants.em-trad-pkware);

public
const
[int](language.types.integer.md)
[EM\_AES\_128](zip.constants.md#ziparchive.constants.em-aes-128);

public
const
[int](language.types.integer.md)
[EM\_AES\_192](zip.constants.md#ziparchive.constants.em-aes-192);

public
const
[int](language.types.integer.md)
[EM\_AES\_256](zip.constants.md#ziparchive.constants.em-aes-256);

public
const
[int](language.types.integer.md)
[EM\_UNKNOWN](zip.constants.md#ziparchive.constants.em-unknown);

public
const
[string](language.types.string.md)
[LIBZIP\_VERSION](zip.constants.md#ziparchive.constants.libzip-version);

public
const
[int](language.types.integer.md)
[LENGTH\_TO\_END](zip.constants.md#ziparchive.constants.length-to-end);

public
const
[int](language.types.integer.md)
[LENGTH\_UNCHECKED](zip.constants.md#ziparchive.constants.length-unchecked);

/\* Propriedades \*/

public
readonly
[int](language.types.integer.md)
[$lastId](class.ziparchive.md#ziparchive.props.lastid);

public
readonly
[int](language.types.integer.md)
[$status](class.ziparchive.md#ziparchive.props.status);

public
readonly
[int](language.types.integer.md)
[$statusSys](class.ziparchive.md#ziparchive.props.statussys);

public
readonly
[int](language.types.integer.md)
[$numFiles](class.ziparchive.md#ziparchive.props.numfiles);

public
readonly
[string](language.types.string.md)
[$filename](class.ziparchive.md#ziparchive.props.filename);

public
readonly
[string](language.types.string.md)
[$comment](class.ziparchive.md#ziparchive.props.comment);

/\* Métodos \*/

public function [addEmptyDir](ziparchive.addemptydir.md)([string](language.types.string.md) `$dirname`, [int](language.types.integer.md) `$flags` = 0): [bool](language.types.boolean.md)

public function [addFile](ziparchive.addfile.md)(  
    [string](language.types.string.md) `$filepath`,  
    [string](language.types.string.md) `$entryname` = "",  
    [int](language.types.integer.md) `$start` = 0,  
    [int](language.types.integer.md) `$length` = **`ZipArchive::LENGTH_TO_END`**,  
    [int](language.types.integer.md) `$flags` = **`ZipArchive::FL_OVERWRITE`**  
): [bool](language.types.boolean.md)

public function [addFromString](ziparchive.addfromstring.md)([string](language.types.string.md) `$name`, [string](language.types.string.md) `$content`, [int](language.types.integer.md) `$flags` = **`ZipArchive::FL_OVERWRITE`**): [bool](language.types.boolean.md)

public function [addGlob](ziparchive.addglob.md)([string](language.types.string.md) `$pattern`, [int](language.types.integer.md) `$flags` = 0, [array](language.types.array.md) `$options` = []): [array](language.types.array.md)|[false](language.types.singleton.md)

public function [addPattern](ziparchive.addpattern.md)([string](language.types.string.md) `$pattern`, [string](language.types.string.md) `$path` = ".", [array](language.types.array.md) `$options` = []): [array](language.types.array.md)|[false](language.types.singleton.md)

public function [clearError](ziparchive.clearerror.md)(): [void](language.types.void.md)

public function [close](ziparchive.close.md)(): [bool](language.types.boolean.md)

public function [count](ziparchive.count.md)(): [int](language.types.integer.md)

public function [deleteIndex](ziparchive.deleteindex.md)([int](language.types.integer.md) `$index`): [bool](language.types.boolean.md)

public function [deleteName](ziparchive.deletename.md)([string](language.types.string.md) `$name`): [bool](language.types.boolean.md)

public function [extractTo](ziparchive.extractto.md)([string](language.types.string.md) `$pathto`, [array](language.types.array.md)|[string](language.types.string.md)|[null](language.types.null.md) `$files` = **`null`**): [bool](language.types.boolean.md)

public function [getArchiveComment](ziparchive.getarchivecomment.md)([int](language.types.integer.md) `$flags` = 0): [string](language.types.string.md)|[false](language.types.singleton.md)

public function [getArchiveFlag](ziparchive.getarchiveflag.md)([int](language.types.integer.md) `$flag`, [int](language.types.integer.md) `$flags` = 0): [int](language.types.integer.md)

public function [getCommentIndex](ziparchive.getcommentindex.md)([int](language.types.integer.md) `$index`, [int](language.types.integer.md) `$flags` = 0): [string](language.types.string.md)|[false](language.types.singleton.md)

public function [getCommentName](ziparchive.getcommentname.md)([string](language.types.string.md) `$name`, [int](language.types.integer.md) `$flags` = 0): [string](language.types.string.md)|[false](language.types.singleton.md)

public function [getExternalAttributesIndex](ziparchive.getexternalattributesindex.md)(  
    [int](language.types.integer.md) `$index`,  
    [int](language.types.integer.md) `&$opsys`,  
    [int](language.types.integer.md) `&$attr`,  
    [int](language.types.integer.md) `$flags` = 0  
): [bool](language.types.boolean.md)

public function [getExternalAttributesName](ziparchive.getexternalattributesname.md)(  
    [string](language.types.string.md) `$name`,  
    [int](language.types.integer.md) `&$opsys`,  
    [int](language.types.integer.md) `&$attr`,  
    [int](language.types.integer.md) `$flags` = 0  
): [bool](language.types.boolean.md)

public function [getFromIndex](ziparchive.getfromindex.md)([int](language.types.integer.md) `$index`, [int](language.types.integer.md) `$len` = 0, [int](language.types.integer.md) `$flags` = 0): [string](language.types.string.md)|[false](language.types.singleton.md)

public function [getFromName](ziparchive.getfromname.md)([string](language.types.string.md) `$name`, [int](language.types.integer.md) `$len` = 0, [int](language.types.integer.md) `$flags` = 0): [string](language.types.string.md)|[false](language.types.singleton.md)

public function [getNameIndex](ziparchive.getnameindex.md)([int](language.types.integer.md) `$index`, [int](language.types.integer.md) `$flags` = 0): [string](language.types.string.md)|[false](language.types.singleton.md)

public function [getStatusString](ziparchive.getstatusstring.md)(): [string](language.types.string.md)

public function [getStream](ziparchive.getstream.md)([string](language.types.string.md) `$name`): [resource](language.types.resource.md)|[false](language.types.singleton.md)

public function [getStreamIndex](ziparchive.getstreamindex.md)([int](language.types.integer.md) `$index`, [int](language.types.integer.md) `$flags` = 0): [resource](language.types.resource.md)|[false](language.types.singleton.md)

public function [getStreamName](ziparchive.getstreamname.md)([string](language.types.string.md) `$name`, [int](language.types.integer.md) `$flags` = 0): [resource](language.types.resource.md)|[false](language.types.singleton.md)

public static function [isCompressionMethodSupported](ziparchive.iscompressionmethoddupported.md)([int](language.types.integer.md) `$method`, [bool](language.types.boolean.md) `$enc` = **`true`**): [bool](language.types.boolean.md)

public static function [isEncryptionMethodSupported](ziparchive.isencryptionmethoddupported.md)([int](language.types.integer.md) `$method`, [bool](language.types.boolean.md) `$enc` = **`true`**): [bool](language.types.boolean.md)

public function [locateName](ziparchive.locatename.md)([string](language.types.string.md) `$name`, [int](language.types.integer.md) `$flags` = 0): [int](language.types.integer.md)|[false](language.types.singleton.md)

public function [open](ziparchive.open.md)([string](language.types.string.md) `$filename`, [int](language.types.integer.md) `$flags` = 0): [bool](language.types.boolean.md)|[int](language.types.integer.md)

public function [registerCancelCallback](ziparchive.registercancelcallback.md)([callable](language.types.callable.md) `$callback`): [bool](language.types.boolean.md)

public function [registerProgressCallback](ziparchive.registerprogresscallback.md)([float](language.types.float.md) `$rate`, [callable](language.types.callable.md) `$callback`): [bool](language.types.boolean.md)

public function [renameIndex](ziparchive.renameindex.md)([int](language.types.integer.md) `$index`, [string](language.types.string.md) `$new_name`): [bool](language.types.boolean.md)

public function [renameName](ziparchive.renamename.md)([string](language.types.string.md) `$name`, [string](language.types.string.md) `$new_name`): [bool](language.types.boolean.md)

public function [replaceFile](ziparchive.replacefile.md)(  
    [string](language.types.string.md) `$filepath`,  
    [int](language.types.integer.md) `$index`,  
    [int](language.types.integer.md) `$start` = 0,  
    [int](language.types.integer.md) `$length` = **`ZipArchive::LENGTH_TO_END`**,  
    [int](language.types.integer.md) `$flags` = 0  
): [bool](language.types.boolean.md)

public function [setArchiveComment](ziparchive.setarchivecomment.md)([string](language.types.string.md) `$comment`): [bool](language.types.boolean.md)

public function [setArchiveFlag](ziparchive.setarchiveflag.md)([int](language.types.integer.md) `$flag`, [int](language.types.integer.md) `$value`): [bool](language.types.boolean.md)

public function [setCommentIndex](ziparchive.setcommentindex.md)([int](language.types.integer.md) `$index`, [string](language.types.string.md) `$comment`): [bool](language.types.boolean.md)

public function [setCommentName](ziparchive.setcommentname.md)([string](language.types.string.md) `$name`, [string](language.types.string.md) `$comment`): [bool](language.types.boolean.md)

public function [setCompressionIndex](ziparchive.setcompressionindex.md)([int](language.types.integer.md) `$index`, [int](language.types.integer.md) `$method`, [int](language.types.integer.md) `$compflags` = 0): [bool](language.types.boolean.md)

public function [setCompressionName](ziparchive.setcompressionname.md)([string](language.types.string.md) `$name`, [int](language.types.integer.md) `$method`, [int](language.types.integer.md) `$compflags` = 0): [bool](language.types.boolean.md)

public function [setEncryptionIndex](ziparchive.setencryptionindex.md)([int](language.types.integer.md) `$index`, [int](language.types.integer.md) `$method`, #[[\SensitiveParameter](class.sensitiveparameter.md)] [?](language.types.null.md)[string](language.types.string.md) `$password` = **`null`**): [bool](language.types.boolean.md)

public function [setEncryptionName](ziparchive.setencryptionname.md)([string](language.types.string.md) `$name`, [int](language.types.integer.md) `$method`, #[[\SensitiveParameter](class.sensitiveparameter.md)] [?](language.types.null.md)[string](language.types.string.md) `$password` = **`null`**): [bool](language.types.boolean.md)

public function [setExternalAttributesIndex](ziparchive.setexternalattributesindex.md)(  
    [int](language.types.integer.md) `$index`,  
    [int](language.types.integer.md) `$opsys`,  
    [int](language.types.integer.md) `$attr`,  
    [int](language.types.integer.md) `$flags` = 0  
): [bool](language.types.boolean.md)

public function [setExternalAttributesName](ziparchive.setexternalattributesname.md)(  
    [string](language.types.string.md) `$name`,  
    [int](language.types.integer.md) `$opsys`,  
    [int](language.types.integer.md) `$attr`,  
    [int](language.types.integer.md) `$flags` = 0  
): [bool](language.types.boolean.md)

public function [setMtimeIndex](ziparchive.setmtimeindex.md)([int](language.types.integer.md) `$index`, [int](language.types.integer.md) `$timestamp`, [int](language.types.integer.md) `$flags` = 0): [bool](language.types.boolean.md)

public function [setMtimeName](ziparchive.setmtimename.md)([string](language.types.string.md) `$name`, [int](language.types.integer.md) `$timestamp`, [int](language.types.integer.md) `$flags` = 0): [bool](language.types.boolean.md)

public function [setPassword](ziparchive.setpassword.md)(#[[\SensitiveParameter](class.sensitiveparameter.md)] [string](language.types.string.md) `$password`): [bool](language.types.boolean.md)

public function [statIndex](ziparchive.statindex.md)([int](language.types.integer.md) `$index`, [int](language.types.integer.md) `$flags` = 0): [array](language.types.array.md)|[false](language.types.singleton.md)

public function [statName](ziparchive.statname.md)([string](language.types.string.md) `$name`, [int](language.types.integer.md) `$flags` = 0): [array](language.types.array.md)|[false](language.types.singleton.md)

public function [unchangeAll](ziparchive.unchangeall.md)(): [bool](language.types.boolean.md)

public function [unchangeArchive](ziparchive.unchangearchive.md)(): [bool](language.types.boolean.md)

public function [unchangeIndex](ziparchive.unchangeindex.md)([int](language.types.integer.md) `$index`): [bool](language.types.boolean.md)

public function [unchangeName](ziparchive.unchangename.md)([string](language.types.string.md) `$name`): [bool](language.types.boolean.md)

}

## Propriedades

lastId
:   Valor do índice da última entrada adicionada (arquivo ou diretório).
    Disponível a partir do PHP 8.0.0 e PECL zip 1.18.0.

status
:   Status do arquivo Zip.
    Disponível para arquivos fechados, a partir do PHP 8.0.0 e PECL zip 1.18.0.

statusSys
:   Status do sistema do arquivo Zip.
    Disponível para arquivos fechados, a partir do PHP 8.0.0 e PECL zip 1.18.0.

numFiles
:   Número de arquivos no arquivo Zip

filename
:   Nome do arquivo no sistema de arquivos

comment
:   Comentário para o arquivo Zip

## Índice

- [ZipArchive::addEmptyDir](ziparchive.addemptydir.md) — Adiciona um novo diretório
- [ZipArchive::addFile](ziparchive.addfile.md) — Adiciona um arquivo a um arquivo ZIP a partir do caminho fornecido
- [ZipArchive::addFromString](ziparchive.addfromstring.md) — Adiciona um arquivo a um arquivo ZIP usando seu conteúdo
- [ZipArchive::addGlob](ziparchive.addglob.md) — Adicionar arquivos de um diretório por padrão glob
- [ZipArchive::addPattern](ziparchive.addpattern.md) — Adiciona arquivos de um diretório por padrão PCRE
- [ZipArchive::clearError](ziparchive.clearerror.md) — Limpa a mensagem de erro de status, mensagens do sistema e/ou do zip
- [ZipArchive::close](ziparchive.close.md) — Fecha o arquivo de arquivo ativo (aberto ou recém-criado)
- [ZipArchive::count](ziparchive.count.md) — Conta o número de arquivos no arquivo
- [ZipArchive::deleteIndex](ziparchive.deleteindex.md) — Exclui uma entrada no arquivo usando seu índice
- [ZipArchive::deleteName](ziparchive.deletename.md) — Exclui uma entrada no arquivo usando seu nome
- [ZipArchive::extractTo](ziparchive.extractto.md) — Extrai o conteúdo do arquivo
- [ZipArchive::getArchiveComment](ziparchive.getarchivecomment.md) — Retorna o comentário do arquivo Zip
- [ZipArchive::getArchiveFlag](ziparchive.getarchiveflag.md) — Retorna o valor de uma opção global do arquivo Zip
- [ZipArchive::getCommentIndex](ziparchive.getcommentindex.md) — Retorna o comentário de uma entrada usando o índice da entrada
- [ZipArchive::getCommentName](ziparchive.getcommentname.md) — Retorna o comentário de uma entrada usando o nome da entrada
- [ZipArchive::getExternalAttributesIndex](ziparchive.getexternalattributesindex.md) — Recupera os atributos externos de uma entrada definida pelo seu índice
- [ZipArchive::getExternalAttributesName](ziparchive.getexternalattributesname.md) — Recupera os atributos externos de uma entrada definida pelo seu nome
- [ZipArchive::getFromIndex](ziparchive.getfromindex.md) — Retorna o conteúdo da entrada usando seu índice
- [ZipArchive::getFromName](ziparchive.getfromname.md) — Retorna o conteúdo da entrada usando seu nome
- [ZipArchive::getNameIndex](ziparchive.getnameindex.md) — Retorna o nome de uma entrada usando seu índice
- [ZipArchive::getStatusString](ziparchive.getstatusstring.md) — Retorna a mensagem de erro de status, mensagens do sistema e/ou zip
- [ZipArchive::getStream](ziparchive.getstream.md) — Obtém um manipulador de arquivo para a entrada definida pelo seu nome (somente leitura)
- [ZipArchive::getStreamIndex](ziparchive.getstreamindex.md) — Obtém um manipulador de arquivo para a entrada definida pelo seu índice (somente leitura)
- [ZipArchive::getStreamName](ziparchive.getstreamname.md) — Obtém um manipulador de arquivo para a entrada definida pelo seu nome (somente leitura)
- [ZipArchive::isCompressionMethodSupported](ziparchive.iscompressionmethoddupported.md) — Verifica se um método de compressão é suportado pelo libzip
- [ZipArchive::isEncryptionMethodSupported](ziparchive.isencryptionmethoddupported.md) — Verifica se um método de criptografia é suportado pelo libzip
- [ZipArchive::locateName](ziparchive.locatename.md) — Retorna o índice da entrada no arquivo compactado
- [ZipArchive::open](ziparchive.open.md) — Abre um arquivo compactado ZIP
- [ZipArchive::registerCancelCallback](ziparchive.registercancelcallback.md) — Registra um callback para permitir o cancelamento durante o fechamento do arquivo compactado.
- [ZipArchive::registerProgressCallback](ziparchive.registerprogresscallback.md) — Registrar um callback para fornecer atualizações durante o fechamento do arquivo compactado.
- [ZipArchive::renameIndex](ziparchive.renameindex.md) — Renomeia uma entrada definida pelo seu índice
- [ZipArchive::renameName](ziparchive.renamename.md) — Renomeia uma entrada definida pelo seu nome
- [ZipArchive::replaceFile](ziparchive.replacefile.md) — Substitui um arquivo no arquivo ZIP por um caminho fornecido
- [ZipArchive::setArchiveComment](ziparchive.setarchivecomment.md) — Define o comentário de um arquivo ZIP
- [ZipArchive::setArchiveFlag](ziparchive.setarchiveflag.md) — Define uma opção global de um arquivo ZIP
- [ZipArchive::setCommentIndex](ziparchive.setcommentindex.md) — Define o comentário de uma entrada definida pelo seu índice
- [ZipArchive::setCommentName](ziparchive.setcommentname.md) — Define o comentário de uma entrada definida pelo seu nome
- [ZipArchive::setCompressionIndex](ziparchive.setcompressionindex.md) — Define o método de compressão de uma entrada definida pelo seu índice
- [ZipArchive::setCompressionName](ziparchive.setcompressionname.md) — Define o método de compressão de uma entrada definida pelo seu nome
- [ZipArchive::setEncryptionIndex](ziparchive.setencryptionindex.md) — Define o método de criptografia de uma entrada definida pelo seu índice
- [ZipArchive::setEncryptionName](ziparchive.setencryptionname.md) — Define o método de criptografia de uma entrada definida pelo seu nome
- [ZipArchive::setExternalAttributesIndex](ziparchive.setexternalattributesindex.md) — Define os atributos externos de uma entrada definida pelo seu índice
- [ZipArchive::setExternalAttributesName](ziparchive.setexternalattributesname.md) — Define os atributos externos de uma entrada definida pelo seu nome
- [ZipArchive::setMtimeIndex](ziparchive.setmtimeindex.md) — Define o tempo de modificação de uma entrada definida pelo seu índice
- [ZipArchive::setMtimeName](ziparchive.setmtimename.md) — Define o tempo de modificação de uma entrada definida pelo seu nome
- [ZipArchive::setPassword](ziparchive.setpassword.md) — Define a senha para o arquivo ZIP ativo
- [ZipArchive::statIndex](ziparchive.statindex.md) — Obtenha os detalhes de uma entrada definida pelo seu índice
- [ZipArchive::statName](ziparchive.statname.md) — Obtém os detalhes de uma entrada definida pelo seu nome
- [ZipArchive::unchangeAll](ziparchive.unchangeall.md) — Desfaz todas as alterações feitas no arquivo
- [ZipArchive::unchangeArchive](ziparchive.unchangearchive.md) — Reverte todas as alterações globais feitas no arquivo
- [ZipArchive::unchangeIndex](ziparchive.unchangeindex.md) — Reverte todas as alterações feitas a uma entrada no índice fornecido
- [ZipArchive::unchangeName](ziparchive.unchangename.md) — Reverte todas as alterações feitas a uma entrada com o nome fornecido

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
