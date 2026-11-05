# Novos recursos introduzidos no IIS 10.0 | Microsoft Learn

> **Fonte / Source:** https://learn.microsoft.com/pt-br/iis/get-started/whats-new-in-iis-10/new-features-introduced-in-iis-10

---

Sumário 

Sair do modo Editor

Pergunte e aprenda

Pergunte e aprenda

Modo de leitura

Sumário
[Ler em inglês](#)

Adicionar

Adicionar a Planos

---

Copiar Markdown

Imprimir

---

Observação

O acesso a essa página exige autorização. Você pode tentar [entrar](#) ou alterar diretórios.

O acesso a essa página exige autorização. Você pode tentar alterar os diretórios.

# Novos recursos introduzidos no IIS 10.0

Comentários

por [Sourabh Shirhatti](https://github.com/shirhatti)

> O IIS 10.0 é a versão mais recente dos Serviços de Informações da Internet (IIS) que foram fornecidos com o Windows 10 e o Windows Server 2016. Este artigo descreve a nova funcionalidade do IIS no Windows 10 e no Windows Server 2016 e fornece links para recursos para saber mais sobre esses recursos.

## HTTP/2

O IIS 10.0 adiciona suporte para o protocolo HTTP/2, que permite vários aprimoramentos em relação ao HTTP 1.1 e resulta em uma reutilização eficiente de conexões e uma redução na latência. O suporte a HTTP/2 foi adicionado ao Windows Server 2016 e ao Windows 10 como parte do driver de dispositivo no modo kernel, HTTP.sys, e todos os seus sites existentes do IIS 10.0 podem se beneficiar disso. (As versões mais recentes da maioria dos navegadores modernos já dão suporte a HTTP/2 por TLS, portanto, talvez você já esteja usando HTTP/2.)

Saiba mais: [HTTP/2 no IIS](get-started__whats-new-in-iis-10__http2-on-iis.md)

## IIS no Nano Server

O Nano Server é uma nova opção de instalação sem interface gráfica, somente para 64 bits, para Windows 10 e Windows Server 2016, que instala "apenas o suficiente do sistema operacional", resultando em um volume menor. O Nano Server fornece maior densidade, maior tempo de atividade e uma superfície de ataque menor, tornando-o adequado para a execução de cargas de trabalho da Web. Atualmente, você pode executar [cargas de trabalho ASP.NET Core](get-started__whats-new-in-iis-10__running-aspnet-core-with-iis-on-nano-server.md) e [Apache Tomcat](https://blogs.iis.net/jeonghwan/running-tomcat-with-iis-on-nano-server) no IIS no Nano Server, além de usá-lo como um proxy reverso para qualquer ouvinte HTTP por meio do [módulo HttpPlatformHandler](https://www.iis.net/downloads/microsoft/httpplatformhandler).

Saiba mais: [Apresentando o IIS no Nano Server](get-started__whats-new-in-iis-10__introducing-iis-on-nano-server.md)

## IIS em contêineres

O Windows Server 2016 e o Windows 10 com a Atualização de Aniversário adicionam suporte a contêineres isolados, controlados por recursos e ambientes operacionais portáteis. O Windows Server 2016 e o Windows 10 dão suporte a dois runtimes de contêiner diferentes com um grau diferente de isolamento: os contêineres do Windows alcançam isolamento por meio do isolamento do processo e do namespace, enquanto Hyper-V contêineres conseguem isolamento por meio de máquinas virtuais leves. O IIS 10.0 é executado tanto em runtimes de contêiner quanto em imagens base de OS, como Server Core e Nano Server, permitindo que você escolha o melhor ambiente de contêiner do Windows para suas cargas de trabalho da Web.

Introdução às [imagens base do IIS disponíveis no Hub do Docker](https://hub.docker.com/r/microsoft/windows-servercore-iis/) ou siga este tutorial para [implantar um aplicativo MVC ASP.NET no IIS em execução dentro de um contêiner](https://learn.microsoft.com/pt-br/aspnet/mvc/overview/deployment/docker-aspnetmvc).

## Gerenciando o IIS

Com o advento do Nano Server e contêineres do Windows, o IIS agora fornece uma história de gerenciamento melhor para todos os ambientes em execução (incluindo aqueles sem uma GUI).

### Administração do Microsoft IIS

A Administração do Microsoft IIS é uma API REST que permite que você configure e monitore sua instância do IIS e é um [projeto de software livre que está em desenvolvimento ativo no GitHub](https://github.com/Microsoft/IIS.Administration).

Saiba mais: [Versão prévia da administração do Microsoft IIS](https://blogs.iis.net/adminapi/microsoft-iis-administration-api-preview).

### Cmdlets de Administração do IIS no PowerShell

O IIS 10.0 adiciona um novo módulo simplificado do PowerShell para gerenciar o IIS que dimensiona melhor e oferece suporte de pipelining superior aos cmdlets webAdministration existentes. O novo módulo fornece acesso direto ao objeto ServerManager, permitindo maior controle sobre o sistema de configuração.

Saiba mais com os [cmdlets PowerShell IISAdministration](get-started__whats-new-in-iis-10__iisadministration-powershell-cmdlets.md) ou consulte [como realizar uma tarefa de configuração comum usando o IIS Administration](https://blogs.iis.net/jeonghwan/how-to-use-iisadministration-powershell-cmdlets-to-configure-iis-configuration-settings).

## Cabeçalhos de host curinga

O IIS 10.0 adiciona suporte para cabeçalhos de host curinga; Agora você pode configurar associações para atender a solicitações para qualquer subdomínio em um determinado domínio.

Saiba mais: [Suporte a Wildcard no cabeçalho do Host](get-started__whats-new-in-iis-10__wildcard-host-header-support.md)

## Otimização ideal de CPU do Pool de Threads do IIS para hardware NUMA

O IIS 10.0 fornece melhor desempenho no hardware NUMA por meio da otimização ideal de CPU do pool de threads do IIS.

Saiba mais: [Otimização de CPU ideal do Pool de Threads do IIS para hardware NUMA](get-started__whats-new-in-iis-10__thread-pool-ideal-cpu-numa-optimization.md)

---

## Comentários

Esta página foi útil?

Sim

Não

Não

Precisa de ajuda com este tópico?

Quer experimentar o Pergunte e aprenda para esclarecer ou guiar você neste tópico?

Pergunte e aprenda

Pergunte e aprenda

 Sugerir uma correção?

---

## Recursos adicionais

---

- Última atualização em 
  2026-03-28
