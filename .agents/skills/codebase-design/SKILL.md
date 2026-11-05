---
name: codebase-design
description: Padrões de arquitetura, limites modulares, separação de responsabilidades e módulos profundos.
---

# Skill: Codebase Design 🏗️

## Princípios para o Dexter Framework
1. **Módulos Profundos (Deep Modules):** Interfaces simples e limpas por fora, que ocultam alta complexidade e abstração por dentro.
2. **Inversão de Dependências:** O Core e os Controllers dependem de abstrações (interfaces/contratos) e não de implementações concretas de terceiros.
3. **Limites Rígidos:** A camada de View nunca consulta o banco de dados; Repositórios nunca conhecem a requisição HTTP.

