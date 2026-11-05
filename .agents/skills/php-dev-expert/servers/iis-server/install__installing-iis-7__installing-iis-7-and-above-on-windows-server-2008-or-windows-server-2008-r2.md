# Instalando o IIS 7 no Windows Server 2008 ou no Windows Server 2008 R2 | Microsoft Learn

> **Fonte / Source:** https://learn.microsoft.com/pt-br/iis/install/installing-iis-7/installing-iis-7-and-above-on-windows-server-2008-or-windows-server-2008-r2

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

# Instalando o IIS 7 no Windows Server 2008 ou no Windows Server 2008 R2

Comentários

Se você optar por instalar o IIS manualmente, poderá usar este artigo para obter diretrizes. Você também pode se referir à [instalação e configuração do IIS 7 e superior](install.md).

O IIS é uma função de servidor Web da Microsoft incluída em todas as versões dos sistemas operacionais da Microsoft e também permite que os [Sites do Windows Azure](https://www.windowsazure.com/solutions/web/) forneçam PaaS (Plataforma como Serviço) robusta baseada em nuvem. A versão 7.0 do IIS está incluída no Windows Server® 2008 e no Windows Vista®. O IIS 7.5 é a função de servidor Web no Windows Server® 2008 R2 e no servidor Web no Windows® 7. O IIS 8.0 é a versão que faz parte do Windows Server 2012 e o Windows Server 2012 R2 inclui o IIS 8.5. Os sistemas operacionais Windows Server 2008 R2 e Windows Server 2008 têm todos os recursos do IIS necessários para dar suporte à hospedagem de conteúdo da Web em ambientes de produção. O Windows 7 e o Windows Vista também incluem recursos do IIS, mas os recursos disponíveis dependem das versões do sistema operacional.

O servidor Web foi reprojetado no [IIS 7.0](web-hosting__frequently-asked-questions-faq__general-iis7-questions.md) para permitir que você personalize um servidor adicionando ou removendo módulos para atender às suas necessidades específicas. Os módulos são recursos individuais que o servidor usa para processar solicitações. Por exemplo, o IIS 7.0 e o IIS 7.5 usam módulos de autenticação para autenticar credenciais do cliente e usar módulos de cache para gerenciar a atividade de cache. Ambas as versões do IIS também fornecem:

- Uma nova interface de gerenciamento. A interface permite que você altere de forma rápida e fácil as configurações de cada site. Também é possível editar as configurações de um site em um arquivo de configuração baseado em texto.
- A capacidade de compartilhar tarefas com os proprietários do site. Um hoster com vários sites pode delegar controle administrativo a desenvolvedores ou proprietários de conteúdo.

## Novidades no IIS 7.5

O IIS 7.0 e o IIS 7.5 são juntos conhecidos como IIS 7 ou IIS 7 e superiores; no entanto, o IIS 7.5 e o Windows Server 2008 R2 incluem vários novos recursos não encontrados no IIS 7.0:

- O Microsoft® ASP.NET é executado em instalações do Windows Server 2008 R2 Server Core.
- Algumas das extensões disponíveis para serem adicionadas à plataforma IIS 7.0 são integradas à plataforma IIS 7.5, incluindo:

  - Publicação FTP.
  - Publicação de WebDAV (Criação Distribuída e Controle de Versão) baseada na Web.
  - Snap-in do Windows PowerShell™ para IIS.
  - Módulos do Pacote de Administração do IIS.
- O IIS 7.5 inclui registro em log e rastreamento de configuração (o IIS 7.0 não inclui mecanismos de rastreamento internos para alterações de configuração).
- O IIS 7.5 inclui o Analisador de Práticas Recomendadas, uma ferramenta automatizada para ajudar a garantir a conformidade com as práticas recomendadas de segurança.

## Antes de começar

Verifique se você tem direitos administrativos de usuário no computador no qual planeja instalar o IIS 7 ou superior. Observe que, por padrão, você não terá direitos administrativos de usuário se estiver conectado como um usuário diferente do administrador interno, mesmo que tenha sido adicionado ao grupo de Administradores local no computador (este é um novo recurso de segurança no Windows Server 2008 chamado Administrador de Usuário Local).

Faça logon na conta de administrador interna ou invoque explicitamente aplicativos como administrador interno usando a ferramenta de linha de comando runas.

Observação

Você pode executar runas /user:administrator cmd.exe, de modo que cada aplicativo executado a partir dessa linha de comando tenha privilégios elevados, eliminando a necessidade de usar a sintaxe runas em cada comando.

Se você estiver conectado a uma conta diferente da conta de administrador local interna, poderá ver a caixa de diálogo de alerta de segurança a seguir.

![Captura de tela da caixa de diálogo Segurança do Windows.](installing-iis-7-and-above-on-windows-server-2008-or-windows-server-2008-r2/_static/image3.jpg)
  
*Figura 1: Segurança do Windows® (Controle de Conta de Usuário)*

## Instalar o IIS 7.5 no Windows Server 2008 R2

O IIS é uma das funções de servidor do Windows Server®. O IIS pode ser instalado por meio da GUI (interface gráfica do usuário) usando a nova interface do Gerenciador do Servidor após a instalação do sistema operacional Windows Server.

O Gerenciador de Servidores fornece um único painel para instalar ou desinstalar recursos e funções de servidor. O Gerenciador de Servidores também fornece uma visão geral de todas as funções e recursos atualmente instalados. Quando o IIS é escolhido do Gerenciador de Servidores, os componentes e serviços básicos necessários para o IIS são selecionados automaticamente.

1. Clique **Iniciar**>**Todos os Programas**>**Ferramentas Administrativas**>**Gerenciador de Servidores**.

   ![Captura de tela do painel do Gerenciador do Servidor.](installing-iis-7-and-above-on-windows-server-2008-or-windows-server-2008-r2/_static/image5.jpg)
     
   *Figura 2: Gerenciador de Servidores*
2. Na janela **Gerenciador do Servidor** , role para baixo até o **Resumo de Funções** e clique em **Adicionar Funções**. O **Assistente para Adicionar Funções** começará com uma página **Antes de Começar** . O assistente solicita a verificação do seguinte:

   - A conta de administrador tem uma senha forte.
   - As configurações de rede, como endereços IP, são configuradas.
   - As atualizações de segurança mais recentes do Windows® Update estão instaladas.
3. Selecione **Servidor Web (IIS)** na página **Selecionar Funções de Servidor** . Uma página introdutória será aberta com links para obter mais informações.

   Observação

   Ao usar o **Assistente para Adicionar Funções para instalar** o IIS, você obtém a instalação padrão, que tem um conjunto mínimo de serviços de função. Se você precisar de serviços de função do IIS adicionais, como **Desenvolvimento de Aplicativos** ou **Saúde e Diagnóstico**, marque as caixas de seleção associadas a esses recursos na página **Selecionar Serviços de Função** do assistente.

   ![Captura de tela do Assistente para Adicionar Funções na página Selecionar Serviços de Função. O I S do Servidor Web está selecionado e realçado no menu.](installing-iis-7-and-above-on-windows-server-2008-or-windows-server-2008-r2/_static/image7.jpg)
     
   *Figura 3: Selecionar funções de servidor*
4. Selecione os serviços do IIS a serem instalados na página **Selecionar Serviços de Função** . Adicione apenas os módulos necessários. Nesse caso, ASP.NET está selecionado e uma descrição de ASP.NET aparece no painel direito. Depois que os módulos desejados forem adicionados, clique em **Avançar**.

   ![Captura de tela da página Selecionar Serviços de Funções no Assistente para Adicionar Funções. ASP.NET está selecionado e realçado.](installing-iis-7-and-above-on-windows-server-2008-or-windows-server-2008-r2/_static/image9.jpg)
     
   *Figura 4: Selecionar Serviços de Função*
5. Adicione todos os serviços de função necessários.

   ![Captura de tela da página de aviso do Assistente de Adição de Funções.](installing-iis-7-and-above-on-windows-server-2008-or-windows-server-2008-r2/_static/image11.jpg)
     
   *Figura 5: Página de aviso do Assistente*
6. O IIS agora está instalado com uma configuração padrão para hospedar ASP.NET no Windows Server. Clique em **Fechar** para concluir o processo.

   ![Captura de tela da página de Resultados da Instalação do Assistente de Adição de Funções.](installing-iis-7-and-above-on-windows-server-2008-or-windows-server-2008-r2/_static/image13.jpg)
     
   *Figura 6: página Resultados da Instalação*
7. Confirme se o servidor Web funciona usando `http://localhost`.

   ![Captura de tela da janela do navegador Internet Explorer exibindo a tela do site padrão.](installing-iis-7-and-above-on-windows-server-2008-or-windows-server-2008-r2/_static/image15.jpg)
     
   *Figura 7: site padrão*

Observação

Instale apenas os serviços IIS absolutamente necessários para minimizar o volume de instalação do IIS. Isso também minimiza a superfície de ataque, que é um dos benefícios do IIS 7 e superior.

## Usar um script para instalar o IIS 7.5 no Windows Server 2008 R2

Você também pode usar um script para instalar o IIS 7.5. Observe que, se você usar esse script, obterá a instalação completa do IIS, que instala todos os pacotes de recursos disponíveis. Se houver pacotes de recursos que você não precisa, edite o script para instalar apenas os pacotes necessários. Para obter mais informações, consulte [Como instalar o IIS 7.5 no Windows Server 2008 R2](https://learn.microsoft.com/pt-br/previous-versions/windows/it-pro/windows-server-2008-R2-and-2008/cc771209(v=ws.11)).

Para instalar o IIS 7.5 com um script, digite o seguinte em um prompt de comando:

```
CMD /C START /w PKGMGR.EXE /l:log.etw /iu:IIS-WebServerRole;IIS-WebServer;IIS-CommonHttpFeatures;IIS-StaticContent;IIS-DefaultDocument;IIS-DirectoryBrowsing;IIS-HttpErrors;IIS-HttpRedirect;IIS-ApplicationDevelopment;IIS-ASP;IIS-CGI;IIS-ISAPIExtensions;IIS-ISAPIFilter;IIS-ServerSideIncludes;IIS-HealthAndDiagnostics;IIS-HttpLogging;IIS-LoggingLibraries;IIS-RequestMonitor;IIS-HttpTracing;IIS-CustomLogging;IIS-ODBCLogging;IIS-Security;IIS-BasicAuthentication;IIS-WindowsAuthentication;IIS-DigestAuthentication;IIS-ClientCertificateMappingAuthentication;IIS-IISCertificateMappingAuthentication;IIS-URLAuthorization;IIS-RequestFiltering;IIS-IPSecurity;IIS-Performance;IIS-HttpCompressionStatic;IIS-HttpCompressionDynamic;IIS-WebServerManagementTools;IIS-ManagementScriptingTools;IIS-IIS6ManagementCompatibility;IIS-Metabase;IIS-WMICompatibility;IIS-LegacyScripts;WAS-WindowsActivationService;WAS-ProcessModel;IIS-FTPServer;IIS-FTPSvc;IIS-FTPExtensibility;IIS-WebDAV;IIS-ASPNET;IIS-NetFxExtensibility;WAS-NetFxEnvironment;WAS-ConfigurationAPI;IIS-ManagementService;MicrosoftWindowsPowerShell
```

## Instalação autônoma do IIS 7.0 no Windows Server 2008

Automatizar a instalação do IIS usando scripts autônomos será muito útil se você precisar implantar vários servidores Web e quiser garantir que cada um dos servidores Web esteja configurado com componentes e serviços idênticos.

Nos sistemas operacionais Windows Server 2008 e Windows Vista, Pkgmgr.exe é usado para scripts autônomos, permitindo que você instale ou desinstale recursos opcionais de um prompt de comando ou scripts. (Observação: Pkgmgr.exe substitui Sysocmgr.exe que foi usado no Windows Server® 2003.) Para obter instruções e uma visão geral de Pkgmgr.exe, consulte [Como instalar o IIS 7.0 e superior na linha de comando](install__installing-iis-7__installing-iis-from-the-command-line.md). Consulte também [Unattended Setup para instalar o IIS 7.0 e superior](install__installing-iis-7__using-unattended-setup-to-install-iis.md). Observe que, para usar Pkgmgr.exe, você deve verificar se tem direitos administrativos de usuário no computador.

## Instalar o IIS 7.0 no Windows Server 2008

1. Para iniciar o Gerenciador de Servidores, clique em **Menu Iniciar**>**Todos os Programas**>**Ferramentas Administrativas**>**Gerenciador de Servidores**. A janela Gerenciador do Servidor é aberta.

   ![Captura de tela da janela gerenciador do servidor.](installing-iis-7-and-above-on-windows-server-2008-or-windows-server-2008-r2/_static/image17.jpg)
     
   *Figura 8: Gerenciador de Servidores*
2. Na janela **Gerenciador do Servidor**, selecione **Papéis.** A Visão Geral do Resumo de Papéis é exibida.

   ![Captura de tela da janela Gerenciador de Servidores com a página Funções exibindo Resumo de Função.](installing-iis-7-and-above-on-windows-server-2008-or-windows-server-2008-r2/_static/image19.jpg)
     
   *Figura 9: Assistente de Adição de Funções*
3. Clique **em Adicionar Funções.** O Assistente para Adicionar Funções é aberto. Clique em **Avançar** para selecionar funções a serem instaladas.

   ![Captura de tela do Assistente para Adicionar Funções com a página Antes de Começar exibida.](installing-iis-7-and-above-on-windows-server-2008-or-windows-server-2008-r2/_static/image21.jpg)
     
   *Figura 10: Introdução ao Assistente de Adição de Funções*
4. Selecione **Servidor Web (IIS)**.

   ![Captura de tela do Assistente para Adicionar Funções com a página Selecionar Funções de Servidor exibida. Web Server IIS está realçado.](installing-iis-7-and-above-on-windows-server-2008-or-windows-server-2008-r2/_static/image23.jpg)
     
   *Figura 11: Selecionar Servidor Web (IIS) no Assistente para Adicionar Funções*
5. O Assistente para Adicionar Funções notifica você sobre as dependências necessárias; Como o IIS depende do recurso WAS (Serviço de Ativação de Processo do Windows), a caixa de diálogo informativa a seguir é exibida. Clique em **Adicionar Serviços de Função Necessários** para continuar.

   ![Captura de tela da caixa de diálogo do Assistente para Adicionar Funções.](installing-iis-7-and-above-on-windows-server-2008-or-windows-server-2008-r2/_static/image25.jpg)
     
   *Figura 12: Adicionar dependências*
6. O Servidor Web agora está selecionado para instalação. A caixa de diálogo Selecionar Funções do Servidor é aberta. Clique em **Avançar** para continuar.

   ![Captura de tela da página do Assistente de Adição de Funções Seleção de Funções de Servidor. O Servidor Web IIS está realçado e selecionado na lista.](installing-iis-7-and-above-on-windows-server-2008-or-windows-server-2008-r2/_static/image1.png)
     
   *Figura 13: Servidor Web selecionado (IIS)*
7. A caixa de diálogo e as informações a seguir são exibidas. Clique em **Avançar** para continuar.

   ![Captura de tela da caixa de diálogo do Assistente para Adicionar Funções na página do Servidor Web I I S.](installing-iis-7-and-above-on-windows-server-2008-or-windows-server-2008-r2/_static/image3.png)
     
   *Figura 14: Introdução à caixa de diálogo servidor Web*
8. O Assistente para Adicionar Funções exibe uma lista de todos os recursos do IIS 7.0 disponíveis para instalação, conforme mostrado abaixo. Observe que os recursos que compõem a instalação padrão são pré-selecionados.

   ![Captura de tela da página do Assistente para Adicionar Funções, selecione a página de Serviços de Função.](installing-iis-7-and-above-on-windows-server-2008-or-windows-server-2008-r2/_static/image5.png)
     
   *Figura 15: Recursos do servidor Web listados*
9. Para instalar apenas os recursos padrão do IIS 7.0, clique no botão **Instalar** e vá para a Etapa 14. Se você precisar instalar recursos adicionais, prossiga para a etapa 10.
10. Para este exemplo, instalamos recursos adicionais do IIS. Marque a caixa de seleção para ASP.NET. O Assistente avisa se a adição de um recurso do IIS também fará com que outros recursos sejam instalados.

    ![Captura de tela da caixa de diálogo de alerta do Assistente para Adicionar Funções.](installing-iis-7-and-above-on-windows-server-2008-or-windows-server-2008-r2/_static/image7.png)
      
    *Figura 16: Informações de dependência*
11. Clique em **Adicionar Serviços de Função Requeridos** para continuar.
12. Continue selecionando recursos adicionais dos Serviços de Função do IIS a serem instalados.

    ![Captura de tela do Assistente para Adicionar Funções na guia Serviços de Função. ASP .Net é realçado no menu expandido.](installing-iis-7-and-above-on-windows-server-2008-or-windows-server-2008-r2/_static/image9.png)
      
    *Figura 17: Adicionar recursos para o servidor Web*
13. Quando você tiver selecionado todos os recursos necessários, clique em **Avançar** para continuar.
14. O Assistente fornece um resumo do que será instalado.

    ![Captura de tela do Assistente de Adição de Funções na página de Confirmação das Opções de Instalação.](installing-iis-7-and-above-on-windows-server-2008-or-windows-server-2008-r2/_static/image27.jpg)
      
    *Figura 18: Resumo dos recursos*
15. Clique **em Instalar** para continuar. A caixa de diálogo Progresso da Instalação é aberta.

    ![Captura de tela da caixa de diálogo de Progresso da Instalação do Assistente de Adicionar Funções.](installing-iis-7-and-above-on-windows-server-2008-or-windows-server-2008-r2/_static/image11.png)
      
    *Figura 19: Progresso da Instalação*
16. Quando a instalação do IIS 7.0 for concluída, a caixa de diálogo a seguir será aberta. Clique **em Fechar** para retornar ao Gerenciador de Servidores.

    ![Captura de tela da página de Resultados da Instalação no Assistente de Adição de Funções.](installing-iis-7-and-above-on-windows-server-2008-or-windows-server-2008-r2/_static/image13.png)
      
    *Figura 20: Resumo da Instalação*
17. Agora você pode executar uma verificação rápida para verificar se o IIS 7.0 está instalado. Inicie o navegador da Web **do Windows® Internet Explorer®** e insira o endereço `http://localhost`. Você deve ver a página padrão do IIS "Bem-vindo".

## Consulte também

- [Instalando e configurando o WebDAV no IIS 7.0 e superior](install__installing-publishing-technologies__installing-and-configuring-webdav-on-iis.md)
- [Serviços de Função Disponíveis do Servidor Web (IIS) no IIS 7.5](https://learn.microsoft.com/pt-br/previous-versions/windows/it-pro/windows-server-2008-R2-and-2008/cc753473(v=ws.11))
- [Instalando o IIS 7.0 no Windows Server 2008](https://learn.microsoft.com/pt-br/previous-versions/windows/it-pro/windows-server-2008-R2-and-2008/cc771209(v=ws.10))
- [Editando arquivos de configuração](get-started__planning-your-iis-architecture__editing-configuration-files.md)
- [Estendendo a configuração do IIS](develop__extending-iis-configuration__extending-iis-configuration.md)

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
