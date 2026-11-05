# Noções básicas sobre a instalação no IIS 7 | Microsoft Learn

> **Fonte / Source:** https://learn.microsoft.com/pt-br/iis/install/installing-iis-7/understanding-setup-in-iis

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

# Noções básicas sobre a instalação no IIS 7

Comentários

por [Saad Ladki](https://twitter.com/saadladki)

## Sobre este artigo

Este artigo fornece uma visão geral da tecnologia de instalação do Microsoft Windows Vista® e do Microsoft Server® 2008 e um exame detalhado da configuração componente do IIS 7.0 e superior. Essas informações são especialmente importantes para quem precisar personalizar a configuração do IIS em cenários de script não assistido e linha de comando. Se você usar regularmente Sysocmgr.exe em scripts para instalar o IIS 6.0, deverá alterar esses scripts para o IIS 7.0 e superior no Windows Vista e no Windows Server 2008. Este white paper fornece as informações em segundo plano necessárias para fazer essas alterações.

## Sobre o IIS 7 e superior

O IIS 7 e acima é o nome do produto usado para se referir às versões dos Serviços de Informações da Internet (IIS) incluídas em algumas edições do Windows Server® 2008, Windows Server® 2008 R2, Windows Vista® e Windows® 7.

> O IIS 7.0 é a função do Servidor Web (IIS) no Windows Server 2008 e o servidor Web no Windows Vista.
>
> O IIS 7.5 é a função do Servidor Web (IIS) no Windows Server 2008 R2 e o servidor Web no Windows 7.

## Visão geral da instalação do IIS

O IIS 7 e superior tem um design de instalação completamente modular que permite o controle sobre o volume de um servidor Web. A GUI, a linha de comando e as opções de instalação autônoma disponíveis no IIS facilitam o gerenciamento do volume de segurança e manutenção de um servidor Web do IIS.

A nova arquitetura de pipeline do servidor IIS fornece um alto nível de granularidade de componentes. Devido a essa granularidade, ao instalar o IIS, você pode exibir essa granularidade em componentes selecionáveis e instaláveis pelo usuário. Você também pode usar a Instalação do IIS para personalizar sua instalação selecionando entre mais de 40 recursos do IIS. Uma novidade na Instalação do IIS é a capacidade de instalar apenas os módulos de funcionalidades que você necessita, permitindo que você implante servidores bem enxutos e direcionados para tarefas específicas, e também bloquear funcionalidades de maneiras antes impossíveis.

## Instalação baseada em componentes do Windows Server 2008 e do Windows Vista

A instalação do sistema operacional e dos recursos opcionais para Windows Vista e Windows Server 2008 baseia-se em uma tecnologia completamente nova. A nova tecnologia de instalação agora é orientada por um modelo declarativo, com cada recurso do sistema operacional definindo seu próprio conjunto de componentes que compõem o recurso e suas dependências.

O Windows Vista e o Windows Server 2008 se beneficiam dessa nova infraestrutura de instalação de várias maneiras importantes:

- Base de binários únicos para todas as versões do Windows Server 2008

  - As versões do sistema operacional são montadas declarativamente.
  - As versões do Client &Server compartilham a mesma base de código.
- Servicing

  - Dependências conhecidas de todos os recursos.
  - O impacto da manutenção de um componente agora é completamente compreendido.
  - Service packs menores.
- Segurança

  - Superfície de ataque reduzida.
  - Todos os binários não são instalados para cada versão do sistema operacional.

## Instalação do Windows Server 2008 e do Windows Vista para recursos opcionais

No Windows Vista e no Windows Server 2008, a mesma tecnologia de instalação baseada em componente usada para instalar o sistema operacional também é usada para instalar recursos opcionais, como o IIS. Antes do Windows Vista e do Windows Server 2008, a infraestrutura de instalação do Windows tinha várias tecnologias necessárias para que você pudesse atualizar, atender e adicionar recursos opcionais ao sistema operacional. Estes incluem:

- Setup.exe instalar o sistema operacional.
- Sysocmgr.exe para instalar recursos opcionais.
- Arquivos de resposta para instalar recursos opcionais.
- Update.exe para instalar pacotes de serviço.
- Pacotes do instalador MSI.

No Windows Vista e no Windows Server 2008, agora temos uma infraestrutura de instalação baseada em componente única que unifica a instalação limpa do sistema operacional, a manutenção do sistema operacional e a instalação de recursos opcionais. Para recursos opcionais, essa tecnologia agora substitui Sysocmgr.exe.

Observação

Se você usar regularmente Sysocmgr.exe diretamente para instalar o IIS, deverá alterar esses scripts para Windows Vista e Windows Server 2008.

## Segurança, manutenção e componentes de instalação do IIS 7.0 e acima

Com o IIS 6.0, a equipe do IIS deu o passo ousado de proteger o Servidor Web por padrão. Isso significava desabilitar a execução de extensões ISAPI e componentes CGI até que o Administrador habilite explicitamente esses recursos no servidor. Ao fazer isso, a superfície de ataque potencial mudou drasticamente entre o IIS 5.0, onde todos os recursos foram instalados e habilitados por padrão, e o IIS 6.0, em que apenas o serviço de arquivo estático era permitido por padrão em uma instalação limpa do servidor Web.

Essa alteração na filosofia criou uma superfície de ataque padrão menor no servidor Web, mas estava longe de ser perfeita. Embora o IIS 6.0 tenha melhorado em muitos aspectos em relação ao seu antecessor em termos de segurança, confiabilidade e desempenho, ele ainda foi projetado de forma relativamente monolítica. Isso significa que, embora muitos recursos opcionais tenham sido desabilitados na instalação, eles ainda foram instalados e carregados no servidor Web. Esses recursos também continuaram a consumir CPU e memória e exigiram aplicação de patch e atualizações de software, mesmo que tenham sido desabilitadas. Por exemplo, o recurso CGI do IIS 6.0 sempre foi instalado, independentemente de ele ter sido usado ou não. Se uma atualização de software para CGI ficou disponível, todos os clientes do IIS foram obrigados a instalá-la, quer ela estivesse em uso ou não.

Com o IIS 7.0 e superior, a equipe do IIS abordou essa situação tornando o IIS um servidor Web totalmente modular e projetando a instalação para aproveitar ao máximo esse alto grau de modularidade. Com o IIS 7.0 e superior, não apenas os componentes desnecessários são desabilitados, mas eles nem sequer estão instalados. Isso permite que você instale apenas os módulos para os recursos do IIS necessários e se preocupe apenas em atender ao conjunto de componentes que você usa. Isso possibilita implantar servidores leves e específicos para tarefas e bloquear a funcionalidade não utilizada de maneira inédita.

## Visão geral dos componentes do IIS 7.0 e Acima

A tabela a seguir resume todos os recursos de componentes instaláveis do IIS 7.0 e superior. A tabela também agrupa recursos em áreas funcionais. Essas áreas funcionais são usadas pelas interfaces do usuário de instalação, como o Gerenciador de Servidores, bem como pelas novas ferramentas de script e linha de comando. Cada uma das áreas funcionais e os componentes de recursos são explorados em detalhes na próxima seção.

| **Itens de Menu de Instalação** | | | | | | **Descrição** |
| --- | --- | --- | --- | --- | --- | --- |
| **%** | Servidor Web | | | | | Instala o Servidor Web do IIS. Fornece suporte para sites HTML e suporte opcional para extensões de ASP.NET, ASP Clássico e servidor Web. |
|  | | **?** | Recursos de HTTP comuns | | | Instala suporte para conteúdo estático do servidor Web, como arquivos HTML e de imagem, erros personalizados e redirecionamento. |
|  |  |  |  | **?** | Conteúdo estático | Serve arquivos .htm, .html e de imagem de um site. |
|  |  |  |  | **?** | Documento padrão | Permite que você especifique um arquivo padrão a ser carregado quando os usuários não especificam um arquivo em uma URL de solicitação. |
|  |  |  |  | **?** | Navegação no Diretório | Permitir que os clientes vejam o conteúdo de um diretório em seu servidor Web. |
|  |  |  |  | **?** | Erros HTTP | Instala arquivos de erro HTTP. Permite personalizar as mensagens de erro retornadas aos clientes. |
|  |  |  |  |  | Redirecionamento HTTP | Fornece suporte para redirecionar solicitações de cliente para um destino específico. |
|  |  |  | Desenvolvimento do aplicativo | | | Instala o suporte para o desenvolvimento de aplicativos, como extensões ASP.NET, ASP Clássico, CGI e ISAPI. |
|  |  |  |  |  | ASP.NET | Permite que o servidor Web hospede ASP.NET aplicativos. |
|  |  |  |  |  | Extensibilidade .NET | Permite que o servidor Web hospede extensões de módulo gerenciadas pela estrutura do .NET. |
|  |  |  |  |  | ASP | Permite que o servidor Web hospede aplicativos ASP clássicos. |
|  |  |  |  |  | CGI | Habilita o suporte para executáveis CGI. |
|  |  |  |  |  | Extensões de ISAPI | Permite que extensões ISAPI lidem com solicitações de cliente. |
|  |  |  |  |  | Filtros de ISAPI | Permite que filtros ISAPI modifiquem o comportamento do servidor Web. |
|  |  |  |  |  | Inclusões do lado do servidor | Fornece suporte para arquivos de inclusão de código .stm, .shtm e .shtml. |
|  |  | **%** | Saúde & Diagnósticos | | | Permite que você monitore e gerencie a integridade do servidor, do site e do aplicativo. |
|  |  |  |  | **?** | Registro em log HTTP | Habilita o registro em log da atividade do site para este servidor. |
|  |  |  |  |  | Ferramentas de registro em log | Instala scripts e ferramentas de log do IIS. |
|  |  |  |  | **?** | Monitor de Solicitações | Monitora a integridade do servidor, do site e do aplicativo. |
|  |  |  |  |  | Rastreamento | Habilita o rastreamento para aplicativos ASP.NET e solicitações com falha. |
|  |  |  |  |  | Registro Personalizado | Habilita o suporte para registro em log personalizado para servidores Web, sites e aplicativos. |
|  |  |  |  |  | Registo ODBC | Habilita o suporte para fazer logon em um banco de dados compatível com ODBC. |
|  |  |  | Segurança | | | Permite protocolos de segurança adicionais para proteger servidores, sites, aplicativos, vdirs e arquivos. |
|  |  |  |  |  | Autenticação Básica | Requer um nome de usuário e senha válidos do Windows para conexão. |
|  |  |  |  |  | Autenticação do Windows | Autentica clientes usando NTLM ou Kerberos. |
|  |  |  |  |  | Autenticação Resumida | Autentica clientes enviando um hash de senha para um controlador de domínio do Windows. |
|  |  |  |  |  | Autenticação de mapeamento de certificados de cliente | Autentica certificados de cliente com contas do Active Directory. |
|  |  |  |  |  | Autenticação de Mapeamento de Certificados de Cliente IIS | Mapeia certificados de cliente 1 para 1 ou muitos para 1 para uma identidade de segurança do Windows. |
|  |  |  |  |  | Autorização de URL | Autoriza o acesso do cliente às URLs que compõem um aplicativo Web. |
|  |  |  |  |  | Filtragem de solicitações | Configura regras para bloquear solicitações de cliente selecionadas. |
|  |  |  |  |  | Segurança de IP | Permite ou nega o acesso ao conteúdo com base no endereço IP ou no nome de domínio. |
|  |  | **%** | Desempenho | | |  |
|  |  |  |  | **?** | Compactação de conteúdo estático | Compacta o conteúdo estático antes de devolvê-lo a um cliente. |
|  |  |  |  |  | Compactação de conteúdo dinâmico | Compacta o conteúdo dinâmico antes de devolvê-lo a um cliente. |
| **%** | Ferramentas de Gerenciamento de Servidor Web | | | | | Instala o console e as ferramentas de gerenciamento do servidor Web. |
|  |  | **?** | Console de gerenciamento do IIS | | | Instala o Console de Gerenciamento de Servidor Web que dá suporte ao gerenciamento de servidores Web locais e remotos. |
|  |  |  | Ferramentas e scripts de gerenciamento do IIS | | | Gerencia um servidor Web local com scripts de configuração do IIS. |
|  |  |  | Serviço de Gerenciamento | | | Permite que esse servidor Web seja gerenciado remotamente de outro computador por meio do Console de Gerenciamento do servidor Web. |
|  |  |  | Compatibilidade de gerenciamento do IIS 6 | | | Permite que você use APIs e scripts existentes do IIS 6.0 para gerenciar esse servidor Web IIS 7.0 e superior. |
|  |  |  |  |  | Compatibilidade de configuração do IIS Metabase e IIS 6 | Instala a metabase do IIS e a camada de compatibilidade para permitir que chamadas de metabase interajam com o novo repositório de configuração do IIS 7.0 e acima. |
|  |  |  |  |  | Compatibilidade com WMI do IIS 6 | Instala interfaces de script WMI do IIS 6.0. |
|  |  |  |  |  | Ferramentas de Script do IIS 6 | Instala scripts de configuração do IIS 6.0. |
|  |  |  |  |  | Console de gerenciamento do IIS 6 | Instala o Console de Gerenciamento do IIS 6.0. Fornece suporte para a administração de servidores remotos do IIS 6.0 deste computador. |
|  | Serviço de publicação FTP | | | | | Instala o serviço FTP (File Transfer Protocol) e o console de gerenciamento FTP. Fornece suporte para upload e download de arquivos. |
|  |  |  | Servidor FTP | | | Instala o Serviço FTP. |
|  |  |  | Consola de Gestão de FTP | | | Instala o console de gerenciamento ftp para administração de servidores FTP locais e remotos. |

Chave:

|  |  |
| --- | --- |
|  | O recurso não é selecionado por padrão. |
| **%** | O recurso é selecionado por padrão, mas tem um ou mais sub-recursos não selecionados. |
| **?** | O recurso é selecionado por padrão - todos, se houver, sub-recursos também são selecionados. |

## Pacotes de recursos do IIS 7.0 e acima

Instalar o IIS 7.0 e versões superiores pelos assistentes do Gerenciador de Servidores ou dos Recursos do Windows requer apenas que você marque as caixas para cada recurso necessário. Quando e se você precisar instalar usando scripts de linha de comando ou arquivos autônomos, você deve saber os nomes reais dos componentes do IIS no pacote do IIS que representam esses recursos.

- Cada recurso selecionável do IIS na interface do usuário do Gerenciador do Servidor corresponde a um nome de atualização específico no Pacote do IIS.
- Para instalar os recursos do IIS usando a ferramenta de linha de comando Pkgmgr.exe ou usando um arquivo XML sem atenção do sistema operacional, você precisará usar os nomes de atualização de recursos do IIS.

### Atualizações de pacote

Cada um dos recursos do IIS mostrados na instalação está diretamente relacionado a uma atualização de pacote do IIS. A atualização do IIS de nível superior no pacote é IIS-WebServerRole. O próximo nível de atualizações agrupa as três principais áreas de recursos dentro do IIS-WebServerRole. Eles são:

- IIS-WebServer
- IIS-WebServerManagementTools
- IIS-FTPPublishingService

Cada um desses grupos contém uma ou mais atualizações que têm recursos instaláveis.

### Atualizações do IIS-WebServer

Todos os recursos do servidor Web são organizados em grupos na atualização IIS-WebServer:

- IIS-CommonHttpFeatures
- IIS-DesenvolvimentoDeAplicações
- IIS-HealthAndDiagnostics
- IIS-Security
- Desempenho do IIS

Cada um desses grupos contém uma ou mais atualizações que têm recursos instaláveis.

### Atualizações comuns de recursos HTTP

Os recursos do IIS agrupados em Recursos HTTP Comuns oferecem suporte para conteúdo estático do servidor Web, como arquivos HTML e imagem, erros personalizados e redirecionamento. Normalmente, esses recursos são sempre instalados com o IIS, embora você possa optar por omitir alguns ou todos esses recursos para configurações de finalidade especial.

- IIS-CommonHttpFeatures

  - IIS-ConteúdoEstático
  - IIS-DefaultDocument
  - IIS-DirectoryBrowsing
  - IIS-HttpErrors
  - IIS-HttpRedirect

### Atualizações de desenvolvimento de aplicativos

A atualização de Desenvolvimento de Aplicativos agrupa recursos que dão suporte à implantação de aplicativos Web e conteúdo dinâmico, como aplicativos ASP.NET, aplicativos ASP clássicos e extensões e filtros ISAPI. Escolha quais desses recursos serão instalados com base nos tipos de aplicativos que você pretende implantar em seu servidor Web.

- IIS-DesenvolvimentoDeAplicações

  - IIS-ASPNET
  - IIS-NetFxExtensibility
  - IIS-ASP
  - IIS-CGI
  - IIS-ISAPIExtensions
  - IIS-ISAPIFilter
  - IIS-Inclusões do Lado do Servidor

### Atualizações de Saúde e Diagnóstico

As atualizações de Saúde e Diagnóstico reúnem os recursos que habilitam o registro em log, o monitoramento de solicitações e o diagnóstico.

- IIS-HealthAndDiagnostics

  - IIS-HttpLogging
  - IIS-Bibliotecas de Registro
  - IIS-Monitor de Solicitações
  - IIS-HttpTracing
  - IIS-CustomLogging
  - IIS-ODBCLogging

### Atualizações de Segurança

A atualização de segurança agrupa todos os recursos de autenticação, autorização e filtragem.

- IIS-Security

  - IIS-BasicAuthentication
  - IIS-WindowsAuthentication
  - IIS-DigestAuthentication
  - IIS-ClientCertificateMappingAuthentication
  - IIS-IISCertificateMappingAuthentication
  - IIS-URLAuthorization
  - IIS-RequestFiltering
  - IIS-IPSecurity

A autenticação anônima não é opcionalmente instalável; ele sempre é instalado com todos os recursos do servidor Web.

### Desempenho

O agrupamento de atualização de desempenho inclui as duas atualizações de compactação para conteúdo estático e dinâmico.

- Desempenho do IIS

  - IIS-HttpCompressionStatic
  - IIS-HttpCompressionDynamic

### Ferramentas de gerenciamento

As ferramentas de gerenciamento da Web agrupam as ferramentas de gerenciamento do IIS 7.0 e superior, bem como as ferramentas de compatibilidade do IIS 6.0.

- IIS-WebServerManagementTools

  - IIS-ManagementConsole
  - IIS-ManagementScriptingTools
  - IIS-ManagementService
  - IIS-IIS6ManagementCompatibility

    - IIS-Metabase
    - IIS-WMICompatibility
    - IIS-LegacyScripts
    - IIS-LegacySnapIn

Observação

Se você usar scripts ou aplicativos que usam as APIs ABO ou ADSI, escolha instalar recursos do grupo IIS-IIS 6.0 ManagementCompatibility para fornecer compatibilidade com o IIS 7.0 e superior para essas ferramentas de gerenciamento. No mínimo, você deve instalar a atualização IIS-Metabase; se os scripts também usarem o provedor WMI do IIS, instale também a atualização IIS-WMICompatibility.

### Atualizações do serviço de publicação FTP

Essa atualização agrupa o servidor FTP e o console de gerenciamento ftp.

- IIS-FTPPublishingService

  - IIS-FTPServer
  - IIS-FTPManagement

### Atualizações do Serviço de Ativação do Processo do Windows

O WAS (Serviço de Ativação de Processo do Windows) inclui toda a infraestrutura necessária para fornecer um nível base de ativação e gerenciamento de processos, bem como infraestrutura de processamento HTTP.

- WAS-WindowsActivationService

  - WAS-ProcessModel
  - WAS-NetFxEnvironment
  - WAS-ConfigurationAPI

Todos os recursos agrupados sob a atualização de IIS-WebServer dependem dos recursos WAS, que devem ser instalados sempre que IIS-WebServer recursos estiverem selecionados. Ao instalar o IIS do Gerenciador do Servidor ou do Assistente de Recursos do Vista Windows, você não precisa fazer nenhuma seleção de WAS explícita.

## Atualizar dependências

Como você vê na [instalação do IIS 7.0 e superior no Windows Server 2008](install__installing-iis-7__installing-iis-7-and-above-on-windows-server-2008-or-windows-server-2008-r2.md)*,* a instalação do IIS usando o Assistente para Adicionar Funções do Gerenciador de Servidores também requer a instalação do WAS.

O Gerenciador de Servidores notifica você e instala as dependências necessárias automaticamente. Ao instalar atualizações de pacote por meio da linha de comando ou usando Unattend.xml, você precisará especificar explicitamente essas dependências.

### Dependências do IIS no WAS

Todos os recursos no grupo de atualização IIS-WebServer têm dependências dos recursos WAS:

- WAS-WindowsActivationService

  - WAS-ProcessModel
  - WAS-NetFxEnvironment
  - WAS-ConfigurationAPI

Essas três atualizações WAS são pré-requisitos para instalar recursos no grupo de atualizações IIS-WebServer.

### IIS 7.0 e superiores Dependências Internas

Alguns recursos do IIS 7.0 e superiores têm dependências em outras versões do IIS. Ao instalar o IIS por meio de interfaces do usuário, como o Gerenciador de Servidores, as dependências necessárias são instaladas automaticamente. Ao instalar atualizações de pacote por meio de linha de comando ou Unattend.xml, você deve especificar explicitamente essas dependências. As intra-dependências de atualização do IIS são resumidas abaixo:

| Atualização | Depende de |
| --- | --- |
| IIS-WebServer | WAS-ProcessModel– Todos os nós folha em IIS-WebServer exigem isso. |
| IIS-ASP | IIS-ISAPIExtensions IIS-FiltragemDeSolicitações |
| IIS-ASPNET | IIS-DefaultDocument IIS-NetFxExtensibility WAS-NetFxEnvironment IIS-ISAPIExtensions IIS-ISAPIFilter IIS-RequestFiltering |
| IIS-NetFxExtensibility | WAS-NetFxEnvironment IIS-RequestFiltering |
| IIS-ManagementService | IIS-WebServer (deve ter pelo menos um filho selecionado) IIS-ManagementConsole WAS-NetFxEnvironment WAS-ConfigurationAPI |
| IIS-ManagementConsole | WAS-ConfigurationAPI |
| IIS-ManagementScriptingTools | WAS-ConfigurationAPI |
| IIS-LegacyScripts | IIS-Metabase IIS-WMICompatibility |

### Dependências de atualização para grupos pai no IIS 7.0 e superiores.

Cada atualização do IIS tem uma dependência implícita em sua atualização de grupo pai. Por exemplo:

- IIS-StaticContent depende de IIS-CommonHttpFeatures.
- IIS-CommonHttpFeatures depende do IIS-WebServer.
- IIS-WebServer depende do IIS-WebServerRole.

Novamente, as ferramentas de configuração da interface do usuário, como o Gerenciador de Servidores, lidam com isso automaticamente, mas ao usar ferramentas de linha de comando para instalar uma atualização, você também deve instalar explicitamente todas as atualizações pai e quaisquer dependências adicionais. Informações adicionais sobre dependências de atualização estão na seção *Instalações Personalizadas**.*

## Instalação padrão do IIS 7.0 e superior

Cada atualização do IIS define seu comportamento de instalação padrão, que é usado por interfaces de usuário de instalação para determinar quais recursos são pré-selecionados. Clique em **Avançar** ao instalar usando uma interface do usuário de instalação. Depois de clicar em Avançar, você obterá uma instalação padrão do IIS, que instala a seguinte lista de atualizações:

### IIS-WebServer

- IIS-CommonHttpFeatures
- IIS-ConteúdoEstático
- IIS-DefaultDocument
- IIS-DirectoryBrowsing
- IIS-HttpErrors

### IIS-HealthAndDiagnostics

- IIS-HTTPLogging
- IIS-Monitor de Solicitações

### Desempenho do IIS

- IIS-HttpCompressionStatic

### IIS-WebServerManagementTools

- IIS-ManagementConsole

### WAS-WindowsActivationService

- WAS-ProcessModel
- WAS-ConfigurationAPI

Assim, a instalação padrão do IIS fornece um servidor de conteúdo estático básico com administração local e autenticação anônima. Para cada atualização do IIS instalada, a configuração padrão desse módulo é adicionada a ApplicationHost.config.

## Atualização do IIS 7.0 e Superior

A atualização das versões anteriores do IIS para o IIS 7.0 e superior é compatível com o Windows Vista e o Windows Server 2008, conforme detalhado abaixo:

- Versões do IIS/SO com suporte para atualização para o Windows Server 2008

  - IIS 6.0 no Windows Server 2003 (sem suporte no Vista Beta 2)
- Versões do IIS/sistema operacional com suporte para atualização para o Windows Vista

  - IIS 5.1 no Win XP (com suporte para Vista Beta 2)

A migração entre máquinas de versões anteriores do IIS para o IIS 7.0 e superior (por exemplo, mover sites do IIS para uma nova caixa) não é compatível com o Windows Vista ou o Windows Server 2008. A equipe do IIS espera fornecer uma ferramenta de migração do IIS que permitirá mover sites existentes entre computadores para o Windows Vista ou o Windows Server IIS 7.0 e superior.

### Etapas de atualização

A atualização do sistema operacional do Windows Vista e do Windows Server 2008 é pré-configurada em três fases distintas: detecção e coleta, instalação e aplicação de configurações. Essas etapas se aplicam somente a recursos e configurações do sistema operacional. Qualquer conteúdo do sistema de arquivos não criado ou de propriedade do Windows permanece intacto durante o processo de atualização. Assim, todo o conteúdo da Web no sistema operacional original está presente após a atualização.

### Detectar & recolher

Durante a atualização do sistema operacional para o Windows Vista ou o Windows Server 2008, os componentes de detecção do IIS são executados no sistema operacional existente antes do início da atualização real do sistema operacional. Se o IIS for detectado no sistema operacional Windows existente, todas as informações de estado de metabase e IIS serão coletadas e persistidas.

### Installation

A fase de instalação consiste em instalar o sistema operacional Windows Vista ou Server e, em seguida, instalar recursos opcionais, como o IIS, se forem detectados no sistema operacional original. A escolha das atualizações do IIS a serem instaladas baseia-se nas informações de estado do IIS coletadas do sistema operacional original.

### Aplicando configurações

Depois que a instalação do sistema operacional e as instalações opcionais de recursos, como o IIS, forem concluídas, as informações de estado coletadas do sistema operacional original serão aplicadas. Neste ponto, as configurações de metabase do IIS original (5.0 ou 6.0) são traduzidas e atualizadas para o novo repositório de configuração do IIS 7.0 e superior ApplicationHost.config.

## Componentes do IIS 7.0 e acima instalados durante a atualização

Durante a fase de detecção e coleta, a atualização do IIS verifica a presença dos principais serviços e arquivos do IIS e instala atualizações do IIS de acordo com a tabela a seguir:

| Lógica de detecção de nível inferior | Atualizações do IIS 7 e superior instaladas |
| --- | --- |
| W3SVC instalado como um serviço | IIS-ASP IIS-BasicAuthentication IIS-CGI IIS-ClientCertificateMappingAuthentication IIS-CustomLogging IIS-DefaultDocument IIS-DigestAuthentication IIS-DirectoryBrowsing IIS-HttpCompressionDynamic IIS-HttpCompressionStatic IIS-HttpErrors IIS-HTTPLogging IIS-HttpRedirect IIS-HttpTracing IIS-IISCertificateMappingAuthentication IIS-IPSecurity IIS-ISAPIExtensions IIS-ISAPIFilter IIS-LegacyScripts IIS-LoggingLibraries IIS-ManagementScriptingTools IIS-ManagementService IIS-ODBCLogging IIS-RequestFiltering IIS-RequestMonitor IIS-ServerSideIncludes IIS-StaticContent IIS-URLAuthorization IIS-WindowsAuthentication IIS-WMICompatibility WAS-ConfigurationAPI WAS-NetFxEnvironment WAS-ProcessModel |
| MSFTPSVC instalado como um serviço | IIS-FTPServer |
| INETMGR.EXE presente | IIS-FTPManagement IIS-LegacySnapIn IIS-ManagementConsole |
| IISAdmin instalado como um serviço | IIS-Metabase |

A instalação de atualizações durante uma atualização não é tão granular quanto possível em cenários de instalação do IIS limpos, pois as versões anteriores do IIS tinham granularidade de componente muito limitada. Consequentemente, quase todos os recursos do Servidor Web são instalados durante uma atualização. Portanto, você deve revisitar as dependências do aplicativo na funcionalidade do IIS e desinstalar atualizações do IIS que não são necessárias após uma atualização.

## Métodos de instalação do IIS 7.0 e superior

Há quatro métodos principais de instalação do IIS: interfaces de usuário dos Recursos Opcionais do Windows, ferramenta de linha de comando, arquivo autônomo e atualização. Os artigos "Como fazer" são fornecidos para todos os cenários, exceto a atualização.

Você deve usar diferentes interfaces de usuário do Windows no Windows Vista e no Windows Server 2008:

- No Windows Server 2008, use a Ferramenta do Gerenciador de Servidores.
- No Windows Vista (Cliente), use o Assistente para Adicionar/Remover Recursos do Windows.

Os cenários de linha de comando, arquivo não supervisionado e atualização estão disponíveis no Windows Vista e nas edições do Windows Server 2008.

## Ferramenta Gerenciador de Servidores

A Ferramenta gerenciador de servidores fornece a interface do usuário de instalação no Windows Server 2008 e substitui Gerenciar seu servidor no Windows Server 2003. O Gerenciador de Servidores também fornece painéis de gerenciamento de roles de servidor para cada função instalada, indicando o estado de instalação, o status atual e as tarefas de gerenciamento.

O artigo [Instalando o IIS 7.0 e Superior no Windows Server 2008](install__installing-iis-7__installing-iis-7-and-above-on-windows-server-2008-or-windows-server-2008-r2.md) fornece um passo a passo para instalar o IIS no Windows Server 2008 usando a nova ferramenta gerenciador de servidores.

![Captura de tela da janela Gerenciador do Servidor.](understanding-setup-in-iis/_static/image1.jpg)
  
Figura 1: Gerenciador de Servidores

## Assistente para Adicionar/Remover Recursos do Windows

No Windows Vista, os recursos opcionais são instalados quando você usa o Assistente para Adicionar/Remover Recursos do Windows, que é semelhante à funcionalidade do Assistente para Adicionar/Remover Componentes do Windows no Windows XP. O Assistente de Recursos do Windows fornece os mesmos recursos selecionáveis do IIS apresentados na Ferramenta do Gerenciador de Servidores.

O artigo [Instalando o IIS 7.0 e Superior no Windows Vista](install__installing-iis-7__installing-iis-on-windows-vista-and-windows-7.md) fornece um passo a passo passo para instalar o IIS no Windows Vista.

![Captura de tela da caixa de diálogo Recursos do Windows.](understanding-setup-in-iis/_static/image3.jpg)
  
Figura 2: Assistente para Adicionar/Remover Recursos do Windows

## Instalação da linha de comando do IIS

A novidade no Windows Vista e no Windows Server 2008 é a ferramenta de linha de comando Pkgmgr.exe. O Pkgmgr é usado para instalar e desinstalar recursos opcionais do Windows e substitui Sysocmgr.exe. O artigo [Instalar o IIS 7.0 e Superior da Linha de Comando](install__installing-iis-7__installing-iis-from-the-command-line.md) fornece um passo a passo da instalação do IIS no Windows Vista ou no Windows Server 2008 usando a ferramenta pkgmgr.

## Configuração não assistida da linha de comando

Pkgmgr.exe também pode aceitar entrada de um arquivo unattend.xml. Use este arquivo para listar as atualizações a serem instaladas ou desinstaladas. O artigo [Instalando o IIS 7.0 e Superior via Instalação Não Assistida](install__installing-iis-7__using-unattended-setup-to-install-iis.md) fornece um passo a passo da instalação do IIS no sistema Windows Vista ou Windows Server 2008 usando um arquivo de resposta e a ferramenta Pkgmgr.

## Instalações personalizadas

Cada um dos quatro passo a passo descritos na seção anterior fornece instruções passo a passo para instalar todos os recursos do IIS. A instalação de todos os recursos do IIS é necessária se você pretende experimentar o passo a passo de outros recursos do IIS no <https://www.iis.net>, mas não é recomendada para cenários práticos de desenvolvimento ou implantação.

Ao planejar uma instalação do IIS para seus ambientes de desenvolvimento ou implantação, você deve instalar apenas os recursos exigidos por seus aplicativos. Minimizar os componentes do IIS instalados dessa maneira tem vários benefícios:

- O desempenho foi melhorado ao reduzir o número de módulos de pipeline carregados na memória.
- Segurança aprimorada reduzindo o número de componentes do IIS que exigem administração.
- Segurança aprimorada reduzindo o número de componentes que poderiam ser potencialmente explorados.
- Melhora sua compreensão das dependências do aplicativo em módulos do IIS.

## Considerações de planejamento para instalações personalizadas

Inicie o planejamento de implantação do IIS dividindo os recursos necessários em três áreas principais: Compatibilidade de Gerenciamento do IIS 6.0, Gerenciamento da Web, Servidor FTP e Servidor Web. Cada uma delas é revisada nas seções a seguir.

### Compatibilidade de gerenciamento do IIS 6.0

As versões anteriores do IIS usavam APIs e provedores WMI para ler e gravar configurações de metabase. Essas APIs não fazem parte da instalação padrão do IIS 7.0 e acima e devem ser selecionadas explicitamente para instalação.

Se você tiver scripts ou aplicativos que dependem de APIs do IIS, como ABO ou ADSI, ou provedores WMI do IIS 6.0, inclua as seguintes atualizações de pacote do IIS em sua instalação:

- IIS-Metabase
- IIS-WMICompatibility

Muitos dos scripts do IIS 6.0 também podem ser instalados usando esta atualização:

- IIS-LegacyScripts

Observação

O Console de Gerenciamento do IIS 6.0 que pode ser instalado por meio da atualização IIS-LegacySnapIn não permite que você use o Console de Gerenciamento do MMC do IIS 6.0 para gerenciar o IIS 7.0 e acima do servidor Web. O Console de Gerenciamento do IIS 6.0 é fornecido para permitir que você gerencie servidores Web do IIS 6.0 que hospedam o Windows Server 2003.

### Gerenciamento da Web

Com o IIS, você tem várias opções sobre como o servidor Web será gerenciado. Você pode escolher somente gerenciamento remoto, somente gerenciamento local ou instalar o suporte para ambos. O console de gerenciamento local é instalado pela atualização do pacote do IIS IIS-ManagementConsole. Para o gerenciamento remoto, você deve instalar a atualização IIS-ManagementService. O Serviço de Gerenciamento permite que você se conecte a um servidor Web do IIS a partir de um Console de Gerenciamento instalado em um computador diferente do servidor.

### Servidor FTP

As considerações do SERVIDOR FTP não são alteradas em relação às versões anteriores do IIS. Para instalar apenas o serviço FTP, sem gerenciamento local, use a atualização IIS-FTPServer. Para instalar o console de gerenciamento local para o servidor FTP, use a atualização IIS-FTPManagement.

### Servidor Web

Aqui, as coisas se tornam mais interessantes: o recurso servidor Web do IIS tem o nível mais alto de granularidade instalável de todos os recursos do IIS. Conforme explicado na discussão anterior sobre atualizações de pacote do IIS, há cinco grandes agrupamentos de recursos na área de recursos do Servidor Web:

- IIS-CommonHttpFeatures – Fornece suporte básico para conteúdo estático HTTP e mensagens de erro.
- IIS-ApplicationDevelopment – Fornece suporte para extensões de aplicativo do Servidor Web do IIS.
- IIS-HealthAndDiagnostics – Fornece suporte para registro de logs, status de runtime e rastreamento de requisições.
- IIS-Security – Fornece recursos adicionais de autenticação e autorização além da autenticação anônima.
- IIS-Performance – fornece compactação de conteúdo estático e dinâmico.

Os recursos do IIS em cada um desses grupos foram discutidos acima na seção *Atualizações do Pacote do IIS**.* Você deve examinar as necessidades do aplicativo de servidor e escolher apenas os recursos do Servidor Web que você deve ter.

### Exemplo de instalação personalizada

Para este exemplo, consideramos configurar um servidor Web hipotético com os seguintes atributos:

1. Precisa de suporte para conteúdo estático, mas não deseja permitir a navegação de diretório.
2. É necessário suporte para registro em log e status de tempo de execução.
3. Precisa de suporte para ASP.NET.
4. Precisa dar suporte ao gerenciamento remoto.
5. Precisa de suporte para autenticação do Windows.
6. Precisa de suporte para compactação de conteúdo estático e dinâmico.

Também adicionaremos um requisito adicional para que a instalação seja implantável em vários servidores como um script.

Agora, usamos essa lista de funcionalidades necessárias e as descrições de atualização na seção *Atualizações de Pacote do IIS* para determinar quais das atualizações de pacote do IIS precisaremos.

### Etapa 1: determinar as atualizações necessárias

Para o item 1, precisamos das seguintes atualizações:

- IIS-ConteúdoEstático
- IIS-DefaultDocument
- IIS-HttpErrors
- IIS-HttpRedirect

Também queremos garantir que IIS-DirectoryBrowsing não esteja instalado (já que faz parte de uma instalação padrão, consulte s. 4.)

Para o item 2, precisamos das seguintes atualizações:

- IIS-HTTPLogging
- IIS-Monitor de Solicitações

Para o item 3, precisamos da atualização IIS-ASPNET.

Para o item 4, precisamos do IIS-ManagementService.

Para os itens 5, precisamos da atualização IIS-WindowsAuthentication.

Por fim, para o item 6, precisamos das atualizações de IIS-HttpCompressionStatic e IIS-HttpCompressionDynamic.

Neste ponto, temos as informações necessárias para usar as ferramentas de interface do usuário de instalação e selecionar os componentes necessários e desmarcar aqueles que não precisamos. Mas como pretendemos implantar essa configuração de servidor Web em vários servidores, devemos criar um script que nos dê a configuração de pacote necessária. Conforme discutido na seção *Atualizações de Pacote do IIS**,* nossos scripts devem declarar explicitamente quaisquer dependências de atualizações principais e/ou de recursos para as atualizações que desejamos instalar.

Tomando dependências de um item de cada vez, a seção a seguir descreve as ações necessárias para esse processo.

### Etapa 2: Determinar pais e dependências

Para o item 1, precisamos das seguintes atualizações de entidade principal:

- IIS-WebServerRole
- IIS-WebServer
- IIS-CommonHttpFeatures

Observação

Todas as atualizações de recursos de folha do Servidor Web têm como pais em comum o IIS-WebServer e o IIS-WebServerRole.

Para o item 1, também vemos na seção *IIS Dependencies on WAS* que devemos adicionar as seguintes atualizações WAS:

- WAS-WindowsActivationService
- WAS-ProcessModel

Observação

Todas as atualizações em IIS-WebServer compartilham uma dependência dessas atualizações do WAS.

Para o item 2, a atualização principal é: IIS-HealthAndDiagnostics. As duas notas acima se aplicam aqui.

Para o item 3, a atualização principal é: IIS-ApplicationDevelopment. As duas notas acima se aplicam aqui. Examinando a seção *IIS Intra-Dependencies,* vemos que IIS-ASPNET depende das seguintes atualizações:

- IIS-DefaultDocument
- IIS-NetFxExtensibility
- WAS-NetFxEnvironment
- IIS-ISAPIExtensions
- IIS-ISAPIFilter
- IIS-RequestFiltering

Para o item 4, a atualização principal é: IIS-WebServerManagementTools. (Nenhuma das anotações acima se aplica aqui.) A seção *Intra-Dependencies do IIS* explica ainda que IIS-ManagementService depende das atualizações a seguir.

- IIS-ManagementConsole
- WAS-NetFxEnvironment
- WAS-ConfigurationAPI

A atualização pai para o item 5 é: IIS-Security. (Nenhuma das anotações acima se aplica aqui.)

Para o item 6, a atualização principal é o IIS-Performance. (Nenhuma das anotações acima se aplica aqui.)

### Etapa 3: Agrupar atualizações em pais

Agora, usamos a lista de atualizações necessárias com seus pais e dependências e as agrupamos na lista a seguir, reagrupando atualizações com seus pais conforme necessário. Também iremos integrar essas atualizações para garantir que não estejam instaladas e as marcaremos com um asterisco ('\*'):

- IIS-WebServerRole
- IIS-WebServer
- IIS-CommonHttpFeatures
- IIS-ConteúdoEstático
- IIS-DefaultDocument
- IIS-DirectoryBrowsing\*
- IIS-HttpErrors
- IIS-HttpRedirect
- IIS-DesenvolvimentoDeAplicações
- IIS-ASPNET
- IIS-NetFxExtensibility
- IIS-ISAPIExtensions
- IIS-ISAPIFilter
- IIS-HealthAndDiagnostics
- IIS-HTTPLogging
- IIS-Monitor de Solicitações
- IIS-Security
- IIS-WindowsAuthentication
- IIS-RequestFiltering
- Desempenho do IIS
- IIS-HttpCompressionStatic
- IIS-HttpCompressionDynamic
- IIS-WebServerManagementTools
- IIS-ManagementConsole
- IIS-ManagementService
- WAS-WindowsActivationService
- WAS-ProcessModel
- WAS-NetFxEnvironment
- WAS-ConfigurationAPI

### Etapa 4: Colocar lista de atualizações no arquivo Unattend.xml

Nesta etapa, em vez de instalar todos os recursos do IIS, instalamos apenas os que precisamos para nosso exercício e definimos o estado do atributo de marca="**false**" para as atualizações que normalmente são instaladas por padrão. O arquivo de Unattend.xml resultante é mostrado abaixo.

```
<xmlns:wcm="http://schemas.microsoft.com/WMIConfig/2002/State"> 
        name="Microsoft-Windows-Foundation-Package" 
        version="6.0.5308.6" 
        language="neutral" 
        processorArchitecture="x86" 
        publicKeyToken="31bf3856ad364e35" 
        versionScope="nonSxS" 
/>
```

## Resumo

Novidades na configuração do Windows Vista e do Windows Server 2008:

- A instalação do Windows Server 2008 agora é baseada em componentes declarativos que usam manifestos.
- As versões do sistema operacional são montadas a partir desses componentes.
- Sysocmgr.exe agora é substituído por Pkgmgr.exe para instalação opcional de recursos.
- A mesma versão do IIS está no Windows Vista e no Windows Server 2008 Editions.
- Servidores seguros habilitados por meio da instalação – com o IIS, não só são componentes desnecessários desabilitados, mas eles nem sequer estão instalados.

Várias maneiras de instalar o IIS 7.0 e superior:

- Servidor – Ferramenta de Gerenciamento de Funções
- Vista – Adicionar/remover recursos do Windows
- Arquivo Unattend.xml que faz referência a manifestações do IIS
- Atualização – Atualização in-loco do sistema operacional para o IIS

Novas vantagens significativas da configuração baseada em componentes para o IIS:

- O IIS usa componentes do Windows para instalar apenas os módulos necessários.
- Os módulos instalados usam padrões protegidos e são bloqueados.
- O IIS apresenta uma superfície de ataque reduzida e uma manutenção simplificada.

## Links Relacionados

Consulte os seguintes recursos para obter mais informações:

- [Instalando o IIS 7.0 e Superior no Windows Server 2008](install__installing-iis-7__installing-iis-7-and-above-on-windows-server-2008-or-windows-server-2008-r2.md)
- [Instalando o IIS 7.0 e Superior no Windows Vista](install__installing-iis-7__installing-iis-on-windows-vista-and-windows-7.md)
- [Instalando o IIS 7.0 e posteriores pela linha de comando](install__installing-iis-7__installing-iis-from-the-command-line.md)
- [Usando a instalação autônoma para instalar com o IIS 7.0 e superior](install__installing-iis-7__using-unattended-setup-to-install-iis.md)

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
