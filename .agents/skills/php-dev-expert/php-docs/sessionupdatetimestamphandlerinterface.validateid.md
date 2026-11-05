# Valida o ID

> **Fonte / Source:** https://www.php.net/manual/pt_BR/sessionupdatetimestamphandlerinterface.validateid.php

---

# SessionUpdateTimestampHandlerInterface::validateId

(PHP 7, PHP 8)

SessionUpdateTimestampHandlerInterface::validateId — Valida o ID

### Descrição

public function **SessionUpdateTimestampHandlerInterface::validateId**([string](language.types.string.md) `$id`): [bool](language.types.boolean.md)

Valida um ID de sessão fornecido. Um ID de sessão é válido se já existir uma sessão com esse ID.
Essa função é executada automaticamente quando uma sessão está prestes a ser iniciada, um ID de sessão é fornecido
e [session.use\_strict\_mode](session.configuration.md#ini.session.use-strict-mode) é habilitado.

### Parâmetros

`id`
:   O ID da sessão.

### Valor Retornado

Retorna **`true`** para ID válido, **`false`** caso contrário.
Observe que este valor é retornado internamente ao PHP para processamento.

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
