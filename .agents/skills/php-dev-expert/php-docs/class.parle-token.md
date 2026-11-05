# A classe Parle\Token

> **Fonte / Source:** https://www.php.net/manual/pt_BR/class.parle-token.php

---

# A classe Parle\Token

(PECL parle >= 0.5.2)

## Introdução

Esta classe representa um token. O analisador léxico retorna instâncias desta classe.

## Resumo da classe

class **Parle\Token**
{

/\* Constantes \*/

const
[int](language.types.integer.md)
[EOI](class.parle-token.md#parle-token.constants.eoi) = 0;

const
[int](language.types.integer.md)
[UNKNOWN](class.parle-token.md#parle-token.constants.unknown) = -1;

const
[int](language.types.integer.md)
[SKIP](class.parle-token.md#parle-token.constants.skip) = -2;

/\* Propriedades \*/

public
[int](language.types.integer.md)
[$id](class.parle-token.md#parle-token.props.id);

public
[string](language.types.string.md)
[$value](class.parle-token.md#parle-token.props.value);

/\* Métodos \*/

}

## Propriedades

id
:   ID do token.

value
:   Valor do token.

## Constantes predefinidas

**`Parle\Token::EOI`**
:   ID de token de final de entrada.

**`Parle\Token::UNKNOWN`**
:   ID de token desconhecido.

**`Parle\Token::SKIP`**
:   Ignora ID de token.

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
