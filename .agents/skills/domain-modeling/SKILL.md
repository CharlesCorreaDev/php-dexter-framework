---
name: domain-modeling
description: Modelagem de domínio, glossário ubíquo, entidades ricas em validação e integridade de dados.
---

# Skill: Domain Modeling 🧩

## Padrões de Domínio no Dexter
1. **Linguagem Ubíqua:** Nomenclaturas consistentes em pt-BR entre negócio, classes de serviço, banco de dados (`SQL.md`) e interface.
2. **Entidades Anêmicas vs Serviços:** Entidades apenas transportam estado validado; Services orquestram as transições de domínio e fluxos de negócio.
3. **Imutabilidade:** Utilizar `readonly classes` do PHP 8.4+ para objetos de valor (Value Objects) e DTOs de transporte.

