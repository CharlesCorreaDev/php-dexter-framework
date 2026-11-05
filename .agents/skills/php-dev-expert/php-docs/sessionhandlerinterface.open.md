# Inicializa uma sessão

> **Fonte / Source:** https://www.php.net/manual/pt_BR/sessionhandlerinterface.open.php

---

# SessionHandlerInterface::open

(PHP 5 >= 5.4.0, PHP 7, PHP 8)

SessionHandlerInterface::open — Inicializa uma sessão

### Descrição

public function **SessionHandlerInterface::open**([string](language.types.string.md) `$path`, [string](language.types.string.md) `$name`): [bool](language.types.boolean.md)

Reinicializa uma sessão existente ou cria uma nova. Chamada quando uma sessão inicia ou quando
[session\_start()](function.session-start.md) é invocada.

### Parâmetros

`path`
:   O caminho para armazenar/recuperar a sessão.

`name`
:   O nome da sessão.

### Valor Retornado

O valor retornado (geralmente **`true`** em caso de sucesso, **`false`** em caso de falha). Note que este valor é retornado internamente ao PHP para processamento.

### Veja também

- [session\_name()](function.session-name.md) - Obtém e/ou define o nome da sessão atual
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
