# Define função de retorno para token

> **Fonte / Source:** https://www.php.net/manual/pt_BR/parle-lexer.callout.php

---

# Parle\Lexer::callout

(PECL parle >= 0.7.2)

Parle\Lexer::callout — Define função de retorno para token

### Descrição

public function **Parle\Lexer::callout**([int](language.types.integer.md) `$id`, [callable](language.types.callable.md) `$callback`): [void](language.types.void.md)

Define uma função de retorno a ser chamada quando o analisador léxico encontrar um token específico.

### Parâmetros

`id`
:   ID do token.

`callback`
:   Chamável a ser invocado. O chamável não recebe nenhum argumento e seu valor de retorno é ignorado.

### Valor Retornado

Nenhum valor é retornado.

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
