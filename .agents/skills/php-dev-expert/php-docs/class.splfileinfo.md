# A classe SplFileInfo

> **Fonte / Source:** https://www.php.net/manual/pt_BR/class.splfileinfo.php

---

# A classe SplFileInfo

(PHP 5 >= 5.1.2, PHP 7, PHP 8)

## Introdução

A classe SplFileInfo oferece uma interface orientada a objetos de alto nível para
informações sobre um arquivo individual.

## Resumo da classe

class ****SplFileInfo****
implements
[Stringable](class.stringable.md) {

/\* Métodos \*/

public function [\_\_construct](splfileinfo.construct.md)([string](language.types.string.md) `$filename`)

public function [getATime](splfileinfo.getatime.md)(): [int](language.types.integer.md)|[false](language.types.singleton.md)

public function [getBasename](splfileinfo.getbasename.md)([string](language.types.string.md) `$suffix` = ""): [string](language.types.string.md)

public function [getCTime](splfileinfo.getctime.md)(): [int](language.types.integer.md)|[false](language.types.singleton.md)

public function [getExtension](splfileinfo.getextension.md)(): [string](language.types.string.md)

public function [getFileInfo](splfileinfo.getfileinfo.md)([?](language.types.null.md)[string](language.types.string.md) `$class` = **`null`**): [SplFileInfo](class.splfileinfo.md)

public function [getFilename](splfileinfo.getfilename.md)(): [string](language.types.string.md)

public function [getGroup](splfileinfo.getgroup.md)(): [int](language.types.integer.md)|[false](language.types.singleton.md)

public function [getInode](splfileinfo.getinode.md)(): [int](language.types.integer.md)|[false](language.types.singleton.md)

public function [getLinkTarget](splfileinfo.getlinktarget.md)(): [string](language.types.string.md)|[false](language.types.singleton.md)

public function [getMTime](splfileinfo.getmtime.md)(): [int](language.types.integer.md)|[false](language.types.singleton.md)

public function [getOwner](splfileinfo.getowner.md)(): [int](language.types.integer.md)|[false](language.types.singleton.md)

public function [getPath](splfileinfo.getpath.md)(): [string](language.types.string.md)

public function [getPathInfo](splfileinfo.getpathinfo.md)([?](language.types.null.md)[string](language.types.string.md) `$class` = **`null`**): [?](language.types.null.md)[SplFileInfo](class.splfileinfo.md)

public function [getPathname](splfileinfo.getpathname.md)(): [string](language.types.string.md)

public function [getPerms](splfileinfo.getperms.md)(): [int](language.types.integer.md)|[false](language.types.singleton.md)

public function [getRealPath](splfileinfo.getrealpath.md)(): [string](language.types.string.md)|[false](language.types.singleton.md)

public function [getSize](splfileinfo.getsize.md)(): [int](language.types.integer.md)|[false](language.types.singleton.md)

public function [getType](splfileinfo.gettype.md)(): [string](language.types.string.md)|[false](language.types.singleton.md)

public function [isDir](splfileinfo.isdir.md)(): [bool](language.types.boolean.md)

public function [isExecutable](splfileinfo.isexecutable.md)(): [bool](language.types.boolean.md)

public function [isFile](splfileinfo.isfile.md)(): [bool](language.types.boolean.md)

public function [isLink](splfileinfo.islink.md)(): [bool](language.types.boolean.md)

public function [isReadable](splfileinfo.isreadable.md)(): [bool](language.types.boolean.md)

public function [isWritable](splfileinfo.iswritable.md)(): [bool](language.types.boolean.md)

public function [openFile](splfileinfo.openfile.md)([string](language.types.string.md) `$mode` = "r", [bool](language.types.boolean.md) `$useIncludePath` = **`false`**, [?](language.types.null.md)[resource](language.types.resource.md) `$context` = **`null`**): [SplFileObject](class.splfileobject.md)

public function [setFileClass](splfileinfo.setfileclass.md)([string](language.types.string.md) `$class` = **`SplFileObject::class`**): [void](language.types.void.md)

public function [setInfoClass](splfileinfo.setinfoclass.md)([string](language.types.string.md) `$class` = **`SplFileInfo::class`**): [void](language.types.void.md)

public function [\_\_toString](splfileinfo.tostring.md)(): [string](language.types.string.md)

}

