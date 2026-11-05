# Características

> **Fonte / Source:** https://www.php.net/manual/pt_BR/features.php

---

# Características

- [Autenticação HTTP com PHP](features.http-auth.md)
- [Cookies](features.cookies.md)
- [Sessões](features.sessions.md)
- [Gerenciamento de envio de arquivos](features.file-upload.md)
  - [Envio de arquivos com o método POST](features.file-upload.post-method.md)
  - [Explicando mensagens de erro](features.file-upload.errors.md)
  - [Problemas Comuns](features.file-upload.common-pitfalls.md)
  - [Enviando múltiplos arquivos](features.file-upload.multiple.md)
  - [Suporte ao método PUT](features.file-upload.put-method.md)
  - [Veja também](features.file-upload.errors.seealso.md)
- [Usando arquivos remotos](features.remote-files.md)
- [Tratamento de Conexões](features.connection-handling.md)
- [Conexões Persistentes com o Banco de Dados](features.persistent-connections.md)
- [Uso da linha de Comando](features.commandline.md) — Usando PHP a partir da linha de comando
  - [Diferenças em relação a outros SAPIs](features.commandline.differences.md)
  - [Opções](features.commandline.options.md) — Opções de linha de comando
  - [Uso](features.commandline.usage.md) — Executando arquivos PHP
  - [Fluxos de E/S](features.commandline.io-streams.md) — Fluxos de entrada/saída
  - [Shell interativo](features.commandline.interactive.md)
  - [Servidor web embutido](features.commandline.webserver.md)
  - [Configurações INI](features.commandline.ini.md)
- [Coletor de Lixo](features.gc.md)
  - [Básico sobre Contagem de Referência](features.gc.refcounting-basics.md)
  - [Ciclos de Coleta](features.gc.collecting-cycles.md)
  - [Considerações de Desempenho](features.gc.performance-considerations.md)
- [Instrumentação dinâmica DTrace](features.dtrace.md)
  - [Introdução ao PHP e DTrace](features.dtrace.introduction.md)
  - [Usando PHP e DTrace](features.dtrace.dtrace.md)
  - [Usando SystemTap com Sondas Estáticas DTrace](features.dtrace.systemtap.md)
  - [Usando bpftrace com Sondas Estáticas DTrace do PHP](features.dtrace.bpftrace.md)

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
