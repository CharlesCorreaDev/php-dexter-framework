# Remove sessões antigas

> **Fonte / Source:** https://www.php.net/manual/pt_BR/sessionhandlerinterface.gc.php

---

# SessionHandlerInterface::gc

(PHP 5 >= 5.4.0, PHP 7, PHP 8)

SessionHandlerInterface::gc — Remove sessões antigas

### Descrição

public function **SessionHandlerInterface::gc**([int](language.types.integer.md) `$max_lifetime`): [int](language.types.integer.md)|[false](language.types.singleton.md)

Remove sessões expiradas. Chamada por [session\_start()](function.session-start.md),
baseado nas configurações [session.gc\_divisor](session.configuration.md#ini.session.gc-divisor),
[session.gc\_probability](session.configuration.md#ini.session.gc-probability) e
[session.gc\_maxlifetime](session.configuration.md#ini.session.gc-maxlifetime).

### Parâmetros

`max_lifetime`
:   Sessões que não foram atualizados nos últimos `max_lifetime` segundos serão removidas.

### Valor Retornado

Retorna o número de sessões excluídas com sucesso, ou **`false`** em caso de falha.
Observe que este valor é retornado internamente ao PHP para processamento.

### Registro de Alterações

| Versão | Descrição |
| --- | --- |
| 7.1.0 | Antes desta versão, a função retornava **`true`** em caso de sucesso. |

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
