# Serviço Auxiliar do ApplicationHost | Microsoft Learn

> **Fonte / Source:** https://learn.microsoft.com/pt-br/iis/install/installing-iis-7/applicationhost-helper-service

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

# Serviço Auxiliar do ApplicationHost

Comentários

por [Saad Ladki](https://twitter.com/saadladki)

## Introdução

O Serviço Auxiliar do ApplicationHost no IIS 7.0 e acima hospeda a funcionalidade do IIS necessária mesmo se o IIS não estiver em execução. Atualmente, esse serviço hospeda a seguinte funcionalidade:

- Histórico de configuração
- Mapeamento de conta do Pool de Aplicativos

## Histórico de configuração

Em versões anteriores do IIS, você poderia fazer backup das configurações de metabase e restaurar essas configurações sempre que necessário. O IIS 7.0 e superior tem funcionalidade equivalente para fazer backup das configurações.

O IIS 7.0 e superior fornece um recurso de histórico de configuração que permite que você volte para uma versão anterior da configuração sempre que desejar. O Serviço Auxiliar do ApplicationHost habilita essa funcionalidade salvando o arquivo ApplicationHost.config para separar subdiretórios de histórico de configuração em intervalos especificados. Se você cometer um erro ao modificar o arquivo ApplicationHost.config, por exemplo, poderá restaurar uma versão anterior do arquivo de um subdiretório de histórico de configuração copiando a versão anterior para o `%windir%\system32\inetsrv\config` diretório.

## Mapeamento de conta do pool de aplicativos

Além de fazer backup das configurações, o Serviço Auxiliar do ApplicationHost também fornece mapeamento de conta do Pool de Aplicativos. Por exemplo, se você quiser bloquear diretórios de conteúdo para um pool de aplicativos específico, o recurso de mapeamento de conta no Serviço Auxiliar do ApplicationHost permite que você use nomes amigáveis usando a interface do usuário da ACL (lista de controle de acesso) no Windows Explorer ou a ferramenta de linha de comando ICACLS em vez de usar SIDs (identificadores de segurança) para bloquear seus diretórios. O Serviço Auxiliar do ApplicationHost mapeia os SIDs para seus nomes amigáveis ao usuário correspondentes e vice-versa.

## Independente de tempo de execução

O Serviço Auxiliar do ApplicationHost é um serviço independente de runtime. Ele não exige que o Serviço de Ativação de Processo do Windows (WAS) ou o Serviço de Publicação da Web (SERVIÇO WWW) operem. Ele não depende de nenhum outro serviço e é iniciado automaticamente quando você reinicia o computador. Se o Serviço Auxiliar do ApplicationHost for interrompido por qualquer motivo, o histórico de configurações e o mapeamento da conta do Pool de Aplicativos não funcionarão.

## Installation

O Serviço Auxiliar do ApplicationHost é instalado sempre que o IIS 7.0 ou superior é instalado. Após a instalação do Serviço Auxiliar do ApplicationHost, o `%systemdrive%\inetpub\history` diretório é criado, por padrão, para armazenar os subdiretórios de configuração. Você pode alterar esse local padrão alterando o valor do atributo **ConfigHistoryPath** .

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
