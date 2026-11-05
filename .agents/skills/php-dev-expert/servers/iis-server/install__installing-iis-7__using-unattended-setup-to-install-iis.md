# Usando a instalação autônoma para instalar o IIS 7.0 | Microsoft Learn

> **Fonte / Source:** https://learn.microsoft.com/pt-br/iis/install/installing-iis-7/using-unattended-setup-to-install-iis

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

# Usando a configuração sem assistência para instalar o IIS 7.0

Comentários

por [Tobin Titus](https://github.com/tobint)

## Introdução

Pkgmgr.exe é uma nova ferramenta de comando no Windows Vista/Windows Server® 2008 para instalar recursos opcionais do Windows:

- Substitui sysocmgr.exe para instalar recursos opcionais do Windows
- Permite que você instale/desinstale recursos opcionais do Windows Vista diretamente do prompt de comando ou de scripts

O Pkgmgr pode usar uma lista de recursos do Windows para instalar na linha de comando ou usar um nome de arquivo xml como um parâmetro para instalações sem supervisão. Este artigo ilustrará o uso de arquivos de instalação autônoma do pkgmgr para instalar recursos opcionais.

## Pré-requisitos

### Edições Windows Vista/Windows Server 2008 Suportadas

Este passo a passo é para as seguintes edições do Windows Vista/Windows Server 2008:

- Windows Vista Home Premium Edition
- Windows Vista Professional Edition
- Windows Vista Ultimate Edition
- Edições do Windows Server 2008

Verifique se você instalou uma das edições com suporte do Windows Vista/Windows Server 2008 antes de continuar.

### Segurança do Administrador de Usuário Local (LUA)

Verifique se você tem privilégios administrativos no computador: por padrão, você não os tem se estiver conectado como um usuário diferente da conta de Administrador interna, mesmo que esse usuário tenha sido adicionado ao grupo de Administradores local no computador (este é um novo recurso de segurança no Windows Server 2008, chamado LUA, que está além do escopo deste artigo). Certifique-se de fazer logon como a conta de Administrador padrão ou invocar explicitamente aplicativos como o Administrador padrão, conforme necessário, usando a ferramenta de linha de comando "runas".

Por exemplo, para iniciar notepad.exe, execute este comando: "runas /user:administrator notepad.exe". Você será solicitado a fornecer a senha da conta de Administrador. É útil ter um prompt de comando com privilégios elevados, executando "runas /user:administrator cmd.exe". Cada aplicativo que você executa a partir dessa caixa de comando também é elevado, e você não precisa usar a sintaxe "runas" a partir dessa caixa de comando.

## Procedure

### Etapa 1: visão geral do Pkgmgr.exe

Os recursos opcionais do Windows no Vista/Windows Server 2008 são instalados usando uma nova ferramenta de comando chamada Pkgmgr. A sintaxe da linha de comando usando pkgmgr.exe é:

```
Start /w pkgmgr.exe /iu:update1;update2…
```

**Comandos do Pkgmgr.exe**

```
/iu:{update name};
```

Isso especifica as atualizações a serem instaladas pelo nome da atualização e usa um nome separado por ponto-e-vírgula das atualizações a serem instaladas.

```
/uu:{update name};
```

Isso especifica as atualizações para desinstalar e usa uma lista separada de ponto-e-vírgula de atualizações selecionáveis a serem desinstaladas do sistema. Pelo menos um nome de atualização deve ser especificado

```
/n:{unattend XML}
```

Isso especifica o nome do arquivo XML unattend.

Observação

Se você executar pkgmgr sem o prefixo "start /w", o cmd pkgmgr retornará imediatamente e você não saberá quando a instalação do recurso opcional for concluída.

### Etapa 2: Abrir Janela de Comando

Siga as instruções na seção Pré-requisitos acima para iniciar uma janela de comando em execução como a conta de Administrador local.

### Etapa 3: Criar um arquivo Unattend.xml

Na janela de comando, execute notepad.exe.

Para instalar apenas os recursos padrão do IIS 7.0, copie o texto unattend.xml a seguir no bloco de notas.

```
<?xml version="1.0" ?> 
<unattend xmlns="urn:schemas-microsoft-com:unattend"  
    xmlns:wcm="http://schemas.microsoft.com/WMIConfig/2002/State">
<servicing> 
   <!-- Install a selectable update in a package that is in the Windows Foundation namespace --> 
   <package action="configure"> 
      <AssemblyIdentity 
         name="Microsoft-Windows-Foundation-Package"
         version="6.0.5308.6"
         language="neutral"
         processorArchitecture="x86"
         publicKeyToken="31bf3856ad364e35"
         versionScope="nonSxS"
      />
    <selection name="IIS-WebServerRole" state="true"/> 
    <selection name="WAS-WindowsActivationService" state="true"/> 
    <selection name="WAS-ProcessModel" state="true"/> 
    <selection name="WAS-NetFxEnvironment" state="true"/> 
    <selection name="WAS-ConfigurationAPI" state="true"/> 
  </package> 
</servicing> 
</unattend>
```

Se você quiser instalar todos os recursos do IIS 7.0 para fins de avaliação, use um dos seguintes arquivos de unattend.xml.

Para Windows Vista Professional, Windows Vista Ultimate ou Windows Server 2008 Editions, copie e cole o texto a seguir no bloco de notas.

```
<?xml version="1.0" ?> 
<unattend xmlns="urn:schemas-microsoft-com:unattend" 
    xmlns:wcm="http://schemas.microsoft.com/WMIConfig/2002/State">
<servicing>
   <!-- Install a selectable update in a package that is in the Windows Foundation namespace -->
   <package action="configure">
      <assemblyIdentity
         name="Microsoft-Windows-Foundation-Package"
         version="6.0.5308.6"
         language="neutral"
         processorArchitecture="x86"
         publicKeyToken="31bf3856ad364e35"
         versionScope="nonSxS"
      />
    <selection name="IIS-WebServerRole" state="true"/>
    <selection name="IIS-WebServer" state="true"/>
    <selection name="IIS-CommonHttpFeatures" state="true"/>
    <selection name="IIS-StaticContent" state="true"/>
    <selection name="IIS-DefaultDocument" state="true"/>
    <selection name="IIS-DirectoryBrowsing" state="true"/>
    <selection name="IIS-HttpErrors" state="true"/>
    <selection name="IIS-HttpRedirect" state="true"/>
    <selection name="IIS-ApplicationDevelopment" state="true"/>
    <selection name="IIS-ASPNET" state="true"/>
    <selection name="IIS-NetFxExtensibility" state="true"/>
    <selection name="IIS-ASP" state="true"/>
    <selection name="IIS-CGI" state="true"/>
    <selection name="IIS-ISAPIExtensions" state="true"/>
    <selection name="IIS-ISAPIFilter" state="true"/>
    <selection name="IIS-ServerSideIncludes" state="true"/>
    <selection name="IIS-HealthAndDiagnostics" state="true"/>
    <selection name="IIS-HttpLogging" state="true"/>
    <selection name="IIS-LoggingLibraries" state="true"/>
    <selection name="IIS-RequestMonitor" state="true"/>
    <selection name="IIS-HttpTracing" state="true"/>
    <selection name="IIS-CustomLogging" state="true"/>
    <selection name="IIS-ODBCLogging" state="true"/>
    <selection name="IIS-Security" state="true"/>
    <selection name="IIS-BasicAuthentication" state="true"/>
    <selection name="IIS-WindowsAuthentication" state="true"/>
    <selection name="IIS-DigestAuthentication" state="true"/>
    <selection name="IIS-ClientCertificateMappingAuthentication" state="true"/>
    <selection name="IIS-IISCertificateMappingAuthentication" state="true"/>
    <selection name="IIS-URLAuthorization" state="true"/>
    <selection name="IIS-RequestFiltering" state="true"/>
    <selection name="IIS-IPSecurity" state="true"/>
    <selection name="IIS-Performance" state="true"/>
    <selection name="IIS-HttpCompressionStatic" state="true"/>
    <selection name="IIS-HttpCompressionDynamic" state="true"/>
    <selection name="IIS-WebServerManagementTools" state="true"/>
    <selection name="IIS-ManagementConsole" state="true"/>
    <selection name="IIS-ManagementScriptingTools" state="true"/>
    <selection name="IIS-ManagementService" state="true"/>
    <selection name="IIS-IIS6ManagementCompatibility" state="true"/>
    <selection name="IIS-Metabase" state="true"/>
    <selection name="IIS-WMICompatibility" state="true"/>
    <selection name="IIS-LegacyScripts" state="true"/>
    <selection name="IIS-LegacySnapIn" state="true"/>
    <selection name="IIS-FTPPublishingService" state="true"/>
    <selection name="IIS-FTPServer" state="true"/>
    <selection name="IIS-FTPManagement" state="true"/>
    <selection name="WAS-WindowsActivationService" state="true"/>
    <selection name="WAS-ProcessModel" state="true"/>
    <selection name="WAS-NetFxEnvironment" state="true"/>
    <selection name="WAS-ConfigurationAPI" state="true"/>
  </package>
</servicing>
</unattend>
```

Se você estiver instalando o IIS 7.0 no Windows Vista Home Premium, copie e cole o seguinte texto no bloco de notas:

```
<?xml version="1.0" ?>                                                                                                                      
<unattend xmlns="urn:schemas-microsoft-com:unattend" 
    xmlns:wcm="http://schemas.microsoft.com/WMIConfig/2002/State">
<servicing> 
   <!-- Install a selectable update in a package that is in the Windows Foundation namespace --> 
   <package action="configure"> 
      <assemblyIdentity 
         name="Microsoft-Windows-Foundation-Package"
         version="6.0.5303.0"
         language="neutral"
        processorArchitecture="x86"
         publicKeyToken="31bf3856ad364e35"
         versionScope="nonSxS"
      />
    <selection name="IIS-WebServerRole" state="true"/> 
    <selection name="IIS-WebServer" state="true"/> 
    <selection name="IIS-CommonHttpFeatures" state="true"/> 
    <selection name="IIS-StaticContent" state="true"/> 
    <selection name="IIS-DefaultDocument" state="true"/> 
    <selection name="IIS-DirectoryBrowsing" state="true"/> 
    <selection name="IIS-HttpErrors" state="true"/> 
    <selection name="IIS-HttpRedirect" state="true"/> 
    <selection name="IIS-ApplicationDevelopment" state="true"/> 
    <selection name="IIS-ASPNET" state="true"/> 
    <selection name="IIS-NetFxExtensibility" state="true"/> 
    <selection name="IIS-ASP" state="true"/> 
    <selection name="IIS-CGI" state="true"/> 
    <selection name="IIS-ISAPIExtensions" state="true"/> 
    <selection name="IIS-ISAPIFilter" state="true"/> 
    <selection name="IIS-ServerSideIncludes" state="true"/> 
    <selection name="IIS-HealthAndDiagnostics" state="true"/> 
    <selection name="IIS-HttpLogging" state="true"/> 
    <selection name="IIS-LoggingLibraries" state="true"/> 
    <selection name="IIS-RequestMonitor" state="true"/> 
    <selection name="IIS-HttpTracing" state="true"/> 
    <selection name="IIS-CustomLogging" state="true"/> 
    <selection name="IIS-ODBCLogging" state="true"/> 
    <selection name="IIS-Security" state="true"/> 
    <selection name="IIS-BasicAuthentication" state="true"/> 
    <selection name="IIS-URLAuthorization" state="true"/> 
    <selection name="IIS-RequestFiltering" state="true"/> 
    <selection name="IIS-IPSecurity" state="true"/> 
    <selection name="IIS-Performance" state="true"/> 
    <selection name="IIS-HttpCompressionStatic" state="true"/> 
    <selection name="IIS-HttpCompressionDynamic" state="true"/> 
    <selection name="IIS-WebServerManagementTools" state="true"/> 
    <selection name="IIS-ManagementConsole" state="true"/> 
    <selection name="IIS-ManagementScriptingTools" state="true"/> 
    <selection name="IIS-ManagementService" state="true"/> 
    <selection name="IIS-IIS6ManagementCompatibility" state="true"/> 
    <selection name="IIS-Metabase" state="true"/> 
    <selection name="IIS-WMICompatibility" state="true"/> 
    <selection name="IIS-LegacyScripts" state="true"/> 
    <selection name="IIS-LegacySnapIn" state="true"/> 
    <selection name="WAS-WindowsActivationService" state="true"/> 
    <selection name="WAS-ProcessModel" state="true"/> 
    <selection name="WAS-NetFxEnvironment" state="true"/> 
    <selection name="WAS-ConfigurationAPI" state="true"/> 
  </package> 
</servicing> 
</unattend>
```

### Etapa 4: Obter o número de build do Windows

Em seguida, você deve verificar o número de versão do Windows instalado. Para localizar a versão exata, faça o seguinte:

1. No Menu Iniciar, clique em **Executar** e vá para o explorer.

   - No Explorador de Arquivos, navegue até o diretório do Windows e localize o regedit.exe
   - Clique com o botão direito do  **mouse emregedit.exe** e selecione **Propriedades**
   - Na caixa de diálogo Propriedades, selecione a guia **Detalhes** e anote a Versão do Produto.  
     [![Captura de tela da guia Detalhes da caixa de diálogo Propriedades regedit, com o campo Versão do produto sendo realçado.](using-unattended-setup-to-install-iis/_static/image3.jpg)](https://learn.microsoft.com/pt-br/iis/install/installing-iis-7/using-unattended-setup-to-install-iis/_static/image1.jpg)
2. No bloco de notas, insira esse valor na versão do atributo XML para corresponder ao build que você instalou.

   - Nesse caso, version="6.0.5308.6"
   - Se você tiver instalado em uma CPU de 64 bits, deverá editar o atributo processorArchitecture XML:

     processorArchitecture="amd64"

Observação

Os valores possíveis são: x86, amd64 e ia64.

### Etapa 5: Salvar o arquivo de Unattend.xml

Salve o arquivo do bloco de notas com o nome "unattend.xml"

### Etapa 6: Executar pkgmgr com o arquivo Unattend.xml

Na janela de comando, insira a seguinte linha de comando:

```
start /w pkgmgr /n:unattend.xml
```

Observação: Se você salvou o arquivo unattend.xml em uma pasta de unidade diferente da unidade e pasta atuais da janela de comando, é necessário especificar o caminho completo do arquivo unattend.xml no parâmetro pkgmgr /n:.

### Etapa 7: Aguardar a conclusão da instalação

A configuração do IIS 7.0 por meio de pkgmgr.exe deve levar de 1 a 5 minutos. Quando o prompt de comando é retornado, a instalação do IIS 7.0 é concluída.

### Etapa 8: Verificar o código de erro

No prompt de comando, digite:

```
echo %errorlevel%
```

Um resultado de 0 indica êxito.

## Resumo

Neste artigo, examinamos como usar pckmgr.exe para instalar o Sistema Operacional e o IIS 7.0.

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
