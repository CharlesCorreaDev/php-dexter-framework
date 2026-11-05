# Memcache

> **Fonte / Source:** https://www.php.net/manual/pt_BR/book.memcache.php

---

# Memcache

# Introdução

O módulo Memcache fornece uma interface procedural e orientada a objetos conveniente
para o memcached, um daemon de cache altamente eficaz, projetado
especialmente para reduzir a carga do banco de dados em aplicações web dinâmicas.

O módulo Memcache também fornece um manipulador de [sessão](ref.session.md) (`memcache`).

Mais informações sobre o memcached podem ser encontradas em [» https://www.memcached.org/](https://www.memcached.org/).

- [Instalação/Configuração](memcache.setup.md)
  - [Dependências](memcache.requirements.md)
  - [Instalação](memcache.installation.md)
  - [Configurações de Execução](memcache.ini.md)
  - [Tipos de Recurso](memcache.resources.md)
- [Constantes predefinidas](memcache.constants.md)
- [Examples](memcache.examples.md)
  - [Uso básico](memcache.examples-overview.md)
- [Memcache](class.memcache.md) — A classe Memcache
  - [Memcache::add](memcache.add.md) — Adiciona um item ao servidor
  - [Memcache::addServer](memcache.addserver.md) — Adiciona um servidor memcached ao pool de conexão
  - [Memcache::close](memcache.close.md) — Fecha a conexão do servidor memcached
  - [Memcache::connect](memcache.connect.md) — Abre a conexão do servidor memcached
  - [Memcache::decrement](memcache.decrement.md) — Decrementa o valor do item
  - [Memcache::delete](memcache.delete.md) — Exclui item do servidor
  - [Memcache::flush](memcache.flush.md) — Limpa todos os itens existentes no servidor
  - [Memcache::get](memcache.get.md) — Recupera item do servidor
  - [Memcache::getExtendedStats](memcache.getextendedstats.md) — Obtém estatísticas de todos os servidores no pool
  - [Memcache::getServerStatus](memcache.getserverstatus.md) — Retorna o status do servidor
  - [Memcache::getStats](memcache.getstats.md) — Obtém estatísticas do servidor
  - [Memcache::getVersion](memcache.getversion.md) — Retorna a versão do servidor
  - [Memcache::increment](memcache.increment.md) — Incrementa o valor do item
  - [Memcache::pconnect](memcache.pconnect.md) — Abre conexão persistente do servidor memcached
  - [Memcache::replace](memcache.replace.md) — Substitui o valor do item existente
  - [Memcache::set](memcache.set.md) — Armazena dados no servidor
  - [Memcache::setCompressThreshold](memcache.setcompressthreshold.md) — Habilita a compactação automática de valores grandes
  - [Memcache::setServerParams](memcache.setserverparams.md) — Altera os parâmetros e o status do servidor em tempo de execução
- [Funções de Memcache](ref.memcache.md)
  - [memcache\_debug](function.memcache-debug.md) — Liga/desliga a saída de depuração

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
