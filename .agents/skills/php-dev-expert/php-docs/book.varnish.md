# Varnish

> **Fonte / Source:** https://www.php.net/manual/pt_BR/book.varnish.php

---

# Varnish

# Introdução

O Varnish Cache é um acelerador de aplicações web de código aberto e de última geração.
A extensão possibilita a interação com uma instância do Varnish em execução
por meio de um soquete TCP ou memória compartilhada.

- [Instalação/Configuração](varnish.setup.md)
  - [Dependências](varnish.requirements.md)
  - [Instalação](varnish.installation.md)
- [Constantes predefinidas](varnish.constants.md)
- [Examples](varnish.examples.md)
  - [Uso básico de VarnishAdmin](varnish.example.admin.md)
  - [Uso básico de VarnishStat](varnish.example.stat.md)
  - [Uso básico de VarnishLog](varnish.example.log.md)
- [VarnishAdmin](class.varnishadmin.md) — A classe VarnishAdmin
  - [VarnishAdmin::auth](varnishadmin.auth.md) — Autentica em uma instância do Varnish
  - [VarnishAdmin::ban](varnishadmin.ban.md) — Bane URLs usando uma expressão VCL
  - [VarnishAdmin::banUrl](varnishadmin.banurl.md) — Bane uma URL usando uma expressão VCL
  - [VarnishAdmin::clearPanic](varnishadmin.clearpanic.md) — Limpa mensagens de pânico da instância do Varnish
  - [VarnishAdmin::connect](varnishadmin.connect.md) — Conecta-se a uma interface de administração de instância do Varnish
  - [VarnishAdmin::\_\_construct](varnishadmin.construct.md) — Construtor de VarnishAdmin
  - [VarnishAdmin::disconnect](varnishadmin.disconnect.md) — Desconecta de uma interface de administração de instância do Varnish
  - [VarnishAdmin::getPanic](varnishadmin.getpanic.md) — Obtém a última mensagem de pânico em uma instância do Varnish
  - [VarnishAdmin::getParams](varnishadmin.getparams.md) — Busca parâmetros de configuração da instância atual do Varnish
  - [VarnishAdmin::isRunning](varnishadmin.isrunning.md) — Verifica se o processo escravo do Varnish está em execução no momento
  - [VarnishAdmin::setCompat](varnishadmin.setcompat.md) — Define o parâmetro de configuração de compatibilidade de classe
  - [VarnishAdmin::setHost](varnishadmin.sethost.md) — Define o parâmetro de configuração do host da classe
  - [VarnishAdmin::setIdent](varnishadmin.setident.md) — Define o parâmetro de configuração da identificação de conexão da classe
  - [VarnishAdmin::setParam](varnishadmin.setparam.md) — Define os parâmetros de configuração na instância atual do Varnish
  - [VarnishAdmin::setPort](varnishadmin.setport.md) — Define o parâmetro de configuração da porta
  - [VarnishAdmin::setSecret](varnishadmin.setsecret.md) — Define o parâmetro de configuração do segredo
  - [VarnishAdmin::setTimeout](varnishadmin.settimeout.md) — Define o parâmetro de configuração de tempo limite
  - [VarnishAdmin::start](varnishadmin.start.md) — Inicia o processo do trabalhador Varnish
  - [VarnishAdmin::stop](varnishadmin.stop.md) — Inicia o processo do trabalhador Varnish
- [VarnishStat](class.varnishstat.md) — A classe VarnishStat
  - [VarnishStat::\_\_construct](varnishstat.construct.md) — Construtor de VarnishStat
  - [VarnishStat::getSnapshot](varnishstat.getsnapshot.md) — Obtém o instantâneo de estatísticas da instância Varnish atual
- [VarnishLog](class.varnishlog.md) — A classe VarnishLog
  - [VarnishLog::\_\_construct](varnishlog.construct.md) — Construtor de Varnishlog
  - [VarnishLog::getLine](varnishlog.getline.md) — Obtém a próxima linha de registro
  - [VarnishLog::getTagName](varnishlog.gettagname.md) — Obtém a string da etiqueta de registro pelo seu índice

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
