# Executando o Asp.Net Core com o IIS no Nano Server | Microsoft Learn

> **Fonte / Source:** https://learn.microsoft.com/pt-br/iis/get-started/whats-new-in-iis-10/running-aspnet-core-with-iis-on-nano-server

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

# Executando o Asp.Net Core com o IIS no Nano Server

Comentários

por [David So](https://github.com/davidso)

Este artigo descreve as etapas necessárias para obter um aplicativo ASP.Net Core em execução com o IIS no Nano.

### Compatibilidade

| Versão | Observações |
| --- | --- |
| IIS 10.0 | Os recursos descritos neste artigo foram introduzidos no IIS 10.0 |
| IIS 8.5 e anterior | Os recursos descritos neste artigo não tinham suporte antes do IIS 10.0 |

## Instalando o IIS

Primeiro, você precisa instalar o IIS no Nano e as etapas para isso já estão abordadas na documentação oficial do Nano. Para obter mais informações, consulte os seguintes artigos:

- [Introdução ao Nano Server](https://technet.microsoft.com/library/mt126167.aspx)
- [IIS no Nano Server](https://technet.microsoft.com/library/mt627783.aspx)
- [Apresentando o IIS no Nano Server (blog)](https://blogs.iis.net/davidso/iisnano)

## Instalando encaminhadores reversos

Atualmente, o host [HttpPlatformHandler](https://www.iis.net/downloads/microsoft/httpplatformhandler) e o Asp.Net Core Kestrel exigem que o pacote de Encaminhadores Reversos seja instalado no computador Nano.

Os Reencaminhadores Reversos podem ser instalados offline (máquina desligada) ou online (máquina em execução).

Offline, os Reverse Forwarders podem ser instalados passando `–ReverseForwarders` parâmetros ao chamar o cmdlet New-NanoServerImage. por ex.

```
New-NanoServerImage -MediaPath f:\ -BasePath .\Base -TargetPath .\Nano1.vhd -GuestDrivers -Packages Microsoft-NanoServer-IIS-Package -ReverseForwarders
```

Online, os "Reverse Forwarders" podem ser instalados executando o comando dism no pacote relevante.

- `dism /online /add-package /packagepath:c:\packages\Microsoft-OneCore-ReverseForwarders-Package.cab`
- `dism /online /add-package /packagepath:c:\packages\en-us\Microsoft-OneCore-ReverseForwarders-Package.cab`
- `<reboot>`

O 1º comando instala o pacote de recursos Reverse Forwarders.

O segundo comando instala o pacote de idiomas associado para o pacote.

Nesse caso, `C:\packages` é um diretório local que criei em que copiei a pasta Pacotes do local de instalação de mídia do Nano Server.

Depois de instalar o pacote Encaminhadores Reversos (offline ou online), verifique se o IIS e os Encaminhadores Reversos estão instalados corretamente executando `dism /online /get-packages`.

Você deve ver os pacotes de Recursos e Idiomas para Microsoft-NanoServer-IIS-Package e Microsoft-OneCore-ReverseForwarders-Package.

## Instalando HttpPlatformHandler

No momento, a instalação para HttpPlatformHandler no Nano é manual.

Compreensivelmente isso é uma dor... então é algo que estamos trabalhando para melhorar.

Nano é apenas de 64 bits (sem WOW), portanto, você precisará instalar a versão x64 mais recente do HttpPlatformHandler (<https://www.iis.net/downloads/microsoft/httpplatformhandler>) em um computador regular (não Nano).

Depois que você tiver a versão x64 bit do HttpPlatformHandler instalada em seu computador regular (não Nano), haverá dois arquivos que precisaremos copiar para o computador Nano:

- `%windir%\System32\inetsrv\httpPlatformHandler.dll`
- `%windir%\System32\inetsrv\config\schema\httpplatform_schema.xml`

No computador Nano, você precisará copiar esses 2 arquivos para os respectivos locais (dll-inetsrv>, schema file-inetsrv>\config\schema)

- `copy .\httpPlatformHandler.dll c:\Windows\System32\inetsrv`
- `copy .\httpplatform_schema.xml c:\Windows\System32\inetsrv\config\schema`

### Habilitando HttpPlatformHandler (PowerShell)

Você pode executar as etapas abaixo em uma sessão remota do PowerShell para o computador Nano.

Observe que as etapas abaixo funcionam em um sistema limpo, mas não devem ser idempotentes. Se você executar isso várias vezes, ele adicionará várias entradas e você terá problemas! Se você acabar em um estado ruim, poderá encontrar backups do arquivo applicationHost.config em `%systemdrive%\inetpub\history`.

```
Import-Module IISAdministration
$sm = Get-IISServerManager

# Add AppSettings section (for Asp.Net Core)
$sm.GetApplicationHostConfiguration().RootSectionGroup.Sections.Add("appSettings")

# Unlock handlers section
$appHostconfig = $sm.GetApplicationHostConfiguration()
$section = $appHostconfig.GetSection("system.webServer/handlers")
$section.OverrideMode="Allow"

# Add httpPlatform section to system.webServer
$sectionHttpPlatform = $appHostConfig.RootSectionGroup.SectionGroups["system.webServer"].Sections.Add("httpPlatform")
$sectionHttpPlatform.OverrideModeDefault = "Allow"

# Add to globalModules
$globalModules = Get-IISConfigSection "system.webServer/globalModules" | Get-IISConfigCollection
New-IISConfigCollectionElement $globalModules -ConfigAttribute @{"name"="httpPlatformHandler";"image"="%SystemRoot%\system32\inetsrv\httpPlatformHandler.dll"}

# Add to modules
$modules = Get-IISConfigSection "system.webServer/modules" | Get-IISConfigCollection
New-IISConfigCollectionElement $modules -ConfigAttribute @{"name"="httpPlatformHandler"}
$sm.CommitChanges()
```

### Habilitando HttpPlatformHandler (editando manualmente applicationHost.config)

Você pode ignorar esta seção se já tiver feito as etapas do PowerShell acima.

É recomendável seguir as etapas do PowerShell, embora se você absolutamente precisar editar o arquivo applicationHost.config do IIS para habilitar HttpPlatformHandler, essas serão as etapas.

Abrir `c:\windows\system32\inetsrv\applicationHost.config`

(se você estiver usando o ISE v5 do Powershell, poderá fazer isso usando `psedit c:\windows\system32\inetsrv\applicationHost.config`)

Em `<configSections>` adicionar

```
<configSections>
<section name="appSettings" />
```

Na seção system.webServer, desbloqueie manipuladores de Negar para Permitir

```
<section name="handlers" overrideModeDefault="Allow" />
```

Na seção system.webServer, adicione a nova seção httpPlatform

```
<section name="httpPlatform" overrideModeDefault="Allow" />
</sectionGroup>
```

Adicionar o seguinte a globalModules

```
<add name="httpPlatformHandler" image="%SystemRoot%\system32\inetsrv\httpPlatformHandler.dll" />
</globalModules>
```

Adicionar o seguinte a módulos

```
<add name="httpPlatformHandler" />
</modules>
```

## Instalando o aplicativo Asp.Net Core

Primeiro, verifique se seu aplicativo Asp.Net Core é construído com o objetivo de atingir `coreclr and x64`.

Isso é muito importante, pois qualquer outra combinação não funcionará no Nano.

Depois de compilar para coreclr/x64, você precisará copiar todo o aplicativo para o computador Nano – neste exemplo estou usando `c:\HelloAspNetCore`.

Em seguida, configurarei um novo Site apontando para `c:\HelloAspNetCore\wwwroot`, usando a porta 8000 (para simplificar, vamos usar o Pool de Aplicativos Padrão)

Não há problemas ao executar o site do Asp.Net Core na porta padrão 80, embora em um ambiente de teste eu gosto de separar o aplicativo Asp.Net Core do site padrão, para que seja mais fácil solucionar problemas quando algo der errado (por exemplo, para que você possa verificar se o site do IIS padrão ainda funciona bem).

Usando o IIS PowerShell:

```
Import-module IISAdministration
New-IISSite -Name "AspNetCoreSite" -PhysicalPath c:\HelloAspNetcore\wwwroot -BindingInformation "*:8000:"
```

Criando o site manualmente (omita se você já criou usando o PowerShell acima) editando `c:\windows\system32\inetsrv\applicationHost.config`:

```
<sites>
<site name="Default Web Site" id="1">
    <application path="/">
        <virtualDirectory path="/" physicalPath="%SystemDrive%\inetpub\wwwroot" />
    </application>
    <bindings>
        <binding protocol="http" bindingInformation="*:80:" />
    </bindings>
</site>
<site name="AspNetCoreSite" id="2">
    <application path="/">
        <virtualDirectory path="/" physicalPath="C:\HelloAspNetCore\wwwroot" />
    </application>
    <bindings>
        <binding protocol="http" bindingInformation="*:8000:" />
    </bindings>
</site>
… rest of xml…
</sites>
```

A próxima etapa é abrir a porta 8000 no firewall.

```
New-NetFirewallRule -Name "AspNetCore" -DisplayName "HTTP on TCP/8000" -Protocol tcp -LocalPort 8000 -Action Allow -Enabled True
```

### Solução de problemas

Primeiro, verifique se o próprio IIS está instalado corretamente.
`http://<ipaddress>` deve obter a página padrão do IIS (página IIS Azul), caso contrário, algo muito básico não está configurado corretamente.

Em segundo lugar, verifique se o aplicativo pode ser executado autônomo. Por exemplo: `c:\HelloAspNetCore\approot\web.cmd`

Em terceiro lugar, verifique se você está vendo logs criados por HttpPlatformHandler – por exemplo, `c:\HelloAspNetCore\logs`

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
