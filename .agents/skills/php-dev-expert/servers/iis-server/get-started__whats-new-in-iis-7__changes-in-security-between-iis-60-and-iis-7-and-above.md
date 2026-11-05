# Alterações na segurança entre o IIS 6.0 e o IIS 7 e superior | Microsoft Learn

> **Fonte / Source:** https://learn.microsoft.com/pt-br/iis/get-started/whats-new-in-iis-7/changes-in-security-between-iis-60-and-iis-7-and-above

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

# Alterações na segurança entre o IIS 6.0 e o IIS 7 e superior

Comentários

por a equipe do IIS

## Introdução

O IIS 7 e superior trazem muitas melhorias de segurança do IIS 6.0. Este documento descreve esses aprimoramentos em relação à Autenticação, Autorização, SSL, Lista de Restrições de Extensão de Serviço Web e restrições de IP.

## Autenticação

Para desenvolvedores de aplicativos ASP.NET, antes do IIS 7, havia dois modelos de autenticação contra os quais você precisava programar. Esses modelos eram os pipelines do IIS e do ASP.NET. Primeiro, o IIS examinaria a solicitação e executaria suas rotinas de autenticação e, em seguida, a passaria para ASP.NET para que ela pudesse fazer uma tarefa semelhante.

No IIS 7 e em versões posteriores, unificamos esses dois modelos para criar um novo pipeline robusto que combina o melhor do que ambos os modelos antigos realizavam. O IIS ainda dá suporte a todos os protocolos de autenticação antigos, mas agora também dá suporte à autenticação de formulários que pode proteger contra todos os tipos de conteúdo e não depende de contas do Windows. Além de dar suporte a todos os recursos antigos que você conhece e ama, também aprimoramos alguns deles, como o recurso autenticação anônima.

Essas alterações serão discutidas nas próximas seções.

### Alterações de autenticação anônimas

No IIS 7 e posteriores, a Autenticação Anônima se comporta de maneira semelhante à que tinha em versões anteriores com apenas uma alteração : a capacidade de executar sob o conteúdo da identidade do processo de trabalho. Cada pool de aplicativos é configurado para ser executado sob o conteúdo de uma conta de usuário e o valor padrão dessa conta é NETWORKSERVICE.

Era muito comum que aplicativos ASP.NET desativassem a representação e executassem com a identidade do pool de aplicativos usando o seguinte código em seus arquivos web.config:

```
<identity impersonate="false"/>
```

Há vários cenários em que os aplicativos precisariam ser executados no contexto da identidade do processo:

- A identidade do processo é uma conta de baixo privilégio e os administradores bloquearam seus sistemas para essa conta
- A identidade do processo recebeu acesso à rede e é usada para acessar recursos de back-end, como bancos de dados

Como parte da reformulação do IIS 7 e superior, queríamos tornar esse cenário seguro e fácil de fazer. Para implementar esse cenário, no IIS requer:

- Instalando e habilitando o módulo autenticação anônima
- Definindo o nome de usuário anônimo e a senha como uma cadeia de caracteres vazia

Para fazer isso, modifique sua configuração para autenticação anônima para que ela apareça da seguinte maneira:

```
<anonymousAuthentication enabled="true" userName="" defaultLogonDomain="" />
```

Essa configuração instruirá o IIS a ser executado sempre no contexto da identidade do processo de trabalho.

Por padrão, a identidade de autenticação anônima no IIS 7.0 e superior é a conta de IUSR. Essa conta é uma identidade de baixo privilégio com direitos e privilégios mínimos. Para saber mais sobre a nova conta interna, consulte o artigo [Noções básicas sobre a conta interna e o grupo no IIS 7 e acima](get-started__planning-for-security__understanding-built-in-user-and-group-accounts-in-iis.md) .

### Alterações de passaporte

O suporte para autenticação herdada do Passport foi integrado ao IIS 5/6 e ao Windows Server 2000 e 2003. O suporte ao Passport no IIS 5 &6 foi exposto como uma caixa de seleção na guia Segurança do Diretório no gerenciador de serviços do IIS para "Habilitar Autenticação de Passaporte". Essa caixa de seleção forneceu ao IIS a capacidade de enviar desafios de protocolo Tweener herdados. Além disso, ainda era necessário registrar o site no portal de provisionamento do serviço Passport, obter uma chave de criptografia e configurar o Gerenciador de Passaporte herdado no servidor antes que a integração do IIS fosse funcional.

