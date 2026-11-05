# Instalando e configurando a implantação da Web no IIS 8.0 ou posterior | Microsoft Learn

> **Fonte / Source:** https://learn.microsoft.com/pt-br/iis/install/installing-publishing-technologies/installing-and-configuring-web-deploy-on-iis-80-or-later

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

# Instalando e configurando a implantação da Web no IIS 8.0 ou posterior

Comentários

por [Jim van de Erve](https://twitter.com/jimvde)

## Resumo

Neste passo a passo, mostraremos etapas para instalar e configurar a Implantação da Web no IIS 8.0 ou posterior para implantações de administrador ou não administrador. Isso significa as etapas necessárias para permitir que um cliente use o Web Deploy para publicar o conteúdo de um site no servidor, mesmo sem ter credenciais de administrador.

O Windows 8.0 e o 8.1 não vêm com o Serviço de Gerenciamento da Web necessário para conexões remotas. Para obter mais informações, consulte [A Publicação Remota não pode ser configurada no Windows 8.0 ou 8.1](#00).

## Instalando o Web Deploy

Você pode instalar o Web Deploy usando o MSI do Web Deploy.

### Usando o Instalador do Web Deploy para instalar o Web Deploy

Você pode instalar o Web Deploy diretamente usando o instalador MSI. O uso do MSI diretamente geralmente não é recomendado para o usuário novato, pois os produtos dependentes recomendados ou necessários podem precisar ser instalados separadamente. As seguintes limitações podem criar problemas ao usar o MSI em vez do WEB PI para instalar a Implantação da Web em servidores:

- A MSI não instalará o SMO (SQL Shared Management Objects), que é necessário para as implantações do banco de dados do SQL Server. Esse componente pode ser instalado usando o WEB PI para habilitar implantações de banco de dados do SQL Server.
- A MSI não instalará o componente de manipulador do Serviço de Gerenciamento Web se o Serviço de Gerenciamento da Web não estiver instalado. O componente do manipulador é necessário para implantações não administradores. O componente do Windows IIS, incluindo o Serviço de Gerenciamento, deve ser instalado primeiro para habilitar a instalação do componente do manipulador.
- Quando a Implantação da Web é instalada diretamente usando a MSI de Implantação da Web, o Serviço de Gerenciamento da Web não será configurado para implantações não administradores, a menos que o PowerShell v2 ou posterior esteja instalado.

Usando o Instalador do Web Deploy, o Web Deploy pode ser instalado no Windows Server 2012 ou posterior, ou no Windows 8.0 ou posterior.

Para instalar o Web Deploy a partir do arquivo .msi:

1. Vá para a página de download do [Web Deploy](https://www.iis.net/downloads/microsoft/web-deploy).
2. Na página de download da Implantação da Web, vá para a seção **Baixar Implantação da Web** e, para o idioma desejado, selecione **x86** ou **x64**.
3. Execute o .msi do Web Deploy e passe pelo assistente de instalação, selecionando os recursos desejados na página Configuração Personalizada. [![Captura de tela da caixa de diálogo de instalação do Microsoft Web Deploy três ponto cinco. A página Configuração Personalizada é exibida. O módulo IIS Manager UI está realçado.](installing-and-configuring-web-deploy-on-iis-80-or-later/_static/image8.jpg)](https://learn.microsoft.com/pt-br/iis/install/installing-publishing-technologies/installing-and-configuring-web-deploy-on-iis-80-or-later/_static/image7.jpg)

## pt-BR: Configurando um site para implantação delegada de não administradores

Depois de instalar o Web Deploy, todas as configurações no nível do servidor são finalizadas para publicação sem privilégios de administrador; no entanto, são necessárias configurações adicionais no nível do site. Essa configuração de site pode ser realizada usando o PowerShell ou o Gerenciador do IIS, conforme descrito abaixo.

### A publicação remota não pode ser configurada no Windows 8.0 ou 8.1

Não é possível configurar a publicação remota usando o Web Deploy para um site hospedado no IIS no Windows 8.0 ou 8.1. O motivo é que as SKUs de cliente para Windows não vêm com o Serviço de Gerenciamento da Web necessário para conexões remotas. Como resultado, no Windows 8.0 ou 8.1, o ícone de permissões do Gerenciador do IIS e a opção de Configurar Publicação de Implantação via Web Deploy, que são necessários para configurar a publicação remota, não estão disponíveis no Gerenciador do IIS.

Quando você usa o assistente Adicionar Funções e Recursos para instalar a função serviço de gerenciamento no Windows Server 2012 ou posterior, o Serviço de Gerenciamento da Web é instalado e habilitado. O ícone de Permissões do Gerenciador do IIS está disponível para um site na área de gerenciamento do Gerenciador do IIS e a opção Configurar Publicação do Web Deploy está disponível no menu Implantar para um site no Gerenciador do IIS. Com esses recursos, o Serviço de Gerenciamento de Web permite que você configure a publicação em um servidor Web de um computador remoto usando o Web Deploy.

### Usando o PowerShell para configurar a implantação da Web para um não administrador

1. Crie um novo site ou defina permissões em um site existente para um usuário não administrador novo ou existente usando scripts do PowerShell de implantação da Web. Para obter mais informações, consulte [Scripts do PowerShell para Automatizar a Instalação da Implantação da Web](publish__using-web-deploy__powershell-scripts-for-automating-web-deploy-setup.md) e [Cmdlets do PowerShell para Implantação na Web](publish__using-web-deploy__web-deploy-powershell-cmdlets.md).

### Usando o Gerenciador do IIS para configurar a implantação da Web para um não administrador

As etapas a seguir configuram a publicação em um site existente para um usuário existente usando a interface do usuário do Gerenciador do IIS.

1. Inicie o Gerenciador do IIS (abra **o Gerenciador do Servidor**, clique em **Ferramentas** e abra o **Gerenciador do IIS**.
2. Expanda o nó **Sites** e clique em um site.
3. Na área **Gerenciamento** do painel inicial do site, clique duas vezes em **Permissões do Gerenciador do IIS**.
   [![Captura de tela do Gerenciador do Serviços de Informações da Internet (IIS). O nó Sites é mostrado no painel esquerdo. O ícone do Gerenciador do IIS está selecionado.](installing-and-configuring-web-deploy-on-iis-80-or-later/_static/image10.jpg)](https://learn.microsoft.com/pt-br/iis/install/installing-publishing-technologies/installing-and-configuring-web-deploy-on-iis-80-or-later/_static/image9.jpg)
4. No painel **Ações** , clique em **Permitir Usuário**.
   [![Captura de tela do painel Permissões do Gerenciador de IS. O painel Ações é exibido à direita. O botão Permitir Usuário está no painel Ações.](installing-and-configuring-web-deploy-on-iis-80-or-later/_static/image12.jpg)](https://learn.microsoft.com/pt-br/iis/install/installing-publishing-technologies/installing-and-configuring-web-deploy-on-iis-80-or-later/_static/image11.jpg)
5. Na caixa de diálogo **Permitir Usuário...** com o **Windows** selecionado, clique em **Selecionar**. [![Captura de tela da caixa de diálogo Permitir Usuário. O Windows está selecionado.](installing-and-configuring-web-deploy-on-iis-80-or-later/_static/image14.jpg)](https://learn.microsoft.com/pt-br/iis/install/installing-publishing-technologies/installing-and-configuring-web-deploy-on-iis-80-or-later/_static/image13.jpg)
6. Na caixa de diálogo **Selecionar Usuário ou Grupo** , insira **o nome do objeto a ser selecionado**, insira o nome de um usuário não administrador do Windows que terá permissões de publicação no site, com domínio. Clique **em Verificar Nomes** e, depois que o nome tiver sido verificado, clique em **OK**. [![Captura de tela da caixa de diálogo Selecionar Usuário ou Grupo. A caixa para Inserir o nome do objeto a ser selecionado é encontrada na caixa selecionar o tipo de objeto e a caixa De esta localização.](installing-and-configuring-web-deploy-on-iis-80-or-later/_static/image16.jpg)](https://learn.microsoft.com/pt-br/iis/install/installing-publishing-technologies/installing-and-configuring-web-deploy-on-iis-80-or-later/_static/image15.jpg)
7. Na caixa de diálogo **Permitir Usuário...** clique em **OK**. [![Captura de tela da caixa de diálogo Permitir Usuário. O Windows está selecionado. Na caixa do Windows, há o texto C O N T O S O backslash john doe. O botão O K pode ser encontrado na parte inferior.](installing-and-configuring-web-deploy-on-iis-80-or-later/_static/image18.jpg)](https://learn.microsoft.com/pt-br/iis/install/installing-publishing-technologies/installing-and-configuring-web-deploy-on-iis-80-or-later/_static/image17.jpg)
8. Verifique se o nome com o domínio está inserido no painel **Permissões do Gerenciador do IIS** . [![Captura de tela do painel Permissões do Gerenciador de IS. Em Nome está o texto C O N T O S O backslash john doe. Em Caminho está o Site Padrão.](installing-and-configuring-web-deploy-on-iis-80-or-later/_static/image20.jpg)](https://learn.microsoft.com/pt-br/iis/install/installing-publishing-technologies/installing-and-configuring-web-deploy-on-iis-80-or-later/_static/image19.jpg)
9. Clique com o botão direito do mouse no site que você está configurando, aponte para **Implantar** e clique em **Configurar Publicação de Implantação da Web...**. A seguinte interface aparecerá:

   Observação: se o comando Implantar não for mostrado no menu de um site, feche e reabra o Gerenciador do IIS.

   [![Captura de tela da caixa de diálogo Configurar Publicação de Implantação da Web. Em Selecionar um usuário para conceder permissões de publicação está o texto C O N T O S O backslash john doe.](installing-and-configuring-web-deploy-on-iis-80-or-later/_static/image22.jpg)](https://learn.microsoft.com/pt-br/iis/install/installing-publishing-technologies/installing-and-configuring-web-deploy-on-iis-80-or-later/_static/image21.jpg)
10. Clique na seta para baixo para **Selecionar um usuário a quem conceder permissões de publicação** e selecione o usuário que você inseriu para Permissões do Gerenciador do IIS. [![Captura de tela do painel Configurar Publicação de Implantação da Web. Em Selecionar um usuário a quem conceder permissões de publicação, o texto C O N T O S O backslash john doe está realçado.](installing-and-configuring-web-deploy-on-iis-80-or-later/_static/image24.jpg)](https://learn.microsoft.com/pt-br/iis/install/installing-publishing-technologies/installing-and-configuring-web-deploy-on-iis-80-or-later/_static/image23.jpg)
11. Clique em **Configuração**.

    As seguintes linhas de log serão exibidas:

- Habilitada a publicação para 'NonAdminUser'
- "Concedido controle total a 'NonAdminUser' em `C:\inetpub\wwwroot\test`"
- Arquivo de configurações criado com êxito `C:\Users\janedoe\Desktop\CONTOSO\_johndoe\_Default Web Site.PublishSettings`

O usuário não administrador do Windows (NonAdminUser) agora pode publicar no site.

[![Captura de tela da caixa de diálogo Configurar Publicação com Web Deploy. Em Selecionar um usuário para conceder permissões de publicação está o texto C O N T O S O barra invertida John Doe. O botão Configurar é mostrado.](installing-and-configuring-web-deploy-on-iis-80-or-later/_static/image26.jpg)](https://learn.microsoft.com/pt-br/iis/install/installing-publishing-technologies/installing-and-configuring-web-deploy-on-iis-80-or-later/_static/image25.jpg)

### Instalar e configurar o Web Deploy para implantação por administradores

#### Requisitos:

Instale o Web Deploy usando um dos procedimentos descritos acima.

### Solução de problemas comuns:

- Se você estiver atualizando uma instalação existente do Web Deploy, certifique-se de reiniciar os serviços do manipulador e do agente executando os seguintes comandos em um prompt de comando administrativo:
- net stop msdepsvc & net start msdepsvc
- net stop wmsvc &net start wmsvc
- Verifique se o firewall permite conexões com o serviço que você está usando. Por padrão, o Serviço do Agente de Implantação Web (MsDepSvc) escuta na porta 80 e o Serviço de Gerenciamento da Web (WmSvc, também chamado de "manipulador") escuta na porta 8172 por padrão.
- Você deve executar o MsDepSvc usando a conta de Administrador interna ou de uma conta de domínio que foi adicionada ao grupo Administradores. Um administrador local que não seja a conta integrada não funcionará com o MsDepSvc.
- Verifique se o .NET 4.0 não foi registrado no IIS:

  **Sintomas**: o .NET 4.0 está instalado, mas não há pools de aplicativos do .NET 4.0 ou mapeamentos de manipulador no IIS. Você não pode procurar aplicativos que usam o .NET 4.0 (por exemplo, aplicativos baseados em aplicativos de modelo de site da WebMatrix) depois de publicá-los.

  **Causa**: seu computador tinha o .NET 4.0 instalado nele antes do IIS ser instalado.

  **Solução**: execute o seguinte comando para registrar o .NET 4.0 com o IIS: `%systemdrive%\Windows\Microsoft.NET\Framework64\v4.0.30319\aspnet_regiis.exe -iru`

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
