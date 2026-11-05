# Como usar Microsoft.Web.Administration | Microsoft Learn

> **Fonte / Source:** https://learn.microsoft.com/pt-br/iis/manage/scripting/how-to-use-microsoftwebadministration

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

# Como usar Microsoft.Web.Administration

Comentários

por [Saad Ladki](https://twitter.com/saadladki)

## Introdução

O IIS 7.0 e posteriores fornecem uma API (interface de programação de aplicativo) de gerenciamento de código gerenciado abrangente que permite a manipulação completa dos arquivos de configuração XML e o acesso de conveniência aos objetos do servidor. Este documento explica como usar a nova API de gerenciamento para modificar a configuração do servidor e administrar objetos de servidor.

O IIS inclui Microsoft.Web.Administration, que é uma nova API de gerenciamento para o servidor Web que permite a configuração de edição por meio da manipulação completa dos arquivos de configuração XML. Ele também fornece objetos de conveniência para gerenciar o servidor, suas propriedades e estado. O aspecto de edição de configuração da API fornece acesso programático às propriedades de configuração de leitura e gravação na hierarquia de arquivos de configuração do IIS e arquivos de configuração específicos. O aspecto de gerenciamento de objetos dessa API fornece uma série de objetos de administração de nível superior para o gerenciamento direto do servidor (ou seja, sites, pools de aplicativos, processos de trabalho etc.).

As classes de gerenciamento residem no namespace Microsoft.Web.Administration. As classes fornecem uma interface de tipo fraco para acessar seções de configuração e objetos de conveniência com propriedades e métodos que representam atributos da configuração (como o caminho de um diretório virtual) ou ações a serem executadas no objeto (como reciclar um pool de aplicativos).

## Criar um novo site

O código a seguir cria um site intitulado "Site de Carros de Corrida" com seu aplicativo raiz e diretório virtual raiz. Ele também define o site para usar o protocolo HTTP na porta 80 e define o caminho físico em d:\inetput\wwwroot\racing.

```
using System;
using System.Collections.Generic;
using System.Text;
using Microsoft.Web.Administration;
namespace MSWebAdmin_Application
{       
    class Program
    {
        static void Main(string[] args)
        {
            ServerManager serverManager = new ServerManager();
            Site mySite = serverManager.Sites.Add("Racing Cars Site", "d:\\inetpub\\wwwroot\\racing",  8080);
            mySite.ServerAutoStart = true;
            serverManager.CommitChanges();
         }
    }
}
```

O ServerManager é a classe de fábrica que contém um conjunto de objetos de conveniência do servidor para os quais propriedades e métodos estão disponíveis para uso de maneira forte. É o principal ponto de entrada para gerenciar o servidor. O gerenciamento do servidor poderia ser realizado por outros caminhos complicados (acessando a configuração XML bruta ou chamando APIs de estado), mas por meio desses objetos, o gerenciamento do servidor é feito sem dificuldades. O conjunto mais comum de objetos está disponível para uso por meio do gerenciador de servidores: aplicativos, diretórios virtuais, sites, processos de trabalho e domínios de aplicativo.

```
ServerManager serverManager = new ServerManager();
```

O objeto sites permite o acesso a propriedades e aplicativos de sites. Ele também contém métodos para adicionar um site ao sistema ou obter a contagem total de sites. O método de adição também define o nome do site, o caminho do diretório virtual raiz e o número da porta como inteiro. Observe também que essa chamada está sendo instanciada como um objeto Site, mySite, sobre o qual podemos agir diretamente modificando as propriedades do site recém-criado.

```
Site mySite = serverManager.Sites.Add("Racing Cars Site", "d:\\inetpub\\wwwroot\\racing",  8080);
```

Os objetos de conveniência facilitam a modificação de propriedades. Ao acessar as propriedades do objeto mySite, é possível definir a propriedade de início automático do site como "true" diretamente sem conhecer nenhum atributo XML específico ou conceitos de elemento.

```
mySite.ServerAutoStart = true;
```

Além disso, uma abordagem diferente que poderia ter sido adotada para modificar a propriedade de inicialização automática é não instanciar um objeto de site. Em vez disso, busque o site depois que ele for criado e modifique suas propriedades diretamente. O objeto de gerenciamento usa o conceito de indexadores para pesquisar objetos específicos por chaves, como nome ou índice, sem precisar incorrer em chamadas caras para listar todo o conjunto de objetos. Ao definir o nome, é possível obter o objeto específico e agir sobre ele.

```
serverManager.Sites["Racing Cars Site"].ServerAutoStart = true;
```

Para atualizar, a chamada de confirmação de alterações executa a transação para serializar a configuração, se alguma tiver sido alterada, para o disco.

```
serverManager.CommitChanges();
```

A execução do código acima gera a seguinte saída em applicationHost.config na seção. Em vez de manipular o XML diretamente e trabalhar no nível do elemento e do atributo, usar os objetos do gerenciador de servidor fornece uma maneira conveniente de gerenciar o servidor Web.

```
<site name="Racing Cars Site" id="2" serverAutoStart="true"> 
    <application path="/"> 
        <virtualDirectory path="/" physicalPath="d:\inetpub\wwwroot\racing" /> 
    </application> 
    <bindings> 
        <binding protocol="http" bindingInformation=":8080:" /> 
    </bindings> 
</site>
```

## Criar um novo pool de aplicativos

O código a seguir modifica o "Site de Carros de Corrida" existente e altera seu nome e o caminho físico em d:\inetput\wwwroot\racing. Ele também cria um novo pool de aplicativos, define algumas propriedades, define o site de corrida para usar esse pool e, por fim, o recicla.

```
using System;
using System.Collections.Generic;
using System.Text;
using Microsoft.Web.Administration;
namespace MSWebAdmin_Application
{       
    class Program
    {
        static void Main(string[] args)
        {
            ServerManager serverManager = new ServerManager();
            Site site = serverManager.Sites["Racing Cars Site"];
            site.Name = "Racing Site";
            site.Applications[0].VirtualDirectories[0].PhysicalPath = "d:\\racing";
            serverManager.ApplicationPools.Add("RacingApplicationPool");
            serverManager.Sites["Racing Site"].Applications[0].ApplicationPoolName = "RacingApplicationPool";
            ApplicationPool apppool = serverManager.ApplicationPools["RacingApplicationPool"];
            apppool.ManagedPipelineMode = ManagedPipelineMode.ISAPI;
            serverManager.CommitChanges();
            apppool.Recycle();
        }
    }
}
```

Em vez de indexar para buscar o site, você pode criar uma instância de um objeto de site e definir a referência a ele. Depois que a referência for definida, você poderá chamar os métodos do objeto do site, nesse caso o método 'name', para renomear o site diretamente.

```
Site site = serverManager.Sites["Racing Cars Site"];
site.Name = "Racing Site";
```

Aqui está outro uso dos indexadores para obter o aplicativo raiz e, em seguida, o diretório raiz e definir o caminho físico nele.

```
site.Applications[0].VirtualDirectories[0].PhysicalPath = "d:\\racing";
```

Além do objeto do site, temos o objeto do pool de aplicativos que fornece uma maneira conveniente de obter e definir propriedades de configuração, bem como agir em dados e métodos de estado. Um novo pool de aplicativos é criado e, imediatamente, o site é colocado nesse pool de aplicativos.

```
serverManager.ApplicationPools.Add("RacingApplicationPool");
serverManager.Sites["Racing Site"].Applications[0].ApplicationPoolName = "RacingApplicationPool";
```

Assim como o objeto do site do gerenciador de servidores, o objeto do pool de aplicativos do gerenciador de servidores permite que você crie o objeto do pool de aplicativos e defina a referência a ele. Você também pode obter e definir propriedades, além de invocar métodos.

Depois que os dados de configuração do pool de aplicativos forem serializados para o arquivo por meio da chamada de atualização, você poderá executar o método de reciclagem nele. Essa chamada de reciclagem não é necessária, pois o pool de aplicativos será simplesmente criado e não há necessidade. Mas isso ilustra que ações podem ser tomadas em objetos que foram criados somente depois que são serializados em disco e o servidor pode buscar essa configuração e agir sobre ela.

```
ApplicationPool apppool = serverManager.ApplicationPools["RacingApplicationPool"];
apppool.ManagedPipelineMode = ManagedPipelineMode.ISAPI;
serverManager.CommitChanges();
apppool.Recycle();
```

A execução do código acima gera a seguinte saída em applicationHost.config na seção. Em vez de manipular o XML diretamente e trabalhar no nível do elemento e do atributo, usar os objetos do gerenciador de servidor fornece uma maneira conveniente de gerenciar o servidor Web.

```
<site name="Racing Site" id="2" serverAutoStart="true"> 
    <application path="/"> 
        <virtualDirectory path="/" physicalPath="d:\racing" /> 
    </application> 
    <bindings> 
        <binding protocol="http" bindingInformation=":8080:" /> 
    </bindings> 
</site>
```

Além disso, as seguintes alterações ocorrem na seção:

```
<add name="RacingApplicationPool" managedPipelineMode="ISAPI" />
```

## Definir configuração no web.config raiz do site

O código a seguir define o atributo "habilitado" da seção como false para o site "Site Padrão".

```
using System;
using System.Collections.Generic;
using System.Text;
using Microsoft.Web.Administration;
namespace MSWebAdmin_Application
{
    class Program
    {
        static void Main(string[] args)
        {
            ServerManager serverManager = new ServerManager();
            Configuration config =
            mgr.GetWebConfiguration("Default Web Site");
            ConfigurationSection section = config.GetSection("system.webServer/defaultDocument");
            ConfigurationAttribute enabled = section.GetAttribute("enabled");
            enabled.Value = true;
            serverManager.CommitChanges();
        }
    }
}
```

A configuração é uma classe que fornece acesso às seções de configuração no sistema. Com base nas diferentes chamadas para obter a configuração, você pode acessar applicationHost.config, web.config, administration.config ou qualquer outro arquivo de configuração. A chamada GetWebConfiguration obtém especificamente um arquivo web.config para o site fornecido – Site Padrão – e o caminho específico – raiz.

```
Configuration config = serverManager.GetWebConfiguration("Default Web Site");
```

Depois que o arquivo web.config é adquirido (se ele não existir, é criado), a chamada para obter uma seção é feita. Estamos procurando a seção para desabilitá-la. Mesmo que o arquivo web.config não exista (ou mesmo existindo, não haja uma seção definida explicitamente), ainda haverá uma configuração efetiva aplicada ao nível do site. Essa é a configuração que será substituída.

```
ConfigurationSection section = config.GetSection("system.webServer/defaultDocument");
```

Usando métodos no objeto de seção, você pode obter o atributo habilitado e definir seu valor por meio do método de valor. Somente após chamar o método de confirmação de alterações no gerenciador de servidores, as alterações serão serializadas e persistidas no disco, sendo então imediatamente processadas pelo servidor. Se houver várias instâncias de objetos de configuração, executar o comando de confirmação no gerenciador de servidor gravará todos os objetos no disco.

```
ConfigurationAttribute enabled = section.GetAttribute("enabled");
enabled.Value = true;    
serverManager.CommitChanges();
```

Outra opção para obter e definir informações de atributo de uma seção é por meio do uso de indexadores. A linha de código a seguir pode ser usada depois de obter o objeto de seção para definir o valor do atributo habilitado.

```
section["enabled"] = true;
```

O resultado final é a configuração definida no arquivo web.config do site especificado.

## Definir configuração para um site no applicationHost.config

O código a seguir define o atributo "habilitado" da seção como false para o site "Site Padrão".

```
using System;
using System.Collections.Generic;
using System.Text;
using Microsoft.Web.Administration;

namespace MSWebAdmin_Application
{
    class Program
    {
        static void Main(string[] args)
        {
            ServerManager serverManager = new ServerManager();
            Configuration config = serverManager.GetApplicationHostConfiguration();
            ConfigurationSection section = config.GetSection("system.webServer/defaultDocument","Default Web Site");
            ConfigurationAttribute enabled = section.GetAttribute("enabled");
            enabled.Value = false;
            serverManager.CommitChanges();
        }
    }
}
```

Esse código é efetivamente o mesmo da tarefa anterior; a única diferença é a chamada do configuration manager para obter o arquivo applicationHost.config por meio de GetApplicationHostconfiguration.

Observação

A chamada get é aquela que especifica tanto a seção que será lida e/ou modificada, quanto o caminho de acesso para ela.

```
Configuration config = serverManager.GetApplicationHostConfiguration();
```

O resultado final é a configuração definida no arquivo applicationHost.config aplicável ao site especificado por meio de uma marca de localização.

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
