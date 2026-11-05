# Suporte ao HSTS (Segurança de Transporte Estrito) na versão 1709 do IIS 10.0 | Microsoft Learn

> **Fonte / Source:** https://learn.microsoft.com/pt-br/iis/get-started/whats-new-in-iis-10-version-1709/iis-10-version-1709-hsts

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

# IIS 10.0 versão 1709 Suporte à Segurança de Transporte Estrito (HSTS)

Comentários

por [Yanbing Shi](https://github.com/bangbingsyb)

> No IIS 10.0 versão 1709, o administrador tem a opção de habilitar o redirecionamento HSTS e HTTP para HTTPS no nível do site.

## Compatibilidade

| Versão | Observações |
| --- | --- |
| IIS 10.0 versão 1709 | Os recursos descritos neste artigo foram introduzidos no IIS 10.0 versão 1709 |
| IIS 10.0 e anterior | Os recursos descritos neste artigo não tinham suporte antes do IIS 10.0 versão 1709 |

## Segurança de Transporte Estrito HTTP (HSTS)

O HTTP Strict Transport Security (HSTS), especificado no [RFC 6797](https://tools.ietf.org/html/rfc6797), permite que um site se declare como um host seguro e informe aos navegadores que ele deve ser contatado apenas por meio de conexões HTTPS. O HSTS é um aprimoramento de segurança opt-in que impõe HTTPS e reduz significativamente a capacidade de ataques de tipo man-in-the-middle para interceptar solicitações e respostas entre servidores e clientes.

O HSTS impõe o uso de HTTPS por meio de uma política que requer suporte de servidores Web e navegadores. Um host web habilitado para HSTS pode incluir um cabeçalho de resposta HTTP especial "STS" (Strict-Transport-Security) juntamente com uma diretiva "max-age" em uma resposta HTTPS para solicitar que o navegador use HTTPS para comunicação adicional. O navegador recebe o cabeçalho e memoriza a política HSTS para o número de segundos especificado pela diretiva "max-age". Nesse período, se um usuário tentar visitar o mesmo site, mas digitar http:// ou omitir o esquema, o navegador automaticamente transformará o link inseguro para o seguro (https://) e fará uma conexão HTTPS com o servidor. Depois que uma resposta é recebida por meio de HTTPS, o navegador também impede que o usuário "clique" em qualquer aviso de segurança (por exemplo, um aviso sobre um certificado de servidor inválido). Para aproveitar o HSTS, o navegador precisa ver o cabeçalho HSTS pelo menos uma vez. Para proteger o usuário na primeira conexão com um determinado domínio, o HSTS tem um mecanismo separado para pré-carregar uma lista de domínios registrados para o navegador pronto para uso.

## Desafios na habilitação do HSTS antes do IIS 10.0 versão 1709

Antes do IIS 10.0 versão 1709, habilitar o HSTS em um servidor IIS requer uma configuração complexa.

Duas soluções para habilitar o HSTS antes do IIS 10.0 versão 1709 são fornecidas para um cenário de exemplo: o administrador da Web deseja habilitar o HSTS para um domínio contoso.com que aceita conexões HTTP e HTTPS e redirecionar todo o tráfego HTTP para HTTPS. O redirecionamento nesse cenário é inseguro por natureza, mas ainda é um padrão seguido por muitos sites que dão suporte a HTTPS. O motivo fundamental para ainda aceitar conexões via HTTP é que o site não tem controle de como os visitantes podem tentar acessá-lo - via HTTPS ou apenas HTTP. Habilitar o HSTS reduz consideravelmente o número de redirecionamentos HTTP para HTTPS inseguros sob a condição de que o navegador veja o cabeçalho STS durante a primeira conexão HTTPS bem-sucedida (por meio de visita direta ou por meio de redirecionamento).

### Solução 1: Módulo de Redirecionamento HTTP + Cabeçalhos Personalizados

O redirecionamento de todo o tráfego HTTP para HTTPS pode ser obtido usando o [Módulo de Redirecionamento HTTP](configuration__system.webserver__httpredirect.md) com dois sites separados, um para HTTP e outro para HTTPS, para evitar um loop de redirecionamento infinito.

```
<sites>
    <site name="Contoso-http" id="1" serverAutoStart="true">
        <application path="/" applicationPool="Contoso-http">
            <virtualDirectory path="/" physicalPath="C:\inetpub\Contoso-http" />
        </application>
        <bindings>
            <binding protocol="http" bindingInformation="*:80:contoso.com" />
        </bindings>
    </site>
    <site name="Contoso-https" id="2" serverAutoStart="true">
        <application path="/" applicationPool="Contoso-https">
            <virtualDirectory path="/" physicalPath="C:\inetpub\Contoso-https" />
        </application>
        <bindings>
            <binding protocol="https" bindingInformation="*:443:contoso.com" sslFlags="0" />
        </bindings>
    </site>
    <siteDefaults>
        <logFile logFormat="W3C" directory="%SystemDrive%\inetpub\logs\LogFiles" />
        <traceFailedRequestsLogging directory="%SystemDrive%\inetpub\logs\FailedReqLogFiles" />
    </siteDefaults>
    <applicationDefaults applicationPool="DefaultAppPool" />
    <virtualDirectoryDefaults allowSubDirConfig="true" />
</sites>
```

Uma regra de redirecionamento é configurada no web.config do site HTTP para rotear todo o tráfego para o site HTTPS, que é o responsável por realmente servir os conteúdos.

```
<?xml version="1.0" encoding="UTF-8"?>
<configuration>
    <system.webServer>
        <httpRedirect enabled="true" destination="https://contoso.com" httpResponseStatus="Permanent" />
    </system.webServer>
</configuration>
```

O cabeçalho STS pode ser adicionado por meio de [Cabeçalhos Personalizados](configuration__system.webserver__httpprotocol__customheaders.md) configurando o web.config do site HTTPS.

```
<?xml version="1.0" encoding="UTF-8"?>
<configuration>
    <system.webServer>
        <httpProtocol>
            <customHeaders>
                <add name="Strict-Transport-Security" value="max-age=31536000" />
            </customHeaders>
        </httpProtocol>
    </system.webServer>
</configuration>
```

### Solução 2: Módulo de Reescrita de URL

Uma solução alternativa é instalar o [Módulo de Regravação de URL](extensions__url-rewrite-module__using-the-url-rewrite-module.md) e configurar regras de regravação para um único site com associações HTTP e HTTPS. O redirecionamento HTTP para HTTPS pode ser especificado por uma regra de entrada, ao mesmo tempo em que a adição do cabeçalho STS às respostas HTTPS pode ser obtida por uma regra de saída.

```
<?xml version="1.0" encoding="UTF-8"?>
<configuration>
    <system.webServer>
        <rewrite>
            <rules>
                <rule name="Redirect HTTP to HTTPS" stopProcessing="true">
                    <match url="(.*)" />
                    <conditions>
                        <add input="{HTTPS}" pattern="off" />
                    </conditions>
                    <action type="Redirect" url="https://{HTTP_HOST}/{R:1}" redirectType="Permanent" />
                </rule>
            </rules>
            <outboundRules>
                <rule name="Add the STS header in HTTPS responses">
                    <match serverVariable="RESPONSE_Strict_Transport_Security" pattern=".*" />
                    <conditions>
                        <add input="{HTTPS}" pattern="on" />
                    </conditions>
                    <action type="Rewrite" value="max-age=31536000" />
                </rule>
            </outboundRules>
        </rewrite>
    </system.webServer>
</configuration>
```

## Suporte ao HSTS nativo do IIS 10.0 versão 1709

Com o lançamento do IIS 10.0 versão 1709, o HSTS agora tem suporte nativo. A configuração para habilitar o `<hsts>` HSTS é significativamente simplificada – o HSTS pode ser habilitado no nível do site configurando os atributos do elemento `<site>` em cada elemento `<site>` – mais detalhes podem ser encontrados na referência de configuração das [Configurações para um Site HSTS<>](configuration__system.applicationhost__sites__site__hsts.md).

O cenário de exemplo pode ser simplesmente alcançado configurando os atributos `enabled`, `max-age` e `redirectHttpToHttps` do elemento `<hsts>` do site usando os cmdlets do PowerShell de [IISAdministration](get-started__whats-new-in-iis-10__iisadministration-powershell-cmdlets.md) conforme o [tutorial](https://blogs.iis.net/jeonghwan/how-to-use-iisadministration-powershell-cmdlets-to-configure-iis-configuration-settings).

```
Import-Module IISAdministration
Reset-IISServerManager -Confirm:$false
Start-IISCommitDelay

$sitesCollection = Get-IISConfigSection -SectionPath "system.applicationHost/sites" | Get-IISConfigCollection
$siteElement = Get-IISConfigCollectionElement -ConfigCollection $sitesCollection -ConfigAttribute @{"name"="Contoso"}
$hstsElement = Get-IISConfigElement -ConfigElement $siteElement -ChildElementName "hsts"
Set-IISConfigAttributeValue -ConfigElement $hstsElement -AttributeName "enabled" -AttributeValue $true
Set-IISConfigAttributeValue -ConfigElement $hstsElement -AttributeName "max-age" -AttributeValue 31536000
Set-IISConfigAttributeValue -ConfigElement $hstsElement -AttributeName "redirectHttpToHttps" -AttributeValue $true

Stop-IISCommitDelay
Remove-Module IISAdministration
```

As configurações do HSTS para o site são mostradas abaixo:

```
<site name="Contoso" id="1">
    <application path="/" applicationPool="Contoso">
        <virtualDirectory path="/" physicalPath="C:\Contoso\Content" />
    </application>
    <bindings>
        <binding protocol="http" bindingInformation="*:80:contoso.com" />
        <binding protocol="https" bindingInformation="*:443:contoso.com" sslFlags="0" />
    </bindings>
    <hsts enabled="true" max-age="31536000" redirectHttpToHttps="true" />
</site>
```

O suporte nativo do HSTS também pode ser usado junto com o [Módulo de Redirecionamento HTTP](configuration__system.webserver__httpredirect.md) para cenários mais complexos.

Por exemplo, um site contoso.com redireciona todo o tráfego para seu subdomínio `www.contoso.com`e ambos os sites aceitam conexões HTTP e HTTPS. Esse é um cenário típico se o site for preferível ter um único endereço canônico. Recomenda-se que o HSTS seja habilitado para o domínio raiz e o subdomínio, pois os usuários podem visitar diretamente um por http ou HTTPS. A habilitação do `includeSubDomains` atributo do `<hsts>` elemento do domínio raiz melhora ainda mais a cobertura da política HSTS para todos os seus subdomínios.

```
<sites>
    <site name="Contoso" id="1">
        <application path="/" applicationPool="Contoso">
            <virtualDirectory path="/" physicalPath="C:\inetpub\Contoso" />
        </application>
        <bindings>
            <binding protocol="http" bindingInformation="*:80:contoso.com" />
            <binding protocol="https" bindingInformation="*:443:contoso.com" sslFlags="0" />
        </bindings>
        <hsts enabled="true" max-age="31536000" includeSubDomains="true" redirectHttpToHttps="true" />
    </site>
    <site name="Contoso-www" id="2">
        <application path="/" applicationPool="Contoso-www">
            <virtualDirectory path="/" physicalPath="C:\inetpub\Contoso-www" />
        </application>
        <bindings>
            <binding protocol="http" bindingInformation="*:80:www.contoso.com" />
            <binding protocol="https" bindingInformation="*:443:www.contoso.com" sslFlags="0" />
        </bindings>
        <hsts enabled="true" max-age="31536000" redirectHttpToHttps="true" />
    </site>
    <siteDefaults>
        <logFile logFormat="W3C" directory="%SystemDrive%\inetpub\logs\LogFiles" />
        <traceFailedRequestsLogging directory="%SystemDrive%\inetpub\logs\FailedReqLogFiles" />
    </siteDefaults>
    <applicationDefaults applicationPool="DefaultAppPool" />
    <virtualDirectoryDefaults allowSubDirConfig="true" />
</sites>
```

Além disso, o redirecionamento do domínio raiz para o subdomínio pode ser configurado por meio do `<httpRedirect>` elemento no web.config do site de domínio raiz. Com essa configuração, uma solicitação HTTP para contoso.com primeiro será redirecionada para HTTPS e, em seguida, a solicitação HTTPS para o mesmo site será redirecionada `www.contoso.com` com o cabeçalho STS adicionado na resposta.

```
<?xml version="1.0" encoding="UTF-8"?>
<configuration>
    <system.webServer>
        <httpRedirect enabled="true" destination="https://www.contoso.com" httpResponseStatus="Permanent" />
    </system.webServer>
</configuration>
```

As configurações de exemplo acima também se aplicam ao cenário de redirecionamento do tráfego de um site de origem para um site de destino que não é um subdomínio do site de origem, com uma pequena modificação de configuração de desabilitação `includeSubDomains` para o site de origem.

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
