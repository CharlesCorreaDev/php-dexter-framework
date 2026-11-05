# Exception

> **Fonte / Source:** https://www.php.net/manual/pt_BR/class.exception.php

---

# Exception

(PHP 5, PHP 7, PHP 8)

## Introdução

**Exception** é a classe base
para todas as exceções.

## Resumo da classe

class ****Exception****
implements
[Throwable](class.throwable.md) {

/\* Propriedades \*/

protected
[string](language.types.string.md)
[$message](class.exception.md#exception.props.message) = "";

private
[string](language.types.string.md)
[$string](class.exception.md#exception.props.string) = "";

protected
[int](language.types.integer.md)
[$code](class.exception.md#exception.props.code);

protected
[string](language.types.string.md)
[$file](class.exception.md#exception.props.file) = "";

protected
[int](language.types.integer.md)
[$line](class.exception.md#exception.props.line);

private
[array](language.types.array.md)
[$trace](class.exception.md#exception.props.trace) = [];

private
?[Throwable](class.throwable.md)
[$previous](class.exception.md#exception.props.previous) = null;

/\* Métodos \*/

public function [\_\_construct](exception.construct.md)([string](language.types.string.md) `$message` = "", [int](language.types.integer.md) `$code` = 0, [?](language.types.null.md)[Throwable](class.throwable.md) `$previous` = **`null`**)

final public function [getMessage](exception.getmessage.md)(): [string](language.types.string.md)

final public function [getPrevious](exception.getprevious.md)(): [?](language.types.null.md)[Throwable](class.throwable.md)

final public function [getCode](exception.getcode.md)(): [int](language.types.integer.md)

final public function [getFile](exception.getfile.md)(): [string](language.types.string.md)

final public function [getLine](exception.getline.md)(): [int](language.types.integer.md)

final public function [getTrace](exception.gettrace.md)(): [array](language.types.array.md)

final public function [getTraceAsString](exception.gettraceasstring.md)(): [string](language.types.string.md)

public function [\_\_toString](exception.tostring.md)(): [string](language.types.string.md)

private function [\_\_clone](exception.clone.md)(): [void](language.types.void.md)

}

## Propriedades

message
:   A mensagem da exceção

code
:   O código da exceção

file
:   O nome do arquivo onde a exceção foi criada

line
:   A linha onde a exceção foi criada

previous
:   A exceção previamente lançada, se informada

string
:   O rastreamento de pilha na forma string

trace
:   O rastreamento de pilha na forma de array

## Índice

- [Exception::\_\_construct](exception.construct.md) — Construtor da exceção
- [Exception::getMessage](exception.getmessage.md) — Obtém a mensagem da exceção
- [Exception::getPrevious](exception.getprevious.md) — Retorna o Throwable anterior
- [Exception::getCode](exception.getcode.md) — Obtém o código da exceção
- [Exception::getFile](exception.getfile.md) — Obtém o arquivo no qual a exceção foi criada
- [Exception::getLine](exception.getline.md) — Obtém a linha na qual a exceção foi criada
- [Exception::getTrace](exception.gettrace.md) — Obtém a stack trace
- [Exception::getTraceAsString](exception.gettraceasstring.md) — Obtém a stack trace como uma string
- [Exception::\_\_toString](exception.tostring.md) — Representação em string da exceção
- [Exception::\_\_clone](exception.clone.md) — Clona a exceção

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
