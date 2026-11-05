# Instalar e configurar o IIS 7 no Server Core | Microsoft Learn

> **Fonte / Source:** https://learn.microsoft.com/pt-br/iis/install/installing-iis-7/install-and-configure-iis-on-server-core

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

# Instalar e configurar o IIS 7 no Server Core

Comentários

por a equipe do IIS

## Introdução

O Server Core, a opção mínima de instalação do servidor para Windows Server® 2008, está disponível nas edições Standard, Enterprise e Datacenter. O Server Core dá suporte a um subconjunto das funções de servidor disponíveis em instalações completas do sistema operacional, incluindo o servidor Web IIS 7 e superior (IIS 7 e superior). Em uma instalação do Server Core, somente os serviços, funções e recursos necessários para uma função instalada são instalados.

A execução do IIS no Server Core fornece um servidor Web modular e personalizável em um sistema operacional de servidor fino. Isso o torna ideal para ambientes semelhantes a eletrodomésticos, servidores front-end de fazenda de Web e sites ou aplicativos com manutenção mínima.

Com a adição do Microsoft® .NET Framework ao Server Core no Windows Server® 2008 R2, a opção de instalação do Server Core torna-se ainda mais atraente para quem deseja usar um servidor de volume muito pequeno para hospedar seus aplicativos. A disponibilidade do .NET Framework fornece:

- **Suporte do Microsoft®****ASP.NET.**  
  Com o Windows Server 2008 R2, o Server Core pode ser usado para hospedar aplicativos ASP.NET.
- **Gerenciamento Remoto do IIS.**  
  O Server Core não fornece nenhuma interface do usuário que não seja a interface de linha de comando. Com a opção Windows Server 2008 R2 Server Core, é possível usar o Gerenciador do IIS para Administração Remota para se conectar ao IIS e executar todas as tarefas de gerenciamento de dentro da interface do usuário familiar do Gerenciador do IIS.
- **Windows PowerShell™.**  
  A opção Windows Server 2008 R2 Server Core inclui o snap-in do Windows PowerShell do IIS (também disponível com outras opções de instalação do Windows Server 2008 R2).

## Instalar o Server Core

Para instalar o IIS em uma instalação do Server Core instalada e configurada do Windows Server 2008, você deve ter uma conta de usuário administrador e uma senha para o servidor que executa a instalação do Server Core.

