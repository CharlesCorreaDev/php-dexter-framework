# Error

> **Fonte / Source:** https://www.php.net/manual/pt_BR/class.error.php

---

# Error

(PHP 7, PHP 8)

## Introdução

**Error** é a classe base para todas
as exceções de erros internos do PHP.

## Resumo da classe

class ****Error****
implements
[Throwable](class.throwable.md) {

/\* Propriedades \*/

protected
[string](language.types.string.md)
[$message](class.error.md#error.props.message) = "";

private
[string](language.types.string.md)
[$string](class.error.md#error.props.string) = "";

protected
[int](language.types.integer.md)
[$code](class.error.md#error.props.code);

protected
[string](language.types.string.md)
[$file](class.error.md#error.props.file) = "";

protected
[int](language.types.integer.md)
[$line](class.error.md#error.props.line);

private
[array](language.types.array.md)
[$trace](class.error.md#error.props.trace) = [];

private
?[Throwable](class.throwable.md)
[$previous](class.error.md#error.props.previous) = null;

/\* Métodos \*/

public function [\_\_construct](error.construct.md)([string](language.types.string.md) `$message` = "", [int](language.types.integer.md) `$code` = 0, [?](language.types.null.md)[Throwable](class.throwable.md) `$previous` = **`null`**)

final public function [getMessage](error.getmessage.md)(): [string](language.types.string.md)

final public function [getPrevious](error.getprevious.md)(): [?](language.types.null.md)[Throwable](class.throwable.md)

final public function [getCode](error.getcode.md)(): [int](language.types.integer.md)

final public function [getFile](error.getfile.md)(): [string](language.types.string.md)

final public function [getLine](error.getline.md)(): [int](language.types.integer.md)

final public function [getTrace](error.gettrace.md)(): [array](language.types.array.md)

final public function [getTraceAsString](error.gettraceasstring.md)(): [string](language.types.string.md)

public function [\_\_toString](error.tostring.md)(): [string](language.types.string.md)

private function [\_\_clone](error.clone.md)(): [void](language.types.void.md)

}

## Propriedades

message
:   A mensagem de erro

code
:   O código do erro

file
:   O nome do arquivo onde o erro aconteceu

line
:   A linha onde o erro aconteceu

previous
:   A exceção anteriormente lançada

string
:   Uma representação string do stack trace

trace
:   O stack trace no formato array

## Índice

- [Error::\_\_construct](error.construct.md) — Constrói o objeto error
- [Error::getMessage](error.getmessage.md) — Recupera a mensagem de erro
- [Error::getPrevious](error.getprevious.md) — Retorna o último Throwable
- [Error::getCode](error.getcode.md) — Recupera o código do erro
- [Error::getFile](error.getfile.md) — Recupera o nome do arquivo onde o erro ocorreu
- [Error::getLine](error.getline.md) — Recupera a linha onde o erro ocorreu
- [Error::getTrace](error.gettrace.md) — Recupera a pilha de rastreio
- [Error::getTraceAsString](error.gettraceasstring.md) — Recupera a pilha de rastreio como uma string
- [Error::\_\_toString](error.tostring.md) — Representação em string do erro
- [Error::\_\_clone](error.clone.md) — Clona o erro

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
