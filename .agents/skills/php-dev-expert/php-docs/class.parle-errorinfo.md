# A classe Parle\ErrorInfo

> **Fonte / Source:** https://www.php.net/manual/pt_BR/class.parle-errorinfo.php

---

# A classe Parle\ErrorInfo

(PECL parle >= 0.5.2)

## Introdução

A classe representa informações detalhadas de erro fornecidas por [Parle\Parser::errorInfo()](parle-parser.errorinfo.md)

## Resumo da classe

class **Parle\ErrorInfo**
{

/\* Propriedades \*/

public
[int](language.types.integer.md)
[$id](class.parle-errorinfo.md#parle-errorinfo.props.id);

public
[int](language.types.integer.md)
[$position](class.parle-errorinfo.md#parle-errorinfo.props.position);

public
[mixed](language.types.mixed.md)
[$token](class.parle-errorinfo.md#parle-errorinfo.props.token);

/\* Métodos \*/

}

## Propriedades

id
:   ID do erro.

position
:   Posição na entrada onde ocorreu o erro.

token
:   Se aplicável - o [Parle\Token](class.parle-token.md) relacionado ao erro, caso contrário **`null`**.

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
