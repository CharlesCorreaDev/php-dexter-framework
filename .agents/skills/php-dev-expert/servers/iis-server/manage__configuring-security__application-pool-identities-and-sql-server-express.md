# Identidades do Pool de Aplicativos e SQL Server Express | Microsoft Learn

> **Fonte / Source:** https://learn.microsoft.com/pt-br/iis/manage/configuring-security/application-pool-identities-and-sql-server-express

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

# Identidades do Pool de Aplicativos e SQL Server Express

Comentários

por [Thomas Deml](https://github.com/thomasdeml)

## Introdução

O IIS 7.5 no Windows 7 ou Windows Server 2008 R2 dá suporte a um novo recurso chamado "Identidade do Pool de Aplicativos". Ele permite o isolamento efetivo dos Pools de Aplicações sem a necessidade de manter uma conta de usuário para cada Pool de Aplicações que deveria ser isolado. As Identidades do Pool de Aplicativos são geradas automaticamente e também não exigem senhas – os custos de gerenciamento são reduzidos.

Assim como acontece com cada novo recurso, há determinadas desvantagens e isso não é diferente com o recurso Identidade do Pool de Aplicativos. Este artigo descreve um problema que um desenvolvedor de aplicativos Web pode enfrentar ao usar o IIS 7.5 junto com o SQL Express.

## As peças do quebra-cabeça

O SQL Express dá suporte a um recurso chamado [, também conhecidas como "Instâncias de Usuário" ou RANU (Rodar Como Usuário Comum).](https://msdn.microsoft.com/library/bb264564(SQL.90).aspx "Instâncias de Usuário do SQL Express") Se esse recurso estiver ativado (ativá-lo é tão fácil quanto adicionar "UserInstance=true" à cadeia de conexão), o processo do SQL Server iniciado quando um usuário abre uma conexão com o banco de dados será executado sob a mesma conta do usuário que se conectou. O RANU é muito desejável do ponto de vista de segurança.

Quando você está desenvolvendo com o Visual Studio 2008 ou o Visual Studio 2010, uma cadeia de conexão padrão é armazenada no arquivo machine.config. Aqui está:

```
<connectionStrings>
  <add name="LocalSqlServer" connectionString="data source=.\SQLEXPRESS;Integrated Security=SSPI;AttachDBFilename=|DataDirectory|aspnetdb.mdf;User Instance=true" providerName="System.Data.SqlClient"/>
...
```

A cadeia de conexão padrão está usando RANU (User Instance=true) como você pode ver. A cadeia de conexão padrão é usada, por exemplo, quando um recurso requer um banco de dados para armazenar alguns dados, mas nenhum banco de dados ainda está configurado. ASP.NET Membership é um bom exemplo para isso. Se um desenvolvedor adicionar a funcionalidade de associação ao seu aplicativo Web, ASP.NET criará automaticamente um banco de dados e as tabelas necessárias usando a string de conexão padrão em 'machine.config'.

## O problema

Agora vem o problema:

O RANU pronto para uso não funciona com o novo recurso "Identidade do Pool de Aplicativos". O recurso "Identidade do Pool de Aplicativos" é a identidade padrão no IIS 7.5. O IIS 7.5 DefaultAppPool, por exemplo, é executado na identidade "IIS AppPool\DefaultAppPool" e não mais como NetworkService. Por esse motivo, você poderá encontrar esse problema se também estiver desenvolvendo com o Visual Studio.

Aqui estão as páginas de erro que você pode ver:

[![A captura de tela mostra o erro do servidor no aplicativo de teste S Q L.](application-pool-identities-and-sql-server-express/_static/image4.png)](https://learn.microsoft.com/pt-br/iis/manage/configuring-security/application-pool-identities-and-sql-server-express/_static/image3.png)

O erro é causado porque o SQL Server Express RANU exige que um perfil de usuário seja carregado e o IIS 7.5 não carrega um Perfil de Usuário do Windows por padrão. Você não vê esse erro em versões anteriores do IIS porque o DefaultAppPool estava em execução como NetworkService e o sistema operacional pré-carrega o perfil de usuário para NetworkService.

## A correção

Felizmente, a correção para este problema é bastante simples. O IIS permite que você carregue o perfil de usuário de um Pool de Aplicativos simplesmente definindo a configuração LoadUserProfile em um Pool de Aplicativos como true.

Isso pode ser feito por meio da Interface do Usuário:

1. Clique no nó "Pools de Aplicações" no Gerenciador do IIS.
2. Selecione o Pool de Aplicativos em questão, por exemplo, DefaultAppPool
3. Clique em "Configurações Avançadas..." no menu Ações no lado direito.
4. Na sub seção "Modelo de Processo", você encontra a linha com o nome "Carregar Perfil do Usuário". Mude para "true"

Se você quiser fazer isso por meio da linha de comando, execute o seguinte comando em um prompt de comando com privilégios elevados:

```
%windir%\system32\inetsrv\appcmd set config -section:applicationPools /[name='DefaultAppPool'].processModel.loadUserProfile:false
```

## Efeitos colaterais do carregamento do perfil de usuário

O maior efeito colateral com o carregamento do perfil de usuário pode ser o diretório temporário. Se o perfil do usuário não for carregado, a variável de ambiente %temp% aponta para o diretório \windows\temp. Todos podem escrever para este diretório. Se o perfil do usuário for carregado, a variável de ambiente %temp% aponta para um diretório dedicado ao qual apenas o usuário tem acesso. Portanto, se o DefaultAppPool for executado como "IIS AppPool\DefaultAppPool", a variável %temp% apontará para o `C:\Users\DefaultAppPool\AppData\Local\Temp` diretório. Somente o DefaultAppPool e os Administradores teriam acesso de gravação para esse diretório.

Então por que isso é um problema? Infelizmente, o sistema operacional Windows dá suporte a um recurso chamado "representação". A representação permite que uma parte do código seja executada com uma identidade diferente daquela com a qual o processo está sendo executado. Algumas Estruturas de Aplicativo Web aproveitam esse recurso. O ASP clássico, por exemplo, executa todo o código como representado. A identidade usada é o usuário anônimo configurado no repositório de configuração do IIS ou o usuário autenticado por meio dos esquemas de autenticação fornecidos pelo IIS (Basic, Digest ou Windows). ASP.NET não representa o código executado por padrão. A representação ainda tem suporte usando a seção [system.web identity](https://msdn.microsoft.com/library/72wdk8cc(VS.71).aspx "system.web identity") na configuração ou usando APIs do .NET. O problema é que a identidade representada provavelmente não tem acesso ao diretório %temp%. Aqui está um  que explica um exemplo deste problema.

Se você for apenas desenvolvedor de aplicativos ASP.NET e não usar a seção de identidade, provavelmente nunca verá esses problemas, e carregar o perfil de usuário será perfeitamente seguro.

## Resumo

Este artigo descreveu um problema com o SQL Express e a nova Identidade do Pool de Aplicativos do IIS 7.5. Como o recurso Identidade do Pool de Aplicativos é o padrão no IIS 7.5, os usuários podem ver o problema descrito acima ao usar o SQL Express em um ambiente de desenvolvimento, ou seja, ao desenvolver com o Visual Studio. Esse problema não ocorrerá em ambientes de produção porque o SQL Express não tem suporte em ambientes de produção.

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
