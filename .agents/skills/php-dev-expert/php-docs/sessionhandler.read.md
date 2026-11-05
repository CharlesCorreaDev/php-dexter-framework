# Lê os dados de sessão

> **Fonte / Source:** https://www.php.net/manual/pt_BR/sessionhandler.read.php

---

# SessionHandler::read

(PHP 5 >= 5.4.0, PHP 7, PHP 8)

SessionHandler::read — Lê os dados de sessão

### Descrição

public function **SessionHandler::read**([string](language.types.string.md) `$id`): [string](language.types.string.md)|[false](language.types.singleton.md)

Lê os dados de sessão do armazenamento de sessão e retorna o resultado de volta para o PHP para processamento interno.
Este método é chamado automaticamente pelo PHP quando uma sessão é iniciada (quer seja de forma automática ou explicitamente
com [session\_start()](function.session-start.md)) e é precedida por uma chamada interna de
[SessionHandler::open()](sessionhandler.open.md).

Este método envolve o manipulador interno de gravação do PHP definido na configuração ini
[session.save\_handler](session.configuration.md#ini.session.save-handler) que foi definido
antes deste manipulador ser ativado por [session\_set\_save\_handler()](function.session-set-save-handler.md).

Se esta classe for estendida por herança, chamar o método `read` da classe pai invocará a função
que envolve este método, portanto invocará o callback interno. Isto permite que esse método seja
substituído ou interceptado e filtrado (por exemplo, descriptografar o valor de `data`
retornado pelo método `read` da classe pai).

Para mais informações relacionadas ao que é esperado que este método faça, por favor leia a documentação de
[SessionHandlerInterface::read()](sessionhandlerinterface.read.md).

### Parâmetros

`id`
:   O id da sessão onde deve ser feita a leitura dos dados.

### Valor Retornado

Retorna uma string, codificada, dos dados lidos. Se nada foi lido, deve retornar **`false`**. Note que este valor é retornado internamente ao PHP para processamento.

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
