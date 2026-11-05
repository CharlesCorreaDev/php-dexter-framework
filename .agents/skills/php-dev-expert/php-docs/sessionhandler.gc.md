# Apaga sessões antigas

> **Fonte / Source:** https://www.php.net/manual/pt_BR/sessionhandler.gc.php

---

# SessionHandler::gc

(PHP 5 >= 5.4.0, PHP 7, PHP 8)

SessionHandler::gc — Apaga sessões antigas

### Descrição

public function **SessionHandler::gc**([int](language.types.integer.md) `$max_lifetime`): [int](language.types.integer.md)|[false](language.types.singleton.md)

Apaga sessões expiradas. Chamada internamente e aleatoriamente pelo PHP quando uma sessão inicia ou quando
[session\_start()](function.session-start.md) é invocada. A frequência que ela é chamada é
baseada em [session.gc\_divisor](session.configuration.md#ini.session.gc-divisor) e
[session.gc\_probability](session.configuration.md#ini.session.gc-probability) (diretivas de
configuração).

Este método envolve o manipulador de gravação interno do PHP definido na configuração ini
[session.save\_handler](session.configuration.md#ini.session.save-handler) e que foi configurado
antes desse manipulador ser definido por [session\_set\_save\_handler()](function.session-set-save-handler.md).

Se esta classe for estendida por herança, chamar o método `gc` da classe pai invocará a função
que envolve este método, portanto invocará o callback interno. Isto permite que esse método seja
substituído e ou interceptado e filtrado.

Para mais informações relacionadas ao que é esperado que este método faça, por favor leia a documentação de
[SessionHandlerInterface::gc()](sessionhandlerinterface.gc.md).

### Parâmetros

`max_lifetime`
:   Sessões que não foram atualizados nos últimos `max_lifetime` segundos serão removidas.

### Valor Retornado

Retornar o número de sessões eliminadas no caso de sucesso, ou **`false`** em caso de falha.
Observe que esse valor é retornado internamente ao PHP para processamento.

### Registro de Alterações

| Versão | Descrição |
| --- | --- |
| 7.1.0 | Antes dessa versão, a função retornava **`true`** no caso de sucesso. |

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
