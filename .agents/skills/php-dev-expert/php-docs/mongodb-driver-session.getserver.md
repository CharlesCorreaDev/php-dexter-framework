# Retorna o servidor ao qual esta sessão está fixada

> **Fonte / Source:** https://www.php.net/manual/pt_BR/mongodb-driver-session.getserver.php

---

# MongoDB\Driver\Session::getServer

(mongodb >=1.6.0)

MongoDB\Driver\Session::getServer — Retorna o servidor ao qual esta sessão está fixada

### Descrição

final public function **MongoDB\Driver\Session::getServer**(): [?](language.types.null.md)[MongoDB\Driver\Server](class.mongodb-driver-server.md)

Retorna o [MongoDB\Driver\Server](class.mongodb-driver-server.md) ao qual esta
sessão está fixada. Se a sessão não estiver fixada a um servidor, **`null`** será
retornado.

A fixação de sessão é usada principalmente para transações fragmentadas, pois todos os comandos
dentro de uma transação fragmentada devem ser enviados para a mesma instância do mongos. Este
método destina-se a ser usado por bibliotecas construídas sobre a extensão para permitir
o uso de um servidor fixado em vez de invocar a seleção do servidor.

### Parâmetros

Esta função não possui parâmetros.

### Valor Retornado

Retorna o [MongoDB\Driver\Server](class.mongodb-driver-server.md) ao qual esta sessão
está fixada ou **`null`** se a sessão não estiver fixada em nenhum servidor.

### Erros/Exceções

- Lança uma exceção [MongoDB\Driver\Exception\InvalidArgumentException](class.mongodb-driver-exception-invalidargumentexception.md) em caso de erro ao analisar argumentos.

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
