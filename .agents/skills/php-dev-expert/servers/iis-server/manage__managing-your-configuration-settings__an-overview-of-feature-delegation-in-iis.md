# Uma visão geral da delegação de recursos no IIS 7.0 | Microsoft Learn

> **Fonte / Source:** https://learn.microsoft.com/pt-br/iis/manage/managing-your-configuration-settings/an-overview-of-feature-delegation-in-iis

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

# Uma visão geral da delegação de recursos no IIS 7.0

Comentários

por [Saad Ladki](https://twitter.com/saadladki)

A delegação de características do IIS interessará você caso se enquadre em uma das seguintes categorias:

- Um administrador de servidor e você não é a pessoa principal que fornece conteúdo em seu servidor.
- Um desenvolvedor e você deseja que o administrador do servidor lhe dê mais controle sobre a configuração do IIS para seu aplicativo.

De interesse para administradores de servidores é o fato de que, por padrão, no IIS 7.0 e superior, desenvolvedores/proprietários de site podem colocar a configuração para documentos padrão, navegação de diretório, cabeçalhos de resposta HTTP, redirecionamentos HTTP, manipuladores e módulos em seus arquivos web.config. Isso permite que um desenvolvedor configure "start.aspx" como seu documento padrão e altere a estrutura da URL do site para que todas as solicitações para `www.contoso.com/techcareers/` sejam redirecionadas para `www.contoso.com/careers/technical/` sem a assistência do administrador do servidor.

Você pode fazer isso desbloqueando mais configurações. Por exemplo, desbloqueie a configuração de erros personalizados para que os desenvolvedores possam especificar que todos os 404s sejam redirecionados para `www.contoso.com/NotFound.aspx`, ou desbloqueie a configuração de rastreamento de solicitações com falha para que os desenvolvedores possam rastrear solicitações 500 para páginas \*.axd que retornam um status 500.

Para desenvolvedores e proprietários de site, a configuração do IIS elimina a necessidade de modificar a metabase. As alterações de configuração podem ser feitas diretamente no web.config junto com a configuração do ASP.NET. Isso resolve problemas como a necessidade de gravar uma MSI para seus aplicativos para fazer alterações de configuração personalizadas do IIS; ter um conjunto de instruções manuais para configurar seus aplicativos; ou, tentando lembrar um ano depois os detalhes de configuração de um aplicativo em um servidor de produção.

Delegação de recursos do IIS significa gerenciar:

- Bloqueio de seção de configuração para controlar qual configuração pode ser definida em web.config (geralmente, uma seção de configuração do IIS é igual a um módulo do IIS).
- O conjunto de usuários de sites e aplicativos que têm permissão para usar o Gerenciador do IIS para exibir a configuração e definir a configuração de recursos com seções de configuração desbloqueadas.

## Bloqueio de seção de configuração [appcmd]

Observação

Os termos "bloqueio de configuração" ou "trava de configuração" neste artigo referem-se a overrideMode nas seções de configuração. Além disso, o bloqueio de configuração sozinho não pode proteger seu sistema de configuração – você deve definir os arquivos de configuração de ACL adequadamente. O bloqueio e a definição de ACLs de arquivos juntos formam um plano completo de segurança de configuração.

Os bloqueios de configuração podem ser gerenciados usando o Gerenciador do IIS ou o appcmd. Começamos com appcmd. A primeira etapa no prompt de comando ao trabalhar com **appcmd** é adicionar o diretório inetsrv ao caminho para que você possa usar o appcmd de qualquer lugar.

Observação

Execute estes comandos em uma janela de cmd com privilégios elevados se você não estiver executando como a conta de Administrador interna:

```
set path=%path%;%windir%\system32\inetsrv
```

O Appcmd não mostra o estado de bloqueio atual para seções de configuração (você deve usar o Gerenciador do IIS para isso) – ele só permite manipular o bloqueio. Veja como desbloquear a configuração de erros personalizados para todos os sites:

configuração de desbloqueio do appcmd –section:httpErrors

Os usuários novos no IIS podem perguntar como sabem que httpErrors é a seção de configuração para erros personalizados. Primeiro, use este artigo de referência que mapeia os módulos principais do servidor para sua configuração. Em segundo lugar, localize todas as configurações do IIS em `%windir%\system32\inetsrv\config\schema\IIS\_schema.xml`.

Abra o arquivo de esquema no bloco de notas, CTRL+F para Localizar e digite uma propriedade ou palavra de configuração conhecida que você associa ao recurso. Experimente "customerror" primeiro. Se isso não encontrar nada, tente "erros" – isso localiza a seção "system.webServer\httpErrors" na terceira tentativa.

Se você quiser desbloquear a configuração de erros personalizados para apenas um site em vez de para todos os sites, o comando appcmd abaixo especifica que "Site Padrão" é o que você está desbloqueando a configuração para:

```
appcmd unlock config "Default Web Site" –section:httpErrors
```

Mais um aspecto no básico: suponha que você queira ativar a configuração de erros personalizados para todos os sites, exceto um site chamado "UntrustedSite". Quando você fizer isso, todos os que publicarem conteúdo em todos os seus sites poderão colocar a configuração de erro personalizada em seus arquivos de web.config, exceto para a pessoa que publica no UntrustedSite. Isso é feito por:

```
appcmd unlock config –section:httpErrors

appcmd lock config "UntrustedSite" –section:httpErrors
```

Isso conclui o bloqueio e o desbloqueio das seções de configuração usando o appcmd na Beta3.

## Bloqueio de seção de configuração [Gerenciador do IIS]

Agora, para fazer a mesma coisa no Gerenciador do IIS.

1. Abra o Gerenciador do IIS (Iniciar, Executar, digite inetmgr.exe) e clique na conexão com o servidor local no modo de exibição de árvore no lado esquerdo. Role para baixo na lista de recursos, **localize a Delegação de Recursos** e clique duas vezes para abrir.

   ![Captura de tela da janela I S Manager mostrando uma lista de recursos no painel principal.](an-overview-of-feature-delegation-in-iis/_static/image1.jpg)
2. A página Delegação de Recursos mostra todos os recursos e seu estado de delegação padrão para todos os sites ("recursos" significa todos os itens que aparecem na lista de recursos da home page). Tente agrupar por delegação.

   ![Captura de tela da janela do I I S Manager mostrando a Delegação de Funcionalidades no painel principal. O agrupamento por Delegação está realçado.](an-overview-of-feature-delegation-in-iis/_static/image3.jpg)
3. Observe que a maioria dos recursos do IIS, como autenticação do Windows e restrições de domínio e endereço IPv4, são somente leitura, enquanto configurações do ASP.NET, como autenticação de formulários, chave de máquina e estado de sessão, são leitura e gravação.

   Observação

   Você verá os recursos de Autenticação, Compactação ou IP e Restrições de Domínio do Windows se eles estiverem instalados.
4. Clique em um recurso para ver as opções de delegação no painel de tarefas à direita.

   ![Captura de tela da janela I S Manager com Delegação de Recursos no painel principal. As páginas de erro na seção Somente Leitura estão realçadas.](an-overview-of-feature-delegation-in-iis/_static/image5.jpg)

   As páginas de erro podem ser definidas como Leitura/Gravação.

   - Leitura/Gravação significa que a seção de configuração correspondente do recurso está desbloqueada e pode ser configurada em web.config.
   - Somente Leitura e Remoção de Delegação significam que a seção de configuração correspondente da funcionalidade está bloqueada e não pode ser configurada em web.config sem gerar erros durante a execução.

   Faça a mesma coisa aqui como com o appcmd acima. Ao alterar esse estado de delegação, você altera a delegação padrão para todos os sites.
5. Se você quiser configurar a delegação para apenas um site, clique no link Delegação de Site Personalizado na parte superior do painel de tarefas.

   ![Captura de tela da janela I S Manager mostrando a Delegação de Recursos no painel principal. A Delegação de Site Personalizada é realçada no painel Ações.](an-overview-of-feature-delegation-in-iis/_static/image7.jpg)

   A página Personalizar Delegação de Site é exibida e permite que você personalize a delegação para um site específico. Esta página é semelhante à página Delegação de Recursos, exceto que há uma lista suspensa na parte superior para selecionar o site para o qual você deseja configurar a delegação. Esta página também permite copiar a delegação entre sites para economizar tempo caso você tenha um site com a mesma delegação que deseja para um novo site.

   ![Captura de tela da janela I I S Manager mostrando a Delegação de Site Personalizado no painel principal. Uma seta aponta para a lista suspensa Site.](an-overview-of-feature-delegation-in-iis/_static/image9.jpg)

## Gerenciador do IIS – Criando administradores de sites e aplicativos

Até agora, o artigo discutiu como controlar *o que* os desenvolvedores (ou provedores de conteúdo ou proprietários de site) podem configurar em web.config arquivos, mas não abordou *como* eles definirão a configuração depois que ela for desbloqueada. O Visual Studio é muito bom para ASP.NET e outra configuração de estrutura – o IntelliSense facilita especialmente. Infelizmente, não há seções de configuração do IntelliSense para IIS (espero que isso seja resolvido em um futuro próximo). Uma opção é usar o Bloco de Notas, mas ele é tão bom quanto a sua memória e suas habilidades de digitação.

Com o IIS, um administrador de servidor pode configurar o Gerenciador do IIS para permitir que não administradores se conectem a um site ou aplicativo e definir a configuração em seus arquivos web.config. Há duas etapas para fazer isso funcionar:

1. Especifique os usuários que podem se conectar a um site ou aplicativo.
2. Inicie o WMSVC (Serviço de Gerenciamento Web) e habilite conexões remotas se os usuários não forem locais

Comece com a criação de administradores de sites e aplicativos.

1. Navegue até o Site Padrão, localize o recurso Permissões do Gerenciador do IIS e clique duas vezes para abrir.

   ![Captura de tela da tela I S Manager mostrando a Página Inicial do Site Padrão no painel principal.](an-overview-of-feature-delegation-in-iis/_static/image11.jpg)
2. Clique em **Permitir Usuário** no painel de tarefas para adicionar um novo usuário ao Site Padrão.

   ![Captura de tela da tela I S Manager mostrando as Permissões do Gerenciador de IS no painel principal. A Permissão do Gerenciador de IS é realçada na seção Gerenciamento.](an-overview-of-feature-delegation-in-iis/_static/image13.jpg)
3. Você tem duas opções aqui: usuário ou grupo do Windows ou usuário do Gerenciador do IIS.

   Um usuário do Gerenciador do IIS é um nome de usuário e senha armazenados em `%windir%\system32\inetsrv\config\administration.config`. A maioria das situações exige usuários do Windows. Por exemplo, um desenvolvedor que publica conteúdo diretamente em um servidor Web por meio de um compartilhamento de arquivos ou FTP já tem permissão de leitura/gravação para a pasta de conteúdo. Como o Gerenciador do IIS representará esse usuário ao fazer alterações de configuração, a conta de usuário do Windows precisa ter acesso de leitura/gravação à pasta de conteúdo em que os arquivos web.config serão gravados.

   Por outro lado, talvez o provedor de conteúdo publique em um servidor de teste e o conteúdo seja replicado do servidor de teste para a fazenda de servidores. Nesse caso, o provedor de conteúdo não tem acesso aos servidores de produção; Ou seja, não há nenhuma conta do Windows a ser adicionada. Nesse caso, a criação de um usuário do Gerenciador do IIS adicionando um nome de usuário/senha como administrador de site permite que o usuário final exiba a configuração de seu aplicativo sem torná-lo um usuário do Windows no servidor.

   Adicione um usuário do Windows (não um administrador) como administrador de site para o Site Padrão. Agora você tem um administrador de site, mas eles ainda não podem se conectar ao servidor. Isso é discutido abaixo.

## Gerenciador do IIS – habilitando administradores de sites e aplicativos para se conectarem

A primeira etapa é instalar o WMSVC (Serviço de Gerenciamento da Web).

1. Abra o Gerenciador do Servidor (clique com o botão direito do mouse em Computador e clique em Gerenciar), selecione a função servidor Web e instale o componente serviço de gerenciamento no nó Ferramentas de Gerenciamento.

   ![Captura de tela da janela de Adição de Serviços de Função. O Serviço de Gerenciamento dentro de Ferramentas de Gerenciamento está destacado.](an-overview-of-feature-delegation-in-iis/_static/image15.jpg)

   O WMSVC (Serviço de Gerenciamento Web) é um servidor Web autônomo e despojado. Quando instalado e iniciado, o WMSVC escuta na porta 8172. O cliente do Gerenciador do IIS, a interface do usuário com botões e caixas de texto, comunica-se por HTTP por meio de chamadas de serviço Web para o WMSVC quando o usuário deseja executar uma ação. O WMSVC hospeda a lógica que implementa a ação, como definir uma propriedade de configuração ou parar um site.
2. Abra a página Serviço de Gerenciamento navegando até a home page do servidor. Localize o Serviço de Gerenciamento e clique duas vezes para abrir.

   ![Captura de tela da janela I S Manager. A caixa de diálogo Permitir Usuário está aberta no painel principal. ](an-overview-of-feature-delegation-in-iis/_static/image17.jpg)

   - Habilite o gerenciamento remoto para que o WMSVC atenda a todas as solicitações em vez de apenas solicitações originadas no servidor local. O WMSVC não pode ser configurado durante a execução, portanto, examine a associação HTTPS e as restrições de IP e domínio e decida se deseja ou não fazer outras alterações.
   - Inicie o WMSVC clicando em Iniciar no painel de tarefas. O WMSVC monitora todos os endereços IP não atribuídos por padrão. Se seus servidores Web tiverem mais de uma NIC (placa de rede) e você quiser que o WMSVC ouça em uma NIC específica, você precisará configurá-la explicitamente.

     ![Captura de tela da janela I S Manager mostrando a página Serviço de Gerenciamento no painel principal.](an-overview-of-feature-delegation-in-iis/_static/image20.jpg)

     Neste ponto, o WMSVC está escutando na porta 8172, aguardando solicitações de gerenciamento.

     ```
     D:\>netstat -a | findstr 8172

       TCP    172.30.188.74:8172              alexise-fs:0           LISTENING
     ```

## Testes

Agora que tudo está configurado, teste-o para garantir que ele funcione. Faça uma checagem de integridade no servidor local primeiro porque as ações dos administradores de sites e de aplicações locais são roteadas por meio do WMSVC.

Se isso funcionar, tente se conectar a partir de um computador remoto.

1. Clique na seta suspensa ao lado do ícone Conectar na parte superior do modo de exibição de árvore e selecione Conectar a um Site.

   ![Captura de tela da janela I S Manager com o menu conectar aberto no painel Conexões.](an-overview-of-feature-delegation-in-iis/_static/image22.jpg)
2. Na primeira página do assistente de conexão, selecione "Inserir manualmente os detalhes da conexão na próxima página" (a outra opção foi removida nos builds pós-Beta 2, portanto, ignore-a).
3. Na segunda página, preencha "localhost" para o nome do servidor e "Site Padrão" para o nome do site.
4. Na página de credenciais, insira as credenciais para o usuário do Windows que você adicionou anteriormente como administrador do site. Quando você se conecta com sucesso, a página final do assistente oferece a opção de nomear a conexão.

   A nova conexão deve ser semelhante à da captura de tela abaixo. O canto inferior direito da ferramenta mostra que você está conectado ao localhost na porta 8172 como Alexis e o ícone de bloqueio indica que a conexão é por SSL. Seu nome de usuário está entre parênteses no final do nome de conexão no modo de exibição de árvore.

   Observe também que várias tarefas do site estão ausentes no painel de tarefas– isso ocorre porque os administradores de sites e aplicativos não têm permissão para executar nenhuma ação de administrador, por exemplo, gerenciando associações de site armazenadas no arquivo applicationHost.config.

   ![Captura de tela da tela I S Manager mostrando a home page do site padrão atualizada no painel principal.](an-overview-of-feature-delegation-in-iis/_static/image5.png)

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
