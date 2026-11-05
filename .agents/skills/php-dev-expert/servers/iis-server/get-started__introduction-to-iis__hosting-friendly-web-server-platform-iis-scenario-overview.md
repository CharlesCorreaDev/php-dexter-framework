# Hosting-Friendly IIS (Web Server Platform): Visão geral do cenário | Microsoft Learn

> **Fonte / Source:** https://learn.microsoft.com/pt-br/iis/get-started/introduction-to-iis/hosting-friendly-web-server-platform-iis-scenario-overview

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

# Plataforma de servidor web amigável para hospedagem (IIS): Visão geral

Comentários

pela Equipe IIS, [Keith Newman e Robert McMurray](https://github.com/rmcmurray)

pela Equipe IIS, Keith Newman e [Robert McMurray](https://github.com/rmcmurray)

## Compatibilidade

| Versão | Observações |
| --- | --- |
| IIS 7.0 e posterior | Os recursos descritos neste artigo foram introduzidos no IIS 7.0. |
| IIS 6.0 e anterior | Os recursos descritos neste artigo não tinham suporte antes do IIS 7.0. |

## Descrição do cenário

O servidor Web do IIS fornece uma plataforma segura, fácil de gerenciar, modular e extensível para hospedar de forma confiável sites, serviços e aplicativos. Os cenários do servidor Web fornecem instruções de ponta a ponta sobre como planejar, instalar e configurar o IIS para hospedar vários tipos de serviços e aplicativos.

Cada cenário é independente. Você pode lê-los em qualquer ordem e concentrar-se nesses cenários que atendem mais de perto às suas necessidades.

## Cenários do Servidor Web

| Scenario | Descrição |
| --- | --- |
| [Criar um site estático no IIS](manage__creating-websites__scenario-build-a-static-website-on-iis.md) | Mostra como instalar o IIS com a configuração mínima do módulo para sites estáticos do servidor. Descreve como adicionar um site, configurar a autenticação anônima, configurar um documento padrão, configurar a compactação de conteúdo estático, usar o registro em log do IIS e filtrar solicitações. |
| [Criar um site asp clássico no IIS](application-frameworks__running-classic-asp-applications-on-iis-7-and-iis-8__scenario-build-a-classic-asp-website-on-iis.md) | Mostra como instalar o IIS com os módulos necessários para servidor de sites clássicos do ASP. Explica como adicionar sites e editar as configurações do aplicativo ASP. |
| [Criar um site de ASP.NET no IIS](application-frameworks__scenario-build-an-aspnet-website-on-iis__overview-build-an-asp-net-website-on-iis.md) | Orienta você pelo planejamento, instalação e configuração de um site ASP.NET no IIS. Descreve quais módulos do IIS instalar. Mostra como definir ASP.NET configurações, como estado de sessão, páginas e controles, configurações de aplicativo, configurações de compilação e globalização do .NET. Explica como definir as configurações da fonte de dados. E mostra como melhorar a segurança com isolamento do aplicativo, níveis de confiança do .NET, autenticação do .NET, configurações de chave do computador e comunicação SSL. |
| [Criar um site FTP no IIS](publish__using-the-ftp-service__scenario-build-an-ftp-site-on-iis.md) | Mostra como instalar o FTP em um servidor Web do IIS existente. Descreve como adicionar um site FTP, configurar padrões de site FTP, suporte à parede de incêndio, isolamento do usuário e opções de navegação de diretório. Mostra como configurar restrições de tentativa de logon, filtragem de solicitações, log ftp e mensagens FTP. |
| [Criar uma fazenda web com servidores IIS](web-hosting__scenario-build-a-web-farm-with-iis-servers__overview-build-a-web-farm-with-iis-servers.md) | Orienta você pelo planejamento, instalação e configuração de um farm de servidores simples com servidores IIS. Ajuda você a planejar e configurar a infraestrutura do farm. Mostra como configurar o balanceamento de carga usando o ARR (Application Request Routing). Descreve como configurar o conteúdo compartilhado e a configuração compartilhada. Mostra como configurar um repositório de certificados central para certificados SSL. Explica como configurar o FTP e o Web Deploy na fazenda de servidores. |

## Aplicativos Práticos

Se você é um profissional de TI, um desenvolvedor Web ou deseja configurar seu próprio servidor Web, esse cenário pode ajudá-lo a instalar o IIS e configurá-lo para atender seu aplicativo Web.

## Consulte Também

A tabela a seguir contém links para recursos relacionados ao IIS 8.

| Tipo de conteúdo | References |
| --- | --- |
| **Implantação** | [Implantação em um provedor](https://www.asp.net/web-forms/tutorials/deployment-to-a-hosting-provider/deployment-to-a-hosting-provider-introduction-1-of-12) | de hospedagem[Implantação da Web 2.0](https://www.iis.net/downloads/microsoft/web-deploy) |
| **Operações** | [IIS.NET](https://www.iis.net/) | [Centro de Aprendizagem do IIS](https://www.iis.net/learn) | [O que há de novo no IIS 8.0 para o Windows 8?](https://www.iis.net/learn/get-started/whats-new-in-iis-8) |
| **Solução de problemas** | [Solução de problemas do IIS](https://www.iis.net/learn/troubleshoot) |
| **Security** | [Protegendo o Windows Server 2012](https://technet.microsoft.com/library/hh831360.aspx) |
| **Ferramentas e Configurações** | [Cmdlets de administração do IIS (Servidor Web) no Windows PowerShell](https://technet.microsoft.com/library/hh867899.aspx) |
| **Recursos da comunidade** | [Blogs do IIS](https://blogs.iis.net/) | [Fóruns do IIS](https://forums.iis.net/) | [Blog de Robert McMurray](https://blogs.msdn.com/b/robert_mcmurray/) | [Blog de Scott Forsyth](https://blogs.iis.net/owscott/default.aspx) | [Blog de Steve Schofield](https://blogs.iis.net/steveschofield/default.aspx) |
| **Tecnologias relacionadas** | [ASP.NET](https://www.asp.net/) | [Projetos Web ASP.NET](https://msdn.microsoft.com/library/ywdtth2f.aspx) |

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
  2026-03-27