No Windows Server 2008 e além, os binários herdados do Passport e a integração com o IIS foram removidos.

Desde então, o serviço Passport foi alterado para o Windows Live ID. Embora o novo serviço Live ID certamente tenha se desenvolvido a partir do legado do serviço Passport, há grandes mudanças. Uma das maiores alterações é como um site de parceiro se integra ao Live ID. Você pode adicionar a autenticação do Windows Live ID usando o SDK de Autenticação Web do Windows Live ID disponível publicamente. Embora o serviço Windows Live ID também dê suporte à Federação de Identidade e ao ADFS, essa funcionalidade é uma nova funcionalidade para casos específicos e não é uma substituição para "Passport".

### Autenticação de formulários

A autenticação de formulários tem sido parte de ASP.NET e permite que identidades do Windows e não do Windows se autentiquem e obtenham um objeto de usuário que os aplicativos possam usar posteriormente. O IIS 7 e acima agora dão suporte total à autenticação de formulários e podem ser configurados para proteger o acesso a todos os tipos de conteúdo.

## Como o IIS 7 e acima determinam a identidade autenticada

No IIS 7 e posteriores, as regras de autenticação são processadas pelo mecanismo principal de maneira semelhante à que eram em versões anteriores do IIS com apenas algumas pequenas alterações. Para entender melhor a ordem de processamento, aqui estão as regras com base na ordem que o IIS as avalia:

- Primeiro, o IIS determina se um nome de usuário e uma senha foram configurados no diretório virtual. Se um conjunto de credenciais tiver sido definido, essas credenciais serão usadas. Para administradores pré-IIS 7, essas credenciais são as credenciais UNC
- Se nenhuma credenciais estiver configurada no diretório virtual, o IIS usará as credenciais fornecidas durante a autenticação. Essas credenciais podem pertencer à identidade configurada para autenticação anônima ou às credenciais fornecidas pelo usuário durante o handshake de autenticação quando a autenticação Básica, Digest ou Windows está habilitada
- Se nenhum usuário autenticado tiver sido estabelecido (por exemplo, a autenticação de formulários está habilitada), determinaremos se a identidade do processo deve ser usada
- Se não tivermos uma identidade neste momento, o IIS retornará um acesso negado

## Authorization

### Suporte do AzMan

No IIS 6.0, introduzimos um novo modelo de autorização com base nas regras do AZMan. No IIS 7 e acima, preterimos esse recurso em favor de um novo modelo muito semelhante ao modelo de autorização de ASP.NET (consulte o tópico de autorização de URL abaixo).

### Autorização de URL

No IIS 7 e superior, você tem duas soluções de autorização. A primeira é usar o modelo de autorização ASP.NET. Esse método requer a definição de todas as regras de autorização na configuração system.web <> e exige zero alterações para aplicativos que já têm regras escritas para ASP.NET. O segundo modelo é mover para a nova arquitetura de autorização do IIS. Esse modelo é muito semelhante ao modelo do ASP.NET, com algumas pequenas alterações:

- As regras não dependem da ordem
- As regras de negação são ordenadas no topo da lista
- As regras são processadas de uma maneira oposta ao ASP.NET, principalmente na ordem: avô, pai e filho. O ASP.NET processa regras de autorização na ordem contrária: filho, pai e avô.

Para entender melhor as diferenças entre o modelo de autorização ASP.NET e o modelo de autorização do IIS, vamos primeiro examinar uma configuração de autorização ASP.NET:

```
<authorization>
    <allow users="Vik_Malhotra" />
    <deny roles="administrators" />
    <deny users="*" />
</authorization>
```

Neste exemplo, estamos permitindo Vik\_Malhotra, mas estamos negando todos os outros. No IIS, a configuração é muito semelhante:

```
<authorization>
    <add accessType="allow" users="Vik_Malhotra" />
    <add accessType="deny" roles="administrators" />
    <add accessType="deny" users="*" />
</authorization>
```

O motivo da alteração da sintaxe foi que queríamos garantir que os desenvolvedores de aplicativos soubessem que esses dois modelos são de fato diferentes, mas, ao mesmo tempo, poderiam mover regras de uma implementação para a outra com esforço mínimo.

