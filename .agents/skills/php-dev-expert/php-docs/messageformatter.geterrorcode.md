# Obtém o código de erro da última operação

> **Fonte / Source:** https://www.php.net/manual/pt_BR/messageformatter.geterrorcode.php

---

# MessageFormatter::getErrorCode

# msgfmt\_get\_error\_code

(PHP 5 >= 5.3.0, PHP 7, PHP 8, PECL intl >= 1.0.0)

MessageFormatter::getErrorCode -- msgfmt\_get\_error\_code — Obtém o código de erro da última operação

### Descrição

Estilo orientado a objetos

public function **MessageFormatter::getErrorCode**(): [int](language.types.integer.md)

Estilo procedural

function **msgfmt\_get\_error\_code**([MessageFormatter](class.messageformatter.md) `$formatter`): [int](language.types.integer.md)

Obtém o código de erro da última operação.

### Parâmetros

`formatter`
:   O formatador de mensagem

### Valor Retornado

O código de erro, um dos valores UErrorCode. O valor inicial (sem erro) é U\_ZERO\_ERROR.

### Veja também

- [msgfmt\_get\_error\_message()](messageformatter.geterrormessage.md) - Obtém o texto do erro da última operação
- [intl\_get\_error\_code()](function.intl-get-error-code.md) - Obtém o último código de erro
- [intl\_is\_failure()](function.intl-is-failure.md) - Verifica se o código de erro fornecido indica falha

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
