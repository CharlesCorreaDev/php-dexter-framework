# Referência de funcionalidade para configuração | Microsoft Learn

> **Fonte / Source:** https://learn.microsoft.com/pt-br/iis/get-started/planning-your-iis-architecture/feature-to-configuration-reference

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

# Referência de funcionalidade para configuração

Comentários

por [Saad Ladki](https://twitter.com/saadladki)

## Funcionalidade do IIS Manager e o Mapeamento de Configurações

Essa é uma referência rápida para mapear os recursos do IIS 7.0 e do Gerenciador acima na **lista de recursos** para seções de configuração e os módulos que consomem essas seções de configuração.

A tabela a seguir mostra o nome do recurso do Gerenciador do IIS, seguido pelas seções de configuração que o recurso lê e grava, seguido pelos módulos que consomem as seções de configuração. Em alguns casos, a seção de configuração é consumida pelo servidor principal do IIS, pelo Gerenciador do IIS, pelo .NET Framework 2.0 ou ASP.NET 2.0, e são marcados especialmente em colchetes, por exemplo, [IIS Server Core]. Para obter mais informações sobre módulos do IIS, consulte a [visão geral do módulo IIS](get-started__introduction-to-iis__iis-modules-overview.md)

| Nome do recurso do IIS Manager | Seção De configuração | O que consome isso? Módulo (Tipo/Dll) |
| --- | --- | --- |
| Compilação do .NET | system.web/compilation |  |
| Globalização do .NET | system.web/globalization |  |
| Níveis de confiança do .NET | system.web/trust |  |
| [Autenticação] Anônimo | system.webServer/security/anonymousAuthentication | AnonymousAuthenticationModule (authanon.dll) |
| [Autenticação] Básica | system.webServer/security/basicAuthentication | BasicAuthenticationModule (authbas.dll) |
| [Autenticação] Digest | system.webServer/security/digestAuthentication | DigestAuthenticationModule (authmd5.dll) |
| [Autenticação] Formulários | system.web/authentication | FormsAuthentication (System.Web.Security.FormsAuthenticationModule) |
| [Autenticação] Windows | system.webServer/security/windowsAuthentication | WindowsAuthenticationModule (authsspi.dll) |
| Administradores | administration.config: administradores | [Gerenciador do IIS, Serviço de Gerenciamento da Web (WMSVC)] |
| Configurações do aplicativo | Configurações do aplicativo |  |
| ASP | system.webServer/asp (indireto) | IsapiModule (isapi.dll) |
| Regras de autorização | system.webServer/security/authorization | UrlAuthorizationModule (urlauthz.dll) |
| Certificados | [Repositório de Certificados do Computador Local] |  |
| CGI | system.webServer/cgi | CgiModule (cgi.dll) |
| **Compressão** | system.webServer/httpCompression | DynamicCompressionModule (compdyn.dll)  StaticCompressionModule (compstat.dll) |
| system.webServer/urlCompression |
| Cadeias de Conexão | strings de conexão |  |
| Páginas de erro personalizadas | system.webServer/httpErrors | CustomErrorModule (custerr.dll) |
| Documento padrão | system.webServer/defaultDocument | DefaultDocumentModule (defdoc.dll) |
| Navegação em diretórios | system.webServer/directoryBrowse | DirectoryListingModule (dirlist.dll) |
| Regras de rastreamento de falhas em solicitações | system.webServer/tracing/traceFailedRequests | FailedRequestsTracingModule (iisfreb.dll) |
| system.webServer/tracing/traceProviderDefinitions |
| Mapeamentos de manipuladores | system.webServer/handlers | [IIS Server Core] |
| Cabeçalhos HTTP | system.webServer/httpProtocol | ProtocolSupportModule (protsup.dll) |
| Restrições de IP e domínio | system.webServer/ipSecurity | IpRestrictionModule (iprestr.dll) |
| Restrições de ISAPI e CGI | system.webServer/security/isapiCgiRestriction | CgiModule (cgi.dll) |
| IsapiModule (isapi.dll) |
| Filtros de ISAPI | system.webServer/isapiFilters | IsapiFilterModule (filter.dll) |
| Registro | system.applicationHost/log | [IIS Server Core] |
| system.webServer/httpLogging | HttpLoggingModule (loghttp.dll) |
| Chave do Computador | system.web/machineKey |  |
| Serviço de Gerenciamento | Registro:  HKLM\SOFTWARE\Microsoft\WebManagement\Server | [Serviço de Gerenciamento da Web (WMSVC)] |
| Funções de associação | system.web/roleManager | RoleManager (System.Web.Security.RoleManagerModule) |
| Usuários de Associação | system.web/membership |  |
| Tipos MIME | system.webServer/staticContent | StaticFileModule (static.dll) |
| Módulos | system.webServer/globalModules | [IIS Server Core] |
| system.webServer/modules |
| Regras de cache de saída | system.webServer/cache | HttpCacheModule (cachhttp.dll) |
| Páginas e controles | system.web/páginas | [ASP.NET 2.0] |
| Profile | system.web/profile | Perfil (System.Web.Profile.ProfileModule) |
| Providers | system.web/membership system.web/roleManager system.web/profile |  |
| Regras de redirecionamento | system.webServer/httpRedirect | HttpRedirectionModule (redirect.dll) |
| Direitos e permissões | system.webServer/access | [IIS Server Core] |
| Inclusões do lado do servidor | system.webServer/serverSideInclude | ServerSideIncludeModule (iis\_ssi.dll) |
| Estado da sessão | system.web/sessionState | Sessão (System.Web.SessionState.SessionStateModule) |
| system.web/sessionPageState |
| E-mail SMTP | system.net/mailSettings/smtp | [.NET Framework 2.0] |
| Configurações de SSL | system.webServer/access | [IIS Server Core] |
| Processos de trabalho |  |  |

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
