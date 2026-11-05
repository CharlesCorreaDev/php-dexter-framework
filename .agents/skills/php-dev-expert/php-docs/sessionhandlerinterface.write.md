# Escreve os dados de sessão

> **Fonte / Source:** https://www.php.net/manual/pt_BR/sessionhandlerinterface.write.php

---

# SessionHandlerInterface::write

(PHP 5 >= 5.4.0, PHP 7, PHP 8)

SessionHandlerInterface::write — Escreve os dados de sessão

### Descrição

public function **SessionHandlerInterface::write**([string](language.types.string.md) `$id`, [string](language.types.string.md) `$data`): [bool](language.types.boolean.md)

Escreve os dados de sessão no armazenamento de sessão. Chamada por
[session\_write\_close()](function.session-write-close.md), quando [session\_register\_shutdown()](function.session-register-shutdown.md) falhar ou na finalização normal.
Note que o método [SessionHandlerInterface::close()](sessionhandlerinterface.close.md) é chamado imediatamente depois desta função.

O PHP chamará este método quando a sessão estiver pronta para salvar e fechar. O PHP codifica
os dados da super global [$\_SESSION](reserved.variables.session.md) em uma string serializada e passa o resultado
junto com o ID de sessão à este método para armazenamento. O método de serialização usado
é especificado na configuração [session.serialize\_handler](session.configuration.md#ini.session.serialize-handler).

Note que este método normalmente é chamado pelo PHP depois que o buffer de saída é fechado, a não ser que ele seja chamado
explicitamente por [session\_write\_close()](function.session-write-close.md)

### Parâmetros

`id`
:   O id da sessão.

`data`
:   Os dados de sessão codificados. Esta informação é o resultado codificado internamente pelo PHP da super global [$\_SESSION](reserved.variables.session.md) em uma string
    serializada e passada como este parâmetro. Note que sessões usam um método alternativo de serialização.

### Valor Retornado

O valor retornado (geralmente **`true`** em caso de sucesso, **`false`** em caso de falha). Note que este valor é retornado internamente ao PHP para processamento.

### Veja também

- [session.serialize\_handler](session.configuration.md#ini.session.serialize-handler)
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
