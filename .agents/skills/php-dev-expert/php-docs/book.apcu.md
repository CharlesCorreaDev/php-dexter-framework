# Cache de Usuário APC

> **Fonte / Source:** https://www.php.net/manual/pt_BR/book.apcu.php

---

# Cache de Usuário APC

# Introdução

APCu é um armazenamento em memória de chave-valor para o PHP.
Chaves são do tipo [string](language.types.string.md) e valores podem ser quaisquer variáveis PHP.
APCu suporta somente cache de variáveis no nível do usuário.

O cache APCu é feito por processo no Windows, portando ao usar um SAPI baseado em processo
(e não baseado em thread), ele não será compartilhado entre os diferentes processos.

APCu é o APC com o cache opcode removido.

O primeiro código APCu tinha a versão 4.0.0 e foi derivado do ramo master do APC naquele momento.
O suporte ao PHP está disponível a partir do APCu 5.0.0. O suporte ao PHP 8 está disponível a partir do APCu 5.1.19.

- [Instalação/Configuração](apcu.setup.md)
  - [Instalação](apcu.installation.md)
  - [Configurações de Execução](apcu.configuration.md)
- [Constantes predefinidas](apcu.constants.md)
- [APCu Funções](ref.apcu.md)
  - [apcu\_add](function.apcu-add.md) — Faz cache de uma nova variável no armazenamento de dados
  - [apcu\_cache\_info](function.apcu-cache-info.md) — Recupera informação em cache a partir do armazenamento de dados do APCu
  - [apcu\_cas](function.apcu-cas.md) — Atualiza um valor antigo com um novo
  - [apcu\_clear\_cache](function.apcu-clear-cache.md) — Limpa o cache APCu
  - [apcu\_dec](function.apcu-dec.md) — Decrementa um número armazenado
  - [apcu\_delete](function.apcu-delete.md) — Remove uma variável armazenada do cache
  - [apcu\_enabled](function.apcu-enabled.md) — Informa se o APCu está disponível no ambiente atual
  - [apcu\_entry](function.apcu-entry.md) — Busca ou gera atomicamente uma entrada de cache
  - [apcu\_exists](function.apcu-exists.md) — Verifica se uma entrada existe
  - [apcu\_fetch](function.apcu-fetch.md) — Busca uma variável armazenada no cache
  - [apcu\_inc](function.apcu-inc.md) — Incrementa um número armazenado
  - [apcu\_key\_info](function.apcu-key-info.md) — Obtém informação detalhada sobre uma chave em cache
  - [apcu\_sma\_info](function.apcu-sma-info.md) — Obtém informação de Alocação de Memória Compartilhada (SMA) do APCu
  - [apcu\_store](function.apcu-store.md) — Armazena uma variável em cache
- [APCUIterator](class.apcuiterator.md) — A classe APCUIterator
  - [APCUIterator::\_\_construct](apcuiterator.construct.md) — Constrói um objeto iterador APCUIterator
  - [APCUIterator::current](apcuiterator.current.md) — Obtém o item atual
  - [APCUIterator::getTotalCount](apcuiterator.gettotalcount.md) — Obtém a contagem total
  - [APCUIterator::getTotalHits](apcuiterator.gettotalhits.md) — Obtém o total de entradas de cache
  - [APCUIterator::getTotalSize](apcuiterator.gettotalsize.md) — Obtém o tamanho total do cache
  - [APCUIterator::key](apcuiterator.key.md) — Obtém a chave do iterador
  - [APCUIterator::next](apcuiterator.next.md) — Move o ponteiro para o próximo item
  - [APCUIterator::rewind](apcuiterator.rewind.md) — Rebobina o iterador
  - [APCUIterator::valid](apcuiterator.valid.md) — Verifica se a posição atual é válida

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
