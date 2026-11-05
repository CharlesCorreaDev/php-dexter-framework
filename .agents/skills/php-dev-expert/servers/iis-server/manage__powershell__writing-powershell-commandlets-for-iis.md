# Escrevendo commandlets do PowerShell para o IIS 7.0 | Microsoft Learn

> **Fonte / Source:** https://learn.microsoft.com/pt-br/iis/manage/powershell/writing-powershell-commandlets-for-iis

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

# Escrevendo commandlets do PowerShell para o IIS 7.0

Comentários

por Sergei Antonov

## Introdução

Com o PowerShell enviado, os administradores do IIS obtêm uma nova ferramenta a ser usada. O artigo a seguir concentra-se nas tarefas de administração do IIS 7.0 e superior; no entanto, o PowerShell pode ser usado para servidores existentes do IIS 6.0.

Este artigo se concentra na administração do servidor IIS remoto usando o PowerShell no computador cliente. No momento da escrita, isso só será possível se você usar o provedor WMI que a equipe do IIS disponibilizou com o Vista e o Windows Server® 2008. Nesse caso, você não precisa ter nada relacionado ao IIS em seu computador cliente – o WMI fornece a conexão com a configuração real disponível no servidor remoto.

Observação

Você também pode usar Microsoft.Web.Administration no PowerShell para executar funções de administração. No entanto, este artigo não se concentra nessa técnica.

A equipe do PowerShell criou um comando especial a ser usado para acessar objetos WMI – get-wmiobject. Normalmente, ele retorna um objeto, que é criado dentro do PowerShell que expõe propriedades e métodos WMI, em vez do objeto de código gerenciado habitual que é retornado para classes regulares.

Esse objeto sintético expõe metadados definidos no namespace WMI, não metadados de System.Management.ManagementBaseObject, que é usado como base. Isso fornece ao usuário a exibição de namespace que foi exposta pelo provedor WMI e que reflete o modelo de administração da entidade configurada.

Infelizmente, esse comando não funciona com namespaces do IIS. Para o PowerShell versão 1.0, o get-wmiobject dá suporte apenas ao nível de autenticação padrão para a conexão DCOM remota. Isso não é suficiente para o IIS 6.0 ou para o IIS 7.0 e superior. Quando os usuários configuram o IIS, pode ser necessário enviar senhas e outros dados confidenciais pela conexão de rede para editá-lo e armazená-lo na configuração. Para dar suporte a isso, os provedores do IIS exigem um nível de autenticação "Privacidade de Pacote". Não há como fornecer esse requisito para o cmdlet get-wmiobject.

Com essa limitação, temos duas opções:

- Use o PowerShell como uma interface de script genérica para o namespace System.Management. Use o PowerShell também para fazer o seguinte: escrever código de script que configura a conexão com o namespace WMI remoto; e, para recuperar e salvar dados de administração usando objetos System.Management, acessados por meio do PowerShell. É como a programação em C#, somente na linguagem do PowerShell. Normalmente, isso funciona bem, mas para o caso WMI, o PowerShell aplica um adaptador especial que converte automaticamente todos os objetos System.Management em objetos sintéticos do PowerShell que expõem o namespace WMI como uma API primária. Por esse motivo, devemos superar as alterações do adaptador e escrever código adicional para acessar a subestrutura "nativa" system.management, que rapidamente transforma essa programação em um exercício desnecessariamente complicado.

Portanto, exploramos a outra opção:

- Escreva cmdlets do PowerShell em C# e acesse a funcionalidade necessária no código C#. Nesse caso, escolhemos todas as APIs adequadas para entidades configuradas. Usamos o WMI para acessar o servidor. Em comparação com o mesmo código no PowerShell, o C# é muito mais eficaz, pois não precisa ser analisado e interpretado a cada vez.

## PowerShell Cmdlet

