# Quickhash

> **Fonte / Source:** https://www.php.net/manual/pt_BR/book.quickhash.php

---

# Quickhash

# Introdução

A extensão quickhash contém um conjunto de classes fortemente tipadas específicas
para lidar com implementações específicas de conjuntos e hashes.

- [Instalação/Configuração](quickhash.setup.md)
  - [Dependências](quickhash.requirements.md)
  - [Instalação](quickhash.installation.md)
- [Examples](quickhash.examples.md)
- [QuickHashIntSet](class.quickhashintset.md) — A classe QuickHashIntSet
  - [QuickHashIntSet::add](quickhashintset.add.md) — Este método adiciona uma nova entrada ao conjunto
  - [QuickHashIntSet::\_\_construct](quickhashintset.construct.md) — Cria um novo objeto QuickHashIntSet
  - [QuickHashIntSet::delete](quickhashintset.delete.md) — Este método exclui uma entrada do conjunto
  - [QuickHashIntSet::exists](quickhashintset.exists.md) — Este método verifica se uma chave faz parte do conjunto
  - [QuickHashIntSet::getSize](quickhashintset.getsize.md) — Retorna o número de elementos no conjunto
  - [QuickHashIntSet::loadFromFile](quickhashintset.loadfromfile.md) — Este método de fábrica cria um conjunto a partir de um arquivo
  - [QuickHashIntSet::loadFromString](quickhashintset.loadfromstring.md) — Este método de fábrica cria um conjunto a partir de uma string
  - [QuickHashIntSet::saveToFile](quickhashintset.savetofile.md) — Este método armazena um conjunto na memória do disco
  - [QuickHashIntSet::saveToString](quickhashintset.savetostring.md) — Este método retorna uma versão serializada do conjunto
- [QuickHashIntHash](class.quickhashinthash.md) — A classe QuickHashIntHash
  - [QuickHashIntHash::add](quickhashinthash.add.md) — Este método adiciona uma nova entrada ao hash
  - [QuickHashIntHash::\_\_construct](quickhashinthash.construct.md) — Cria um novo objeto QuickHashIntHash
  - [QuickHashIntHash::delete](quickhashinthash.delete.md) — Este método exclui uma entrada do hash
  - [QuickHashIntHash::exists](quickhashinthash.exists.md) — Este método verifica se uma chave faz parte do hash
  - [QuickHashIntHash::get](quickhashinthash.get.md) — Este método recupera um valor do hash por sua chave
  - [QuickHashIntHash::getSize](quickhashinthash.getsize.md) — Retorna o número de elementos no hash
  - [QuickHashIntHash::loadFromFile](quickhashinthash.loadfromfile.md) — Este método de fábrica cria um hash de um arquivo
  - [QuickHashIntHash::loadFromString](quickhashinthash.loadfromstring.md) — Este método de fábrica cria um hash a partir de uma string
  - [QuickHashIntHash::saveToFile](quickhashinthash.savetofile.md) — Este método armazena um hash na memória no disco
  - [QuickHashIntHash::saveToString](quickhashinthash.savetostring.md) — Este método retorna uma versão serializada do hash
  - [QuickHashIntHash::set](quickhashinthash.set.md) — Este método atualiza uma entrada no hash com um novo valor, ou
    adiciona um novo se a entrada não existir
  - [QuickHashIntHash::update](quickhashinthash.update.md) — Este método atualiza uma entrada no hash com um novo valor
- [QuickHashStringIntHash](class.quickhashstringinthash.md) — A classe QuickHashStringIntHash
  - [QuickHashStringIntHash::add](quickhashstringinthash.add.md) — Este método adiciona uma nova entrada ao hash
  - [QuickHashStringIntHash::\_\_construct](quickhashstringinthash.construct.md) — Cria um novo objeto QuickHashStringIntHash
  - [QuickHashStringIntHash::delete](quickhashstringinthash.delete.md) — Este método exclui uma entrada do hash
  - [QuickHashStringIntHash::exists](quickhashstringinthash.exists.md) — Este método verifica se uma chave faz parte do hash
  - [QuickHashStringIntHash::get](quickhashstringinthash.get.md) — Este método recupera um valor do hash por sua chave
  - [QuickHashStringIntHash::getSize](quickhashstringinthash.getsize.md) — Retorna o número de elementos no hash
  - [QuickHashStringIntHash::loadFromFile](quickhashstringinthash.loadfromfile.md) — Este método de fábrica cria um hash de um arquivo
  - [QuickHashStringIntHash::loadFromString](quickhashstringinthash.loadfromstring.md) — Este método de fábrica cria um hash a partir de uma string
  - [QuickHashStringIntHash::saveToFile](quickhashstringinthash.savetofile.md) — Este método armazena um hash na memória no disco
  - [QuickHashStringIntHash::saveToString](quickhashstringinthash.savetostring.md) — Este método retorna uma versão serializada do hash
  - [QuickHashStringIntHash::set](quickhashstringinthash.set.md) — Este método atualiza uma entrada no hash com um novo valor, ou
    adiciona um novo se a entrada não existir
  - [QuickHashStringIntHash::update](quickhashstringinthash.update.md) — Este método atualiza uma entrada no hash com um novo valor
- [QuickHashIntStringHash](class.quickhashintstringhash.md) — A classe QuickHashIntStringHash
  - [QuickHashIntStringHash::add](quickhashintstringhash.add.md) — Este método adiciona uma nova entrada ao hash
  - [QuickHashIntStringHash::\_\_construct](quickhashintstringhash.construct.md) — Cria um novo objeto QuickHashIntStringHash
  - [QuickHashIntStringHash::delete](quickhashintstringhash.delete.md) — Este método exclui uma entrada do hash
  - [QuickHashIntStringHash::exists](quickhashintstringhash.exists.md) — Este método verifica se uma chave faz parte do hash
  - [QuickHashIntStringHash::get](quickhashintstringhash.get.md) — Este método recupera um valor do hash por sua chave
  - [QuickHashIntStringHash::getSize](quickhashintstringhash.getsize.md) — Retorna o número de elementos no hash
  - [QuickHashIntStringHash::loadFromFile](quickhashintstringhash.loadfromfile.md) — Este método de fábrica cria um hash de um arquivo
  - [QuickHashIntStringHash::loadFromString](quickhashintstringhash.loadfromstring.md) — Este método de fábrica cria um hash a partir de uma string
  - [QuickHashIntStringHash::saveToFile](quickhashintstringhash.savetofile.md) — Este método armazena um hash na memória no disco
  - [QuickHashIntStringHash::saveToString](quickhashintstringhash.savetostring.md) — Este método retorna uma versão serializada do hash
  - [QuickHashIntStringHash::set](quickhashintstringhash.set.md) — Este método atualiza uma entrada no hash com um novo valor, ou
    adiciona um novo se a entrada não existir
  - [QuickHashIntStringHash::update](quickhashintstringhash.update.md) — Este método atualiza uma entrada no hash com um novo valor

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
