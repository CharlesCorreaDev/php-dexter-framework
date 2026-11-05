# A classe Directory

> **Fonte / Source:** https://www.php.net/manual/pt_BR/class.directory.php

---

# A classe Directory

(PHP 4, PHP 5, PHP 7, PHP 8)

## Introdução

Instâncias de **Directory** são criadas chamando-se a função
[dir()](function.dir.md), e não através do operador [new](language.oop5.basic.md#language.oop5.basic.new).

## Resumo da classe

final
class ****Directory****
{

/\* Propriedades \*/

public
readonly
[string](language.types.string.md)
[$path](class.directory.md#directory.props.path);

public
readonly
[resource](language.types.resource.md)
[$handle](class.directory.md#directory.props.handle);

/\* Métodos \*/

public function [close](directory.close.md)(): [void](language.types.void.md)

public function [read](directory.read.md)(): [string](language.types.string.md)|[false](language.types.singleton.md)

public function [rewind](directory.rewind.md)(): [void](language.types.void.md)

}

## Propriedades

path
:   O diretórioque foi aberto.

handle
:   Pode ser usada com outras funções de diretório como
    [readdir()](function.readdir.md), [rewinddir()](function.rewinddir.md) e
    [closedir()](function.closedir.md).

## Registro de Alterações

| Versão | Descrição |
| --- | --- |
| 8.5.0 | A class agora é final. |
| 8.1.0 | As propriedades path e handle agora são somente-leitura. |

## Índice

- [Directory::close](directory.close.md) — Fecha o manipulador de diretório
- [Directory::read](directory.read.md) — Lê entrada de um manipulador de diretório
- [Directory::rewind](directory.rewind.md) — Retrocede um manipulador de diretório

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
