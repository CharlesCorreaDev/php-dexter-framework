# Fecha a sessão

> **Fonte / Source:** https://www.php.net/manual/pt_BR/sessionhandler.close.php

---

# SessionHandler::close

(PHP 5 >= 5.4.0, PHP 7, PHP 8)

SessionHandler::close — Fecha a sessão

### Descrição

public function **SessionHandler::close**(): [bool](language.types.boolean.md)

Fecha a sessão atual. Este método é executado automaticamente e internamente pelo PHP ao
fechar a sessão, ou explicitamente com [session\_write\_close()](function.session-write-close.md) (que
primeiro chama [SessionHandler::write()](sessionhandler.write.md)).

Este método envolve o manipulador interno de gravação do PHP definido na configuração ini
[session.save\_handler](session.configuration.md#ini.session.save-handler) que foi definido
antes deste manipulador ser ativado por [session\_set\_save\_handler()](function.session-set-save-handler.md).

Se esta classe for estendida por herança, chamar o método `close` da classe pai invocará a função
que envolve este método, portanto invocará o callback interno. Isto permite que esse método seja
substituído ou interceptado.

Para mais informações relacionadas ao que é esperado que este método faça, por favor leia a documentação de
[SessionHandlerInterface::close()](sessionhandlerinterface.close.md).

### Parâmetros

Esta função não possui parâmetros.

### Valor Retornado

O valor retornado (geralmente **`true`** em caso de sucesso, **`false`** em caso de falha). Note que este valor é retornado internamente ao PHP para processamento.

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
