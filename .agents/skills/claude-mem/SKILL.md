---
name: claude-mem
description: Sistema de persistência, indexação e sincronização de memória de longo prazo para Claude Code e agentes de IA no Dexter Framework.
---

# Claude Mem - Dexter Framework 🧠

## 1. Visão Geral
Esta skill gerencia a persistência contínua de memória para sessões de desenvolvimento com o Claude Code e outros agentes de IA no **Dexter Framework**. Ela garante que decisões arquiteturais, bugs corrigidos, regras de governança e histórico de implementação nunca se percam entre sessões.

## 2. Estrutura de Memória
A memória do projeto é mantida em duas frentes complementares:

### 2.1. Memória Local Versionada (`.agents/memory/`)
- `sessoes/`: `AAAA-MM-DD_topico.md` — Resumo estruturado do que foi debatido e decidido.
- `implementacoes/`: `AAAA-MM-DD_feature.md` — Detalhes dos arquivos alterados, padrões e contratos.
- `erros/`: `AAAA-MM-DD_descricao.md` — Análise de causa raiz, bug report e solução aplicada.

### 2.2. Memória do Projeto no Claude CLI (`~/.claude/projects/`)
Localizada em:
`~/.claude/projects/d--ProjetosPHP-Dexter-Framework/memory/MEMORY.md`

## 3. Protocolo de Sincronização Obrigatório
Ao final de qualquer tarefa ou marco significativo:
1. Atualize o arquivo local em `.agents/memory/sessoes/`.
2. Se houver novas diretrizes de engenharia ou arquitetura, sincronize o `MEMORY.md`.
3. Garanta que todas as referências apontem para caminhos relativos.

