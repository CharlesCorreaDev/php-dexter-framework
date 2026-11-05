# Gerenciamento Remoto Delegado | Microsoft Learn

> **Fonte / Source:** https://learn.microsoft.com/pt-br/iis/overview/delegated-remote-management

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

# Gerenciamento Remoto Delegado

Comentários

O IIS fornece suporte interno para delegar tarefas de administração aos proprietários do site, permitindo que as tarefas básicas de configuração e gerenciamento sejam executadas com segurança e sem intervenção administrativa.

## Configuração Distribuída

A configuração do IIS é um XML limpo e bem estruturado que é fácil de ler e editar. Os valores de configuração são armazenados como cadeias de caracteres fáceis de entender; por exemplo, máscaras de bits ou valores inteiros agora são persistentes como enumerações fáceis de entender. A configuração do IIS compartilha uma gramática e sintaxe semelhantes à configuração do ASP.NET e também pode ser armazenada juntamente com a configuração do ASP.NET nos arquivos web.config.

Os administradores têm controle total sobre onde a configuração reside. Por padrão, o IIS armazena a configuração global e os padrões do site centralmente, em um arquivo chamado ApplicationHost.config. Esse arquivo contém informações de bloqueio de configuração que determinam se as substituições de configuração podem ser armazenadas juntamente com a configuração do ASP.NET em arquivos web.config. A configuração do site e do aplicativo geralmente precisa se mover junto com o código e o conteúdo que compõem o site, pois o site é publicado do desenvolvimento para servidores de teste ou de produção. O IIS permite que a configuração seja armazenada em um arquivo web.config no mesmo diretório que o conteúdo do site ou aplicativo, que pode ser facilmente copiado de computador para computador. Arquivos Web.config também podem ser armazenados em um servidor de arquivos de back-end e referenciados a partir de vários servidores Web de front-end, evitando problemas de replicação dispendiosa e sujeita a erros, assim como de sincronização manual.

## Administração Delegada

![Captura de tela da janela Delegação de Recursos do Gerenciador do IIS com o Nome realçado.](delegated-remote-management/_static/delegatedremotemanagement1-small.png)
Com o IIS, os administradores têm controle avançado e flexível sobre a configuração e o gerenciamento do servidor Web. Usando a função de Delegação de Recursos interna do Gerenciador do IIS, os administradores podem delegar a administração de sites e aplicativos a não administradores e definir a política de nível de recurso para controlar se os proprietários de sites têm acesso somente leitura, leitura/gravação ou restrito a qualquer recurso específico.

Embora opcional, delegar o acesso a não administradores tem muitos benefícios importantes. Habilitar o acesso restrito básico de um desenvolvedor ao seu site da Web permite o autoatendimento de tarefas básicas de administração, reduzindo a necessidade de intervenção administrativa para tarefas básicas de configuração. A delegação de recursos também permite que os desenvolvedores façam solução de problemas e diagnósticos básicos, relacionados à configuração, sem a necessidade de suporte adicional. Habilitar a administração delegada também permite que os proprietários de sites publiquem as configurações junto com o aplicativo, reduzindo o tempo para colocar um aplicativo novo ou atualizado online. Por exemplo, os administradores podem decidir delegar o controle administrativo da configuração de documento padrão ou outras propriedades usadas para esse site. Isso permite que o proprietário do site configure qual documento é atendido por padrão, permitindo que ele altere essa configuração ao longo do tempo sem solicitar ajuda do Administrador e até fornece a eles uma maneira de implantar um novo documento padrão de forma rápida e fácil.

Os administradores também podem bloquear configurações específicas para que não possam ser alteradas. O bloqueio de configuração garante que a política de segurança, como a capacidade de executar scripts, não possa ser anulada por um desenvolvedor de conteúdo que tenha sido concedido acesso administrativo ao site.

## Administração Segura e Remota

A administração remota do IIS é feita via HTTP/SSL, portanto, ela pode percorrer facilmente os firewalls, ao mesmo tempo em que protege informações confidenciais criptografando todos os dados que passam entre a ferramenta de gerenciamento e o servidor. Usando o Gerenciador do IIS, é fácil configurar em qual porta o serviço de administração remota é executado e em qual certificado deve ser usado para habilitar a criptografia SSL. Seja gerenciando um servidor local ou remoto, o Gerenciador do IIS fornece a mesma experiência de administração avançada de maneira segura e fácil de usar.

![Captura de tela da janela do Gerenciador do Serviço de Gestão do IIS com o botão de opção somente credenciais do Windows selecionado.](delegated-remote-management/_static/delegatedremotemanagement2-small.png)
O Gerenciador do IIS para Administração Remota fornece aos desenvolvedores e administradores da Web uma maneira segura e compatível com firewall de gerenciar remotamente servidores Web IIS por meio de uma conexão segura pela Internet, usando o Windows Vista, Windows XP ou Windows Server 2003. O Gerenciador do IIS para Administração Remota oferece a mesma interface aprimorada disponível no Windows Server 2008 para gerenciar e configurar o servidor Web. Os administradores de servidor podem executar quase qualquer tarefa remotamente como se estivessem sentados na frente do servidor. Os administradores de servidor podem usar o recurso de administração remota do Gerenciador do IIS para adicionar contas de usuário e permitir que proprietários de sites e desenvolvedores de aplicativos Web se conectem, modifiquem e exibam configurações de sites ou aplicativos para os quais foram delegadas permissões. Os usuários dos serviços de hospedagem compartilhada permitem que suas alterações afetem apenas seu site, não outros sites ou todo o servidor.

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
