# Instalando o Snap-in do PowerShell do IIS 7.0 | Microsoft Learn

> **Fonte / Source:** https://learn.microsoft.com/pt-br/iis/manage/powershell/installing-the-iis-powershell-snap-in

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

# Instalando o Snap-in do PowerShell do IIS 7.0

Comentários

por [Thomas Deml](https://github.com/thomasdeml)

## Introdução

No passo a passo a seguir, você aprenderá a instalar o Snap-in do IIS PowerShell e como iniciar o Console de Gerenciamento do IIS PowerShell.

### Pré-requisitos

O Snap-in do PowerShell do IIS requer os seguintes requisitos:

- Windows Server 2008, Windows Server 2008 R2, Windows Vista Service Pack 1 ou Windows 7
- Microsoft PowerShell 1.0 ou 2.0

### Para instalar o Snap-in do IIS PowerShell:

1. Baixe o Snap-in do IIS PowerShell versão x86 ou x64.
2. Execute o arquivo MSI para instalar o Snap-in do IIS PowerShell.

### Para usar o Snap-in do IIS PowerShell

Snap-ins do PowerShell, como o Snap-in do IIS PowerShell, precisam ser registrados no PowerShell. Há duas maneiras de fazer isso:

#### Registro automático usando o Console de Gerenciamento do IIS PowerShell

A instalação do Snap-in do PowerShell do IIS irá criar um novo atalho no Menu de Programas. Ao iniciar este atalho, o Snap-in do IIS PowerShell será registrado automaticamente. Clique no Menu Iniciar – selecione "Todos os Programas" – "Extensões do IIS 7.0" – "Console de Gerenciamento do IIS PowerShell". O prompt da nova janela de comando do PowerShell é definido como "IIS:" – a raiz do namespace snap-in do IIS.

#### Registro Manual

Se você quiser usar o Snap-in do IIS PowerShell em uma janela de comando existente do PowerShell, será necessário registrar o snap-in do IIS manualmente. Você pode fazer isso simplesmente executando o arquivo IISConsole.PSC1 localizado no diretório "$env:programfiles\IIS\PowerShellProvider":

```
PS C:\> & "$env:programfiles\IIS\PowerShellSnapin\iisConsole.psc1"
```

## Uma palavra sobre segurança

### Controle de acesso do usuário

Você precisa de privilégios de administrador para gerenciar a configuração do IIS. Isso significa que você precisa executar as janelas de comando do PowerShell com privilégios elevados. Certifique-se de sempre iniciar o PowerShell por meio do item de menu "Executar como Administrador".

### Políticas de execução do PowerShell

Você pode ver o seguinte erro dependendo das Permissões de Execução do PowerShell.

```
Windows PowerShell
Copyright (C) 2006 Microsoft Corporation. All rights reserved.
Do you want to run software from this untrusted publisher?
File C:\Program Files\IIS\PowerShellProvider\iisprovider.types.ps1xml is published by CN=Microsoft
Corporation, O=Microsoft Corporation, L=Redmond, S=Washington, C=US and is not trusted on your
system. Only run scripts from trusted publishers.
[V] Never run  [D] Do not run  [R] Run once  [A] Always run  [?] Help (default is "D"):
```

Embora os arquivos do Provedor do IIS PowerShell estejam todos assinados, o PowerShell confia apenas em scripts assinados por um "Fornecedor Confiável" quando sua política de execução é definida como "Restrito". Há duas maneiras de corrigir esse problema.

#### Permitir mais flexibilidade na política de execução

Se você vir o erro acima, sua política de execução provavelmente será definida como "Restrito". Para confiar em outro código, você pode definir a política de execução como "RemoteSigned", que permite a execução de scripts locais sem a necessidade de uma assinatura digital. Execute o seguinte comando em uma janela elevada do PowerShell:

```
PS C:\> Set-ExecutionPolicy RemoteSigned
```

Execute o comando a seguir se quiser saber mais sobre políticas de assinatura e execução.

```
help about_signing
```

#### Confiar no Certificado de Assinatura de Código da Microsoft na Lista de Editores Confiáveis

Para confiar nos scripts e binários do Provedor do IIS, você pode pressionar "A" na caixa de diálogo acima, e isso adicionará o certificado de assinatura de código usado pelo Snap-in do IIS à lista de Publicadores Confiáveis. Você pode obter uma lista de "Editores Confiáveis" com o seguinte comando:

```
dir cert:\CurrentUser\TrustedPublisher | fl
```

## Resumo

Neste passo a passo, você aprendeu a instalar automaticamente ou manualmente o Snap-in do IIS PowerShell.

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
