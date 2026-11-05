# Selecionar uma opção de provisionamento | Microsoft Learn

> **Fonte / Source:** https://learn.microsoft.com/pt-br/iis/manage/creating-websites/select-a-provisioning-option

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

# Selecionar uma opção de provisionamento

Comentários

por Tali Smith

## Introdução

Tanto o administrador de TI quanto o desenvolvedor de software precisam considerar o provisionamento de sites em um ambiente de hospedagem. O provisionamento de sites no IIS (Serviços de Informações da Internet) pode ser feito de várias maneiras:

- Por meio da interface do usuário do Gerenciador do IIS
- Programaticamente, por meio do uso de C#
- Por meio de scripts do Windows PowerShell™

Este artigo descreve as vantagens e desvantagens das diferentes opções para administradores de TI e desenvolvedores de software e fornece alguns exemplos. Para obter mais informações, consulte [Opções de Provisionamento no IIS](manage__provisioning-and-managing-iis__provisioning-options-in-iis-7.md).

## Usar a interface do usuário ou a delegação remota

Você pode usar o Gerenciador do IIS, a interface do usuário de gerenciamento que vem com o IIS, para configurar as propriedades mais comuns no ApplicationHost.config. Abra as folhas de propriedades de um serviço, site ou diretório virtual e altere os valores. As alterações ocorrem imediatamente sem a necessidade de parar e iniciar o servidor.

- **Vantagens**  
  Quando você cria um site ou diretório virtual ou quando configura um recurso com mais de uma propriedade, a interface do usuário de gerenciamento define todas as propriedades de suporte. O Gerenciador do IIS informa se um novo valor é inválido.
- **Desvantagens**  
  O gerenciamento de configurações de servidor IIS grandes ou vários servidores pela Internet pode ser lento e complicado. Nem todas as propriedades de configuração podem ser acessadas na interface do usuário.

