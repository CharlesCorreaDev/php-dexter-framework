# Como usar a compatibilidade do Metabase com o IIS 7 e superior | Microsoft Learn

> **Fonte / Source:** https://learn.microsoft.com/pt-br/iis/manage/managing-your-configuration-settings/how-to-use-metabase-compatibility-with-iis-7-and-above

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

# Como usar a compatibilidade do Metabase com o IIS 7 e superior

Comentários

por [Tobin Titus](https://github.com/tobint)

O IIS 7 e o IIS 8 permitem que os scripts de configuração herdados e os aplicativos continuem em execução. Há um componente de instalação opcional que habilita o sistema Metabase com suas interfaces programáticas: ABO (Objetos Base de Administração) e provedores ADSI e WMI integrados a ele. O sistema intercepta chamadas para a ABO e as mapeia para o novo sistema de configuração. Os dados são armazenados em applicationHost.config, mas o chamador do ABO obtem uma visualização legada da estrutura de configuração.

## Pré-requisitos

1. Verifique se o IIS está instalado no computador selecionando `http://LocalHost` no IE e veja se você obtém a página padrão "Em Construção". Se o IIS não estiver instalado, consulte o How-To de Instalação para obter instruções de instalação.
2. Verifique se você tem privilégios administrativos no computador: por padrão, você não os tem se estiver conectado como um usuário diferente da conta de Administrador interna, mesmo que esse usuário tenha sido adicionado ao grupo de Administradores local no computador (este é um novo recurso de segurança no Windows Server® 2008 e superior com o IIS, chamado LUA, que está além do escopo do IIS). Certifique-se de fazer logon como a conta de Administrador integrado ou invocar explicitamente aplicativos como o Administrador integrado conforme necessário, usando a ferramenta de linha de comando "runas". Por exemplo, para iniciar notepad.exe você pode executar este comando: "runas /user:administrator notepad.exe". Você será solicitado a solicitar a senha da conta administrador. É útil ter um prompt de comando com privilégios elevados, executando "runas /user:administrator cmd.exe". Cada aplicativo executado a partir desse prompt de comando também será elevado e você não precisará usar a sintaxe "runas" nesse prompt de comando.
3. Verifique se o arquivo de configuração mestre está com backup. Basta copiar applicationHost.config para um arquivo diferente, para que você possa restaurá-lo mais tarde. Você encontrará applicationHost.config no diretório inetsrv\, que, por sua vez, está no diretório do sistema. Observe que você precisará ser um administrador para fazer isso – consulte o ponto anterior acima.
4. Antes de começar, verifique se você está em um "estado limpo". Para fazer isso, reverta as alterações que você pode ter feito no arquivo applicationHost.config em exercícios anteriores. (Se você estiver usando uma imagem VPC, a maneira mais fácil de fazer isso é reiniciar a imagem sem salvar seu estado).
5. Também é recomendável que você desative mensagens de erro HTTP amigáveis no IE (Opções > de Ferramentas Avançadas>) para uma solução de problemas mais rápida.

Observação

Ao copiar texto de arquivos .html, você também copia caracteres ocultos. Quando você cola o texto em um editor, como o Visual Studio, ou em uma janela de caixa de comando, o texto pode aparecer como se tivesse sido copiado corretamente, mas o texto que você coleu pode não funcionar corretamente porque contém caracteres ocultos. Essa situação pode ser difícil de depurar.

A melhor maneira de copiar texto de arquivos .MHT é copiá-lo, colá-lo no Bloco de Notas e, em seguida, copiá-lo novamente do Bloco de Notas. Isso remove todos os caracteres ocultos. Se o texto for curto, às vezes é mais fácil apenas digitá-lo em vez de copiá-lo e colá-lo.

## Gravando uma configuração global usando a ABO

Nesta etapa, você aprenderá a alterar um valor em uma configuração global usando a interface AdminBaseObjects e tê-lo gravado no arquivo applicationHost.config. Você usará a ferramenta MBExplorer.exe para executar essa tarefa.

Primeiro, verifique se o componente de compatibilidade do Metabase do IIS está instalado no computador. Esse componente não é instalado por padrão. No Windows Server® 2008 e em builds acima, você pode usar a ferramenta Gerenciador do Servidor (Iniciar->Ferramentas Administrativas->Gerenciador do Servidor) e verificar o componente "Compatibilidade de Gerenciamento do IIS 6.0" para instalá-lo. Em um prompt de comando, verifique se o serviço NT IISADMIN está em execução, digitando "net start iisadmin". Você deve receber uma mensagem indicando que o IISADMIN já está em execução.

Em seguida, você precisa baixar a ferramenta MBExplorer da internet. Use o MSN Search para pesquisá-lo , ele direcionará você para o centro de download no Microsoft.com, onde você precisará baixar e instalar o Kit de Recursos do IIS 6.0. A ferramenta MBExplorer está incluída no kit de recursos. Após a instalação, você normalmente a encontrará em \Program Files\IIS Resources\Metabase Explorer\MBExplorer.exe.

![Captura de tela do I I S Metabase Explorer, mostrando uma ferramenta do M B Explorer sendo realçada.](how-to-use-metabase-compatibility-with-iis-7-and-above/_static/image1.png)

1. Executar MBExplorer.exe. Essa ferramenta funciona na parte superior da interface ABO (AdminBaseObjects), portanto, apresenta uma exibição ABO da hierarquia de configuração.
2. No painel esquerdo, navegue até o nível de LM > W3SVC. Esse é o nível global da hierarquia de configuração, em uma visão ABO.
3. Localize a propriedade **AuthFlags**.

   Dica

   É mais fácil localizar a propriedade se você classificar as propriedades clicando no cabeçalho da coluna Nome. O valor padrão é 1.
4. Altere o valor para um inteiro entre 1 e 7, inclusive.
5. Usando um editor de texto, como o Bloco de Notas, abra o arquivo ApplicationHost.config no seguinte local: `%windir%\system32\inetsrv\config\ApplicationHost.config`
6. Localize o grupo de seções de <autenticação>. As <seções de autenticação> são habilitadas de acordo com o valor definido. Por exemplo, se você definir **AuthFlags**=2, somente **BasicAuthentication** terá enabled="true" e outras seções de autenticação terão enabled="false". Isso ocorre porque "2" mapeia para "**AUTH\_BASIC**" no esquema do IIS 6.0.
7. Altere o valor em MBExplorer e atualize a exibição do arquivo ApplicationHost.config. Ao alterar a propriedade **AuthFlags** na metabase, você habilita e desabilitar indiretamente esquemas de autenticação no arquivo ApplicationHost.config.

## Escrevendo uma configuração de diretório virtual usando a ABO

Nesta etapa, você aprenderá a alterar um valor em um diretório virtual usando a ABO e a gravar o valor para applicationHost.config. Como você não está alterando uma configuração global, a camada de compatibilidade do ABO gera uma marca de localização no arquivo applicationHost.config, com um caminho que corresponde ao diretório virtual que você alterou. Observe que web.config arquivos não são tratados pelo componente de compatibilidade do Metabase.

![Captura de tela do IIS Metabase Explorer mostrando um Diretório Virtual sendo realçado.](how-to-use-metabase-compatibility-with-iis-7-and-above/_static/image5.png)

1. Execute a ferramenta MBExplorer.exe.
2. No painel esquerdo, navegue até o nível **LM**>**W3SVC**> 1 >**ROOT**. Esse é o aplicativo raiz no site padrão.
3. Defina um valor para a propriedade **AuthFlags** . Clique em ROOT no painel esquerdo, no menu Editar, selecione **Novo Registro DWORD** e insira 6000 como a ID do registro.
4. Isso cria uma propriedade **AuthFlags** nesse nível com o valor 0. Clique duas vezes na propriedade no painel direito e altere o valor para um inteiro entre 1 e 7, inclusive.
5. Usando um editor de texto, como o Bloco de Notas, abra o arquivo ApplicationHost.config no seguinte local: `%windir%\system32\inetsrv\config\ApplicationHost.config`
6. Na parte inferior do arquivo, observe um novo <caminho de localização="Site Padrão":> tag com as seções de autenticação habilitadas ou desabilitadas conforme o valor definido.

## Resumo

Neste documento, você aprendeu a habilitar e usar o recurso de compatibilidade do sistema de configuração. Você usou uma ferramenta herdada para alterar as configurações nos níveis global e de diretório virtual e tê-las gravadas em applicationHost.config. Talvez você queira usar outras ferramentas, como adsutil.vbs, para executar o mapeamento e o write-through. Talvez você queira verificar se seus scripts e aplicativos ABO/ADSI/WMI existentes continuam funcionando nesse ambiente. Você também pode experimentar a direção inversa: alterar valores em applicationHost.confige verificar se eles são refletidos no modo de exibição ABO no MBExplorer ou em qualquer outra ferramenta ou script.

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
