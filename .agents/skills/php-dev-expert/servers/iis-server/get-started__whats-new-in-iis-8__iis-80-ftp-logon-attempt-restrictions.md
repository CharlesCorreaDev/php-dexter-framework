# Restrições de tentativa de logon de FTP do IIS 8.0 | Microsoft Learn

> **Fonte / Source:** https://learn.microsoft.com/pt-br/iis/get-started/whats-new-in-iis-8/iis-80-ftp-logon-attempt-restrictions

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

# Restrições de tentativa de logon de FTP do IIS 8.0

Comentários

por [Robert McMurray](https://github.com/rmcmurray)

### Compatibilidade

| Versão | Observações |
| --- | --- |
| IIS 8.0 | Restrições de tentativa de logon ftp foram introduzidas no IIS 8.0. |
| IIS 7.5 | Não havia suporte para restrições de tentativa de logon ftp no IIS 7.0 ou no IIS 7.5. |
| IIS 7.0 |  |

## Problema

Uma vulnerabilidade possível para um servidor é um ataque de senha de força bruta por meio do serviço FTP. Como as contas usadas para FTP geralmente são contas de usuário físicas no sistema operacional host, teoricamente é possível adivinhar o nome de usuário administrativo depois de determinar o tipo de servidor FTP. Depois que um nome de conta for descoberto, um cliente mal-intencionado poderá se conectar a um servidor e tentar um ataque de força bruta nessa conta. (Por exemplo: "administrador" para sistemas Windows ou "raiz" para sistemas UNIX.)

No IIS 7.5, o serviço FTP introduziu APIs de extensibilidade que permitiam aos desenvolvedores criar provedores de autenticação personalizados, o que permite acesso a contas que não são do Windows ao FTP. Isso reduz significativamente a área de ataque de superfície para o serviço FTP, pois essas contas FTP não são contas válidas do Windows e, portanto, não têm acesso a recursos fora do serviço FTP. Usando os recursos de extensibilidade de autenticação FTP no IIS 7.5, a Microsoft forneceu uma maneira para os administradores reduzirem a possibilidade de ataques de força bruta para contas que não são do Windows criando um provedor de autenticação personalizado. Essas informações estão documentadas no seguinte artigo:

[*Como usar código gerenciado (C#) para criar um provedor de autenticação FTP com restrições de IP dinâmicas*](develop__developing-for-ftp__how-to-use-managed-code-c-to-create-an-ftp-authentication-provider-with-dynamic-ip-restrictions.md)

## Solução

No IIS 8.0 para Windows Server 2012, a Microsoft adicionou um recurso de segurança de rede interno que fornece essa funcionalidade para todos os logons sem a necessidade de criar um provedor de autenticação personalizado. Neste passo a passo, examinaremos as etapas necessárias para habilitar as restrições de logon do FTP para evitar ataques de força bruta em seu servidor.

## Instruções passo a passo

#### Pré-requisitos:

- Computador windows server 2012 com IIS 8.0 e o serviço FTP já instalado.

#### Soluções alternativas para bugs conhecidos:

Não há bugs conhecidos para esse recurso no momento.

### Configurar o FTP para evitar ataques de força bruta

O serviço FTP pode ser configurado para negar o acesso ao serviço FTP com base no número de vezes que um cliente FTP não consegue autenticar dentro de um período de tempo especificado pelo usuário. Depois que o número de tentativas de logon com falha for atingido, o servidor fechará a conexão FTP à força e o endereço IP dos clientes FTP será impedido de acessar o serviço FTP durante o tempo limite.

Para configurar o serviço FTP para negar que usuários mal-intencionados acessem seu serviço FTP, use as seguintes etapas:

1. Faça logon como administrador em seu computador Windows Server 2012.
2. Abra o **Gerenciador dos Serviços de Informações da Internet (IIS**).
3. Realce o nome do servidor no painel **Conexões** e clique duas vezes em **Restrições de Tentativa de Logon ftp** na lista de recursos.  
   [![Captura de tela do painel Conexões com foco na opção Restrições de Tentativas de Logon do FTP.](iis-80-ftp-logon-attempt-restrictions/_static/image2.png)](https://learn.microsoft.com/pt-br/iis/get-started/whats-new-in-iis-8/iis-80-ftp-logon-attempt-restrictions/_static/image1.png)
4. Marque a caixa para **Habilitar Restrições de Tentativas de Logon FTP** e especifique o número de tentativas de logon com falha e o período de tempo que o serviço FTP utiliza para determinar a necessidade de bloquear o acesso para clientes FTP.  
   [![Captura de tela das Restrições de Tentativa de Logon do FTP.](iis-80-ftp-logon-attempt-restrictions/_static/image4.png)](https://learn.microsoft.com/pt-br/iis/get-started/whats-new-in-iis-8/iis-80-ftp-logon-attempt-restrictions/_static/image3.png)
5. Clique em **Aplicar**.

A opção "Gravar somente no log" não bloqueia tentativas de logon. Em vez disso, registra que a condição foi atendida. Em seguida, o administrador de TI pode tentar parâmetros de configuração diferentes para avaliar como as configurações afetam seus usuários antes de aplicá-los.

## Resumo

Neste passo a passo, você analisou a configuração do serviço FTP para negar que clientes mal-intencionados ataquem seu servidor FTP configurando o novo recurso de Restrições de Tentativa de Logon ftp no Windows Server 2012.

Observe que as restrições de tentativa de logon ftp são configurações no nível do servidor; você não pode definir restrições de logon separadas por site. Como os invasores estão tentando obter acesso ao servidor e não a um único site, o serviço FTP bloqueará o acesso de usuários mal-intencionados no nível do servidor.

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
