# The SessionIdInterface interface

> **Fonte / Source:** https://www.php.net/manual/pt_BR/class.sessionidinterface.php

---

# The SessionIdInterface interface

(PHP 5 >= 5.5.1, PHP 7, PHP 8)

## Introdução

**SessionIdInterface** é uma interface que define métodos opcionais
para criar um manipulador de sessão personalizado. Para passar um manipulador de
sessão personalizado para [session\_set\_save\_handler()](function.session-set-save-handler.md) usando sua
invocação OOP, a classe pode implementar esta interface.

Observe que os métodos de retorno de chamada das classes que implementam esta interface são projetados para serem chamados
internamente pelo PHP e não devem ser chamados a partir do código do espaço do usuário.

## Resumo da Interface

interface ****SessionIdInterface**** {

/\* Métodos \*/

public function [create\_sid](sessionidinterface.create-sid.md)(): [string](language.types.string.md)

}

## Índice

- [SessionIdInterface::create\_sid](sessionidinterface.create-sid.md) — Cria um ID de sessão.

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
