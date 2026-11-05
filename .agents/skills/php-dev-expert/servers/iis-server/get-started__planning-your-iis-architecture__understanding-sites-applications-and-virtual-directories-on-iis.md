# Noções básicas sobre sites, aplicativos e diretórios virtuais no IIS 7 | Microsoft Learn

> **Fonte / Source:** https://learn.microsoft.com/pt-br/iis/get-started/planning-your-iis-architecture/understanding-sites-applications-and-virtual-directories-on-iis

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

# Noções básicas sobre sites, aplicativos e diretórios virtuais no IIS 7

Comentários

por [Reagan Templin](https://github.com/arkaytee)

## Introdução

No IIS, você pode criar sites, aplicativos e diretórios virtuais para compartilhar informações com usuários pela Internet, uma intranet ou uma extranet. Embora esses conceitos existissem em versões anteriores do IIS, várias alterações no IIS 7 e posteriores afetam a definição e a funcionalidade desses conceitos. O mais importante é que sites, aplicativos e diretórios virtuais agora funcionam juntos em uma relação hierárquica como os blocos de construção básicos para hospedar conteúdo online e fornecer serviços online.

Este artigo fornece uma visão geral rápida dos aplicativos no IIS 6.0 para que você possa entender melhor as diferenças introduzidas no IIS 7. Em seguida, ele explica os conceitos de sites, aplicativos e diretórios virtuais no IIS e apresenta a `<sites>` seção na configuração.

## Sobre sites, aplicativos e diretórios virtuais no IIS 6.0

No IIS 6.0, os conceitos de diretórios virtuais e aplicativos eram confusos. Embora tenham sido discutidos como conceitos separados (e conceitualmente diferentes do ponto de vista da funcionalidade), um aplicativo não era um objeto fisicamente separado de um diretório virtual. No IIS 6.0, um aplicativo era apenas um diretório virtual com uma ou uma combinação das seguintes propriedades na metabase: **AppFriendlyName**, **AppRoot**, **AppIsolated** e **AppPoolID**.

Observação

A raiz do site é uma exceção, pois foi implicitamente tratada como um aplicativo, mesmo que essas propriedades não tenham sido definidas.

Os aplicativos eram menos importantes para o IIS do que para as tecnologias que estenderam a funcionalidade do servidor Web, como ASP (Active Server Pages), ISAPI (Internet Server Application Programming Interface) e ASP.NET. Essas tecnologias forneceram recursos adicionais e processamento para aplicativos hospedados no IIS 6.0 e permitiram que os desenvolvedores criassem aplicativos mais complexos. A questão importante para o IIS 6.0 era isolar esses aplicativos de uma forma que impedisse que aplicativos em um pool de aplicativos afetassem aplicativos em outro pool de aplicativos no servidor.

## Sobre sites, aplicativos e diretórios virtuais no IIS 7 e superior

O IIS 7 e superior formaliza os conceitos de sites, aplicativos e diretórios virtuais. Os diretórios virtuais e os aplicativos agora são objetos separados e existem em uma relação hierárquica no esquema de configuração do IIS. Resumidamente, um site contém um ou mais aplicativos, um aplicativo contém um ou mais diretórios virtuais e um diretório virtual é mapeado para um diretório físico em um computador.

Como no IIS 6.0, um site contém todo o conteúdo, estático e dinâmico, associado a esse site. No entanto, cada site deve conter pelo menos um aplicativo, que é chamado de aplicativo raiz. E cada aplicativo (incluindo o aplicativo raiz) deve conter pelo menos um diretório virtual, que é chamado de diretório virtual raiz. Esses objetos funcionam juntos para formar o site.

Além disso, no IIS 7 e acima, o conceito de um aplicativo agora tem significado para o IIS e as tecnologias que estendem a funcionalidade do IIS. Um aplicativo é um objeto importante para o servidor em runtime. Isso ocorre porque os pipelines de processamento de solicitação do IIS e do ASP.NET foram mesclados no IIS 7 e versões superiores, permitindo que o conteúdo aproveite a funcionalidade que anteriormente era fornecida apenas para aplicativos de código gerenciado. Por exemplo, cada aplicativo de código gerenciado é executado em um AppDomain (Domínio do Aplicativo). Um aplicativo pode ter vários diretórios virtuais e cada um será atendido pelo mesmo AppDomain que o aplicativo ao qual pertence.

As seções a seguir explicam sites, aplicativos, diretórios virtuais e suas configurações relacionadas com mais detalhes.

## Sites

Um site é um contêiner para aplicativos e diretórios virtuais e você pode acessá-lo por meio de uma ou mais associações exclusivas.

A associação inclui dois atributos importantes para a comunicação: o *protocolo de associação* e as *informações de associação*. O protocolo de associação define o protocolo sobre qual comunicação entre o servidor e o cliente ocorre. As informações de associação definem as informações usadas para acessar o site. Por exemplo, o protocolo de associação de um site da Web pode ser HTTP ou HTTPS, e as informações de associação são a combinação de endereço IP, porta e cabeçalho de host opcional.

Um site poderá conter mais de uma associação se o site exigir protocolos diferentes ou informações de associação. Nas versões anteriores do IIS, somente os protocolos HTTP e HTTPS tinham suporte. Por exemplo, um site da Web pode ter tido uma associação HTTP e uma associação HTTPS quando seções do site exigiam comunicação segura por HTTPS.

No IIS 7 e posteriores, as associações podem ser aplicadas a qualquer protocolo. O WAS (Serviço de Ativação de Processo do Windows) é o novo serviço que possibilita que o IIS use protocolos adicionais. Esse serviço mantém o modelo de processo familiar do IIS 6.0, como pools de aplicativos e ativação de processo baseado em mensagens, bem como recursos de hospedagem, como proteção rápida contra falhas, monitoramento de integridade e reciclagem. No entanto, WAS remove a dependência de HTTP da arquitetura de ativação. Isso é útil para tecnologias que fornecem comunicação de aplicativo para aplicativo nos Serviços Web por protocolos padrão. O modelo de programação do Windows Communication Foundation (WCF) é uma dessas tecnologias que pode habilitar a comunicação pelos protocolos padrão de Protocolo de Controle de Transmissão (TCP), MSMQ (Enfileiramento de Mensagens da Microsoft) e Pipes Nomeados. Isso permite que os aplicativos que usam protocolos de comunicação aproveitem os recursos do IIS, como reciclagem de processos, proteção rápida contra falhas e configuração que antes só estavam disponíveis para aplicativos baseados em HTTP. Para obter mais informações sobre o modelo de programação do WCF, consulte [o Windows Communication Foundation](https://learn.microsoft.com/pt-br/dotnet/framework/wcf/) no MSDN.

Além de conter aplicativos (que contêm diretórios virtuais) e especificar associações, as seguintes configurações pertencem ao site:

- Limites: defina as configurações para limitar a quantidade de largura de banda, o número de conexões ou o tempo permitido para conexões com um site.
- Registro: defina as configurações para gerenciamento e armazenamento de arquivos de log para o site.
- Logs de rastreamento de solicitação com falha: configure as configurações para registrar rastros de solicitações com falha para o site.

## Aplicativos

Um aplicativo é um grupo de arquivos que fornece conteúdo ou fornece serviços por protocolos, como HTTP. Quando você cria um aplicativo no IIS, o caminho do aplicativo se torna parte da URL do site.

No IIS 7 e posteriores, cada site deve ter um aplicativo chamado aplicativo raiz ou aplicativo padrão. No entanto, um site pode ter mais de um aplicativo. Por exemplo, você pode ter um site de comércio online que tem vários aplicativos, como um aplicativo de carrinho de compras que permite que os usuários coletem itens durante as compras e um aplicativo de logon que permite aos usuários recuperar informações de pagamento salvas quando fazem uma compra.

Além de pertencer a um site, um aplicativo pertence a um pool de aplicativos, que isola o aplicativo de aplicativos em outros pools de aplicativos no servidor. No caso de aplicativos de código gerenciado, associe seu aplicativo a um pool de aplicativos que esteja executando a versão do .NET Framework necessária para seu aplicativo.

Conforme descrito na seção Sites deste artigo, o IIS dá suporte a HTTP e HTTPS por padrão, mas você pode usar protocolos adicionais. Para cada site, você especifica uma ou mais associações para se comunicar e acessar o conteúdo no site. Para que um aplicativo se comunique usando um protocolo especificado na associação do site pai, você deve habilitar o protocolo. Para fazer isso, especifique o protocolo no atributo **enabledProtocols** para o aplicativo e verifique se você tem o adaptador de ouvinte apropriado no servidor e especificado na `<listenerAdapters>` seção na configuração.

## Diretórios Virtuais

Um diretório virtual é um nome de diretório (também conhecido como caminho) que você especifica no IIS e mapeia para um diretório físico em um servidor local ou remoto. Em seguida, o nome do diretório se torna parte da URL do aplicativo e os usuários podem solicitar a URL de um navegador para acessar o conteúdo no diretório físico, como uma página da Web ou uma lista de diretórios e arquivos adicionais. Se você especificar um nome diferente para o diretório virtual do que o diretório físico, é mais difícil para os usuários descobrirem a estrutura de arquivo físico real em seu servidor porque a URL não é mapeada diretamente para a raiz do site.

No IIS 7 e posteriores, cada aplicativo deve ter um diretório virtual, que é chamado de diretório virtual raiz e que mapeia o aplicativo para o diretório físico que contém o conteúdo do aplicativo. No entanto, um aplicativo pode ter mais de um diretório virtual. Por exemplo, você pode usar um diretório virtual quando quiser que seu aplicativo inclua imagens de outro local no sistema de arquivos, mas não deseja mover os arquivos de imagem para o diretório físico mapeado para o diretório virtual raiz do aplicativo.

Por padrão, o IIS usa a configuração dos arquivos Web.config localizados no diretório físico para o qual o diretório virtual é mapeado, bem como em todos os diretórios filho daquele diretório físico. Se você não quiser usar arquivos Web.config em diretórios filho, especifique **false** para o atributo **allowSubDirConfig** no diretório virtual.

Opcionalmente, quando você precisa especificar credenciais e um método para acessar o diretório virtual, você pode especificar valores para os atributos **nome de usuário**, **senha** e **logonMethod** .

## Configuração do IIS: `<sites>` Seção

Dê uma olhada na seção padrão `<sites>` no IIS 7 e acima. Isso é o que está no arquivo ApplicationHost.config (localizado em `%windir%\system32\inetsrv\config\`) depois de instalar o IIS no Windows Server® 2008.

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
    <siteDefaults> 
        <logFile logFormat="W3C" directory="%SystemDrive%\inetpub\logs\LogFiles" /> 
        <traceFailedRequestsLogging directory="%SystemDrive%\inetpub\logs\FailedReqLogFiles" /> 
    </siteDefaults> 
    <applicationDefaults applicationPool="DefaultAppPool" /> 
    <virtualDirectoryDefaults allowSubDirConfig="true" /> 
</sites>
```

Quando você vê um único "/" em um campo de caminho, você sabe que esse é um objeto raiz. Dependendo se ele está na seção de aplicativo ou diretório virtual, ele é um aplicativo raiz ou um diretório virtual raiz.

### Elementos padrão

A seção a seguir lista as coleções e elementos na `<sites>` seção e sua relação hierárquica dentro da `<sites>` seção.

```
<sites> section 
<site> collection 
<bindings> collection 
<binding> element 
<clear> element 
<limits> element 
<logFile> element 
<traceFailedRequestsLogging> element 
<application> collection 
<virtualDirectory> collection 
<virtualDirectoryDefaults> element 
<applicationDefaults> element 
<virtualDirectoryDefaults> element 
<siteDefaults> element 
<bindings> collection 
<binding> element 
<clear> element 
<limits> element 
<logFile> element 
<traceFailedRequestsLogging> element 
<applicationDefaults> element 
<virtualDirectoryDefaults> element
```

Observe que há dois elementos que aparecem em mais de um lugar: o `<applicationDefaults>` elemento e o `<virtualDirectoryDefaults>` elemento. Há também um `<siteDefaults>` elemento, embora ele apareça apenas uma vez porque ele pode ser configurado em apenas um local na `<sites>` seção. Os elementos padrão são especiais porque permitem que você configure valores padrão para atributos em vez de ter que repetir os mesmos valores em cada coleção.

Quando um atributo é configurado em mais de um nível, o valor no nível mais baixo é usado. Por exemplo, se você especificar um valor padrão em um `<applicationDefaults>` elemento na `<sites>` seção e em uma `<site>` coleção, o valor da `<site>` coleção será usado. Além disso, se o mesmo atributo ou elemento filho estiver configurado em um elemento padrão e na coleção do objeto, o valor na coleção será usado. Por exemplo, se você configurar um atributo em um `<applicationDefaults>` elemento e em uma `<application>` coleção, o valor da `<application>` coleção será usado.

A tabela a seguir especifica em quais elementos pai um elemento `<applicationDefaults>` pode ser configurado e descreve o efeito que os valores têm nas aplicações.

| Elemento pai | Descrição |
| --- | --- |
| Seção `<sites>` | Especifica as configurações padrão para todos os aplicativos no servidor. |
| Coleção `<site>` | Especifica as configurações padrão para todos os aplicativos no site pai. |

A tabela a seguir especifica em quais elementos pai um elemento `<virtualDirectoryDefaults>` pode ser configurado e descreve o efeito que os valores têm sobre os diretórios virtuais.

| Elemento pai | Descrição |
| --- | --- |
| Seção `<sites>` | Especifica as configurações padrão para todos os diretórios virtuais no servidor. |
| Coleção `<site>` | Especifica as configurações padrão para todos os diretórios virtuais no site pai. |
| Coleção `<application>` | Especifica as configurações padrão para todos os diretórios virtuais no aplicativo pai. |

## Resumo

Agora você deve ter uma melhor compreensão de sites, aplicativos e diretórios virtuais no IIS 7 e superior. Ao contrário do IIS 6.0, aplicativos e diretórios virtuais tornaram-se objetos distintos na configuração, o que realça sua finalidade exclusiva para o servidor Web e sua relação com o site. Além disso, os sites agora podem conter aplicativos que usam protocolos diferentes de HTTP e HTTPS, o que estende a funcionalidade do site, mantendo os benefícios do modelo de processo introduzido no IIS 6.0.

Para obter mais informações sobre a arquitetura WAS e IIS, consulte a Arquitetura de Request-Processing do IIS no IIS.NET. Para obter mais informações sobre as configurações discutidas neste artigo, consulte [o Esquema de Configurações do IIS 7](https://learn.microsoft.com/pt-br/previous-versions/iis/settings-schema/aa347559(v=vs.90)) no MSDN.

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
