# Cache do Windows para PHP

> **Fonte / Source:** https://www.php.net/manual/pt_BR/book.wincache.php

---

# Cache do Windows para PHP

# Introdução

A Extensão de Cache do Windows para PHP é um acelerador PHP usado para aumentar a velocidade de
aplicativos PHP em execução no Windows e no Windows Server. Uma vez que a Extensão de Cache do Windows para
PHP é habilitada e carregada pelo mecanismo PHP, os aplicativos PHP podem aproveitar a
funcionalidade sem nenhuma modificação no código.

A Extensão de Cache do Windows inclui 5 tipos diferentes de cache. A seguir, descrevemos
a finalidade de cada tipo de cache e os benefícios que ele oferece.

- *Cache de Opcode PHP* - PHP é um mecanismo de processamento de scripts que lê
  um fluxo de entrada de dados que contém texto e/ou instruções PHP e produz outro
  fluxo de dados, mais comumente no formato HTML. Isso significa que, em um servidor web,
  o mecanismo PHP lê, analisa, compila e executa um script PHP cada vez que ele é solicitado
  por um cliente web. As operações de leitura, análise e compilação colocam carga adicional na
  CPU e no sistema de arquivos do servidor web e, portanto, afetam o desempenho geral de uma aplicação web PHP.
  O cache de bytecode (opcode) do PHP é usado para armazenar o bytecode do script compilado na memória compartilhada,
  para que ele possa ser reutilizado pelo mecanismo PHP em execuções subsequentes do mesmo script.

  O suporte para cache de opcode foi removido no `Wincache 2.0.0`. Todos os usuários que
  desejam ter um opcache devem usar a extensão [OPcache](book.opcache.md)
  incluída no PHP.
- *Cache de Arquivos* - Mesmo com o cache de opcode PHP habilitado, o mecanismo PHP
  precisa acessar os arquivos de script em um sistema de arquivos. Quando scripts PHP são armazenados em um
  compartilhamento de arquivos UNC remoto, as operações de arquivo apresentam uma sobrecarga significativa de desempenho.
  A Extensão de Cache do Windows para PHP inclui um cache de arquivos que é usado para armazenar o conteúdo
  dos arquivos de script PHP na memória compartilhada, o que reduz a quantidade de operações do sistema de arquivos
  realizadas pelo mecanismo PHP.
- *Cache de Resolução de Caminho de Arquivo* - Scripts PHP frequentemente incluem ou operam
  com arquivos usando caminhos de arquivo relativos. Cada caminho de arquivo precisa ser normalizado para
  um caminho de arquivo absoluto pelo mecanismo PHP. Quando uma aplicação PHP usa muitos arquivos PHP e
  os acessa por caminhos relativos, a operação de resolução dos caminhos pode impactar negativamente
  o desempenho da aplicação. A Extensão de Cache do Windows para PHP
  fornece um cache de Resolução de Caminho de Arquivo, que é usado para armazenar os mapeamentos entre caminhos de arquivo
  relativos e absolutos, reduzindo assim o número de resoluções de caminho que o
  mecanismo PHP precisa executar.
- *Cache do Usuário (disponível desde a versão 1.1.0)* - Scripts PHP podem aproveitar
  o cache de memória compartilhada usando as APIs de cache do usuário. Objetos e variáveis ​​PHP podem ser armazenados no
  cache do usuário e reutilizados em requisições subsequentes. Isso pode ser usado para melhorar o desempenho de scripts PHP
  e para compartilhar os dados entre vários processos PHP.
- *Manipulador de Sessão (disponível desde a versão 1.1.0)* - O manipulador de sessão do WinCache pode ser usado para
  armazenar os dados da sessão PHP no cache de memória compartilhada. Isso evita operações do sistema de arquivos para leitura
  e gravação de dados da sessão, o que melhora o desempenho quando uma grande quantidade de dados é armazenada na sessão PHP.

