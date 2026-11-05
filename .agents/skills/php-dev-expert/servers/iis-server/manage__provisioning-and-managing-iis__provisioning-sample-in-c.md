# Exemplo de provisionamento em C# | Microsoft Learn

> **Fonte / Source:** https://learn.microsoft.com/pt-br/iis/manage/provisioning-and-managing-iis/provisioning-sample-in-c

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

# Exemplo de provisionamento em C#

Comentários

por [Walter Oliver](https://github.com/walterov)

## Visão geral

Ao longo dos anos, tornou-se simples para os usuários da Web avançados criarem seu próprio site. Depois que um usuário final tiver registrado seu nome de domínio, há vários tipos de hosters para escolher. Os hosters da Web estão disponíveis em todo o mundo para atender às demandas dos clientes finais. Mas, independentemente de qual host é escolhido, o cenário de inscrição e criação de um site é semelhante em todos os casos.

Inicialmente, uma nova conta de usuário precisa ser estabelecida para o usuário. Depois que a conta for configurada, o usuário final decidirá quais recursos e opções o site deve incorporar: por exemplo, quanto espaço em disco, funcionalidade ftp, criação de diretórios virtuais, se bancos de dados são necessários ou não, etc. Os hosters criam painéis de controle ou aplicativos de painel que permitem que os usuários finais criem e gerenciem esses recursos.

Há várias maneiras pelas quais esses recursos podem ser implementados no painel de controle. Nesta seção, analisamos a implementação do aspecto de provisionamento desses recursos por meio do código gerenciado. Um resumo das características é o seguinte:

## Provisionar uma nova conta de usuário

O proprietário do site que gerencia e mantém o site precisa de uma nova conta de usuário. A conta pode ser uma conta do Active Directory® ou uma conta de usuário local. Os fragmentos de código a seguir demonstram a criação de uma conta local. Observe que o namespace System.DirectoryServices deve ser especificado.

```
public static bool CreateLocalUserAccount(string userName, string password)
{
   try
   {
      if (string.IsNullOrEmpty(userName))
        throw new ArgumentNullException("userName", "Invalid User Name.");
      if (string.IsNullOrEmpty(password))
        throw new ArgumentNullException("password", "Invalid Password.");
      DirectoryEntry directoryEntry = new DirectoryEntry("WinNT://" +
      Environment.MachineName + ",computer");
      bool userFound = false;
      try
      {
         if (directoryEntry.Children.Find(userName, "user") != null)
           userFound = true;
      }
      catch
      {
         userFound = false;
      }
      if (!userFound)
      {
         DirectoryEntry newUser = directoryEntry.Children.Add(userName, "user");
         newUser.Invoke("SetPassword", new object[] { password });
         newUser.Invoke("Put", new object[] { "Description", "Application Pool User Account" });
         newUser.CommitChanges();
         newUser.Close();
      }
   }
   catch (Exception ex)
   {
        throw new Exception(ex.Message, ex);
   }
   return true;
}
```

## Criar Armazenamento de Conteúdo

Um site requer um local nos sistemas de arquivos para o qual os usuários podem carregar conteúdo para o site. A Classe de Diretório do Microsoft® .NET fornece a API (interface de programação do aplicativo) para criar diretórios no sistema de arquivos.

```
Directory.CreateDirectory(parentPath + "\\" + directoryName);
```

O armazenamento de conteúdo requer permissões específicas configuradas para que os usuários possam gerenciar seu próprio conteúdo. O fragmento de código a seguir demonstra como definir permissões de diretório usando código gerenciado em C#:

```
public static bool AddDirectorySecurity(string directoryPath, string userAccount, FileSystemRights rights, InheritanceFlags inheritanceFlags, PropagationFlags propagationFlags, AccessControlType controlType)
{
   try
   {
       // Create a new DirectoryInfo object.
       DirectoryInfo dInfo = new DirectoryInfo(directoryPath);
       // Get a DirectorySecurity object that represents the 
       // current security settings.
       DirectorySecurity dSecurity = dInfo.GetAccessControl();
       // Add the FileSystemAccessRule to the security settings. 
       dSecurity.AddAccessRule(new FileSystemAccessRule(userAccount, rights, inheritanceFlags, propagationFlags, controlType));
       // Set the new access settings.
       dInfo.SetAccessControl(dSecurity);
   }
   catch (Exception ex)
   {
       throw new Exception(ex.Message, ex);
   }
   return true;
}
```

O fragmento de código a seguir demonstra como definir a cota de disco usando o código gerenciado se a cota de disco for restrita. Para usar o gerenciamento de cotas de disco, você deve adicionar referência ao componente de gerenciamento de cotas de disco do Windows®; ele reside no Windows\system32\dskquota.dll.

```
public static bool AddUserDiskQuota(string userName, double quota, double quotaThreshold, string diskVolume)
{
   try
   {
      DiskQuotaControlClass diskQuotaCtrl = GetDiskQuotaControl(diskVolume);
      diskQuotaCtrl.UserNameResolution = UserNameResolutionConstants.dqResolveNone;
      DIDiskQuotaUser diskUser = diskQuotaCtrl.AddUser(userName);
      diskUser.QuotaLimit = quota;
      diskUser.QuotaThreshold = quotaThreshold;
    }
    catch (Exception ex)
    {
      throw new Exception(ex.Message, ex);
    }
    return true;
}
```

## Criar um pool de aplicativos

Um pool de aplicativos define as configurações de um processo de trabalho que hospeda um ou mais aplicativos do IIS 7 (Serviços de Informações da Internet 7), que realizam o processamento da solicitação. O pool de aplicativos é uma unidade de isolamento de processo, já que todo o processamento de solicitações para um aplicativo é executado nos processos de trabalho do pool de aplicativos.

Um pool de aplicativos também fornece isolamento, que, por sua vez, fornece segurança. Cada pool de aplicativos pode ser executado com uma identidade exclusiva e pode usar uma ACL (lista de controle de acesso) para impedir que aplicativos em outros pools acessem seus recursos. O fragmento de código a seguir demonstra a criação de um pool de aplicativos, definindo a identidade e definindo propriedades.

```
public static bool CreateApplicationPool(string applicationPoolName, ProcessModelIdentityType identityType, string applicationPoolIdentity, string password, string managedRuntimeVersion, bool autoStart, bool enable32BitAppOnWin64,ManagedPipelineMode managedPipelineMode, long queueLength, TimeSpan idleTimeout, long periodicRestartPrivateMemory, TimeSpan periodicRestartTime)
{
   try
   {
      if (identityType == ProcessModelIdentityType.SpecificUser)
      {
         if (string.IsNullOrEmpty(applicationPoolName))
            throw new ArgumentNullException("applicationPoolName", "CreateApplicationPool: applicationPoolName is null or empty.");
         if (string.IsNullOrEmpty(applicationPoolIdentity))
            throw new ArgumentNullException("applicationPoolIdentity", "CreateApplicationPool: applicationPoolIdentity is null or empty.");
         if (string.IsNullOrEmpty(password))
            throw new ArgumentNullException("password", "CreateApplicationPool: password is null or empty.");
      }
      using (ServerManager mgr = new ServerManager())
      {
         ApplicationPool newAppPool = mgr.ApplicationPools.Add(applicationPoolName);
         if (identityType == ProcessModelIdentityType.SpecificUser)
         {
            newAppPool.ProcessModel.IdentityType = ProcessModelIdentityType.SpecificUser;
            newAppPool.ProcessModel.UserName = applicationPoolIdentity;
            newAppPool.ProcessModel.Password = password;
         }
         else
         {
            newAppPool.ProcessModel.IdentityType = identityType;
         }
            if (!string.IsNullOrEmpty(managedRuntimeVersion))
               newAppPool.ManagedRuntimeVersion = managedRuntimeVersion;
               newAppPool.AutoStart = autoStart;
               newAppPool.Enable32BitAppOnWin64 = enable32BitAppOnWin64;
               newAppPool.ManagedPipelineMode = managedPipelineMode;
            if (queueLength > 0)
               newAppPool.QueueLength = queueLength;
            if (idleTimeout != TimeSpan.MinValue)
               newAppPool.ProcessModel.IdleTimeout = idleTimeout;
            if (periodicRestartPrivateMemory > 0)
               newAppPool.Recycling.PeriodicRestart.PrivateMemory = periodicRestartPrivateMemory;
            if (periodicRestartTime != TimeSpan.MinValue)
               newAppPool.Recycling.PeriodicRestart.Time = periodicRestartTime;
            mgr.CommitChanges();
         }
   }
   catch (Exception ex)
   {
      throw new Exception(ex.Message, ex);
   }
   return true;
 }
```

## Criar um Site

Um site é o contêiner lógico de nível superior que especifica como as solicitações HTTP são recebidas e processadas. Um site define um grupo de associações que determinam como o site escuta solicitações de entrada e um site contém as definições de aplicativos ou diretórios virtuais que particionam o namespace de URL do site para fins de estruturação do conteúdo do aplicativo.

O fragmento de código a seguir demonstra como criar um novo site. Os namespaces Microsoft.Web.Administration são necessários ao implementar o objeto ServerManager. Observe que o conjunto de aplicativos, o conjunto de sites e os objetos de associação são todos acessados por meio do objeto ServerManager.

```
public static bool CreateWebSite(string siteName)
{
   try
   {
     if (string.IsNullOrEmpty(siteName))
     {
        throw new ArgumentNullException("siteName", "CreateWebSite: siteName is null or empty.");
     }
     //get the server manager instance
     using (ServerManager mgr = new ServerManager())
     {
        Site newSite = mgr.Sites.CreateElement();
        //get site id
        newSite.Id = GenerateNewSiteID(mgr, siteName);
        newSite.SetAttributeValue("name", siteName);
        mgr.Sites.Add(newSite);
        mgr.CommitChanges();
     }
   }
   catch (Exception ex)
   {
      throw new Exception(ex.Message, ex);
   }
   return true;
}
```

## Criar um vínculo

Uma associação é uma combinação do nome do protocolo e das informações de associação específicas do protocolo. Embora o IIS 7 dê suporte a associações de vários protocolos (como o Windows® Communication Foundation [WCF] SOAP-TCP e FTP), o código a seguir usa apenas o caminho HTTP; uma associação HTTP define efetivamente um ponto de extremidade HTTP que escuta em um endereço IP de interface específico (ou todas as interfaces), um número de porta específico ou um cabeçalho de host HTTP específico (ou todos os cabeçalhos de host). Dessa forma, você pode configurar muitos sites em seu servidor que escutam em endereços IP diferentes, portas diferentes ou no mesmo endereço IP ou porta, mas com cabeçalhos de host diferentes.

```
public static bool AddSiteBinding(string siteName, string ipAddress, string tcpPort, string hostHeader, string protocol)
{
    try
    {
        if (string.IsNullOrEmpty(siteName))
        {
            throw new ArgumentNullException("siteName", "AddSiteBinding: siteName is null or empty.");
        }
        //get the server manager instance
        using (ServerManager mgr = new ServerManager())
        {
            SiteCollection sites = mgr.Sites;
            Site site = mgr.Sites[siteName];
            if (site != null)
            {
                string bind = ipAddress + ":" + tcpPort + ":" + hostHeader;
                //check the binding exists or not
                foreach (Binding b in site.Bindings)
                {
                    if (b.Protocol == protocol && b.BindingInformation == bind)
                    {
                        throw new Exception("A binding with the same ip, port and host header already exists.");
                    }
                }
                Binding newBinding = site.Bindings.CreateElement();
                newBinding.Protocol = protocol;
                newBinding.BindingInformation = bind;
                site.Bindings.Add(newBinding);
                mgr.CommitChanges();
                return true;
            } 
            else
                throw new Exception("Site: " + siteName + " does not exist.");
        }
    }
    catch (Exception ex)
    {
        throw new Exception(ex.Message, ex);
    }
}
```

## Criar um aplicativo raiz

Um aplicativo é um contêiner lógico para a funcionalidade do site, permitindo dividir o namespace da URL do site em partes separadas e controlar o comportamento de runtime de cada parte individualmente.

Por exemplo, você pode configurar cada aplicativo para residir em um pool de aplicativos separado. Isso isola um aplicativo de outros aplicativos, colocando-o em um processo separado e, opcionalmente, executando esse processo com uma identidade diferente do Windows para sandboxing.

```
public static bool AddApplication(string siteName, string applicationPath, string applicationPool, string virtualDirectoryPath, string physicalPath, string userName, string password)
{
    try
    {
        if (string.IsNullOrEmpty(siteName))
            throw new ArgumentNullException("siteName", "AddApplication: siteName is null or empty.");
        if (string.IsNullOrEmpty(applicationPath))
            throw new ArgumentNullException("applicationPath", "AddApplication: application path is null or empty.");
        if (string.IsNullOrEmpty(physicalPath))
            throw new ArgumentNullException("PhysicalPath", "AddApplication: Invalid physical path.");
        if (string.IsNullOrEmpty(applicationPool))
            throw new ArgumentNullException("ApplicationPool", "AddApplication: application pool namespace is Nullable or empty.");
        using (ServerManager mgr = new ServerManager())
        {
            ApplicationPool appPool = mgr.ApplicationPools[applicationPool];
            if (appPool == null)
                throw new Exception("Application Pool: " + applicationPool + " does not exist.");
            Site site = mgr.Sites[siteName];
            if (site != null)
            {
                Application app = site.Applications[applicationPath];
                if (app != null)
                    throw new Exception("Application: " + applicationPath + " already exists.");
                else
                {
                    app = site.Applications.CreateElement();
                    app.Path = applicationPath;
                    app.ApplicationPoolName = applicationPool;
                    VirtualDirectory vDir = app.VirtualDirectories.CreateElement();
                    vDir.Path = virtualDirectoryPath;
                    vDir.PhysicalPath = physicalPath;
                    if (!string.IsNullOrEmpty(userName))
                    {
                        if (string.IsNullOrEmpty(password))
                            throw new Exception("Invalid Virtual Directory User Account Password.");
                        else
                        {
                            vDir.UserName = userName;
                            vDir.Password = password;
                        }
                    }
                    app.VirtualDirectories.Add(vDir);
                }
                site.Applications.Add(app);
                mgr.CommitChanges();
                return true;
            }
            else
                throw new Exception("Site: " + siteName + " does not exist.");
        }
    }
    catch (Exception ex)
    {
        throw new Exception(ex.Message, ex);
    }
}
```

## Criar um Diretório Virtual

Um diretório virtual mapeia uma parte do namespace da URL do aplicativo para um local físico no disco. Quando uma solicitação é roteada para o aplicativo, ela usa o mesmo algoritmo para localizar o diretório virtual com o caminho virtual mais longo que corresponde ao restante do caminho absoluto da solicitação após o caminho do aplicativo.

```
public static bool AddVirtualDirectory(string siteName, string application, string virtualDirectoryPath, string physicalPath, string userName, string password)
{
    try
    {
        if (string.IsNullOrEmpty(siteName))
            throw new ArgumentNullException("siteName", "AddVirtualDirectory: siteName is null or empty.");
        if (string.IsNullOrEmpty(application))
            throw new ArgumentNullException("application", "AddVirtualDirectory: application is null or empty.");
        if (string.IsNullOrEmpty(virtualDirectoryPath))
            throw new ArgumentNullException("virtualDirectoryPath", "AddVirtualDirectory: virtualDirectoryPath is null or empty.");
        if (string.IsNullOrEmpty(physicalPath))
            throw new ArgumentNullException("physicalPath", "AddVirtualDirectory: physicalPath is null or empty.");
        using (ServerManager mgr = new ServerManager())
        {
            Site site = mgr.Sites[siteName];
            if (site != null)
            {
                Application app = site.Applications[application];
                if (app != null)
                {
                    VirtualDirectory vDir = app.VirtualDirectories[virtualDirectoryPath];
                    if (vDir != null)
                    {
                        throw new Exception("Virtual Directory: " + virtualDirectoryPath + " already exists.");
                    }
                    else
                    {
                        vDir = app.VirtualDirectories.CreateElement();
                        vDir.Path = virtualDirectoryPath;
                        vDir.PhysicalPath = physicalPath;
                        if (!string.IsNullOrEmpty(userName))
                        {
                            if (string.IsNullOrEmpty(password))
                                throw new Exception("Invalid Virtual Directory User Account Password.");
                            else
                            {
                                vDir.UserName = userName;
                                vDir.Password = password;
                            }
                        }
                        app.VirtualDirectories.Add(vDir);
                    }
                    mgr.CommitChanges();
                    return true;
                }
                else
                    throw new Exception("Application: " + application + " does not exist.");
            }
            else
                throw new Exception("Site: " + siteName + " does not exist.");
        }
    }
    catch (Exception ex)
    {
        throw new Exception(ex.Message, ex);
    }
}
```

## Criar um site FTP

Um site ftp permite que os clientes carreguem conteúdo em seu site e fornece a capacidade de mover arquivos pela Internet. O cliente pode gerenciar o conteúdo e o acesso. A criação de um site FTP é semelhante à de um site da Web: um pool de aplicativos e um site são criados com um aplicativo raiz e diretório virtual e, em seguida, uma associação FTP é aplicada.

```
public static bool CreateFtpSite(string applicationPoolName,string siteName, string domainName, string userName, string password,string contentPath, string ipAddress, string tcpPort, string hostHeader)
{
    try
    {
        //provision the application pool
        using (ServerManager mgr = new ServerManager())
        {
            ApplicationPool appPool = mgr.ApplicationPools[applicationPoolName];
            //per IIS7 team recommendation, we always create a new application pool
            //create new application pool
            if (appPool == null)
            {
                appPool = mgr.ApplicationPools.Add(applicationPoolName);
                //set the application pool attribute
                appPool.ProcessModel.IdentityType = ProcessModelIdentityType.SpecificUser;
                appPool.ProcessModel.UserName = domainName + "\\" + userName;
                appPool.ProcessModel.Password = password;
            }
            //if the appPool is null, we throw an exception. The appPool should be created or already exists.
            if (appPool == null)
                throw new Exception("Invalid Application Pool.");
            //if the site already exists, throw an exception
            if (mgr.Sites[siteName] != null)
                throw new Exception("Site already exists.");
            //create site
            Site newSite = mgr.Sites.CreateElement();                   
            newSite.Id = GenerateNewSiteID(mgr, siteName);
            newSite.SetAttributeValue("name", siteName);
            newSite.ServerAutoStart = true;
            mgr.Sites.Add(newSite);
            //create the default application for the site
            Application newApp = newSite.Applications.CreateElement();
            newApp.SetAttributeValue("path", "/"); //set to default root path
            newApp.SetAttributeValue("applicationPool", applicationPoolName);
            newSite.Applications.Add(newApp);
            //create the default virtual directory
            VirtualDirectory newVirtualDirectory = newApp.VirtualDirectories.CreateElement();
            newVirtualDirectory.SetAttributeValue("path", "/");
            newVirtualDirectory.SetAttributeValue("physicalPath", contentPath);
            newApp.VirtualDirectories.Add(newVirtualDirectory);
            //add the bindings 
            Binding binding = newSite.Bindings.CreateElement();
            binding.SetAttributeValue("protocol", "ftp");
            binding.SetAttributeValue("bindingInformation", ipAddress + ":" + tcpPort + ":" + hostHeader);
            newSite.Bindings.Add(binding);
            //commit the changes
            mgr.CommitChanges();
        }
    }
    catch (Exception ex)
    {
        throw new Exception(ex.Message, ex);
    }
    return true;
}
```

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