## SSL

No IIS 6.0, o IIS armazenava informações relacionadas a SSL na metabase e gerenciava grande parte do processo de negociação de SSL em conjunto com HTTP.SYS. No IIS 7 e nas versões posteriores, movemos a maior parte dessa configuração para o armazenamento do HTTP.SYS.

Para ilustrar como cada uma das configurações do IIS 6.0 são levadas para a configuração do IIS 7 e superior (ou HTTP.SYS configuração), o gráfico a seguir foi construído abaixo.

| Configuração da Metabase do IIS 6.0 | Descrição da propriedade | Arquitetura do IIS 7.0 e superior |
| --- | --- | --- |
| **AccessSSLFlags** | AccessSSLFlags é uma máscara de bits de AccessSSL AccessSSL128 AccessSSLNegotiateCert AccessSSLRequireCert AccessSSLMapCert 0 significa *sem SSL.* | Propriedade ainda suportada na configuração do IIS 7.0 e superior na seção <access> |
| **CertCheckMode** | Habilitar ou desabilitar a verificação de CRL (lista de revogação de certificados). | Esse valor agora será armazenado em http.sys no objeto PHTTP\_SERVICE\_CONFIG\_SSL\_PARAM. |
| **RevocationFreshnessTime** | Se a propriedade RevocationFreshnessTime for definida como 1 (true), a CRL (lista de certificados revogados) no cliente de certificado será atualizada pela CRL do local remoto, mesmo que a CRL armazenada em cache no cliente de certificado seja válida. O intervalo de tempo limite padrão é um dia, a menos que você use o RevocationURLRetrievalTimeout para especificar um intervalo de tempo limite diferente (em minutos). | Esse valor agora será armazenado em http.sys no objeto PHTTP\_SERVICE\_CONFIG\_SSL\_PARAM. |
| **Securebindings** | A propriedade SecureBindings especifica uma cadeia de caracteres usada pelo IIS para determinar quais pontos de extremidade de rede seguros são usados pela instância do servidor. | Essa propriedade ainda tem suporte na configuração do IIS 7.0 e acima na <seção de associação> para <sites>. O protocolo usado precisa ser "https". |
| **SSLAlwaysNegoClientCert** | A propriedade SSLAlwaysNegoClientCert controla as negociações de conexão do cliente SSL. Se essa propriedade for definida como true, sempre que as conexões SSL forem negociadas, o servidor negociará imediatamente um certificado do cliente, impedindo uma renegociação cara. A configuração do SSLAlwaysNegoClientCert também ajuda a eliminar impasses na renegociação de certificados de cliente, que podem ocorrer quando um cliente fica bloqueado ao tentar enviar um corpo de solicitação grande durante o recebimento de uma solicitação de renegociação. | Esse valor agora será armazenado em http.sys no objeto PHTTP\_SERVICE\_CONFIG\_SSL\_PARAM. |
| **SSLCertHash** | A propriedade SSLCertHash é usada para armazenar o hash do certificado SSL que está sendo usado. | Esse valor agora será armazenado em http.sys no objeto PHTTP\_SERVICE\_CONFIG\_SSL\_PARAM. |
| **SslCtlIdentifier** | A propriedade SslCtlIdentifier contém um valor exclusivo que identifica uma CTL (lista de confiança de certificado) específica. Ele deve ser usado com SslCtlStoreName para referenciar com precisão uma CTL. | Esse valor agora será armazenado em http.sys no objeto PHTTP\_SERVICE\_CONFIG\_SSL\_PARAM. |
| **SslCtlStoreName** | A propriedade SslCtlStoreName contém o nome do repositório CryptoAPI que contém CTL (listas de confiança de certificado). Ele deve ser usado com SslCtlIdentifier para referenciar com precisão uma CTL. | Esse valor agora será armazenado em http.sys no objeto PHTTP\_SERVICE\_CONFIG\_SSL\_PARAM. |
| **SSLStoreName** | A propriedade SSLStoreName é usada para armazenar o nome do repositório onde reside o par de chaves do certificado. | Esse valor agora será armazenado em http.sys no objeto PHTTP\_SERVICE\_CONFIG\_SSL\_PARAM. |
| **SslUseDsMapper** | A propriedade SslUseDsMapper especifica se o IIS deve usar o mapeador de certificados do Serviço de Diretório do Windows ou o mapeador de certificados do IIS. Se SSLUseDSMapper estiver definido como false, o IIS usará o mapeador de certificados do IIS. | Esse valor agora será armazenado em http.sys no objeto PHTTP\_SERVICE\_CONFIG\_SSL\_PARAM. |

