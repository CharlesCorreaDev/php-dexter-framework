# Introdução às arquiteturas do IIS | Microsoft Learn

> **Fonte / Source:** https://learn.microsoft.com/pt-br/iis/get-started/introduction-to-iis/introduction-to-iis-architecture

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

# Introdução às arquiteturas do IIS

Comentários

pela equipe do IIS, [Reagan Templin](https://github.com/arkaytee)

### Compatibilidade

| Versão | Observações |
| --- | --- |
| IIS 7.0 e posterior | Os recursos descritos neste artigo foram introduzidos no IIS 7.0. |
| IIS 6.0 e anterior | Os recursos descritos neste artigo não tinham suporte antes do IIS 7.0. |

## Introdução

Os Serviços de Informações da Internet (IIS) 7 e posteriores fornecem uma arquitetura de processamento de solicitação que inclui:

- O Serviço de Ativação de Processo do Windows (WAS), que permite que os sites usem protocolos diferentes de HTTP e HTTPS.
- Um mecanismo de servidor Web que pode ser personalizado adicionando ou removendo módulos.
- Pipelines integrados de processamento de solicitações do ASP.NET e do IIS.

## Componentes no IIS

O IIS contém vários componentes que executam funções importantes para as funções de aplicativo e servidor Web no Windows Server® 2008 (IIS 7.0) e no Windows Server 2008 R2 (IIS 7.5). Cada componente tem responsabilidades, como escutar solicitações feitas ao servidor, gerenciar processos e ler arquivos de configuração. Esses componentes incluem ouvintes de protocolo, como o HTTP.sys, e serviços, como o Serviço de Publicação da Web (serviço WWW) e o Serviço de Ativação de Processo do Windows (WAS).

## Ouvintes de protocolo

Os ouvintes de protocolo recebem solicitações específicas do protocolo, enviam-nas ao IIS para processamento e retornam respostas aos solicitantes. Por exemplo, quando um navegador do cliente solicita uma página da Web da Internet, o ouvinte HTTP, HTTP.sys, pega a solicitação e a envia ao IIS para processamento. Depois que o IIS processa a solicitação, HTTP.sys retorna uma resposta ao navegador do cliente.

Por padrão, o IIS fornece HTTP.sys como o ouvinte de protocolo que escuta solicitações HTTP e HTTPS. HTTP.sys foi introduzido no IIS 6.0 como um ouvinte de protocolo específico de HTTP para solicitações HTTP. HTTP.sys continua sendo o ouvinte HTTP no IIS 7 e posterior, mas inclui suporte para SSL (Secure Sockets Layer).

Para dar suporte a serviços e aplicativos que usam protocolos diferentes de HTTP e HTTPS, você pode usar tecnologias como o WCF (Windows Communication Foundation). O WCF tem adaptadores de ouvinte que fornecem a funcionalidade de um ouvinte de protocolo e de um adaptador de ouvinte. Os adaptadores do ouvinte são abordados posteriormente neste documento. Para obter mais informações sobre o WCF, consulte [o Windows Communication Foundation](https://learn.microsoft.com/pt-br/dotnet/framework/wcf/) no MSDN.

## Pilha de protocolo de transferência de hipertexto (HTTP.sys)

O escutador HTTP faz parte do subsistema de rede dos sistemas operacionais Windows e é implementado como um driver de dispositivo em modo kernel chamado pilha HTTP (HTTP.sys). HTTP.sys escuta solicitações HTTP da rede, passa as solicitações para o IIS para processamento e retorna respostas processadas para navegadores cliente.

No IIS 6.0, HTTP.sys substituiu a API do Windows Sockets (Winsock), que era um componente do modo de usuário usado pelas versões anteriores do IIS para receber solicitações HTTP e enviar respostas HTTP. O IIS 7 e posterior continuam contando com HTTP.sys para solicitações HTTP.

HTTP.sys fornece os seguintes benefícios:

- Cache no modo kernel. As solicitações de respostas armazenadas em cache são atendidas sem mudar para o modo de usuário.
- Enfileiramento de solicitação no modo kernel. As solicitações causam menos sobrecarga na alternância de contexto porque o kernel encaminha solicitações diretamente para o processo de trabalho correto. Se nenhum processo de trabalho estiver disponível para aceitar uma solicitação, a fila de solicitações no modo kernel manterá a solicitação até que um processo de trabalho a pegue.
- Solicitar filtragem de segurança e pré-processamento.

## World Wide Web Publishing Service (serviço WWW)

No IIS 7 e posteriores, a funcionalidade que anteriormente era tratada pelo Serviço de Publicação da Web (SERVIÇO WWW) agora está dividida entre dois serviços: SERVIÇO WWW e um novo serviço, Serviço de Ativação de Processo do Windows (WAS). Esses dois serviços são executados como LocalSystem no mesmo processo de Svchost.exe e compartilham os mesmos binários.

Observação

Você também pode ver o Serviço WWW chamado W3SVC na documentação.

### Como o Serviço WWW funciona no IIS 6.0

No IIS 6.0, o SERVIÇO WWW gerencia as seguintes áreas principais no IIS:

- Administração e configuração de HTTP
- Gestão de processos
- Monitoramento de desempenho

#### Administração e configuração de HTTP

O Serviço WWW lê informações de configuração da metabase do IIS e usa essas informações para configurar e atualizar o ouvinte HTTP, HTTP.sys. Além disso, o serviço WWW inicia, interrompe, monitora e gerencia processos de trabalho que processam solicitações HTTP.

#### Monitoramento de desempenho

O Serviço WWW monitora o desempenho e fornece contadores de desempenho para sites e para o cache do IIS.

#### Gerenciamento de processo

O Serviço WWW gerencia pools de aplicativos e processos de trabalho, como iniciar, parar e reciclar processos de trabalho. Além disso, o Serviço WWW monitora a integridade dos processos de trabalho e invoca a detecção rápida de falhas para impedir que novos processos sejam iniciados quando vários processos de trabalho falharem em um período configurável.

### Como o serviço WWW funciona no IIS

No IIS, o serviço WWW não gerencia mais os processos de trabalho. Em vez disso, o Serviço WWW é o adaptador de ouvinte para o ouvinte HTTP, HTTP.sys. Como o adaptador do ouvinte, o Serviço WWW é responsável principalmente por configurar HTTP.sys, atualizar HTTP.sys quando a configuração é alterada e notificar WAS quando uma solicitação entra na fila de solicitações.

Além disso, o Serviço WWW continua a coletar os contadores para sites da Web. Como os contadores de desempenho permanecem parte do Serviço WWW, eles são específicos de HTTP e não se aplicam ao WAS.

## Serviço de Ativação de Processo do Windows (WAS)

No IIS 7 e posterior, o WAS (Serviço de Ativação de Processo do Windows) gerencia a configuração do pool de aplicativos e os processos de trabalho em vez do Serviço WWW. Isso permite que você use o mesmo modelo de configuração e processo para sites HTTP e não HTTP.

Além disso, você pode executar WAS sem o Serviço WWW se não precisar da funcionalidade HTTP. Por exemplo, você pode gerenciar um serviço Web por meio de um adaptador de ouvinte do WCF, como NetTcpActivator, sem executar o Serviço WWW se não precisar escutar solicitações HTTP no HTTP.sys. Para obter informações sobre adaptadores de ouvintes do WCF e sobre como hospedar aplicativos WCF no IIS 7 e posterior usando WAS, consulte [Hospedagem no WCF](https://learn.microsoft.com/pt-br/dotnet/framework/wcf/hosting-services) no MSDN.

### Gerenciamento de configuração no WAS

Na inicialização, WAS lê determinadas informações do arquivo ApplicationHost.config e passa essas informações para adaptadores ouvintes no servidor. Os adaptadores de escuta são componentes que estabelecem a comunicação entre o WAS e os ouvintes de protocolo, como o HTTP.sys. Depois que os adaptadores ouvintes recebem informações de configuração, eles configuram seus ouvintes de protocolo correspondentes e preparam os ouvintes para atender a solicitações.

No caso do WCF, um adaptador de ouvinte inclui a funcionalidade de um ouvinte de protocolo. Portanto, um adaptador de ouvinte do WCF, como NetTcpActivator, é configurado com base nas informações do WAS. Depois que NetTcpActivator é configurado, ele escuta solicitações que usam o protocolo net.tcp. Para obter mais informações sobre adaptadores de ouvintes do WCF, consulte [Arquitetura de Ativação WAS](https://learn.microsoft.com/pt-br/dotnet/framework/wcf/feature-details/was-activation-architecture) no MSDN.

A lista a seguir descreve o tipo de informação que WAS lê da configuração:

- Informações de configuração global
- Informações de configuração de protocolo para protocolos HTTP e não HTTP
- Configuração do pool de aplicativos, como as informações da conta de processo
- Configuração do site, como associações e aplicativos
- Configuração do aplicativo, como os protocolos habilitados e os pools de aplicativos aos quais os aplicativos pertencem

Se o ApplicationHost.config sofrer alterações, o WAS recebe uma notificação e atualiza os adaptadores de escuta com as novas informações.

#### Gerenciamento de processo

O WAS gerencia pools de aplicativos e processos de trabalho para solicitações HTTP e não HTTP. Quando um listener de protocolo recebe uma solicitação de cliente, o WAS determina se um processo de trabalho está em execução ou não. Se um pool de aplicativos já tiver um processo de trabalho que esteja atendendo solicitações, o adaptador do ouvinte passará a solicitação para o processo de trabalho para processamento. Se não houver nenhum processo de trabalho no pool de aplicativos, WAS iniciará um processo de trabalho para que o adaptador do ouvinte possa passar a solicitação para processamento.

Observação

Como o WAS gerencia processos para protocolos HTTP e não HTTP, você pode executar aplicativos com protocolos diferentes no mesmo pool de aplicativos. Por exemplo, você pode desenvolver um aplicativo, como um serviço XML, e hospedá-lo em HTTP e net.tcp.

## Módulos no IIS

O IIS fornece uma nova arquitetura diferente das versões anteriores do IIS. Em vez de manter a maior parte da funcionalidade dentro do próprio servidor, o IIS inclui um mecanismo de servidor Web no qual você pode adicionar ou remover componentes, chamados de módulos, dependendo de suas necessidades.

Os módulos são recursos individuais que o servidor usa para processar solicitações. Por exemplo, o IIS usa módulos de autenticação para autenticar credenciais do cliente e armazenar módulos em cache para gerenciar a atividade de cache.

A nova arquitetura fornece as seguintes vantagens em relação às versões anteriores do IIS:

- Você pode controlar quais módulos deseja no servidor.
- Você pode personalizar um servidor para uma função específica em seu ambiente.
- Você pode usar módulos personalizados para substituir módulos existentes ou para introduzir novos recursos.

A nova arquitetura também melhora a segurança e simplifica a administração. Ao remover módulos desnecessários, você reduz a superfície de ataque e o volume de memória do servidor, que é a quantidade de memória que os processos de trabalho do servidor usam no computador. Você também elimina a necessidade de gerenciar recursos desnecessários para seus sites e aplicativos.

## Módulos nativos

As seções a seguir descrevem os módulos nativos que estão disponíveis com uma instalação completa do IIS 7 e posteriores. Você pode removê-los ou substituí-los por módulos personalizados, dependendo de suas necessidades.

### Módulos HTTP

Vários módulos no IIS 7 e posteriores executam tarefas específicas do HTTP (Protocolo de Transferência de Hipertexto) no pipeline de processamento de solicitação. Os módulos HTTP incluem módulos para responder a informações e consultas enviadas em cabeçalhos de cliente, para retornar erros HTTP, para redirecionar solicitações e muito mais.

| Nome do módulo | Descrição | Recurso |
| --- | --- | --- |
| CustomErrorModule | Envia mensagens de erro HTTP padrão e configuradas quando um código de status de erro é definido em uma resposta. | Inetsrv\Custerr.dll |
| HttpRedirectionModule | Dá suporte ao redirecionamento configurável para solicitações HTTP. | Inetsrv\Redirect.dll |
| MóduloDeSuporteDeProtocolo | Executa ações relacionadas ao protocolo, como definir cabeçalhos de resposta e redirecionar cabeçalhos com base na configuração. | Inetsrv\Protsup.dll |
| RequestFilteringModule | Adicionado no IIS 7.5. Filtra solicitações conforme configurado para controlar o protocolo e o comportamento do conteúdo. | Inetsrv\modrqflt.dll |
| WebDAVModule | Adicionado no IIS 7.5. Permite a publicação mais segura do conteúdo usando HTTP via SSL. | Inetsrv\WebDAV.dll |

### Módulos de segurança

Vários módulos no IIS executam tarefas relacionadas à segurança no pipeline de processamento de solicitações. Além disso, há módulos separados para cada um dos esquemas de autenticação, que permitem selecionar módulos para os tipos de autenticação desejados no servidor. Há também módulos que executam a autorização de URL e um módulo que filtra solicitações.

| Nome do módulo | Descrição | Recurso |
| --- | --- | --- |
| AnonymousAuthenticationModule | Executa a autenticação anônima quando nenhum outro método de autenticação é bem-sucedido. | Inetsrv\Authanon.dll |
| BasicAuthenticationModule (Módulo de Autenticação Básica) | Executa a autenticação básica. | Inetsrv\Authbas.dll |
| CertificateMappingAuthenticationModule | Executa a autenticação por mapeamento de certificado usando o Active Directory. | Inetsrv\Authcert.dll |
| MóduloDeAutenticaçãoDigest | Executa a autenticação Digest. | Inetsrv\Authmd5.dll |
| IISCertificateMappingAuthenticationModule | Realiza a autenticação por mapeamento de certificado com a configuração de certificados do IIS. | Inetsrv\Authmap.dll |
| RequestFilteringModule | Executa tarefas URLScan, como configurar verbos permitidos e extensões de nome de arquivo, definir limites e verificar se há sequências de caracteres inválidas. | Inetsrv\Modrqflt.dll |
| Urlauthorizationmodule | Executa a autorização de URL. | Inetsrv\Urlauthz.dll |
| Windowsauthenticationmodule | Executa a autenticação integrada do NTLM. | Inetsrv\Authsspi.dll |
| IpRestrictionModule | Restringe os endereços IPv4 listados na lista ipSecurity na configuração. | Inetsrv\iprestr.dll |

### Módulos de conteúdo

Vários módulos no IIS executam tarefas relacionadas ao conteúdo no pipeline de processamento de solicitações. Os módulos de conteúdo incluem módulos para processar solicitações de arquivos estáticos, para retornar uma página padrão quando um cliente não especifica um recurso em uma solicitação, para listar o conteúdo de um diretório e muito mais.

| Nome do módulo | Descrição | Recurso |
| --- | --- | --- |
| CgiModule | Executa processos CGI (Common Gateway Interface) para criar a saída de resposta. | Inetsrv\Cgi.dll |
| DefaultDocumentModule | Tenta retornar um documento padrão para solicitações feitas ao diretório pai. | Inetsrv\Defdoc.dll |
| MóduloDeListagemDeDiretórios | Lista o conteúdo de um diretório. | Inetsrv\dirlist.dll |
| Isapimodule | Hospeda DLLs de extensão ISAPI. | Inetsrv\Isapi.dll |
| IsapiFilterModule | Dá suporte a DLLs de filtro ISAPI. | Inetsrv\Filter.dll |
| ServerSideIncludeModule | Processos do lado do servidor incluem código. | Inetsrv\Iis\_ssi.dll |
| StaticFileModule | Serve arquivos estáticos. | Inetsrv\Static.dll |
| FastCgiModule | Dá suporte ao FastCGI, que fornece uma alternativa de alto desempenho ao CGI. | Inetsrv\iisfcgi.dll |

### Módulos de compactação

Dois módulos do IIS executam compactação no pipeline de processamento de solicitação.

| Nome do módulo | Descrição | Recurso |
| --- | --- | --- |
| MóduloDeCompressãoDinâmica | Compacta respostas e aplica a codificação de transferência de compressão Gzip às respostas. | Inetsrv\Compdyn.dll |
| MóduloDeCompressãoEstática | Executa a pré-compactação de conteúdo estático. | Inetsrv\Compstat.dll |

### Módulos de cache

Vários módulos no IIS executam tarefas relacionadas ao cache no pipeline de processamento de solicitações. O cache melhora o desempenho de seus sites e aplicativos Web armazenando informações processadas, como páginas da Web, na memória no servidor e, em seguida, reutilizando essas informações em solicitações subsequentes para o mesmo recurso.

| Nome do módulo | Descrição | Recurso |
| --- | --- | --- |
| FileCacheModule | Fornece cache no modo de usuário para arquivos e identificadores de arquivo. | Inetsrv\Cachfile.dll |
| HTTPCacheModule | Fornece o cache do modo kernel e do modo de usuário em HTTP.sys. | Inetsrv\Cachhttp.dll |
| TokenCacheModule | Fornece cache no modo de usuário de pares de nome de usuário e token para módulos que produzem entidades de usuário do Windows. | Inetsrv\Cachtokn.dll |
| UriCacheModule | Fornece cache de informações de URL no modo de usuário. | Inetsrv\Cachuri.dll |

### Módulos de log e diagnóstico

Vários módulos no IIS executam tarefas relacionadas ao registro em log e diagnóstico no pipeline de processamento de solicitações. Os módulos de log dão suporte ao carregamento de módulos personalizados e à passagem de informações para HTTP.sys. Os módulos de diagnóstico seguem e relatam eventos durante o processamento da solicitação.

| Nome do módulo | Descrição | Recurso |
| --- | --- | --- |
| MóduloDeRegistroPersonalizado | Carrega módulos de log personalizados. | Inetsrv\Logcust.dll |
| MóduloDeRastreamentoDeSolicitaçõesFalhas | Dá suporte ao recurso de rastreamento de solicitações com falha. | Inetsrv\Iisfreb.dll |
| HttpLoggingModule | Passa informações e status de processamento para HTTP.sys para registro em log. | Inetsrv\Loghttp.dll |
| RequestMonitorModule | Controla as requisições atualmente executadas nos processos de trabalho e relata informações com a Interface de Programação de Aplicativos de Status e Controle do Runtime (RSCA). | Inetsrv\Iisreqs.dll |
| TracingModule | Relata eventos para o ETW (Rastreamento de Eventos da Microsoft para Windows). | Inetsrv\Iisetw.dll |

### Módulos de suporte gerenciado

Alguns módulos no IIS dão suporte à integração gerenciada no pipeline de processamento de solicitações do IIS.

| Nome do módulo | Descrição | Recurso |
| --- | --- | --- |
| ManagedEngine | Fornece a integração de módulos de código gerenciado no pipeline de processamento de solicitações do IIS. | Microsoft.NET\Framework\v2.0.50727\webengine.dll |
| ConfigurationValidationModule | Valida problemas de configuração, como quando um aplicativo está em execução no modo Integrado, mas tem manipuladores ou módulos declarados na seção system.web. | Inetsrv\validcfg.dll |

## Módulos Gerenciados

Além dos módulos nativos, o IIS permite que você use módulos de código gerenciado para estender a funcionalidade do IIS. Alguns dos módulos gerenciados, como UrlAuthorization, têm um equivalente de módulo nativo que fornece uma alternativa nativa ao módulo gerenciado.

Observação

Os módulos gerenciados dependem do módulo ManagedEngine.

A tabela a seguir lista os módulos gerenciados disponíveis com uma instalação completa do IIS 7 e posterior. Para obter mais informações sobre os módulos gerenciados, consulte o SDK do .NET Framework 2.0 no MSDN.

| Nome do módulo | Descrição | Recurso |
| --- | --- | --- |
| Identificação Anônima | Gerencia identificadores anônimos, que são usados por recursos que dão suporte à identificação anônima, como ASP.NET perfil. | System.Web.Security.AnonymousIdentificationModule |
| Autenticação Padrão | Garante que um objeto de autenticação esteja presente no contexto. | System.Web.Security.DefaultAuthenticationModule |
| Autorização de Arquivo | Verifica se um usuário tem permissão para acessar o arquivo solicitado. | System.Web.Security.FileAuthorizationModule |
| FormsAuthentication | Dá suporte à autenticação usando a autenticação do Forms. | System.Web.Security.FormsAuthenticationModule |
| OutputCache | Dá suporte ao cache de saída. | System.Web.Caching.OutputCacheModule |
| Profile | Gerencia perfis de usuário usando ASP.NET perfil, que armazena e recupera as configurações do usuário em uma fonte de dados, como um banco de dados. | System.Web.Profile.ProfileModule |
| RoleManager | Gerencia uma instância RolePrincipal para o usuário atual. | System.Web.Security.RoleManagerModule |
| Sessão | Dá suporte à manutenção do estado da sessão, que permite o armazenamento de dados específicos para um único cliente dentro de um aplicativo no servidor. | System.Web.SessionState.SessionStateModule |
| AutorizaçãoUrl | Determina se o usuário atual tem permissão para acessar a URL solicitada, com base no nome de usuário ou na lista de funções das quais um usuário é membro. | System.Web.Security.UrlAuthorizationModule |
| UrlMappingsModule | Dá suporte ao mapeamento de uma URL real para uma URL mais amigável. | System.Web.UrlMappingsModule |
| WindowsAuthentication | Define a identidade do usuário para um aplicativo ASP.NET quando a autenticação do Windows está habilitada. | System.Web.Security.WindowsAuthenticationModule |

## Processamento de solicitações no IIS

No IIS, os pipelines de solicitação do IIS e ASP.NET são combinados para processar solicitações com uma abordagem integrada. A nova arquitetura de processamento de solicitações consiste em uma lista ordenada de módulos nativos e gerenciados que executam tarefas específicas em resposta às solicitações.

Esse design oferece vários benefícios em relação às versões anteriores do IIS. Primeiro, todos os tipos de arquivo podem usar recursos que estavam originalmente disponíveis apenas para código gerenciado. Por exemplo, agora você pode usar a autenticação do ASP.NET Forms e a autorização de URL (Uniform Resource Locator) para arquivos estáticos, arquivos ASP (Active Server Pages) e todos os outros tipos de arquivo em seus sites e aplicativos.

Em segundo lugar, esse design elimina a duplicação de vários recursos no IIS e ASP.NET. Por exemplo, quando um cliente solicita um arquivo gerenciado, o servidor chama o módulo de autenticação apropriado no pipeline integrado para autenticar o cliente. Nas versões anteriores do IIS, essa mesma solicitação passaria por um processo de autenticação no pipeline do IIS e no pipeline ASP.NET.

Em terceiro lugar, você pode gerenciar todos os módulos em um único local, em vez de gerenciar alguns recursos no IIS e alguns na configuração de ASP.NET. Isso simplifica a administração de sites e aplicativos no servidor.

## Pools de aplicativos no IIS

Os pools de aplicativos separam aplicativos por limites de processo para impedir que um aplicativo afete outro aplicativo no servidor. No IIS 7 e posterior, os pools de aplicativos continuam a usar o modo de isolamento do processo de trabalho do IIS 6.0. Além disso, agora você pode especificar uma configuração que determina como processar solicitações que envolvem recursos gerenciados: modo integrado ou modo Clássico.

Observação

No IIS 6.0, o modo de isolamento do processo de trabalho e o modo de isolamento do IIS 5.0 são definidos no nível do servidor. Isso torna impossível executar ambos os modos de isolamento no mesmo servidor. No entanto, no IIS 7 e posterior, o modo integrado e o modo Clássico são definidos no nível do pool de aplicativos, o que permite executar aplicativos simultaneamente em pools de aplicativos com modos de processo diferentes no mesmo servidor.

### Modo de pool de aplicativos integrado

Quando um pool de aplicativos está no modo Integrado, você pode aproveitar a arquitetura integrada de processamento de solicitações do IIS e ASP.NET. Quando um processo de trabalho em um pool de aplicativos recebe uma solicitação, a solicitação passa por uma lista ordenada de eventos. Cada evento chama os módulos nativos e gerenciados necessários para processar partes da solicitação e gerar a resposta.

Há vários benefícios na execução de pools de aplicativos no modo integrado. Primeiro, os modelos de processamento de solicitação do IIS e ASP.NET são integrados a um modelo de processo unificado. Esse modelo elimina as etapas que foram duplicadas anteriormente no IIS e ASP.NET, como autenticação. Além disso, o modo integrado permite a disponibilidade de recursos gerenciados para todos os tipos de conteúdo.

### Modo clássico de pool de aplicativos

Quando um pool de aplicativos está no modo Clássico, o IIS 7 e posterior manipula solicitações da mesma forma que no modo de isolamento do processo de trabalho do IIS 6.0. As solicitações do ASP.NET primeiro passam por etapas de processamento nativo no IIS e, em seguida, são roteadas para Aspnet\_isapi.dll para processamento de código gerenciado no ambiente de execução gerenciado. Por fim, a solicitação é roteada de volta por meio do IIS para enviar a resposta.

Essa separação do IIS e ASP.NET modelos de processamento de solicitação resulta na duplicação de algumas etapas de processamento, como autenticação e autorização. Além disso, os recursos de código gerenciado, como a autenticação de formulários, só estão disponíveis para aplicativos ASP.NET ou aplicativos para os quais você mapeou todas as solicitações para serem tratadas por aspnet\_isapi.dll.

Certifique-se de testar seus aplicativos existentes para compatibilidade no modo integrado antes de atualizar um ambiente de produção para o IIS 7 e posterior e atribuir aplicativos a pools de aplicativos no modo integrado. Você só deve adicionar um aplicativo a um pool de aplicativos no modo Clássico se o aplicativo não funcionar no modo integrado. Por exemplo, seu aplicativo pode depender de um token de autenticação passado do IIS para o tempo de execução gerenciado e, devido à nova arquitetura no IIS 7 e posterior, o processo causa falhas no seu aplicativo.

## Processamento de solicitação HTTP no IIS

O IIS 7 e posterior têm um fluxo de processamento de solicitação HTTP semelhante ao IIS 6.0. Os diagramas nesta seção fornecem uma visão geral de uma solicitação HTTP em processo.

A lista a seguir descreve o fluxo de processamento de solicitação mostrado na Figura 1:

1. Quando um navegador cliente inicia uma solicitação HTTP para um recurso no servidor Web, HTTP.sys intercepta a solicitação.
2. HTTP.sys contata o WAS para obter informações do armazenamento de configurações.
3. WAS solicita informações de configuração do repositório de configuração, applicationHost.config.
4. O Serviço WWW recebe informações de configuração, como o pool de aplicativos e a configuração do site.
5. O Serviço WWW usa as informações de configuração para configurar HTTP.sys.
6. WAS inicia um processo de trabalho para o pool de aplicativos ao qual a solicitação foi feita.
7. O processo de trabalho processa a solicitação e retorna uma resposta a HTTP.sys.
8. O cliente recebe uma resposta.

[![O diagrama mostra um cliente no Modo Kernel interagindo com elementos no Modo de Usuário, conforme descrito acima.](introduction-to-iis-architecture/_static/image2.png)](https://learn.microsoft.com/pt-br/iis/get-started/introduction-to-iis/introduction-to-iis-architecture/_static/image1.png)

**Figura 1: Visão geral de uma solicitação HTTP**

Em um processo de trabalho, uma solicitação HTTP passa por várias etapas ordenadas, chamadas de eventos, no Web Server Core. Em cada evento, um módulo nativo processa parte da solicitação, como autenticar o usuário ou adicionar informações ao log de eventos. Se uma solicitação exigir um módulo gerenciado, o módulo ManagedEngine nativo criará um AppDomain, no qual o módulo gerenciado poderá executar o processamento necessário, como autenticar um usuário com a autenticação do Forms. Quando a solicitação passa por todos os eventos no Web Server Core, a resposta é retornada para HTTP.sys. A Figura 2, abaixo, mostra uma solicitação HTTP entrando no processo de trabalho.

[![O diagrama mostra o Processo de Trabalho, que contém o Web Server Core, vinculado aos Módulos Nativos, vinculado ao AppDomain.](introduction-to-iis-architecture/_static/image4.png)](https://learn.microsoft.com/pt-br/iis/get-started/introduction-to-iis/introduction-to-iis-architecture/_static/image3.png)

**Figura 2: Detalhes de uma solicitação HTTP dentro do Processo de Trabalho**

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
