# Consumindo os serviços | Microsoft Learn

> **Fonte / Source:** https://learn.microsoft.com/pt-br/iis/manage/provisioning-and-managing-iis/consuming-the-services

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

# Consumindo os serviços

Comentários

por [Walter Oliver](https://github.com/walterov)

## Introdução

Como o Exemplo de Código dos Serviços de Hospedagem é implementado usando o Windows Communication Foundation, consumi-lo é bastante simples. Aqui, alguns pontos-chave são descritos. Consulte as documentações do WCF para obter detalhes sobre como consumir serviços WCF.

## Configuração do cliente

Chamar os serviços de um aplicativo cliente envolve alguma configuração. O projeto SampleWebClient é um exemplo desse aplicativo. A geração do proxy para cada um dos serviços pode ser feita por meio do Visual Studio® 2005 ou usando o utilitário de linha de comando SvcUtil.exe, encontrado em \Arquivos de Programas\Microsoft SDKs\Windows\v6.0\Bin. O comando a seguir gera o proxy para o WebManagementService.svc.

```
SvcUtil.exe http://<hostheader>/webmanagementservice.svc  /out:webmanagementservice.cs
```

Em seguida, a classe Proxy pode ser adicionada às Referências de Serviço do projeto.

SvcUtil.exe tem muitas opções para controlar como as classes proxy são geradas. Consulte as documentações relacionadas ao SvcUtil para obter detalhes. No aplicativo cliente de exemplo, usamos a opção de namespace para dedicar o namespace para classes proxy geradas para evitar conflitos de classe.

A captura de tela a seguir mostra um fragmento dos códigos de proxy gerados:

![Captura de tela mostrando um fragmento do código gerado.](consuming-the-services/_static/image1.jpg)

## Configuração do Cliente Web.Config

No SampleWebClient, fornecemos o endereço e a associação no arquivo de web.config do cliente. Observe que há seções de vinculação e ponto de extremidade para cada classe proxy.

```
<binding name="WSHttpBinding_IWebManagementService" closeTimeout="00:01:00"
 openTimeout="00:01:00" receiveTimeout="00:10:00" sendTimeout="00:01:00"
 bypassProxyOnLocal="false" transactionFlow="false" hostNameComparisonMode="StrongWildcard"
 maxBufferPoolSize="524288" maxReceivedMessageSize="65536" messageEncoding="Text"
 textEncoding="utf-8" useDefaultWebProxy="true" allowCookies="false">
   <readerQuotas maxDepth="32" maxStringContentLength="8192" maxArrayLength="16384"
      maxBytesPerRead="4096" maxNameTableCharCount="16384" />
   <reliableSession ordered="true" inactivityTimeout="00:10:00" enabled="false" />
   <security mode="Message">
      <transport clientCredentialType="Windows" proxyCredentialType="None"    realm="" />
      <message clientCredentialType="Windows" negotiateServiceCredential="true" algorithmSuite="Default" establishSecurityContext="true" />
   </security>
</binding>
<endpoint address="http://HostingServices/WebManagementService.svc"
 binding="wsHttpBinding"  bindingConfiguration="WSHttpBinding_IWebManagementService"
 contract="Microsoft.Hosting.Web.Client.WebManagement.IWebManagementService" name="WSHttpBinding_IWebManagementService">
      <identity>
            <userPrincipalName value="IIS7SHWS.IIS7Live\administrator" />
      </identity>
</endpoint>
```

Ao mover o aplicativo cliente de um ambiente para outro, verifique se o endereço de endpoint e o userPrincipalName são modificados para refletir o ambiente correto.

## Implementando o Proxy

No aplicativo cliente, adicione o namespace System.ServiceModel, bem como o namespace de subsistema apropriado.

```
using System.ServiceModel;
```

```
using Microsoft.Hosting.Web.Client.WebManagement;
```

```
using Microsoft.Hosting.Web.Client.WebProvisioning;
```

Para chamar um serviço, primeiro você deve instanciar um proxy. A linha a seguir cria uma instância do objeto proxy para a operação de provisionamento do subsistema Web.

```
WebProvisioningServiceClient client = new WebProvisioningServiceClient();
```

Chame o método a ser executado, passando o parâmetro apropriado. Nos casos em que o parâmetro consiste em tipos de dados mais complexos, localize a definição na classe contrato de dados correspondente.

```
status = client.StartSite(sitename);
```

Em seguida, feche o proxy. O fechamento do proxy encerra a sessão com o serviço e fecha a conexão.

```
client.Close();
```

## Cenários comuns

O método **CreateWebSite** a seguir cria um site com base nas propriedades definidas no parâmetro **WebSiteProvisioningRequest**.

```
WebProvisioningServiceClient.CreateWebSite(WebSiteProvisioningRequest request)
WebSiteProvisioningRequest exists in the Microsoft.Hosting.Web.Client.WebManagement.DataContract namespace. It is shown below.
public class WebSiteProvisioningRequest
public class WebSiteProvisioningRequest
{
    #region Fields
    private long _siteId;
    private string _siteName;
    private string _domainName;
    private string _userName;
    private string _password;
    private string _contentPath;
    private bool _useDefaultContentStructure;
    private string _physicalRootPath; 
    private string _logPath;
    private string _faultRequestsLoggingPath;
    private bool _createNewApplicationPool;
    private string _applicationPoolName;
    private bool _startSite;
    private BindingInfo _bindingInfo;
    //give the option for specifing to use an existing application pool or to create a new          application pool
    #endregion 
}
```

A classe WebSiteProvisioningRequest contém propriedades para:

- Criar um pool de aplicativos
- Criar um site
- Criar o aplicativo padrão
- Criar o diretório virtual padrão
- Adicionar as associações

Além disso, ele configura o registro e o registro de falhas.

### Exemplo de C#

O exemplo de código a seguir demonstra a criação de um site usando o serviço. Você deve instanciar o proxy **WebProvisioningServiceClient**. O método CreateWebSite(Solicitação WebSiteProvisioningRequest) requer um parâmetro. Todos os tipos de dados usados nos métodos são encontrados na classe de Contrato de Dados correspondente. Nesse caso, o objeto **WebSiteProvisioningRequest** pode ser encontrado no namespace Microsoft.Hosting.Web.DataContract.

Os contratos de falha se aplicam a todos os subsistemas e podem ser implementados conforme mostrado no código abaixo.

```
WebProvisioningServiceClient client = new WebProvisioningServiceClient();
try
{
  BindingInfo binding = new BindingInfo();
  binding.Protocol ="http"; 
  binding.IPAddress ="*"; //all ip addresses
  binding.TCPPort = 80;
  binding.HostHeader ="www.contoso.com";
  WebSiteProvisioningRequest request = new WebSiteProvisioningRequest();
  request.SiteName ="www.contoso.com";
  request.DomainName =string.Empty;
  request.UserName ="Testuser";
  request.Password ="pass@word1";
  request.ContentPath = @"c:\contents\";
  request.UserDefaultContentStructure = false;
  request.PhysicalRootPath = @"c:\contents\www.contoso.com";
  request.LogPath = @"c:\contents\www.contoso.com\logs";
  request.FaultRequestsLoggingPath = c:\contents\www.contoso.com\logs\FailedRequestLogs";
  request.Binding = binding;
  request.CreateNewApplicationPool = true;
  request.ApplicationPoolName = "TestAppPool";
  request.StartSite = true;
  request.SiteId = 0;
  if (client.CreateWebSite(request))
  this.lblResult.Text = "Web Site: " + request.SiteName + " has been successfully created.";
  client.Close();
}
catch (FaultException<HostingServiceFault> ex)
{
  this.lblResult.Text = "FaultException<HostingServiceException>: Hosting service fault while doing " + 
  ex.Detail.Operation + ". Error: " + ex.Detail.ErrorMessage;
  client.Abort();
}
  catch (FaultException ex)
{
  this.lblResult.Text = "Add Web Site Failed with unknown faultexception: " + e.GetType().Name + " - " + ex.Message;
  client.Abort();
}
  catch (Exception ex)
{
  this.lblResult.Text = "Failed with exception: " + ex.GetType().Name + " - " + ex.Message;
  client.Abort();
}
```

Para obter mais exemplos, consulte o aplicativo cliente Web de exemplo incluído na Solução do Visual Studio.

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
