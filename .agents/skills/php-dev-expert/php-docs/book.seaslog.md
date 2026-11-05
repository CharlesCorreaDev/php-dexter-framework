# Seaslog

> **Fonte / Source:** https://www.php.net/manual/pt_BR/book.seaslog.php

---

# Seaslog

# Introdução

O Seaslog é uma extensão de registro eficaz, rápida e estável para PHP.

O registro geralmente é o registro operacional do sistema,
do software e da aplicação.
Através da análise do registro, os usuários podem compreender a operação do sistema,
do software e da situação da aplicação.
Se o registro da aplicação for rico o suficiente,
ele também poderá analisar o comportamento operacional do usuário anterior, o tipo,
a distribuição regional e outras informações adicionais.
O registro da aplicação também aponta para vários níveis simultaneamente.
Pode-se obter facilmente a análise do status de saúde da aplicação,
encontrar problemas em tempo hábil e posicionamento rápido, e resolvê-los, remediando a perda.

A função error\_log, interna do PHP, é poderosa e tem excelente desempenho,
mas devido a vários defeitos (error\_log não possui nível de erro, não possui formato fixo, registro independentemente do módulo,
e se mistura com o registro do sistema), reduz bastante a flexibilidade e não atende aos requisitos da aplicação.

A boa notícia é que há uma série de bibliotecas de classes de registros de terceiros estabelecidas
para compensar os defeitos, como log4php, plog, monolog (é claro,
há muitas aplicações no desenvolvimento de projetos da classe de registros).

Portanto, há muitas bibliotecas que atendem aos seguintes requisitos:

- Módulos, classificação
- Configuração simples (de preferência sem configuração)
- Formato de registro claro e de fácil compreensão
- Aplicação simples com bom desempenho

Seaslog atende a essas demandas.

O que é fornecido atualmente:

- No projeto PHP, registra a especificação do registro rapidamente.
- Configura o diretório e o módulo de registro padrão
- Especifica o diretório de registro e captura a configuração atual
- Análise preliminar da estrutura de alerta antecipado
- Buffer de registro eficiente e depuração conveniente do buffer
- Segue a especificação da interface de registro PSR-3
- Registra automaticamente informações de erro
- Registra automaticamente informações anormais
- Suporte à conexão da porta TCP, envia com RFC5424
- Suporte à conexão da porta UDP, envia com RFC5424
- Suporte a solicitações diferenciadas por RequestId
- Suporte à personalização do modelo de registro

Leia mais sobre [» SeasLog](https://seasx.github.io/SeasLog/) no Github.

- [Instalação/Configuração](seaslog.setup.md)
  - [Dependências](seaslog.requirements.md)
  - [Instalação](seaslog.installation.md)
  - [Configurações de Execução](seaslog.configuration.md)
  - [Tipos de Recurso](seaslog.resources.md)
- [Constantes predefinidas](seaslog.constants.md)
- [Examples](seaslog.examples.md)
- [Funções de Seaslog](ref.seaslog.md)
  - [seaslog\_get\_author](function.seaslog-get-author.md) — Obtém o autor do SeasLog.
  - [seaslog\_get\_version](function.seaslog-get-version.md) — Obtém a versão do SeasLog.
- [SeasLog](class.seaslog.md) — A classe SeasLog
  - [SeasLog::alert](seaslog.alert.md) — Registra informação de alerta
  - [SeasLog::analyzerCount](seaslog.analyzercount.md) — Obtém a contagem de registros por nível, caminho e palavra-chave
  - [SeasLog::analyzerDetail](seaslog.analyzerdetail.md) — Obtém detalhe de registro por nível, caminho, palavra-chave, início, limite e ordem
  - [SeasLog::closeLoggerStream](seaslog.closeloggerstream.md) — Libera manualmente o fluxo do registrador
  - [SeasLog::\_\_construct](seaslog.construct.md) — Constrói objeto SeasLog
  - [SeasLog::critical](seaslog.critical.md) — Registra informação crítica
  - [SeasLog::debug](seaslog.debug.md) — Registra informação de depuração
  - [SeasLog::\_\_destruct](seaslog.destruct.md) — Destrói o objeto SeasLog
  - [SeasLog::emergency](seaslog.emergency.md) — Registra informação de emergência
  - [SeasLog::error](seaslog.error.md) — Registra informação de erro
  - [SeasLog::flushBuffer](seaslog.flushbuffer.md) — Limpa o buffer de registros, despeja no arquivo ou envia para API remota com tcp/udp
  - [SeasLog::getBasePath](seaslog.getbasepath.md) — Obtém o caminho base do SeasLog
  - [SeasLog::getBuffer](seaslog.getbuffer.md) — Obter o buffer de registros na memória como um array
  - [SeasLog::getBufferEnabled](seaslog.getbufferenabled.md) — Informa se o buffer está habilitado
  - [SeasLog::getDatetimeFormat](seaslog.getdatetimeformat.md) — Obtém o formato de data/horário do SeasLog
  - [SeasLog::getLastLogger](seaslog.getlastlogger.md) — Obtém o último caminho do registrador SeasLog
  - [SeasLog::getRequestID](seaslog.getrequestid.md) — Obtém o ID da requisição do SeasLog
  - [SeasLog::getRequestVariable](seaslog.getrequestvariable.md) — Obtém a variável requisitada do SeasLog
  - [SeasLog::info](seaslog.info.md) — Registra informação geral
  - [SeasLog::log](seaslog.log.md) — Função comum para registro
  - [SeasLog::notice](seaslog.notice.md) — Registra informação de nota
  - [SeasLog::setBasePath](seaslog.setbasepath.md) — Define o caminho base do SeasLog
  - [SeasLog::setDatetimeFormat](seaslog.setdatetimeformat.md) — Define o formato de data/horário do SeasLog
  - [SeasLog::setLogger](seaslog.setlogger.md) — Define o nome do registrador SeasLog
  - [SeasLog::setRequestID](seaslog.setrequestid.md) — Define o ID exlusivo de requisição do SeasLog
  - [SeasLog::setRequestVariable](seaslog.setrequestvariable.md) — Define manualmente uma variável de requisição SeasLog
  - [SeasLog::warning](seaslog.warning.md) — Registra informação de alerta

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
