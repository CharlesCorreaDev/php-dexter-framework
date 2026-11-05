# Yac

> **Fonte / Source:** https://www.php.net/manual/pt_BR/book.yac.php

---

# Yac

# Introdução

Yac (Yet Another cache), é um cache de dados do usuário de memória compartilhada e sem bloqueio, que pode ser usado para substituir o APC ou o memcache local.

- [Instalação/Configuração](yac.setup.md)
  - [Dependências](yac.requirements.md)
  - [Instalação](yac.installation.md)
  - [Configurações de Execução](yac.configuration.md)
  - [Tipos de Recurso](yac.resources.md)
- [Constantes predefinidas](yac.constants.md)
- [Yac](class.yac.md) — A classe Yac
  - [Yac::add](yac.add.md) — Armazena em cache
  - [Yac::\_\_construct](yac.construct.md) — Construtor
  - [Yac::delete](yac.delete.md) — Exclui itens do cache
  - [Yac::dump](yac.dump.md) — Despeja o cache
  - [Yac::flush](yac.flush.md) — Descarrega o cache
  - [Yac::get](yac.get.md) — Obtém valores do cache
  - [Yac::\_\_get](yac.getter.md) — Obtém valores do cache
  - [Yac::info](yac.info.md) — Obtém o status do cache
  - [Yac::set](yac.set.md) — Armazena no cache
  - [Yac::\_\_set](yac.setter.md) — Armazena no cache

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