- [Instalação/Configuração](wincache.setup.md)
  - [Dependências](wincache.requirements.md)
  - [Instalação](wincache.installation.md)
  - [Configurações de Execução](wincache.configuration.md)
  - [Script de estatísticas do WinCache](wincache.stats.md)
  - [Manipulador de Sessão WinCache](wincache.sessionhandler.md)
  - [Redirecionamentos de funções do WinCache](wincache.reroutes.md)
- [Funções de WinCache](ref.wincache.md)
  - [wincache\_fcache\_fileinfo](function.wincache-fcache-fileinfo.md) — Recupera informações sobre arquivos armazenados em cache no cache de arquivos
  - [wincache\_fcache\_meminfo](function.wincache-fcache-meminfo.md) — Recupera informações sobre o uso da memória cache do arquivo
  - [wincache\_lock](function.wincache-lock.md) — Adquire um bloqueio exclusivo em uma determinada chave
  - [wincache\_ocache\_fileinfo](function.wincache-ocache-fileinfo.md) — Recupera informações sobre arquivos armazenados em cache no cache do opcode
  - [wincache\_ocache\_meminfo](function.wincache-ocache-meminfo.md) — Recupera informações sobre o uso da memória cache do opcode
  - [wincache\_refresh\_if\_changed](function.wincache-refresh-if-changed.md) — Atualiza as entradas de cache para os arquivos armazenados em cache
  - [wincache\_rplist\_fileinfo](function.wincache-rplist-fileinfo.md) — Recupera informações sobre o cache do caminho do arquivo de resolução
  - [wincache\_rplist\_meminfo](function.wincache-rplist-meminfo.md) — Recupera informações sobre o uso de memória pelo cache do caminho do arquivo de resolução
  - [wincache\_scache\_info](function.wincache-scache-info.md) — Recupera informações sobre arquivos armazenados em cache no cache de sessão
  - [wincache\_scache\_meminfo](function.wincache-scache-meminfo.md) — Recupera informações sobre o uso da memória cache da sessão
  - [wincache\_ucache\_add](function.wincache-ucache-add.md) — Adiciona uma variável no cache do usuário somente se a variável ainda não existir no cache
  - [wincache\_ucache\_cas](function.wincache-ucache-cas.md) — Compara a variável com o valor antigo e atribui um novo valor a ela
  - [wincache\_ucache\_clear](function.wincache-ucache-clear.md) — Exclui todo o conteúdo do cache do usuário
  - [wincache\_ucache\_dec](function.wincache-ucache-dec.md) — Decrementa o valor associado à chave
  - [wincache\_ucache\_delete](function.wincache-ucache-delete.md) — Exclui variáveis ​​do cache do usuário
  - [wincache\_ucache\_exists](function.wincache-ucache-exists.md) — Verifica se uma variável existe no cache do usuário
  - [wincache\_ucache\_get](function.wincache-ucache-get.md) — Obtém uma variável armazenada no cache do usuário
  - [wincache\_ucache\_inc](function.wincache-ucache-inc.md) — Incrementa o valor associado à chave
  - [wincache\_ucache\_info](function.wincache-ucache-info.md) — Recupera informações sobre dados armazenados no cache do usuário
  - [wincache\_ucache\_meminfo](function.wincache-ucache-meminfo.md) — Recupera informações sobre o uso da memória cache do usuário
  - [wincache\_ucache\_set](function.wincache-ucache-set.md) — Adiciona uma variável no cache do usuário e substitui uma variável se ela já existir no cache
  - [wincache\_unlock](function.wincache-unlock.md) — Libera um bloqueio exclusivo em uma determinada chave
- [Construindo para Windows](wincache.win32build.md)
  - [Pré-requisitos](wincache.win32build.prereq.md)
  - [Compilando e construindo](wincache.win32build.building.md)
  - [Verificando a compilação](wincache.win32build.verify.md)

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
