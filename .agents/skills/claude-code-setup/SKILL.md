---
name: claude-code-setup
description: Guia e padronização de setup e fluxos do Claude Code CLI e agentes integrados para o Dexter Framework.
---

# Claude Code Setup - Dexter Framework ⚡

## 1. Visão Geral
Esta skill padroniza o ambiente de execução e as regras operacionais para o **Claude Code CLI** no ecossistema do **Dexter Framework**.

## 2. Padrões Operacionais
- **Ponto de Entrada:** O arquivo `claude.md` na raiz redireciona para `.agents/agent.md`.
- **Modo de Operação:** Mandatório o uso de **Code Mode (Code-as-Action)**. Interações com o projeto devem ser realizadas via inspeção direta de arquivos, execução de testes no diretório `/testes` e código autoverificável.
- **Segurança de Commits:** Jamais executar `git commit`, `git push` ou `git tag` sem aprovação prévia e explícita do desenvolvedor.
- **Caminhos:** Proibição de caminhos absolutos (`C:\`, `D:\`, `/home/`). Use sempre links e paths relativos.
- **Idioma e Fuso Horário:** Todo o código, comentários e respostas devem estar em Português do Brasil (pt-BR) com fuso horário `America/Sao_Paulo`.
- **Cabeçalho Obrigatório:** Todo arquivo PHP novo deve receber o cabeçalho oficial de autoria de Charles Corrêa.

