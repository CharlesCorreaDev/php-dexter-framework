# Acessando seções de configuração usando Microsoft.Web.Administration (MWA) | Microsoft Learn

> **Fonte / Source:** https://learn.microsoft.com/pt-br/iis/manage/scripting/accessing-configuration-sections-using-microsoftwebadministration-mwa

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

# Acessando seções de configuração usando Microsoft.Web.Administration (MWA)

Comentários

por [Saad Ladki](https://twitter.com/saadladki)

## Resumo

Este artigo mostra como as seções de configuração nos arquivos de configuração do IIS (applicationHost.config e web.config) podem ser acessadas programaticamente usando as APIs Microsoft.Web.Administration. Trata de seções mais complexas que possuem elementos aninhados e coleções. Há exemplos usando as seções de configuração do IIS reais definidas no arquivo IIS\_schema.xml. Este artigo mostra como essas seções podem ser acessadas e manipuladas de forma genérica usando as classes base fornecidas pelo Microsoft.Web.Administration e também usando classes fortemente tipadas para representar essas seções.

## Introdução

Este artigo fornece exemplos de acesso programático às seções de configuração do IIS usando as APIs Microsoft.Web.Administration. Isso trata de seções que têm elementos aninhados (system.webServer/asp) e coleções (system.webServer/security/isapiCgiRestriction). A primeira seção mostra como essas seções podem ser manipuladas usando as classes base genéricas fornecidas pelo Microsoft.Web.Administration e a segunda seção fornece exemplos de como classes wrapper fortemente tipadas que representam essas seções são usadas.

## Esquema para seções com elementos e coleções aninhadas

#### Seções com elementos aninhados

Um exemplo de uma seção que tem elementos aninhados é a seção system.webServer/asp. O elemento "session" é definido na seção "asp". O esquema desta seção é mostrado abaixo. Há outras propriedades no esquema e outros elementos aninhados que não são mostrados no exemplo.

```
<sectionSchema name="system.webServer/asp"> 
  <attribute name="appAllowClientDebug" type="bool" defaultValue="false" /> 
  <attribute name="appAllowDebugging" type="bool" defaultValue="false" /> 
  <!-- Omitted to simplify --> 
  <element name="session"> 
    <attribute name="allowSessionState" type="bool" defaultValue="true" /> 
    <attribute name="keepSessionIdSecure" type="bool" defaultValue="true" /> 
  </element> 
</sectionSchema>
```

### Seções com uma coleção

Uma seção que tem uma coleção de elementos indexados por uma chave é a seção system.webServer/security/isapiCgiRestriction. O esquema da seção é conforme mostrado.

```
<sectionSchema name="system.webServer/security/isapiCgiRestriction"> 
  <collection addElement="add" clearElement="clear" removeElement="remove"> 
    <attribute name="path" type="string" expanded="true" required="true" isUniqueKey="true" validationType="nonEmptyString" /> 
      <attribute name="allowed" type="bool" required="true" defaultValue="false" /> 
      <attribute name="groupId" type="string" required="false" /> 
      <attribute name="description" type="string" /> 
  </collection> 
  <attribute name="notListedIsapisAllowed" type="bool" defaultValue="false" /> 
  <attribute name="notListedCgisAllowed" type="bool" defaultValue="false" /> 
</sectionSchema>
```

## Acesso genérico às seções

A Microsoft.Web.Administration fornece várias classes base genéricas que representam componentes diferentes no sistema de configuração.

- **Configuração:** representa um único arquivo de configuração (applicationHost.config ou os arquivos web.config para sites e aplicativos)
- **ConfigurationElement:** uma entidade genérica usada para representar um elemento em um arquivo de configuração. Essa é a classe base para seções de configuração, entradas de coleção, elementos aninhados em uma seção etc.
- **ConfigurationAttribute:** representa uma propriedade em um ConfigurationElement
- **ConfigurationSection:** deriva de ConfigurationElement e representa uma seção definida nos arquivos de esquema do IIS. Usado para acessar as várias propriedades de uma seção.
- **Configurationelementcollection:** Uma classe de coleção composta por ConfigurationElements. Também deriva de ConfigurationElement.

O exemplo a seguir mostra como os elementos aninhados podem ser acessados na seção system.webServer/asp.

```
static void Main(string[] args) {  
    ServerManager serverManager = new ServerManager();  
    Configuration config = serverManager.GetApplicationHostConfiguration();  
          ConfigurationSection section = config.GetSection("system.webServer/asp");  
          ConfigurationElement element = section.GetChildElement("session"); 
  Console.Write("allowSessionState attribute value: ");  
          Console.WriteLine(element.GetAttributeValue("allowSessionState"));  
          Console.WriteLine("Set allowSessionState value to false"); 
  element.SetAttributeValue("allowSessionState", false); 
  Console.Write("allowSessionState attribute value: ");  
          Console.WriteLine(element.GetAttributeValue("allowSessionState"));  
  serverManager.CommitChanges();  
    }
```

A classe ServerManager é o ponto de entrada para acessar as várias configurações de servidor. Definimos as propriedades nos arquivos applicationHost.config, mas essas propriedades também podem ser acessadas e alteradas nos arquivos web.config de sites e aplicativos individuais. A chamada CommitChanges salva as configurações alteradas.

O exemplo a seguir mostra como iterar pelos elementos de uma coleção e adicionar novos elementos.

```
static void Main(string[] args) {         
          ServerManager serverManager = new ServerManager();     
  Configuration config = serverManager.GetApplicationHostConfiguration();         
ConfigurationSection section = 
      config.GetSection("system.webServer/security/isapiCgiRestriction");
    ConfigurationElementCollection collection = section.GetCollection(); 

      // Iterating through the elements in the collection foreach (ConfigurationElement element in collection) 
 { 
  Console.Write("Path: " + element.GetAttributeValue("path")); 
Console.WriteLine(" Allowed: " + element.GetAttributeValue("allowed")); 
        } 
       // Adding a new element to the collection        ConfigurationElement newElement = collection.CreateElement(); 
      newElement.SetAttributeValue("path", @"%SystemDir%\someDll.dll"); 
      newElement.SetAttributeValue("allowed", false); 
      collection.Add(newElement); 
      serverManager.CommitChanges();             
    }
```

## Classes Fortemente Tipadas para Acessar as Seções

Classes fortemente tipadas derivadas das classes base genéricas podem ser escritas para tornar o acesso às propriedades mais fácil e intuitivo. Isso é especialmente útil quando você pode ter que acessar a mesma seção muitas vezes para operações diferentes. Essas classes também garantem que você tenha a verificação de tempo de compilação para tipos de propriedade. Eles evitam as chamadas tediosas para métodos como GetChildElement e GetAttributeValue.

O exemplo a seguir mostra o wrapper para a seção system.webServer/asp e o elemento "session" para essa seção. Todas as propriedades nessa seção não estão incluídas neste snippet.

```
public sealed class AspSection : ConfigurationSection { 
   private AspSession _session; 
    public AspSection() 
    { 
    } 

    public AspSession Session 
    {          
        get 
    { 
        if (_session == null) 
         {             
              _session = (AspSession)GetChildElement("session", 
typeof(AspSession)); 
         } 
       return _session; 
    }         
 }         
   } 

    public sealed class AspSession : ConfigurationElement { 
    public AspSession() 
    { 
    } 
     public bool AllowSessionState 
     { 
        get { 
       return (bool)base["allowSessionState"]; 
          } 
         set 
    { 
           base["allowSessionState"] = value; 
         } 
      } 
    }
```

A chamada GetChildElement no exemplo acima é usada para acessar um elemento aninhado em um elemento de configuração (uma seção, elemento de coleção etc.). A base de chamada[...] encapsula as classes GetAttributeValue e SetAttributeValue que recupera e define os valores desses atributos.

O exemplo a seguir mostra como as propriedades em um elemento aninhado podem ser acessadas de maneira fortemente tipada.

```
static void Main(string[] args) { 
    ServerManager serverManager = new ServerManager(); 
    Configuration config = serverManager.GetApplicationHostConfiguration(); 
    AspSection section = (AspSection)config.GetSection("system.webServer/asp", 
        typeof(AspSection)); 
    Console.WriteLine(section.Session.AllowSessionState); 
    section.Session.AllowSessionState = false; 
    serverManager.CommitChanges(); 
}
```

Observe a chamada para config.GetSection, que recebe um caminho de seção e também o tipo de seção que você deseja criar. Por padrão, chamadas para config.GetSection criam uma ConfigurationSection e, para obter uma instância de um wrapper fortemente tipado, você precisa passar um tipo.

Aqui está um exemplo de como criar classes fortemente tipadas para uma seção que tem uma coleção. Este exemplo usa a seção system.webServer/security/isapiCgiRestriction. Este snippet não inclui todas as propriedades presentes nesta seção.

```
public sealed class IsapiCgiRestrictionSection : ConfigurationSection {  
    private IsapiCgiRestrictionCollection _collection;             
    public IsapiCgiRestrictionSection() { 
      }         
    public IsapiCgiRestrictionCollection IsapiCgiRestrictions { 
        get { 
          if (_collection == null) { 
            _collection = 
              (IsapiCgiRestrictionCollection)GetCollection(typeof(IsapiCgiRestrictionCollection)); 
          } 
        return _collection; 
        } 
      } 
    }
```

O método GetCollection da classe base (ConfigurationElement) é usado para acessar a coleção padrão para esse elemento.

O exemplo a seguir mostra as classes fortemente tipadas para a coleção em si e os elementos dentro dessa coleção.

```
public sealed class IsapiCgiRestrictionCollection : ConfigurationElementCollectionBase<IsapiCgiRestrictionElement> { 
   public IsapiCgiRestrictionCollection() {  
      } 
   public new IsapiCgiRestrictionElement this[string path] {  
        get { 
          for (int i = 0; i< Count; i++) { 
            IsapiCgiRestrictionElement restriction = base[i]; 
            if (String.Equals=(Environment.ExpandEnvironmentVariables(restriction.Path),  
              Environment.ExpandEnvironmentVariables(path), StringComparison.OrdinalIgnoreCase)) {  
              return restriction; 
            } 
          } 
        return null; 
      } 
    } 
    public IsapiCgiRestrictionElement Add(string path, bool allowed) { 
        IsapiCgiRestrictionElement element = CreateElement(); 
        element.Path = path; 
        element.Allowed = allowed; 
        return Add(element); 
    } 
    protected override IsapiCgiRestrictionElement CreateNewElement(string elementTagName) { 
        return new IsapiCgiRestrictionElement(); 
      } 
    } 
    public sealed class IsapiCgiRestrictionElement : ConfigurationElement { 
  public IsapiCgiRestrictionElement() { 
      } 
     public bool Allowed { 
      get { 
        return (bool)base["allowed"]; 
      } 
      set { 
        base["allowed"] = value; 
      } 
    }         
     public string Path { 
      get { 
        return (string)base["path"]; 
      } 
      set { 
        base["path"] = value; 
      } 
     } 
   }
```

Para a classe de coleção fortemente tipada, é muito útil poder realizar a indexação na coleção usando a chave da coleção, que, nesse caso, é o atributo "path". O parâmetro para o método Add usa as propriedades necessárias para esse elemento. Nesse caso, a adição só poderia ter tomado o atributo "path" e, em seguida, o atributo "permitido" teria seu valor padrão.

Aqui está um exemplo usando essas classes fortemente tipadas para iterar pelas entradas em uma coleção e adicionar um elemento a essa coleção.

```
static void Main(string[] args) { 
  ServerManager serverManager = new ServerManager();             
  Configuration config = serverManager.GetApplicationHostConfiguration(); 
  IsapiCgiRestrictionSection section =  
    (IsapiCgiRestrictionSection)config.GetSection("system.webServer/security/isapiCgiRestriction", typeof(IsapiCgiRestrictionSection));
  // Iterating through the elements in the collection 
  foreach (IsapiCgiRestrictionElement element in section.IsapiCgiRestrictions) { 
    Console.Write("Path: " + element.Path); 
    Console.WriteLine(" Allowed: " + element.Allowed); 
  } 
  // Adding a new element to the collection 
  section.IsapiCgiRestrictions.Add(@"%SystemDir%\someDll.dll", false); 
  serverManager.CommitChanges(); 
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