1. O Server Core é configurado como um servidor típico do Windows Server 2008, exceto que a opção "Instalação do Server Core" está selecionada. Em seguida, o Server Core força uma alteração na senha do administrador.  
   [![Captura de tela que mostra a instalação do Windows Server 2008 Standard selecionada.](install-and-configure-iis-on-server-core/_static/image2.jpg)](https://learn.microsoft.com/pt-br/iis/install/installing-iis-7/install-and-configure-iis-on-server-core/_static/image1.jpg)
     
   *Figura 1: selecionar a opção Server Core*
2. Em seguida, verifique a NIC e o IPConfig (não é necessário se houver um servidor DHCP (Dynamic Host Configuration Protocol) em execução na rede). Para corrigir um endereço IP, digite o seguinte:

   ```
   netsh interface ipv4 set address name="Local Area Connection" source=static address=<IPADDRESS> mask=<255.255.255.0> gateway=<GatewayIP>
   ```
3. Para adicionar uma entrada de servidor DNS (Sistema de Nomes de Domínio), digite:

   ```
   netsh interface ipv4 add dnsserver name="Local Area Connection" address=<IPAddress of DNS>
   ```
4. Para localizar o nome do computador, digite:

   ```
   hostname
   ```
5. Para alterar o tipo de nome do computador:

   ```
   netdom renamecomputer <Current Computer name> /NewName:<NewComputerName>
   ```
6. Reinicialize com o comando:

   ```
   shutdown /r /t 0
   ```
7. Para ingressar no domínio, digite:

   ```
   netdom join <ComputerName> /domain:<DomainName> /Userd:<UserName> /passwordd: *
   ```
8. Reinicialize com o comando:

   ```
   shutdown /r /t 0
   ```
9. Para evitar um erro de instalação posterior no MySQL, abra uma exceção para MySQL:

   ```
   netsh firewall add portopening tcp 3306 "MySQL"
   ```
10. Reinicialize com o comando:

    ```
    shutdown /r /t 0
    ```
11. Em seguida, ative o Server Core.

    - Use o seguinte comando se estiver conectado à Internet:

      ```
      slmgr.vbs –ato
      ```
    - Se não estiver conectado à Internet, use a ativação do telefone.  
      Digite um dos seguintes:

      ```
      slmgr.vbs –dti
      ```

      (Isso exibe a identificação de instalação a ser fornecida à Microsoft.)

      ```
      slmgr.vbs –atp <ConfirmationID>
      ```

      (Isso ativa o servidor usando a ID de confirmação fornecida pela Microsoft.)

Para obter mais informações sobre as tarefas de instalação iniciais, como gerenciar o Firewall do Windows® e configurar para atualizações automáticas, consulte [Making Sense of Server Core](https://technet.microsoft.com/magazine/2009.02.geekofalltrades.aspx?pr=blog). Consulte também o [guia de introdução da opção de instalação do Server Core](https://technet.microsoft.com/library/cc753802(WS.10).aspx).

Depois que a instalação do Server Core for concluída e o servidor estiver configurado, você poderá instalar uma ou mais funções de servidor. A instalação do Server Core do Windows Server 2008 dá suporte às seguintes funções de servidor:

- Active Directory® Domain Services
- Serviços de Domínio Leve do Active Directory
- Servidor DHCP
- Servidor DNS
- Serviços de arquivo
- Serviços de Impressão
- Hyper-V™
- Serviços Web (IIS) (Limitado)
- Servidor Web (IIS)

## Instalar o IIS

Consulte [Instalar o IIS 7.5 no Windows Server 2008 R2 usando uma instalação do Server Core](https://technet.microsoft.com/library/cc771209.aspx) para obter instruções detalhadas. Observe que a instalação completa do IIS implica na instalação de todos os pacotes de recursos disponíveis para o Server Core. Se houver pacotes de recursos que você não precisa, edite o script para instalar apenas os pacotes necessários. A instalação padrão do IIS instala um conjunto mínimo de pacotes de recursos disponíveis.

Se você quiser instalar componentes do IIS que dependem do .NET Framework, primeiro instale o .NET Framework. Os componentes que dependem do .NET Framework não serão instalados se o .NET Framework ainda não estiver instalado.

Para usar um script para instalar o .NET Framework e a instalação completa do IIS 7.5 no Server Core, digite o seguinte comando em um script:

```
CMD /C START /w PKGMGR.EXE /l:log.etw /iu:IIS-WebServerRole;IIS-WebServer;IIS-CommonHttpFeatures;IIS-StaticContent;IIS-DefaultDocument;IIS-DirectoryBrowsing;IIS-HttpErrors;IIS-HttpRedirect;IIS-ApplicationDevelopment;IIS-ASP;IIS-CGI;IIS-ISAPIExtensions;IIS-ISAPIFilter;IIS-ServerSideIncludes;IIS-HealthAndDiagnostics;IIS-HttpLogging;IIS-LoggingLibraries;IIS-RequestMonitor;IIS-HttpTracing;IIS-CustomLogging;IIS-ODBCLogging;IIS-Security;IIS-BasicAuthentication;IIS-WindowsAuthentication;IIS-DigestAuthentication;IIS-ClientCertificateMappingAuthentication;IIS-IISCertificateMappingAuthentication;IIS-URLAuthorization;IIS-RequestFiltering;IIS-IPSecurity;IIS-Performance;IIS-HttpCompressionStatic;IIS-HttpCompressionDynamic;IIS-WebServerManagementTools;IIS-ManagementScriptingTools;IIS-IIS6ManagementCompatibility;IIS-Metabase;IIS-WMICompatibility;IIS-LegacyScripts;WAS-WindowsActivationService;WAS-ProcessModel;IIS-FTPServer;IIS-FTPSvc;IIS-FTPExtensibility;IIS-WebDAV;IIS-ASPNET;IIS-NetFxExtensibility;WAS-NetFxEnvironment;WAS-ConfigurationAPI;IIS-ManagementService;MicrosoftWindowsPowerShell;NetFx2-ServerCore;NetFx2-ServerCore-WOW64
```

Para usar um script para a instalação completa do IIS 7.5 no Server Core, digite o seguinte comando em um script:

```
CMD /C START /w PKGMGR.EXE /l:log.etw /iu:IIS-WebServerRole;IIS-WebServer;IIS-CommonHttpFeatures;IIS-StaticContent;IIS-DefaultDocument;IIS-DirectoryBrowsing;IIS-HttpErrors;IIS-HttpRedirect;IIS-ApplicationDevelopment;IIS-ASP;IIS-CGI;IIS-ISAPIExtensions;IIS-ISAPIFilter;IIS-ServerSideIncludes;IIS-HealthAndDiagnostics;IIS-HttpLogging;IIS-LoggingLibraries;IIS-RequestMonitor;IIS-HttpTracing;IIS-CustomLogging;IIS-ODBCLogging;IIS-Security;IIS-BasicAuthentication;IIS-WindowsAuthentication;IIS-DigestAuthentication;IIS-ClientCertificateMappingAuthentication;IIS-IISCertificateMappingAuthentication;IIS-URLAuthorization;IIS-RequestFiltering;IIS-IPSecurity;IIS-Performance;IIS-HttpCompressionStatic;IIS-HttpCompressionDynamic;IIS-WebServerManagementTools;IIS-ManagementScriptingTools;IIS-IIS6ManagementCompatibility;IIS-Metabase;IIS-WMICompatibility;IIS-LegacyScripts;WAS-WindowsActivationService;WAS-ProcessModel;IIS-FTPServer;IIS-FTPSvc;IIS-FTPExtensibility;IIS-WebDAV;IIS-ASPNET;IIS-NetFxExtensibility;WAS-NetFxEnvironment;WAS-ConfigurationAPI;IIS-ManagementService;MicrosoftWindowsPowerShell
```

Para usar um script para a instalação padrão no Server Core, digite o seguinte comando em um script:

```
start /w pkgmgr /l:log.etw /iu:IIS-WebServerRole;WAS-WindowsActivationService;WAS-ProcessModel;WAS-NetFxEnvironment;WAS-ConfigurationAPI</samp>
```

Consulte [o IIS 7.0 no Server Core](manage__working-with-server-core__iis-70-on-server-core.md) e a instalação do IIS 7.0 no Server Core para obter mais informações sobre como instalar o IIS 7.0.

## Instalar funções e serviços

1. Use o comando **oclist** para listar as funções e serviços disponíveis e instalados no servidor. O comando oclist também renderiza dependências de componente.  
   [![Captura de tela que mostra a janela do Prompt de Comando. A saída mostra que o Serviço IIS FTP e a Extensibilidade não estão instalados.](install-and-configure-iis-on-server-core/_static/image2.gif)](https://learn.microsoft.com/pt-br/iis/install/installing-iis-7/install-and-configure-iis-on-server-core/_static/image1.gif)
     
   *Figura 2: Saída do comando oclist*

   Na figura acima, a saída do oclist mostra que IIS-FTPExtensibility depende do IIS-FTPSvc. Para instalar o IIS-FTPExtensibility, primeiro é necessário instalar o IIS-FTPSvc.
2. Use o comando **ocsetup** para instalar e desinstalar funções e serviços individuais.
3. Em seguida, execute **oclist | mais** para verificar quais componentes do IIS foram instalados.

### Instalar o .NET Framework

Se você planeja usar ASP.NET ou Gerenciamento Remoto do IIS, é necessário instalar o .NET Framework primeiro. Para instalá-lo, use os seguintes comandos:

```
start /w ocsetup NetFx2-ServerCore   
start /w ocsetup NetFx2-ServerCore-WOW64
```

### Instalar ASP.NET

1. Instale ASP.NET executando os seguintes comandos (em ordem):

   ```
   start /w ocsetup WAS-NetFxEnvironment

   start /w ocsetup IIS-ISAPIExtensions

   start /w ocsetup IIS-ISAPIFilter

   start /w ocsetup IIS-NetFxExtensibility

   start /w ocsetup IIS-ASPNET
   ```

### Instalar o Windows PowerShell e o IIS Snap-In

1. Instale o Windows PowerShell executando o seguinte comando:

   ```
   start /w ocsetup MicrosoftWindowsPowerShell
   ```
2. Em seguida, inicie o Windows PowerShell com o seguinte comando:

   ```
   \windows\system32\WindowsPowerShell\v1.0\powershell.exe
   ```

   Você deve ver um prompt do PowerShell.
3. Para habilitar o snap-in do IIS, você deve alterar a política de execução de script executando este comando:

   ```
   Set-ExecutionPolicy RemoteSigned
   ```
4. Reinicie o PowerShell para que as alterações de política entrem em vigor. Depois de reiniciar o PowerShell, importe o snap-in do IIS:

   ```
   import-module WebAdministration
   ```
5. Você pode obter a lista de cmdlets do IIS disponíveis digitando:

   ```
   get-command –pssnapin WebAdministration
   ```

Consulte [como gerenciar o IIS com o Snap-in do PowerShell do IIS 7.0](manage__powershell.md) e [gerenciar o IIS com o Snap-in do PowerShell do IIS 7.0](manage__powershell.md) para obter mais informações.

Para obter informações sobre o Windows PowerShell no Server Core, consulte [o PowerBlog do Dmitry: PowerShell e Beyond](https://dmitrysotnikov.wordpress.com/2008/05/15/powershell-on-server-core/).

### Habilitar o Gerenciamento Remoto do IIS

Como o Windows Server 2008 R2 Server Core não tem uma GUI (interface gráfica do usuário), o prompt de comando deve ser usado para tarefas administrativas. Pode ser mais conveniente gerenciar o Server Core de outro computador usando o gerenciamento remoto do IIS.

O Gerenciador do IIS para Administração Remota:

- Gerencia remotamente o IIS do Windows® 7, Windows Vista®, Windows® XP e Windows Server® 2003.
- Conecta-se diretamente a um servidor Web, site ou aplicativo Web.
- Instala mesmo quando o IIS não está instalado no computador local.
- Permite várias conexões simultâneas.
- Dá suporte à administração delegada a sites e aplicativos Web, para que os proprietários possam se conectar e gerenciar seu próprio site diretamente.
- É uma ferramenta de administração familiar e fácil de usar.
- Dá suporte a HTTP sobre SSL (Secure Sockets Layer) para um gerenciamento mais seguro.
- Baixa automaticamente os recursos no console local do IIS Manager para Administração Remota para corresponder aos recursos recém-instalados no servidor Web remoto.

Para obter mais informações, consulte [o Gerenciador do IIS para Administração Remota](https://www.iis.net/downloads/microsoft/iis-manager) e [Administração Remota para o Gerenciador do IIS](manage__remote-administration__remote-administration-for-iis-manager.md#01).

1. Por padrão, a Área de Trabalho Remota não está habilitada no Server Core. Instale o serviço de gerenciamento remoto do IIS usando o seguinte comando:

   ```
   start /w ocsetup IIS-ManagementService
   ```
2. Habilite o gerenciamento remoto com o seguinte comando:

   ```
   reg add HKEY_LOCAL_MACHINE\SOFTWARE\Microsoft\WebManagement\Server ^
   /v EnableRemoteManagement /t REG_DWORD /d 1
   ```
3. Inicie o serviço de gerenciamento digitando:

   ```
   net start wmsvc
   ```
4. Conecte-se ao IIS no Server Core de um computador remoto usando o [para Administração Remota do IIS](https://www.iis.net/downloads?tabid=34&g=6&i=1626 "Gerenciador Remoto do IIS").

Para desinstalar a função do Servidor Web (IIS), use o seguinte comando:

```
start /w pkgmgr /uu:IIS-WebServerRole;WAS-WindowsActivationService;WAS-ProcessModel
```

## Links para obter mais informações

- [IIS 7.0 no Server Core](manage__working-with-server-core__iis-70-on-server-core.md).
- [Configurar o IIS no Server Core – Windows Server 2008 R2](https://blogs.iis.net/ruslany/archive/2009/02/26/setup-iis-on-server-core-windows-server-2008-r2.aspx).
- Apresentação do Server Core (`https://download.microsoft.com/download/6/3/5/6350896f-1e08-440b-9f24-d50f5e9b2390/ServerCoredeepdive.ppt`).
- [Guia de introdução da opção de instalação do Server Core](https://technet.microsoft.com/library/cc753802(WS.10).aspx).
- [Administrando o IIS7 em instalações do Server Core do Windows Server 2008](https://blogs.iis.net/metegokt/archive/2007/06/26/administering-iis7-on-server-core-installations-of-windows-server-2008.aspx).

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
