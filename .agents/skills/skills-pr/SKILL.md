---
name: skills-pr
description: Estruturação padronizada de Pull Requests com foco em resumo visual, prova de funcionamento e raio de impacto (blast radius).
---

# Skill: Pull Request Standards (PR) 🔀

## Objetivo
Criar descrições de Pull Requests informativas, verificáveis e seguras contra regressões.

## Template Mandatório
```markdown
## 📌 O que mudou?
Resumo conciso das alterações implementadas.

## 🧪 Como foi testado? (Prova de Funcionamento)
Comandos executados, testes em `/testes` que passaram e logs de saída.

## 💥 Raio de Impacto (Blast Radius)
- [ ] Altera schema de banco? (Exige migration reversível)
- [ ] Altera assinaturas públicas de métodos do Core?
- [ ] Adiciona dependências no composer.json?
- [ ] Impacta segurança ou middlewares?
```

