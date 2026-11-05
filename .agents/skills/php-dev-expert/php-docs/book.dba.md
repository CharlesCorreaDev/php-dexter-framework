# Camada de abstração de banco de dados (estilo dbm)

> **Fonte / Source:** https://www.php.net/manual/pt_BR/book.dba.php

---

# Camada de abstração de banco de dados (estilo dbm)

# Introdução

Essas funções constroem a base para acessar bancos de dados
estilo Berkeley DB.

Esta é uma camada de abstração geral para vários bancos de dados baseados em arquivos.
Como tal, a funcionalidade é limitada a um subconjunto comum de recursos
suportados por bancos de dados modernos, como
[» Oracle Berkeley DB](https://www.oracle.com/database/berkeley-db/db.html).

- [Instalação/Configuração](dba.setup.md)
  - [Dependências](dba.requirements.md)
  - [Instalação](dba.installation.md)
  - [Configurações de Execução](dba.configuration.md)
  - [Tipos de Recurso](dba.resources.md)
- [Constantes predefinidas](dba.constants.md)
- [Examples](dba.examples.md)
  - [Uso básico](dba.example.md)
- [Dba\Connection](class.dba-connection.md) — A classe Dba\Connection
- [Funções de DBA](ref.dba.md)
  - [dba\_close](function.dba-close.md) — Fecha um banco de dados DBA
  - [dba\_delete](function.dba-delete.md) — Remove uma entrada DBA especificada por chave
  - [dba\_exists](function.dba-exists.md) — Verifica existência de uma chave
  - [dba\_fetch](function.dba-fetch.md) — Busca dados especificados por chave
  - [dba\_firstkey](function.dba-firstkey.md) — Busca a primeira chave
  - [dba\_handlers](function.dba-handlers.md) — Lista todos os manipuladores disponíveis
  - [dba\_insert](function.dba-insert.md) — Insere entrada
  - [dba\_key\_split](function.dba-key-split.md) — Divide uma chave em representação string para uma representação array
  - [dba\_list](function.dba-list.md) — Lista todos os arquivos de banco de dados abertos
  - [dba\_nextkey](function.dba-nextkey.md) — Busca a próxima chave
  - [dba\_open](function.dba-open.md) — Abre um banco de dados
  - [dba\_optimize](function.dba-optimize.md) — Otimiza o banco de dados
  - [dba\_popen](function.dba-popen.md) — Abre o banco de dados de forma persistente
  - [dba\_replace](function.dba-replace.md) — Substitui ou insere uma entrada
  - [dba\_sync](function.dba-sync.md) — Sincroniza o banco de dados

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