## Registro de Alterações

| Versão | Descrição |
| --- | --- |
| 8.0.0 | **SplFileInfo** implementa [Stringable](class.stringable.md) agora. |

## Índice

- [SplFileInfo::\_\_construct](splfileinfo.construct.md) — Constrói um novo objeto SplFileInfo
- [SplFileInfo::getATime](splfileinfo.getatime.md) — Obtém o último horário de acesso do arquivo
- [SplFileInfo::getBasename](splfileinfo.getbasename.md) — Obtém o nome base do arquivo
- [SplFileInfo::getCTime](splfileinfo.getctime.md) — Obtém o tempo de mudança do inode
- [SplFileInfo::getExtension](splfileinfo.getextension.md) — Obtém a extensão do arquivo
- [SplFileInfo::getFileInfo](splfileinfo.getfileinfo.md) — Obtém um objeto SplFileInfo para o arquivo
- [SplFileInfo::getFilename](splfileinfo.getfilename.md) — Obtém o nome do arquivo
- [SplFileInfo::getGroup](splfileinfo.getgroup.md) — Obtém o grupo do arquivo
- [SplFileInfo::getInode](splfileinfo.getinode.md) — Obtém o inode para o arquivo
- [SplFileInfo::getLinkTarget](splfileinfo.getlinktarget.md) — Obtém o alvo de um link
- [SplFileInfo::getMTime](splfileinfo.getmtime.md) — Obtém o tempo da última modificação
- [SplFileInfo::getOwner](splfileinfo.getowner.md) — Obtém o proprietário do arquivo
- [SplFileInfo::getPath](splfileinfo.getpath.md) — Obtém o caminho sem o nome do arquivo
- [SplFileInfo::getPathInfo](splfileinfo.getpathinfo.md) — Obtém um objeto SplFileInfo para o caminho
- [SplFileInfo::getPathname](splfileinfo.getpathname.md) — Obtém o caminho para o arquivo
- [SplFileInfo::getPerms](splfileinfo.getperms.md) — Obtém as permissões do arquivo
- [SplFileInfo::getRealPath](splfileinfo.getrealpath.md) — Obtém o caminho absoluto para o arquivo
- [SplFileInfo::getSize](splfileinfo.getsize.md) — Obtém o tamanho do arquivo
- [SplFileInfo::getType](splfileinfo.gettype.md) — Obtém o tipo de arquivo
- [SplFileInfo::isDir](splfileinfo.isdir.md) — Indica se o arquivo é um diretório
- [SplFileInfo::isExecutable](splfileinfo.isexecutable.md) — Indica se o arquivo é executável
- [SplFileInfo::isFile](splfileinfo.isfile.md) — Indica se o objeto faz referência a um arquivo regular
- [SplFileInfo::isLink](splfileinfo.islink.md) — Indica se um arquivo é um link
- [SplFileInfo::isReadable](splfileinfo.isreadable.md) — Indica se o arquivo é legível
- [SplFileInfo::isWritable](splfileinfo.iswritable.md) — Indica se a entrada é gravável
- [SplFileInfo::openFile](splfileinfo.openfile.md) — Obtém um objeto SplFileObject para o arquivo
- [SplFileInfo::setFileClass](splfileinfo.setfileclass.md) — Define a classe usada com SplFileInfo::openFile
- [SplFileInfo::setInfoClass](splfileinfo.setinfoclass.md) — Define a classe usada com SplFileInfo::getFileInfo e SplFileInfo::getPathInfo
- [SplFileInfo::\_\_toString](splfileinfo.tostring.md) — Retorna o caminho para o arquivo como uma string

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