Para começar a escrever cmdlets, você precisa de um computador cliente instalado com o PowerShell. Você também deve instalar o SDK do PowerShell ou simplesmente copiar DLLs de referência para a pasta de trabalho usando o truque [postado](https://devblogs.microsoft.com/powershell/linking-against-rc2/) por Jeffrey Snover no blog da equipe do PowerShell. Verifique se você tem a conexão DCOM em seu servidor. A maneira mais fácil de confirmar isso é iniciar o wbemtest do utilitário, que está disponível em cada plataforma Windows, e experimentar a conexão.

1. Inicie o wbemtest.
2. Clique em Conectar.
3. Insira parâmetros de conexão:
   - Substitua "root\default" por \<computer>\root\webadministration, em que "<computador>" deve ser o nome do servidor.
   - Insira as credenciais da conta que tem direitos de administrador no servidor.
   - Selecione "Privacidade do Pacote" no grupo de nível de Autenticação.
4. Clique em Conectar. O WMI no computador cliente conecta-se ao serviço WMI no computador do servidor. Se não estiver acessível, você receberá uma caixa de diálogo de mensagem de erro.
5. Execute uma ação simples que envolva o provedor WMI no servidor para confirmar seu funcionamento. Faça uma enumeração de sites:
   - Clique no botão "Enumerar Instâncias" e insira "site" como nome da classe.
   - Quando funciona, a caixa de diálogo resultante mostra uma lista de todos os sites disponíveis no servidor.

O cmdlet do PowerShell é simplesmente um assembly de código gerenciado implementado seguindo regras formais, documentadas no SDK do PowerShell.
[Localize-os on-line](https://windowssdk.msdn.microsoft.com/library/ms714598.aspx).

Antes de escrever qualquer código, é útil ter um plano.

Primeiro, implemente um cmdlet que enumera todos os sites do IIS no servidor remoto. Esse cmdlet retorna uma matriz de objetos de site, que representam o elemento de configuração do IIS com propriedades, definido para o site. Adicionaremos algumas propriedades extras que são úteis para ter nesse objeto.

Queremos que o cmdlet se pareça com o seguinte:

```
get-iissite –computer somecomputer –name somesite –credential $(get-credential)
```

Se não passarmos a credencial para o cmdlet programaticamente, o PowerShell produzirá uma caixa de diálogo solicitando o nome de usuário e a senha para o servidor remoto.

Para obter o objeto do site do computador remoto, devemos fornecer os seguintes parâmetros do nosso cmdlet:

```
public string Computer;
public string Name;
public PSCredential Credential;
```

Todos esses parâmetros são propriedades públicas na classe cmdlet, decoradas pelo atributo Parameter.

Implemente o primeiro cmdlet. Como get-iissite não é nosso último comando, é melhor fazer duas coisas: separar o código responsável pela conexão com o servidor na classe pai RemotingCommand; e herda o cmdlet dessa classe.

```
using System;
using System.Net;
using System.Management;
using System.Management.Automation;
using System.ComponentModel;
using System.Security;
 
namespace Microsoft.Samples.PowerShell.IISCommands
{
    public class RemotingCommand : PSCmdlet
    {
        private string computer = Environment.MachineName;
        [Parameter(
           ValueFromPipeline = true,
           ValueFromPipelineByPropertyName = true)]
        [ValidateNotNullOrEmpty]
        public string[] Computer
        {
            get { return computer; }
            set { computer = value; }
        }
 
        private PSCredential credential = null;
        [Parameter(
           ValueFromPipeline = true,
           ValueFromPipelineByPropertyName = true)]
        [CredentialAttribute]
        public PSCredential Credential
        {
            get { return credential; }
            set { credential = value; }
        }

        protected ManagementScope GetScope(string computerName)
        {
            ConnectionOptions connection = new ConnectionOptions();
            connection.Username = Credential.UserName;
            connection.Password = Credential.GetNetworkCredential().Password;
            connection.Impersonation = ImpersonationLevel.Impersonate;
            connection.Authentication = AuthenticationLevel.PacketPrivacy;
            ManagementScope scope = new ManagementScope(
"\\\\" + computerName + "\\root\\webadministration", connection);
            return scope;
        }
 
        protected override void EndProcessing()
        {
            if (null == credential)
            {
                // Check variable first 
               object varCred = GetVariableValue("IISCredential");
                if (varCred != null && varCred.GetType() == typeof(PSObject))
                {
                    credential = ((PSObject)varCred).BaseObject as PSCredential;
                }
                if (null == credential)
                {
                    // use credential of current user or process 
                   SecureString ss = new SecureString();
     foreach (char c in  CredentialCache.DefaultNetworkCredentials.Password.ToCharArray())
                    {
                        ss.AppendChar(c);
                    }
                    credential = new PSCredential(
                        CredentialCache.DefaultNetworkCredentials.UserName, ss);
                }
            }
       }
 
       protected ManagementClass CreateClassObject(
          string computerName, 
          string classPath )
       {
            return new ManagementClass(
                GetScope(computerName), 
                new ManagementPath(classPath), 
                new ObjectGetOptions()
             );
        }
    }
```

A classe RemotingCommand inclui parâmetros e métodos necessários para a conexão.

- GetScope() retorna o objeto System.Management que tem todas as informações necessárias para conexão com o namespace remoto. Examine a conexão. Propriedade de autenticação. Ele é inicializado como AuthenticationLevel.PacketPrivacy. Esse é um requisito obrigatório. Caso contrário, o WMI recusará a conexão.
- O método CreateClassObject() é um método utilitário que usa o escopo da conexão para criar uma classe especificada com base no namespace WMI remoto.
- O método EndProcessing() é o método padrão que cada classe de cmdlet deve implementar. Ele é chamado do PowerShell quando nosso cmdlet é processado. A implementação de EndProcessing() tentará preencher a propriedade credencial, se ela estiver vazia. Na primeira tentativa, ele obtém a credencial da variável externa IISCredential (apenas para conveniência).

Quando estiver em uma sessão do PowerShell, talvez o usuário queira colocar o nome de usuário e a senha nessa variável e usá-lo várias vezes em vários comandos. Se essa variável não estiver definida ou contiver um tipo de objeto inadequado, o código obterá as credenciais do usuário ou processo atual. Ele funciona quando o usuário está executando esse comando localmente no servidor, usando a conta de administrador. Nesse caso, não precisamos inserir nenhuma credencial. Para cada loop nesse código, há um truque conhecido para converter a senha da cadeia de caracteres em SecureString.

Agora implementamos get-iissite.

```
[Cmdlet(VerbsCommon.Get, "IISSite")]
    public class GetSiteCommand : RemotingCommand
    {
        private string name = null;
        [Parameter(
           Position = 0,
           ValueFromPipeline = true,
           ValueFromPipelineByPropertyName = true)]
        public string Name
        {
            get { return name; }
            set { name = value; }
        }
 
        protected override void EndProcessing()
        {
            base.EndProcessing();
 
            ManagementObjectCollection sites = CreateClassObject(computerName, "Site").GetInstances();
            foreach (ManagementObject site in sites)
            {
                string siteName = site.GetPropertyValue("Name") as string;
                if (Name != null)
                {
                    if (siteName.Equals(Name, StringComparison.InvariantCultureIgnoreCase))
                    {
                        WriteObject(siteName);
                        break;
                    }
                }
                else 
                {
                    WriteObject(siteName);
                }
            }
        }
    } //GetSiteCommand 
    // 
    // [RunInstaller(true)] 
    // public class IISDemoCmdSnapIn : PSSnapIn {…} 
    // 
} // Microsoft.Samples.PowerShell.IISCommands
```

No primeiro corte, o comando retorna apenas nomes de site. Se o usuário quiser algum site específico, ele deverá fornecer o nome deste site para o comando; caso contrário, todos os sites nesse computador específico serão retornados.

Para concluir o comando, você deve adicionar a implementação da classe, herdada do PSSnapin. Essa classe é usada para registrar nossos comandos. Ele não tem nada específico do IIS; consulte o código completo no arquivo de origem IISDemoCmd.cs.

Crie o cmdlet agora e veja como ele funciona. Você pode fazer isso no Visual Studio, mas é simples o suficiente para compilá-lo a partir da linha de comando. Suponha que você colocou DLLs de referência do PowerShell em uma pasta `c:\sdk`. A linha de comando a seguir cria o cmdlet em IISDemoCmd.dll e o coloca na mesma pasta, onde o arquivo de origem está localizado

```
%windir%\Microsoft.NET\Framework\v2.0.50727\csc /t:library /r:c:\sdk\system.management.automation.dll IISDemoCmd.cs
```

Agora você deve registrar o comando e adicioná-lo ao PowerShell. Este procedimento é descrito na Referência de Programação do PowerShell. Inicie o PowerShell e execute os comandos a seguir na mesma pasta em que você criou a DLL do cmdlet.

```
>set-alias installutil $env:windir\Microsoft.NET\Framework\v2.0.50727\installutil
>installutil iisdemocmd.dll
>add-pssnapin IISDemoCmdSnapIn
```

Isso adiciona o cmdlet à instância em execução do PowerShell. Salve essas linhas de comando em um arquivo de script. Você os usará novamente à medida que continuar trabalhando nos cmdlets. Você encontra esse script no arquivo demo\_install.ps1.

Veja se o comando está disponível:

```
>get-command Get-IISSite
 
CommandType     Name                            Definition
-----------     ----                            ----------
Cmdlet          Get-IISSite                     Get-IISSite [[-Name] <String...
```

Agora experimente. Suponha que você se conecte ao computador test\_server usando a conta de administrador local.

```
>Get-IISSite -computer test_server -credential $(get-credential administrator)
 
Default Web Site
Foo
Bar
```

Essa linha de comando recebe o objeto de credencial do cmdlet get-credential, que interagirá com o usuário para obter a senha. Também é possível produzir a credencial programaticamente, mas você deve digitar a senha no script, o que não é seguro.

```
>$global:iiscredential = new-object System.Management.Automation.PsCredential "Administrator",$(convertto-securestring "password" -asplaintext -force)
```

Esse comando armazena a credencial na variável global $iiscredential e o cmdlet a usará automaticamente. No entanto, em situações reais, é melhor armazenar a credencial em uma variável usando o comando get-credential: $global:iiscredential = get-credential Administrator.

Agora, esse comando novamente.

```
>Get-IISSite -computer test_server
Default Web Site
Foo
Bar
```

Toda a infraestrutura está instalada. Agora, volte ao comando e adicione o restante dos dados do site.

## Adicionando dados de configuração ao site

Temos que converter o objeto de ManagementBaseObject em PSObject e devolvê-lo ao PowerShell. PSObject é um contêiner de forma livre que pode ser preenchido com diferentes tipos de dados. Usaremos o tipo PSNoteProperty. Mantenha o código do cmdlet limpo e adicione uma nova classe responsável pela conversão.

```
class ObjectConverter
{
    public static PSObject ToPSObject(
        ManagementBaseObject source
        )
    {
        PSObject obj = new PSObject();
        foreach (PropertyData pd in source.Properties)
        {
            if (pd.Value.GetType() == typeof(System.Management.ManagementBaseObject))
            {
                obj.Properties.Add(new PSNoteProperty(
                    pd.Name, ObjectConverter.ToPSObject(pd.Value as ManagementBaseObject)
                    ));
            }
            else if (pd.Value.GetType() == typeof(ManagementBaseObject[]))
            {
                ManagementBaseObject[] ar = pd.Value as ManagementBaseObject[];
                PSObject[] psar = new PSObject[ar.Length];
                for (int i = 0; i < ar.Length; ++i)
                {
                    psar[i] = ObjectConverter.ToPSObject(ar[i]);
                }
                obj.Properties.Add(new PSNoteProperty(pd.Name, psar));
            }
            else 
           {
                obj.Properties.Add(new PSNoteProperty(pd.Name, pd.Value));
            }
        }
        return obj;
    }
}
```

Esse código procura propriedades complexas e adiciona propriedades simples, como PSNoteProperty, ao PSObject resultante. Também adicionamos um método dedicado que lidará com a conversão em cmdlet out. Esse método converte todos os dados WMI e adiciona mais duas propriedades: o nome do computador e a credencial usada para obter a conexão com este computador. Isso ajuda a distinguir cada site de outros objetos na sessão do PowerShell.

```
private PSObject ConstructPSSite(
    string computerName,
    ManagementObject site)
{
    PSObject pssite = ObjectConverter.ToPSObject(site);
    pssite.Properties.Add(new PSNoteProperty("Computer", computerName));
    pssite.Properties.Add(new PSNoteProperty("Credential", Credential));
    return pssite;
}
```

Substitua o nome do site que retornamos ao PowerShell por um objeto inteiro. O método EndProcessing() no cmdlet agora tem esta aparência:

```
protected override void EndProcessing()
{
    base.EndProcessing();

    ManagementObjectCollection sites = CreateClassObject(Computer, "Site").GetInstances();
    foreach (ManagementObject site in sites)
    {
        string siteName = site.GetPropertyValue("Name") as string;
        if (Name != null)
        {
            if (siteName.Equals(Name, StringComparison.InvariantCultureIgnoreCase))
            {
                WriteObject(ConstructPSSite(Computer, site));
                break;
            }
        }
        else 
       {
            WriteObject(ConstructPSSite(Computer, site));
        }
    }
}
```

Quando repetimos o build e o registro e executamos o comando novamente, vemos mais dados sobre o site:

```
> get-iissite -computer test-server "default web site"
 
ApplicationDefaults        : @{ApplicationPool=; EnabledProtocols=http; Path=}
Bindings                   : {@{BindingInformation=*:80:; Protocol=http}}
Id                         : 1
Limits                     : @{ConnectionTimeout=00000000000200.000000:000; Max
                             Bandwidth=4294967295; MaxConnections=4294967295}
LogFile                    : @{CustomLogPluginClsid=; Directory=%SystemDrive%\i
                             netpub\logs\LogFiles; Enabled=True; LocalTimeRollo
                             ver=False; LogExtFileFlags=2199503; LogFormat=2; P
                             eriod=1; TruncateSize=20971520}
Name                       : Default Web Site
ServerAutoStart            : True
TraceFailedRequestsLogging : @{Directory=%SystemDrive%\inetpub\logs\FailedReqLo
                             gFiles; Enabled=False; MaxLogFiles=50}
VirtualDirectoryDefaults   : @{AllowSubDirConfig=True; LogonMethod=3; Password=
                             ; Path=; PhysicalPath=; UserName=}
Computer                   : test-server 
Credential                 : System.Management.Automation.PSCredential
```

Se você comparar isso com o esquema WMI do site, verá que todos os dados agora estão disponíveis; além disso, temos propriedades adicionais que adicionamos no cmdlet. Todas as propriedades são acessíveis no PowerShell pela notação "ponto".

```
> $sites = get-iissite -computer test-server 
>$sites[0]

ApplicationDefaults        : @{ApplicationPool=; EnabledProtocols=http; Path=}
Bindings                   : {@{BindingInformation=*:80:; Protocol=http}}
Id                         : 1
Limits                     : @{ConnectionTimeout=00000000000200.000000:000; Max
                             Bandwidth=4294967295; MaxConnections=4294967295}
LogFile                    : @{CustomLogPluginClsid=; Directory=%SystemDrive%\i
                             netpub\logs\LogFiles; Enabled=True; LocalTimeRollo
                             ver=False; LogExtFileFlags=2199503; LogFormat=2; P
                             eriod=1; TruncateSize=20971520}
Name                       : Default Web Site
ServerAutoStart            : True
TraceFailedRequestsLogging : @{Directory=%SystemDrive%\inetpub\logs\FailedReqLo
                             gFiles; Enabled=False; MaxLogFiles=50}
VirtualDirectoryDefaults   : @{AllowSubDirConfig=True; LogonMethod=3; Password=
                             ; Path=; PhysicalPath=; UserName=}
Computer                   : test-server 
Credential                 : System.Management.Automation.PSCredential
 
>$sites[0].Limits

ConnectionTimeout                        MaxBandwidth            MaxConnections
-----------------                        ------------            --------------
00000000000200.000000:000                  4294967295                4294967295
 
> $sites[0].Limits.MaxBandwidth
4294967295
```

Fizemos um bom progresso, mas não o suficiente. O site do WMI também tem métodos, portanto, tente adicioná-los também. Isso é simples de fazer no PowerShell– você nomeia o método e informa ao PowerShell onde o código está localizado. Adicionaremos métodos do tipo PSCodeMethod. Para manter o código para os métodos, adicionamos a classe SiteMethods.

```
public class SiteMethods
{
    static public void Start(PSObject site)
    {
        InvokeMethod(site, "Start");
    }
    static public void Stop(PSObject site)
    {
        InvokeMethod(site, "Stop");
    }

    static public string GetStatus(PSObject site)
    {
        uint status = (uint)InvokeMethod(site, "GetState");
        string statusName =
            status == 0 ? "Starting" :
            status == 1 ? "Started" :
            status == 2 ? "Stopping" :
            status == 3 ? "Stopped" : "Unknown";
        return statusName;
    }

    static private object InvokeMethod(PSObject site, string methodName)
    {
        string computerName = site.Properties["Computer"].Value as string;
        string siteName = site.Properties["Name"].Value as string;
        PSCredential credential = site.Properties["Credential"].Value as PSCredential;
        ConnectionOptions connection = new ConnectionOptions();
        connection.Username = credential.UserName;
        connection.Password = credential.GetNetworkCredential().Password;
        connection.Impersonation = ImpersonationLevel.Impersonate;
        connection.Authentication = AuthenticationLevel.PacketPrivacy;
        ManagementScope scope = new ManagementScope(
            "\\\\" + computerName + "\\root\\webadministration", connection);
        string sitePath = "Site.Name=\"" + siteName + "\"";
        ManagementObject wmiSite = new ManagementObject(
            scope, new ManagementPath(sitePath), new ObjectGetOptions());
        return wmiSite.InvokeMethod(methodName, new object[] { });
    }
}
```

Como você vê, esse código cria um objeto WMI para o site e chama métodos WMI nesse objeto. Esse código usa duas propriedades adicionais que adicionamos ao site. Com essa classe, podemos estender o método ConstructPSSite. Também devemos adicionar uma referência ao namespace System.Reflection.

```
private PSObject ConstructPSSite(
    string computerName,
    ManagementObject site)
{
    PSObject pssite = ObjectConverter.ConvertSiteToPSObject(site);
    pssite.Properties.Add(new PSNoteProperty("Computer", computerName));
    pssite.Properties.Add(new PSNoteProperty("Credential", Credential));
    Type siteMethodsType = typeof(SiteMethods);
    foreach (MethodInfo mi in siteMethodsType.GetMethods())
    {
        if (mi.Name.Equals("Start", StringComparison.InvariantCultureIgnoreCase))
        {
            pssite.Methods.Add(new PSCodeMethod("Start", mi));
        }
        if (mi.Name.Equals("Stop", StringComparison.InvariantCultureIgnoreCase))
        {
            pssite.Methods.Add(new PSCodeMethod("Stop", mi));
        }
        if (mi.Name.Equals("GetStatus", StringComparison.InvariantCultureIgnoreCase))
        {
            pssite.Properties.Add(new PSCodeProperty("Status", mi));
        }
    }
    return pssite;
}
```

Além dos métodos adicionados, há uma propriedade dinâmica: "Status". Ele se comporta da mesma maneira que as propriedades em classes C#; é uma função chamada quando o PowerShell precisa de seu valor. O código é muito simples, pois fazemos referência aos métodos do mesmo assembly que o nosso cmdlet. Nada impede carregar qualquer outro assembly e obter a informação sobre os métodos de suas classes. Se esses métodos tiverem a assinatura certa, o PowerShell a usará da mesma maneira.

O objeto agora se parece com:

```
>$s = get-iissite "Default Web Site" –computer test-server 
> $s | get-member

   TypeName: System.Management.Automation.PSCustomObject

Name                       MemberType   Definition
----                       ----------   ----------
Start                      CodeMethod   static System.Void Start(PSObject site)
Stop                       CodeMethod   static System.Void Stop(PSObject site)
Status                     CodeProperty System.String Status{get=GetStatus;}
Equals                     Method       System.Boolean Equals(Object obj)
GetHashCode                Method       System.Int32 GetHashCode()
GetType                    Method       System.Type GetType()
ToString                   Method       System.String ToString()
ApplicationDefaults        NoteProperty System.Management.Automation.PSObjec...
Bindings                   NoteProperty System.Management.Automation.PSObjec...
Computer                   NoteProperty System.String Computer=iissb-101
Credential                 NoteProperty System.Management.Automation.PSCrede...
Id                         NoteProperty System.UInt32 Id=1
Limits                     NoteProperty System.Management.Automation.PSObjec...
LogFile                    NoteProperty System.Management.Automation.PSObjec...
Name                       NoteProperty System.String Name=Default Web Site
ServerAutoStart            NoteProperty System.Boolean ServerAutoStart=True
TraceFailedRequestsLogging NoteProperty System.Management.Automation.PSObjec...
VirtualDirectoryDefaults   NoteProperty System.Management.Automation.PSObjec...
 
>$s.Status
Started
> $s.Stop()
> $s.Status
Stopped
> $s.Start()
> $s.Status
Started
```

Com a capacidade de adicionar métodos e propriedades dinâmicas aos objetos, podemos sintetizar o que precisamos para qualquer situação. Além dos métodos e propriedades adicionados no cmdlet, podemos adicionar mais no script, sem a necessidade de usar o código C#.

Também é possível carregar a definição do objeto de XML. Um bom candidato para propriedades adicionais é os dados expostos do IIS por meio de contadores de desempenho relacionados ao site, por exemplo, a contagem total de solicitações processadas. Esses dados são facilmente acessíveis diretamente do código gerenciado. Não é necessário usar o WMI.

## Como chamar um cmdlet de outro cmdlet

Obter objetos de site é importante, mas precisamos de mais, como escrever um comando para adicionar um novo site. Para criar sites, podemos usar o método abstrato Create() definido na classe Site no namespace WMI WebAdministration. O cmdlet tem esta aparência:

```
>add-iissite –name <siteName> -computer <serverName> -credential <credential> -bindings <array-of-bindings> –homepath <path> -autostart
```

Temos os mesmos parâmetros definidos no método Create. Além disso, o comando deve dar suporte a opções –whatif e –passthru. O primeiro mostra o resultado da execução do comando, mas não faz nenhuma alteração; o segundo instrui o comando a gerar o resultado para o pipeline. Esses dois interruptores são altamente recomendados para serem usados em comandos "destrutivos". Para dar suporte ao cmdlet –whatif, a classe deve ser decorada pelo atributo SupportsShouldProcess = true.

Aqui está parte do código (localize todo o código no iisdemocmd.cs).

```
[Cmdlet(VerbsCommon.Add, "IISSite", SupportsShouldProcess = true)]
public class AddSiteCommand : RemotingCommand
{
    //… 
   private SwitchParameter passThru = new SwitchParameter(false);
    [Parameter]
    public SwitchParameter PassThru
    {
        get { return passThru; }
        set { passThru = value; }
    }

    protected override void EndProcessing()
    {
        base.EndProcessing();
        if (ShouldProcess(string.Format("{0} bound to {1} on {2}", name, bindings.ToString(), rootFolder)))
        {
            object[] args = new object[4];
            args[0] = Name;
            ManagementBaseObject[] mbarr = new ManagementBaseObject[bindings.Length];
            for (int b = 0; b < bindings.Length; ++b)
            {
                mbarr[b] = ObjectConverter.ToManagementObject(
                    GetScope(Computer), "BindingElement", bindings[b]);
            }
            args[1] = mbarr;
            args[2] = rootFolder;
            args[3] = autoStart;
            ManagementClass siteClass = CreateClassObject(Computer, "Site");
            try 
           {
                siteClass.InvokeMethod("Create", args);
            }
            catch (COMException comEx)
            {
                WriteError(new ErrorRecord(comEx, comEx.Message, ErrorCategory.InvalidArgument, Name));
            }
            if (PassThru.IsPresent)
            {
                string getSiteScript = "get-iissite" 
                        + " -name " + Name
                        + " -computer " + Computer
                        + " -credential $args[0]";
                this.InvokeCommand.InvokeScript(
                    getSiteScript, false, PipelineResultTypes.Output, null, Credential);
            }
        }
    }
}
```

Esse código usa um novo método na classe ObjectConverter para produzir uma matriz de associações. O método ToManagementObject() converte parâmetros de entrada que podem ser PSObject ou Hashtable na instância da classe ManagementBaseObject. Como a chamada para Criar pode falhar com parâmetros perfeitamente corretos se o site com esses parâmetros já estiver disponível, chamamos esse método em try/cach.

Por fim, se o cmdlet verificar se o usuário especificado –passthru está presente, ele chama o PowerShell para executar uma parte do script que retorna este novo site. Nesse script, chamamos nosso comando de "get-iissite" e reutilizamos os parâmetros passados para o comando atual. InvokeScript coloca o resultado no pipeline conforme solicitado, portanto, não é necessário fazer mais nada. Este é um exemplo de como podemos fazer "callback" para o PowerShell, passando linhas de comando formatadas de forma estática ou dinâmica. É claro que é possível gravá-lo como código C#, mas requer cortar e colar grandes partes de GetSiteCommand ou reorganizar e refatorar o namespace.

No início do método EndProcessing() vemos a chamada para ShouldProcess(). É assim que há suporte para a opção –whatif. Quando o usuário passa essa opção, esse método imprime o texto passado para ele como um parâmetro e o retorno é falso. Todas as ações que podem alterar o ambiente devem ser executadas quando esta chamada retorna true. O PowerShell tem outros comutadores que podem interagir com o usuário e solicitar confirmação antes de executar qualquer ação. ShouldProcess() retorna como resultado dessa confirmação.

Teste o novo comando com o seguinte:

```
> add-iissite Foo @{Protocol="http"; BindingInformation="*:808"} e:\inetpub\demo -computer test-server -whatif

What if: Performing operation "Add-IISSite" on Target "Foo bound to System.Management.Automation.PSObject[] on e:\inetpub\demo".
```

É assim que –whatif funciona. Recebemos uma mensagem bastante enigmática sobre o que acontece quando este comando é executado. Para deixar isso mais claro, devemos formatá-lo corretamente. Associações de parâmetros são inseridas na linha de comando como uma tabela de hash e são passadas para o cmdlet como Hashtable encapsulado em PSObject. Para produzir um texto significativo a partir dele, devemos adicionar um código mais inteligente – o Padrão ToString() simplesmente retorna o nome da classe.

Insira este bloco de texto no lugar da linha ShouldProcess():

```
StringBuilder bindingText = new StringBuilder("(");
foreach (PSObject b in bindings)
{
    Hashtable ht = b.BaseObject as Hashtable;
    foreach (object key in ht.Keys)
    {
        string bstr = String.Format("{0}={1}",
            key.ToString(), ht[key].ToString());
        bindingText.Append(bstr + ",");
    }
    bindingText.Remove(bindingText.Length - 1, 1);
    bindingText.Append(";");
}
bindingText.Remove(bindingText.Length - 1, 1);
bindingText.Append(")");
if (ShouldProcess(string.Format("{0} bound to {1} on {2}", name, bindingText.ToString(), rootFolder)))
```

Depois que o cmdlet é compilado e executado, vemos a seguinte saída:

```
> add-iissite Foo @{Protocol="http"; BindingInformation="*:888"} e:\inetpub\demo -computer test-server -whatif

What if: Performing operation "Add-IISSite" on Target "Foo bound to (BindingInformation=*:888,Protocol=http) on e:\inetpub\demo".
```

Isso é muito mais compreensível. Nesse novo código, também está claro por que devemos processar Hashtable no método ToManagementObject() – esse é um tipo comum no PowerShell para passar parâmetros estruturados.

Agora, execute o comando.

```
> add-iissite Foo @{Protocol="http"; BindingInformation="*:888"} e:\inetpub\demo -computer test-server -passthru | format-table Name,Status

Name                                    Status
----                                    ------
Foo                                     Stopped
 
> get-iissite -computer sergeia-a | format-table name,status

Name                                    Status
----                                    ------
Default Web Site                        Started
Foo                                     Stopped
```

O primeiro comando criou o site no servidor remoto e, em seguida, recuperou-o e passou para o pipeline. Para garantir que foi feito corretamente, temos uma lista dos sites e, de fato, o novo site está disponível. Por padrão, o servidor tentará iniciar o site, a menos que adicionemos o parâmetro –AutoStart false. Se houver algum problema nos parâmetros, por exemplo, o servidor não poderá encontrar a pasta inicial, então o site permanecerá parado.

## Estendendo cmdlets para trabalhar com um farm de servidores

Por enquanto, temos dois comandos: get-iissite e add-iissite. Faltam cmdlets para salvar as alterações do site e para excluir o site. O comando de exclusão deve ser remove-iissite, para mantê-lo compatível com os padrões de nomenclatura do PowerShell. O comando Salvar terá um nome set-iissite. Para remove-iissite, modificamos o código get-iissite e chamamos o método Delete() no ManagementObject.

```
[Cmdlet(VerbsCommon.Remove, "IISSite", SupportsShouldProcess = true)]
public class RemoveSiteCommand : RemotingCommand
{
    private string name = null;
    [Parameter(
       Position = 0,
       ValueFromPipeline = true,
       ValueFromPipelineByPropertyName = true)]
    [ValidateNotNullOrEmpty]
    public string Name
    {
        get { return name; }
        set { name = value; }
    }

    protected override void EndProcessing()
    {
        base.EndProcessing();

        if (ShouldProcess(string.Format("{0} on server {1}", name, Computer)))
        {
            ManagementObject site = CreateClassInstance(Computer, "Site.Name=\"" + Name + "\"");
            site.Delete();
        }
    }
} //RemoveSiteCommand
```

Também adicionamos um método simples CreateClassInstance() ao cmdlet pai. Esse método produz a instância de objeto associada ao caminho do objeto. Outra alteração é que o parâmetro Name agora não pode estar vazio– caso contrário, o usuário pode excluir todos os sites por engano. Por fim, adicionamos a chamada ShouldProcess() para habilitar as opções –whatif e –confirme.

```
> Remove-IISSite foo -computer test-server -confirm

Confirm
Are you sure you want to perform this action?
Performing operation "Remove-IISSite" on Target "foo on server sergeia-a".
[Y] Yes  [A] Yes to All  [N] No  [L] No to All  [S] Suspend  [?] Help
(default is "Y"): <CR>

> get-iissite -computer test-server | ft name,status

Name                                    Status
----                                    ------
Default Web Site                        Started
```

Podemos implementar o comando set-iissite como um exercício, modificando o cmdlet add-iissite e chamando o método Put() no ManagementObject.

Agora, dimensione os comandos e adapte-os para trabalhar com vários servidores. Isso é fácil:

Altere a propriedade Computador no comando pai para representar uma matriz de cadeias de caracteres:

```
private string[] computer = { Environment.MachineName };
[Parameter(
   ValueFromPipeline = true,
   ValueFromPipelineByPropertyName = true)]
[ValidateNotNullOrEmpty]
public string[] Computer
{
    get { return computer; }
    set { computer = value; }
}
```

Em seguida, adicione um loop extra sobre essa matriz em cada cmdlet para executar a mesma ação em cada computador. Aqui está um exemplo de get-iissite:

```
foreach (string computerName in Computer)
        {
            ManagementObjectCollection sites = CreateClassObject(computerName, "Site").GetInstances();
            foreach (ManagementObject site in sites)
            {
                if (Name != null)
                {
                    string siteName = site.GetPropertyValue("Name") as string;
                    if (siteName.Equals(Name, StringComparison.InvariantCultureIgnoreCase))
                    {
                        WriteObject(ConstructPSSite(computerName, site));
                        break;
                    }
                }
                else 
               {
                    WriteObject(ConstructPSSite(computerName, site));
                }
            }
        }
```

Agora podemos gerenciar sites em toda a fazenda de servidores.

```
> get-iissite -computer test-server,iissb-101,iissb-102 | ft Computer,Name,Status

Computer                   Name                       Status
--------                   ----                       ------
test-server                Default Web Site           Started
iissb-101                  Default Web Site           Started
iissb-101                  Demo                       Started
iissb-102                  Default Web Site           Started
```

Salve os nomes do servidor do farm no arquivo de texto e use-os como um parâmetro:

```
>$("test-server","iissb-101","iissb-102" >farm.txt
>cat farm.txt

test-server 
tissb-101
tissb-102
>get-iissite –computer $(cat farm.txt) | ft Computer,Name,Status

Computer                   Name                       Status
--------                   ----                       ------
test-server                Default Web Site           Started
iissb-101                  Default Web Site           Started
iissb-101                  Demo                       Started
iissb-102                  Default Web Site           Started
>get-iissite –computer $(cat farm.txt) | where {$_.Computer –like "iissb*"} | ft Computer,Name,Status
 
Computer                   Name                       Status
--------                   ----                       ------
iissb-101                  Default Web Site           Started
iissb-101                  Demo                       Started
iissb-102                  Default Web Site           Started
```

Podemos fazer coisas mais avançadas usando mais linguagem do PowerShell. O código a seguir enumera sites em servidores com nomes. Começando com "iissb", armazene a lista na variável e, em seguida, interrompa todos os sites iniciados.

```
> $sitelist = get-iissite -computer $(cat farm.txt) | where {$_.Computer -like "iissb*"}
> foreach ($site in $sitelist) {
>> if ($site.Status -eq "Started") {$site.Stop()}
>> }
>>
> get-iissite -computer $(cat farm.txt) | ft Computer,Name,Status

Computer                   Name                       Status
--------                   ----                       ------
test-server                Default Web Site           Started
iissb-101                  Default Web Site           Stopped
iissb-101                  Demo                       Stopped
iissb-102                  Default Web Site           Stopped
```

A variável $sitelist mantém a lista de sites, mas graças à natureza dinâmica da propriedade site.Status, vemos o status real, não armazenado, de cada objeto.

```
> $sitelist | ft computer,name,status

Computer                   Name                       Status
--------                   ----                       ------
iissb-101                  Default Web Site           Stopped
iissb-101                  Demo                       Stopped
iissb-102                  Default Web Site           Stopped
```

Podemos fazer o mesmo sem usar variáveis. Inicie qualquer site parado em qualquer servidor na fazenda de servidores.

```
> get-iissite -computer (cat farm.txt) | foreach { if ($_.Status -eq "Stopped") { $_.Start() }}
> get-iissite -computer $(cat farm.txt) | ft Computer,Name,Status
 
Computer                   Name                       Status
--------                   ----                       ------
test-server                Default Web Site           Started
iissb-101                  Default Web Site           Started
iissb-101                  Demo                       Started
iissb-102                  Default Web Site           Started
```

No arquivo de origem que acompanha iisdemocmd.cs, você encontra mais comandos para manipular diretórios virtuais e algumas propriedades nas seções de configuração.

### Conclusion

Como podemos ver, ter apenas três comandos nos permite cobrir a maioria das necessidades na administração de sites do IIS. Combinado com a flexibilidade e a riqueza da linguagem shell, cada comando adiciona uma grande quantidade de funcionalidade. Ao mesmo tempo, escrever um novo comando não é muito mais complicado do que implementar um script semelhante em VBScript ou Jscript.

A equipe do IIS planeja adicionar suporte em grande escala do PowerShell ao IIS 7.0 e superior. Isso inclui a implementação de um provedor de navegação, um provedor de propriedades e todas as outras partes de funcionalidade necessárias para trabalhar com todos os aspectos da administração. Siga o progresso dessas melhorias futuras e procure o anúncio no <https://www.iis.net/> e no site do PowerShell.

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
