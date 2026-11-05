# Instalando e configurando a implantação da Web no IIS 7 | Microsoft Learn

> **Fonte / Source:** https://learn.microsoft.com/pt-br/iis/install/installing-publishing-technologies/installing-and-configuring-web-deploy

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

# Instalando e configurando a implantação da Web no IIS 7

Comentários

por [Kristina Olson](https://github.com/krolson)

## Resumo

Neste guia, mostraremos as etapas para instalar e configurar o Web Deploy para implantações como administrador ou não administrador. Isso significa as etapas necessárias para permitir que um cliente use o Web Deploy para publicar o conteúdo de um site no servidor, mesmo sem ter credenciais de administrador.

Observação: Atualmente, o Web Deploy V3 RTW só está disponível por meio de download direto. Ainda estamos trabalhando no feed do WebPI. A maneira mais fácil de instalar o Web Deploy V3 RTW é primeiro instalar o Web Deploy V3 RC usando o WebPI 4 RC (x86 (`https://download.microsoft.com/download/C/4/9/C4963E95-B3E7-4520-BD87-86BFEED90A1E/WebPlatformInstaller_x86.msi`)/x64 (`https://download.microsoft.com/download/C/4/9/C4963E95-B3E7-4520-BD87-86BFEED90A1E/WebPlatformInstaller_amd64.msi`)), conforme instruído no tutorial Instalar e Configurar o Web Deploy e, posteriormente, atualizá-lo executando o instalador MSI do Web Deploy V3 RTW.

### Instalar e Configurar o Web Deploy para Implantações sem Privilégios de Administrador

#### Requisitos:

O servidor deve ter um sistema operacional que venha com o IIS7, ou seja, o Windows Server 2008 ou o Windows Server 2008 R2.

#### Use WebPI para instalar o Web Deploy junto com suas dependências, como o WMSvc (Serviço de Gerenciamento da Web)

1. Instale o Web Deploy usando o método abaixo:

   1. Baixe o instalador do Web Deploy diretamente da [página Web Deploy do IIS.net](https://www.iis.net/downloads/microsoft/web-deploy) (x86) | (x64)

      1. No assistente de Instalação, escolha a opção de instalação "Concluir".  
         [![Captura de tela que mostra o assistente de Instalação do Microsoft Web Deploy 2 point 0. A conclusão está realçada.](installing-and-configuring-web-deploy/_static/image7.png)](https://learn.microsoft.com/pt-br/iis/install/installing-publishing-technologies/installing-and-configuring-web-deploy/_static/image6.png)
      2. Observação: *usar o MSI diretamente geralmente não é recomendado para o usuário iniciante, pois os produtos dependentes recomendados ou necessários devem ser instalados separadamente*. As seguintes limitações podem criar problemas ao usar o MSI em vez de WebPI para instalar a Implantação da Web em servidores:

         1. A MSI não instalará o SMO (SQL Shared Management Objects), que é necessário para as implantações do banco de dados do SQL Server. Esse componente pode ser instalado usando WebPI para habilitar implantações de banco de dados do SQL Server.
         2. A MSI não instalará o componente de manipulador do Serviço de Gerenciamento Web se o Serviço de Gerenciamento da Web não estiver instalado; o componente do manipulador é necessário para implantações não administradores. O componente do Windows IIS, incluindo o Serviço de Gerenciamento, deve ser instalado primeiro para habilitar a instalação do componente do manipulador.
         3. A MSI não configurará o Serviço de Gerenciamento da Web para permitir implantações não administradoras se o PowerShell v2 não estiver instalado. Essa etapa de instalação inclui a criação de regras de delegação no arquivo Administration.config do servidor IIS que permite que usuários não administradores usem o Web Deploy. O PowerShell v2 é interno no Windows Server 2008 R2, mas pode exigir uma Atualização do Windows para Windows Server 2008. Como alternativa, as regras de delegação podem ser adicionadas manualmente após a instalação.

#### Configurar um site para implantação delegada por não-administradores

Depois de instalar o Web Deploy usando o método (1) ou (2a), descrito acima, toda a configuração no nível do servidor está concluída para publicação sem privilégios de administrador. No entanto, é necessário fazer configurações adicionais no nível do site. Essa configuração de site pode ser realizada usando métodos (1) ou (2) descritos abaixo.

1. Criar um novo site ou definir permissões em um site existente para um usuário novo ou existente que não seja administrador usando scripts do PowerShell de implantação da Web, conforme explicado no passo a passo dos scripts do PowerShell [**link a ser adicionado**] OU
2. Configurar a publicação em um site existente para um usuário existente usando a interface do usuário do Gerenciador do IIS

   1. Iniciar o Gerenciador do IIS (digite "inetmgr.exe" no Menu Iniciar)
   2. Expanda o nó **Sites** e clique com o botão direito do mouse em um site, como em "teste"
   3. Clique **em Publicar**>**Configurar para Publicação com Web Deploy...**
   4. A seguinte interface do usuário será exibida. Clique em **...**  
      [![Captura de tela que mostra a caixa de diálogo Configurar Publicação do Web Deploy. As reticências na primeira variável são realçadas.](installing-and-configuring-web-deploy/_static/image9.png)](https://learn.microsoft.com/pt-br/iis/install/installing-publishing-technologies/installing-and-configuring-web-deploy/_static/image8.png)
   5. Clique em **Selecionar:**  
      [![Captura de tela que mostra a caixa de diálogo Permitir Usuário. A seleção está realçada ao lado da caixa de texto do Windows.](installing-and-configuring-web-deploy/_static/image11.png)](https://learn.microsoft.com/pt-br/iis/install/installing-publishing-technologies/installing-and-configuring-web-deploy/_static/image10.png)
   6. Digite o nome de um usuário do Windows não administrador e clique em **Ok**  
      [![Captura de tela da caixa de diálogo Selecionar Usuário ou Grupo. Usuário não administrador é inserido e realçado na caixa de texto para digitar o nome do objeto a ser selecionado.](installing-and-configuring-web-deploy/_static/image13.png)](https://learn.microsoft.com/pt-br/iis/install/installing-publishing-technologies/installing-and-configuring-web-deploy/_static/image12.png)
   7. Quando você clicar em **Configurar**, as seguintes linhas de log serão exibidas:

      - Habilitada a publicação para 'NonAdminUser'
      - "Concedido controle total a 'NonAdminUser' em `C:\inetpub\wwwroot\test`"
      - Arquivo de configurações criado com êxito `C:\Users\JohnDoe\Desktop\NonAdminUser\_Default Web Site.PublishSettings`
   8. O usuário não administrador do Windows (NonAdminUser) agora pode publicar no site (teste).

### Instalar e configurar o Web Deploy para implantação por administradores

#### Requisitos:

Instale o Web Deploy usando o método descrito acima. Se você estiver usando um sistema operacional cliente, como Vista ou Windows 7, ou uma versão do Windows Server sem IIS7+, como o Windows Server 2003, precisará instalar diretamente na página de download da Ferramenta de Implantação da Web. Para esses computadores cliente ou servidor 2003, o componente do manipulador do Serviço de Gerenciamento Web e as regras de delegação associadas não serão aplicáveis.

### Solução de Problemas Comuns:

- Se você estiver atualizando uma instalação existente do Web Deploy, certifique-se de reiniciar os serviços do manipulador e do agente executando os seguintes comandos em um prompt de comando administrativo:
- net stop msdepsvc & net start msdepsvc
- net stop wmsvc &net start wmsvc
- Verifique se o firewall permite conexões com o serviço que você está usando. Por padrão, o Serviço do Agente de Implantação Web (MsDepSvc) escuta na porta 80 e o Serviço de Gerenciamento da Web (WmSvc, também chamado de "manipulador") escuta na porta 8172 por padrão.
- Você deve executar o MsDepSvc usando a conta de Administrador interna ou de uma conta de domínio que foi adicionada ao grupo Administradores. Um administrador local que não seja a conta integrada não funcionará com o MsDepSvc.
- Verifique se o .NET 4.0 não foi registrado no IIS:

  - **Sintomas:** o .NET 4.0 está instalado, mas não há pools de aplicativos do .NET 4.0 ou mapeamentos de manipulador no IIS. Você não pode procurar aplicativos que usam o .NET 4.0 (por exemplo, aplicativos baseados em aplicativos de modelo de site da WebMatrix) depois de publicá-los.
  - **Causa:** Seu computador tinha o .NET 4.0 instalado nele antes do IIS ser instalado.
  - **Solução:** Execute o seguinte comando para registrar o .NET 4.0 com o IIS: `%systemdrive%\Windows\Microsoft.NET\Framework64\v4.0.30319\aspnet\_regiis.exe -iru`

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
