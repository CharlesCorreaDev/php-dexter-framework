# ErrorException

> **Fonte / Source:** https://www.php.net/manual/pt_BR/class.errorexception.php

---

# ErrorException

(PHP 5 >= 5.1.0, PHP 7, PHP 8)

## Introdução

Uma exceção Error.

## Resumo da classe

class ****ErrorException****
extends
[Exception](class.exception.md)
{

/\* Propriedades \*/

protected
[int](language.types.integer.md)
[$severity](class.errorexception.md#errorexception.props.severity) = E\_ERROR;

/\* Propriedades herdadas \*/

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

public function [\_\_construct](errorexception.construct.md)(  
    [string](language.types.string.md) `$message` = "",  
    [int](language.types.integer.md) `$code` = 0,  
    [int](language.types.integer.md) `$severity` = **`E_ERROR`**,  
    [?](language.types.null.md)[string](language.types.string.md) `$filename` = **`null`**,  
    [?](language.types.null.md)[int](language.types.integer.md) `$line` = **`null`**,  
    [?](language.types.null.md)[Throwable](class.throwable.md) `$previous` = **`null`**  
)

final public function [getSeverity](errorexception.getseverity.md)(): [int](language.types.integer.md)

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

severity
:   O nível da exceção

## Examples

**Exemplo #1 Uso da função [set\_error\_handler()](function.set-error-handler.md) para transformar mensagens de erro em ErrorException**

```
<?php

set_error_handler(function (int $errno, string $errstr, string $errfile, int $errline) {
    if (!(error_reporting() & $errno)) {
        // Este código de erro não é incluído em error_reporting.
        return;
    }

    if ($errno === E_DEPRECATED || $errno === E_USER_DEPRECATED) {
        // Não lança uma exceção para avisos de obsolescência porque avisos
        // inesperados podem quebrar a aplicação.
        return;
    }

    throw new \ErrorException($errstr, 0, $errno, $errfile, $errline);
});

// Desserializar dados errados emite um alerta que será convertido em um
// ErrorException pelo manipulador.
unserialize('broken data');

?>
```

O exemplo acima produzirá
algo semelhante a:

```
Fatal error: Uncaught ErrorException: unserialize(): Error at offset 0 of 11 bytes in test.php:16
Stack trace:
#0 [internal function]: {closure}(2, 'unserialize(): ...', 'test.php', 16)
#1 test.php(16): unserialize('broken data')
#2 {main}
  thrown in test.php on line 16
```

## Índice

- [ErrorException::\_\_construct](errorexception.construct.md) — Constrói a exceção
- [ErrorException::getSeverity](errorexception.getseverity.md) — Obtém o nível da exceção

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
