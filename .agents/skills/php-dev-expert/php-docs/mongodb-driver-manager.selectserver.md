# Seleciona um servidor que corresponde a uma preferência de leitura

> **Fonte / Source:** https://www.php.net/manual/pt_BR/mongodb-driver-manager.selectserver.php

---

# MongoDB\Driver\Manager::selectServer

(mongodb >=1.0.0)

MongoDB\Driver\Manager::selectServer — Seleciona um servidor que corresponde a uma preferência de leitura

### Descrição

final public function **MongoDB\Driver\Manager::selectServer**([?](language.types.null.md)[MongoDB\Driver\ReadPreference](class.mongodb-driver-readpreference.md) `$readPreference` = **`null`**): [MongoDB\Driver\Server](class.mongodb-driver-server.md)

Seleciona um [MongoDB\Driver\Server](class.mongodb-driver-server.md) correspondente
à preferência de leitura informada em `readPreference`. Se
`readPreference` for **`null`** ou omitido, o servidor
primário será selecionado por padrão. Isto pode ser usado para pré-selecionar um servidor
para realizar a verificação de versão antes de executar uma operação.

> **Nota**:
>
> Ao contrário do [MongoDB\Driver\Manager::getServers()](mongodb-driver-manager.getservers.md), este método
> inicializará as conexões do banco de dados e realizará a descoberta do servidor, se
> necessário. Consulte a
> [» Especificação de seleção de servidor](https://github.com/mongodb/specifications/blob/master/source/server-selection/server-selection.md#single-threaded-server-selection)
> para obter informações adicionais.

### Parâmetros

`readPreference` ([MongoDB\Driver\ReadPreference](class.mongodb-driver-readpreference.md))
:   A preferência de leitura a ser usada para selecionar um servidor.
    Se **`null`** ou omitido, o servidor primário será selecionado por padrão.

### Valor Retornado

Retorna um [MongoDB\Driver\Server](class.mongodb-driver-server.md) que corresponde à
preferência de leitura.

### Erros/Exceções

- Lança uma exceção [MongoDB\Driver\Exception\InvalidArgumentException](class.mongodb-driver-exception-invalidargumentexception.md) em caso de erro ao analisar argumentos.
- Lança uma exceção [MongoDB\Driver\Exception\ConnectionException](class.mongodb-driver-exception-connectionexception.md) se a conexão com o servidor falhar (por outros motivos além da autenticação).
- Lança uma exceção [MongoDB\Driver\Exception\AuthenticationException](class.mongodb-driver-exception-authenticationexception.md) se a autenticação for necessária e falhar.
- Lança [MongoDB\Driver\Exception\RuntimeException](class.mongodb-driver-exception-runtimeexception.md) se um servidor que corresponda à preferência de leitura não puder ser encontrado.

### Registro de Alterações

| Versão | Descrição |
| --- | --- |
| PECL mongodb 1.11.0 | O `readPreference` agora é opcional. Se **`null`** ou omitido, o servidor primário será selecionado por padrão. |

### Veja também

- [MongoDB\Driver\Server](class.mongodb-driver-server.md)
- [MongoDB\Driver\Manager::getServers()](mongodb-driver-manager.getservers.md) - Retorna os servidores aos quais este gerenciador está conectado
- [» Especificação de seleção de servidor](https://github.com/mongodb/specifications/blob/master/source/server-selection/server-selection.md)

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
