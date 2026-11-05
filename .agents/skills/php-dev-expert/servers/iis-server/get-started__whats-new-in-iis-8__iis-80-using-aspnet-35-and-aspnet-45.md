# IIS 8.0 usando ASP.NET 3.5 e ASP.NET 4.5 | Microsoft Learn

> **Fonte / Source:** https://learn.microsoft.com/pt-br/iis/get-started/whats-new-in-iis-8/iis-80-using-aspnet-35-and-aspnet-45

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

# IIS 8.0 usando ASP.NET 3.5 e ASP.NET 4.5

Comentários

por Won Yoo

## Compatibilidade

| Versão | Observações |
| --- | --- |
| IIS 8.0 | ASP.NET 3.5 e ASP.NET 4.5 têm suporte no IIS 8.0. |
| IIS 7.5 | ASP.NET 3.5 e ASP.NET 4.5 têm suporte no IIS 7.5. |
| IIS 7.0 | ASP.NET 3.5 e ASP.NET 4.5 têm suporte no IIS 7.0. |

## Problema

O Windows Server 2012 inclui o .NET Framework 4.5 por padrão, bem como a instalação opcional do .NET 3.5 Framework. Os desenvolvedores frequentemente precisam executar aplicativos Web mistos em várias versões do .NET Framework.

## Solução

O IIS 8.0 no Windows Server 2012 executa aplicativos ASP.NET em todas as versões do .NET Framework com suporte no Windows Server 2012. Isso significa que ASP.NET aplicativos podem ser executados no IIS 8.0 usando o .NET Framework 3.5 ou o .NET Framework 4.5. O IIS 8.0 hospeda versões do .NET Framework em pools de aplicativos diferentes, permitindo que vários aplicativos ASP.NET com versões diferentes do .NET Framework sejam executados simultaneamente no Windows Server 2012.

O IIS 8.0 também dá suporte ao gerenciamento de aplicativos ASP.NET 3.5 e ASP.NET 4.5 usando a ferramenta gráfica do Gerenciador do IIS, bem como as ferramentas de gerenciamento de linha de comando do IIS. Para obter mais informações, consulte o artigo do [IIS 8.0 ASP.NET Configuration Management](get-started__whats-new-in-iis-8__iis-80-aspnet-configuration-management.md) .

## Instruções passo a passo

### Pré-requisitos

- O IIS está instalado no Windows Server 2012. Para saber mais sobre como instalar o IIS 8, consulte [Como instalar o IIS 8 no Windows Server 2012](get-started__whats-new-in-iis-8__installing-iis-8-on-windows-server-2012.md).

### Configurando o IIS 8.0 com suporte para ASP.NET 3.5 e ASP.NET 4.5

No Windows Server 2012, o .NET Framework 3.5 e o .NET Framework 4.5 são reconhecidos nativamente pelo sistema operacional. Isso significa que a configuração baseada em interface do usuário e da linha de comando pode ser usada para ativar ambas as versões do .NET Framework, bem como habilitar a integração de ambas as versões do ASP.NET com o IIS 8.0.

Para este passo a passo, usaremos a nova interface do usuário do Gerenciador de Servidores no Windows Server 2012 Server para demonstrar como habilitar ASP.NET 3.5 e ASP.NET 4.5 no IIS 8.0.

