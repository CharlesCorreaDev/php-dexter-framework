# Inicia uma sessão

> **Fonte / Source:** https://www.php.net/manual/pt_BR/sessionhandler.open.php

---

# SessionHandler::open

(PHP 5 >= 5.4.0, PHP 7, PHP 8)

SessionHandler::open — Inicia uma sessão

### Descrição

public function **SessionHandler::open**([string](language.types.string.md) `$path`, [string](language.types.string.md) `$name`): [bool](language.types.boolean.md)

Cria uma nova sessão, ou reinicializa uma sessão existente. Chamada internamente pelo PHP quando
uma sessão inicia, quer seja de forma automática ou quando [session\_start()](function.session-start.md) é invocada.

Este método envolve o manipulador de gravação interno do PHP definido na configuração ini
[session.save\_handler](session.configuration.md#ini.session.save-handler) e que foi configurado
antes desse manipulador ser definido por [session\_set\_save\_handler()](function.session-set-save-handler.md).

Se esta classe for estendida por herança, chamar o método `open` da classe pai invocará a função
que envolve este método, portanto invocará o callback interno. Isto permite que esse método seja
substituído e ou interceptado e filtrado.

Para mais informações relacionadas ao que é esperado que este método faça, por favor leia a documentação de
[SessionHandlerInterface::open()](sessionhandlerinterface.open.md).

### Parâmetros

`path`
:   O caminho para armazenar/recuperar a sessão.

`name`
:   O nome da sessão.

### Valor Retornado

O valor retornado (geralmente **`true`** em caso de sucesso, **`false`** em caso de falha). Note que este valor é retornado internamente ao PHP para processamento.

### Veja também

- [session.auto-start](session.configuration.md#ini.session.auto-start)
  (diretiva de configuração).

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
