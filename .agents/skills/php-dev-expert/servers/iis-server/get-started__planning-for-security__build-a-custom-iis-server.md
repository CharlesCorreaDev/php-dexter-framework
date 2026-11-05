# Criar um servidor IIS 7.0 personalizado | Microsoft Learn

> **Fonte / Source:** https://learn.microsoft.com/pt-br/iis/get-started/planning-for-security/build-a-custom-iis-server

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

# Criar um servidor IIS 7.0 personalizado

Comentários

por [Mike Volodarsky](https://github.com/leanserver)

## Introdução

O IIS 6.0 e as versões anteriores implementaram a maior parte da funcionalidade de servidor amplamente usada dentro do próprio servidor. Por outro lado, o mecanismo de servidor Web do IIS 7.0 e acima fornece uma arquitetura modular sobre a qual praticamente todos os recursos do servidor são fornecidos como componentes conectáveis. Isso permite melhorias tremendas em todo o quadro, incluindo:

- Capacidade de controlar exatamente qual conjunto de recursos é carregado/usado no servidor, removendo recursos desnecessários para reduzir a área da superfície de ataque/o volume de memória do servidor
- Capacidade de substituir cada recurso por implementações personalizadas ou de terceiros
- Capacidade de especializar o servidor com base em sua função na topologia do servidor
- Controle avançado sobre o conjunto de recursos do servidor, tanto em um nível refinado quanto no nível de delegação do aplicativo

Esses componentes do servidor, conhecidos como módulos, são carregados durante a inicialização do processo de trabalho do pool de aplicativos e fornecem serviços de processamento de solicitação no servidor. Cada aplicativo IIS 7.0 e superior é uma combinação de serviços fornecidos por módulos habilitados para o aplicativo e conteúdo associado usado por esses serviços. O servidor fornece duas funções principais executadas por módulos:

- Fornecendo serviços de solicitação, como autenticação ou cache de saída (semelhante aos filtros ISAPI no IIS 6.0)
- Fornecendo tratamento de solicitações, como tratamento de arquivos estáticos, CGI ou processamento de página ASP.NET (semelhante às extensões ISAPI no IIS 6.0)

Ao habilitar módulos diferentes, o servidor pode ser configurado para fornecer os serviços exigidos pelos aplicativos no servidor.

As tarefas ilustradas neste artigo incluem:

- Revisando a configuração do servidor, o padrão e o conjunto de módulos carregados no servidor por padrão
- Removendo todos os módulos para reduzir o servidor à sua configuração mínima e examinar o efeito na pegada.
- Criando um servidor personalizado adicionando módulos incrementalmente para dar suporte a um cenário específico

## Revisão da configuração do módulo padrão

A configuração do servidor principal está contida no arquivo applicationHost.config, localizado no diretório `%windir%\system32\inetsrv\config\`de configuração do IIS. Analisamos a seguinte configuração contida no grupo de seções `<system.webServer>`:

`<globalModules>` seção. Esta seção no nível do servidor contém a lista de módulos carregados pelo processo de trabalho do servidor e as DLLs nativas associadas que implementam sua funcionalidade.

`<modules>` Seção. Esta seção no nível do aplicativo contém a lista de módulos habilitados para um aplicativo específico. Esta seção serve para selecionar o subconjunto de módulos carregados que devem estar ativos em um aplicativo e também para carregar módulos adicionais no nível do aplicativo.

`<handlers>` Seção. Esta seção no nível da URL contém os mapeamentos de manipulador que o servidor usa para mapear solicitações de entrada para um módulo específico que o processará. Isso é semelhante aos scriptmaps do IIS 6.0 ou do ASP.NET e funciona como um mapeamento unificado de solicitações para manipuladores de tipos de conteúdo nativo e gerenciado.

A descrição completa de todos os módulos do IIS está disponível na [Visão Geral dos Módulos do IIS 7.0 e Superior.](get-started__introduction-to-iis__iis-modules-overview.md)

### Criar um backup de configuração

Primeiro, fazemos backup da configuração do servidor para que possamos restaurá-la, se necessário. Execute o seguinte comando em um prompt de comando em execução como Administrador:

```
%windir%\system32\inetsrv\appcmd add backup initial
```

Em seguida, podemos restaurar a configuração do servidor para o estado inicial executando:

```
%windir%\system32\inetsrv\appcmd restore backup initial
```

### Examinar a lista padrão de módulos

Navegue até a seção <system.webServer>/<globalModules>. Esta seção, que só pode ser configurada no nível do servidor, contém os módulos carregados por cada processo de trabalho do servidor. Cada entrada configura um módulo com um nome específico e a DLL que implementa a funcionalidade desse módulo:

```
<globalModules>

    <!--several modules omitted -->

    <add name="BasicAuthenticationModule" image="…\authbas.dll" />

    <add name="WindowsAuthenticationModule" image="…\authsspi.dll" />

</globalModules>
```

Examine os nomes dos vários módulos na configuração de servidor padrão– vemos serviços familiares fornecidos como parte do servidor no IIS 6.0:

**Módulo de autenticação do Windows, autenticação de solicitação por NTLM**

```
<add name="WindowsAuthenticationModule" image="…\authsspi.dll" />
```

**Módulo manipulador de arquivos estáticos, servindo arquivos estáticos**

```
<add name="StaticFileModule" image="…\static.dll" />
```

**Módulo de compactação dinâmica, compactação de respostas**

```
<add name="DynamicCompressionModule" image="…\compdyn.dll" />
```

Navegue até a <seção system.webServer>/<modules> . Esta seção, que pode ser configurada no nível do servidor ou do aplicativo, especifica quais dos módulos carregados na <seção globalModules> estão habilitados para um aplicativo específico. Na maioria das vezes, vemos que esta seção lista os nomes dos módulos que vimos na seção, habilitando-os por padrão para todos os aplicativos.

Observação

Há alguns itens extras no final da lista– são módulos gerenciados desenvolvidos usando o modelo de extensibilidade ASP.NET. Saiba mais sobre como criar modos gerenciados no passo a passo [Desenvolver um módulo usando o .NET](develop__runtime-extensibility__developing-a-module-using-net.md) .

Navegue até a seção <system.webServer>/<handlers>. Esta seção, que pode ser configurada no nível de servidor, aplicativo ou URL, especifica como as solicitações são tratadas. Os módulos normalmente participam de cada solicitação, enquanto os manipuladores só recebem solicitações para uma URL específica.

Um bom exemplo de um módulo é o módulo de compactação. O módulo de compactação examina cada resposta e a compacta se necessário. O manipulador de página ASP.NET é um bom exemplo de um manipulador. Ele recebe apenas solicitações mapeadas para ele, por exemplo, solicitações que têm a extensão .aspx. A `<handlers>` lista define os mapeamentos entre uma solicitação com base na URL e no verbo e um módulo de manipulação que será usado para processar essa solicitação. Há também algumas informações extras que são usadas para configurar cada mapeamento, que não é o foco neste tópico.

```
<handlers>
    <!-- certain details omitted -->
    <add name="CGI-exe" path="*.exe" verb="*" modules="CgiModule" ... />
    <add name="ISAPI-dll" path="*.dll" verb="*" modules="IsapiModule" ... />
    <add name="ASPClassic" path="*.asp" verb="GET,HEAD,POST"  modules="IsapiModule" ... />
</handlers>
```

## Análise da pegada do servidor

1. Abra o Internet Explorer e faça uma solicitação ao servidor especificando a seguinte URL e pressionando Enter:

   ```
   http://localhost/iisstart.htm
   ```

   Isso inicia o pool de aplicativos do servidor e serve o documento iisstart.htm.
2. Inicie o Gerenciador de Tarefas e vá para a guia Processos. Como o processo de trabalho do IIS é executado em uma conta de usuário diferente, você deve verificar "Mostrar processos para todos os usuários". Observe o tamanho do processo de trabalho do servidor w3wp.exe.  
   [![Captura de tela que mostra o Gerenciador de Tarefas do Windows. A guia processos está selecionada.](build-a-custom-iis-server/_static/image2.jpg)](https://learn.microsoft.com/pt-br/iis/get-started/planning-for-security/build-a-custom-iis-server/_static/image1.jpg)
     
   *Figura 1: Gerenciador de Tarefas mostrando o processo de trabalho do IIS*
3. Agora, execute a seguinte linha de comando:

   ```
   TASKLIST /fi "imagename eq w3wp.exe" /m
   ```

   Vemos que mais de 90 DLLs são carregadas pelo processo de trabalho. A maioria delas está localizada no diretório ...\intersrv\ – muitas delas são DLLs de módulo que vimos na primeira tarefa ao examinar a <seção globalModules e algumas outras> que dão suporte à estrutura do .NET e ao próprio runtime do servidor.

## Despojando o servidor

Na tarefa anterior, examinamos a lista padrão de componentes carregados pelo servidor, que continha mais de 35 módulos que forneceram vários serviços que vão da autenticação ao serviço de arquivo estático. Cada um dos componentes carregados no servidor tem um impacto no volume do servidor, na área da superfície de ataque, no desempenho do runtime e, claro, no conjunto de recursos habilitado.

Antes de criarmos nosso próprio servidor personalizado com apenas a funcionalidade necessária na próxima tarefa, criamos um servidor Web rápido, pequeno e seguro removendo todos os módulos e executando o servidor vazio.

Se alterarmos o arquivo de applicationHost.config durante a tarefa anterior, poderemos restaurá-lo para o estado original executando `%windir%\system32\inetsrv\appcmd restore backup initial` da linha de comando.

Agora, para desmontar o servidor.

1. Use um editor de texto para abrir `%windir%\system32\inetsrv\config\applicationHost.config`.
2. Navegue até a `<system.webServer>/<globalModules>` seção.
3. Remova todas as entradas da coleção, de modo que apenas uma definição de seção vazia permaneça:

   ```
   <globalModules> 
       <!—Remove Everything --> 
   </globalModules>
   ```
4. Cole os itens em uma janela de bloco de notas temporário para uso posterior. Repita o mesmo com <system.webServer>/<modules> seção. Remova todas as entradas nesta seção e cole-as em um bloco de notas para uso posterior. Isso garante que não estamos habilitando nenhum módulo que não carregamos mais. Cole esses itens recortados em uma janela de rascunho do bloco de notas para uso posterior.
5. Repita o mesmo com a `<system.webServer>/<handlers>` seção. Remova todas as entradas nesta seção para garantir que não estamos especificando nenhum mapeamento de manipulador com módulos que desabilitamos. Cole os itens em um bloco de rascunho para uso posterior. Salve o arquivo applicationHost.config para aplicar as alterações.

### Examinar a pegada reduzida do servidor

Neste ponto, estamos prontos para carregar nosso servidor simplificado – repetiremos as etapas anteriores para examinar a nova pegada do servidor.

1. Abra o Internet Explorer e faça uma solicitação ao servidor especificando a seguinte URL e pressionando Enter:

   ```
   http://localhost/iisstart.htm
   ```

   Isso deve iniciar o pool de aplicativos do servidor e retornar um erro ao navegador porque nenhum manipulador está registrado para atender ao recurso solicitado.
2. Execute o Gerenciador de Tarefas e vá para a guia Processos. Observe o tamanho do processo de trabalho do servidor w3wp.exe.
3. Execute a seguinte linha de comando:

   ```
   TASKLIST /fi "imagename eq w3wp.exe" /m
   ```

   Observe que o volume do servidor foi reduzido para cerca de 8 Mb. No período de tempo do servidor, o volume do servidor vazio será reduzido ainda mais.

   Apenas 50 DLLs são carregadas, em comparação com 90 ou mais, o que indica que o servidor não carregou nenhuma DLL dos módulos, que foram diretamente e indiretamente responsáveis pela diferença na contagem de DLLs. Não só os serviços estão desabilitados no servidor, mas também nenhum código para esses recursos é carregado no processo. Após a otimização, a contagem de DLL do servidor vazio será significativamente menor.

Na próxima tarefa, criaremos o servidor personalizado apenas com os recursos desejados.

## Criando um servidor personalizado

Na tarefa anterior, retiramos o servidor para a configuração mínima, com apenas o mecanismo de servidor principal em execução e nenhum módulo adicional carregado. Agora, criamos o servidor personalizado a ser usado como servidor de arquivos Web em uma rede corporativa. Para fazer isso, habilitamos o servidor a fornecer apenas os seguintes serviços:

- Servir arquivos estáticos
- Fornecer listagens de diretório
- Proteger o conteúdo com regras básicas de autenticação e autorização baseadas em URL

### Habilitar o servidor para servir arquivos estáticos

Para executar essa tarefa, supõe-se que seguimos a tarefa anterior e removemos o servidor removendo todos os módulos em execução. Nesse estado, o servidor sempre retorna respostas de erro 401 vazias para todas as solicitações, pois nenhum módulo é carregado para fornecer qualquer tipo de processamento de solicitação.

1. Use um editor de texto para abrir `%windir%\system32\inetsrv\config\applicationHost.config`.
2. Navegue até a seção <system.webServer>/<globalModules>. Adicione as 2 linhas em negrito abaixo dentro da coleção – copie-as do bloco de notas usado anteriormente para salvar os itens de coleção padrão. Isso carrega o módulo de manipulador de arquivos estático, responsável por atender solicitações de arquivos estáticos e o módulo de autenticação anônima, que produz um token de autenticação padrão para a solicitação:

   ```
   <globalModules>
       <add name="StaticFileModule" image="%windir%\System32\inetsrv\static.dll" />
       <add name="AnonymousAuthenticationModule" image="%windir%\System32\inetsrv\authanon.dll" />
   </globalModules>
   ```
3. Navegue até a <seção system.webServer>/<modules> . Habilite o manipulador de arquivos estático e os modos de autenticação anônimos adicionando a linha em negrito abaixo:

   ```
   <modules>

       <add name="AnonymousAuthenticationModule" />

       <add name="StaticFileModule" />

   </modules>
   ```
4. Navegue até a seção <system.webServer>/<handlers>. Mapeie o manipulador de arquivos estático para todas as solicitações de arquivo adicionando a linha em negrito abaixo:

   ```
   <handlers>
       <add name="StaticFile" path="*" verb="GET,HEAD"  modules="StaticFileModule" resourceType="Either" requireAccess="Read"/>
   </handlers>
   ```
5. Salve o arquivo applicationHost.config.
6. Abra o Internet Explorer e faça uma solicitação para a seguinte URL:

   ```
   http://localhost/iisstart.htm
   ```

   Isso fornece o documento solicitado. Habilitamos com êxito a funcionalidade de serviço de arquivo estático no servidor.
7. Em seguida, solicite a listagem de diretórios fazendo uma solicitação para a seguinte URL:

   ```
   http://localhost
   ```

   Obtemos uma resposta vazia porque nenhum manipulador está atualmente carregado, habilitado e mapeado para processar listagens de diretórios — uma resposta vazia é enviada (200 OK). Na próxima tarefa, adicionaremos o manipulador.

### Habilitar o servidor para fornecer listagens de diretório

Para executar essa tarefa, supõe-se que concluímos as tarefas anteriores, redefinimos o servidor para suas configurações básicas e adicionamos a funcionalidade de serviço de arquivo.

1. Use um editor de texto para abrir `%windir%\system32\inetsrv\config\applicationHost.config`.
2. Como antes, adicione a configuração abaixo para habilitar o módulo de navegação de diretório e mapeie-o para atender a solicitações de diretório (a configuração cumulativa será exatamente como especificada abaixo após esta etapa, baseando-se na etapa anterior):

   ```
   <globalModules>
       <add name="AnonymousAuthenticationModule" image="%windir%\system32\inetsrv\authanon.dll" />
       <add name="StaticFileModule" image="%windir%\system32\inetsrv\static.dll" />
       <add name="DirectoryListingModule" image="%windir%\System32\inetsrv\dirlist.dll" />
   </globalModules>

   <modules>
       <add name="AnonymousAuthenticationModule" />
       <add name="StaticFileModule" />
       <add name="DirectoryListingModule" />
   </modules>

   <handlers>
       <add name="StaticFile" path="*" verb="GET,HEAD" modules="StaticFileModule,DirectoryListingModule"  resourceType="Either" requireAccess="Read" />
   </handlers>
   ```

   Neste ponto, habilitamos o recurso de listagem de diretórios no servidor. No entanto, o recurso expõe uma configuração adicional por motivos de segurança que controla se a listagem de diretórios é permitida ou não. Essa configuração é especificada na seção do <system.webServer>/<directoryBrowse>.
3. Alterar a entrada para <directoryBrowse enabled="true" />
4. Salve o arquivo applicationHost.config.
5. Abra o Internet Explorer e repita a solicitação para o diretório solicitando a seguinte URL:

```
http://localhost
```

Isso é usado para listar o diretório solicitado. Habilitamos com êxito a funcionalidade de listagem de diretórios no servidor.

Em seguida, adicionamos os serviços de autenticação e autorização para proteger o conteúdo no servidor contra acesso não autorizado.

### Protegendo recursos com autorização de URL

Para executar essa tarefa, supõe-se que seguidas as tarefas anteriores, reduzimos o servidor ao essencial e adicionamos a capacidade de servir arquivos e listar diretórios.

1. Use um editor de texto para abrir `%windir%\system32\inetsrv\config\applicationHost.config`.
2. Desta vez, adicionamos dois módulos:

   - O módulo de autenticação básica, que dá suporte ao esquema de autenticação básico por http1.1 nas credenciais do Windows do servidor
   - O módulo de autorização de URL, que dá suporte ao controle de acesso baseado em regras de usuário e função.
3. Para adicionar esses módulos, adicione as entradas de carregamento do módulo à <seção system.webServer>/<globalModules> e habilite os módulos na <seção system.webServer>/<modules> , como fizemos anteriormente para o manipulador de arquivos estático e o navegador de diretório.

   Observação

   Desta vez, não precisamos adicionar nada à <seção system.webServer>/<handlers> , pois esses módulos não fornecem tratamento de solicitação– eles fornecem apenas serviços de solicitação a todas as solicitações. Sua configuração final depois de adicionar os itens abaixo em negrito terá esta aparência:

   ```
   <globalModules>
       <add name="AnonymousAuthenticationModule" image="%windir%\system32\inetsrv\authanon.dll" /> 
       <add name="StaticFileModule" image="%windir%\system32\inetsrv\static.dll" /> 
       <add name="DirectoryListingModule" image="%windir%\system32\inetsrv\dirlist.dll" /> 
       <add name="UrlAuthorizationModule" image="%windir%\System32\inetsrv\urlauthz.dll" />      
       <add name="BasicAuthenticationModule" image="%windir%\System32\inetsrv\authbas.dll" /> 
   </globalModules> 

   <modules> 
       <add name="AnonymousAuthenticationModule" /> 
       <add name="StaticFileModule" /> 
       <add name="DirectoryListingModule" /> 
       <add name="BasicAuthenticationModule" /> 
       <add name="UrlAuthorizationModule" /> 
   </modules>
   ```

   Para usar os recursos adicionados, precisamos configurá-los.
4. Habilite o serviço de Autenticação Básica. Navegue até o <elemento basicAuthentication> e defina o atributo habilitado como true:

   ```
   <basicAuthentication enabled="true" />
   ```
5. Desabilite a autenticação anônima. Navegue até o <elemento anonymousAuthentication> e defina o atributo habilitado como false:

   ```
   <anonymousAuthentication enabled="false" userName="IUSR" />
   ```

   Isso desabilita a autenticação anônima e requer que o módulo de autenticação básica autentique o usuário com êxito antes que o acesso seja concedido.
6. Salve o arquivo applicationHost.config.
7. Abra o Internet Explorer e repita a solicitação para o diretório solicitando a seguinte URL:

   ```
   http://localhost
   ```

   Isso solicita uma listagem de diretório. Como o navegador não nos autenticou, o módulo de autorização de URL rejeita a solicitação. O módulo de autenticação básica intercepta a rejeição e dispara um desafio de autenticação básico de volta para o navegador, fazendo com que o navegador exiba a caixa de diálogo de logon de autenticação básica.
8. Faça logon com credenciais inválidas. A solicitação é rejeitada, e uma nova requisição para inserção de credenciais é feita.
9. Faça logon com a conta administrador que você usou para fazer logon no computador. A listagem de diretórios é exibida, indicando que você adicionou com êxito recursos de autenticação e autorização ao servidor.

## Resumo

Este artigo abordou a natureza componente do servidor, examinou os recursos do IIS fornecidos e explicou como criar um servidor Web personalizado com apenas os serviços que um usuário pode exigir.

Antes de usar o servidor novamente, desfaça as alterações na configuração do servidor executadas como parte deste passo a passo. Se você criou um backup anteriormente, restaure-o executando `%windir%\system32\inetsrv\appcmd restore backup initial` da linha de comando.

## Links Relacionados

Confira os seguintes links para obter mais informações:

- Para saber mais sobre a arquitetura do IIS Core, consulte a [seção IIS 7.0 e Above Core Web Server](manage__working-with-server-core__iis-70-on-server-core.md) no IIS.NET.
- Para saber mais sobre módulos do IIS, consulte [a Visão geral dos módulos IIS 7.0 e Acima.](get-started__introduction-to-iis__iis-modules-overview.md)
- Para saber mais sobre como criar módulos para estender ou substituir a funcionalidade do IIS, consulte [Desenvolver um módulo usando .NET](develop__runtime-extensibility__developing-a-module-using-net.md) e [desenvolver um módulo nativo (C/C++](develop__runtime-extensibility__develop-a-native-cc-module-for-iis.md)).

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
