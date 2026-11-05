# Escreve os dados de sessão

> **Fonte / Source:** https://www.php.net/manual/pt_BR/sessionhandler.write.php

---

# SessionHandler::write

(PHP 5 >= 5.4.0, PHP 7, PHP 8)

SessionHandler::write — Escreve os dados de sessão

### Descrição

public function **SessionHandler::write**([string](language.types.string.md) `$id`, [string](language.types.string.md) `$data`): [bool](language.types.boolean.md)

Escreve os dados de sessão no armazenamento de sessão. Chamada na finalização normal do PHP; por
[session\_write\_close()](function.session-write-close.md); ou quando [session\_register\_shutdown()](function.session-register-shutdown.md) falha.
O PHP chamará [SessionHandler::close()](sessionhandler.close.md) imediatamente depois que este método retornar.

Este método envolve o manipulador interno de gravação do PHP definido na configuração ini
[session.save\_handler](session.configuration.md#ini.session.save-handler) que foi definido
antes deste manipulador ser ativado por [session\_set\_save\_handler()](function.session-set-save-handler.md).

Se esta classe for estendida por herança, chamar o método `write` da classe pai invocará a função
que envolve este método, portanto invocará o callback interno. Isto permite que esse método seja
substituído ou interceptado e filtrado (por exemplo, descriptografar o valor de `data`
antes de enviar para o método `write` da classe pai).

Para mais informações relacionadas ao que é esperado que este método faça, por favor leia a documentação
de [SessionHandlerInterface::write()](sessionhandlerinterface.write.md).

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
