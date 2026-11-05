# Atualiza o timestamp

> **Fonte / Source:** https://www.php.net/manual/pt_BR/sessionupdatetimestamphandlerinterface.updatetimestamp.php

---

# SessionUpdateTimestampHandlerInterface::updateTimestamp

(PHP 7, PHP 8)

SessionUpdateTimestampHandlerInterface::updateTimestamp — Atualiza o timestamp

### Descrição

public function **SessionUpdateTimestampHandlerInterface::updateTimestamp**([string](language.types.string.md) `$id`, [string](language.types.string.md) `$data`): [bool](language.types.boolean.md)

Atualiza o último timestamp de modificação da sessão.
Esta função é executada automaticamente quando uma sessão é atualizada.

### Parâmetros

`id`
:   O id da sessão

`data`
:   Os dados da sessão. Os dados da sessão serializados podem ser usados para determinar se os dados da sessão foram alterados e, portanto, devem ser atualizados.

### Valor Retornado

Retorna **`true`** se o timestamp foi atualizado, **`false`** caso contrário.
Observe que esse valor é retornado internamente para o processamento pelo PHP.

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
