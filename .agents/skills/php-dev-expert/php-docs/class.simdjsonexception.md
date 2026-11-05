# A classe SimdJsonException

> **Fonte / Source:** https://www.php.net/manual/pt_BR/class.simdjsonexception.php

---

# A classe SimdJsonException

(PECL simdjson >= 2.1.0)

## Introdução

Exceção lançada por [simdjson\_decode()](function.simdjson-decode.md),
[simdjson\_key\_count()](function.simdjson-key-count.md),
[simdjson\_key\_exists()](function.simdjson-key-exists.md),
ou [simdjson\_key\_value()](function.simdjson-key-value.md).
Para valores possíveis, veja as constantes [códigos de erro do simdjson](simdjson.constants.md).

## Resumo da classe

class **SimdJsonException**

extends
[RuntimeException](class.runtimeexception.md)
{

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

}

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
