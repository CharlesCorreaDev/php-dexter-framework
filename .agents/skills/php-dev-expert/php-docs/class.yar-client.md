# A classe Yar_Client

> **Fonte / Source:** https://www.php.net/manual/pt_BR/class.yar-client.php

---

# A classe Yar\_Client

(No version information available, might only be in Git)

## Introdução

## Resumo da classe

class **Yar\_Client**
{

/\* Propriedades \*/

protected
[$\_protocol](class.yar-client.md#yar-client.props.protocol);

protected
[$\_uri](class.yar-client.md#yar-client.props.uri);

protected
[$\_options](class.yar-client.md#yar-client.props.options);

protected
[$\_running](class.yar-client.md#yar-client.props.running);

/\* Métodos \*/

public function [\_\_call](yar-client.call.md)([string](language.types.string.md) `$method`, [array](language.types.array.md) `$parameters`): [void](language.types.void.md)

final public function [\_\_construct](yar-client.construct.md)([string](language.types.string.md) `$url`, [array](language.types.array.md) `$options` = ?)

public function [getOpt](yar-client.getopt.md)([int](language.types.integer.md) `$name`): [mixed](language.types.mixed.md)

public function [setOpt](yar-client.setopt.md)([int](language.types.integer.md) `$name`, [mixed](language.types.mixed.md) `$value`): [Yar\_Client](class.yar-client.md)|[false](language.types.singleton.md)

}

## Propriedades

\_protocol

\_uri

\_options

\_running

## Índice

- [Yar\_Client::\_\_call](yar-client.call.md) — Chama o serviço
- [Yar\_Client::\_\_construct](yar-client.construct.md) — Cria um cliente
- [Yar\_Client::getOpt](yar-client.getopt.md) — Read a client option
- [Yar\_Client::setOpt](yar-client.setopt.md) — Define contextos de chamada

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