1. Quando você fizer logon pela primeira vez em um novo computador do Windows Server 2012, a nova interface do usuário do Gerenciador do Servidor será exibida. Clique em **adicionar funções** , conforme mostrado abaixo:  
   [![Captura de tela do novo Gerenciador de Servidores U I com funções de adição realçadas.](iis-80-using-aspnet-35-and-aspnet-45/_static/image3.png)](https://learn.microsoft.com/pt-br/iis/get-started/whats-new-in-iis-8/iis-80-using-aspnet-35-and-aspnet-45/_static/image1.png)
2. Na primeira tela do **Assistente para Adicionar Funções e Recursos**, clique em **Avançar**. Isso exibe uma página em que você seleciona o tipo de instalação desejado. Escolha a instalação **Baseada em Funções** ou **Baseada em Recursos**, conforme mostrado abaixo:  
   [![Captura de tela do Assistente de Adição de Funções e Recursos com a opção de instalação baseadas em função ou recurso realçada.](iis-80-using-aspnet-35-and-aspnet-45/_static/image7.png)](https://learn.microsoft.com/pt-br/iis/get-started/whats-new-in-iis-8/iis-80-using-aspnet-35-and-aspnet-45/_static/image5.png)
3. Clique em **Avançar.** A próxima tela do assistente pede que você escolha o servidor que está configurando.
4. Na próxima etapa do assistente, você será solicitado a selecionar uma ou mais funções de servidor. Role para baixo na lista **Funções** e verifique a caixa de seleção **do Servidor Web (IIS),** conforme mostrado abaixo:  
   [![Captura de tela da lista de Funções e Recursos no Assistente para Adicionar Funções e Recursos com o Servidor Web IIS verificado e destacado.](iis-80-using-aspnet-35-and-aspnet-45/_static/image11.png)](https://learn.microsoft.com/pt-br/iis/get-started/whats-new-in-iis-8/iis-80-using-aspnet-35-and-aspnet-45/_static/image9.png)
5. Clique em **Avançar** para prosseguir para a próxima etapa, que permite que você selecione recursos específicos adicionais para instalar no servidor. Clique em **Avançar** novamente e prossiga para a próxima etapa.
6. A próxima etapa do assistente exibe algumas informações introdutórias sobre a função **do Servidor Web (IIS)**. Clique em **Avançar** novamente e prossiga para a próxima etapa. Agora você deve estar em uma etapa de assistente semelhante à seguinte:  
   [![Captura de tela da lista de Serviços de Função para selecionar e instalar no Servidor Web IIS, com a Ferramenta de Gerenciamento realçada.](iis-80-using-aspnet-35-and-aspnet-45/_static/image15.png)](https://learn.microsoft.com/pt-br/iis/get-started/whats-new-in-iis-8/iis-80-using-aspnet-35-and-aspnet-45/_static/image13.png)
7. Observe que vários sub-recursos padrão do IIS já foram ativados porque você selecionou a função de servidor **do IIS (Servidor Web)** anteriormente. No entanto, queremos habilitar ASP.NET 3.5 e ASP.NET 4.5 para serem executados no IIS 8.0, portanto, precisamos habilitar alguns recursos adicionais relacionados ao IIS. Role a lista de **Serviços de Função** para baixo até que o nó **Desenvolvimento de Aplicativos** seja exibido. Esse nó é recolhido inicialmente, clique no nó e expanda-o para que seus filhos mostram:  
   [![Captura de tela da lista de Serviços de Função, com o nó Desenvolvimento de Aplicações realçado.](iis-80-using-aspnet-35-and-aspnet-45/_static/image1.jpg)](https://learn.microsoft.com/pt-br/iis/get-started/whats-new-in-iis-8/iis-80-using-aspnet-35-and-aspnet-45/_static/image17.png)
8. O nó **Desenvolvimento de Aplicativos** é onde habilitamos a integração do ASP.NET com o IIS. Observe que há algumas caixas de seleção na lista de recursos com nomes semelhantes. O par de caixas de seleção que são de interesse para este passo a passo são:

   - **ASP.NET 3.** 5 – Essa opção permite que ASP.NET 3.5 seja executado no IIS 8.0. Observe que, com o Windows Server 2012, o .NET Framework 3.5 não está disponível como parte da imagem base do sistema operacional. Em vez disso, o conteúdo é baixado da Internet e você precisa se conectar à Internet.
   - **ASP.NET 4.5** – Essa opção permite que ASP.NET 4.5 seja executado no IIS 8.0.
9. Primeiro, clique na caixa de seleção **ASP.NET 3.5** . Ao fazer isso, uma caixa de diálogo adicional será exibida, conforme mostrado abaixo:  
   ![Captura de tela da caixa de diálogo com a pergunta de adicionar os recursos necessários para o ASP.NET 3.5.](iis-80-using-aspnet-35-and-aspnet-45/_static/image3.jpg)
10. Como o ASP.NET 3.5 está integrado à instalação do Windows Server 2012, o Windows Server 2012 conhece todas as dependências relacionadas necessárias para habilitar ASP.NET 3.5 no IIS 8.0. Esta caixa de diálogo pop-up está apenas informando o que será automaticamente baixado e instalado. Como queremos ASP.NET 3.5 habilitado, clique em **Adicionar Recursos Necessários**.
11. Em seguida, clique na caixa de seleção **ASP.NET 4.5** na lista de **serviços de função**. O resultado final de clicar em ambas as caixas de seleção relacionadas ao ASP.NET é mostrado abaixo:  
    [![Captura de tela da lista de recursos dos Serviços de Função com ASP.NET 4 ponto 5 selecionado e destacado.](iis-80-using-aspnet-35-and-aspnet-45/_static/image7.jpg)](https://learn.microsoft.com/pt-br/iis/get-started/whats-new-in-iis-8/iis-80-using-aspnet-35-and-aspnet-45/_static/image5.jpg)
12. Embora você tenha selecionado diretamente os recursos **ASP.NET 3.5** e **ASP.NET 4.5** , o assistente automaticamente ativou vários outros itens. Isso é feito automaticamente para que os desenvolvedores não precisem escolher explicitamente as várias partes de componente necessárias para "assembly" de ASP.NET no Windows Server 2012. Neste ponto, clique em **Avançar** para aceitar as alterações.
13. A etapa **Confirmar seleções de instalação** exibe uma lista de todos os recursos instalados se você aceitar as alterações.  
    [![Captura de tela de Confirmar Seleções de Instalação, mostrando uma lista de todos os recursos que serão instalados caso as alterações sejam aceitas, com a confirmação destacada.](iis-80-using-aspnet-35-and-aspnet-45/_static/image11.jpg)](https://learn.microsoft.com/pt-br/iis/get-started/whats-new-in-iis-8/iis-80-using-aspnet-35-and-aspnet-45/_static/image9.jpg)
14. Neste ponto, clique em **Instalar** para aceitar as alterações e instalar o suporte completo ASP.NET no Windows Server 2012.
15. Como a instalação levará um pequeno período de tempo para ser concluída, o assistente exibe uma caixa de diálogo de progresso enquanto a instalação progride:  
    [![Captura de tela da caixa de diálogo Progresso da Instalação mostrando o progresso da tarefa com o item Resultados realçado.](iis-80-using-aspnet-35-and-aspnet-45/_static/image15.jpg)](https://learn.microsoft.com/pt-br/iis/get-started/whats-new-in-iis-8/iis-80-using-aspnet-35-and-aspnet-45/_static/image13.jpg)
16. Após alguns minutos, o assistente mostra que a instalação foi concluída:  
    [![Captura de tela do Progresso da Instalação mostrando a instalação bem-sucedida no Assistente para Adicionar Funções e Recursos.](iis-80-using-aspnet-35-and-aspnet-45/_static/image21.png)](https://learn.microsoft.com/pt-br/iis/get-started/whats-new-in-iis-8/iis-80-using-aspnet-35-and-aspnet-45/_static/image19.png)
17. Neste ponto, você pode clicar em **Fechar** e sair do assistente.

### Explorando a instalação do IIS 8.0

Com a integração do IIS 8.0 e do ASP.NET instalada, podemos examinar a pegada básica do ASP.NET para o IIS 8.0.

1. No menu Iniciar do Windows, selecione **Todos os Programas** e **expanda o menu Ferramentas Administrativas** . Na lista resultante, localize o **Gerenciador dos Serviços de Informações da Internet (IIS)** e selecione-o para iniciar a ferramenta de gerenciamento do IIS gráfico:  
   ![Captura de tela do menu Ferramentas Administrativas expandido com o Gerenciador de Serviços de Informações da Internet (IIS) realçado.](iis-80-using-aspnet-35-and-aspnet-45/_static/image23.png)
2. Depois que o Gerenciador do IIS for iniciado, expanda o nó do servidor na janela à esquerda para que o nó **Pools de Aplicativos** e o nó **Sites** sejam exibidos. Quando você fizer isso, o Gerenciador do IIS abrirá uma caixa de diálogo perguntando se você deseja permanecer conectado com os componentes mais recentes da Plataforma Web. Para este passo a passo, você pode clicar em **Não**. Neste ponto, o Gerenciador do IIS se parece com a seguinte imagem:  
   [![Captura de tela do IIS Manager mostrando o nó de Pools de Aplicativos e o nó de Sites expandidos com o Instalador da Plataforma Web destacado.](iis-80-using-aspnet-35-and-aspnet-45/_static/image27.png)](https://learn.microsoft.com/pt-br/iis/get-started/whats-new-in-iis-8/iis-80-using-aspnet-35-and-aspnet-45/_static/image25.png)
3. Clique no nó **Pools de Aplicativos** para exibir os pools de aplicativos que agora foram instalados para uso pelo IIS 8.0:  
   [![Captura de tela do nó Pools de Aplicativos com a lista de pools de aplicativos instalados para uso pelo I I S 8 ponto 0.](iis-80-using-aspnet-35-and-aspnet-45/_static/image31.png)](https://learn.microsoft.com/pt-br/iis/get-started/whats-new-in-iis-8/iis-80-using-aspnet-35-and-aspnet-45/_static/image29.png)
4. Você pode ver que seis pools de aplicativos diferentes são criados por padrão quando ASP.NET 3.5 e ASP.NET 4.5 estão habilitados para o IIS 8.0. Quatro dos aplicativos são novos no IIS 8.0, enquanto que outros dois pools de aplicativos foram migrados das versões anteriores do Windows.

   - Observe que, embora a coluna **versão do .NET Framework** mostre "v2.0" e "v4.0" para versões do .NET Framework, elas equivalem a ASP.NET 3.5 e ASP.NET 4.5. Devido aos mecanismos internos de como os pools de aplicativos se vinculam às versões do .NET Framework, o nome real da versão gravada na configuração (e, portanto, exibido na ferramenta) corresponde à versão original do arquivo .NET Framework.
   - **O .NET AppPool** e **o DefaultAppPool** clássicos existiam em versões anteriores do Windows e, portanto, continuam a ser criados para o IIS 8.0. No entanto, observe que, como o .NET Framework 4.5 é o .NET Framework padrão para uso pelo Windows Server 2012, o "DefaultAppPool" no IIS 8.0 também usa a versão mais recente do .NET Framework.
   - Os outros quatro pools de aplicativos são novos no Windows Server 2012. Há dois pools de aplicativos para executar o .NET Framework 3.5 (**.NET v2.0** e **.NET v2.0 Classic**) e dois pools de aplicativos para executar o .NET Framework 4.5 (**.NET Framework 4.5** e **.NET Framework 4.5 Clássico**).
   - A diferença entre pools de aplicativos "clássicos" e "não clássicos" é o modo de pipeline gerenciado com suporte em cada tipo de pool de aplicativos. Os dois pools de aplicativos que terminam em "Clássico" dão suporte ao modo de pipeline clássico mais antigo do Windows Server 2003 para ASP.NET, enquanto os outros dois pools de aplicativos usam o modo de pipeline integrado mais recente para ASP.NET introduzido no Vista/IIS7.0.
5. Explorando um pouco mais, expanda o nó **Sites** no lado esquerdo da tela para que o nó **site padrão** fique visível:  
   [![Captura de tela do nó Sites expandido com o nó site padrão realçado.](iis-80-using-aspnet-35-and-aspnet-45/_static/image35.png)](https://learn.microsoft.com/pt-br/iis/get-started/whats-new-in-iis-8/iis-80-using-aspnet-35-and-aspnet-45/_static/image33.png)
6. As instalações padrão do IIS sempre têm um "Site Padrão" configurado para escutar solicitações HTTP na porta 80. Faça uma busca detalhada no "Site Padrão" para ver qual versão do ASP.NET dá suporte por padrão. Clique com o botão direito do mouse **no Site Padrão**, **selecione Gerenciar Site** e selecione **Configurações Avançadas** , conforme mostrado abaixo:  
   ![Captura de tela da Página Inicial do Site Padrão com Gerenciar Site e Configurações Avançadas selecionadas e realçadas.](iis-80-using-aspnet-35-and-aspnet-45/_static/image37.png)
7. A caixa de diálogo **Configurações Avançadas** é exibida, mostrando (entre outras coisas) o pool de aplicativos usado para executar o "Site Padrão". Conforme mostrado na figura abaixo, o "Site Padrão" é executado no pool de aplicativos chamado "DefaultAppPool"  
   ![Captura de tela da caixa de diálogo Configurações Avançadas mostrando o Pool de Aplicativos e o Pool de Aplicativos Padrão realçados.](iis-80-using-aspnet-35-and-aspnet-45/_static/image39.png)
8. Se você clicar no pequeno botão de reticências no lado direito do pool de aplicativos, uma caixa de diálogo adicional será exibida exibindo mais informações sobre o "DefaultAppPool". Conforme observado anteriormente, o "DefaultAppPool" usa como padrão ASP.NET 4.5 para o IIS 8.0, portanto, ASP.NET aplicativos 4.5 implantados no "Site Padrão" funcionarão sem nenhuma configuração adicional.  
   ![Captura de tela da caixa de diálogo Selecionar Pool de Aplicativos exibindo o Pool de Aplicativos Padrão e suas propriedades no pool de aplicativos.](iis-80-using-aspnet-35-and-aspnet-45/_static/image41.png)
9. Neste ponto, clique em **Cancelar** para cancelar a caixa de diálogo **Selecionar Pool de Aplicativos** e a caixa de diálogo **Configurações Avançadas** .

### Executando aplicativos ASP.NET 3.5 e ASP.NET 4.5

Agora que você explorou o estado de instalação do IIS 8.0, tente executar alguns exemplos de código ASP.NET para confirmar que os aplicativos ASP.NET 3.5 e ASP.NET 4.5 podem ser executados simultaneamente em uma única instalação do IIS 8.0.

O código de exemplo para ASP.NET 3.5 e ASP.NET 4.5 está contido no seguinte .zip:

[![Captura de tela do arquivo zip de exemplos.](iis-80-using-aspnet-35-and-aspnet-45/_static/image43.png)](https://learn.microsoft.com/pt-br/iis/get-started/whats-new-in-iis-8/iis-80-using-aspnet-35-and-aspnet-45/_static/iis-80-using-aspnet-35-and-aspnet-45-1097-examples1.zip)

Primeiro, configure um aplicativo ASP.NET 3.5 simples no IIS 8.0:

1. Abra o arquivo "examples.zip".
2. No Windows Explorer em seu computador Windows Server 2012, navegue até o diretório "wwwroot" para sua instalação do IIS. Por exemplo, se você instalou o IIS na unidade C:\, o diretório "wwwroot" estará em `c:\inetpub\wwwroot`.
3. Copie a pasta "example35" de "examples.zip" e cole-a no diretório `c:\inetpub\wwwroot`. Quando terminar, a estrutura do diretório deverá ser semelhante à seguinte:  
   [![Captura de tela do diretório local na unidade C com a pasta de exemplo 35 realçada.](iis-80-using-aspnet-35-and-aspnet-45/_static/image47.png)](https://learn.microsoft.com/pt-br/iis/get-started/whats-new-in-iis-8/iis-80-using-aspnet-35-and-aspnet-45/_static/image45.png)
4. A pasta "example35" recém-criada precisa ser configurada como um aplicativo ASP.NET 3.5 no Gerenciador do IIS. Volte para a janela do Gerenciador do IIS, clique no nó **Site Padrão** e selecione **Atualizar**. A exibição em árvore dos nós filhos no **Site Padrão** agora mostra a pasta "exemplo35".  
   ![Captura de tela da visão de árvore dos subnós com a pasta de exemplo 35 realçada, no nó padrão do Site da Web.](iis-80-using-aspnet-35-and-aspnet-45/_static/image49.png)
5. Clique com o botão direito do mouse na pasta **example35** e selecione **Converter em Aplicativo**:  
   ![Captura de tela da pasta de exemplo 35 clicada com o botão direito do mouse e a opção Converter em Aplicativo selecionada e realçada.](iis-80-using-aspnet-35-and-aspnet-45/_static/image51.png)
6. A caixa de diálogo **Adicionar Aplicativo** será exibida. Por padrão, todos os diretórios no **Site Padrão** fazem parte do pool de aplicativos chamado **DefaultAppPool**. Isso significa que as pastas recém-criadas que contêm ASP.NET são executadas como ASP.NET aplicativos 4.5 por padrão.  
   ![Captura de tela da caixa de diálogo Adicionar Aplicativo com o Pool de Aplicativos e o Pool de Aplicativos Padrão exibidos ao lado do botão Selecionar realçado.](iis-80-using-aspnet-35-and-aspnet-45/_static/image53.png)
7. Como queremos executar a pasta **example35** como um aplicativo ASP.NET 3.5, o pool de aplicativos precisa ser alterado. Clique em **Selecionar** e na caixa de diálogo **Selecionar Pool de Aplicativos** que aparece. Altere o pool de aplicativos para **.NET v2.0** , conforme mostrado abaixo:  
   ![Captura de tela da caixa de diálogo Selecionar Pool de Aplicativos com dot NET v 2 ponto 0 realçada na barra de menus.](iis-80-using-aspnet-35-and-aspnet-45/_static/image55.png)
8. Clique no botão **OK** para aceitar a alteração do pool de aplicativos e clique em **OK** novamente para confirmar as alterações no IIS. A janela do Gerenciador do IIS é exibida novamente. Na visão de árvore mostrando "Site Padrão", o ícone de "exemplo35" é alterado para indicar que agora é um aplicativo ASP.NET separado.  
   \*\*
   ![Captura de tela da visão de árvore do Site da Web Padrão mostrando o Site da Web Padrão e o ícone realçado para a pasta exemplo 35 que foi alterada.](iis-80-using-aspnet-35-and-aspnet-45/_static/image57.png)
9. Neste ponto, inicie uma instância do Internet Explorer e navegue até a seguinte URL:

   `http://localhost/example35`

   Após uma breve pausa, o aplicativo exibe uma lista de recursos do .NET Framework com suporte neste aplicativo.
10. no Windows Explorer, se você navegar até o `c:\inetpub\wwwroot\example35` diretório, poderá usar o bloco de notas para examinar o código para "default.aspx" e as informações em "web.config". Por exemplo, o conteúdo de web.config inclui diretivas que configuram os compiladores do .NET Framework para serem executados no modo "3.5". O código do .NET Framework em "default.aspx" demonstra alguns constructos C# que foram introduzidos no .NET 3.5 – especificamente consultas LINQ-to-Object.

Agora que há um aplicativo ASP.NET 3.5 em execução, você pode criar um segundo aplicativo ASP.NET, mas desta vez configurá-lo para usar o .NET Framework 4.5.

1. Volte para a janela do Windows Explorer que tem o arquivo .zip "examples.zip" aberto.
2. Abra o conteúdo da pasta "example45".
3. Na segunda janela do Windows Explorer que você abriu, navegue até `c:\inetpub\wwwroot`.
4. Copie o arquivo "default.aspx" do arquivo .zip e cole-o diretamente em `c:\inetpub\wwwroot`. O conteúdo da pasta para `c:\inetpub\wwwroot` agora deve ter a seguinte aparência:  
   [![Captura de tela das pastas do disco local C com o arquivo padrão .aspx realçado.](iis-80-using-aspnet-35-and-aspnet-45/_static/image61.png)](https://learn.microsoft.com/pt-br/iis/get-started/whats-new-in-iis-8/iis-80-using-aspnet-35-and-aspnet-45/_static/image59.png)
5. Agora volte para o Internet Explorer e navegue até a seguinte URL:

   `http://localhost/default.aspx`

   Após uma breve pausa, um segundo pool de aplicativos começará a executar um aplicativo ASP.NET 4.5 para o "Site Padrão". O navegador exibe novamente uma lista de recursos do .NET Framework com suporte neste aplicativo com uma nova entrada no final da lista para variáveis tipadas dinamicamente (ou seja, a palavra-chave *dinâmica* introduzida no .NET Framework 4.0/4.5). Observe que, ao contrário do aplicativo "example35" que exigia entradas especiais de web.config, nenhum arquivo web.config era necessário para configurar e executar a página "default.aspx" no "Site Padrão". Isso ocorre porque o .NET Framework 4.5 é o .NET Framework padrão usado por ASP.NET aplicativos no IIS 8.0 e, como resultado, nenhuma configuração extra é necessária.
6. Se você usar o Bloco de Notas para abrir a página "default.aspx" que acabou de copiar, também verá algumas alterações em comparação com a versão no diretório "example35". Não há diretivas de namespace na parte superior da página, pois o .NET Framework 4.5 é o padrão no IIS 8.0. O código na página demonstra o uso de uma variável *dinâmica* , que é um conceito de compilador introduzido no .NET Framework 4.0/4.5.

## Resumo

O IIS 8.0 dá suporte à execução de aplicativos ASP.NET 3.5 e ASP.NET 4.5 no mesmo computador usando pools de aplicativos diferentes para hospedar cada versão do .NET Framework. O suporte do IIS 8.0 a várias versões do .NET Framework permite que desenvolvedores e administradores tirem pleno proveito do IIS 8.0, mantendo a compatibilidade retroativa com aplicativos web transferidos do Windows Server 2008 R2.

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
  2024-03-11
