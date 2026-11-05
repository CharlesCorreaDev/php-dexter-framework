# The SessionUpdateTimestampHandlerInterface interface

> **Fonte / Source:** https://www.php.net/manual/pt_BR/class.sessionupdatetimestamphandlerinterface.php

---

# The SessionUpdateTimestampHandlerInterface interface

(PHP 7, PHP 8)

## Introdução

**SessionUpdateTimestampHandlerInterface** é uma interface que define métodos opcionais
para criar um manipulador de sessão personalizado. Para passar um manipulador de sessão personalizado
para [session\_set\_save\_handler()](function.session-set-save-handler.md) usando sua
invocação OOP, a classe pode implementar esta interface.

Observe que os métodos de retorno de chamada das classes que implementam esta interface são projetados para serem chamados
internamente pelo PHP e não devem ser chamados a partir do código do espaço do usuário.

## Resumo da classe

interface ****SessionUpdateTimestampHandlerInterface**** {

/\* Métodos \*/

public function [updateTimestamp](sessionupdatetimestamphandlerinterface.updatetimestamp.md)([string](language.types.string.md) `$id`, [string](language.types.string.md) `$data`): [bool](language.types.boolean.md)

public function [validateId](sessionupdatetimestamphandlerinterface.validateid.md)([string](language.types.string.md) `$id`): [bool](language.types.boolean.md)

}

## Índice

- [SessionUpdateTimestampHandlerInterface::updateTimestamp](sessionupdatetimestamphandlerinterface.updatetimestamp.md) — Atualiza o timestamp
- [SessionUpdateTimestampHandlerInterface::validateId](sessionupdatetimestamphandlerinterface.validateid.md) — Valida o ID

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
