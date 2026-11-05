# Define o URI base

> **Fonte / Source:** https://www.php.net/manual/pt_BR/yaf-request-abstract.setbaseuri.php

---

# Yaf\_Request\_Abstract::setBaseUri

(Yaf >=1.0.0)

Yaf\_Request\_Abstract::setBaseUri — Define o URI base

### Descrição

public function **Yaf\_Request\_Abstract::setBaseUri**([string](language.types.string.md) `$uir`): [bool](language.types.boolean.md)

Define o URI base. O URI base é usado ao fazer o roteamento. Na fase de roteamento o URI
da solicitação é usado para rotear uma solicitação, enquanto o URI base é usado para pular a
parte inicial (URI base) do URI da solicitação.
Ou seja, se uma solicitação é recebida com URI a/b/c e o URI
base for "a/b", apenas "/c" será usado na fase de roteamento.
> **Nota**:
>
> Geralmente não é necessário definir isto, o Yaf irá determiná-lo automaticamente.

### Parâmetros

`uir`
:   URI base.

### Valor Retornado

Um booleano.

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
