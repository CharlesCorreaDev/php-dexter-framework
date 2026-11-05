# A classe RarEntry

> **Fonte / Source:** https://www.php.net/manual/pt_BR/class.rarentry.php

---

# A classe [RarEntry](class.rarentry.md)

(PECL rar >= 0.1)

## Introdução

Uma entrada RAR, representando um diretório ou arquivo compactado dentro de um arquivo RAR.

## Resumo da classe

final
class **RarEntry**
{

/\* Constantes \*/

const
[int](language.types.integer.md)
[HOST\_MSDOS](class.rarentry.md#rarentry.constants.host-msdos) = 0;

const
[int](language.types.integer.md)
[HOST\_OS2](class.rarentry.md#rarentry.constants.host-os2) = 1;

const
[int](language.types.integer.md)
[HOST\_WIN32](class.rarentry.md#rarentry.constants.host-win32) = 2;

const
[int](language.types.integer.md)
[HOST\_UNIX](class.rarentry.md#rarentry.constants.host-unix) = 3;

const
[int](language.types.integer.md)
[HOST\_MACOS](class.rarentry.md#rarentry.constants.host-macos) = 4;

const
[int](language.types.integer.md)
[HOST\_BEOS](class.rarentry.md#rarentry.constants.host-beos) = 5;

const
[int](language.types.integer.md)
[ATTRIBUTE\_WIN\_READONLY](class.rarentry.md#rarentry.constants.attribute-win-readonly) = 1;

const
[int](language.types.integer.md)
[ATTRIBUTE\_WIN\_HIDDEN](class.rarentry.md#rarentry.constants.attribute-win-hidden) = 2;

const
[int](language.types.integer.md)
[ATTRIBUTE\_WIN\_SYSTEM](class.rarentry.md#rarentry.constants.attribute-win-system) = 4;

const
[int](language.types.integer.md)
[ATTRIBUTE\_WIN\_DIRECTORY](class.rarentry.md#rarentry.constants.attribute-win-directory) = 16;

const
[int](language.types.integer.md)
[ATTRIBUTE\_WIN\_ARCHIVE](class.rarentry.md#rarentry.constants.attribute-win-archive) = 32;

const
[int](language.types.integer.md)
[ATTRIBUTE\_WIN\_DEVICE](class.rarentry.md#rarentry.constants.attribute-win-device) = 64;

const
[int](language.types.integer.md)
[ATTRIBUTE\_WIN\_NORMAL](class.rarentry.md#rarentry.constants.attribute-win-normal) = 128;

const
[int](language.types.integer.md)
[ATTRIBUTE\_WIN\_TEMPORARY](class.rarentry.md#rarentry.constants.attribute-win-temporary) = 256;

const
[int](language.types.integer.md)
[ATTRIBUTE\_WIN\_SPARSE\_FILE](class.rarentry.md#rarentry.constants.attribute-win-sparse-file) = 512;

const
[int](language.types.integer.md)
[ATTRIBUTE\_WIN\_REPARSE\_POINT](class.rarentry.md#rarentry.constants.attribute-win-reparse-point) = 1024;

const
[int](language.types.integer.md)
[ATTRIBUTE\_WIN\_COMPRESSED](class.rarentry.md#rarentry.constants.attribute-win-compressed) = 2048;

const
[int](language.types.integer.md)
[ATTRIBUTE\_WIN\_OFFLINE](class.rarentry.md#rarentry.constants.attribute-win-offline) = 4096;

const
[int](language.types.integer.md)
[ATTRIBUTE\_WIN\_NOT\_CONTENT\_INDEXED](class.rarentry.md#rarentry.constants.attribute-win-not-content-indexed) = 8192;

const
[int](language.types.integer.md)
[ATTRIBUTE\_WIN\_ENCRYPTED](class.rarentry.md#rarentry.constants.attribute-win-encrypted) = 16384;

const
[int](language.types.integer.md)
[ATTRIBUTE\_WIN\_VIRTUAL](class.rarentry.md#rarentry.constants.attribute-win-virtual) = 65536;

const
[int](language.types.integer.md)
[ATTRIBUTE\_UNIX\_WORLD\_EXECUTE](class.rarentry.md#rarentry.constants.attribute-unix-world-execute) = 1;

const
[int](language.types.integer.md)
[ATTRIBUTE\_UNIX\_WORLD\_WRITE](class.rarentry.md#rarentry.constants.attribute-unix-world-write) = 2;

const
[int](language.types.integer.md)
[ATTRIBUTE\_UNIX\_WORLD\_READ](class.rarentry.md#rarentry.constants.attribute-unix-world-read) = 4;

const
[int](language.types.integer.md)
[ATTRIBUTE\_UNIX\_GROUP\_EXECUTE](class.rarentry.md#rarentry.constants.attribute-unix-group-execute) = 8;

const
[int](language.types.integer.md)
[ATTRIBUTE\_UNIX\_GROUP\_WRITE](class.rarentry.md#rarentry.constants.attribute-unix-group-write) = 16;

const
[int](language.types.integer.md)
[ATTRIBUTE\_UNIX\_GROUP\_READ](class.rarentry.md#rarentry.constants.attribute-unix-group-read) = 32;

const
[int](language.types.integer.md)
[ATTRIBUTE\_UNIX\_OWNER\_EXECUTE](class.rarentry.md#rarentry.constants.attribute-unix-owner-execute) = 64;

const
[int](language.types.integer.md)
[ATTRIBUTE\_UNIX\_OWNER\_WRITE](class.rarentry.md#rarentry.constants.attribute-unix-owner-write) = 128;

const
[int](language.types.integer.md)
[ATTRIBUTE\_UNIX\_OWNER\_READ](class.rarentry.md#rarentry.constants.attribute-unix-owner-read) = 256;

const
[int](language.types.integer.md)
[ATTRIBUTE\_UNIX\_STICKY](class.rarentry.md#rarentry.constants.attribute-unix-sticky) = 512;

const
[int](language.types.integer.md)
[ATTRIBUTE\_UNIX\_SETGID](class.rarentry.md#rarentry.constants.attribute-unix-setgid) = 1024;

const
[int](language.types.integer.md)
[ATTRIBUTE\_UNIX\_SETUID](class.rarentry.md#rarentry.constants.attribute-unix-setuid) = 2048;

const
[int](language.types.integer.md)
[ATTRIBUTE\_UNIX\_FINAL\_QUARTET](class.rarentry.md#rarentry.constants.attribute-unix-final-quartet) = 61440;

const
[int](language.types.integer.md)
[ATTRIBUTE\_UNIX\_FIFO](class.rarentry.md#rarentry.constants.attribute-unix-fifo) = 4096;

const
[int](language.types.integer.md)
[ATTRIBUTE\_UNIX\_CHAR\_DEV](class.rarentry.md#rarentry.constants.attribute-unix-char-dev) = 8192;

const
[int](language.types.integer.md)
[ATTRIBUTE\_UNIX\_DIRECTORY](class.rarentry.md#rarentry.constants.attribute-unix-directory) = 16384;

const
[int](language.types.integer.md)
[ATTRIBUTE\_UNIX\_BLOCK\_DEV](class.rarentry.md#rarentry.constants.attribute-unix-block-dev) = 24576;

const
[int](language.types.integer.md)
[ATTRIBUTE\_UNIX\_REGULAR\_FILE](class.rarentry.md#rarentry.constants.attribute-unix-regular-file) = 32768;

const
[int](language.types.integer.md)
[ATTRIBUTE\_UNIX\_SYM\_LINK](class.rarentry.md#rarentry.constants.attribute-unix-sym-link) = 40960;

const
[int](language.types.integer.md)
[ATTRIBUTE\_UNIX\_SOCKET](class.rarentry.md#rarentry.constants.attribute-unix-socket) = 49152;

/\* Métodos \*/

public function [extract](rarentry.extract.md)(  
    [string](language.types.string.md) `$dir`,  
    [string](language.types.string.md) `$filepath` = "",  
    [string](language.types.string.md) `$password` = NULL,  
    [bool](language.types.boolean.md) `$extended_data` = **`false`**  
): [bool](language.types.boolean.md)

public function [getAttr](rarentry.getattr.md)(): [int](language.types.integer.md)

public function [getCrc](rarentry.getcrc.md)(): [string](language.types.string.md)

public function [getFileTime](rarentry.getfiletime.md)(): [string](language.types.string.md)

public function [getHostOs](rarentry.gethostos.md)(): [int](language.types.integer.md)

public function [getMethod](rarentry.getmethod.md)(): [int](language.types.integer.md)

public function [getName](rarentry.getname.md)(): [string](language.types.string.md)

public function [getPackedSize](rarentry.getpackedsize.md)(): [int](language.types.integer.md)

public function [getStream](rarentry.getstream.md)([string](language.types.string.md) `$password` = ?): [resource](language.types.resource.md)|[false](language.types.singleton.md)

public function [getUnpackedSize](rarentry.getunpackedsize.md)(): [int](language.types.integer.md)

public function [getVersion](rarentry.getversion.md)(): [int](language.types.integer.md)

public function [isDirectory](rarentry.isdirectory.md)(): [bool](language.types.boolean.md)

public function [isEncrypted](rarentry.isencrypted.md)(): [bool](language.types.boolean.md)

public function [\_\_toString](rarentry.tostring.md)(): [string](language.types.string.md)

}

## Constantes predefinidas

**`RarEntry::HOST_MSDOS`**
:   Se o valor de retorno de [RarEntry::getHostOs()](rarentry.gethostos.md) for igual a esta constante, o MS-DOS foi usado para
    adicionar esta entrada. Use em vez de **`RAR_HOST_MSDOS`**.

**`RarEntry::HOST_OS2`**
:   Se o valor de retorno de [RarEntry::getHostOs()](rarentry.gethostos.md) for igual a esta constante, o OS/2 foi utilizado para
    adicionar esta entrada. Destinado a substituir **`RAR_HOST_OS2`**.

**`RarEntry::HOST_WIN32`**
:   Se o valor de retorno de [RarEntry::getHostOs()](rarentry.gethostos.md) for igual a essa constante, o Microsoft Windows foi usado para
    adicionar essa entrada. Destinado a substituir **`RAR_HOST_WIN32`**.

**`RarEntry::HOST_UNIX`**
:   Se o valor de retorno de [RarEntry::getHostOs()](rarentry.gethostos.md) for igual a esta constante, um sistema operacional UNIX não especificado foi usado para
    adicionar esta entrada. Destinado a substituir **`RAR_HOST_UNIX`**.

**`RarEntry::HOST_MACOS`**
:   Se o valor de retorno de [RarEntry::getHostOs()](rarentry.gethostos.md) for igual a esta constante, o Mac OS foi usado para
    adicionar esta entrada.

**`RarEntry::HOST_BEOS`**
:   Se o valor de retorno de [RarEntry::getHostOs()](rarentry.gethostos.md) for igual a esta constante, o BeOS foi usado para
    adicionar esta entrada. Destinado a substituir **`RAR_HOST_BEOS`**.

**`RarEntry::ATTRIBUTE_WIN_READONLY`**
:   Bit que representa uma entrada do Windows com um atributo somente leitura. Para ser usado com
    [RarEntry::getAttr()](rarentry.getattr.md) em entradas cujo sistema operacional host é o Microsoft Windows.

**`RarEntry::ATTRIBUTE_WIN_HIDDEN`**
:   Bit que representa uma entrada do Windows com um atributo oculto. Para ser usado com
    [RarEntry::getAttr()](rarentry.getattr.md) em entradas cujo sistema operacional host é o Microsoft Windows.

**`RarEntry::ATTRIBUTE_WIN_SYSTEM`**
:   Bit que representa uma entrada do Windows com um atributo oculto. Para ser usado com
    [RarEntry::getAttr()](rarentry.getattr.md) em entradas cujo sistema operacional host é o Microsoft Windows.

**`RarEntry::ATTRIBUTE_WIN_DIRECTORY`**
:   Bit que representa uma entrada do Windows com um atributo de diretório (a entrada é um diretório). Para ser usado com
    [RarEntry::getAttr()](rarentry.getattr.md) em entradas cujo sistema operacional host é o Microsoft Windows. Veja também
    [RarEntry::isDirectory()](rarentry.isdirectory.md), que também funciona com entradas que não foram adicionadas no WinRAR.

**`RarEntry::ATTRIBUTE_WIN_ARCHIVE`**
:   Bit que representa uma entrada do Windows com um atributo de arquivo. Para ser usado com
    [RarEntry::getAttr()](rarentry.getattr.md) em entradas cujo sistema operacional host é o Microsoft Windows.

**`RarEntry::ATTRIBUTE_WIN_DEVICE`**
:   Bit que representa uma entrada do Windows com um atributo de dispositivo. Para ser usado com
    [RarEntry::getAttr()](rarentry.getattr.md) em entradas cujo sistema operacional host é o Microsoft Windows.

**`RarEntry::ATTRIBUTE_WIN_NORMAL`**
:   Bit que representa uma entrada do Windows com um atributo de arquivo normal (a entrada NÃO é um diretório). Para ser usado com
    [RarEntry::getAttr()](rarentry.getattr.md) em entradas cujo sistema operacional host é o Microsoft Windows. Veja também
    [RarEntry::isDirectory()](rarentry.isdirectory.md), que também funciona com entradas que não foram adicionadas no WinRAR.

**`RarEntry::ATTRIBUTE_WIN_TEMPORARY`**
:   Bit que representa uma entrada do Windows com um atributo temporário. Para ser usado com
    [RarEntry::getAttr()](rarentry.getattr.md) em entradas cujo sistema operacional host é o Microsoft Windows.

**`RarEntry::ATTRIBUTE_WIN_SPARSE_FILE`**
:   Bit que representa uma entrada do Windows com um atributo de arquivo esparso (o arquivo é um arquivo esparso NTFS). Para ser usado com
    [RarEntry::getAttr()](rarentry.getattr.md) em entradas cujo sistema operacional host é o Microsoft Windows.

**`RarEntry::ATTRIBUTE_WIN_REPARSE_POINT`**
:   Bit que representa uma entrada do Windows com um atributo de ponto de nova análise (a entrada é um ponto de nova análise NTFS, por exemplo, uma junção
    de diretório ou um sistema de arquivos de montagem). Para ser usado com
    [RarEntry::getAttr()](rarentry.getattr.md) em entradas cujo sistema operacional host é o Microsoft Windows.

**`RarEntry::ATTRIBUTE_WIN_COMPRESSED`**
:   Bit que representa uma entrada do Windows com um atributo compactado (somente NTFS). Para ser usado com
    [RarEntry::getAttr()](rarentry.getattr.md) em entradas cujo sistema operacional host é o Microsoft Windows.

**`RarEntry::ATTRIBUTE_WIN_OFFLINE`**
:   Bit que representa uma entrada do Windows com um atributo offline (a entrada está offline e não acessível). Para ser usado com
    [RarEntry::getAttr()](rarentry.getattr.md) em entradas cujo sistema operacional host é o Microsoft Windows.

**`RarEntry::ATTRIBUTE_WIN_NOT_CONTENT_INDEXED`**
:   Bit que representa uma entrada do Windows com um atributo não indexado por conteúdo (a entrada deve ser indexada). Para ser usado com
    [RarEntry::getAttr()](rarentry.getattr.md) em entradas cujo sistema operacional host é o Microsoft Windows.

**`RarEntry::ATTRIBUTE_WIN_ENCRYPTED`**
:   Bit que representa uma entrada do Windows com um atributo criptografado (somente NTFS). Para ser usado com
    [RarEntry::getAttr()](rarentry.getattr.md) em entradas cujo sistema operacional host é o Microsoft Windows.

**`RarEntry::ATTRIBUTE_WIN_VIRTUAL`**
:   Bit que representa uma entrada do Windows com um atributo virtual. Para ser usado com
    [RarEntry::getAttr()](rarentry.getattr.md) em entradas cujo sistema operacional host é o Microsoft Windows.

**`RarEntry::ATTRIBUTE_UNIX_WORLD_EXECUTE`**
:   Bit que representa uma entrada UNIX que é executável mundialmente. Para ser usado com
    [RarEntry::getAttr()](rarentry.getattr.md) em entradas cujo sistema operacional host é UNIX.

**`RarEntry::ATTRIBUTE_UNIX_WORLD_WRITE`**
:   Bit que representa uma entrada UNIX que pode ser escrita mundialmente. Para ser usado com
    [RarEntry::getAttr()](rarentry.getattr.md) em entradas cujo sistema operacional host é UNIX.

**`RarEntry::ATTRIBUTE_UNIX_WORLD_READ`**
:   Bit que representa uma entrada UNIX legível mundialmente. Para ser usado com
    [RarEntry::getAttr()](rarentry.getattr.md) em entradas cujo sistema operacional host é UNIX.

**`RarEntry::ATTRIBUTE_UNIX_GROUP_EXECUTE`**
:   Bit que representa uma entrada UNIX executável em grupo. Para ser usado com
    [RarEntry::getAttr()](rarentry.getattr.md) em entradas cujo sistema operacional host é UNIX.

**`RarEntry::ATTRIBUTE_UNIX_GROUP_WRITE`**
:   Bit que representa uma entrada UNIX que pode ser escrita em grupo. Para ser usado com
    [RarEntry::getAttr()](rarentry.getattr.md) em entradas cujo sistema operacional host é UNIX.

**`RarEntry::ATTRIBUTE_UNIX_GROUP_READ`**
:   Bit que representa uma entrada UNIX legível em grupo. Para ser usado com
    [RarEntry::getAttr()](rarentry.getattr.md) em entradas cujo sistema operacional host é UNIX.

**`RarEntry::ATTRIBUTE_UNIX_OWNER_EXECUTE`**
:   Bit que representa uma entrada UNIX executável pelo proprietário. Para ser usado com
    [RarEntry::getAttr()](rarentry.getattr.md) em entradas cujo sistema operacional host é UNIX.

**`RarEntry::ATTRIBUTE_UNIX_OWNER_WRITE`**
:   Bit que representa uma entrada UNIX que pode ser escrita pelo proprietário. Para ser usado com
    [RarEntry::getAttr()](rarentry.getattr.md) em entradas cujo sistema operacional host é UNIX.

**`RarEntry::ATTRIBUTE_UNIX_OWNER_READ`**
:   Bit que representa uma entrada UNIX legível pelo proprietário. Para ser usado com
    [RarEntry::getAttr()](rarentry.getattr.md) em entradas cujo sistema operacional host é UNIX.

**`RarEntry::ATTRIBUTE_UNIX_STICKY`**
:   Bit que representa o sticky bit do UNIX. Para ser usado com
    [RarEntry::getAttr()](rarentry.getattr.md) em entradas cujo sistema operacional host é UNIX.

**`RarEntry::ATTRIBUTE_UNIX_SETGID`**
:   Bit que representa o atributo setgid do UNIX. Para ser usado com
    [RarEntry::getAttr()](rarentry.getattr.md) em entradas cujo sistema operacional host é UNIX.

**`RarEntry::ATTRIBUTE_UNIX_SETUID`**
:   Bit que representa o atributo setuid do UNIX. Para ser usado com
    [RarEntry::getAttr()](rarentry.getattr.md) em entradas cujo sistema operacional host é UNIX.

**`RarEntry::ATTRIBUTE_UNIX_FINAL_QUARTET`**
:   Máscara para isolar os últimos quatro bits (nibble) dos atributos UNIX
    (\_S\_IFMT, o tipo de máscara de arquivo). Para ser usado com
    [RarEntry::getAttr()](rarentry.getattr.md) em entradas cujo sistema operacional host é UNIX e com as
    constantes [**`RarEntry::ATTRIBUTE_UNIX_FIFO`**](class.rarentry.md#rarentry.constants.attribute-unix-fifo),
    [**`RarEntry::ATTRIBUTE_UNIX_CHAR_DEV`**](class.rarentry.md#rarentry.constants.attribute-unix-char-dev),
    [**`RarEntry::ATTRIBUTE_UNIX_DIRECTORY`**](class.rarentry.md#rarentry.constants.attribute-unix-directory),
    [**`RarEntry::ATTRIBUTE_UNIX_BLOCK_DEV`**](class.rarentry.md#rarentry.constants.attribute-unix-block-dev),
    [**`RarEntry::ATTRIBUTE_UNIX_REGULAR_FILE`**](class.rarentry.md#rarentry.constants.attribute-unix-regular-file),
    [**`RarEntry::ATTRIBUTE_UNIX_SYM_LINK`**](class.rarentry.md#rarentry.constants.attribute-unix-sym-link) e
    [**`RarEntry::ATTRIBUTE_UNIX_SOCKET`**](class.rarentry.md#rarentry.constants.attribute-unix-socket).

**`RarEntry::ATTRIBUTE_UNIX_FIFO`**
:   FIFOs Unix terão atributos cujos últimos quatro bits possuem este valor. Para ser usado com
    [RarEntry::getAttr()](rarentry.getattr.md) em entradas cujo sistema operacional host é UNIX e com a
    constante [**`RarEntry::ATTRIBUTE_UNIX_FINAL_QUARTET`**](class.rarentry.md#rarentry.constants.attribute-unix-final-quartet).

**`RarEntry::ATTRIBUTE_UNIX_CHAR_DEV`**
:   Dispositivos de caracteres Unix terão atributos cujos últimos quatro bits possuem este valor. Para ser usado com
    [RarEntry::getAttr()](rarentry.getattr.md) em entradas cujo sistema operacional host é UNIX e com a
    constante [**`RarEntry::ATTRIBUTE_UNIX_FINAL_QUARTET`**](class.rarentry.md#rarentry.constants.attribute-unix-final-quartet).

**`RarEntry::ATTRIBUTE_UNIX_DIRECTORY`**
:   Os diretórios Unix terão atributos cujos últimos quatro bits possuem este valor. Para ser usado com
    [RarEntry::getAttr()](rarentry.getattr.md) em entradas cujo sistema operacional host é UNIX e com a
    constante [**`RarEntry::ATTRIBUTE_UNIX_FINAL_QUARTET`**](class.rarentry.md#rarentry.constants.attribute-unix-final-quartet). Consulte também
    [RarEntry::isDirectory()](rarentry.isdirectory.md), que também funciona com entradas que
    foram adicionadas em outros sistemas operacionais.

**`RarEntry::ATTRIBUTE_UNIX_BLOCK_DEV`**
:   Dispositivos de bloco Unix terão atributos cujos últimos quatro bits possuem este valor. Para ser usado com
    [RarEntry::getAttr()](rarentry.getattr.md) em entradas cujo sistema operacional host é UNIX e com a
    constante [**`RarEntry::ATTRIBUTE_UNIX_FINAL_QUARTET`**](class.rarentry.md#rarentry.constants.attribute-unix-final-quartet).

**`RarEntry::ATTRIBUTE_UNIX_REGULAR_FILE`**
:   Arquivos regulares Unix (não diretórios) terão atributos cujos últimos quatro bits possuem este valor. Para ser usado com
    [RarEntry::getAttr()](rarentry.getattr.md) em entradas cujo sistema operacional host é UNIX e com a
    constante [**`RarEntry::ATTRIBUTE_UNIX_FINAL_QUARTET`**](class.rarentry.md#rarentry.constants.attribute-unix-final-quartet). Consulte também
    [RarEntry::isDirectory()](rarentry.isdirectory.md), que também funciona com entradas que
    foram adicionadas em outros sistemas operacionais.

**`RarEntry::ATTRIBUTE_UNIX_SYM_LINK`**
:   Links simbólicos Unix terão atributos cujos últimos quatro bits possuem este valor. Para ser usado com
    [RarEntry::getAttr()](rarentry.getattr.md) em entradas cujo sistema operacional host é UNIX e com a
    constante [**`RarEntry::ATTRIBUTE_UNIX_FINAL_QUARTET`**](class.rarentry.md#rarentry.constants.attribute-unix-final-quartet).

**`RarEntry::ATTRIBUTE_UNIX_SOCKET`**
:   Os soquetes Unix terão atributos cujos últimos quatro bits possuem este valor. Para ser usado com
    [RarEntry::getAttr()](rarentry.getattr.md) em entradas cujo sistema operacional host é UNIX e com a
    constante [**`RarEntry::ATTRIBUTE_UNIX_FINAL_QUARTET`**](class.rarentry.md#rarentry.constants.attribute-unix-final-quartet).

## Índice

- [RarEntry::extract](rarentry.extract.md) — Extrai entrada do arquivo
- [RarEntry::getAttr](rarentry.getattr.md) — Obtém atributos da entrada
- [RarEntry::getCrc](rarentry.getcrc.md) — Obtém CRC da entrada
- [RarEntry::getFileTime](rarentry.getfiletime.md) — Obtém hora da última modificação da entrada
- [RarEntry::getHostOs](rarentry.gethostos.md) — Obtém sistema operacional host de entrada
- [RarEntry::getMethod](rarentry.getmethod.md) — Obtém método pack da entrada
- [RarEntry::getName](rarentry.getname.md) — Obtém o nome da entrada
- [RarEntry::getPackedSize](rarentry.getpackedsize.md) — Obtém o tamanho compactado da entrada
- [RarEntry::getStream](rarentry.getstream.md) — Obtém manipulador de arquivo para entrada
- [RarEntry::getUnpackedSize](rarentry.getunpackedsize.md) — Obtém o tamanho descompactado da entrada
- [RarEntry::getVersion](rarentry.getversion.md) — Obtém a versão mínima do programa RAR necessária para descompactar a entrada
- [RarEntry::isDirectory](rarentry.isdirectory.md) — Testa se uma entrada representa um diretório
- [RarEntry::isEncrypted](rarentry.isencrypted.md) — Testa se uma entrada está criptografada
- [RarEntry::\_\_toString](rarentry.tostring.md) — Obtém representação em texto da entrada

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
