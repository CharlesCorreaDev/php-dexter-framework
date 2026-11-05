# A classe Transliterator

> **Fonte / Source:** https://www.php.net/manual/pt_BR/class.transliterator.php

---

# A classe Transliterator

(PHP 5 >= 5.4.0, PHP 7, PHP 8, PECL intl >= 2.0.0)

## Introdução

Transliterator fornece transliteração de strings.

## Resumo da classe

class ****Transliterator****
{

/\* Constantes \*/

public
const
[int](language.types.integer.md)
[FORWARD](class.transliterator.md#transliterator.constants.forward);

public
const
[int](language.types.integer.md)
[REVERSE](class.transliterator.md#transliterator.constants.reverse);

/\* Propriedades \*/

public
readonly
[string](language.types.string.md)
[$id](class.transliterator.md#transliterator.props.id);

/\* Métodos \*/

final private function [\_\_construct](transliterator.construct.md)()

public static function [create](transliterator.create.md)([string](language.types.string.md) `$id`, [int](language.types.integer.md) `$direction` = **`Transliterator::FORWARD`**): [?](language.types.null.md)[Transliterator](class.transliterator.md)

public static function [createFromRules](transliterator.createfromrules.md)([string](language.types.string.md) `$rules`, [int](language.types.integer.md) `$direction` = **`Transliterator::FORWARD`**): [?](language.types.null.md)[Transliterator](class.transliterator.md)

public function [createInverse](transliterator.createinverse.md)(): [?](language.types.null.md)[Transliterator](class.transliterator.md)

public function [getErrorCode](transliterator.geterrorcode.md)(): [int](language.types.integer.md)

public function [getErrorMessage](transliterator.geterrormessage.md)(): [string](language.types.string.md)

public static function [listIDs](transliterator.listids.md)(): [array](language.types.array.md)|[false](language.types.singleton.md)

public function [transliterate](transliterator.transliterate.md)([string](language.types.string.md) `$string`, [int](language.types.integer.md) `$start` = 0, [int](language.types.integer.md) `$end` = -1): [string](language.types.string.md)|[false](language.types.singleton.md)

}

## Propriedades

id

## Constantes predefinidas

**`Transliterator::FORWARD`** [int](language.types.integer.md)

**`Transliterator::REVERSE`** [int](language.types.integer.md)

## Registro de Alterações

| Versão | Descrição |
| --- | --- |
| 8.4.0 | As constantes de classe agora são tipadas. |
| 8.2.0 | A propriedade id agora é somente-leitura. |

## Índice

- [Transliterator::\_\_construct](transliterator.construct.md) — Construtor privado para proibir instanciação
- [Transliterator::create](transliterator.create.md) — Cria um transliterador
- [Transliterator::createFromRules](transliterator.createfromrules.md) — Cria um transliterador a partir de regras
- [Transliterator::createInverse](transliterator.createinverse.md) — Cria um transliterador inverso
- [Transliterator::getErrorCode](transliterator.geterrorcode.md) — Obtém o último código de erro
- [Transliterator::getErrorMessage](transliterator.geterrormessage.md) — Obtém a última mensagem de erro
- [Transliterator::listIDs](transliterator.listids.md) — Obtém IDs de transliteradores
- [Transliterator::transliterate](transliterator.transliterate.md) — Translitera uma string

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
