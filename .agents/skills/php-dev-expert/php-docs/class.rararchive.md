# A classe RarArchive

> **Fonte / Source:** https://www.php.net/manual/pt_BR/class.rararchive.php

---

# A classe RarArchive

(PECL rar >= 2.0.0)

## Introdução

Esta classe representa um arquivo RAR, que pode ser formado por vários volumes (partes) e que contém
uma série de entradas RAR (ou seja, arquivos, diretórios e outros objetos especiais, como links simbólicos).

Objetos desta classe podem ser percorridos, gerando as entradas armazenadas no respectivo arquivo RAR.
Essas entradas também podem ser obtidas através de [RarArchive::getEntry()](rararchive.getentry.md) e
[RarArchive::getEntries()](rararchive.getentries.md).

## Resumo da classe

final
class **RarArchive**
implements
[Traversable](class.traversable.md) {

/\* Métodos \*/

public function [close](rararchive.close.md)(): [bool](language.types.boolean.md)

public function [getComment](rararchive.getcomment.md)(): [string](language.types.string.md)

public function [getEntries](rararchive.getentries.md)(): [array](language.types.array.md)|[false](language.types.singleton.md)

public function [getEntry](rararchive.getentry.md)([string](language.types.string.md) `$entryname`): [RarEntry](class.rarentry.md)|[false](language.types.singleton.md)

public function [isBroken](rararchive.isbroken.md)(): [bool](language.types.boolean.md)

public function [isSolid](rararchive.issolid.md)(): [bool](language.types.boolean.md)

public static function [open](rararchive.open.md)([string](language.types.string.md) `$filename`, [string](language.types.string.md) `$password` = NULL, [callable](language.types.callable.md) `$volume_callback` = NULL): [RarArchive](class.rararchive.md)|[false](language.types.singleton.md)

public function [setAllowBroken](rararchive.setallowbroken.md)([bool](language.types.boolean.md) `$allow_broken`): [bool](language.types.boolean.md)

public function [\_\_toString](rararchive.tostring.md)(): [string](language.types.string.md)

}

## Índice

- [RarArchive::close](rararchive.close.md) — Fecha o arquivo RAR e libera todos os recursos
- [RarArchive::getComment](rararchive.getcomment.md) — Obtém o texto de comentário do arquivo RAR
- [RarArchive::getEntries](rararchive.getentries.md) — Obtém a lista completa de entradas do arquivo RAR
- [RarArchive::getEntry](rararchive.getentry.md) — Obtém o objeto de entrada do arquivo RAR
- [RarArchive::isBroken](rararchive.isbroken.md) — Testa se um arquivo está quebrado (incompleto)
- [RarArchive::isSolid](rararchive.issolid.md) — Verifica se o arquivo RAR é sólido
- [RarArchive::open](rararchive.open.md) — Abre arquivo RAR
- [RarArchive::setAllowBroken](rararchive.setallowbroken.md) — Se é permitido abrir arquivos quebrados
- [RarArchive::\_\_toString](rararchive.tostring.md) — Obtém representação de texto

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
