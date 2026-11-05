# Instalando e configurando o FTP 7 no IIS 7 | Microsoft Learn

> **Fonte / Source:** https://learn.microsoft.com/pt-br/iis/install/installing-publishing-technologies/installing-and-configuring-ftp-7-on-iis-7

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

# Instalando e configurando o FTP 7 no IIS 7

Comentários

por [Robert McMurray](https://github.com/rmcmurray)

## Compatibilidade

| Versão | Observações |
| --- | --- |
| IIS 7.5 | O serviço FTP 7.5 é fornecido como um recurso para o IIS 7.5 no Windows 7 e Windows Server 2008 R2. |
| IIS 7.0 | Os serviços FTP 7.0 e FTP 7.5 foram enviados fora de banda para o IIS 7.0, o que exigiu o download e a instalação do serviço da seguinte URL: <https://www.iis.net/downloads/microsoft/ftp>. |

## Introdução

A Microsoft reescreveu o serviço FTP para Windows Server® 2008 e superior. Esse serviço FTP atualizado incorpora muitos novos recursos que permitem que os autores da Web publiquem conteúdo melhor do que antes e oferece aos administradores da Web mais opções de segurança e implantação.

- **Integração com o IIS**: o IIS tem uma nova interface de administração e um repositório de configuração e o novo serviço FTP é fortemente integrado a esse design. A antiga metabase do IIS 6.0 se foi, e o repositório de configuração atualizado com base no formato \*.config baseado em XML do .NET tomou seu lugar. Além disso, o IIS tem uma ferramenta de administração atualizada e o novo servidor FTP conecta-se perfeitamente a esse paradigma.
- **Suporte para novos padrões de Internet**: um dos recursos mais significativos no servidor FTP atualizado é o suporte para FTP por SSL. O servidor FTP também dá suporte a outros aprimoramentos da Internet, como UTF8 e IPv6.
- **Melhorias de hospedagem compartilhada**: ao integrar totalmente ao IIS, o servidor FTP atualizado possibilita hospedar o FTP e o conteúdo da Web do mesmo site simplesmente adicionando uma associação FTP a um site existente. Além disso, o servidor FTP tem suporte ao nome do host virtual, possibilitando hospedar vários sites FTP no mesmo endereço IP. O servidor FTP também melhorou o isolamento do usuário, possibilitando isolar os usuários por diretórios virtuais por usuário.
- **Provedores de autenticação personalizados**: o servidor FTP atualizado dá suporte à autenticação usando contas que não são do Windows para gerentes do IIS e associação .NET.
- **Suporte aprimorado ao registro em log**: O registro em log de FTP foi aprimorado para incluir todo o tráfego relacionado ao FTP, acompanhamento exclusivo para sessões de FTP, sub-status de FTP, campos adicionais de detalhes em logs de FTP e muito mais.
- **Novos recursos de suporte**: o IIS tem a opção de exibir mensagens de erro detalhadas para usuários locais, e o servidor FTP dá suporte a isso fornecendo respostas de erro detalhadas ao fazer logon localmente em um servidor FTP. O servidor FTP também registra informações detalhadas usando o ETW (Rastreamento de Eventos para Windows), que fornece informações detalhadas adicionais para solução de problemas.
- **Conjunto de recursos extensível**: o FTP dá suporte à extensibilidade que permite estender a funcionalidade interna que é fornecida com o serviço FTP. Mais especificamente, há suporte para criar seus próprios provedores de autenticação e autorização. Você também pode criar provedores para registro em log FTP personalizado e para determinar as informações de diretório inicial para seus usuários FTP.

Informações adicionais sobre novos recursos no FTP 7.5 estão disponíveis no artigo [O que há de novo para Microsoft e FTP 7.5?](get-started__whats-new-in-iis-7__what39s-new-for-microsoft-and-ftp-in-iis-7.md)

Este documento orientará você na instalação do novo serviço FTP e na solução de problemas de instalação.

## Instalando o FTP para IIS 7.5

### IIS 7.5 para Windows Server 2008 R2

1. Na barra de tarefas, clique em **Iniciar**, aponte para **Ferramentas Administrativas** e clique em **Gerenciador de Servidores**.
2. No painel hierarquia do **Gerenciador de Servidores** , **expanda Funções** e clique em **Servidor Web (IIS)**.
3. No painel **servidor Web (IIS** ), role até a seção **Serviços de Função** e clique em **Adicionar Serviços de Função**.
4. Na página **Selecionar Serviços de Função** do **Assistente para Adicionar Serviços de Função**, expanda o **Servidor FTP**.
5. Selecione **Serviço FTP**.

   Observação

   Para dar suporte à autenticação ASP.NET Membership ou à autenticação do Gerenciador do IIS para o serviço FTP, você também precisará selecionar **Extensibilidade de FTP**.
6. Clique em **Próximo**.
7. Na página **Confirmar Seleções de Instalação**, clique em **Instalar**.
8. Na página **Resultados** , clique em **Fechar**.

### IIS 7.5 para Windows 7

1. Na barra de tarefas, clique em **Iniciar** e clique em **Painel de Controle**.
2. No **Painel de Controle**, clique **em Programas e Recursos** e, em seguida, clique **em Ativar ou Desativar Recursos do Windows**.
3. Expanda **os Serviços de Informações da Internet** e, em seguida, **o SERVIDOR FTP**.
4. Selecione **Serviço FTP**.

   Observação

   Para dar suporte à autenticação de Associação do ASP.NET ou à autenticação do Gerenciador do IIS para o serviço FTP, você também precisará selecionar **Extensibilidade do FTP**.
5. Clique em **OK.**

## Instalando o FTP para IIS 7.0

### Pré-requisitos

Os seguintes itens são necessários para concluir os procedimentos nesta seção:

1. Você deve estar usando o Windows Server 2008.
2. Os Serviços de Informações da Internet 7.0 devem ser instalados.
3. Se você quiser gerenciar o novo servidor FTP usando a interface do usuário do IIS 7.0, a ferramenta de administração precisará ser instalada.
4. Você deve instalar o novo servidor FTP como administrador. (Consulte a seção **Baixar e Instalar** para saber mais.)
5. O IIS 7.0 dá suporte a um ambiente de configuração compartilhada, que deve ser desabilitado em cada servidor em uma fazenda de servidores antes de instalar o novo servidor FTP para cada nó.
   **Nota:** A configuração compartilhada pode ser reabilitada após a instalação do servidor FTP.
6. O servidor FTP fornecido no DVD do Windows Server 2008 deve ser desinstalado antes de instalar o novo servidor FTP.

### Baixando a versão certa para o servidor

Há dois pacotes para download separados para o novo servidor FTP; você precisará baixar o pacote apropriado para sua versão do Windows Server 2008:

- **Pacote de instalação de 32 bits**:

  - FTP 7.5 para IIS 7.0 (x86)
- **Pacote de instalação de 64 bits**:

  - FTP 7.5 para IIS 7.0 (x64)

### Iniciando o pacote de instalação

Você precisará executar o pacote de instalação como administrador. Isso pode ser feito por um dos seguintes métodos:

1. Faça logon em seu servidor usando a conta real chamada "Administrador", navegando até as páginas de download listadas acima ou clicando duas vezes no pacote de download se você o salvou no servidor.
2. Faça logon em uma conta com privilégios de administrador. Abra um prompt de comando clicando com o botão direito do mouse no item de menu Prompt de Comando, localizado no menu Acessórios dos programas do Windows, e selecione "Executar como administrador". Em seguida, digite o comando apropriado listado abaixo para sua versão do Windows para executar a instalação:

   - **Versões do Windows de 32 bits**:

     - msiexec /i FTP 7\_x86\_75.msi
   - **Versões do Windows de 64 bits**:

     - msiexec /i FTP 7\_x64\_75.msi

Observação

Uma das etapas acima é necessária porque o componente de segurança UAC (Controle de Conta de Usuário) nos sistemas operacionais Windows Vista e Windows Server 2008 impede o acesso ao seu arquivo applicationHost.config. Para obter mais informações sobre o UAC, consulte [Controle de Conta de Usuário](https://go.microsoft.com/fwlink/?LinkId=113664).

As etapas a seguir explicam todas as configurações necessárias para adicionar a publicação ftp para o site padrão.

### Percorrendo o processo de instalação

1. Quando o pacote de instalação for aberto, você deverá ver a tela a seguir. Clique em **Avançar** para continuar.  
   ![Captura de tela que mostra a página de boas-vindas do Assistente de Instalação.](installing-and-configuring-ftp-7-on-iis-7/_static/image1.jpg)
2. Na próxima tela, clique na caixa de seleção **Eu aceito** se você concordar com os termos de licença e clique em **Avançar**.  
   ![Captura de tela que mostra o contrato de licença do usuário final.](installing-and-configuring-ftp-7-on-iis-7/_static/image5.jpg)
3. A tela a seguir lista as opções de instalação. Escolha quais opções você deseja instalar na lista e clique em **Avançar**.

   - **Arquivos comuns**: essa opção inclui o arquivo de esquema. Ao instalar em um ambiente de servidor compartilhado, cada servidor na farm de servidores precisará ter essa opção instalada.
   - **Serviço de Publicação FTP**: essa opção inclui os principais componentes do serviço FTP. Essa opção é necessária para que o serviço FTP seja instalado no servidor.
   - **Suporte a código gerenciado**: esse é um componente opcional, mas os recursos que usam extensibilidade gerenciada exigem essa opção antes de usá-los, como ASP.NET e autenticação do gerenciador do IIS.
     **Nota:** Esse recurso não pode ser instalado no Windows Server 2008 Core.
   - **Recursos de administração**: essa opção instala a interface do usuário de gerenciamento do FTP 7. Isso requer que o gerenciador do IIS 7.0 e o .NET framework 2.0 sejam instalados.
     **Nota:** Esse recurso não pode ser instalado no Windows Server 2008 Core.  
     ![Captura de tela que mostra a página Configuração Personalizada do Assistente de Instalação.](installing-and-configuring-ftp-7-on-iis-7/_static/image9.jpg)
4. Na tela a seguir, clique em **Instalar** para começar a instalar as opções escolhidas na tela anterior.  
   ![Captura de tela que mostra a página Pronto para instalar do Assistente de Instalação.](installing-and-configuring-ftp-7-on-iis-7/_static/image13.jpg)
5. Quando a instalação for concluída, clique em **Ler anotações** para exibir o arquivo FTP README ou clique em **Concluir** para fechar a caixa de diálogo de instalação.  
   ![Captura de tela que mostra a página Assistente de Instalação Concluída.](installing-and-configuring-ftp-7-on-iis-7/_static/image17.jpg)

Observação

Se ocorrer um erro durante a instalação, você verá uma caixa de diálogo de erro. Consulte a seção **Solução de problemas de instalação** deste documento para obter mais informações.

### Solução de problemas de instalação

Quando a instalação do FTP 7 falhar por algum motivo, você deverá ver uma caixa de diálogo com um botão chamado "Log de instalação". Clicar no botão "Log de instalação" abrirá o log de instalação do MSI que foi criado durante a instalação. Você também pode habilitar manualmente o registro em log de instalação executando o comando apropriado listado abaixo para sua versão do Windows. Isso criará um arquivo de log que conterá informações sobre o processo de instalação:

- **Versões do Windows de 32 bits**:

  - msiexec /L FTP 7.log /I FTP 7\_x86\_75.msi
- **Versões do Windows de 64 bits**:

  - msiexec /L FTP 7.log /I FTP 7\_x64\_75.msi

Você pode analisar esse arquivo de log após uma instalação com falha para ajudar a determinar a causa da falha.

Clicar no botão "Informações online" na caixa de diálogo de erro iniciará o documento "Instalando e solucionando problemas do FTP 7.5" no navegador da Web.

Observação

Se você tentar instalar o pacote baixado em uma plataforma sem suporte, a seguinte caixa de diálogo será exibida:

![Captura de tela que mostra o aviso que aparece se você tentar instalar o pacote em uma plataforma sem suporte.](installing-and-configuring-ftp-7-on-iis-7/_static/image3.png)

## Problemas conhecidos nesta versão

Os seguintes problemas são conhecidos por existir nesta versão:

1. Embora os recursos baseados na Web possam ser delegados a gerenciadores remotos e adicionados a arquivos web.config usando a infraestrutura de configuração do IIS, os recursos ftp não podem ser delegados ou armazenados em arquivos web.config.
2. O ícone de um site Web/FTP combinado pode ser marcado com um ponto de interrogação, mesmo que o site esteja atualmente iniciado sem nenhum erro. Isso ocorre quando um site tem uma mistura de associações HTTP/FTP.
3. Depois de adicionar uma publicação FTP a um site, clicar no nó do site na visualização em árvore da ferramenta de gerenciamento do IIS pode não exibir os ícones de FTP. Para contornar esse problema, use um dos seguintes:

   - Clique em F5 para atualizar a ferramenta de gerenciamento do IIS.
   - Clique no nó Sites e clique duas vezes no nome do site.
   - Feche e abra novamente a ferramenta de gerenciamento do IIS.
4. Quando você adiciona um provedor personalizado aos padrões do site, ele aparece em cada site. No entanto, se você tentar remover ou modificar as configurações de um fornecedor personalizado no nível do site, o IIS criará uma seção <providers> vazia para o site, mas a configuração resultante de cada site não será alterada. Por exemplo, se o provedor personalizado estiver habilitado no padrão do site, você não poderá desabilitá-lo no nível do site. Para solucionar esse problema, abra o arquivo applicationHost.config como administrador e adicione um <elemento clear> à lista de provedores de autenticação personalizados. Em seguida, adicione manualmente o provedor personalizado às suas configurações. Por exemplo, para adicionar o provedor de autenticação personalizada do Gerenciador do IIS, você adicionaria configurações como o exemplo a seguir:

   ```
   <ftpServer>
      <security>
         <authentication>
            <customAuthentication>
               <providers>
                  <clear />
                  <add name="IisManagerAuth" enabled="true" />
               </providers>
            </customAuthentication>
         </authentication>
      </security>
   </ftpServer>
   ```
5. Os seguintes problemas são específicos para a versão do IIS 7.0:

   - O serviço FTP fornecido no DVD do Windows Server 2008 não deve ser instalado após a instalação do novo serviço FTP. O antigo serviço FTP não detecta que o novo serviço FTP foi instalado e executar ambos os serviços FTP ao mesmo tempo pode causar conflitos de porta.
   - O IIS 7 pode ser desinstalado após a instalação do novo serviço FTP e isso fará com que o novo serviço FTP falhe. Se o IIS for reinstalado, novas cópias dos arquivos de configuração do IIS serão criadas e o novo serviço FTP continuará falhando porque as informações de configuração do novo serviço FTP não estão mais nos arquivos de configuração do IIS. Para corrigir esse problema, execute novamente a configuração para o novo serviço FTP e escolha "Reparar".

## Introdução ao FTP 7.5

Para ajudar a começar a usar o novo servidor FTP, os seguintes passo a passo foram publicados:

- **Trabalhando com sites FTP**:

  - [Criando um novo site FTP](https://go.microsoft.com/fwlink/?LinkId=89115)
  - [Adicionar publicação FTP a um site existente](https://go.microsoft.com/fwlink/?LinkId=89116)
- **Configurando recursos de segurança**:

  - [Configurar o FTP por SSL](https://go.microsoft.com/fwlink/?LinkId=89117)
  - [Configurar o isolamento de usuário ftp](https://go.microsoft.com/fwlink/?LinkId=89118)
  - [Definir configurações de firewall de FTP](https://go.microsoft.com/fwlink/?LinkId=100090)
  - [Configurar a Autenticação do Gerenciador do IIS](https://go.microsoft.com/fwlink/?LinkId=100142)
- **Funcionalidades administrativas avançadas**:

  - [Configurar nomes de host virtual FTP](https://go.microsoft.com/fwlink/?LinkId=89119)
  - [Usando cotas de pasta FSRM com FTP](https://go.microsoft.com/fwlink/?LinkId=100092)

Além desses documentos, o arquivo de ajuda do novo servidor FTP contém uma grande quantidade de informações sobre o uso e a administração do novo servidor FTP. Para abrir o arquivo de ajuda, abra um dos recursos ftp no gerenciador do IIS e clique no item "Ajuda" no painel "Ações".

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
