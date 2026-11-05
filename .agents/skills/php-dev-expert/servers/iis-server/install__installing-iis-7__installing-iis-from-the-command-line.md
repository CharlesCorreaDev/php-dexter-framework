# Instalando o IIS 7.0 da linha de comando | Microsoft Learn

> **Fonte / Source:** https://learn.microsoft.com/pt-br/iis/install/installing-iis-7/installing-iis-from-the-command-line

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

# Instalando o IIS 7.0 da linha de comando

Comentários

por [Saad Ladki](https://twitter.com/saadladki)

## Introdução

Pkgmgr.exe é uma nova ferramenta de comando no Windows Vista®/Windows Server® 2008 para instalar recursos opcionais do Windows:

- Substitui sysocmgr.exe para instalar recursos opcionais do Windows
- Permite instalar/desinstalar recursos opcionais do Windows Vista diretamente do prompt de comando ou de scripts

O Pkgmgr pode usar uma lista de recursos do Windows para instalar na linha de comando ou usar um nome de arquivo xml como um parâmetro para instalações sem supervisão. Este laboratório ilustrará o uso de parâmetros de linha de comando pkgmgr para instalar recursos opcionais.

## Pré-requisitos

**Windows Vista/Windows Server 2008 Edições Suportadas**

Este passo a passo é para as seguintes edições do Windows Vista/Windows Server 2008:

- Windows Vista Home Premium Edition
- Windows Vista Professional Edition
- Windows Vista Ultimate Edition
- Edições do Windows Server 2008

Verifique se você instalou uma das edições com suporte do Windows Vista/Windows Server 2008 antes de continuar. Para obter mais informações sobre o IIS 7.0 no Windows Vista, examine o artigo [IIS 7.0 Features e Vista Editions](install__installing-iis-7__compatibility-and-feature-requirements-for-windows-vista.md) antes de continuar.

### Segurança do Administrador de Usuário Local (LUA)

Verifique se você tem privilégios administrativos no computador: por padrão, você não os tem se estiver conectado como um usuário diferente da conta de Administrador interna, mesmo que esse usuário tenha sido adicionado ao grupo de Administradores local no computador (este é um novo recurso de segurança no Windows Server 2008, chamado LUA, que está além do escopo deste artigo). Certifique-se de fazer logon como a conta de Administrador padrão ou invocar explicitamente aplicativos como o Administrador padrão, conforme necessário, usando a ferramenta de linha de comando "runas".

Por exemplo, para iniciar notepad.exe você pode executar este comando: "runas /user:administrator notepad.exe". Você será solicitado a solicitar a senha da conta administrador. É útil ter um prompt de comando já com privilégios administrativos, executando "runas /user:administrator cmd.exe". Cada aplicativo executado a partir desse prompt de comando também será elevado e você não precisará usar a sintaxe "runas" nesse prompt de comando.

Se você estiver conectado a uma conta diferente da conta de administrador local interna, poderá ver a caixa de diálogo de alerta de segurança a seguir. Clique em **Permitir** para continuar executando as etapas de instalação neste passo a passo.

### Caixa de diálogo de segurança do Windows – LUA

Se você estiver conectado a uma conta diferente da conta de administrador local interna, poderá ver a caixa de diálogo de alerta de segurança a seguir.  
![Captura de tela da caixa de diálogo Segurança do Windows.](installing-iis-from-the-command-line/_static/image1.jpg)

Figura 1: Caixa de diálogo de Segurança do Windows

Clique em **Permitir** para continuar executando as etapas de instalação neste passo a passo.

## Procedure

### Etapa 1: visão geral do Pkgmgr.exe

Os recursos opcionais do Windows no Vista/Windows Server 2008 podem ser instalados usando uma nova ferramenta de comando chamada Pkgmgr. A sintaxe da linha de comando usando pkgmgr.exe é:

```
Start /w pkgmgr.exe /iu:update1;update2…
```

Comandos Pkgmgr.exe

- **/iu:{nome da atualização};** — Especifica as atualizações a serem instaladas pelo nome da atualização. Aceita um nome de atualizações, separadas por ponto e vírgula, para instalar.
- **/uu:{nome da atualização};** — Especifica as atualizações para desinstalar. Usa uma lista separada de ponto-e-vírgula de atualizações selecionáveis para serem desinstaladas do sistema. Pelo menos um nome de atualização deve ser especificado.
- **/n:{XML não atenuado}** — especifica o nome do arquivo XML não atenuado.

Observação

Se você executar pkgmgr sem o prefixo "start /w", o cmd pkgmgr retornará imediatamente e você não saberá quando a instalação do recurso opcional for concluída.

### Etapa 2: Abrir Janela de Comando

Siga as instruções na seção Pré-requisitos acima para iniciar uma janela cmd em execução como a conta de Administrador local.

### Etapa 3: Insira o comando para instalar os recursos padrão do IIS 7.0

Para instalar apenas os recursos padrão do IIS 7.0 da linha de comando, copie o texto a seguir para a janela de comando e, em seguida, prossiga para a Etapa 5.

Observação

Verifique se você está colando texto ascii de uma página da Web: para garantir que você não está recebendo nenhum texto não ascii, talvez você queira passar o conteúdo para notepad.exe primeiro. O bloco inteiro abaixo é um comando.

A configuração do IIS 7.0 por meio de pkgmgr.exe deve levar de 1 a 5 minutos. Quando o prompt de comando é retornado, a instalação do IIS 7.0 é concluída.

```
start /w pkgmgr /iu:IIS-WebServerRole;WAS-WindowsActivationService;WAS-ProcessModel;

WAS-NetFxEnvironment;WAS-ConfigurationAPI
```

### Etapa 4: Comando para instalar todos os recursos do IIS 7.0

Se você quiser instalar todos os recursos do IIS 7.0, use essas linhas de comando.

Se você estiver instalando o IIS 7.0 no Windows Vista Professional, Windows Vista Ultimate ou Windows Server 2008 Editions, copie e cole o seguinte texto na janela de comando:

```
start /w pkgmgr /iu:IIS-WebServerRole;IIS-WebServer;IIS-CommonHttpFeatures;IIS-StaticContent;IIS-DefaultDocument;IIS-DirectoryBrowsing;IIS-HttpErrors;IIS-HttpRedirect;
IIS-ApplicationDevelopment;IIS-ASPNET;IIS-NetFxExtensibility;IIS-ASP;IIS-CGI;IIS-ISAPIExtensions;IIS-ISAPIFilter;IIS-ServerSideIncludes;IIS-HealthAndDiagnostics;IIS-HttpLogging;IIS-LoggingLibraries;IIS-RequestMonitor;IIS-HttpTracing;IIS-CustomLogging;IIS-ODBCLogging;IIS-Security;IIS-BasicAuthentication;
IIS-WindowsAuthentication;IIS-DigestAuthentication;IIS-ClientCertificateMappingAuthentication;IIS-IISCertificateMappingAuthentication;IIS-URLAuthorization;IIS-RequestFiltering;IIS-IPSecurity;
IIS-Performance;IIS-HttpCompressionStatic;IIS-HttpCompressionDynamic;IIS-WebServerManagementTools;IIS-ManagementConsole;IIS-ManagementScriptingTools;IIS-ManagementService;IIS-IIS6ManagementCompatibility;IIS-Metabase;IIS-WMICompatibility;IIS-LegacyScripts;IIS-LegacySnapIn;IIS-FTPPublishingService;IIS-FTPServer;IIS-FTPManagement;WAS-WindowsActivationService;WAS-ProcessModel;WAS-NetFxEnvironment;WAS-ConfigurationAPI
```

Se você estiver instalando o IIS 7.0 no Windows Vista Home Premium, copie e cole o seguinte texto na janela de comando:

```
start /w pkgmgr /iu:IIS-WebServerRole;IIS-WebServer;IIS-CommonHttpFeatures;IIS-StaticContent;IIS-DefaultDocument;IIS-DirectoryBrowsing;IIS-HttpErrors;IIS-HttpRedirect;IIS-ApplicationDevelopment;

IIS-ASPNET;IIS-NetFxExtensibility;IIS-ASP;IIS-CGI;IIS-ISAPIExtensions;IIS-ISAPIFilter;IIS-ServerSideIncludes;IIS-HealthAndDiagnostics;IIS-HttpLogging;IIS-LoggingLibraries;IIS-RequestMonitor;IIS-HttpTracing;IIS-CustomLogging;IIS-Security;IIS-BasicAuthentication;IIS-URLAuthorization;IIS-RequestFiltering;IIS-IPSecurity;IIS-Performance;IIS-HttpCompressionStatic;IIS-HttpCompressionDynamic;IIS-WebServerManagementTools;IIS-ManagementConsole;IIS-ManagementScriptingTools;IIS-ManagementService;IIS-IIS6ManagementCompatibility;IIS-Metabase;IIS-WMICompatibility;IIS-LegacyScripts;IIS-LegacySnapIn;WAS-WindowsActivationService;WAS-ProcessModel;WAS-NetFxEnvironment;WAS-ConfigurationAPI
```

### Etapa 5: Verificar o código de erro

No prompt de comando, digite:

```
echo %errorlevel%
```

Um código de erro 0 indica êxito.

### Etapa 6: Verificar a instalação do IIS 7.0

Agora você pode executar uma verificação rápida para verificar se o IIS 7.0 está instalado:

- Inicie o navegador da Web do Internet Explorer e insira o endereço `http://localhost`.
- Você deverá ver a página padrão do IIS 7.0 "Bem-vindo".

## Resumo

Neste artigo, examinamos como usar a ferramenta de linha de comando pkgmgr.exe para instalar o IIS 7.0.

## Links Relacionados

Consulte os seguintes recursos para obter mais informações:

- [Instalar o IIS 7.0 no Windows Server](install__installing-iis-7__installing-iis-7-and-above-on-windows-server-2008-or-windows-server-2008-r2.md) 2008
- [Instalar o IIS 7.0 no Windows Vista](install__installing-iis-7__installing-iis-on-windows-vista-and-windows-7.md)
- [Usar a instalação autônoma com o IIS 7 e superior](install__installing-iis-7__using-unattended-setup-to-install-iis.md)
- [Instalar cargas de trabalho típicas do IIS](install__installing-iis-7__install-typical-iis-workloads.md)

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