Para obter instruções sobre como usar a interface do usuário para provisionar sites, consulte [Criar um site (IIS 7)](https://technet.microsoft.com/library/cc772350(WS.10).aspx).

## Usar o Editor de Texto

Você pode usar um editor de texto, como o Bloco de Notas, para editar diretamente o arquivo ApplicationHost.config enquanto o IIS está em execução. As entradas diferenciam maiúsculas de minúsculas.

- **Vantagens**  
  Você pode alterar várias propriedades ou criar novos nós em uma instância sem precisar abrir e fechar várias folhas de propriedades.
- **Desvantagens**  
  É fácil corromper um servidor IIS usando editar durante a execução. Se suas edições incluirem XML que não está formatado corretamente, o IIS não poderá ler o ApplicationHost.config e o último arquivo de histórico deverá ser restaurado. Se suas edições incluirem uma configuração inválida que não esteja em conformidade com as regras no esquema, um erro será registrado no visualizador de eventos, mas o restante do IIS poderá ser executado.  
  A herança de propriedades deve ser levada em consideração ao cortar e colar partes do ApplicationHost.config. A seção que você cola pode herdar propriedades de nós pai e transmitir propriedades para nós filhos.  
  Se você estiver usando a editar enquanto está em execução pela rede e a conexão falhar, você poderá acabar com um ApplicationHost.config inválido. Observe que o uso da edição enquanto em execução em vários servidores em uma estrutura Web leva tanto tempo quanto o uso da interface do usuário.

## Utilize a Instrumentação de Gerenciamento do Windows (WMI)

Você pode usar a WMI (Instrumentação de Gerenciamento do Windows®) para configurar programaticamente o IIS em um script ou programa compilado. As alterações ocorrem imediatamente sem a necessidade de parar e iniciar o servidor.

- **Vantagens**  
  A configuração de sites grandes ou vários servidores com WMI é rápida e eficiente. O WMI também é scriptável. Segue um exemplo de script WMI.
- **Desvantagens**  
  Se você criar um site ou diretório virtual ou usar uma propriedade que dependa de outras pessoas, também deverá garantir que você saiba quais propriedades de suporte precisam ser criadas e definidas.

O código a seguir pode ser usado para criar um site e um pool de aplicativos.

```
If WScript.Arguments.Count < 4 Then 
    WScript.Echo "Not enough parameters. Enter: username | web site name | app pool password | site ID" 
    WScript.Quit
End If

userName = WScript.Arguments(0) 
siteName = WScript.Arguments(1)
appPoolPassword = WScript.Arguments(2)
siteID = WScript.Arguments(3) 
appPoolName = "apppool_" & siteName
physicalPath = "\\server\share" & userName & "\" & siteName [slg1] [slg2] 

Set oIIS = GetObject("winmgmts:root\WebAdministration")

Set oBinding = oIIS.Get("BindingElement").SpawnInstance_
oBinding.BindingInformation = "*:80:" & siteName
oBinding.Protocol = "http"

Set oBinding2 = oIIS.Get("BindingElement").SpawnInstance_
oBinding2.BindingInformation = "*:80:www." & siteName
oBinding2.Protocol = "http"
arrBindings = array(oBinding, oBinding2)

Set oSiteDefn = oIIS.Get("Site")
oSiteDefn.Create siteName, arrBindings, physicalPath
WScript.Echo "Site created"

WScript.Sleep(100)

Set oSite = oIIS.Get("Site.Name='" & siteName & "'")
oSite.ID = siteID 
oSite.Put_

Set oSite = oIIS.Get("Site.Name='" & siteName & "'")
appPoolUserName = "poolname_" & siteID

Set oAppDefn = oIIS.Get("ApplicationPool")
oAppDefn.Create appPoolName
WScript.Echo "App pool created"

WScript.Sleep(3000)

Set oAppDefn = oIIS.Get("ApplicationPool.Name='" & appPoolName & "'")
oAppDefn.ProcessModel.IdentityType = 3
oAppDefn.ProcessModel.Username = appPoolUserName
oAppDefn.ProcessModel.Password = appPoolPassword
oAppDefn.Put_ 

WScript.Echo "Identity set for App Pool"

Set oSiteDefn = oIIS.Get("Site.Name='" & siteName & "'")
oSiteDefn.ApplicationDefaults.ApplicationPool = appPoolName
oSiteDefn.Put_
WScript.Echo "Site assigned to pool"

Set oSite = oIIS.Get("Site.Name='" & siteName & "'")
oSite.Start
```

## Usar AppCmd.exe

AppCmd.exe pode ser usado para provisionar sites e executar muitos comandos para editar a configuração.

O exemplo de código abaixo pode ser utilizado para criar um site e um pool de aplicações (com rastreamento de solicitações com falha e locais de arquivos de log W3svc).

```
%windir%\system32\inetsrv\Appcmd add AppPool -name:%poolname% -processModel.username:%poolaccount% -processModel.password:%poolaccountpwd% -enable32BitAppOnWin64:true

%windir%\system32\inetsrv\AppCmd add site -name:%sitename% -bindings:http/*:80:%sitename% -physicalPath:%sitepath% -logfile.directory:%W3svclogpath% -traceFailedRequestsLogging.directory:%FREBlogpath%

%windir%\system32\inetsrv\Appcmd set app -app.name:%sitename%/ -applicationPool:%poolname%
```

Você pode usar o seguinte código para configurar o local do arquivo de log de Rastreamento de Solicitações com Falha:

```
%windir%\system32\inetsrv\AppCmd set config <sitename> -section:traceFailedRequestsLogging.directory:\\remoteserver\content$\<sitename>\logs\failedReqLog
```

Você pode usar o seguinte código para configurar o local do arquivo de log do W3SVC:

```
%windir%\system32\inetsrv\AppCmd set config <sitename> -section:-logfile.directory:\\remotefileshare\content$\<sitename>\logs\logfiles
```

## Usar uma API Gerenciada (Microsoft.Web.Administration)

Você pode usar APIs (interfaces de programação de aplicativo gerenciado) no Microsoft.Web.Administration para configurar programaticamente o IIS em qualquer aplicativo .NET da Microsoft®. Microsoft.Web.Administration é uma nova API no IIS que permite que os desenvolvedores que usam código gerenciado leiam e manipulem a configuração do servidor de maneira simples.

- **Vantagens**  
  A configuração de sites grandes ou vários servidores é rápida e eficiente com o Microsoft.Web.Administration. A Microsoft.Web.Administration pode ser gerenciada usando a RPC (chamada de procedimento remoto) para a configuração do servidor remoto. Microsoft.Web.Administration pode criar até 100.000 sites em 62 segundos (aproximadamente 1.600 sites/s).
- **Desvantagens**  
  Microsoft.Web.Administration só pode ser usado no sistema operacional Windows®. Muitos objetos não são expostos como objetos fortemente tipados, portanto, você deve entender as APIs de nível inferior para configurar determinados objetos e propriedades.

O código a seguir pode ser usado para criar um site e um pool de aplicativos e definir diretórios de compilação temporários.

```
using System;
using System.Collections.Generic;
using System.Text;
using System.Diagnostics;
using Microsoft.Web.Administration;

namespace IIS7Demos
{
   class CreateSites
   {
      const int NUMBEROFSITES = 100;
      const int SITEBASENUMBER = 1000;
      const string POOLPREFIX = "POOL_";
      const string SITENAMEPREFIX = "SITE";
      const string ROOTDIR = "e:\\content"; 

   static void Main(string[] args)
   { 
      ServerManager mgr = new ServerManager();
      SiteCollection sites = mgr.Sites;

      Stopwatch watch = new Stopwatch();
      watch.Start();

      for (int i = SITEBASENUMBER; i < NUMBEROFSITES+SITEBASENUMBER; i++)
      {
         if (!CreateSitesInIIS(sites, SITENAMEPREFIX, i, ROOTDIR))
         {
            Console.WriteLine("Creating site {0} failed", i);
         }

         if (!CreateAppPoolInIIS(mgr, SITENAMEPREFIX, i))
         {
            Console.WriteLine("Creating apppool {0} failed", i);
         }
      }

      mgr.CommitChanges();
      watch.Stop();
      Console.WriteLine("Creating {0} sites took {1} seconds", NUMBEROFSITES, ((double)watch.ElapsedMilliseconds) / 1000f);
   }

   static bool CreateSitesInIIS(SiteCollection sites, string sitePrefix, int siteId, string dirRoot)
   {
      string siteName = sitePrefix + siteId;
      // site gets set to Poolname using the following format. Example: 'Site_POOL10'
      string poolName = POOLPREFIX + sitePrefix + siteId;

      try
      {
         Site site = sites.CreateElement();
         site.Id = siteId;
         site.SetAttributeValue("name", siteName);
         sites.Add(site);

         Application app = site.Applications.CreateElement();
         app.SetAttributeValue("path", "/");
         app.SetAttributeValue("applicationPool", poolName);
         site.Applications.Add(app);

         VirtualDirectory vdir = app.VirtualDirectories.CreateElement();
         vdir.SetAttributeValue("path", "/");
         vdir.SetAttributeValue("physicalPath", dirRoot + @"\" + siteName);

         app.VirtualDirectories.Add(vdir);

         Binding b = site.Bindings.CreateElement();
         b.SetAttributeValue("protocol", "http");
         b.SetAttributeValue("bindingInformation", ":80:" + siteName);
         site.Bindings.Add(b);
      }
      catch (Exception ex)
      {
         Console.WriteLine("Create site {0} failed. Reason: {1}", siteName, ex.Message);
         return false;
      }
      return true;
   }

   static bool CreateAppPoolInIIS(ServerManager mgr, string sitePrefix, int siteId)
   {
      string poolName = POOLPREFIX + sitePrefix + siteId;

      try
      {
         mgr.ApplicationPools.Add(poolName);
         ApplicationPool apppool = mgr.ApplicationPools[poolName];
         apppool.ManagedPipelineMode = ManagedPipelineMode.Integrated;
      }

      catch (Exception ex)
      {
         Console.WriteLine("Create site {0} failed. Reason: {1}", poolName, ex.Message);
         return false;
      }
      return true;
   }
  }
}
```

Para definir um diretório de compilação temporário exclusivo para cada site, use o seguinte código:

```
using System;
using Microsoft.Web.Administration;
public class setASPNETCompilationDirectory
{
   static void Main()
   {
      ServerManager manager = new ServerManager();
      Configuration rootConfig = manager.GetWebConfiguration(new WebConfigurationMap(), null);
      ConfigurationSection section = rootConfig.GetSection("system.web/compilation");
      section.Attributes["tempDirectory"].Value = @"e:\inetpub\temp\temporary asp.net files\site1";
      section.SetMetadata("lockAttributes", "tempDirectory");
      manager.CommitChanges();
   }
}
```

## Usar ADSI (Interfaces de Serviço do Active Directory)

Você pode usar o ADSI (Active Directory® Service Interfaces) para configurar programaticamente o IIS em um script ou programa compilado. As alterações ocorrem imediatamente sem a necessidade de parar e iniciar o servidor.

- **Vantagens**  
  A configuração de sites grandes ou vários servidores com ADSI é rápida e eficiente. O ADSI é scriptável e você pode configurar o IIS 4.0, o IIS 5.0, o IIS 5.1 e o IIS 6.0 e o IIS7 e superiores (com o modo compatível do IIS6 habilitado) com ADSI, contanto que você use a verificação de erros para lidar com objetos e propriedades ausentes. Você também pode estender o esquema do IIS com ADSI, embora não seja recomendável.
- **Desvantagens**  
  Se você criar um site ou diretório virtual ou usar uma propriedade que dependa de outras pessoas, também deverá garantir que você saiba quais propriedades de suporte precisam ser criadas e definidas. O ADSI só estará disponível para o IIS 7 e superior se o modo compatível com O IIS 6 estiver habilitado. Observe que também é difícil de usar.

## Usar a Automação OLE

A Automação OLE (ProgId=Microsoft.ApplicationHost.WritableAdminManager) pode ser usada no Microsoft® JScript® e no Microsoft® Visual Basic® Scripting Edition (VBScript).

- **Vantagens**  
  A configuração de sites grandes ou vários servidores é rápida e eficiente. Na verdade, a automação OLE é um pouco mais rápida do que a Microsoft.Web.Administration e também é remota.
- **Desvantagens**  
  Você precisa ter uma compreensão das APIs de nível inferior para configurar determinados objetos e propriedades. Ele requer RPC para configuração de servidor remoto.

## Usar objetos base de administrador (ABO)

Use o ABO para configurar programaticamente o IIS em um programa compilado escrito em C, C++ou Microsoft® Visual Basic® 6.0.

- **Vantagens**  
  É mais rápido do que usar ADSI ou WMI porque os provedores ADSI e WMI são wrappers para ABO.
- **Desvantagens**  
  Se você criar um site ou diretório virtual ou usar uma propriedade que dependa de outras pessoas, também deverá garantir que você saiba quais propriedades de suporte precisam ser criadas e definidas.  
  A ABO não é scriptável. Os aplicativos ABO só podem ser gravados no C++ ou no Visual Basic 6.0.  
  Como a ABO acessa o IIS no nível mais baixo, é mais difícil usar do que ADSI ou WMI porque não há métodos que compactem várias linhas de código ABO em uma chamada de método. Além disso, não há proteções para impedir que você defina configurações inválidas.

Observação

*Este artigo atualiza os artigos em: "[Exemplos de código e scripts](manage__provisioning-and-managing-iis.md)" de Walter Oliver, publicado em 2 de dezembro de 2007.*

## Links para obter mais informações

- [Referência de configuração do IIS](https://www.iis.net/configreference).
- [Gerenciamento do IIS com o Snap-in do IIS PowerShell](manage__powershell.md).
- [Exemplos de scripts do C# e do PowerShell](web-hosting__configuring-components__powershell-scripts.md).
- [Exemplo de provisionamento em C#.](manage__provisioning-and-managing-iis__provisioning-sample-in-c.md)

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
