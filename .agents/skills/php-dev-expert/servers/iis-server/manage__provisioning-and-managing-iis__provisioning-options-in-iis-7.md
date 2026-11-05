# Opções de provisionamento no IIS 7 | Microsoft Learn

> **Fonte / Source:** https://learn.microsoft.com/pt-br/iis/manage/provisioning-and-managing-iis/provisioning-options-in-iis-7

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

# Opções de provisionamento no IIS 7

Comentários

por [Walter Oliver](https://github.com/walterov)

## Tabela de opções

Há várias maneiras de criar e gerenciar sites. A tabela a seguir lista as opções que estão disponíveis no momento, juntamente com as vantagens e desvantagens de cada um.

| Método de provisionamento | Descrição | Vantagens | Desvantagens |
| --- | --- | --- | --- |
| **Interface do usuário (interface do usuário)****/Delegação remota** | Use o Gerenciador do IIS, a interface do usuário de gerenciamento que vem com o IIS, para configurar as propriedades mais comuns no applicationhost.config. Abra as folhas de propriedades de um serviço, site ou diretório virtual e altere os valores. As alterações ocorrem imediatamente sem a necessidade de parar e iniciar o servidor. | Quando você cria um site ou diretório virtual ou quando configura um recurso com mais de uma propriedade, a interface do usuário do Gerenciador do IIS define todas as propriedades de suporte. O Gerenciador do IIS informa se um novo valor é inválido. | O gerenciamento de configurações de servidor IIS grandes ou vários servidores pela Internet pode ser lento e complicado. Nem todas as propriedades de configuração podem ser acessadas na interface do usuário. |
| editor de texto | Use um editor de texto, como o Bloco de Notas, para editar diretamente o arquivo applicationhost.config enquanto o IIS estiver em execução. As entradas são sensíveis às maiúsculas e minúsculas. | Você pode alterar várias propriedades ou criar novos nós em uma instância sem precisar abrir e fechar várias folhas de propriedades. | É fácil corromper um servidor IIS usando editar durante a execução. Se suas edições incluirem XML que não está formatado corretamente, o IIS não poderá ler o applicationhost.config e o último arquivo de histórico deverá ser restaurado. Se suas edições incluirem uma configuração inválida que não esteja em conformidade com as regras no esquema, um erro será registrado no visualizador de eventos, mas o restante do IIS poderá ser executado. A herança de propriedades deve ser levada em consideração ao cortar e colar partes do applicationhost.config. A seção que você cola pode herdar propriedades de nós pais e transmitir propriedades a nós filhos. Se você estiver usando a edição enquanto estiver em execução pela rede e a conexão falhar, poderá acabar com um applicationhost.config inválido. Usar a edição enquanto estiver em execução em vários servidores em uma fazenda de servidores Web leva tanto tempo quanto usar a interface do usuário. |
| **AppCmd.exe** | Use a ferramenta de linha de comando para fazer alterações de configuração rapidamente em um servidor IIS. | As ferramentas foram desenvolvidas para fornecer soluções para as tarefas de administração mais populares. | ? |
| **ADSI (Interfaces de Serviço do Active Directory)** | Use ADSI para configurar programaticamente o IIS em um script ou programa compilado. As alterações ocorrem imediatamente sem a necessidade de parar e iniciar o servidor. | A configuração de sites grandes ou vários servidores com ADSI é rápida e eficiente. ADSI é scriptável. Você pode configurar o IIS 4.0, o IIS 5.0, o IIS 5.1 e o IIS 6.0, o IIS 7.0 com o modo compatível com o IIS 6.0 habilitado com o ADSI, desde que você use a verificação de erros que possa lidar com objetos e propriedades ausentes. Você pode estender o esquema do IIS com ADSI, embora não seja recomendável. | Se você criar um site ou diretório virtual ou usar uma propriedade que dependa de outras pessoas, deverá garantir que você saiba quais propriedades de suporte precisam ser criadas e definidas também. Disponível apenas para o IIS 7.0 se o modo compatível com o IIS 6.0 estiver habilitado. Difícil de usar. |
| **Instrumentação de Gerenciamento do Windows (WMI)** | Use o WMI para configurar programaticamente o IIS em um script ou programa compilado. As alterações ocorrem imediatamente sem parar e iniciar o servidor. | A configuração de sites grandes ou vários servidores com WMI é rápida e eficiente. O WMI é passível de scripting. | Se você criar um site ou diretório virtual ou usar uma propriedade que dependa de outras pessoas, deverá garantir que você saiba quais propriedades de suporte precisam ser criadas e definidas também. Difícil de usar. |
| **ABO (Objetos Base do Administrador)** | Use o ABO para configurar programaticamente o IIS em um programa compilado escrito em C, C++ou Visual Basic 6.0. | É mais rápido do que usar ADSI ou WMI porque os provedores ADSI e WMI são wrappers para ABO. | Se você criar um site ou diretório virtual ou usar uma propriedade que dependa de outras pessoas, deverá garantir que você saiba quais propriedades de suporte precisam ser criadas e definidas também. A ABO não é scriptável. Os aplicativos ABO só podem ser gravados no C++ ou no Visual Basic 6.0. Como a ABO acessa o IIS no nível mais baixo, é mais difícil usar do que ADSI ou WMI porque não há métodos que compactem várias linhas de código ABO em uma chamada de método. Além disso, não há proteções para impedir que você defina configurações inválidas. Não disponível para o IIS 7.0. |
| **API gerenciada:** | Use APIs gerenciadas no Microsoft.Web.Administration para configurar programaticamente o IIS em qualquer aplicativo .net. | A configuração de sites grandes ou vários servidores é rápida e eficiente. Gerenciado, mais rápido e remotamente usando RPC. O MWA pode criar 100.000 sites em 62 segundos (1600 sites/s) | Só pode ser usado na plataforma Windows. Muitos objetos não são expostos como objetos de tipo forte, você precisa entender as APIs inferiores para habilitar a configuração de determinados objetos e propriedades. Requer RPC para configuração de servidor remoto. |
| **Automação OLE:** | OLE Automation ProgId=Microsoft.ApplicationHost.WritableAdminManager pode ser usado em Jscript e VBScript. | A configuração de sites grandes ou vários servidores é rápida e eficiente. Na verdade, é um pouco mais rápido que o MWA e também pode ser acessado remotamente. | Precisa entender as APIs inferiores para habilitar a configuração de determinados objetos e propriedades. Requer RPC para configuração de servidor remoto. |

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
