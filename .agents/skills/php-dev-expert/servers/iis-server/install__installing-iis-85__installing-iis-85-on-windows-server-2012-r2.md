# Instalar o IIS 8.5 no Windows Server 2012 R2 | Microsoft Learn

> **Fonte / Source:** https://learn.microsoft.com/pt-br/iis/install/installing-iis-85/installing-iis-85-on-windows-server-2012-r2

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

# Instalar o IIS 8.5 no Windows Server 2012 R2

Comentários

Este artigo descreve como instalar o Serviços de Informações da Internet (IIS) 8.5 no Windows Server ® 2012 R2. O IIS é a função de servidor Web no Windows Server 2012 R2. O sistema operacional Windows Server 2012 R2 tem todos os recursos do IIS necessários para dar suporte à hospedagem de conteúdo da Web em ambientes de produção. O Windows 8 também inclui recursos do IIS, mas a disponibilidade de recursos depende da versão do sistema operacional.

Observação

Você pode usar os procedimentos neste documento para instalar o IIS 8.0 ou o IIS 8.5.

O servidor Web tem um design modular que permite personalizar um servidor adicionando ou removendo módulos para atender às suas necessidades específicas. A seção [**Instalar o IIS 8.5 no Windows Server 2012 R2**](#InstallIIS85onWindowsServer2012R2) descreve como instalar módulos e a seção [**Módulos no IIS 8.5**](#ModulesinIIS85) abaixo descreve a funcionalidade que cada módulo fornece e quais módulos são instalados por padrão.

## Novidades no IIS 8.5

O IIS 8.5 inclui vários novos recursos não encontrados no IIS 8.0 ou inferior:

- Registro em log aprimorado. Um administrador pode habilitar o registro em log de campos personalizados adicionais de cabeçalhos de solicitação ou resposta ou de variáveis de servidor.
- Fazer logon no rastreamento de eventos para Windows. Um administrador pode habilitar o envio de informações de log para o ETW (Rastreamento de Eventos para Windows).
- Ativação dinâmica do Site. Se houver um grande número de sites configurados (100 ou mais, por padrão), o serviço não ativará nenhum dos sites quando o serviço for iniciado.
- Página de saída do processo de trabalho ocioso. Um administrador pode permitir que um processo de trabalho ocioso seja suspenso em vez de encerrado.

Para obter mais informações sobre esses recursos, consulte [As novidades no IIS 8.5](get-started.md).

Para obter informações sobre novos recursos no IIS 8.0, confira [as novidades no IIS 8.0](get-started__whats-new-in-iis-8.md).

## Antes de começar

Verifique se você tem direitos administrativos de usuário no computador no qual planeja instalar o IIS 8.5. Observe que, por padrão, você não terá direitos administrativos de usuário se estiver conectado como um usuário diferente do administrador interno, mesmo que tenha sido adicionado ao grupo de Administradores local no computador.

Faça logon na conta de administrador interna ou invoque explicitamente aplicativos como administrador interno usando a ferramenta de linha de comando **runas** .

Observação

Você pode executar **runas /user:administrator cmd.exe** para que cada aplicativo executado a partir dessa linha de comando seja elevado, eliminando a necessidade de usar a sintaxe **runas** dessa linha de comando.

Se você estiver conectado a uma conta diferente da conta de administrador local interna, poderá ver a caixa de diálogo de alerta de segurança a seguir.

![Uma captura de tela que mostra a caixa de diálogo Alerta de Segurança.](installing-iis-85-on-windows-server-2012-r2/_static/image1.jpg)

## Instalar o IIS 8.5 no Windows Server 2012 R2

O IIS é uma das funções de servidor no Windows Server 2012 R2, denominado IIS (Servidor Web). Você pode usar o seguinte para instalar o IIS:

- A interface do usuário do Gerenciador do Servidor no Windows Server 2012 R2
- Uma instalação de linha de comando usando DISM (Serviço e Gerenciamento de Imagem de Implantação)
- Uma instalação de linha de comando usando cmdlets do PowerShell

Observação

O IIS também pode ser instalado no Windows 8 por meio da caixa de diálogo **Ativar ou desativar recursos do Windows** nas **configurações de Programas e Recursos** do Painel de Controle.

### Instalar o IIS 8.5 usando o Gerenciador de Servidores

O Gerenciador de Servidores fornece um único painel para instalar ou desinstalar funções de servidor, serviços de função e recursos. O Gerenciador de Servidores também fornece uma visão geral de todas as funções e recursos atualmente instalados.

Quando você instala o IIS 8.5 usando o Windows Server 2012 R2 Gerenciador do Servidor, as etapas executadas são diferentes quando você instala o IIS pela primeira vez, em vez de quando você adiciona funções, serviços ou recursos a uma instalação existente do IIS. Os dois procedimentos são fornecidos abaixo. Procedimentos diferentes também são usados para adicionar e remover funções, serviços de função e recursos. Você não pode adicionar e remover da mesma interface do usuário

Para obter mais informações sobre como executar os assistentes de instalação no Gerenciador de Servidores, consulte [Instalar ou Desinstalar Funções, Serviços de Função ou Recursos](https://learn.microsoft.com/pt-br/previous-versions/windows/it-pro/windows-server-2012-R2-and-2012/hh831809(v=ws.11)).

#### Instalar o IIS 8.5 pela primeira vez no Gerenciador de Servidores

Quando a função servidor Web (interface do usuário) é escolhida pela primeira vez no **Assistente para Adicionar Funções e Recursos** no Gerenciador de Servidores, os componentes e serviços básicos necessários para o IIS são selecionados automaticamente. O procedimento a seguir instalará os Serviços de Informações da Internet em um servidor físico em execução quando o IIS ainda não tiver sido instalado. Para alterar uma instalação existente do IIS, execute o próximo procedimento, instale serviços de função adicionais para o IIS. Esses dois procedimentos envolvem etapas diferentes.

1. Abra o Gerenciador do Servidor clicando no ícone gerenciador do **servidor** na área de trabalho.
2. Na janela **Gerenciador do Servidor** , com o **Painel** e o **Início Rápido** selecionados, clique em **Adicionar funções e recursos** ou clique no menu **Gerenciar** e clique **em Adicionar Funções e Recursos**. O Assistente para Adicionar Funções e Recursos começará com uma página **Antes de Começar** . O assistente solicita a verificação do seguinte:

   - A conta de administrador tem uma senha forte.
   - As configurações de rede, como endereços IP, são configuradas.
   - As atualizações de segurança mais atuais do Windows® Update são instaladas.
3. Na página **Antes de começar**, clique em **Seguinte**.
4. Na página **Tipo de Instalação** , selecione **instalação baseada em função ou recurso** para configurar um único servidor. Clique em **Próximo**.

   ![Uma captura de tela que mostra a página Tipo de Instalação no Windows Server 2012.](installing-iis-85-on-windows-server-2012-r2/_static/image2.jpg)
5. Na página **Seleção do Servidor** , **selecione Um servidor no pool de servidores** e selecione um servidor; ou **selecione Selecionar um servidor de disco rígido virtual**, selecione um servidor para montar o VHD e selecione um arquivo VHD. Clique em **Próximo**.

   Observação

   Para se conectar ao disco rígido virtual, a máquina virtual deve ser desativada e desconectada. Se você selecionar um arquivo VHD de um compartilhamento de rede, esse compartilhamento deverá conceder permissões de leitura e gravação à conta do computador (sistema local) do servidor selecionado para montar o VHD (o acesso à conta somente do usuário não é suficiente).

   Observação

   Os servidores em um pool de servidores estarão disponíveis somente se tiverem sido adicionados pela Adição de outros servidores para gerenciar o comando no Gerenciador de Servidores.

   ![Uma captura de tela que mostra a página Seleção do Servidor.](installing-iis-85-on-windows-server-2012-r2/_static/image3.jpg)
6. Na página **Funções do Servidor** , selecione **Servidor Web (IIS)**.

   ![Uma captura de tela que mostra a página Funções do Servidor no Windows Server 2012.](installing-iis-85-on-windows-server-2012-r2/_static/image4.jpg)
7. No assistente **Adicionar Funções e Recursos** , clique em **Adicionar Recursos** se quiser instalar o Console de Gerenciamento do IIS. Se você não quiser instalar o Console de Gerenciamento, desmarque **Incluir ferramentas de gerenciamento (se aplicável)** e clique em **Continuar**.

   ![Uma captura de tela que mostra a página Adicionar Recursos no Windows Server 2012.](installing-iis-85-on-windows-server-2012-r2/_static/image5.jpg)
8. Na página **Funções do Servidor** , clique em **Avançar**.

   Observação

   Os recursos necessários para os serviços de função padrão das Ferramentas de Gerenciamento e do Console de Gerenciamento do IIS serão pré-selecionados na página **Recursos** .
9. Na página **Recursos** , selecione todos os recursos que você deseja instalar e clique em **Avançar**. Observe que você não precisa selecionar nenhum recurso nesta página para instalar o IIS. A instalação do IIS selecionará os recursos necessários.

   ![Uma captura de tela que mostra a página Recursos no Windows Server 2012.](installing-iis-85-on-windows-server-2012-r2/_static/image6.jpg)
10. Na página **Função de Servidor Web (IIS)**, clique em **Avançar**.
11. Na página **Serviços de Função** , selecione quaisquer serviços de função adicionais que você deseja instalar.

    Observação

    Ao instalar o IIS pela primeira vez selecionando o **Servidor Web (IIS),** você obterá pelo menos a instalação padrão que inclui um conjunto mínimo de serviços de função. Neste ponto, você pode ver que esses serviços padrão são pré-selecionados na página Funções do Servidor. Para obter uma lista das funções de servidor disponíveis e quais funções são instaladas por padrão, consulte [**Módulos no IIS 8.5**](#ModulesinIIS85). Você poderá selecionar mais serviços de função mais adiante neste procedimento.

    Observação

    Você também pode desmarcar serviços de função que foram selecionados por padrão quando selecionou o **Servidor Web**. No entanto, pelo menos um serviço de função deve ser selecionado para que o Servidor Web seja selecionado e instalado.

    ![Uma captura de tela que mostra a página de Serviços de Funções.](installing-iis-85-on-windows-server-2012-r2/_static/image7.jpg)
12. Se você selecionou um serviço de função que exige que outros serviços ou recursos de função sejam instalados, uma página será aberta indicando os serviços de função ou os recursos a serem instalados. Deixe **Incluir ferramentas de gerenciamento (se aplicável)** selecionado para escolher as ferramentas de gerenciamento de instalação associadas à função de servidor. Talvez você não precise das ferramentas de gerenciamento no servidor de destino se planeja gerenciar a função remotamente. Clique em **Adicionar Recursos** para adicionar os recursos ou serviços de função necessários.
13. Depois de adicionar os serviços de função necessários na página **Serviços de Função** , clique em **Avançar**.
14. Na página **Confirmação**, verifique as funções de serviço e os recursos selecionados. Selecione **Reiniciar o servidor de destino automaticamente, se necessário** , para reiniciar o servidor de destino se as configurações precisarem ter efeito imediato. Para salvar as informações de configuração em um arquivo baseado em XML que você pode usar para instalações autônomas com o Windows PowerShell, selecione **Exportar configurações**, vá para o caminho apropriado na caixa de diálogo **Salvar como** , insira um nome de arquivo e clique em **Salvar**.

    Quando estiver pronto para iniciar o processo de instalação na página **Confirmação** , clique em **Instalar**.

    ![Uma captura de tela que mostra a página Confirmação no Windows Server 2012.](installing-iis-85-on-windows-server-2012-r2/_static/image8.jpg)
15. A página **Progresso da Instalação** é exibida. Você pode fechar o assistente sem interromper a execução de tarefas. Você pode exibir o progresso da tarefa ou abrir a página novamente clicando em **Notificações** na área de notificação e clicando em **Detalhes da Tarefa**.

    ![Uma captura de tela que mostra a página Progresso no Windows Server 2012.](installing-iis-85-on-windows-server-2012-r2/_static/image9.jpg)
16. Na página **Resultados** , verifique se a instalação foi bem-sucedida e clique em **Fechar**.

    ![Uma captura de tela que mostra a página Resultados no Windows Server 2012.](installing-iis-85-on-windows-server-2012-r2/_static/image10.jpg)
17. Confirme se o servidor Web funciona abrindo um navegador da Web e verificando se a página da Web padrão a seguir é exibida quando você usa o `http://localhost` endereço.

    ![Uma captura de tela que mostra a página da Web padrão no Windows Server 2012.](installing-iis-85-on-windows-server-2012-r2/_static/image1.png)

#### Instalar serviços de função adicionais do IIS 8.5 no Gerenciador de Servidores

Depois de instalar a função servidor Web em um servidor físico em execução pela primeira vez, você poderá executar o processo de instalação novamente para instalar funções, serviços de função e recursos adicionais.

1. Abra o Gerenciador do Servidor clicando no ícone gerenciador do **servidor** na área de trabalho.
2. Na janela **Gerenciador do Servidor** , com o **Painel** e o **Início Rápido** selecionados, clique em **Adicionar funções e recursos** ou clique no menu **Gerenciar** e clique **em Adicionar Funções e Recursos**. Assistente de Adicionar Papéis e Recursos começará com uma página **Antes de Começar**. O assistente solicita a verificação do seguinte:

   - A conta de administrador tem uma senha forte.
   - As configurações de rede, como endereços IP, são configuradas.
   - As atualizações de segurança mais atuais do Windows® Update são instaladas.
3. Na página **Antes de começar**, clique em **Seguinte**.
4. Na página **Tipo de Instalação** , selecione **instalação baseada em função ou recurso** para configurar um único servidor. Clique em **Próximo**.

   ![Uma captura de tela que mostra a página Tipo de instalação.](installing-iis-85-on-windows-server-2012-r2/_static/image11.jpg)
5. Na página **Seleção do Servidor** , **selecione Um servidor no pool de servidores** e selecione um servidor; ou **selecione Selecionar um servidor de disco rígido virtual**, selecione o servidor no qual montar o VHD e selecione o arquivo VHD. Clique em **Próximo**.

   Observação

   Para se conectar ao disco rígido virtual, a máquina virtual deve ser desativada e desconectada. Se você selecionar um arquivo VHD de um compartilhamento de rede, esse compartilhamento deverá conceder permissões de leitura e gravação à conta do computador (sistema local) do servidor selecionado para montar o VHD (o acesso à conta somente do usuário não é suficiente).

   Observação

   Os servidores em um pool de servidores estarão disponíveis somente se tiverem sido **adicionados pelo comando 'Adicionar outros servidores para gerenciar'** no Gerenciador de Servidores.

   Observação

   Na página **Funções do Servidor** , o **Servidor Web (IIS)** será selecionado quando o IIS 8.0 já tiver sido instalado. Se o **servidor Web (IIS)** não estiver selecionado, execute o procedimento na [**Instalação do IIS 8.5 pela primeira vez no Gerenciador de Servidores**](#InstallIIS85forthefirsttimeintheServerManager).

   ![Uma captura de tela que mostra a página de seleção do servidor no Windows Server 2012.](installing-iis-85-on-windows-server-2012-r2/_static/image12.jpg)
6. Na página **Funções do Servidor** , abra a árvore **do Servidor Web (IIS)** até ver um serviço de função que você deseja instalar. Selecione o serviço de função.

   Observação

   Essas funções, serviços e recursos que já foram instalados serão identificados por "Instalado" em parênteses após o nome e o nome será esmaecido. Para remover uma função, serviço ou recurso, consulte [**Desinstalar o IIS 8.5 usando o Gerenciador de Servidores**](#UninstallIIS85UsingtheServerManager). No entanto, observe que você pode expandir as entradas de nível inferior em um nó mesmo quando o nó está esmaecido.

   Observação

   Para obter uma lista das funções de servidor disponíveis e quais funções são instaladas por padrão, consulte [**Módulos no IIS 8.5**](#ModulesinIIS85) abaixo.

   ![Uma captura de tela que mostra a página funções do servidor.](installing-iis-85-on-windows-server-2012-r2/_static/image13.jpg)
7. Se o serviço de função selecionado exigir que outros serviços ou recursos de função sejam instalados, uma página **Adicionar Recursos** será aberta listando os recursos ou serviços de função necessários. Deixe **Incluir ferramentas de gerenciamento (se aplicável)** selecionado para escolher as ferramentas de gerenciamento de instalação associadas à função de servidor. Talvez você não precise das ferramentas de gerenciamento no servidor de destino se planeja gerenciar a função remotamente. Clique em **Adicionar Recursos** para adicionar os serviços ou recursos de função necessários à instalação.

   ![Uma captura de tela que mostra a página Adicionar Recursos.](installing-iis-85-on-windows-server-2012-r2/_static/image14.jpg)
8. Se você precisar de serviços de função adicionais, repita as etapas 6 e 7.

   Observação

   Adicione apenas os módulos necessários para minimizar o volume de instalação do IIS e a superfície de ataque.

   Quando você tiver selecionado todos os serviços de função necessários e suas dependências, na página **Funções do Servidor** , clique em **Avançar**.
9. Na página **Recursos** , selecione todos os recursos que você precisa instalar. Todos os recursos necessários à instalação para os serviços de função que você selecionou na etapa 6 já estarão selecionados. Clique em **Próximo**.

   ![Uma captura de tela que mostra a página Recursos.](installing-iis-85-on-windows-server-2012-r2/_static/image15.jpg)
10. Na página **Confirmação**, verifique as funções de serviço e os recursos selecionados. Selecione **Reiniciar o servidor de destino automaticamente, se necessário** , para reiniciar o servidor de destino se as configurações precisarem ter efeito imediato. Para salvar as informações de configuração em um arquivo baseado em XML que você pode usar para instalações autônomas com o Windows PowerShell, selecione **Exportar configurações**, vá para o caminho apropriado na caixa de diálogo **Salvar como** , insira um nome de arquivo e clique em **Salvar**.

    Quando estiver pronto para iniciar o processo de instalação na página **Confirmação** , clique em **Instalar**.

    ![Uma captura de tela que mostra a página Confirmação.](installing-iis-85-on-windows-server-2012-r2/_static/image16.jpg)
11. A página **Progresso da Instalação** é exibida. Você pode fechar o assistente sem interromper a execução de tarefas. Você pode exibir o progresso da tarefa ou abrir a página novamente clicando em **Notificações** na área de notificação e clicando em **Detalhes da Tarefa**.

    ![Uma captura de tela que mostra a página Progresso.](installing-iis-85-on-windows-server-2012-r2/_static/image17.jpg)
12. Na página **Resultados** , verifique se a instalação foi bem-sucedida e clique em **Fechar**.

    ![Uma captura de tela que mostra a página Resultados.](installing-iis-85-on-windows-server-2012-r2/_static/image18.jpg)
13. Confirme que o servidor Web está funcionando abrindo um navegador da Web e verificando se a seguinte página da Web padrão aparece quando você usa o endereço `http://localhost`.

    ![Uma captura de tela que mostra a página da Web padrão.](installing-iis-85-on-windows-server-2012-r2/_static/image2.png)

#### Desinstalar o IIS 8.5 usando o Gerenciador de Servidores

No assistente Adicionar Funções e Recursos do Gerenciador de Servidores, você não pode excluir recursos existentes que já foram instalados. Para excluir funções e recursos, use o assistente Remover Funções e Recursos do Gerenciador de Servidores. Você pode remover uma função individual, um serviço de função, ou um recurso desmarcando-o no assistente, ou desinstalar todo o IIS desmarcando a **Função Servidor Web do IIS**.

1. Abra o Gerenciador do Servidor clicando no ícone gerenciador do **servidor** na área de trabalho.
2. Clique em **Gerenciar** na parte superior do Gerenciador de Servidores e clique em **Remover Funções e Recursos**.

   ![Uma captura de tela que mostra o comando Remover funções e recursos.](installing-iis-85-on-windows-server-2012-r2/_static/image19.jpg)
3. Na página **Antes de começar** , clique em **Avançar**.
4. Na página **Seleção do Servidor** , selecione o servidor no pool de servidores e clique em **Avançar**.

   ![Uma captura de tela que mostra a página de seleção do servidor.](installing-iis-85-on-windows-server-2012-r2/_static/image20.jpg)
5. Na página **Remover Funções do Servidor**, desmarque a caixa de seleção de qualquer função de servidor ou serviço de função que deseja remover.

   ![Uma captura de tela que mostra a página Remover funções de servidor.](installing-iis-85-on-windows-server-2012-r2/_static/image21.jpg)
6. Se você desmarcar um serviço de função que tenha dependências de recursos, a caixa de diálogo **Remover Recursos** será exibida mostrando as dependências. Clique em **Remover Recursos** para removê-los. Você pode remover todo o IIS desmarcando o **Servidor Web (IIS)**.

   ![Uma captura de tela que mostra a página de Remover Recursos do IIS 8.5.](installing-iis-85-on-windows-server-2012-r2/_static/image22.jpg)
7. Na página **Remover Funções do Servidor**, selecione qualquer outra função ou serviço de função que você deseja remover, e clique em **Avançar**.
8. Na página **Recursos** , desmarque qualquer recurso que você deseja remover. Se você desmarcar um recurso que tenha dependências de recurso, uma caixa de diálogo será exibida mostrando as dependências. Clique em **Remover Recursos** para removê-los. Na página **Recursos**, clique em **Seguinte**.

   ![Uma captura de tela que mostra a página Remover funcionalidades.](installing-iis-85-on-windows-server-2012-r2/_static/image23.jpg)
9. Na página **Confirmação** , verifique se as funções, os serviços de função e os recursos a serem removidos estão corretos e clique em **Remover**.

   Observação

   É recomendável que você faça uma reinicialização se for solicitado a fazê-lo, a menos que você tenha outras atividades que deseja fazer antes que a reinicialização ocorra. Uma reinicialização é especialmente importante quando você remove funções, serviços de função ou recursos.

   ![Uma captura de tela que mostra a Página de confirmação de Remoção.](installing-iis-85-on-windows-server-2012-r2/_static/image24.jpg)
10. A página **Progresso da Remoção** é exibida. Você pode fechar o assistente sem interromper a execução de tarefas. Você pode exibir o progresso da tarefa ou abrir a página novamente clicando em **Notificações** na área de notificação e clicando em **Detalhes da Tarefa**.

    ![Uma captura de tela que mostra a página Progresso da Remoção.](installing-iis-85-on-windows-server-2012-r2/_static/image25.jpg)
11. Na página **Resultados** , clique em **Fechar**.

    ![Uma captura de tela que mostra a página de resultados da remoção.](installing-iis-85-on-windows-server-2012-r2/_static/image26.jpg)
12. Reinicie o servidor de destino para concluir a remoção de recursos.

### Instalar o IIS 8.5 na linha de comando

Você pode instalar o IIS 8.5 na linha de comando usando o DISM ou o PowerShell. Observe que o DISM e o PowerShell têm namespaces diferentes para parâmetros de instalação, portanto, os nomes de parâmetro usados em seus comandos serão diferentes. Para obter mais informações, consulte [**Módulos no IIS 8.5**](#ModulesinIIS85).

Observação

Pkgmgr.exe foi preterida. Em vez disso, use DISM para scripts que instalam o IIS 8.5.

#### Instalar o IIS 8.5 usando DISM

Automatizar a instalação do IIS usando scripts autônomos será muito útil se você precisar implantar vários servidores Web e quiser garantir que cada um dos servidores Web esteja configurado com componentes e serviços idênticos. No Windows Server 2012 R2, o DISM é usado para scripts autônomos, permitindo que você instale ou desinstale recursos opcionais de um prompt de comando ou scripts. Para usar o DISM, você deve verificar se tem direitos administrativos de usuário no computador. Para obter mais informações sobre o DISM, consulte [a visão geral do DISM](https://learn.microsoft.com/pt-br/windows-hardware/manufacture/desktop/what-is-dism)

Se você não incluir explicitamente no código DISM um recurso no qual a instalação do IIS tem uma dependência, a instalação falhará e não gerará uma mensagem de erro. Para obter uma lista de dependências necessárias, consulte [**Dependências de Funcionalidades**](#FeatureDependencies).

Para obter uma lista completa dos parâmetros DISM correspondentes a funções, serviços e recursos do IIS, consulte [**Módulos no IIS 8.5**](#ModulesinIIS85).

O script a seguir instalará todas as funções, serviços de função e recursos do IIS 8.5, obtendo a instalação completa do IIS que inclui todos os pacotes de recursos disponíveis. Se houver funções, serviços de função ou funcionalidades que você não precisa, você deverá editar o script para incluir somente as que você precisa. A ordem dos comandos no script DISM não importa. Todo o script será entregue ao mecanismo e tratado como uma transação. Para instalar o IIS 8.5 com um script, digite o seguinte em uma linha em um prompt de comando com privilégios elevados.

```
DISM.EXE /enable-feature /online /featureName:IIS-WebServerRole /featureName:IIS-WebServer 
/featureName:IIS-CommonHttpFeatures /featureName:IIS-StaticContent /featureName:IIS-DefaultDocument 
/featureName:IIS-DirectoryBrowsing /featureName:IIS-HttpErrors /featureName:IIS-HttpRedirect 
/featureName:IIS-ApplicationDevelopment /featureName:IIS-ASPNET /featureName:IIS-NetFxExtensibility 
/featureName:IIS-ASPNET45 /featureName:IIS-NetFxExtensibility45 /featureName:IIS-ASP /featureName:IIS-CGI 
/featureName:IIS-ISAPIExtensions /featureName:IIS-ISAPIFilter /featureName:IIS-ServerSideIncludes 
/featureName:IIS-HealthAndDiagnostics /featureName:IIS-HttpLogging /featureName:IIS-LoggingLibraries 
/featureName:IIS-RequestMonitor /featureName:IIS-HttpTracing /featureName:IIS-CustomLogging 
/featureName:IIS-ODBCLogging /featureName:IIS-Security /featureName:IIS-BasicAuthentication 
/featureName:IIS-WindowsAuthentication /featureName:IIS-DigestAuthentication 
/featureName:IIS-ClientCertificateMappingAuthentication /featureName:IIS-IISCertificateMappingAuthentication 
/featureName:IIS-URLAuthorization /featureName:IIS-RequestFiltering /featureName:IIS-IPSecurity 
/featureName:IIS-Performance /featureName:IIS-HttpCompressionStatic /featureName:IIS-HttpCompressionDynamic 
/featureName:IIS-WebDAV /featureName:IIS-WebServerManagementTools /featureName:IIS-ManagementScriptingTools 
/featureName:IIS-ManagementService /featureName:IIS-IIS6ManagementCompatibility /featureName:IIS-Metabase 
/featureName:IIS-WMICompatibility /featureName:IIS-LegacyScripts /featureName:IIS-FTPServer /featureName:IIS-FTPSvc 
/featureName:IIS-FTPExtensibility /featureName:NetFx4Extended-ASPNET45 /featureName:IIS-ApplicationInit 
/featureName:IIS-WebSockets /featureName:IIS-CertProvider /featureName:IIS-ManagementConsole /featureName:IIS-LegacySnapIn
```

#### Instalar o IIS 8.5 usando o PowerShell

Você pode usar os seguintes cmdlets do PowerShell para instalar todo o IIS 8.5:

```
import-module servermanager
add-windowsfeature web-server -includeallsubfeature
```

Para instalar apenas recursos específicos, liste-os no cmdlet do PowerShell, como no exemplo a seguir:

```
import-module servermanager
add-windowsfeature Web-Server, Web-WebServer, Web-Security, 
Web-Filtering
```

Os seguintes pontos se aplicam à execução dos cmdlets do PowerShell:

- O cmdlet requer elevação. Você deve estar executando uma sessão do Windows PowerShell como administrador para executar o cmdlet.
- O cmdlet não instala ferramentas de gerenciamento para funções, serviços de função e recursos por padrão. Você deve adicionar o parâmetro IncludeManagementTools ao cmdlet para fazer isso.

Para obter uma lista completa dos parâmetros do PowerShell correspondentes a funções, serviços e recursos do IIS 8.5, com mais informações, consulte [**Módulos no IIS 8.5**](#ModulesinIIS85). O seguinte lista todos esses parâmetros.

- Web-Server
- Web-WebServer
- Web-Security
- Web-Filtering
- Web-Cert-Auth
- Web-IP-Security
- Web-Url-Auth
- Web-Windows-Auth
- Web-Basic-Auth
- Web-Client-Auth
- Web-Digest-Auth
- Web-CertProvider
- Web-Common-Http
- Web-Http-Errors
- Web-Dir-Browsing
- Web-Static-Content
- Web-Default-Doc
- Web-Http-Redirect
- Web-DAV-Publishing
- Web-Performance
- Web-Stat-Compression
- Web-Dyn-Compression
- Web-Health
- Web-Http-Logging
- Web-ODBC-Logging
- Web-Log-Libraries
- Web-Custom-Logging
- Web-Request-Monitor
- Web-Http-Tracing
- Web-App-Dev
- Web-Net-Ext
- Web-Net-Ext45
- Web-ASP
- Web-Asp-Net
- Web-Asp-Net45
- Web-CGI
- Web-ISAPI-Ext
- Web-ISAPI-Filter
- Web-WebSockets
- Web-AppInit
- Web-Includes
- Web-Ftp-Server
- Web-Ftp-Service
- Web-Ftp-Ext
- Web-Mgmt-Tools
- Web-Mgmt-Console
- Web-Mgmt-Compat
- Web-Metabase
- Web-WMI
- Web-Lgcy-Mgmt-Console
- Web-Lgcy-Scripting
- Web-Scripting-Tools
- Web-Mgmt-Service

#### Desinstalar o IIS 8.5 usando o PowerShell

Você pode usar o cmdlet do PowerShell UnInstall-WindowsFeature para desinstalar o IIS 8.5. Execute **get-help Install-WindowsFeature** em uma linha de comando do PowerShell para ver a sintaxe do cmdlet. Os seguintes pontos se aplicam à execução do cmdlet:

- O cmdlet requer elevação. Você deve estar executando uma sessão do Windows PowerShell como administrador para executar o cmdlet.
- O cmdlet não desinstala ferramentas de gerenciamento para funções, serviços de função e recursos por padrão. Você deve adicionar o parâmetro IncludeManagementTools ao cmdlet para fazer isso.

## Módulos no IIS 8.5

Os módulos do IIS são serviços de função individuais que o servidor usa para processar solicitações. A tabela a seguir mostra quais módulos estão disponíveis para serem instalados no servidor Web, quais são instalados por padrão, em qual papel o serviço de função está incluído, o parâmetro usado no DISM ou no PowerShell para instalá-los, e uma breve descrição da funcionalidade que cada um fornece.

Observação

Um asterisco (\*) na tabela abaixo indica uma função ou serviço de função que é instalado por padrão quando a função de Servidor Web (IIS) é instalada.

| Função | Serviço de Funções | Parâmetro DISM | Parâmetro do PowerShell | Funcionalidade |
| --- | --- | --- | --- | --- |
| Função de Servidor Web |  | IIS-WebServerRole | Web-Server | Fornece suporte para sites HTML e suporte opcional para extensões de ASP.NET, ASP e servidor Web, permitindo que você hospede um site interno ou externo ou crie aplicativos baseados na Web. |
| Servidor Web\* |  | IIS-WebServer | Web-WebServer | Fornece suporte para sites HTML e suporte opcional para extensões de ASP.NET, ASP e servidor Web, permitindo que você hospede um site interno ou externo ou crie aplicativos baseados na Web. |
| Recursos HTTP comuns\* |  | IIS-CommonHttpFeatures | Web-Common-Http | Dá suporte à funcionalidade HTTP básica, como fornecer formatos de arquivo padrão e configurar propriedades de servidor personalizadas. |
|  | Documento Padrão\* | IIS-DefaultDocument | Web-Default-Doc | Permite configurar um arquivo padrão para o servidor Web retornar quando os usuários não especificam um arquivo em uma URL de solicitação. |
|  | Navegação de diretório\* | IIS-DirectoryBrowsing | Web-Dir-Browsing | Permite que os usuários vejam o conteúdo de um diretório em um servidor Web quando eles não especificam um arquivo em uma URL de solicitação e os documentos padrão estão desabilitados ou não estão configurados. |
|  | Erros HTTP\* | IIS-HttpErrors | Web-Http-Errors | Permite personalizar as mensagens de erro que são retornadas aos navegadores dos usuários quando o servidor Web detecta uma condição de falha, melhorando a experiência do usuário. |
|  | Conteúdo estático\* | IIS-ConteúdoEstático | Web-Static-Content | Permite que o servidor Web publique formatos de arquivo Da Web estáticos, como páginas HTML e arquivos de imagem que podem ser exibidos usando um navegador da Web. |
|  | Redirecionamento HTTP | IIS-HttpRedirect | Web-Http-Redirect | Permite que o servidor Web redirecione solicitações de usuário que são enviadas para um destino específico. |
|  | Publicação webDAV | IIS-WebDAV | Web-DAV-Publishing | Autoramento e controle de versão distribuídos na Web. Permite que você publique arquivos de e para um servidor Web usando o protocolo HTTP, trabalhando na maioria dos firewalls sem modificação. |
| Saúde e Diagnóstico\* |  | IIS-HealthAndDiagnostics | Web-Health | Fornece uma infraestrutura para monitorar, gerenciar e solucionar problemas de integridade de servidores Web, sites e aplicativos. |
|  | Registro em log HTTP\* | IIS-HttpLogging | Web-Http-Logging | Fornece o registro em log da atividade do site para o servidor, além do registro em log fornecido pelo sistema operacional. |
|  | Registro Personalizado | IIS-CustomLogging | Web-Custom-Logging | Permite criar um módulo de registro em log personalizado que executa o registro em log da atividade do servidor Web em um formato diferente do registro em log normalmente executado pelo IIS. |
|  | Ferramentas de registro em log | IIS-Bibliotecas de Registro | Web-Log-Libraries | Fornece uma infraestrutura para gerenciar registros de servidor Web e automatizar tarefas comuns de log. |
|  | Registo ODBC | IIS-ODBCLogging | Web-ODBC-Logging | Fornece uma infraestrutura que dá suporte ao registro em log da atividade do servidor Web em um banco de dados compatível com ODBC, permitindo que você exiba e manipule dados de log de forma programática em uma página HTML. |
|  | Monitor de Solicitações | IIS-Monitor de Solicitações | Web-Request-Monitor | Fornece uma infraestrutura para monitorar a integridade do aplicativo Web capturando informações sobre solicitações HTTP. |
|  | Rastreamento | IIS-HttpTracing | Web-Http-Tracing | Fornece uma infraestrutura para diagnosticar e solucionar problemas de aplicativos Web, incluindo falhas relacionadas a desempenho e autenticação ruins. |
| Desempenho\* |  | Desempenho do IIS | Web-Performance | Fornece uma infraestrutura para habilitar o uso mais eficiente da largura de banda executando a compactação de conteúdo estático e/ou dinâmico. |
|  | Compactação de conteúdo estático\* | IIS-HttpCompressionStatic | Web-Stat-Compression | Fornece uma infraestrutura para configurar a compactação HTTP de conteúdo estático. |
|  | Compactação de Conteúdo Dinâmico | IIS-HttpCompressionDynamic | Web-Dyn-Compression | Fornece uma infraestrutura para configurar a compactação HTTP do conteúdo dinâmico. |
| Segurança\* |  | IIS-Security | Web-Security | Fornece uma infraestrutura para proteger o servidor Web de usuários e solicitações, usando um dos vários métodos de autenticação. |
|  | Filtragem de solicitação\* | IIS-RequestFiltering | Web-Filtering | Habilita a triagem de todas as solicitações de entrada para o servidor e filtra as solicitações com base nas regras definidas pelo administrador. |
|  | Autenticação Básica | IIS-BasicAuthentication | Web-Basic-Auth | Um método de autenticação no qual os usuários são solicitados a fornecer credenciais que são transmitidas não criptografadas pela rede. |
|  | Certificado SSL centralizado | IIS-CertProvider | Web-CertProvider | Um método de autenticação que usa certificados de servidor SSL gerenciados centralmente usando um compartilhamento de arquivos. |
|  | Autenticação de mapeamento de certificados de cliente | IIS-ClientCertificateMappingAuthentication | Web-Client-Auth | Um método de autenticação que usa certificados de cliente para autenticar usuários, usando o Active Directory para oferecer mapeamentos de certificado um para um em vários servidores Web. |
|  | Autenticação Resumida | IIS-DigestAuthentication | Web-Digest-Auth | Um método de autenticação que envia um hash de senha para um controlador de domínio do Windows para autenticar usuários, especialmente útil se os usuários que devem ser autenticados acessarão o site por trás de firewalls e servidores proxy. |
|  | Autenticação de Mapeamento de Certificados de Cliente IIS | IIS-IISCertificateMappingAuthentication | Web-Cert-Auth | Um método de autenticação que utiliza certificados de cliente para autenticar usuários, empregando o IIS para oferecer mapeamento de certificados um-para-um ou muitos-para-um. |
|  | Restrições de IP e domínio | IIS-IPSecurity | Web-IP-Security | Um método de autenticação que permite habilitar ou negar conteúdo com base no endereço IP de origem ou no nome de domínio da solicitação. |
|  | Autorização de URL | IIS-URLAuthorization | Web-Url-Auth | Um método de autenticação que permite criar regras de autorização de URL que restringem o acesso ao conteúdo da Web. |
|  | Autenticação do Windows | IIS-WindowsAuthentication | Web-Windows-Auth | Um método de autenticação que permite que os administradores em um domínio do Windows aproveitem a infraestrutura de domínio para autenticar usuários, uma solução de autenticação de baixo custo para sites internos. |
| Desenvolvimento do aplicativo |  | IIS-DesenvolvimentoDeAplicações | Web-App-Dev | Fornece uma infraestrutura para desenvolver e hospedar aplicativos Web, útil para criar conteúdo da Web e estender a funcionalidade do IIS. |
|  | .NET Extensibilidade 3.5 | IIS-NetFxExtensibility | Web-Net-Ext | Permite que os desenvolvedores de código gerenciado alterem, adicionem e estendam a funcionalidade do servidor Web em todo o pipeline de solicitação, na configuração e na interface do usuário. |
|  | .NET Extensibilidade 4.5 | IIS-NetFxExtensibility45 | Web-Net-Ext45 | Permite que os desenvolvedores de código gerenciado alterem, adicionem e estendam a funcionalidade do servidor Web em todo o pipeline de solicitação, na configuração e na interface do usuário. |
|  | Inicialização de Aplicativo | IIS-ApplicationInit | Web-AppInit | Permite que você execute tarefas caras de inicialização de aplicativo Web antes de servir páginas da Web. |
|  | ASP | IIS-ASP | Web-ASP | Fornece um ambiente de script do lado do servidor para a criação de sites e aplicativos Web, especialmente para aplicativos existentes. |
|  | ASP.NET 3.5 | IIS-ASPNET | Web-Asp-Net | Fornece um ambiente de programação orientado a objetos do lado do servidor para a criação de sites e aplicativos Web usando código gerenciado. |
|  | ASP.NET 4.5 | IIS-ASPNET45 | Web-Asp-Net45 | Fornece um ambiente de programação orientado a objetos do lado do servidor para a criação de sites e aplicativos Web usando código gerenciado. |
|  | CGI | IIS-CGI | Web-CGI | Define como um servidor Web passa informações para um programa externo. |
|  | Extensões de ISAPI | IIS-ISAPIExtensions | Web-ISAPI-Ext | Extensões da Interface de Programação do Servidor de Internet. Fornece suporte para o desenvolvimento dinâmico de conteúdo da Web. |
|  | Filtros de ISAPI | IIS-ISAPIFilter | Web-ISAPI-Filter | Filtros da interface de programação do servidor da Internet. Permite que você estenda ou altere a funcionalidade fornecida pelo IIS, revisando cada solicitação feita ao servidor Web e processando as solicitações apropriadas. |
|  | Inclusões do lado do servidor | IIS-Inclusões do Lado do Servidor | Web-Includes | Uma linguagem de script usada para gerar dinamicamente páginas HTML, usando o script que é executado no servidor antes que a página seja entregue ao cliente. |
|  | Protocolo WebSocket | IIS-WebSockets | Web-WebSockets | Fornece canais de comunicação para aplicativos de servidor criados com o IIS 8.x e ASP.NET 4.5. |
| Servidor FTP |  | IIS-FTPServer | Web-Ftp-Server | Habilita a transferência de arquivos entre um cliente e um servidor, usando um cliente FTP ou um navegador da Web habilitado para FTP. |
|  | Serviço de FTP | IIS-FTPSvc | Web-Ftp-Service | Habilita a publicação de FTP em um servidor Web. |
|  | Extensibilidade de FTP | IIS-FTPExtensibility | Web-Ftp-Ext | Habilita o suporte para recursos de extensibilidade de FTP, como provedores de clientes, usuários ASP.NET ou usuários do Gerenciador do IIS. |
| IIS Hostable Web Core (IIS 8.0, não IIS 8.5) |  | IIS-HostableWebCore | Web-WHC | Permite que você escreva um código personalizado para hospedar a funcionalidade principal do IIS no seu próprio aplicativo, que atende solicitações HTTP e utiliza seus próprios arquivos de configuração: applicationHost.config e Web.config na raiz. |
| Ferramentas de Gerenciamento\* |  | IIS-WebServerManagementTools | Web-Mgmt-Tools | Fornece uma infraestrutura para gerenciar um servidor Web que executa o IIS 7.0 ou posterior. |
|  | Console de Gerenciamento do IIS\* | IIS-ManagementConsole | Web-Mgmt-Console | Fornece uma infraestrutura para gerenciar um servidor Web IIS 7.0 ou posterior, local ou remoto, usando uma interface do usuário. |
|  | Compatibilidade de gerenciamento do IIS 6 | IIS-IIS6ManagementCompatibility | Web-Mgmt-Compat | Fornece compatibilidade avançada para aplicativos e scripts que usam as APIs do IIS 6, o ABO (Objeto Base de Administrador) e a ADSI (Interface de Serviço do Active Directory). |
|  | Compatibilidade de metabase do IIS 6 | IIS-Metabase | Web-Metabase | Fornece uma infraestrutura para consultar e configurar o Metabase, para que você possa executar aplicativos e scripts migrados de versões anteriores do IIS que usam o Objeto Base do Administrador (ABO) e a ADSI (Interface de Serviço do Active Directory). |
|  | Console de gerenciamento do IIS 6 | IIS-LegacySnapIn | Web-Lgcy-Mgmt-Console | Fornece uma infraestrutura para administração de servidores remotos do IIS 6.0. |
|  | Ferramentas de script do IIS 6 | IIS-LegacyScripts | Web-Lgcy-Scripting | Permitir que você continue a usar scripts criados para gerenciar o IIS 6 no IIS 7.0 ou posterior, especialmente se seus aplicativos e scripts usarem ADO (ActiveX Data Objects) ou ADSI (Active Directory Service Interface). |
|  | Compatibilidade com WMI do IIS 6 | IIS-WMICompatibility | Web-WMI | Fornece interfaces de script WMI (Instrumentação de Gerenciamento do Windows) para gerenciar e automatizar tarefas programaticamente para um servidor Web IIS 8.0 ou posterior. |
|  | Scripts e Ferramentas de Gerenciamento do IIS | IIS-ManagementScriptingTools | Web-Scripting-Tools | Fornece uma infraestrutura para gerenciar programaticamente um servidor Web IIS 7.0 ou posterior usando comandos em uma janela de comando ou executando scripts. |
|  | Serviço de Gerenciamento | IIS-ManagementService | Web-Mgmt-Service | Permite que o servidor Web seja gerenciado remotamente de outro computador usando o Gerenciador do IIS. |

### Dependências de funcionalidades

A tabela a seguir mostra quais serviços de função e recursos devem ser instalados para que os serviços de função ou recursos da linha da tabela sejam instalados.

O **Assistente para Adicionar Funções e Recursos** e **o Assistente para Remover Funções e Recursos** do Gerenciador de Servidores cuidam das dependências, solicitando que você adicione dependências ao adicionar um serviço ou recurso de função ou remova dependências ao remover um serviço ou recurso de função. No entanto, ao instalar o IIS usando o DISM, você precisa incluir no código DISM qualquer dependência (seja de um serviço de função ou de um recurso) necessária para a instalação, caso contrário, ela falhará, e talvez você não receba uma indicação de por que falhou.

Ao remover um serviço ou recurso de função, certifique-se de não remover um serviço ou recurso no qual outro serviço ou recurso tenha dependência. Pode haver uma interseção de dependências, por exemplo, entre ASP e ASP.NET. Portanto, caso você remova o ASP e suas dependências de funcionalidades, também poderá remover as dependências do ASP.NET.

| Função | Serviço de Funções | Dependência |
| --- | --- | --- |
| Função de Servidor Web |  | Nenhum |
| Servidor Web\* |  | Nenhum |
| Recursos HTTP comuns\* |  | Nenhum |
|  | Documento Padrão\* | Nenhum |
|  | Navegação de diretório\* | Nenhum |
|  | Erros HTTP\* | Nenhum |
|  | Conteúdo estático\* | Nenhum |
|  | Redirecionamento HTTP | Nenhum |
|  | Publicação webDAV | Conteúdo estático |
| Saúde e Diagnóstico\* |  | Nenhum |
|  | Registro em log HTTP\* | Nenhum |
|  | Registro Personalizado | Nenhum |
|  | Ferramentas de registro em log | Nenhum |
|  | Registo ODBC | Nenhum |
|  | Monitor de Solicitações | Nenhum |
|  | Rastreamento | Nenhum |
| Desempenho\* |  | Nenhum |
|  | Compactação de conteúdo estático\* | Nenhum |
|  | Compactação de Conteúdo Dinâmico | Nenhum |
| Segurança\* |  | Nenhum |
|  | Filtragem de solicitação\* | Nenhum |
|  | Autenticação Básica | Nenhum |
|  | Certificado SSL centralizado | Nenhum |
|  | Autenticação de mapeamento de certificados de cliente | Nenhum |
|  | Autenticação Resumida | Nenhum |
|  | Autenticação de Mapeamento de Certificados de Cliente IIS | Nenhum |
|  | Restrições de IP e domínio | Nenhum |
|  | Autorização de URL | Nenhum |
|  | Autenticação do Windows | Nenhum |
| Desenvolvimento do aplicativo |  | Nenhum |
|  | .NET Extensibilidade 3.5 | - .NET Framework 3.5 (inclui .NET 2.0 e 3.0) – ASP.NET 4.5 – .NET Framework 4.5 – Desenvolvimento de aplicativos – Filtragem de solicitações |
|  | .NET Extensibilidade 4.5 | - ASP.NET 4.5 – .NET Framework 4.5 – Desenvolvimento de aplicativos – Filtragem de solicitações |
|  | Inicialização de Aplicativo | Nenhum |
|  | ASP | - Servidor Web (IIS)-Servidor Web - Desenvolvimento de Aplicativos - Extensões ISAPI - Filtragem de Solicitações |
|  | ASP.NET 3.5 | – .NET Framework 3.5 (inclui .NET 2.0 e 3.0) – ASP.NET 4.5 – .NET Framework 4.5 – Extensões ISAPI – Filtros ISAPI – Extensibilidade do .NET 3.5 – Filtragem de Solicitações |
|  | ASP.NET 4.5 | - ASP.NET 4.5 – .NET Framework 4.5 – Extensões ISAPI – Filtros ISAPI – Extensibilidade do .NET 3.5 – Filtragem de Solicitações |
|  | CGI | Nenhum |
|  | Extensões de ISAPI | Nenhum |
|  | Filtros de ISAPI | Nenhum |
|  | Inclusões do lado do servidor | Nenhum |
|  | Protocolo WebSocket | Nenhum |
| Servidor FTP |  | Nenhum |
|  | Serviço de FTP | Nenhum |
|  | Extensibilidade de FTP | Serviço FP |
| IIS Hostable Web Core (IIS 8.0, não IIS 8.5) |  | Nenhum |
| Ferramentas de Gerenciamento\* |  | – .NET Framework 4.5 – Ferramentas de Gerenciamento Gráfico e Infraestrutura – Windows PowerShell 3.0 |
|  | Console de Gerenciamento do IIS\* | – .NET Framework 4.5 – Ferramentas de Gerenciamento Gráfico e Infraestrutura – Ferramentas de Gerenciamento – Windows PowerShell 3.0 |
|  | Compatibilidade de gerenciamento do IIS 6 | Nenhum |
|  | Compatibilidade de metabase do IIS 6 | Nenhum |
|  | Console de gerenciamento do IIS 6 | – .NET Framework 4.5 – Ferramentas de Gerenciamento Gráfico e Infraestrutura – Capacidade de Metabase do IIS 6 – Windows PowerShell 3.0 |
|  | Ferramentas de script do IIS 6 | - Compatibilidade de Metabase do IIS 6 – Compatibilidade do IIS 6 WM |
|  | Compatibilidade com WMI do IIS 6 | Compatibilidade de metabase do IIS 6 |
|  | Scripts e Ferramentas de Gerenciamento do IIS | Nenhum |
|  | Serviço de Gerenciamento | - ASP.NET 4.5 – .NET Framework 4.5 – Ferramentas de Gerenciamento |

## Consulte também

- [Instalar ou desinstalar funções, serviços de função ou recursos](https://learn.microsoft.com/pt-br/previous-versions/windows/it-pro/windows-server-2012-R2-and-2012/hh831809(v=ws.11))
- [instalação do IIS.NET](install.md)
- [Novidades no IIS 8.5](get-started.md)
- [Visão geral do DISM](https://learn.microsoft.com/pt-br/windows-hardware/manufacture/desktop/what-is-dism)
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
