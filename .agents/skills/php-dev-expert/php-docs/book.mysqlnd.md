# Driver Nativo MySQL

> **Fonte / Source:** https://www.php.net/manual/pt_BR/book.mysqlnd.php

---

# Driver Nativo MySQL

# Introdução

O Driver Nativo MySQL é um substituto para a biblioteca cliente MySQL
(libmysqlclient). Driver Nativo MySQL faz parte das fontes oficiais do PHP a
partir do PHP 5.3.0.

As extensões de banco de dados MySQL,
`mysqli` e PDO MYSQL se comunicam com o servidor
MySQL. No passado, isso era feito pela extensão usando os serviços
fornecidos pela Biblioteca Cliente MySQL. As extensões foram compiladas
na Biblioteca Cliente MySQL para usar seu protocolo
cliente-servidor.

Com o Driver Nativo MySQL agora existe uma alternativa, pois as extensões
do banco de dados MySQL podem ser compiladas para usar o Driver Nativo MySQL em vez
da Biblioteca Cliente MySQL.

O Driver Nativo MySQL é escrito em C como uma extensão do PHP.

- [Visão Geral](mysqlnd.overview.md)
- [Instalação](mysqlnd.install.md)
- [Configurações de Execução](mysqlnd.config.md)
- [Incompatibilidades](mysqlnd.incompatibilities.md)
- [Conexões Persistentes](mysqlnd.persist.md)
- [Estatísticas](mysqlnd.stats.md)
- [Notas](mysqlnd.notes.md)
- [Gerenciamento de Memória](mysqlnd.memory.md)
- [API do plugin do Driver Nativo MySQL](mysqlnd.plugin.md)
  - [Uma comparação de plugins mysqlnd com Proxy MySQL](mysqlnd.plugin.mysql-proxy.md)
  - [Obtendo a API do plugin mysqlnd](mysqlnd.plugin.obtaining.md)
  - [Arquitetura do Plugin do Driver Nativo MySQL](mysqlnd.plugin.architecture.md)
  - [A API do plugin mysqlnd](mysqlnd.plugin.api.md)
  - [Começando a construir um plugin mysqlnd](mysqlnd.plugin.developing.md)

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
