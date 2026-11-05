# Lê os dados de sessão

> **Fonte / Source:** https://www.php.net/manual/pt_BR/sessionhandlerinterface.read.php

---

# SessionHandlerInterface::read

(PHP 5 >= 5.4.0, PHP 7, PHP 8)

SessionHandlerInterface::read — Lê os dados de sessão

### Descrição

public function **SessionHandlerInterface::read**([string](language.types.string.md) `$id`): [string](language.types.string.md)|[false](language.types.singleton.md)

Lê os dados de sessão do armazenamento de sessão e retorna os resultados.
Chamada logo depois que a sessão inicia ou quando [session\_start()](function.session-start.md) é chamada.
Note que antes desse método ser chamado, o método [SessionHandlerInterface::open()](sessionhandlerinterface.open.md) é invocado.

Este método é chamado pelo próprio PHP quando uma sessão é iniciada.
Este método deve recuperar os dados de sessão do armazenamento de sessão relacionados ao
ID de sessão fornecido. A string retornada por este método deve estar no mesmo
formato de serialização de quando ela foi originalmente passada para [SessionHandlerInterface::write()](sessionhandlerinterface.write.md).
Se a informação não for encontrada, retorna **`false`**

Os dados retornados por este método serão decodificados internamente pelo PHP usando o
método de deserialização especificado em [session.serialize\_handler](session.configuration.md#ini.session.serialize-handler).
Os dados resultantes serão usados para preencher a super global [$\_SESSION](reserved.variables.session.md).

Note que o esquema de serialização não é o mesmo que [unserialize()](function.unserialize.md)
e pode ser acessado por [session\_decode()](function.session-decode.md).

### Parâmetros

`id`
:   O id da sessão.

### Valor Retornado

Retorna uma string codificada dos dados lidos. Se nada foi lido, então deve retornar **`false`**. Note que este valor é retornado internamente para o PHP para processamento.

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
