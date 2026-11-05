# Microsoft.Web.Administration | Microsoft Learn

> **Fonte / Source:** https://learn.microsoft.com/pt-br/iis/manage/provisioning-and-managing-iis/microsoftwebadministration

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

# Microsoft.Web.Administration

Comentários

por [Walter Oliver](https://github.com/walterov)

## Introdução

O código gerenciado pode ser usado para provisionar sites e editar a configuração.

## Usando o script

Use o seguinte para criar um site e um pool de aplicativos e definir diretórios de compilação temporários.

### Criando um pool de sites e aplicativos

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

### Definir um diretório de compilação temporária exclusivo para cada site

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

Observação

Esse código usa o serviço de rede como a identidade do pool de aplicativos. Ele deve usar uma conta exclusiva do AD ou uma conta de máquina para cada site.

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