Para obter mais informações sobre o objeto HTTP.SYS PHTTP\_SERVICE\_CONFIG\_SSL\_PARAM, consulte a [documentação](https://msdn.microsoft.com/library/aa364647.aspx) a seguir.

Todas essas alterações são tratadas de forma transparente sob as capas para que, como administrador de servidor, não haja nada de especial que você precise fazer. O IIS fará tudo por você. Se você tiver aplicativos que estão acessando as propriedades antigas do IIS 6.0 agora localizadas no repositório de configuração do HTTP.SYS, nossa interface de mapeador ABO garantirá que os valores corretos sejam lidos/gravados para que seus aplicativos não falhem, mas sim continuarão a funcionar.

## Lista de restrições de extensão do serviço Web

No IIS 7 e acima, esse recurso foi ligeiramente modificado para que seu nome agora leia **"isapiCgiRestrictionList"** – mas caso contrário, ele age e se comporta como tinha no IIS 6.0.

O motivo dessa mudança foi enfatizar seu verdadeiro uso. No IIS 6.0, esse recurso foi adicionado para garantir que binários ISAPI ou CGI maliciosos não pudessem ser copiados para seus servidores IIS e posteriormente terem permissão para serem executados. Com a reformulação do IIS 7 e superior, temos dois modelos com suporte:

- O pipeline de ISAPI "clássico"
- O novo pipeline integrado

Se estivermos no pipeline de ISAPI "clássico", tudo continuará funcionando como você esperava ao usar o IIS 6.0. Para ilustrar esse ponto, considere como ASP.NET funciona ao executar no modo ISAPI. Primeiro, você precisará adicionar o caminho completo do aspnet\_isapi.dll e defini-lo allowed="true", conforme mostrado abaixo:

```
<isapiCgiRestriction>
    <add path="F:\Windows\Microsoft.NET\Framework\v2.0.50727\aspnet_isapi.dll"
    allowed="true" groupId="ASP.NET v2.0.50727" description="ASP.NET v2.0.50727" />
</isapiCgiRestriction>
```

Agora e somente agora esse código (aspnet\_isapi.dll) terá permissão para ser executado. Se alterarmos nosso modo de pipeline para integrado e alterarmos permitido="false", o código ASP.NET ainda será executado.

Por que? O motivo é que isapiCgiRestrictionList só se aplica ao código ISAPI e CGI. No modo integrado, ASP.NET agora faz parte da nova arquitetura e, como resultado, não é afetado pelo isapiCgiRestrictionList. Se você não quiser executar ASP.NET código no novo pipeline integrado, precisará simplesmente remover o managedEngine da lista de módulos.

## Restrições de IP

As restrições de IP funcionam exatamente da mesma maneira que no passado, exceto que agora há suporte para uma nova propriedade chamada "allowUnlisted". Essa propriedade foi adicionada para facilitar a configuração de políticas de segurança para seu sistema em um nível global. Por exemplo, se sua política exigisse apenas certos endereços IP para serem permitidos, mas rejeitar todos os outros que não estão listados não era muito fácil de fazer no passado. Da mesma forma, rejeitar apenas um determinado conjunto de endereços IP e permitir que todos os que não estão listados podem ser facilmente feitos agora. Como administrador de servidor, você pode definir uma política global e, em seguida, bloquear esse valor para que ele não possa ser alterado em seu servidor por administradores de aplicativo ou site.

Para ilustrar, considere um computador de desenvolvimento que você só deseja que os usuários acessem localmente. A configuração a seguir implementa essa política definindo o acesso allowUnlisted="false" e, em seguida, permite explicitamente apenas o acesso localhost (127.0.0.1):

```
<system.webServer>
    <security>
        <ipSecurity allowUnlisted="false">
            <add ipAddress="127.0.0.1" allowed="true" />
        </ipSecurity>
    </security>
</system.webServer>
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
