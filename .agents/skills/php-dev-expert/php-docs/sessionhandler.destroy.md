# Destrói uma sessão

> **Fonte / Source:** https://www.php.net/manual/pt_BR/sessionhandler.destroy.php

---

# SessionHandler::destroy

(PHP 5 >= 5.4.0, PHP 7, PHP 8)

SessionHandler::destroy — Destrói uma sessão

### Descrição

public function **SessionHandler::destroy**([string](language.types.string.md) `$id`): [bool](language.types.boolean.md)

Destrói uma sessão. Chamada internamente pelo PHP com [session\_regenerate\_id()](function.session-regenerate-id.md) (desde que
`destroy` seja **`true`**), por [session\_destroy()](function.session-destroy.md) ou quando
[session\_decode()](function.session-decode.md) falhar.

Este método envolve o manipulador de gravação interno do PHP, definido na configuração ini
[session.save\_handler](session.configuration.md#ini.session.save-handler), configurado
antes da definição deste manipulador por [session\_set\_save\_handler()](function.session-set-save-handler.md).

Se esta classe for estendida por herança, chamar o método `destroy` da classe pai invocará a função
que envolve este método, portanto invocará o callback interno. Isto permite que esse método seja
substituído e ou interceptado e filtrado.

Para mais informações relacionadas ao que é esperado que este método faça, por favor leia a documentação
de [SessionHandlerInterface::destroy()](sessionhandlerinterface.destroy.md).

### Parâmetros

`id`
:   O ID de sessão que estiver sendo destruído.

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
