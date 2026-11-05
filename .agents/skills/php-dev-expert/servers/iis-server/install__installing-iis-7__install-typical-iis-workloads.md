# Instalar cargas de trabalho típicas do IIS | Microsoft Learn

> **Fonte / Source:** https://learn.microsoft.com/pt-br/iis/install/installing-iis-7/install-typical-iis-workloads

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

# Instalar cargas de trabalho típicas do IIS

Comentários

por [Saad Ladki](https://twitter.com/saadladki)

## Introdução

A arquitetura modular do IIS 7.0 e superior foi projetada para permitir que o profissional de TI personalize exatamente quais recursos estão instalados e em execução no servidor Web. O IIS agora está incluído em mais de 40 módulos de funcionalidades que podem ser instalados de forma independente no servidor, reduzindo drasticamente a superfície potencial de ataque, diminuindo os requisitos de recursos e minimizando os riscos de atualização e segurança.

Para aproveitar ao máximo essa arquitetura modular, você deve planejar sua instalação do IIS para corresponder aos requisitos dos aplicativos que você implantará. Isso minimizará os recursos do IIS instalados, permitindo que você aproveite os benefícios da arquitetura modular do IIS. Começaremos considerando várias configurações comuns de carga de trabalho e, em seguida, examinaremos como elas podem ser combinadas e modificadas.

## Pré-requisitos

Este artigo aborda a instalação do IIS 7.0 e superior no Vista e no Windows Server® 2008. Este artigo não instruirá você sobre como usar as tecnologias de instalação do Vista/Windows Server 2008; detalhes específicos sobre como usar interfaces de usuário de instalação ou ferramentas de linha de comando para instalar o IIS podem ser encontrados em:

- [Instalando o IIS 7.0 no Windows Server 2008](install__installing-iis-7__installing-iis-7-and-above-on-windows-server-2008-or-windows-server-2008-r2.md)
- [Instalando o IIS 7.0 no Windows Vista](install__installing-iis-7__installing-iis-on-windows-vista-and-windows-7.md)
- [Instalando o IIS 7.0 da linha de comando](install__installing-iis-7__installing-iis-from-the-command-line.md)
- [Usando a instalação autônoma para instalar o IIS](install__installing-iis-7__using-unattended-setup-to-install-iis.md)

## Cargas de trabalho do IIS principal

Nesta seção, consideraremos várias cargas de trabalho comuns que tipificam instalações específicas da tarefa do IIS. Essas cargas de trabalho podem servir como pontos de partida para personalizar uma instalação do IIS para atender às suas necessidades específicas.

As cargas de trabalho comuns do IIS que consideraremos são:

- Instalação Padrão – Servidor Web de Conteúdo Estático
- ASP.NET
- ASP clássico
- Instalação completa do IIS

### Combinando e modificando cargas de trabalho

No IIS, você é livre para escolher os recursos exatos a serem instalados para corresponder à carga de trabalho. Na seção acima, examinamos várias cargas de trabalho típicas com as quais um servidor Web do IIS pode ser configurado. Combinar cargas de trabalho é um processo simples de adicionar os recursos de uma ou mais cargas de trabalho em sua instalação.

Também é possível modificar essas cargas de trabalho removendo recursos que você não deseja permitir, por exemplo, Navegação de Diretório ou adicionando recursos adicionais, como autenticação ou autorização.

Seções adicionais fornecerão diretrizes sobre como adicionar suporte para gerenciamento local e remoto, segurança, diagnóstico e compatibilidade do IIS 6.0 às cargas de trabalho comuns.

### Instalação Padrão – Servidor Web de Conteúdo Estático

O servidor Web de conteúdo estático é o perfil de instalação mais básico e comumente usado e geralmente é usado em conjunto com outras cargas de trabalho. Os padrões de instalação pré-selecionados do IIS fornecem todos os módulos do IIS necessários para dar suporte a essa carga de trabalho. Isso inclui a capacidade de fornecer arquivos html estáticos, documentos e imagens. Além disso, há suporte para documento padrão, navegação de diretório, registro em log e autenticação anônima. O Console de Gerenciamento do IIS também está instalado.

Para instalar os recursos do IIS para o Servidor Web de Conteúdo Estático na interface do usuário de instalação do Vista/Windows Server 2008, selecione os seguintes recursos do IIS pelo nome da interface do usuário:

| Nome da interface do usuário | Nome da atualização |
| --- | --- |
| Conteúdo estático | IIS-ConteúdoEstático |
| Documento padrão | IIS-DefaultDocument |
| Navegação em diretórios | IIS-DirectoryBrowsing |
| Erros HTTP | IIS-HttpErrors |
| Registro em log HTTP | IIS-HttpLogging |
| Ferramentas de registro em log | IIS-Bibliotecas de Registro |
| Monitor de Solicitações | IIS-HttpTracing |
| Filtragem de solicitações | IIS-RequestFiltering |
| Compactação de conteúdo estático | IIS-HttpCompressionStatic |
| Console de gerenciamento do IIS | IIS-ManagementConsole |

Para instalar recursos do IIS para o Servidor Web de Conteúdo Estático via pkgmgr.exe use a seguinte linha de comando:

```
Start /w pkgmgr /iu:IIS-WebServerRole;IIS-WebServer;IIS-CommonHttpFeatures;IIS-StaticContent;IIS-DefaultDocument;IIS-DirectoryBrowsing;IIS-HttpErrors; IIS-HealthAndDiagnostics;IIS-HttpLogging;IIS-LoggingLibraries;IIS-RequestMonitor;IIS-Security;IIS-RequestFiltering;IIS-HttpCompressionStatic;IIS-WebServerManagementTools;IIS-ManagementConsole; WAS-WindowsActivationService;WAS-ProcessModel;WAS-NetFxEnvironment;WAS-ConfigurationAPI
```

Para instalar recursos do IIS para o Servidor Web de Conteúdo Estático via ServerManagerCmd.exe use a seguinte linha de comando:

```
ServerManager –install Web-Server
```

## Carga de trabalho ASP.NET

Desde sua primeira versão ASP.NET tem sido a plataforma escolhida para desenvolver aplicativos Web na plataforma Windows/IIS. O IIS leva ASP.NET para o próximo nível, integrando o modelo de extensibilidade ASP.NET runtime com o servidor principal. Isso permite que os desenvolvedores estendam totalmente o servidor IIS com a riqueza de ASP.NET 2.0 e do .NET Framework. Para obter uma visão geral completa de como ASP.NET funcionalidade agora pode ser usada com todos os recursos do IIS, consulte o artigo: [ASP.NET Integração com O IIS7 e Superior](application-frameworks__building-and-running-aspnet-applications__aspnet-integration-with-iis.md).

A carga de trabalho ASP.NET estende a carga de trabalho de conteúdo estático adicionando módulos para extensibilidade do .NET, filtragem de solicitações, filtros ISAPI e extensões ISAPI para ASP.NET.

Para instalar recursos do IIS para ASP.NET na interface do usuário de instalação do Vista/Windows Server 2008, selecione os seguintes recursos do IIS por nome da interface do usuário (além dos recursos para conteúdo estático):

| Nome da interface do usuário | Nome da atualização |
| --- | --- |
| ASP.NET | IIS-ASPNET |
| Extensibilidade .NET | IIS-NetFxExtensibility |
| Filtragem de solicitações | IIS-RequestFiltering |
| ISAPI | IIS-ISAPIFilter |
| Extensões de ISAPI | IIS-ISAPIExtensions |

Para instalar os recursos do IIS para ASP.NET juntamente com os recursos do Servidor Web de Conteúdo Estático via pkgmgr.exe, use a seguinte linha de comando:

```
Start /w pkgmgr /iu:IIS-WebServerRole;IIS-WebServer;IIS-CommonHttpFeatures;IIS-StaticContent;IIS-DefaultDocument;IIS-DirectoryBrowsing;IIS-HttpErrors;IIS-ApplicationDevelopment;IIS-ASPNET;IIS-NetFxExtensibility;IIS-ISAPIExtensions;IIS-ISAPIFilter;IIS-HealthAndDiagnostics;IIS-HttpLogging;IIS-LoggingLibraries;IIS-RequestMonitor;IIS-Security;IIS-RequestFiltering;IIS-HttpCompressionStatic;IIS-WebServerManagementTools;IIS-ManagementConsole; WAS-WindowsActivationService;WAS-ProcessModel;WAS-NetFxEnvironment;WAS-ConfigurationAPI
```

Para instalar recursos do IIS para ASP.NET via ServerManagerCmd.exe, use a seguinte linha de comando:

```
ServerManagerCmd -install Web-Server 
ServerManagerCmd -install Web-ASP-Net 
ServerManagerCmd -install Web-Net-Ext 
ServerManagerCmd -install Web-Filtering 
ServerManagerCmd -install Web-ISAPI-Filter 
ServerManagerCmd -install Web-ISAPI-Ext
```

É possível instalar o suporte para extensibilidade do .NET e módulos gerenciados sem instalar o suporte para ASP.NET. Usando o recurso de extensibilidade do .NET do IIS, os desenvolvedores podem criar soluções que agregam valor para todos os componentes do aplicativo, como esquemas de autenticação personalizados, monitoramento e registro em log, filtragem de segurança, balanceamento de carga, redirecionamento de conteúdo e gerenciamento de estado. Saiba mais no artigo [Desenvolvendo um módulo usando o .NET.](develop__runtime-extensibility__developing-a-module-using-net.md)

Para instalar os recursos do IIS para Módulos Gerenciados da interface do usuário de instalação do Vista/Windows Server 2008, selecione os seguintes recursos do IIS por nome da interface do usuário (além de recursos para conteúdo estático):

| Nome da interface do usuário | Nome da atualização |
| --- | --- |
| Extensibilidade .NET | IIS-NetFxExtensibility |

Para instalar os recursos do IIS para Módulos Gerenciados, juntamente com os recursos do Servidor Web de Conteúdo Estático via pkgmgr.exe, use a seguinte linha de comando:

```
Start /w pkgmgr /iu:IIS-WebServerRole;IIS-WebServer;IIS-CommonHttpFeatures;IIS-StaticContent;IIS-DefaultDocument;IIS-DirectoryBrowsing;IIS-HttpErrors;IIS-ApplicationDevelopment;IIS-NetFxExtensibility;IIS-ISAPIExtensions;IIS-ISAPIFilter;IIS-HealthAndDiagnostics;IIS-HttpLogging;IIS-LoggingLibraries;IIS-RequestMonitor;IIS-Security;IIS-RequestFiltering;IIS-HttpCompressionStatic;IIS-WebServerManagementTools;IIS-ManagementConsole;WAS-WindowsActivationService;WAS-ProcessModel;WAS-NetFxEnvironment;WAS-ConfigurationAPI
```

Para instalar recursos do IIS para Módulos Gerenciados por meio de ServerManagerCmd.exe, use a seguinte linha de comando:

```
ServerManagerCmd -install Web-Server 
ServerManagerCmd -install Web-Net-Ext
```

## Instalar pacote ASP clássico

A carga de trabalho asp clássica amplamente usada para servir páginas de .asp com script do lado do servidor se baseia na carga de trabalho de conteúdo estático adicionando módulos para ASP, Filtragem de Solicitações e Extensões ISAPI.

Para instalar os recursos do IIS para ASP Clássico na interface do usuário de instalação do Vista/Windows Server 2008, selecione os seguintes recursos do IIS por nome da interface do usuário (além dos recursos para conteúdo estático):

| Nome da interface do usuário | Nome da atualização |
| --- | --- |
| ASP | IIS-ASP |
| Filtragem de solicitações | IIS-RequestFiltering |
| Extensões de ISAPI | IIS-ISAPIExtensions |

Para instalar recursos do IIS para ASP Clássico, juntamente com recursos para o Servidor Web de Conteúdo Estático por meio de pkgmgr.exe, use a seguinte linha de comando:

```
Start /w pkgmgr /iu:IIS-WebServerRole;IIS-WebServer;IIS-CommonHttpFeatures;IIS-StaticContent;IIS-DefaultDocument;IIS-DirectoryBrowsing;IIS-HttpErrors;IIS-ApplicationDevelopment;IIS-ASP;IIS-ISAPIExtensions;IIS-HealthAndDiagnostics;IIS-HttpLogging;IIS-LoggingLibraries;IIS-RequestMonitor;IIS-Security;IIS-RequestFiltering;IIS-HttpCompressionStatic;IIS-WebServerManagementTools;IIS-ManagementConsole; WAS-WindowsActivationService;WAS-ProcessModel;WAS-NetFxEnvironment;WAS-ConfigurationAPI
```

Para instalar os recursos do IIS para o ASP Clássico via ServerManagerCmd.exe, use a seguinte linha de comando:

```
ServerManagerCmd -install Web-Server 
ServerManagerCmd -install Web-ASP 
ServerManagerCmd -install Web-Filtering 
ServerManagerCmd -install Web-ISAPI-Ext
```

## IIS 7.0 e Instalação Completa e Superior

Como um desenvolvedor ou um que está apenas avaliando o IIS, você pode simplesmente querer apenas instalar todos os 40 recursos do IIS: isso certamente garantirá que você não está perdendo nada; mas, realisticamente, mesmo em um ambiente de desenvolvimento, há vantagens em limitar sua instalação apenas aos recursos necessários para o aplicativo pretendido. Fazer seu desenvolvimento em uma instalação parcial do IIS garantirá que você tenha uma compreensão das dependências do módulo do IIS do aplicativo. Também pode ser verdade que os servidores de destino nos quais seus aplicativos IIS serão implantados não serão configurados com uma instalação completa. A correspondência da instalação do IIS em seu computador de desenvolvimento com a do computador de hospedagem de destino garantirá que seu aplicativo possa ser executado conforme o esperado quando implantado.

Para instalar todos os recursos do IIS na interface do usuário de instalação do Vista/Windows Server 2008, selecione todos os recursos do IIS exibidos na interface do usuário de instalação. Para instalar todos os recursos do IIS por meio de pkgmgr.exe, use a seguinte linha de comando:

```
start /w pkgmgr /iu:IIS-WebServerRole;IIS-WebServer;IIS-CommonHttpFeatures;IIS-StaticContent;IIS-DefaultDocument;IIS-DirectoryBrowsing;IIS-HttpErrors;IIS-HttpRedirect;IIS-ApplicationDevelopment;IIS-ASPNET;IIS-NetFxExtensibility;IIS-ASP;IIS-CGI;IIS-ISAPIExtensions;IIS-ISAPIFilter;IIS-ServerSideIncludes;IIS-HealthAndDiagnostics;IIS-HttpLogging;IIS-LoggingLibraries;IIS-RequestMonitor;IIS-HttpTracing;IIS-CustomLogging;IIS-ODBCLogging;IIS-Security;IIS-BasicAuthentication;IIS-WindowsAuthentication;IIS-DigestAuthentication;IIS-ClientCertificateMappingAuthentication;IIS-IISCertificateMappingAuthentication;IIS-URLAuthorization;IIS-RequestFiltering;IIS-IPSecurity;IIS-Performance;IIS-HttpCompressionStatic;IIS-HttpCompressionDynamic;IIS-WebServerManagementTools;IIS-WebServerManagementTools;IIS-ManagementConsole;IIS-ManagementScriptingTools;IIS-ManagementService;IIS-IIS6ManagementCompatibility;IIS-Metabase;IIS-WMICompatibility;IIS-LegacyScripts;IIS-LegacySnapIn;IIS-FTPPublishingService;IIS-FTPServer;IIS-FTPManagement;WAS-WindowsActivationService;WAS-ProcessModel;WAS-NetFxEnvironment;WAS-ConfigurationAPI
```

Para instalar todos os recursos do IIS por meio de ServerManagerCmd.exe, use a seguinte linha de comando:

```
ServerManagerCmd -install Web-Server -a
```

## Adicionando diagnósticos

A carga de trabalho de conteúdo estático padrão inclui recursos de registro em log HTTP e Monitor de Solicitações para solicitações de registro em log e execução de solicitações de monitoramento, mas há recursos adicionais do IIS 7.0 que você pode usar para aprimorar os recursos de registro em log e rastreamento do IIS:

- Rastreamento
- Registro Personalizado
- Registo ODBC

Desses recursos, o Rastreamento fornece uma nova e poderosa maneira de depurar e diagnosticar problemas de aplicativo do IIS em ambientes de produção, assim como em ambientes de desenvolvimento. (Consulte o artigo [Solução de problemas de solicitações com falha usando o rastreamento no IIS7 e acima](troubleshoot__using-failed-request-tracing__troubleshooting-failed-requests-using-tracing-in-iis.md)) Os recursos de log personalizado e log ODBC existem para compatibilidade com o IIS 6.0 e você só precisará instalá-los se tiver o IIS 6.0 existente que aproveite esses recursos.

Para instalar o recurso de Rastreamento do IIS na interface do usuário de instalação do Vista/Windows Server 2008, selecione os seguintes recursos do IIS por nome da interface do usuário (além dos recursos para conteúdo estático):

| Nome da interface do usuário | Nome da atualização |
| --- | --- |
| Rastreamento | IIS-HttpTracing |

Para instalar os recursos do IIS para Rastreamento, juntamente com os recursos do Servidor Web de Conteúdo Estático via pkgmgr.exe, use a seguinte linha de comando:

```
Start /w pkgmgr /iu:IIS-WebServerRole;IIS-WebServer;IIS-CommonHttpFeatures;IIS-StaticContent;IIS-DefaultDocument;IIS-DirectoryBrowsing;IIS-HttpErrors;IIS-HealthAndDiagnostics;IIS-HttpLogging;IIS-LoggingLibraries;IIS-HttpTracing;IIS-Security;IIS-RequestFiltering;IIS-HttpCompressionStatic;IIS-WebServerManagementTools;IIS-ManagementConsole; WAS-WindowsActivationService;WAS-ProcessModel;WAS-NetFxEnvironment;WAS-ConfigurationAPI
```

Para instalar recursos do IIS para Rastreamento por meio de ServerManagerCmd.exe, use a seguinte linha de comando:

```
ServerManagerCmd -install Web-Server 
ServerManagerCmd -install Web-Http-Tracing
```

## Adicionando recursos de segurança

O IIS sempre inclui suporte para autenticação anônima, nenhuma ação de instalação especial precisa ser especificada para obter esse suporte. Se você não quiser permitir a autenticação anônima, ele poderá ser desabilitado no Console de Gerenciamento. Além da autenticação anônima, o IIS dá suporte a muitos mecanismos opcionais de autenticação e autorização para permitir que você proteja melhor seus sites.

### Recursos de autenticação do IIS

Para instalar recursos do IIS para autenticação na interface do usuário de instalação do Vista/Windows Server 2008, selecione entre os seguintes recursos do IIS pelo nome da interface do usuário (além dos recursos para conteúdo estático):

| Nome da interface do usuário | Nome da atualização |
| --- | --- |
| Autenticação Básica | IIS-BasicAuthentication |
| Autenticação do Windows | IIS-WindowsAuthentication |
| Autenticação Resumida | IIS-DigestAuthentication |
| Autenticação de mapeamento de certificados de cliente | IIS-ClientCertificateMappingAuthentication |
| Autenticação de Mapeamento de Certificados de Cliente IIS | IIS-IISCertificateMappingAuthentication |

Para instalar recursos do IIS para autenticação, juntamente com os recursos do Servidor Web de Conteúdo Estático via pkgmgr.exe, use a seguinte linha de comando:

```
Start /w pkgmgr /iu:IIS-WebServerRole;IIS-WebServer;IIS-CommonHttpFeatures;IIS-StaticContent;IIS-DefaultDocument;IIS-DirectoryBrowsing;IIS-HttpErrors;IIS-HealthAndDiagnostics;IIS-HttpLogging;IIS-LoggingLibraries;IIS-RequestMonitor;IIS-Security;IIS-BasicAuthentication;IIS-WindowsAuthentication;IIS-DigestAuthentication;IIS-ClientCertificateMappingAuthentication;IIS-IISCertificateMappingAuthentication;IIS-RequestFiltering;IIS-HttpCompressionStatic;IIS-WebServerManagementTools;IIS-ManagementConsole; WAS-WindowsActivationService;WAS-ProcessModel;WAS-NetFxEnvironment;WAS-ConfigurationAPI
```

Para instalar recursos do IIS para autenticação via ServerManagerCmd.exe, use a seguinte linha de comando:

```
ServerManagerCmd -install Web-Server 
ServerManagerCmd -install Web-Basic-Auth 
ServerManagerCmd -install Web-Windows-Auth 
ServerManagerCmd -install Web-Digest-Auth 
ServerManagerCmd -install Web-Client-Auth 
ServerManagerCmd -install Web-Cert-Auth
```

### Recursos de autorização do IIS 7.0 e acima

Para instalar recursos do IIS para autorização da interface do usuário de instalação do Vista/Windows Server 2008, selecione entre os seguintes recursos do IIS pelo nome da interface do usuário (além dos recursos para conteúdo estático):

| Nome da interface do usuário | Nome da atualização |
| --- | --- |
| Autorização de URL | IIS-URLAuthorization |
| Filtragem de solicitações | IIS-RequestFiltering |
| Segurança de IP | IIS-IPSecurity |

Observação

O recurso Filtragem de Solicitações faz parte da instalação padrão e só deve ser excluído de suas instalações depois de considerar todos os problemas de segurança relacionados a esse recurso.

Para instalar recursos do IIS para autorização, juntamente com os recursos do Servidor Web de Conteúdo Estático via pkgmgr.exe, use a seguinte linha de comando:

```
Start /w pkgmgr /iu:IIS-WebServerRole;IIS-WebServer;IIS-CommonHttpFeatures;IIS-StaticContent;IIS-DefaultDocument;IIS-DirectoryBrowsing;IIS-HttpErrors;IIS-HealthAndDiagnostics;IIS-HttpLogging;IIS-LoggingLibraries;IIS-RequestMonitor;IIS-Security;IIS-URLAuthorization;IIS-RequestFiltering;IIS-IPSecurity;IIS-HttpCompressionStatic;IIS-WebServerManagementTools;IIS-ManagementConsole; WAS-WindowsActivationService;WAS-ProcessModel;WAS-NetFxEnvironment;WAS-ConfigurationAPI
```

Para instalar recursos do IIS para autorização via ServerManagerCmd.exe, use a seguinte linha de comando:

```
ServerManagerCmd -install Web-Server 
ServerManagerCmd -install Web-Url-Auth 
ServerManagerCmd -install Web-Filtering 
ServerManagerCmd -install Web-IP-Security
```

## Recursos de gerenciamento para administração local e remota

A carga de trabalho de conteúdo estático padrão inclui o Console de Gerenciamento do IIS, que pode ser usado para gerenciar o IIS em seu computador local. O Console de Gerenciamento também pode ser usado para gerenciar servidores IIS remotamente se esses servidores estiverem configurados para aceitar conexões de consoles de gerenciamento remotos do IIS.

### Cliente de gerenciamento

Instalar apenas o Console de Gerenciamento do IIS lhe dará a capacidade de gerenciar o IIS em outros servidores que têm o Serviço de Gerenciamento Remoto instalado.

Para instalar o Cliente de Gerenciamento somente sem nenhum servidor Web do IIS ou recursos do SERVIDOR FTP da interface do usuário de instalação do Vista/Windows Server 2008, selecione os seguintes recursos do IIS pelo nome da interface do usuário (além de recursos para conteúdo estático):

| Nome da interface do usuário | Nome da atualização |
| --- | --- |
| Console de gerenciamento do IIS | IIS - ManagementConsole |

Para instalar os recursos do IIS para o Console de Gerenciamento, juntamente com os recursos do Servidor Web de Conteúdo Estático por meio de pkgmgr.exe, use a seguinte linha de comando:

```
Start /w pkgmgr /iu:IIS-WebServerRole;IIS-WebServer;IIS-CommonHttpFeatures;IIS-StaticContent;IIS-DefaultDocument;IIS-DirectoryBrowsing;IIS-HttpErrors; IIS-HealthAndDiagnostics;IIS-HttpLogging;IIS-LoggingLibraries;IIS-RequestMonitor;IIS-Security;IIS-RequestFiltering;IIS-HttpCompressionStatic;IIS-WebServerManagementTools;IIS-ManagementConsole;WAS-WindowsActivationService;WAS-ProcessModel;WAS-NetFxEnvironment;WAS-ConfigurationAPI
```

Para instalar os recursos do IIS para o Console de Gerenciamento por meio de ServerManagerCmd.exe, use a seguinte linha de comando:

```
ServerManagerCmd -install Web-Server 
ServerManagerCmd -install Web-Mgmt-Console
```

### Serviço de Gerenciamento Remoto

A instalação do Serviço de Gerenciamento Remoto do IIS permitirá que um servidor IIS seja gerenciado remotamente pelos Consoles de Gerenciamento do IIS em outros computadores.

Para instalar o Serviço de Gerenciamento do IIS na interface do usuário de instalação do Vista/Windows Server 2008, selecione os seguintes recursos do IIS por nome da interface do usuário (além dos recursos para conteúdo estático):

| Nome da interface do usuário | Nome da atualização |
| --- | --- |
| Serviço de Gerenciamento | IIS-ManagementService |

Para instalar o Serviço de Gerenciamento do IIS juntamente com os recursos do Servidor Web de Conteúdo Estático por meio de pkgmgr.exe, use a seguinte linha de comando:

```
Start /w pkgmgr /iu:IIS-WebServerRole;IIS-WebServer;IIS-CommonHttpFeatures;IIS-StaticContent;IIS-DefaultDocument;IIS-DirectoryBrowsing;IIS-HttpErrors; IIS-HealthAndDiagnostics;IIS-HttpLogging;IIS-LoggingLibraries;IIS-RequestMonitor;IIS-Security;IIS-RequestFiltering;IIS-HttpCompressionStatic;IIS-WebServerManagementTools;IIS-ManagementConsole;IIS-ManagementService;WAS-WindowsActivationService;WAS-ProcessModel;WAS-NetFxEnvironment;WAS-ConfigurationAPI
```

Para instalar o Serviço de Gerenciamento do IIS por meio de ServerManagerCmd.exe, use a seguinte linha de comando:

```
ServerManagerCmd -install Web-Server 
ServerManagerCmd -install Web-Mgmt-Service
```

### Compatibilidade de Metabase do IIS 6.0

O IIS fornece um repositório de configuração chamado ApplicationHost.config com um conjunto de APIs de gerenciamento. Para manter a compatibilidade com aplicativos e scripts existentes que usam ABO ou ADSI para configurar o IIS, o IIS fornece uma camada completa de compatibilidade de metabase que implementa as APIs ABO e ADSI e mapeia essas APIs para o novo armazenamento de dados ApplicationHost.config. Além do recurso de compatibilidade do Metabase para a ABO, você também pode instalar a compatibilidade do Metabase do IIS 6.0 para scripts WMI e as ferramentas de script do IIS 6.0. Para saber mais sobre a compatibilidade de metabase, consulte o artigo [Compatibilidade da Metabase com o IIS7 e versões superiores](manage__managing-your-configuration-settings__metabase-compatibility-with-iis-7-and-above.md)

Para instalar a compatibilidade do Metabase na interface do usuário de instalação do Vista/Windows Server 2008, selecione os seguintes recursos do IIS por nome da interface do usuário (além dos recursos para conteúdo estático):

| Nome da interface do usuário | Nome da atualização |
| --- | --- |
| Compatibilidade de metabase do IIS 6 | IIS-Metabase |
| Compatibilidade com WMI do IIS 6 | IIS-WMICompatibility |
| Ferramentas de script do IIS 6 | IIS-LegacyScripts |

Para instalar a compatibilidade do Metabase do IIS juntamente com os recursos do Servidor Web de Conteúdo Estático por meio de pkgmgr.exe, use a seguinte linha de comando:

```
Start /w pkgmgr /iu:IIS-WebServerRole;IIS-WebServer;IIS-CommonHttpFeatures;IIS-StaticContent;IIS-DefaultDocument;IIS-DirectoryBrowsing;IIS-HttpErrors; IIS-HealthAndDiagnostics;IIS-HttpLogging;IIS-LoggingLibraries;IIS-Security;IIS-RequestFiltering;IIS-HttpCompressionStatic;IIS-WebServerManagementTools;IIS-ManagementConsole;IIS-IIS6ManagementCompatibility;IIS-Metabase;IIS-WMICompatibility; IIS-LegacyScripts;WAS-WindowsActivationService;WAS-ProcessModel;WAS-NetFxEnvironment;WAS-ConfigurationAPI
```

Para instalar recursos do IIS para Metabase via ServerManagerCmd.exe, use a seguinte linha de comando:

```
ServerManagerCmd -install Web-Server 
ServerManagerCmd -install Web-Metabase 
ServerManagerCmd -install Web-WMI 
ServerManagerCmd -install Web-Lgcy-Scripting
```

### Gerenciando o IIS 6.0 e o SERVIDOR FTP

O IIS 7.0 e superior fornece o snap-in do IIS 6.0 MMC para permitir que você use seus computadores Vista/Windows Server 2008 para administrar remotamente o servidor IIS 6.0 existente no Windows Server 2003, bem como servidores FTP no Windows Server 2008. O Console de Gerenciamento do IIS 6 não pode ser usado para gerenciar servidores IIS 7.0 e superiores.

Para instalar o Console de Gerenciamento do IIS 6.0 na interface do usuário de instalação do Vista/Windows Server 2008, selecione os seguintes recursos do IIS por nome da interface do usuário (além de recursos para conteúdo estático):

| Nome da interface do usuário | Nome da atualização |
| --- | --- |
| Console de gerenciamento do IIS 6 | IIS-LegacySnapIn |

Para instalar os recursos do IIS 7.0 e superiores para o Console de Gerenciamento do IIS 6.0, juntamente com os recursos do Servidor Web de Conteúdo Estático via pkgmgr.exe, use a seguinte linha de comando:

```
Start /w pkgmgr /iu:IIS-WebServerRole;IIS-WebServer;IIS-CommonHttpFeatures;IIS-StaticContent;IIS-DefaultDocument;IIS-DirectoryBrowsing;IIS-HttpErrors; IIS-HealthAndDiagnostics;IIS-HttpLogging;IIS-LoggingLibraries;IIS-RequestMonitor;IIS-Security;IIS-RequestFiltering;IIS-HttpCompressionStatic;IIS-WebServerManagementTools;IIS-ManagementConsole;IIS6ManagementCompatibility;IIS-LegacySnapIn;WAS-WindowsActivationService;WAS-ProcessModel;WAS-NetFxEnvironment;WAS-ConfigurationAPI
```

Para instalar os recursos do IIS 7.0 e superiores para gerenciamento do IIS 6.0 por ServerManagerCmd.exe, use a seguinte linha de comando:

```
ServerManagerCmd -install Web-Server 
ServerManagerCmd -install Web-Lgcy-Mgmt-Console
```

## Resumo

Neste artigo, vimos como instalar o IIS 7.0 e superior para dar suporte a cargas de trabalho específicas e como essas cargas de trabalho podem ser combinadas e modificadas. Também analisamos a adição de recursos do IIS 7.0 e superiores para rastreamento, segurança, compatibilidade do IIS 6.0, gerenciamento local e remoto e gerenciamento do IIS 6.0. Depois de instalar o IIS 7.0 e superior com a Ferramenta do Gerenciador de Servidores, você poderá usar a Página de Função do Servidor Web para uma rápida visualização do status do IIS 7.0 e superior e usar o Console de gerenciamento do IIS 7.0 e superior para configurar os recursos do IIS que você instalou.

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
