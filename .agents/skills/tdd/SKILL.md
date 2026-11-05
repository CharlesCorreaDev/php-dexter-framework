---
name: tdd
description: Ciclo Red-Green-Refactor obrigatório para serviços, utilitários e regras de negócio do Dexter Framework.
---

# Skill: Test-Driven Development (TDD) 🧪

## O Ciclo Sagrado (Red-Green-Refactor)
1. **Vermelho (Red):** Escrever o teste unitário/integração na pasta `/testes` especificando o comportamento esperado. O teste deve falhar.
2. **Verde (Green):** Escrever a implementação mínima e estrita em PHP 8.4+ para fazer o teste passar.
3. **Refatoração (Refactor):** Limpar o código, remover duplicações (DRY), melhorar tipagem e otimizar sem quebrar o teste.

> **Regra do Framework:** Nenhum serviço ou handler de rota entra na base de código sem seu teste associado passando em `/testes`.

