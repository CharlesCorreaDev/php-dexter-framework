# Instalando e configurando o WebDAV no IIS 7 e posterior | Microsoft Learn

> **Fonte / Source:** https://learn.microsoft.com/pt-br/iis/install/installing-publishing-technologies/installing-and-configuring-webdav-on-iis

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

# Instalando e configurando o WebDAV no IIS 7 e posterior

Comentários

por [Robert McMurray](https://github.com/rmcmurray)

## Introdução

Para o IIS (Serviços de Informações da Internet) 7.0 no Windows Server® 2008, a Microsoft lançou um módulo de extensão WebDAV separado e para download que foi completamente reescrito. Este novo módulo de extensão WebDAV incorporou muitos novos recursos que permitem aos autores da Web publicar conteúdo melhor do que antes e ofereceu aos administradores da Web mais opções de segurança e configuração. Com o lançamento do IIS 7.5, o suporte para um módulo WebDAV mais recente foi interno para o Microsoft IIS e a Microsoft lançou uma versão atualizada do módulo para download que havia sido lançado para o IIS 7.0. Esta mais recente versão do módulo WebDAV oferece suporte a bloqueios compartilhados e restrições exclusivas para evitar perdas de atualizações devido a substituições.

Este documento orienta você pela adição da publicação webDAV a um site existente usando a nova interface do usuário WebDAV e editando diretamente os arquivos de configuração do IIS.

Observação

Este passo a passo contém uma série de etapas em que você acessa seu site usando o endereço de loopback local e a conta de administrador local. Ao usar uma conta de administrador, essas etapas devem ser seguidas somente no próprio servidor pelo endereço de loopback ou por SSL a partir de um servidor remoto. Se você preferir usar uma conta de usuário separada em vez da conta de administrador, deverá criar as pastas apropriadas e definir as permissões corretas para essa conta de usuário quando necessário.

Observação

Este tópico discute o uso do Redirecionador WebDAV para se conectar ao seu site. Consulte o tópico [Usando o Redirecionador WebDAV](publish__using-webdav__using-the-webdav-redirector.md) para obter mais informações; especificamente, a seção "Solução de problemas do Redirecionador WebDAV" se você tiver problemas ao usar o redirecionador WebDAV.

## Pré-requisitos para instalar e configurar o WebDAV no IIS

Os seguintes itens são necessários para concluir os procedimentos neste artigo:

- O IIS 7.0 ou posterior deve ser instalado no servidor e o seguinte deve ser configurado:

  - O Site Padrão criado pela instalação do IIS 7.0 ainda deve existir.
  - O Gerenciador de Serviços de Informações da Internet deve ser instalado.
  - Pelo menos um método de autenticação deve ser instalado.

    Observação

    Se você optar por usar a Autenticação Básica com o redirecionador WebDAV, deverá se conectar ao servidor usando HTTPS.
- O Redirecionador WebDAV deve ser instalado para Windows Server 2008, Windows Server 2008 R2 ou Windows Server 2012. (O Redirecionador WebDAV já está instalado no Windows Vista, Windows 7 e Windows 8.) Para instalar o Redirecionador WebDAV, use o Gerenciador de Servidores para instalar o recurso Experiência da Área de Trabalho.

## Instalando o WebDAV no IIS 7.0

### Baixando a versão certa para o servidor

Há dois pacotes para download separados para o novo módulo de extensão WebDAV; você precisa baixar o pacote apropriado para sua versão do Windows Server 2008:

- **Pacote de instalação de 32 bits**:

  - WebDAV 7.5 para IIS 7.0 (x86)
- **Pacote de instalação de 64 bits**:

  - WebDAV 7.5 para IIS 7.0 (x64)

### Iniciando o pacote de instalação

Você deve executar o pacote de instalação como administrador. Isso pode ser feito por um dos seguintes métodos:

- Faça logon em seu servidor usando a conta real chamada "Administrador", navegando até as páginas de download listadas acima ou clicando duas vezes no pacote de download se você o salvou no servidor.
- Faça logon usando uma conta com privilégios de administrador e abrindo um prompt de comando clicando com o botão direito do mouse no item de menu **Prompt de Comando** que está localizado no menu **Acessórios** para programas do Windows e selecionando **Executar como administrador** e digitando o comando apropriado listado abaixo para sua versão do Windows executar a instalação:

  - **Versões do Windows de 32 bits**:

    - msiexec /i webdav\_x86\_75.msi
  - **Versões do Windows de 64 bits**:

    - msiexec /i webdav\_x64\_75.msi

### Percorrendo o processo de instalação

1. Quando o pacote de instalação for aberto, você verá a tela a seguir. Se você concordar com os termos de licença, marque a caixa "Aceito" e clique em **Instalar**.  
   [![Captura de tela que mostra a janela de configuração do Web DAV 7 ponto 5 para I I S 7 ponto 0.](installing-and-configuring-webdav-on-iis/_static/image3.jpg)](https://learn.microsoft.com/pt-br/iis/install/installing-publishing-technologies/installing-and-configuring-webdav-on-iis/_static/image1.jpg)
2. O indicador de progresso refletirá o status da instalação conforme ela prossegue.  
   [![Captura de tela que mostra o progresso da instalação da instalação do DAV Web.](installing-and-configuring-webdav-on-iis/_static/image7.jpg)](https://learn.microsoft.com/pt-br/iis/install/installing-publishing-technologies/installing-and-configuring-webdav-on-iis/_static/image5.jpg)
3. Depois que a instalação for concluída, clique em **Concluir**.  
   [![Captura de tela que mostra a conclusão da instalação do DAV Web.](installing-and-configuring-webdav-on-iis/_static/image11.jpg)](https://learn.microsoft.com/pt-br/iis/install/installing-publishing-technologies/installing-and-configuring-webdav-on-iis/_static/image9.jpg)
4. O módulo de extensão WebDAV agora está instalado.

## Instalando o WebDAV no IIS 7.5

### IIS 7.5 para Windows Server 2008 R2

1. Na barra de tarefas, clique em **Iniciar**, aponte para **Ferramentas Administrativas** e clique em **Gerenciador de Servidores**.
2. No painel hierarquia do **Gerenciador de Servidores** , **expanda Funções** e clique em **Servidor Web (IIS)**.
3. No painel **servidor Web (IIS** ), role até a seção **Serviços de Função** e clique em **Adicionar Serviços de Função**.
4. Na página **Selecionar Serviços de Função** do **Assistente para Adicionar Serviços de Função**, expanda **Recursos HTTP Comuns**, selecione **Publicação WebDAV** e clique em **Avançar**.

   ![Captura de tela que mostra a página Selecionar Serviços de Função. A Publicação WebDAV está selecionada.](installing-and-configuring-webdav-on-iis/_static/image1.png)
5. Na página **Confirmar Seleções de Instalação**, clique em **Instalar**.
6. Na página **Resultados** , clique em **Fechar**.

### IIS 7.5 para Windows 7

1. Na barra de tarefas, clique em **Iniciar** e clique em **Painel de Controle**.
2. No **Painel de Controle**, clique **em Programas e Recursos** e, em seguida, clique **em Ativar ou Desativar Recursos do Windows**.
3. Expanda **os Serviços de Informações da Internet** e, em seguida, **os Serviços Web em Todo o Mundo** e, em seguida, **os Recursos HTTP Comuns**.
4. Selecione **Publicação webDAV** e clique em **OK**.

   ![Captura de tela que mostra Publicação WebDAV selecionada para Windows 7.](installing-and-configuring-webdav-on-iis/_static/image3.png)

## Instalando o WebDAV no IIS 8.0 e no IIS 8.5

### IIS 8.0 no Windows Server 2012 e IIS 8.5 no Windows Server 2012 R2

1. Clique no ícone **do Gerenciador do Servidor** na área de trabalho.
2. Na janela **Gerenciador do Servidor** , clique no menu **Gerenciar** e clique em **Adicionar Funções e Recursos**.
3. Na página **Antes de começar**, clique em **Seguinte**.
4. Selecione o **Tipo de Instalação** e clique em **Avançar**.
5. Selecione o **Servidor de Destino** e clique em **Avançar**.
6. Na página **Selecionar Serviços de Função**, expanda **Servidor Web (IIS)**, **Servidor Web** e **Recursos HTTP Comuns**, e em seguida, selecione **Publicação WebDAV**. Clique em **Próximo**.

   ![Captura de tela que mostra o WebDAV Publishing para Windows Server 2012.](installing-and-configuring-webdav-on-iis/_static/image13.jpg)
7. Na página **Selecionar Recursos**, clique em **Seguinte**.
8. Confirme a seleção de instalação e clique em **Instalar**.
9. Na página **Resultados** , verifique se a instalação foi bem-sucedida e clique em **Fechar**.
10. Na página **Confirmar Seleções de Instalação**, clique em **Instalar**.
11. Na página **Resultados** , clique em **Fechar**.

### IIS 8.0 para Windows 8 e IIS 8.5 para Windows 8.1

1. Na barra de tarefas, mantenha pressionada a tecla **Windows** e pressione a tecla **X** . Clique **Painel de Controle**.
2. No **Painel de Controle**, clique em **Programas e Recursos** e, em seguida, clique **em Ativar ou Desativar Recursos do Windows**.
3. Expanda **os Serviços de Informações da Internet** e, em seguida, **os Serviços Web em Todo o Mundo** e, em seguida, **os Recursos HTTP Comuns**.
4. Selecione **Publicação webDAV** e clique em **OK**.

   ![Captura de tela que mostra a Publicação da Web DAV selecionada para o Windows 8.](installing-and-configuring-webdav-on-iis/_static/image15.jpg)

## Habilitando a publicação do WebDAV usando o Gerenciador do IIS

O módulo de extensão WebDAV facilita a adição da publicação WebDAV a sites existentes, fornecendo-lhe um assistente que orienta você por todas as etapas necessárias.

Observação

O procedimento a seguir é executado usando o IIS 8.5 no Windows Server 2012 R2

### Etapa 1: Habilitar o WebDAV e adicionar uma regra de criação

Nesta primeira etapa, adicionamos a publicação webDAV ao site padrão e adicionamos as configurações necessárias para permitir que a conta de administrador local edite o conteúdo.

1. No **Gerenciador do IIS**, no painel **Conexões**, expanda o nó **Sites** na árvore e, em seguida, clique no **Site Padrão**.
2. Conforme mostrado na imagem abaixo, clique duas vezes no recurso **Regras de Criação do WebDAV** .  
   [![Captura de tela que mostra o painel Página Inicial do Site Padrão. As Regras de Autoria do WebDAV estão selecionadas.](installing-and-configuring-webdav-on-iis/_static/image19.jpg)](https://learn.microsoft.com/pt-br/iis/install/installing-publishing-technologies/installing-and-configuring-webdav-on-iis/_static/image17.jpg)
3. Quando a página **Regras de Criação do WebDAV** for exibida, clique na tarefa **Habilitar WebDAV** na página **Ações** .  
   [![Captura de tela que mostra o painel Regras de Criação do WebDAV. Habilitar WebDAV está realçado no painel Ações.](installing-and-configuring-webdav-on-iis/_static/image23.jpg)](https://learn.microsoft.com/pt-br/iis/install/installing-publishing-technologies/installing-and-configuring-webdav-on-iis/_static/image21.jpg)
4. Depois que o WebDAV tiver sido habilitado, clique na tarefa **Adicionar Regra de Criação** no painel **Ações** .  
   [![Captura de tela que mostra o painel Regras de Criação do WebDAV. Adicionar Regra de Criação é realçado no painel Ações.](installing-and-configuring-webdav-on-iis/_static/image27.jpg)](https://learn.microsoft.com/pt-br/iis/install/installing-publishing-technologies/installing-and-configuring-webdav-on-iis/_static/image25.jpg)
5. Quando a caixa de diálogo **Adicionar Regra de Criação** é exibida:

   1. Clique em **Todo o conteúdo** para especificar que a regra se aplica a todos os tipos de conteúdo.
   2. Escolha **usuários especificados** e digite "administrador" para o nome de usuário.
   3. Selecione **Ler**, **Origem** e **Gravar** para as permissões.
   4. Quando concluir esses itens, clique em **OK**.

      [![Captura de tela que mostra a caixa de diálogo Adicionar Regra de Criação. Todo o conteúdo, usuários especificados, Leitura, Origem e Gravação estão realçados e selecionados.](installing-and-configuring-webdav-on-iis/_static/image31.jpg)](https://learn.microsoft.com/pt-br/iis/install/installing-publishing-technologies/installing-and-configuring-webdav-on-iis/_static/image29.jpg)

#### Resumo para habilitar a criação do WebDAV e adicionar uma regra de criação

Tarefa concluída. Você habilitou a criação do WebDAV em um site existente.

Para recapitular os itens que você concluiu nesta etapa, adicionamos a publicação do WebDAV ao Site Padrão:

- Habilitando o WebDAV para o site.
- Adicionando uma regra de autoria para a conta de administrador local para acesso de leitura, escrita e origem.

Observação

Conforme mencionado anteriormente, as configurações de filtragem de solicitação padrão podem bloquear vários tipos de arquivo da criação do WebDAV. Se você não modificar as configurações de filtragem de solicitação, poderá ver vários erros ao tentar publicar arquivos bloqueados. Por exemplo, se você tentar carregar ou baixar um arquivo de web.config, verá erros em seu cliente WebDAV. Para obter mais informações sobre como definir as configurações de filtragem de solicitações, consulte o passo [a passo Como configurar WebDAV com Filtragem de Solicitações](publish__using-webdav__how-to-configure-webdav-with-request-filtering.md) .

### Etapa 2: Fazer logon no site do WebDAV

Na Etapa 1 acima, você habilitou a publicação do WebDAV para seu Site Padrão e adicionou uma regra de criação para a conta de administrador local para acesso de leitura, origem e gravação ao conteúdo do site. Nesta etapa, você faz logon usando sua conta de administrador.

### Garantindo que você tenha autorização e autenticação configuradas

1. No **Gerenciador do IIS**, no painel **Conexões**, expanda o nó **Sites** na árvore e, em seguida, clique no **Site Padrão**.
2. Clique duas vezes no recurso **autenticação** .  
   [![Captura de tela que mostra o painel Página Inicial do Site Padrão. A autenticação está selecionada.](installing-and-configuring-webdav-on-iis/_static/image35.jpg)](https://learn.microsoft.com/pt-br/iis/install/installing-publishing-technologies/installing-and-configuring-webdav-on-iis/_static/image33.jpg)
3. Quando o recurso **de Autenticação** for aberto, verifique se a **Autenticação do Windows** está habilitada. Se ele não estiver habilitado, selecione **Autenticação do Windows** e clique em **Habilitar** no menu **Ação** .

   Observação

   Você pode usar a Autenticação Básica com WebDAV, mas o redirecionador WebDAV usará apenas a autenticação Básica com conexões SSL.
   [![Captura de tela que mostra o painel Autenticação. A Autenticação do Windows está habilitada e realçada.](installing-and-configuring-webdav-on-iis/_static/image39.jpg)](https://learn.microsoft.com/pt-br/iis/install/installing-publishing-technologies/installing-and-configuring-webdav-on-iis/_static/image37.jpg)
4. No Gerenciador do IIS, clique no **Site Padrão** no nó **Sites** na árvore.
5. Clique duas vezes no recurso **Regras de Autorização** .  
   [![Captura de tela que mostra o painel Página Inicial do Site Padrão. As regras de autenticação estão realçadas.](installing-and-configuring-webdav-on-iis/_static/image43.jpg)](https://learn.microsoft.com/pt-br/iis/install/installing-publishing-technologies/installing-and-configuring-webdav-on-iis/_static/image41.jpg)
6. Quando o recurso **autorização** for aberto, verifique se uma regra **Permitir** está definida que inclui a conta de administrador. (Por exemplo, a regra padrão do IIS que permite o acesso a Todos os Usuários incluirá a conta de administrador.)  
   [![Captura de tela que mostra o painel Regras de Autorização. A regra Permitir está realçada.](installing-and-configuring-webdav-on-iis/_static/image47.jpg)](https://learn.microsoft.com/pt-br/iis/install/installing-publishing-technologies/installing-and-configuring-webdav-on-iis/_static/image45.jpg)

### Fazer logon em seu site WebDAV usando sua conta de administrador

Fazer logon em seu site WebDAV requer o Redirecionador WebDAV. O Redirecionador WebDAV é usado para publicar conteúdo em um site existente que tem o módulo WebDAV instalado. Você deve usar o Gerenciador de Servidores para instalar o recurso de Experiência da Área de Trabalho antes de poder usar o redirecionador WebDAV. Para obter mais informações, consulte Como usar o redirecionador WebDAV.

1. No servidor WebDAV, abra uma sessão de prompt de comando.
2. Digite o seguinte comando para se conectar ao servidor WebDAV:

   `net use \* http://localhost/`

Agora, com a conta de administrador local, você tem uma unidade mapeada para seu site habilitado para WebDAV, e, com base na regra de autorização que adicionamos na Etapa 1, você tem acesso de leitura, gravação e código-fonte à pasta de conteúdo.

[![Captura de tela que mostra o Prompt de Comando. O conteúdo do diretório da unidade Y é exibido.](installing-and-configuring-webdav-on-iis/_static/image51.jpg)](https://learn.microsoft.com/pt-br/iis/install/installing-publishing-technologies/installing-and-configuring-webdav-on-iis/_static/image49.jpg)

### Resumo para fazer logon em seu site webDAV

Para recapitular os itens que você concluiu nesta etapa:

- Você verificou que seu site tinha configurações de autenticação e autorização suficientes.
- Você fez logon no site do WebDAV como administrador local.

## Habilitando a publicação do WebDAV editando os arquivos de configuração do IIS

Você também pode adicionar a publicação webDAV a um site existente editando os arquivos de configuração do IIS.

Observação

A edição do arquivo applicationHost.config requer permissões administrativas completas. Isso é melhor feito usando um dos dois métodos:

- Faça logon no computador usando a conta local de "administrador".
- Se você estiver conectado usando uma conta com permissões administrativas que não seja a conta "administrador" local, abra o Bloco de Notas usando a opção "Executar como Administrador".

Observação

As etapas acima são necessárias porque o componente de segurança UAC (Controle de Conta de Usuário) no Windows Server 2008 e posterior impedirá o acesso ao seu arquivo de applicationHost.config. Para obter mais informações sobre o UAC, consulte [Controle de Conta de Usuário](https://learn.microsoft.com/pt-br/windows/desktop/secauthz/user-account-control).

As etapas a seguir explicam todas as configurações necessárias para adicionar a publicação do WebDAV ao Site Padrão.

1. Usando um editor de texto, como o Bloco de Notas do Windows, abra seu arquivo applicationHost.config, que está localizado em sua `%SystemRoot%\System32\inetsrv\config` pasta por padrão.
2. Role até a parte inferior do arquivo applicationHost.config e localize a seção do `<location>` site padrão que contém as configurações de autenticação. Se esta seção não existir, você deverá adicioná-la. Isso deve ser semelhante ao exemplo a seguir:

   ```
   <location path="Default Web Site">
      <system.webServer>
         <security>
            <authentication>
               <anonymousAuthentication enabled="true" />
               <basicAuthentication enabled="false" />
               <digestAuthentication enabled="false" />
               <windowsAuthentication enabled="true" />
            </authentication>
         </security>
      </system.webServer>
   </location>
   ```
3. Verifique se você tem o método de autenticação do Windows habilitado.
4. Adicione um <elemento webdav> abaixo da tag de fechamento </authentication> que conterá as configurações do WebDAV.
5. Adicionar um <elemento de autoria enabled="true" />ao <elemento webdav>
6. Adicione uma <coleção authoringRules> com uma única entrada para <adicionar users="administrator" path="\*" access="Read, Write, Source" />.
7. As configurações do site padrão agora devem ser semelhantes ao seguinte exemplo:

   ```
   <location path="Default Web Site">
      <system.webServer>
         <security>
            <authentication>
               <windowsAuthentication enabled="true" />
               <anonymousAuthentication enabled="false" />
               <digestAuthentication enabled="false" />
               <basicAuthentication enabled="false" />
            </authentication>
         </security>
         <webdav>
            <authoring enabled="true" />
            <authoringRules>
               <add users="administrator" path="*"
                  access="Read, Write, Source" />
            </authoringRules>
         </webdav>
      </system.webServer>
   </location>
   ```
8. Salve seu arquivo de applicationHost.config.

Agora você deve ser capaz de fazer logon em seu site habilitado para WebDAV usando um cliente WebDAV usando a conta de administrador, mas nenhum outro usuário deve ser capaz de acessar o conteúdo usando WebDAV.

### Resumo para adicionar a publicação do WebDAV editando o arquivo de configuração do IIS

Nesta tarefa, você adicionou a publicação do WebDAV ao site padrão editando os arquivos de configuração do IIS. Para recapitular os itens que você concluiu nesta tarefa:

1. Você habilitou a Autenticação do Windows para o Site Padrão.
2. Você habilitou o WebDAV para o site padrão.
3. Você adicionou uma regra de criação webDAV para a conta de administrador com acesso de leitura, gravação e origem ao site padrão.

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
