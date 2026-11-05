# Escolhendo uma biblioteca

> **Fonte / Source:** https://www.php.net/manual/pt_BR/mysqlinfo.library.choosing.php

---

# Escolhendo uma biblioteca

As extensões mysqli e PDO\_MySQL são encapsuladores leves de uma
biblioteca cliente em C. As extensões podem tanto usar a biblioteca
[mysqlnd](book.mysqlnd.md) quanto a biblioteca `libmysqlclient`.
Escolher uma biblioteca é uma decisão a ser tomada na compilação.

A biblioteca mysqlnd é parte da distribuição PHP. Ela oferece
recursos como conexões preguiçosas e cache de consultas, que não estão disponíveis
com a libmysqlclient, portanto usar a biblioteca mysqlnd interna é altamente recomendado.
Consulte a [documentação mysqlnd](book.mysqlnd.md) para
detalhes adicionais e uma lista de recursos e funcionalidade que ela oferece.

**Exemplo #1 Comandos de configuração para usar mysqlnd ou libmysqlclient**

```
// Recomendado, compilar com mysqlnd
$ ./configure --with-mysqli=mysqlnd --with-pdo-mysql=mysqlnd

// Alternativamente recomendado, compilar com mysqlnd
$ ./configure --with-mysqli --with-pdo-mysql

// Não recomendado, compila com libmysqlclient
$ ./configure --with-mysqli=/path/to/mysql_config --with-pdo-mysql=/path/to/mysql_config
```

**Comparação de recursos de bibliotecas**

É recomendado usar a biblioteca [mysqlnd](book.mysqlnd.md)
ao invés da biblioteca Cliente-Servidor do MySQL (libmysqlclient). Ambas
são suportadas e estão constantemente sendo melhoradas.

|  | Driver nativo MySQL ([mysqlnd](book.mysqlnd.md)) | Biblioteca cliente-servidor MySQL (`libmysqlclient`) |
| --- | --- | --- |
| Faz parte da distribuição PHP | Sim | Não |
| Versão do PHP em que foi introduzida | 5.3.0 | N/A |
| Licença | Licença PHP 3.01 | Dupla Licença |
| Estado de desenvolvimento | Ativo | Ativo |
| Ciclo de vida | Nenhum final anunciado | Nenhum final anunciado |
| Padrão de compilação (para todas as extensões MySQL) | Sim | Não |
| Suporte a protocolo de compressão | Sim | Sim |
| Suporte a SSL | Sim | Sim |
| Suporte a tubos nomeados | Sim | Sim |
| Consultas sem bloqueio assíncronas | Sim | Não |
| Estatísticas de desempenho | Sim | Não |
| LOAD LOCAL INFILE respeita a [diretiva open\_basedir](ini.core.md#ini.open-basedir) | Sim | Não |
| Usa o sistema de gerenciamento de memória nativo do PHP (ex: segue os limites de memória do PHP) | Sim | Não |
| Retorna coluna numérica como dupla precisão (COM\_QUERY) | Sim | Não |
| Retorna coluna numérica como string (COM\_QUERY) | Sim | Sim |
| API tipo plugin | Sim | Limitada |
| Reconexão automática | Não | Opcional |

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
