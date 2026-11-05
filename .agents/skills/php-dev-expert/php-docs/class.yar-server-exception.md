# A classe Yar_Server_Exception

> **Fonte / Source:** https://www.php.net/manual/pt_BR/class.yar-server-exception.php

---

# A classe Yar\_Server\_Exception

(No version information available, might only be in Git)

## Introdução

Se o serviço lançar exceções, uma Yar\_Server\_Exception será lançada no
lado do cliente.

## Resumo da classe

class **Yar\_Server\_Exception**

extends
[Exception](class.exception.md)
{

/\* Propriedades \*/

protected
[$\_type](class.yar-server-exception.md#yar-server-exception.props.type);

/\* Métodos \*/

public function [getType](yar-server-exception.gettype.md)(): [string](language.types.string.md)

/\* Métodos herdados \*/

final public function [Exception::getMessage](exception.getmessage.md)(): [string](language.types.string.md)

final public function [Exception::getPrevious](exception.getprevious.md)(): [?](language.types.null.md)[Throwable](class.throwable.md)

final public function [Exception::getCode](exception.getcode.md)(): [int](language.types.integer.md)

final public function [Exception::getFile](exception.getfile.md)(): [string](language.types.string.md)

final public function [Exception::getLine](exception.getline.md)(): [int](language.types.integer.md)

final public function [Exception::getTrace](exception.gettrace.md)(): [array](language.types.array.md)

final public function [Exception::getTraceAsString](exception.gettraceasstring.md)(): [string](language.types.string.md)

public function [Exception::\_\_toString](exception.tostring.md)(): [string](language.types.string.md)

private function [Exception::\_\_clone](exception.clone.md)(): [void](language.types.void.md)

}

## Propriedades

message

code

file

line

\_type

## Índice

- [Yar\_Server\_Exception::getType](yar-server-exception.gettype.md) — Recupera o tipo da exceção

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
