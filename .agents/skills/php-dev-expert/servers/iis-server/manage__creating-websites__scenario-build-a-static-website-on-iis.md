# Criar um site estático no IIS | Microsoft Learn

> **Fonte / Source:** https://learn.microsoft.com/pt-br/iis/manage/creating-websites/scenario-build-a-static-website-on-iis

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

# Criar um site estático no IIS

Comentários

por Keith Newman e [Robert McMurray](https://github.com/rmcmurray)

Este documento orienta você pelo processo de instalar um servidor Web do IIS e configurá-lo para fornecer conteúdo estático. O conteúdo estático é uma HTML (página da Web) que é entregue ao usuário exatamente como armazenado. Por outro lado, o conteúdo dinâmico é gerado por um aplicativo Web, como um aplicativo ASP.NET, ASP clássico ou PHP. O conteúdo estático exibe as mesmas informações para todos os usuários; o conteúdo dinâmico pode exibir informações específicas do usuário, como o nome de usuário.

Um servidor Web de conteúdo estático é a configuração mais básica do IIS para dar suporte a sites HTML. Você pode usar um servidor Web de conteúdo estático para hospedar sites internos ou externos (públicos). Quando você instala o IIS 8, a instalação padrão fornece todos os módulos do IIS necessários para dar suporte a um servidor Web de conteúdo estático. A instalação padrão inclui a capacidade de fornecer arquivos HTML estáticos, documentos e imagens. O IIS 8 dá suporte a documentos padrão, navegação de diretório, registro em log e autenticação anônima para o servidor de conteúdo estático.

## Pré-requisitos

Para obter o máximo deste tutorial, você deve ter acesso a um computador que esteja executando um dos seguintes sistemas operacionais:

- Windows Server ® 2012
- Windows® 8

## Etapa 1: Instalar o servidor Web do IIS

Você pode executar esse procedimento usando a interface do usuário (interface do usuário) do Windows ou de uma linha de comando.

### Para instalar o IIS no Windows Server 2012 usando a interface do usuário

1. Na página **Iniciar** , clique no bloco do **Gerenciador do Servidor** e clique em **OK**.
2. No **Gerenciador do Servidor**, selecione **Painel** e clique em **Adicionar funções e recursos**.
3. No **Assistente para Adicionar Funções e Recursos**, na página **Antes de Começar** , clique em **Avançar**.
4. Na página **Selecionar Tipo de Instalação** , selecione **Instalação baseada em função ou recurso** e clique em **Avançar**
5. Na página **Selecionar Servidor de Destino** , **selecione Selecionar um servidor no pool de servidores**, selecione o nome do computador e clique em **Avançar**.
6. Na página **Selecionar Funções do Servidor** , selecione **Servidor Web (IIS)** e clique em **Avançar**.
7. Na página **Selecionar Recursos** , observe os recursos pré-selecionados e clique em **Avançar**.
8. Na página **Função de Servidor Web (IIS)**, clique em **Avançar**.
9. Na página **Selecionar Serviços de Função** , anote os serviços de função pré-selecionada e clique em **Avançar**.

   Observação

   Instale os serviços de função padrão do IIS 8 para um servidor Web de conteúdo estático.
10. Na página **Confirmar Seleções de Instalação** , confirme suas seleções e clique em **Instalar**.
11. Na página **Progresso da Instalação** , confirme se a instalação da função do Servidor Web (IIS) e os serviços de função necessários foram concluídos com êxito e clique em **Fechar**.
12. Para verificar se o IIS foi instalado com êxito, insira o seguinte em um navegador da Web:

    `http://localhost`

    Você verá a página de boas-vindas padrão do IIS.

### Para instalar o IIS no Windows 8 usando a interface do usuário

1. Na página **Iniciar** , digite **Painel de Controle** e clique no ícone **painel de controle** nos resultados da pesquisa.
2. No **Painel de Controle**, clique em Programas e, em seguida, clique **em Ativar ou Desativar recursos do Windows**.
3. Na caixa de diálogo **Recursos do Windows** , clique em **Serviços de Informações da Internet** e clique em **OK**.

   Essa ação instala os recursos padrão do IIS 8. Instale apenas os recursos padrão para um servidor Web de conteúdo estático.
4. Para verificar se o IIS foi instalado com êxito, insira o seguinte em um navegador da Web:

   `http://localhost`

   Você verá a página de boas-vindas padrão do IIS.

### Para instalar o IIS usando a linha de comando

Insira o seguinte comando em um prompt de comando com privilégios elevados ou em um script:

```
Start /w pkgmgr /iu:IIS-WebServerRole;IIS-WebServer;IIS-CommonHttpFeatures;IIS-StaticContent;IIS-DefaultDocument;IIS-DirectoryBrowsing;IIS-HttpErrors;IIS-HealthAndDiagnostics;IIS-HttpLogging;IIS-LoggingLibraries;IIS-RequestMonitor;IIS-Security;IIS-RequestFiltering;IIS-HttpCompressionStatic;IIS-WebServerManagementTools;IIS-ManagementConsole;WAS-WindowsActivationService;WAS-ProcessModel;WAS-NetFxEnvironment;WAS-ConfigurationAPI
```

## Etapa 2: Adicionar um site

Esta etapa informa como adicionar um site ao IIS usando a interface do usuário do Gerenciador do IIS ou executando comandos Appcmd.exe em uma janela de linha de comando.

### Para adicionar um site usando a interface do usuário

1. Abra o Gerenciador do IIS.

   - Para o Windows Server 2012, na página **Iniciar** , clique no bloco do **Gerenciador do Servidor** e clique em **OK**. No **Gerenciador de Servidores**, clique no menu **Ferramentas** e clique no **Gerenciador dos Serviços de Informações da Internet (IIS**).
   - Para o Windows 8, na página **Iniciar** , **digite Painel de Controle** e clique no ícone **painel de controle** nos resultados da pesquisa. Na tela **painel de controle** , clique em **Sistema e Segurança**, clique em **Ferramentas Administrativas** e, em seguida, **clique no Gerenciador de Serviços de Informações da Internet (IIS**).
2. No painel **Conexões** , clique com o botão direito do mouse no nó **Sites** na árvore e clique em **Adicionar Site**.
3. Na caixa de diálogo **Adicionar Site** , insira um nome amigável para seu site na caixa **de nome do Site** .
4. Se você quiser selecionar um pool de aplicativos diferente do listado na caixa **Pool de Aplicativos** , clique em **Selecionar**. Na caixa de diálogo **Selecionar Pool de Aplicativos** , selecione um pool de **aplicativos na lista** pool de aplicativos e clique em **OK**.
5. Na caixa **Caminho físico** , insira o caminho físico da pasta do site ou clique no botão procurar (**...**) para navegar pelo sistema de arquivos para localizar a pasta.
6. Se o caminho físico inserido na etapa anterior for para um compartilhamento remoto, clique em **Conectar** para especificar credenciais que tenham permissão para acessar o caminho. Se você não usar credenciais específicas, selecione a opção **Usuário do aplicativo (autenticação por passagem)** na caixa de diálogo **Conectar como**.
7. Selecione o protocolo do site na lista **De tipos** .
8. . Se você precisar especificar um endereço IP estático para o site (por padrão, isso é definido como **Todos não atribuídos), insira** o endereço IP na caixa **de endereço IP** .
9. Insira um número de porta na caixa de texto **Porta**.
10. Opcionalmente, insira um nome de cabeçalho de host para o site na caixa **Cabeçalho do Host** .
11. Se você não precisar fazer nenhuma alteração no site e quiser que o site esteja disponível imediatamente, marque a caixa de seleção **Iniciar site imediatamente** .
12. Clique em **OK.**

### Para adicionar um site usando a linha de comando

Use a seguinte sintaxe em um prompt de comando com privilégios elevados ou em um script:

`appcmd add site /name:`
*String*`/id:`*Uint*`/physicalPath:`*String*`/bindings:`*String*

Observação

Para que essa sintaxe funcione, você deve estar no seguinte diretório ou ter o diretório no caminho: `%windir%\system32\inetsrv`.

A variável `name` é o nome e a variável `id` é um inteiro positivo que você deseja atribuir ao site. As variáveis `name` e `id` são as únicas variáveis necessárias para adicionar um site usando appcmd. No entanto, se você adicionar um site sem especificar os valores para os atributos `bindings` e `physicalPath`, o site não poderá ser iniciado.

A variável `physicalPath` é o caminho absoluto do conteúdo do site no sistema de arquivos.

A variável `bindings` contém informações usadas para acessar o site. Deve estar no formato *`protocol/IP_Address:port:hostheader`*. Por exemplo, para um site, a associação `http/*:85:` configura o site para escutar solicitações HTTP na porta **85** para todos os endereços IP e nomes de domínio (também conhecidos como cabeçalhos de host ou nomes de host). Por outro lado, uma associação de `http/*:85:marketing.contoso.com` configura um site para escutar solicitações HTTP na porta **85** para todos os endereços IP e para o nome de domínio **marketing.contoso.com**.

Para adicionar um site chamado **contoso** com uma ID de 2 que tenha conteúdo `c:\contoso`e que ouça solicitações HTTP na porta 85 para todos os endereços IP e um nome de domínio de **marketing.contoso.com**, insira o seguinte no prompt de comando:

`appcmd add site /name:contoso /id:2 /physicalPath:c:\contoso /bindings:http/*:85:marketing.contoso.com`

## Etapa 3: Configurar a Autenticação Anônima

A autenticação anônima fornece aos usuários acesso às áreas públicas do seu site sem solicitar um nome de usuário ou senha. Você pode configurar a autenticação anônima usando a conta de usuário anônima padrão (IUSR) ou configurar uma conta de usuário local para usuários anônimos.

### Para configurar a autenticação anônima usando a interface do usuário

1. No **Modo de Exibição de Recursos** do Gerenciador do IIS, clique duas vezes em **Autenticação**.
2. Na página **Autenticação** , selecione **Autenticação Anônima**.
3. No painel **Ações** , clique em **Editar** para definir a entidade de segurança (credenciais do usuário) na qual os usuários anônimos se conectarão ao site.
4. Na caixa de diálogo **Editar Credenciais de Autenticação Anônima** , selecione uma das seguintes opções:

   - Se você quiser configurar uma conta de usuário específica que o IIS usa para acessar seu site ou aplicativo, selecione **Usuário específico**. Em seguida, clique em **Definir** para abrir a caixa de diálogo **Definir Credenciais** e insira um nome de usuário e uma senha para a identidade. Em seguida, clique em **OK**.
   - Se você quiser que os processos do IIS sejam executados usando a conta especificada atualmente na página de propriedades do pool de aplicativos, selecione **a identidade do pool de aplicativos**. Por padrão, essa identidade é a conta de IUSR.

     Importante

     Se você usar a conta IUSR, concederá aos usuários anônimos todo o acesso interno à rede associado a essa conta.
5. Clique **em OK** para fechar a caixa de diálogo **Editar Credenciais de Autenticação Anônima** .

### Para configurar a autenticação anônima usando a linha de comando

Use a sintaxe a seguir para alterar a conta padrão para acesso anônimo:

`appcmd set config /section:anonymousAuthentication /userName:`
*String*`/password:`*String*

A variável `username` é a conta que o IIS usa para autenticação anônima e a variável `password` é a senha, que é criptografada no arquivo de configuração por padrão. Por exemplo, para usar uma conta chamada **Moe** e uma senha de **pssword1** para acesso anônimo, insira o seguinte no prompt de comando:

`appcmd set config /section:anonymousAuthentication /userName:Moe /password:pssword1`

## Etapa 4: Configurar os documentos padrão

Quando uma solicitação de cliente para seu site não inclui um nome de documento, o IIS procura um arquivo cujo nome é definido como um documento padrão. Normalmente, o nome do documento padrão é Default.htm. Você pode definir uma lista de nomes de documento padrão em ordem de precedência.

### Para configurar o documento padrão usando a interface do usuário

1. No **Modo de Exibição de Recursos** do Gerenciador do IIS, clique duas vezes em **Documento Padrão**.
2. No painel **Ações** , clique em **Adicionar**.
3. Na caixa **Nome** , insira o nome do arquivo que você deseja adicionar à lista de documentos padrão e clique em **OK**. Esse nome de arquivo é adicionado à parte superior da lista de documentos padrão.
4. Opcionalmente, selecione um documento padrão na lista e, no painel **Ações** , clique em **Mover para Cima** ou **Mover para Baixo** para alterar a precedência do arquivo.
5. Opcionalmente, selecione um documento padrão na lista e, no painel **Ações** , clique em **Remover** para remover os nomes de arquivo que você não deseja usar como documentos padrão.

### Para configurar o documento padrão usando a linha de comando

Para adicionar um nome de arquivo à lista de documentos padrão, use a seguinte sintaxe:

`appcmd set config /section:defaultDocument /+files.[value='`
*cadeia de caracteres*`']`

A cadeia *de caracteres* de variável é o nome do arquivo que você deseja adicionar à lista. Por exemplo, para adicionar um arquivo chamado **home.html** à lista de documentos padrão, insira o seguinte no prompt de comando:

`appcmd set config /section:defaultDocument /+files.[value='home.html']`

Para remover um arquivo chamado **home.html** da lista de documentos padrão, insira o seguinte no prompt de comando e pressione ENTER:

`appcmd set config /section:defaultDocument /-files.[value='home.html']`

## Etapa 5: Configurar a compactação de conteúdo estático

Opcionalmente, você pode configurar o servidor Web para compactar o conteúdo estático para usar a largura de banda com mais eficiência e melhorar o desempenho do seu site.

### Para configurar a compactação de conteúdo estático usando a interface do usuário

1. No **Modo de Exibição de Recursos** do Gerenciador do IIS, clique duas vezes em **Compactação**.
2. Selecione **Habilitar compactação de conteúdo estático** para configurar o IIS para compactar conteúdo estático.
3. Na caixa **Compactação Estática** , defina as seguintes configurações:

   1. Opcionalmente, selecione **Somente compactar arquivos maiores que (em bytes)** e insira o tamanho mínimo do arquivo que você deseja que o IIS compacte. O tamanho padrão é 256 bytes.
   2. Na caixa de texto do **diretório cache** , insira o caminho de um diretório local ou clique no botão procurar (**...**) para localizar um diretório. Depois que um arquivo estático é compactado, ele é armazenado em cache nesse diretório temporário até expirar ou até que o conteúdo seja alterado. O diretório temporário deve estar em uma unidade local em uma partição formatada em NTFS. O diretório não pode ser compactado e não deve ser compartilhado.
   3. Opcionalmente, selecione **Por limite de espaço em disco do pool de aplicativos (em MB)** e insira a quantidade máxima de espaço por pool de aplicativos, em megabytes, que você deseja que o IIS use ao compactar o conteúdo estático. Por exemplo, se houver 20 pools de aplicativos no servidor e o limite de **espaço** em disco estiver definido como 100, o espaço máximo em disco será de 2 GB. Se você clicar na opção **limite de espaço em disco por pool de aplicativos (em MB)** e inserir um número na caixa de texto sob ela, o IIS limpará automaticamente o diretório temporário de acordo com uma regra menos usada recentemente quando o limite definido for atingido. O padrão é 100 MB por pool de aplicativos.
4. Clique em **Aplicar** no painel **Ações** .

### Para configurar a compactação de conteúdo estático usando a linha de comando

Para habilitar a compactação HTTP de conteúdo estático, no prompt de comando, insira o seguinte comando e pressione Enter:

`appcmd set config /section:urlCompression /doStaticCompression:True`

Para definir as configurações de compactação de conteúdo estático, use a seguinte sintaxe:

`appcmd set config /section:urlCompression /minFileSizeforComp:`
*Int*`/directory:`*String*`/maxDiskSpace:`*Int*

A variável `minFileSizeforComp` define o número mínimo de bytes que um arquivo deve conter para que ele seja compactado. O valor padrão é *256*. A variável `directory` especifica o diretório em que as versões compactadas de arquivos estáticos são temporariamente armazenadas e armazenadas em cache. O padrão é a seguinte pasta:

`%SystemDrive%\inetpub\temp\IIS Temporary Compressed Files`

A variável `maxDiskSpace` define a quantidade máxima de espaço por pool de aplicativos, em megabytes, que você deseja que o IIS use ao compactar o conteúdo estático. O padrão é 100 MB por pool de aplicativos.

## Próximas etapas

Teste seu site minuciosamente para garantir que ele funcione conforme o esperado. Em seguida, considere configurar os seguintes recursos:

- Para ajudá-lo a solucionar problemas ou otimizar o desempenho do servidor Web, configure o registro em log do IIS. Para obter instruções, consulte [Configurar logging no IIS](manage__provisioning-and-managing-iis__configure-logging-in-iis.md).
- Para melhorar a segurança do servidor Web, configure a filtragem de solicitações. Para obter instruções, consulte [Configurar a Filtragem de Solicitações no IIS](manage__configuring-security__configure-request-filtering-in-iis.md).

## Consulte também

- [Hosting-Friendly IIS (Web Server Platform): Visão geral do cenário](get-started__introduction-to-iis__hosting-friendly-web-server-platform-iis-scenario-overview.md)
- [Criar um site de ASP.NET no IIS](application-frameworks__scenario-build-an-aspnet-website-on-iis__overview-build-an-asp-net-website-on-iis.md)
- [Criar um site asp clássico no IIS](application-frameworks__running-classic-asp-applications-on-iis-7-and-iis-8__scenario-build-a-classic-asp-website-on-iis.md)
- [Criar um site FTP no IIS](publish__using-the-ftp-service__scenario-build-an-ftp-site-on-iis.md)
- [Criar uma fazenda web com servidores IIS](web-hosting__scenario-build-a-web-farm-with-iis-servers__overview-build-a-web-farm-with-iis-servers.md)

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
