# Instalando o IIS 7 no Windows Vista e no Windows 7 | Microsoft Learn

> **Fonte / Source:** https://learn.microsoft.com/pt-br/iis/install/installing-iis-7/installing-iis-on-windows-vista-and-windows-7

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

# Instalando o IIS 7 no Windows Vista e no Windows 7

Comentários

por a equipe do IIS

## Introdução

Os avanços nas tecnologias de nuvem levaram muitos usuários a usar [sites do Windows Azure](https://www.windowsazure.com/solutions/web/) para hospedar um site de produção e um site de teste, pois facilita o teste de várias configurações sem afetar seus próprios computadores pessoais. Se você ainda preferir fazer isso em sua área de trabalho, poderá instalar o IIS nele, bem como em outros aplicativos e extensões facilmente.

Se você optar por instalar o IIS 7.0 ou superior manualmente, poderá usar este artigo para obter diretrizes.

## Antes de começar

Verifique se você instalou uma das edições do Windows Vista ou windows 7 nas quais o IIS 7 e superior tem suporte antes de continuar. Nem todos os recursos do IIS têm suporte em todas as edições do Windows Vista e do Windows 7. As edições Home Basic e Starter incluem apenas recursos básicos limitados do IIS. Para ver uma lista de quais recursos têm suporte na edição do Windows que você está usando, consulte um dos seguintes:

- [Serviços de função disponíveis no IIS 7.0](https://go.microsoft.com/fwlink/?LinkId=166549) (Windows Vista)
- [Serviços de Função Disponíveis do Servidor Web (IIS) no IIS 7.5](https://go.microsoft.com/fwlink/?LinkId=166491) (Windows 7)

Certifique-se também de que você tenha direitos administrativos de usuário no computador. Por padrão, você não terá direitos administrativos de usuário se estiver conectado como um usuário diferente do administrador interno, mesmo que tenha sido adicionado ao grupo de Administradores local no computador (este é um novo recurso de segurança no Windows Server® 2008 chamado Administrador de Usuário Local). Faça logon na conta de administrador interna ou invoque explicitamente aplicativos como administrador interno usando a ferramenta de linha de comando runas.

Observe que você pode usar o comando runas /user:administrator cmd.exe para que todos os aplicativos executados a partir dessa linha de comando sejam elevados, eliminando a necessidade de usar a sintaxe runas nessa linha de comando.

Se você estiver conectado a uma conta diferente da conta de administrador local interna, poderá ver a caixa de diálogo de alerta de segurança a seguir.

[![Captura de tela da caixa de diálogo de alerta do Windows Security. O texto de aviso diz que o Windows precisa de sua permissão para usar este programa.](installing-iis-on-windows-vista-and-windows-7/_static/image2.jpg)](https://learn.microsoft.com/pt-br/iis/install/installing-iis-7/installing-iis-on-windows-vista-and-windows-7/_static/image1.jpg)

*Figura 1: Segurança do Windows (Controle de Conta de Usuário)*

## Instalar o IIS 7 ou superior

1. Para abrir a caixa de diálogo **Recursos do Windows** , clique em **Iniciar** e clique em **Painel de Controle**.

   [![Captura de tela do menu Iniciar. No painel direito, o Painel de Controle está selecionado.](installing-iis-on-windows-vista-and-windows-7/_static/image4.jpg)](https://learn.microsoft.com/pt-br/iis/install/installing-iis-7/installing-iis-on-windows-vista-and-windows-7/_static/image3.jpg)

   *Figura 2: menu Iniciar do Windows Vista*
2. No **Painel de Controle**, clique em **Programas**.

   [![Captura de tela da home page do Painel de Controle. Os programas estão selecionados.](installing-iis-on-windows-vista-and-windows-7/_static/image6.jpg)](https://learn.microsoft.com/pt-br/iis/install/installing-iis-7/installing-iis-on-windows-vista-and-windows-7/_static/image5.jpg)

   *Figura 3: Página Inicial do Painel de Controle*
3. Clique **em Ativar ou desativar recursos do Windows**.

   [![Captura de tela do menu Página Inicial do Painel de Controle. Os programas instalados estão realçados. Ativar ou desativar recursos do Windows está selecionado.](installing-iis-on-windows-vista-and-windows-7/_static/image8.jpg)](https://learn.microsoft.com/pt-br/iis/install/installing-iis-7/installing-iis-on-windows-vista-and-windows-7/_static/image7.jpg)

   *Figura 4: opções de instalação do Painel de Controle*
4. Você pode receber o aviso de Segurança do Windows. Clique **em Permitir** para continuar. A caixa de diálogo **Recursos do Windows** é exibida.

   [![Captura de tela da caixa de diálogo de alerta do Windows Security. O aviso diz que o Windows precisa de sua permissão para usar este programa. O botão Permitir está localizado na parte inferior.](installing-iis-on-windows-vista-and-windows-7/_static/image10.jpg)](https://learn.microsoft.com/pt-br/iis/install/installing-iis-7/installing-iis-on-windows-vista-and-windows-7/_static/image9.jpg)

   *Figura 5: caixa de diálogo Segurança do Windows*
5. Expanda **os Serviços de Informações da Internet**. Categorias adicionais de recursos do IIS são exibidas. Selecione **Os Serviços de Informações da Internet** para escolher os recursos padrão para instalação.

   [![Captura de tela da caixa de diálogo Recursos do Windows. Os Serviços de Informações da Internet estão realçados.](installing-iis-on-windows-vista-and-windows-7/_static/image12.jpg)](https://learn.microsoft.com/pt-br/iis/install/installing-iis-7/installing-iis-on-windows-vista-and-windows-7/_static/image11.jpg)

   *Figura 6: caixa de diálogo Recursos do Windows – IIS*
6. Expanda as categorias adicionais exibidas e selecione os recursos adicionais que você deseja instalar, como **Ferramentas de Gerenciamento da Web.**

   [![Captura de tela da caixa de diálogo Recursos do Windows. Os Serviços de Informações da Internet são selecionados e expandidos.](installing-iis-on-windows-vista-and-windows-7/_static/image14.jpg)](https://learn.microsoft.com/pt-br/iis/install/installing-iis-7/installing-iis-on-windows-vista-and-windows-7/_static/image13.jpg)

   *Figura 7: caixa de diálogo Recursos do Windows – Seleção de recursos do IIS*
7. Se você estiver instalando o IIS para fins de avaliação, talvez queira selecionar recursos adicionais para instalar. Marque as caixas de seleção para todos os recursos do IIS que você deseja instalar e clique **em OK** para iniciar a instalação.

   [![Captura de tela da caixa de diálogo Recursos do Windows. Ativar ou desativar recursos do Windows é o título. Uma lista de recursos é mostrada. Todos os recursos são verificados.](installing-iis-on-windows-vista-and-windows-7/_static/image16.jpg)](https://learn.microsoft.com/pt-br/iis/install/installing-iis-7/installing-iis-on-windows-vista-and-windows-7/_static/image15.jpg)

   *Figura 8: caixa de diálogo Recursos do Windows – Seleção de instalação*
8. O indicador de progresso é exibido.

   [![Captura de tela do indicador de progresso do Microsoft Windows. O texto diz Que aguarde enquanto os recursos estão configurados. Isso pode levar vários minutos.](installing-iis-on-windows-vista-and-windows-7/_static/image18.jpg)](https://learn.microsoft.com/pt-br/iis/install/installing-iis-7/installing-iis-on-windows-vista-and-windows-7/_static/image17.jpg)

   *Figura 9: Indicador de progresso*
9. Quando a instalação for concluída, a caixa de diálogo **Recursos do Windows** será fechada e o **Painel de Controle** será exibido.

   [![Captura de tela da home page do Painel de Controle. O menu programas é exibido.](installing-iis-on-windows-vista-and-windows-7/_static/image20.jpg)](https://learn.microsoft.com/pt-br/iis/install/installing-iis-7/installing-iis-on-windows-vista-and-windows-7/_static/image19.jpg)

   *Figura 10: Página Inicial do Painel de Controle*
10. O IIS agora está instalado com uma configuração padrão no Windows Vista ou windows 7. Para confirmar se a instalação foi bem-sucedida, digite a URL a seguir no navegador `http://localhost`.

    [![Captura de tela do Navegador da Web do Internet Explorer. U R L h t t p colon barra barra host local é gravado no navegador.](installing-iis-on-windows-vista-and-windows-7/_static/image22.jpg)](https://learn.microsoft.com/pt-br/iis/install/installing-iis-7/installing-iis-on-windows-vista-and-windows-7/_static/image21.jpg)

    *Figura 11: site padrão*
11. Em seguida, você pode usar o Gerenciador de Serviços de Informações da Internet para gerenciar e configurar o IIS. Para abrir o Gerenciador do IIS, clique em **Iniciar**, digite *inetmgr* na caixa **Programas e Arquivos de Pesquisa e** pressione ENTER.

    [![Captura de tela da página I S Manger. A home page do site padrão é mostrada.](installing-iis-on-windows-vista-and-windows-7/_static/image24.jpg)](https://learn.microsoft.com/pt-br/iis/install/installing-iis-7/installing-iis-on-windows-vista-and-windows-7/_static/image23.jpg)

    *Figura 12: Home page do site padrão*

Se você quiser usar ASP, Microsoft® ASP.NET ou PHP, instale os módulos necessários para hospedar essas páginas; isso pode ser feito durante a instalação do IIS ou após a conclusão da instalação.

## Usar a Configuração Autônoma para instalar o IIS 7.0 ou versões posteriores

O IIS também pode ser instalado autônomamente no Windows Vista. Para obter instruções detalhadas e scripts, consulte [Usando a instalação autônoma para instalar o IIS 7.0 e superior](install__installing-iis-7__using-unattended-setup-to-install-iis.md).

## Links para obter mais informações

[Instalação e implantação do IIS 7](https://technet.microsoft.com/library/ee692294(WS.10).aspx)

[Como instalar o ASP.NET 1.1 com o IIS7 e o Abobe no Vista e no Windows 2008](install__installing-iis-7__how-to-install-aspnet-11-with-iis-on-vista-and-windows-2008.md).

Instalando o IIS 7 no Vista.

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
