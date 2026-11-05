# Usando o Editor de Configuração: gerar scripts | Microsoft Learn

> **Fonte / Source:** https://learn.microsoft.com/pt-br/iis/manage/managing-your-configuration-settings/using-configuration-editor-generate-scripts

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

# Usando o Editor de Configuração: gerar scripts

Comentários

por [Crystal Hoyer](https://github.com/crystalhoyer)

## Objetivo do Guia

Este passo a passo tem como objetivo demonstrar como usar a funcionalidade Gerar Script do Editor de Configuração por meio do exemplo de geração do Pool de Aplicativos.

## Pré-requisitos

Este passo a passo requer os seguintes pré-requisitos:

- [Pacote de Administração V1 para IIS](https://www.iis.net/downloads/microsoft/administration-pack "Instalar o Pacote de Administração")

## Parte 1 – Criar um pool de aplicativos usando o editor de configuração

1. Inicie o Editor de Configuração no Gerenciador do IIS clicando duas vezes no recurso "Editor de Configuração" de uma conexão de servidor.
2. No menu suspenso da *Seção:*, clique em system.applicationHost –> applicationPools
3. Na grade de propriedades exibida abaixo, clique na elipse "..." na primeira linha, que corresponde ao item *(Coleção* ).
4. No *Editor de Coleção*, você verá uma lista dos pools de aplicativos que já existem.
5. No painel de ação, clique em *"Adicionar"*
6. Preencha a grade de propriedades exibida na seção *Propriedades* .

   1. Observe que a propriedade *"name"* tem uma chave no símbolo. Isso indica um campo necessário. Insira "applicationPool1" como seu nome para criar um novo pool de aplicativos.
   2. Selecione processModel para expandir.
   3. Definir userName como "PoolId1"
   4. Definir senha como "PoolId1Pwd"
   5. Alterar identityType para "SpecificUser"
   6. Opcionalmente, você pode alterar outras configurações aqui
7. [opcional] Para confirmar as alterações no sistema de configuração, clique em *Aplicar* no painel *Ações* . No entanto, para fins de nosso passo a passo, não faça isso.

## Parte 2 – Gerar script

Depois de fechar a caixa de diálogo propriedades, clique no link *Gerar Script* no painel *Ações* . As três guias da caixa de diálogo Script exibem 3 tipos de scripts para realizar as ações que fizemos nesta seção.

### Código Gerenciado: snippet de código em C# para criar 'applicationPool1'

```
using System;
using Microsoft.Web.Administration;

internal static class Sample {

    private static void Main() {

    ServerManager serverManager = new ServerManager();
    Configuration config = serverManager.GetApplicationHostConfiguration();

    ConfigurationSection applicationPoolsSection = config.GetSection("system.applicationHost/applicationPools");

    ConfigurationElementCollection applicationPoolsCollection = applicationPoolsSection.GetCollection();

    ConfigurationElement addElement = applicationPoolsCollection.CreateElement("add");
    addElement["name"] = @"applicationPool1";

    ConfigurationElement processModelElement = addElement.ChildElements["processModel"];
    processModelElement["identityType"] = @"SpecificUser";
    processModelElement["userName"] = @"PoolId1";
    processModelElement["password"] = @"PoolId1Pwd";
    applicationPoolsCollection.Add(addElement);

    serverManager.CommitChanges();
    }
}
```

### Script: código em JScript para criar 'applicationPool1'

```
var adminManager = new ActiveXObject('Microsoft.ApplicationHost.WritableAdminManager');
adminManager.CommitPath = "MACHINE/WEBROOT/APPHOST";

var applicationPoolsSection = adminManager.GetAdminSection("system.applicationHost/applicationPools", "MACHINE/WEBROOT/APPHOST");

var applicationPoolsCollection = applicationPoolsSection.Collection;

var addElement = applicationPoolsCollection.CreateNewElement("add");
addElement.Properties.Item("name").Value = "applicationPool1";
var processModelElement = addElement.ChildElements.Item("processModel");
processModelElement.Properties.Item("identityType").Value = "SpecificUser";
processModelElement.Properties.Item("userName").Value = "PoolId1";
processModelElement.Properties.Item("password").Value = "PoolId1Pwd";
applicationPoolsCollection.AddElement(addElement);

adminManager.CommitChanges();
```

### Linha de Comando: Comandos Appcmd para criar 'applicationPool1' e especificar uma identidade.

```
appcmd.exe set config -section:system.applicationHost/applicationPools /+".[name='applicationPool1']" /commit:apphost
appcmd.exe set config -section:system.applicationHost/applicationPools /.[name='applicationPool1'].processModel.identityType:"SpecificUser" /.[name='applicationPool1'].processModel.userName:"PoolId1" /.[name='applicationPool1'].processModel.password:"PoolId1Pwd" /commit:apphost
```

## Parte 3 – Criar um programa em C# que cria 10 pools de aplicativos

Com base no código gerado pelo Editor de Configuração, refatoraremos o código para criar um pool de aplicativos para o método "CreateApplicationPool". O código final tem esta aparência:

```
using System;
using Microsoft.Web.Administration;
 
internal static class Sample {
  private static void Main() {
  ServerManager serverManager = new ServerManager();
Configuration config = serverManager.GetApplicationHostConfiguration();
 
ConfigurationSection applicationPoolsSection = config.GetSection("system.applicationHost/applicationPools");
 
ConfigurationElementCollection applicationPoolsCollection = applicationPoolsSection.GetCollection();
 
for (int i = 0; i < 10; i++) {
CreateApplicationPool(applicationPoolsCollection,
"AppPool" + i.ToString(),
  "AppPoolId" + i.ToString(),
"AppPoolPwd" + i.ToString());
}
serverManager.CommitChanges();
}
 
private static void CreateApplicationPool(ConfigurationSection applicationPoolsSection,
string appPoolName,
string appPoolUserName,
string appPoolPassword) 
{
  ConfigurationElement addElement = applicationPoolsCollection.CreateElement("add");
addElement["name"] = appPoolName;
 
ConfigurationElement processModelElement = addElement.ChildElements["processModel"];
processModelElement["identityType"] = @"SpecificUser";
processModelElement["userName"] = appPoolUserName;
processModelElement["password"] = appPoolPassword;
applicationPoolsCollection.Add(addElement);
}
}
```

## Resumo

Agora você criou código para criar 10 pools de aplicativos com ajuda do Editor de Configuração.

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
