# A classe StompException

> **Fonte / Source:** https://www.php.net/manual/pt_BR/class.stompexception.php

---

# A classe StompException

(PECL stomp >= 0.1.0)

## Introdução

Representa um erro gerado pela extensão stomp. Consulte [Exceções](language.error-handling.throwable.md#language.exceptions) para obter mais informações sobre exceções em PHP.

## Resumo da classe

class **StompException**

extends
[Exception](class.exception.md)
{

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

/\* Métodos \*/

public function [getDetails](stomp.getdetails.md)(): [string](language.types.string.md)

}

## Índice

- [StompException::getDetails](stomp.getdetails.md) — Obtém detalhes da exceção

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
